<?php

namespace App\Controller\Account;

use App\Classe\Cart;
use App\Entity\Address;
use App\Form\AddressUserType;
use App\Repository\AddressRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AddressController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/compte/adresses', name: 'app_account_addresses')]
    public function index(): Response
    {
        return $this->render('account/address/index.html.twig');
    }

    #[Route('/compte/adress/delete/{id}', name: 'app_account_address_delete')]
    public function delete(
        $id,
        AddressRepository $addressRepository
    ): Response
    {
        $address = $addressRepository->findOneById($id);

        if (!$address && $address->getUser() != $this->getUser()) {
            return $this->redirectToRoute('app_account_addresses');
        }

        $this->addFlash(
            'success',
            "Votre adresse a été correctement supprimée."
        );

        $this->em->remove($address);
        $this->em->flush();

        return $this->redirectToRoute('app_account_addresses');

    }

    #[Route('/compte/adresse/ajouter/{id}', name: 'app_account_address_form', defaults: ['id' => null])]
    public function form(
        Request $request,
                $id,
        AddressRepository $addressRepository,
         Cart $cart
    ): Response
    {
        if ($id) {
            $address = $addressRepository->findOneById($id);

            if (!$address && $address->getUser() != $this->getUser()) {
                return $this->redirectToRoute('app_account_addresses');
            }

        } else {
            $address = new Address();
            $address->setUser($this->getUser());
        }

        $form = $this->createForm(AddressUserType::class, $address);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->persist($address);
            $this->em->flush();

            $this->addFlash(
                'success',
                "Votre adresse a été correctement enregistrée."
            );

            if ($cart->fullQuantity() > 0) {
                return $this->redirectToRoute('app_order');
            }

            return $this->redirectToRoute('app_account_addresses');
        }

        return $this->render('account/address/form.html.twig', [
            'addressForm' => $form
        ]);
    }
}

?>
