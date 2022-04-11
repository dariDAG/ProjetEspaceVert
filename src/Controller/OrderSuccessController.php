<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\Mail;
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
            $mail = new Mail();
            $content = "Bonjour ".$order->getUser()->getFirstname()." ".$order->getUser()->getLastname()."<br/>Merci pour votre commande en ligne.<br><br/>Voici un espace en ligne pour tous vos commandes pour votre espace verte";
            $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), "Votre commande sur l'Espace Vert en ligne a bien été validé.", $content);
        }
        
         
        
        
        return $this->render('order_success/index.html.twig', [
            'order'=> $order
        ]);
        //afficher les quelques informations de la commande de l'utilisateur
    }
}
