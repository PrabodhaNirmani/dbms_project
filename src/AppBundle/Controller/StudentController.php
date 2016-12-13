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

        $conn =db_connect();

        mysqli_query($conn, "INSERT INTO ministry_of_education.user(user_name,password,user_type) VALUES ('sinowr4ah','stude','admin')");
       
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
