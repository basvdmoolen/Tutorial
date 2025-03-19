<?php
namespace App\Controller;

// use App\Entity\TodoList;
// use App\Forms\TodoListFormType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Require ROLE_ADMIN for *every* controller method in this class.
 * 
 * @IsGranted("ROLE_ADMIN")
 */
class CrudController extends AbstractController {
    
    #[Route('/crud/menu')]
    public function CrudMenu() {
        // $todolist = $this->getDoctrine()
        //     ->getRepository(TodoList::class)
        //     ->findAll();

        // return $this->render('todo/menu.html.twig', [
        //     'todolist' => $todolist,
        // ]);

        return $this->render('crud/menu.html.twig');
    }

    /**
     * @Route("/test", name="todo_add")
     */
    public function Test() {
        // $todolist = new TodoList();

        // $form = $this->createForm(TodoListFormType::class, $todolist);

        // $form->handleRequest($request);
        // if ($form->isSubmitted() && $form->isValid()) {
        //     $todolist = $form->getData();

        //     $em = $this->getDoctrine()->getManager();
        //     $em->persist($todolist);
        //     $em->flush();
    
        //     return $this->redirectToRoute('todo_menu');
        // }

        // return $this->render('todo/add.html.twig', [
        //     'form' => $form->createView(),
        // ]);

        return new Response(
            '<html><body>Lucky number: test</body></html>'
        );
    }

    // /**
    //  * @Route("/admin/todo/edit/{id}", name="todo_edit")
    //  */
    // public function TodoEdit($id, Request $request) {
    //     $todolist = $this->getDoctrine()
    //         ->getRepository(TodoList::class)
    //         ->find($id);

    //     $form = $this->createForm(TodoListFormType::class, $todolist);
            
    //     $form->handleRequest($request);
    
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $todolist = $form->getData();

    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($todolist);
    //         $em->flush();

    //         return $this->redirectToRoute('todo_menu');
    //     }

    //     return $this->render('todo/edit.html.twig', [
    //         'form' => $form->createView(),
    //         'id' => $id
    //     ]);
    // }

    // /**
    //  * @Route("/admin/todo/view/{id}", name="todo_view")
    //  */
    // public function TodoView($id, Request $request) {
    //     $todolist = $this->getDoctrine()
    //         ->getRepository(TodoList::class)
    //         ->find($id);

    //     $form = $this->createForm(TodoListFormType::class, $todolist);
            
    //     $form->handleRequest($request);
    
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $todolist = $form->getData();

    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($todolist);
    //         $em->flush();

    //         return $this->redirectToRoute('todo_menu');
    //     }

    //     return $this->render('todo/view.html.twig', [
    //         'form' => $form->createView(),
    //         'id' => $id
    //     ]);
    // }

    // /**
    //  * @Route("/admin/todo/delete/{id}", name="todo_delete")
    //  */
    // public function TodoDelete($id) {
    //     $todolist = $this->getDoctrine()
    //         ->getRepository(TodoList::class)
    //         ->find($id);

    //     $em = $this->getDoctrine()->getManager();
    //     $em->remove($todolist);
    //     $em->flush();

    //     return $this->redirectToRoute('todo_menu');
    // }
}