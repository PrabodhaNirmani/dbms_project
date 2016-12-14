<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//include("CustomConnection.php");
class AdminController extends Controller
{
    /**
     * @Route("registerStudent", name="registerStudent")
     */
    public function registerStudentAction()
    {
        
        return $this->render('mine/application.html.twig');


    }
    /**
     * @Route("backAdmin", name="backAdmin")
     */
    public function adminHomeAction()
    {
        return $this->render('mine/homeAdmin.html.twig');


    }

}