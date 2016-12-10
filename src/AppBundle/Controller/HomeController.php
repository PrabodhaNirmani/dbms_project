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
    public function homeAction()
    {
        // replace this example code with whatever you need
        return $this->render('mine/home.html.twig');

    }
    /**
     * @Route("homeStudent", name="homeStudent")
     */
    public function homeStudentAction()
    {
        // replace this example code with whatever you need
        return $this->render('mine/homeStudent.html.twig');

    }

    /**
     * @Route("homeAdmin", name="homeAdmin")
     */
    public function homeAdminAction()
    {
        // replace this example code with whatever you need
        return $this->render('mine/homeAdmin.html.twig');

    }
    /**
     * @Route("homeSchool", name="homeSchool")
     */
    public function homeSchoolAction()
    {
        // replace this example code with whatever you need
        return $this->render('mine/homeSchool.html.twig');

    }

    /**
     * @Route("register", name="register")
     */
    public function registerAction()
    {
        // replace this example code with whatever you need
        return $this->render('mine/register.html.twig');

    }

    /**
     * @Route("edit", name="edit")
     */
    public function editAction()
    {
        // replace this example code with whatever you need
        return $this->render('mine/editApplication.html.twig');

    }
    /**
     * @Route("results", name="results")
     */
    public function numberAction()
    {

        // replace this example code with whatever you need
        return $this->render('mine/viewResults.html.twig');

    }
    /**
     * @Route("search", name="search")
     */
    public function aboutAction()
    {
        // replace this example code with whatever you need
        return $this->render('mine/searchSchool.html.twig');

    }

    /**
     * @Route("logout", name="logout")
     */
    public function logoutAction()
    {
        
        return $this->render('mine/home.html.twig');

    }
}
