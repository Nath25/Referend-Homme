<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactForm(Request $request, \Swift_Mailer $mailer)
    {
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $from = $request->request->get('email');
        $title = $request->request->get('titre');
        $contactMessage = $request->request->get('message');

        $message = (new \Swift_Message($title))
            ->setFrom('effesceau.mairie@outlook.fr')
            ->setTo('effesceau.mairie@outlook.fr')
            ->setReplyTo($from)
            ->setBody("Mail de $nom  $prenom ($from).
             Message :
             $contactMessage");

        $mailer->send($message);
    }
}
