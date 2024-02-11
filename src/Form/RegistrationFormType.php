<?php

// src/Form/RegistrationFormType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType; // Ajout de l'import pour le champ de type date
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Regex;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control'
                ], 'label' => 'E-mail'
            ])
            ->add('lastname', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Lastname'
            ])
            ->add('firstname', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Firstname'
            ])
            ->add('username', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Username'
            ])
            ->add('speciality', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Speciality'
            ])
            ->add('city', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'City'
            ])

            ->add('cin', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Cin',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d{8}$/',
                        'message' => 'Cin must be exactly 8 digits',
                    ]),
                ],
            ])      

            ->add('birthday', DateType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Birthday',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                // optionnel : définir une plage de dates autorisées
                'years' => range(date('Y') - 100, date('Y') - 18), // Autorise les années de l'année actuelle à 100 ans en arrière (de l'âge de la majorité à 100 ans)
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
///role 
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'User' => 'ROLE_USER',
                    'Coach' => 'ROLE_COACH',
                    'Nutritionist' => 'ROLE_NUTRITIONIST',
                ],
                'mapped' => false, // Ne pas mapper ce champ à une propriété de l'entité User
                'label' => 'I want to sign up as a',
            ])

            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password',
                'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                'label' => 'Password'
            ]);
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
