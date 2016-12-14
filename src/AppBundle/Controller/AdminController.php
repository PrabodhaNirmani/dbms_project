<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//include("CustomConnection.php");
class AdminController extends Controller
{
    /**
     * @Route("registerSchool", name="registerSchool")
     */
    public function registerSchoolAction(Request $request)
    {


        $form = $this->createFormBuilder()
            ->add('schoolname', TextType::class)
            ->add('street', TextType::class)
            ->add('city', TextType::class)
            ->add('username', TextType::class)
            ->add('password', TextType::class)
            ->add('confPassword', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Submit'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $username = $form['username']->getData();
            $password = $form['password']->getData();

            $sql1 = "INSERT INTO  user (user_name,password,user_type) VALUES ($username,$password,'school')";
            $connection = $this->get('app.custom_connect')->db_connect();
            $val = mysqli_query($connection, $sql1);

            $schoolname = $form['schoolname']->getData();
            $street = $form['street']->getData();
            $city = $form['city']->getData();
            $sql2 = "INSERT INTO  school (user_name,password,user_type) VALUES ($username,$password,'school')";


            return $this->render('mine/application.html.twig');


        }
        return $this->render('mine/registerSchool.html.twig', array(
            'form' => $form->createView(),
        ));

//        return $this->render('mine/registerSchool.html.twig');


    }

    /**
     * @Route("backAdmin", name="backAdmin")
     */
    public function adminHomeAction()
    {
        return $this->render('mine/homeAdmin.html.twig');


    }

}
