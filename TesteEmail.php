<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Email;

class TesteEmail extends Controller
{
    public function index()
    {
        // Instancie a configuração de email
        $emailConfig = new Email();

        // Destinatário e corpo do email
        $to = 'denvito@gmail.com';
        $subject = 'Teste de Email com CodeIgniter 4';
        $message = 'Este é um email de teste enviado usando o CodeIgniter 4.';

        // Envie o email
        $result = $emailConfig->sendEmail($to, $subject, $message);

        if ($result) {
            echo 'Email enviado com sucesso!';
        } else {
            $ip = gethostbyname('sandbox.smtp.mailtrap.io');
echo "IP address: $ip";
            $logger = service('logger');
            $logger->error('Falha ao enviar o email.');
            // Adicione mais detalhes se necessário
            echo 'Falha ao enviar o email. Consulte os logs para mais informações.';
        }
    }
}

