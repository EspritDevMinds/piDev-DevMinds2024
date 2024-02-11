<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;


class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    // RegistrationController.php

public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
{
    $user = new User();
    $form = $this->createForm(RegistrationFormType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Récupérer les données du formulaire
        $formData = $form->getData();

        // Créer un tableau vide pour stocker les rôles
        $roles = [];

        // Ajouter le rôle sélectionné dans le formulaire
        $selectedRole = $formData->getRole();
        if ($selectedRole !== null) {
            $roles[] = $selectedRole;
        }

        // Ajouter le rôle de base ROLE_USER
        $roles[] = 'ROLE_USER';

        // Attribuer les rôles à l'utilisateur
        $user->setRoles($roles);

        // Encoder le mot de passe
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            )
        );

        // Enregistrer l'utilisateur en base de données
        $entityManager->persist($user);
        $entityManager->flush();

        // Redirection après l'inscription
        return $userAuthenticator->authenticateUser(
            $user,
            $authenticator,
            $request
        );
    }

    // Afficher le formulaire d'inscription
    return $this->render('registration/register.html.twig', [
        'registrationForm' => $form->createView(),
    ]);
}

}
