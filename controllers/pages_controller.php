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
        $postJobPage = new Template('../views/pages/jobs/postjobpage.php');
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
        if (!isset($_GET['jobid'])) redirect('index.php', "Something went wrong", 'error');

        if (isset($_POST["del_id"])) {
            $job = new Job();
            $del_id = $_POST["del_id"];
            if ($job->deleteJob($del_id)) {
                redirect("index.php", "Deleted", "success");
            }
            redirect("index.php", "Job Not Deleted", "error");
        }
        $individualJobPage = new Template('../views/pages/jobs/individualjobpage.php');

        $job = new Job();
        $id = $_GET['jobid'];
        $individualJobPage->jobSelected = $job->getOneJob($id);
        echo $individualJobPage;
    }
    public function editJob()
    {
        if (!isset($_GET['jobid'])) redirect('index.php', "Something went wrong", 'error');
        $editJobPage = new Template('../views/pages/jobs/editjob.php');
        $job = new Job();
        $id = $_GET['jobid'];
        $editJobPage->job = $job->getOneJob($id);
        $editJobPage->categories = $job->getCategories();
        echo $editJobPage;
        if (isset($_POST['editjob'])) {
            $data = array();
            $data['job_category_id]'] = $_POST['job_category_id'];
            $data['job_company'] = $_POST['job_company'];
            $data['job_title'] = $_POST['job_title'];
            $data['job_description'] = $_POST['job_description'];
            $data['job_salary'] = $_POST['job_salary'];
            $data['job_location'] = $_POST['job_location'];
            $data['job_user_email'] = $_POST['job_user_email'];
            $data['job_company_email'] = $_POST['job_company_email'];
            if ($job->editJob($id, $data)) {
                redirect('index.php', 'Job edited', 'success');
            } else {
                redirect('index.php', 'Something went wrong', 'error');
            }
        }
    }
};
