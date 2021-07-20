<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Task {
    public $start;
    public $end;
    public $name;
    public $assignee;

    function __construct($name,$assignee,$start,$end) {
        $this->name = $name;
        $this->assignee = $assignee;
        $this->start = $start;
        $this->end = $end;
    }
}

class Project {
    public $name;
    public $data;
}

class Tryouts extends CI_Controller {

	
	public function index()
	{
//         $apple = new Fruit();
//         $banana = new Fruit();
//         $apple->set_name('Apple');
//         $apple->set_color('red');
//         $banana->set_name('Banana');
//         $banana->set_color('Yellow');

//         $cart = array();
//         array_push($cart, $apple);
//         array_push($cart, $banana);

// echo "ff" . "<br />";
//         $myJSON = json_encode($apple);	
//         echo '<pre>'; 
//         // print_r($result); 
//         print_r ( $myJSON );
//         echo '</pre>';
//      //   $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

//        echo json_encode($cart);



        $project1 = new Project();
        $project1->name = "Project 1";
        $project1->data = array();

            $tasks1 = new Task("development", "anand", strtotime("2016-08-02T14:15:00"), strtotime("2017-08-02T14:15:00"));
            $tasks2 = new Task("testing", "anand",  strtotime("2016-09-02T14:15:00"),  strtotime("2017-09-02T14:15:00") );
            $tasks3 = new Task("deployment", "anand",  strtotime("2016-10-02T14:15:00"),  strtotime("2017-11-02T14:15:00") );
            $tasks4 = new Task("verification", "anand", strtotime("2016-12-02T14:15:00"),  strtotime("2017-01-02T14:15:00") );

            array_push($project1->data, $tasks1);
            array_push($project1->data, $tasks2);
            array_push($project1->data, $tasks3);
            array_push($project1->data, $tasks4);
            

        $jsonData = array();
        array_push($jsonData, $project1);

        echo json_encode($jsonData);
        
        echo "<br />";
        $the_date = "2016, 10, 18";
        echo(date("Y-d-mTG:i:sz",$the_date) . "<br />");







    }
    

	
}

