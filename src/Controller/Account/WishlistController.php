<?php

namespace App\Controller\Account;

use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WishlistController extends AbstractController
{
    #[Route('/compte/liste-de-souhait', name: 'app_account_wishlist')]
    public function index(): Response
    {
        return $this->render('account/wishlist/index.html.twig');
    }

    #[Route('/compte/liste-de-souhait/add/{id}', name: 'app_account_wishlist_add')]
    public function add(
        EntityManagerInterface $em,
        ProductRepository$productRepository,
        Request $request,
        $id
    ): Response
    {
        // 1. Recuperer l'objet du produit souhaité
        $product = $productRepository->findOneById($id);

        // 2. Si produit existant et si user connecté(on ne fait pas car deja fait avec role USER), ajouter le produit a la wishlist
        if ($product) {
            $this->getUser()->addWishlist($product);
            // 3. sauvegarder en bdd
            $em->flush();
        }

        $this->addFlash(
            'success',
            'Le produit a bien été ajouté à votre liste de souhaits'
        );

        return $this->redirect($request->headers->get('referer'));

    }

    #[Route('/compte/liste-de-souhait/remove/{id}', name: 'app_account_wishlist_remove')]
    public function remove(
        EntityManagerInterface $em,
        ProductRepository$productRepository,
        Request $request,
        $id
    ): Response
    {
        // 1. Recuperer l'objet du produit a supprimer
        $product = $productRepository->findOneById($id);

        // 2. Si produit existant supprimer le produit de la wishlist
        if ($product) {

            $this->addFlash('success', 'Le produit a bien été supprimé de votre liste de souhaits');

            $this->getUser()->removeWishlist($product);
            // 3. sauvegarder en bdd
            $em->flush();
        } else {
            $this->addFlash('danger', 'Le produit est introuvable.');
        }

        return $this->redirect($request->headers->get('referer'));
    }
}
