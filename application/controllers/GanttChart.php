<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Task {
    public $start;
    public $end;
    public $name;
    public $assignee;
    public $y;

    function __construct($name,$assignee,$start,$end,$y) {
        $this->name = $name;
        $this->assignee = $assignee;
        $this->start = $start;
        $this->end = $end;
        $this->y = $y;
    }
}

class Project {
    public $name;
    public $data;
}

class GanttChart extends CI_Controller {


    public function index()
	{
		$this->load->view('GanttChart-view');
    }
    
	public function getChartData()
	{
        $project1 = new Project();
        $project1->name = "Project 1";
        $project1->data = array();

        $tasks1 = new Task("development", "anand", strtotime("2016-08-02T14:15:00"), strtotime("2017-08-02T14:15:00"),0);
        $tasks2 = new Task("testing", "anand",  strtotime("2016-09-02T14:15:00"),  strtotime("2017-09-02T14:15:00"),1);
        $tasks3 = new Task("deployment", "anand",  strtotime("2016-10-02T14:15:00"),  strtotime("2017-11-02T14:15:00"),2 );
        $tasks4 = new Task("verification", "anand", strtotime("2016-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),3 );
        $tasks5 = new Task("customer demo", "anand", strtotime("2015-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),4 );
        $tasks6 = new Task("acceptance", "anand", strtotime("2014-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),5 );
        $tasks7 = new Task("signoff", "anand", strtotime("2013-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),6 );

        array_push($project1->data, $tasks1);
        array_push($project1->data, $tasks2);
        array_push($project1->data, $tasks3);
        array_push($project1->data, $tasks4);   
        array_push($project1->data, $tasks5);
        array_push($project1->data, $tasks6);
        array_push($project1->data, $tasks7);

        
        $jsonData = array();
        array_push($jsonData, $project1);

        //echo json_encode($jsonData);
        print json_encode($jsonData, JSON_NUMERIC_CHECK);
        
    }
    	
}

