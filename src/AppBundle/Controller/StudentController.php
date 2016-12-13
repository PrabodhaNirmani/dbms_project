<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


include("CustomConnection.php");
class StudentController extends Controller
{
    /**
     * @Route("backStudent", name="backStudent")
     */
    public function studentHomeAction()
    {
       
        return $this->render('mine/homeStudent.html.twig');


    }
    /**
     * @Route("apply", name="apply")
     */
    public function applyAction()
    {

        return $this->render('mine/application.html.twig');


    }
}
