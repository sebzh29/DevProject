<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrderController extends AbstractController
{
    /*
     * 1ere étape du tunnel d'achat
     * Choix de l'adresse de livraison et du transporteur
     */

    #[Route('/commande/livraison', name: 'app_order')]
    public function index(): Response
    {
        $addresses = $this->getUser()->getAddresses();

        if (count($addresses) == 0) {
            $this->addFlash('warning', 'Vous devez ajouter une adresse avant de passer commande.');
            return $this->redirectToRoute('app_account_address_form');
        }

        $form = $this->createForm(
            OrderType::class,
            null,
            [
                'addresses' => $addresses,
                'action' => $this->generateUrl('app_order_summary')
            ]
        );

        return $this->render('order/index.html.twig', [
            'deliveryForm' => $form->createView(),
        ]);
    }

    /*
 * 2eme étape du tunnel d'achat
 * Récapitulatif de la commande de l'utilisateur
 * Insertion en BDD
 * Préparation du paiement vers Stripe
 */

    #[Route('/commande/recapitulatif', name: 'app_order_summary')]
    public function add(
        Request $request,
        Cart $cart
    ): Response
    {
        if ($request->getMethod() != 'POST') {
            return $this->redirectToRoute('app_cart');
        }


        $form = $this->createForm(
            OrderType::class,
            null,
            [
                'addresses' => $this->getUser()->getAddresses(),
            ]
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() || $form->isValid()) {
           // Stocker les informations en BDD
        }

        return $this->render('order/summary.html.twig', [
            'choices' => $form->getData(),
            'cart' => $cart->getCart(),
            'totalWt' => $cart->getTotalWt(),
        ]);
    }
}
