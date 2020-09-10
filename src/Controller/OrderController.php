<?php

namespace App\Controller;

use App\Entity\Order;
use App\FormType\OrderFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/order/new", name="new_order", methods={"POST"})
     *
     * @param Request $request
     * @return Response
     */
    public function new(Request $request)
    {
        $order = new Order();
        $form = $this->createForm(OrderFormType::class, $order);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $document = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($document);
            $entityManager->flush();
        }

        return $this->render('IHelp/new-order.html.twig', [
            'form' => $form->createView()
        ]);
    }
}