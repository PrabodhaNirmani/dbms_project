<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('mine/home.html.twig');

    }
    /**
     * @Route("register", name="register")
     */
    public function registerAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('mine/register.html.twig');

    }
    /**
     * @Route("/lucky")
     */
    public function numberAction(Request $request)
    {
        $number=rand(2,100);
        // replace this example code with whatever you need
        return $this->render('mine/test.html.twig',array('number'=>$number));

    }
    /**
     * @Route("about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('mine/about.html.twig');

    }
}
