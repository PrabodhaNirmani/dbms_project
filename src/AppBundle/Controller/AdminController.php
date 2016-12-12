<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("registerSchool", name="registerSchool")
     */
    public function registerSchoolAction()
    {
        return $this->render('mine/registerSchool.html.twig');


    }
    /**
     * @Route("backAdmin", name="backAdmin")
     */
    public function adminHomeAction()
    {
        return $this->render('mine/homeAdmin.html.twig');


    }

}
