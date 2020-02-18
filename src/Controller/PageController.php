<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page.home")
     */
    public function index()
    {
        return $this->render('page/index.html.twig', []);
    }

    /**
     * @Route("/about", name="page.about")
     */
    public function about()
    {
        return $this->render("page/about.html.twig", []);
    }

    /**
     * @Route("/help", name="page.help")
     */
    public function help()
    {
        return $this->render("page/help.html.twig", []);
    }

    /**
     * @Route("/contact", name="page.contact")
     */
    public function contact()
    {
        return $this->render("page/contact.html.twig", []);
    }

    /**
     * @Route("/how", name="page.how")
     */
    public function howItWork()
    {
        return $this->render("page/how-it-work.html.twig", []);
    }
}
