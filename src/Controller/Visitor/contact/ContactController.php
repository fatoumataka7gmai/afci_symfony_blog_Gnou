<?php

namespace App\Controller\Visitor\contact;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'visitor.contact.create',methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('pages/visitor/contact/index.html.twig');
    }
}
