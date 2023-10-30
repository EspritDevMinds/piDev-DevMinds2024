<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/list', name: 'list_author')]
    public function listAuthor()
    {
        $authors = array(
            array('id' => 1, 'username' => ' Victor Hugo','email'=> 'victor.hugo@gmail.com', 'nb_books'=> 100),
            array ('id' => 2, 'username' => 'William Shakespeare','email'=>
                'william.shakespeare@gmail.com','nb_books' => 200),
            array('id' => 3, 'username' => ' Taha Hussein','email'=> 'taha.hussein@gmail.com','nb_books' => 300),
        );

        return $this->render("author/list.html.twig",
            array('tabAuthors'=>$authors));
    }


    #[Route('/listAuthor', name: 'authors')]
    public function list(Request $request,AuthorRepository $repository)
    {
        $minBooks = $request->query->get('min_books');
        $maxBooks = $request->query->get('max_books');
        if ($minBooks !== null && $maxBooks !== null) {
            $authors = $repository->MinMaxBook($minBooks, $maxBooks);
        }else {
        $authors = $repository->findAll();
        }

        return $this->render(view:"author/listAuthors.html.twig",
            parameters: array(
             'tabAuthors'=>$authors,
             'minBooks' => $minBooks,
             'maxBooks' => $maxBooks,
        ));
    }

   /* #[Route('/add', name: 'add_authors')]
    public function addAuthor(ManagerRegistry $managerRegistry)
    {
        $author= new Author();
        $author->setEmail("author6@gmail.com");
        $author->setUsername("author6");
       // $em= $this->getDoctrine()->getManager();
        $em= $managerRegistry->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("authors");

   } 
   #[Route('/addAuthor', name: 'add_authors')]
   public function add ( Request $request ,ManagerRegistry $managerRegistry) 
   {
    $author= new Author ();
    $form= $this-> createForm (AuthorType::class,$author);
    $form->add('Ajouter',type:SubmitType::class);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid())
    {
        $em= $managerRegistry->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("authors");
    }
    return $this->render('author/Add.html.twig',['f'=>$form->createView()] );
   }*/
   #[Route('/addAuthor', name: 'addAuthor')]
    public function addAuthor(Request $request,ManagerRegistry $managerRegistry)
    {
       $author= new Author();
       $form= $this->createForm(AuthorType::class,$author);
       $form->add('Ajouter',type:SubmitType::class);
       $form->handleRequest($request);
       if($form->isSubmitted()){
        $em= $managerRegistry->getManager();
        $em->persist($author);
       $em->flush();
       return $this->redirectToRoute("authors");
       }
       return $this->renderForm("author/add.html.twig" ,array('formulaireAuthor'=>$form));
}
    

    #[Route('/update/{id}', name: 'update_authors')]
    public function updateAuthor($id,AuthorRepository $repository,ManagerRegistry $managerRegistry)
    {
        $author= $repository->find($id);
        $author->setEmail("author7@gmail.com");
        $author->setUsername("author7");
        // $em= $this->getDoctrine()->getManager();
        $em= $managerRegistry->getManager();
        $em->flush();
        return $this->redirectToRoute("authors");
    }
    #[Route('/listmail', name:'list_mail')]
    public function listByMail(AuthorRepository $authorRepository ){
        $authors= $authorRepository->listAuthorByEmail();
        return $this->render("author/authorByEmail.html.twig", [
            'authors' => $authors,]);
    }

    #[Route('/deletezero', name: 'deleteZero')]
    public function DeleteAuthorsZero(AuthorRepository $authorRepository,ManagerRegistry $managerRegistry): Response
    {
        $deletedAuthorsCount = $authorRepository->ZeroBooks();
        $em= $managerRegistry->getManager();

        $em->flush();
        return $this->redirectToRoute("authors");

    }
    #[Route('/remove/{id}', name: 'remove_authors')]
    public function deleteAuthor(AuthorRepository $repository,$id,
                                 ManagerRegistry $managerRegistry)
    {
        $author= $repository->find($id);
        $em = $managerRegistry->getManager();
        $em->remove($author);
        $em->flush();
        return $this->redirectToRoute("authors");
    }
}
