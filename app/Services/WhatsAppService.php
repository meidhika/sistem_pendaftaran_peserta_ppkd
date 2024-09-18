<?php

namespace App\Services;

use Twilio\Rest\Client;

class WhatsAppService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client('','');
    }

    public function sendMessage($to, $message)
    {



        $this->client->messages->create(
            'whatsapp:' . $to,  // Nomor tujuan dengan prefiks 'whatsapp:'
            [
                'from' => '',  // Nomor pengirim dari .env dengan prefiks 'whatsapp:'
                'body' => $message  // Isi pesan
            ]
        );


    }
}
