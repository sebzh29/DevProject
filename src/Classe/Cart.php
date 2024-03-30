<?php

namespace App\Classe;

use Symfony\Component\HttpFoundation\RequestStack;

class Cart
{
    public function __construct(
        private RequestStack $requestStack
    )
    {
    }
    /*
     * add()
     * Fonction permettant d'ajouter un produit dans le panier
     */
    public function add($product)
    {
        // Appeler la session
        $cart = $this->getCart();

        // Ajouter une quantité +1 a mon produit
        if (isset($cart[$product->getId()])) {
            $cart[$product->getId()] = [
                'object' => $product,
                'qty' => $cart[$product->getId()]['qty'] + 1
            ];
        } else {
            $cart[$product->getId()] = [
            'object' => $product,
                'qty' => 1
            ];
        }

        // Créer ma session Cart
        $this->requestStack->getSession()->set('cart', $cart);
    }

    /*
     * decrease()
     * Fonction permettant de supprimer d'une quantité d'un produit au panier
     */

    public function decrease($id)
    {
        // Appeler la session
        $cart = $this->getCart();

        // Supprimer une quantité -1 a mon produit
        if ($cart[$id]['qty'] > 1) {
          $cart[$id]['qty'] = $cart[$id]['qty'] - 1;
        } else {
            unset($cart[$id]);
        }

        // Créer ma session Cart
        $this->requestStack->getSession()->set('cart', $cart);
    }

    /*
     * fullQuantity()
     * Fonction retournant le nommbre total de produits au panier
     */
    public function fullQuantity()
    {
        $cart = $this->getCart();
        $quantity = 0;

        if (!isset($cart)) {
            return $quantity;
        }

        foreach ($cart as $product) {
            $quantity = $quantity + $product['qty'];
        }

        return $quantity;
    }

    /*
     * getTotalWt()
     * Fonction retournant le prix total des produits au panier
     */
    public function getTotalWt()
    {
        $cart = $this->getCart();
        $price = 0;

        if (!isset($cart)) {
            return $price;
        }

        foreach ($cart as $product) {
            $price = $price + ($product['object']->getPriceWt() * $product['qty']);
        }
        return $price;
    }

    /*
     * remove()
     * Fonction permettant de supprimer totalement le panier
     */
    public function remove()
    {
        return $this->requestStack->getSession()->remove('cart');
    }

    /*
     * getCart()
     * Fonction retournant le panier
     */
    public function getCart()
    {
        return $this->requestStack->getSession()->get('cart');
    }

}