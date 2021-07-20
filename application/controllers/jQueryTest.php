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
        $this->start = $start * 1000;
        $this->end = $end * 1000;
        $this->y = $y;
    }
}

class Project {
    public $name;
    public $data;
}

class jQueryTest extends CI_Controller {

    public function index()
	{
		$this->load->view('jQueryTest-view');
    }
    
    public function getData1()
	{
        $jsonData=array("red","green");
        array_push($jsonData,"blue","yellow");

        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        array_push($jsonData,$randomString);


        //echo json_encode($jsonData);
        print json_encode($jsonData, JSON_NUMERIC_CHECK);
        
    }

    public function getChartData()
	{
        $projectName = $_GET['projectName'];
        $project1 = new Project();
        $project1->name = $projectName;
        $project1->data = array();

        if ($projectName == "Project 1 ")
        {
            $tasks1 = new Task("development", "Jim", strtotime("2020-08-02T14:15:00"), strtotime("2021-08-02T14:15:00"),0);
            $tasks2 = new Task("testing", "Robert",  strtotime("2020-09-02T14:15:00"),  strtotime("2021-09-02T14:15:00"),1);
            $tasks3 = new Task("deployment", "Danish",  strtotime("2021-06-02T14:15:00"),  strtotime("2021-07-02T14:15:00"),2 );
            $tasks4 = new Task("verification", "Kong", strtotime("2020-12-02T14:15:00"),  strtotime("2021-01-02T14:15:00"),3 );
            $tasks5 = new Task("customer demo", "Martha", strtotime("2020-12-02T14:15:00"),  strtotime("2021-01-02T14:15:00"),4 );
            $tasks6 = new Task("acceptance", "Dinesh", strtotime("2020-12-02T14:15:00"),  strtotime("2021-01-02T14:15:00"),5 );
            $tasks7 = new Task("signoff", "Kim", strtotime("2020-12-02T14:15:00"),  strtotime("2021-01-02T14:15:00"),6 );


        }
        else // project 2
        {
            $tasks1 = new Task("Pillar craft", "anand", strtotime("2016-08-02T14:15:00"), strtotime("2017-08-02T14:15:00"),0);
            $tasks2 = new Task("Foundation", "anand",  strtotime("2016-09-02T14:15:00"),  strtotime("2017-09-02T14:15:00"),1);
            $tasks3 = new Task("Concrete", "anand",  strtotime("2016-10-02T14:15:00"),  strtotime("2017-11-02T14:15:00"),2 );
            $tasks4 = new Task("Flooring", "anand", strtotime("2016-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),3 );
            $tasks5 = new Task("Electrical work", "anand", strtotime("2015-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),4 );
            $tasks6 = new Task("Paiting", "anand", strtotime("2014-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),5 );
            $tasks7 = new Task("Handover", "anand", strtotime("2013-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00"),6 );  
            

        }

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
?>
    