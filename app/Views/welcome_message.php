<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function luan(): string
    {
        $conteudo = [
            'Luan' => 'Olá, Luan!',
            'Texto' => 'Este é o texto da página do Luan.'
        ];

        return view('Luan', ['conteudo' => $conteudo]);
    }
}
