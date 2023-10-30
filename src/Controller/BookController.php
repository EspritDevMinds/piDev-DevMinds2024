<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

   #[Route('/listBooks', name: 'list_book')]
    public function list(BookRepository $repository)
    {
        $books = $repository->findAll();
        return $this->render("book/listBooks.html.twig", array( 'tabBooks'=>$books));
        
        /*  return $this->render("book/list.html.twig",
            array('books'=>$repository->findBy(['published'=>false])));*/
 }  

   #[Route('/addBook', name: 'add_book')]
   public function addBook( Request  $request,ManagerRegistry  $managerRegistry)
   {
       $book = new Book();
       $form= $this->createForm(BookType::class,$book);
       $form->handleRequest($request);
       $book->setPublished(true); 
       if($form->isSubmitted()){
           $em= $managerRegistry->getManager();
           $nbBooks= $book->getAuthor()->getNbBooks();
           $book->getAuthor()->setNbBooks($nbBooks+1);
           $em->persist($book);
           $em->flush();
           //var_dump($nbBooks).die();
           return  new Response("Done!");
       }
       //1ere methode
      /*return $this->render('book/add.html.twig',
      array('formBook'=>$form->createView()));*/
        //2eme methode
       return $this->renderForm("book/add.html.twig",
       array('formulaireBook'=>$form));
   }

   #[Route('/updateBook/{ref}', name: 'update_book')]
    public function updateBook($ref,BookRepository $repository,Request  $request, ManagerRegistry $managerRegistry)
    {
        $book= $repository->find($ref) ;
        $form= $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $nbBooks= $book->getAuthor()->getNbBooks();
            $book->getAuthor()->setNbBooks($nbBooks+1);
            $book->setPublished(true);
            $em = $managerRegistry->getManager();
            $em->flush();
           // return  new Response("Done!");
            return  $this->redirectToRoute("list_book");
        }
        return $this->renderForm('book/update.html.twig',
            array('formBook'=>$form));
    }
    #[Route("/booksByAuthors", name:"books_by_authors")]
    public function booksByAuthors(BookRepository $bookRepository)
    {
        $books = $bookRepository->booksListByAuthors();

        return $this->render('book/showBookAuthor.html.twig', [
            'books' => $books,
        ]);
    }
    
#[Route('/DateBook', name: 'date_book')]
    public function listBookDate(Request $request, BookRepository $bookrepository){
        $books = $bookrepository->BookSortDate();
        return $this->render('book/datebook.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/remove/{ref}', name: 'remove_book')]
    public function deleteBook($ref,$id, BookRepository $repository,
                                 ManagerRegistry $managerRegistry)
    {
        $book= $repository->find($ref);
        $em = $managerRegistry->getManager();
        $em->remove($book);
        $em->flush();

        return  $this->redirectToRoute("list_book");

    }
    #[Route('/show/{ref}', name: 'show_book')]
    public function showBook ($ref,BookRepository $repository){
        $book=$repository->find($ref);
        if (!$book){
            return $this->redirectToRoute('show_route');
        }
        return $this->render('book/show.html.twig',['b'=>$book]);

    }
}

