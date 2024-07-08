<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InvoiceController extends AbstractController
{
    /*
     *  IMPRESSION FACTURE PDF pour un utilisateur connecté
     * Vérification de la commande pour l'utilisateur donné
     */

    #[Route('/compte/facture/impression/{id_order}', name: 'app_invoice_customer')]
    public function printInvoiceCustomer(
        OrderRepository $orderRepository,
        $id_order
    ): Response
    {
        // Vérification de l'objet commande - Existe ?
        $order = $orderRepository->findOneById($id_order);

        if (!$order) {
            //$this->addFlash('danger', 'Commande introuvable');
            return $this->redirectToRoute('app_account');
        }

        // Vérification de l'objet commande - Ok pour l'utilisateur ?
        if ($order->getUser() !== $this->getUser()) {
            //$this->addFlash('danger', 'Commande introuvable');
            return $this->redirectToRoute('app_account');
        }


        $dompdf = new Dompdf();

        $html = $this->renderView('invoice/index.html.twig', [
            'order' => $order
        ]);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream('facture.pdf', [
            'Attachment' => false //permet d ouvrir le fichier ds le navigateur
        ]);

        exit();

    }

    /*
    *  IMPRESSION FACTURE PDF pour un administrateur connecté
    * Vérification de la commande pour l'administrateur donné
    */

    #[Route('/admin/facture/impression/{id_order}', name: 'app_invoice_admin')]
    public function printInvoiceAdmin(
        OrderRepository $orderRepository,
                        $id_order
    ): Response
    {
        // Vérification de l'objet commande - Existe ?
        $order = $orderRepository->findOneById($id_order);

        if (!$order) {
            //$this->addFlash('danger', 'Commande introuvable');
            return $this->redirectToRoute('admin');
        }

        $dompdf = new Dompdf();

        $html = $this->renderView('invoice/invoice_admin/index.html.twig', [
            'order' => $order
        ]);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream('facture.pdf', [
            'Attachment' => false //permet d ouvrir le fichier ds le navigateur
        ]);

        exit();

    }
}
