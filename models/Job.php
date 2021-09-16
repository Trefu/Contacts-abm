<?php
class job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.name as cname
        FROM jobs
        INNER JOIN categories
        on jobs.category_id = categories.id
        ORDER BY post_date DESC");
        $results = $this->db->resultSet();
        return $results;
    }
    public function getOneJob($id)
    {
        $this->db->query("SELECT jobs.*, categories.name as cname
        FROM jobs
        INNER JOIN categories
        on jobs.category_id = categories.id
        WHERE jobs.id = $id
        ORDER BY post_date DESC");
        $results = $this->db->single();
        return $results;
    }
    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");
        $results = $this->db->resultSet();
        return $results;
    }
    public function getJobByCategory($searchParam)
    {
        $this->db->query("SELECT jobs.*, categories.name as cname FROM jobs
        INNER JOIN categories on jobs.category_id = categories.id
        WHERE category_id = $searchParam
        ORDER BY post_date DESC");

        $results = $this->db->resultSet();
        return $results;
    }
    public function createJob($data)
    {
        $this->db->query("INSERT INTO jobs (category_id,company, title, description, salary, location ,contact_user,contact_email ) 
        VALUES (:category, :company, :title, :description, :salary, :location, :contact_user, :contact_email ) ");
        //bindeo
        $this->db->bind(':category', $data['job_category_id]']);
        $this->db->bind(':company', $data['job_company']);
        $this->db->bind(':title', $data['job_title']);
        $this->db->bind(':description', $data['job_description']);
        $this->db->bind(':salary', $data['job_salary']);
        $this->db->bind(':location', ucfirst($data['job_location']));
        $this->db->bind(':contact_user', $data['job_user_email']);
        $this->db->bind(':contact_email', $data['job_company_email']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        };
    }
    public function getJobByQuery($queryParam)
    {

        $this->db->query("SELECT * FROM jobs
                WHERE MATCH(title,company,location) AGAINST ('$queryParam' IN BOOLEAN MODE)");
        $results = $this->db->resultSet();
        return $results;
    }
}
