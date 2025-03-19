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

class TestController extends AbstractController {
    
    #[Route('/test')]
    public function Test() {
        // $todolist = $this->getDoctrine()
        //     ->getRepository(TodoList::class)
        //     ->findAll();

        // return $this->render('todo/menu.html.twig', [
        //     'todolist' => $todolist,
        // ]);

        return $this->render('base.html.twig');
    }

    // /**
    //  * @Route("/admin/todo/add", name="todo_add")
    //  */
    // public function TodoAdd(Request $request) {
    //     $todolist = new TodoList();

    //     $form = $this->createForm(TodoListFormType::class, $todolist);

    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $todolist = $form->getData();

    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($todolist);
    //         $em->flush();
    
    //         return $this->redirectToRoute('todo_menu');
    //     }

    //     return $this->render('todo/add.html.twig', [
    //         'form' => $form->createView(),
    //     ]);
    // }

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