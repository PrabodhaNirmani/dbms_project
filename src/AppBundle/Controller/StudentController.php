<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudentController extends Controller
{
    /**
     * @Route("backStudent", name="backStudent")
     */
    public function studentHomeAction()
    {
       
        return $this->render('mine/homeStudent.html.twig');


    }
}
