<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;


class Mail 
{
    private $api_key = '9c052d557e3e3506e9ab190c2368758e';
    private $api_key_secret = '0becafd739b6d5683b88215f41e6a167';

    public function send($to_email, $to_name, $subject, $content)
    {   
        $mj = new Client($this->api_key, $this->api_key_secret, true,['version' => 'v3.1']);
        
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "rida.gadhi2@gmail.com",
                        'Name' => "L'Espace Vert en ligne"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                    'TemplateID' => 3805462,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content,
                    ]  
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }
}