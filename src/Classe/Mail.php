<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    public function send(
        $to_email,
        $to_name,
        $subject,
        $template,
        $vars = null
    )
    {
        // Récupération du contenu du template
        $content = file_get_contents(dirname(__DIR__).'/Mail/'.$template);

        // Récupération des variables facultatives
        if($vars != null){
            foreach($vars as $key => $value){
                $content = str_replace('{'.$key.'}', $value, $content);
            }
        }

        // Envoi du mail
        $mj = new Client(
            $_ENV['MJ_APIKEY_PUBLIC'],
            $_ENV['MJ_APIKEY_PRIVATE'],
            true,
            ['version' => 'v3.1']
        );

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "glippa.sebastien@gmail.com",
                        'Name' => "La Boutique du Dév"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                    'TemplateID' => 5852943,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'variables' => [
                        'content' => $content
                    ],
                ]
            ]
        ];

        $mj->post(Resources::$Email, ['body' => $body]);

    }
}
