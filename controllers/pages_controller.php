<?php

/**
 * las rutas se toman desde templatePage
 */
class PagesController
{
    public function home()
    {

        $homePage = new Template('../views/pages/home/home.php');
        $job = new Job();
        $homePage->jobs = $job->getAllJobs();
        $homePage->categories = $job->getCategories();
        if (isset($_GET['searchByCategory'])) {
            print_r($_GET);
            $param = $_GET['searchByCategory'];
            $homePage->jobs = $job->getJobByCategory($param);
        };
        if (isset($_GET['searchByQuery'])) {
            $queryParam = $_GET['searchByQuery'];
            $homePage->jobs = $job->getJobByQuery($queryParam);
        };

        echo $homePage;
    }
    public function showPostJobPage()
    {
        $postJobPage = new Template('../views/pages/postjobpage.php');
        $job = new Job();
        $postJobPage->categories = $job->getCategories();
        if (isset($_POST['newjob'])) {
            $data = array();
            $data['job_category_id]'] = $_POST['job_category_id'];
            $data['job_company'] = $_POST['job_company'];
            $data['job_title'] = $_POST['job_title'];
            $data['job_description'] = $_POST['job_description'];
            $data['job_salary'] = $_POST['job_salary'];
            $data['job_location'] = $_POST['job_location'];
            $data['job_user_email'] = $_POST['job_user_email'];
            $data['job_company_email'] = $_POST['job_company_email'];
            if ($job->createJob($data)) {
                redirect('index.php', 'Job added', 'success');
            } else {
                redirect('index.php', 'Something went wrong', 'error');
            }
        }
        echo $postJobPage;
    }
    public function individualJobPage()
    {
        $individualJobPage = new Template('../views/pages/individualjobpage.php');
        $job = new Job();
        $id = $_GET['jobid'];
        $individualJobPage->jobSelected = $job->getOneJob($id);
        echo $individualJobPage;
    }
};
