<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegisterUserTest extends WebTestCase
{
    public function testSomething(): void
    {

        // 1- Créer un faux client (navigateur) de pointer vers une url
        $client = static::createClient(); // emule un navigateur
        $client->request('GET', '/inscription'); // pointer vers une url

        // 2- Remplir les champs de mon formulaire d'incription
        $client->submitForm('Valider', [
            'register_user[email]' => 'julie@exemple.fr',
            'register_user[plainPassword][first]' =>  '123456',
            'register_user[plainPassword][second]' => '123456',
            'register_user[firstname]' => 'julie',
            'register_user[lastname]' => 'doe',
        ]);

        // Est-ce que je suis bien redirigé vers la page de connexion
        $this->assertResponseRedirects('/connexion');
        $client->followRedirect();

        // 3- Est-ce que tu peux regarder si dans ma page j'ai le message (alerte) suivant : "Votre compte est correctement crée, veuillez vous connecter'"
        $this->assertSelectorExists('div:contains("Votre compte est correctement crée, veuillez vous connecter")');

    }
}
