<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;



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

            $sql1 = "INSERT INTO  ministry_of_education.user(user_name,password,user_type) VALUES ('$username','$password','school')";
            $connection = $this->get('app.custom_connect')->db_connect();
            $val = mysqli_query($connection, $sql1);

            $schoolname = $form['schoolname']->getData();
            $street = $form['street']->getData();
            $city = $form['city']->getData();
            $sam="SELECT user_id FROM user where user_name='.$username.' AND password='.$password'";
            $val2 = mysqli_query($connection, $sam);
            $row=mysqli_fetch_row($val2);


            $sql2 = "INSERT INTO  ministry_of_education.school(school_id,school_name,street,city) VALUES ('$row[0]','$schoolname','$street','$city')";
            $val = mysqli_query($connection, $sql2);

            return $this->redirect('registerSchool');


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
