<?php
    include 'MyPDO.php';
    class Student
    {
        /* @var MyPDO */
        protected $db;

        protected $data;

        public function __construct(MyPDO $db)
        {
            $this->db = $db;
        }

        public function findAll()
        {        
            return $this->db->run("SELECT * FROM student_data")->fetchAll();
        }
    }