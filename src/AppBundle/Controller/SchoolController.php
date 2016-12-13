<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class SchoolController extends Controller
{
    /**
     * @Route("viewApplicants", name="viewApplicants")
     */
    public function viewApplicantsAction()
    {
        return $this->render('mine/applicantList.html.twig');


    }
    /**
     * @Route("backSchool", name="backSchool")
     */
    public function schoolHomeAction()
    {
        
        return $this->render('mine/homeSchool.html.twig');


    }
    /**
     * @Route("updateVacancies", name="updateVacancies")
     */
    public function updateVacanciesAction()
    {
        $vacancies=null;
        return $this->render('mine/updateVacancies.html.twig',array('vacancies'=>$vacancies));


    }

}
