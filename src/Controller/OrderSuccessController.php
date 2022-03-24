<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderSuccessController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/commande/merci/{stripeSessionId}', name: 'order_validate')]
    public function index(Cart $cart, $stripeSessionId): Response
    {
        $order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);
        // dd($order);
        if (!$order || $order->getUser() != $this->getUser()){
            return $this->redirectToRoute('home');
        }
        
        if (!$order->getIsPaid()) {
            //vider la session "cart"
            $cart->remove();

            //modifier le statut isPaid de notre commande en mettant 1
            $order->setIsPaid(1);
            $this->entityManager->flush();

            //envoyer un email à notre client pour lui confirmer sa commande
        }
        
         
        
        
        return $this->render('order_success/index.html.twig', [
            'order'=> $order
        ]);
        //afficher les quelques informations de la commande de l'utilisateur
    }
}
