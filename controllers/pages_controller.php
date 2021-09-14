<?php

/**
 * las rutas se toman desde templatePage
 */
class PagesController
{
    public function home()
    {
        $homePage = new Template('../views/pages/home.php');
        $job = new Job();
        $homePage->jobs = $job->getAllJobs();
        $homePage->categories = $job->getCategories();
        echo $homePage;
    }
    public function postjob()
    {
        $postJobPage = new Template('../views/pages/postjob.php');

        echo $postJobPage;
    }
};
