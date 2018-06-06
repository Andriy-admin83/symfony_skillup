<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route(
     *		"/welcome/{name}", 
     * 		name="welcome",
     *		defaults={"name"="Default in controller"},
     *		requirements={"name"="[A-Za-z]+"}
     *)
     * @param string $name
     * @return Response
     */
    public function index(string $name)
    {
    	
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'Bla-bla-bla',
            'some_var'=>$name,
    		'some_var01'=>"World11",
        ]);

    }
    /**
     * @Route("/", name="hello_page")
     */
    public function homepage()
    {
    	return $this->render('hello_page.html.twig');
    }
}
