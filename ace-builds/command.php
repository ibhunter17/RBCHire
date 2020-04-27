<?php
class Job{
	private $title;function set_title($new_title){$this->title=$new_title;}function get_title(){return $this->title;}
	private $id;function set_id($new_id){$this->id=$new_id;}function get_id(){return $this->id;}
	private $description;function set_description($new_description){$this->description=$new_description;}function get_description(){return $this->description;}
	private $requirement;function set_requirement($new_requirement){$this->requirement=$new_requirement;}function get_requirement(){return $this->requirement;}
	private $deadline;function set_deadline($new_deadline){$this->deadline=$new_deadline;}function get_deadline(){return $this->deadline;}
	private $location;function set_location($new_location){$this->location=$new_location;}function get_location(){return $this->location;}
	private $employment_type;function set_employment_type($new_employment_type){$this->employment_type=$new_employment_type;}function get_employment_type(){return $this->employment_type;}
	
	function __construct($title, $id){
		$this->title = $title;
		$this->id = $id;
		
		$null_info = "*NO INFORMATION PROVIDED*";
		
		$this->description = $null_info;
		$this->requirement = $null_info;
		$this->deadline = $null_info;
		$this->location = $null_info;
		$this->employment_type = $null_info;
	}
	
	function print_job(){
		$job_output = "";
		
		$job_output .= "Job ID: ".(string)$this->get_id()."\n";
		$job_output .= "Job Title: ".(string)$this->get_title()."\n\n";
		$job_output .= "Description\n--------------------\n".(string)$this->get_description()."\n\n";
		$job_output .= "Requirements\n--------------------\n".(string)$this->get_requirement()."\n\n";
		$job_output .= "\nDeadline: ".(string)$this->get_deadline()."\n";
		$job_output .= "Location: ".(string)$this->get_location()."\n";
		$job_output .= "Employment Type: ".(string)$this->get_employment_type()."\n";
		
		return $job_output;
	}
}
function error_handler($errno, $errstr){ echo "Unexpected parsing error! Make sure all your arguments are in properly."; exit(); }

set_error_handler('error_handler');
$cmd_index = 0;

$job1 = new Job("DevOps Engineer", 143672);
$job1->set_description("-Design, develop, test, deploy, support and evolve software to deliver core baking services\n-Manage individual priorities, deadlines and deliverables\n-Continuously improve software engineering practices within your team\n-Work with the operations team to take code production and ensure excellent performance and reliability");
$job1->set_requirement("-B.S. degree in Computer Science or related technical field\n-Knowledge of professional software engineering practices\n-Experience supporting production-level software\n-3 or more years of experience with C++, Java or another object-oriented programming language\n-Experience with UNIX/LINUX\n-Working knowledge of web-based application\n-Strong communication skills");
$job1->set_deadline("September 25, 2017");
$job1->set_location("Toronto");
$job1->set_employment_type("Full-Time");

$job2 = new Job("Data Analyst", 145962);
$job2->set_description("-Analyze, design, deliver, and implement analytic development project using RBC's analytics tools\n-Ensure that project activities are accomplished within approved time frames, scope and budget\n-Confirm that projects adhere to development standards and guidelines\n-Apply data warehouse concepts and methodologies to various projects");
$job2->set_requirement("-Enrolled in Canadian post-secondary\n-Leadership acumen and a passion to apply it in a dynamic business environment\n-Excellent interpersonal and highly developed communication skills\n-Strong MS Office Skills (Word, Outlook, Excel, PowerPoint)");
$job2->set_deadline("October 10, 2017");
$job2->set_location("Toronto");
$job2->set_employment_type("Winter Co-op");

$job3 = new Job("Expert UI/UX Developer", 146820);
$job3->set_description("Developing and testing user interfaces built on modern design principles and technologies\n-Collaborate with other users and provide unified user interface\n-Design and develop back-end\n-Recommend system solutions\n-Work in agile development practices");
$job3->set_requirement("Front-End Development technologies including Angular4, ES6 and above, SASS and proficiency in design thinking\n-Automation technologies with a focus on continuous integration, continuous delivery and source control management\n\n(Nice to have)\n-Back-End Development technologies .NET Stack, C#");
$job3->set_deadline("October 22, 2017");
$job3->set_location("88 Queens Quay West");
$job3->set_employment_type("Full-Time");

$job4 = new Job("Cypber Security Research Developer", 146790);
$job4->set_description("Provide direction, expertise and feedback in the context of software development practices\n-Lead and create out original papers, prototypes and projects\n-Keep programs sercure from current and upcoming threats\n-Create technical and business functional documentation\n-Interface closely with IT and Security Team to identify risks and threats\n-Develop industry relevant skills");
$job4->set_requirement("-Minimum 4 years experience in a software development role\n-Programming expertise spanning multiple languages\n-Different design techniques\n-Excellent communication skills\n-Innovative thinking and openness to new ideas\n\n(Nice-to-have)\n-Experience with security concepts\n-Understanding of top-tier technologies\n-Masters\PhD designations in Computer Engineering/Math");
$job4->set_deadline("October 22, 2015");
$job4->set_location("88 Queens Quay West");
$job4->set_employment_type("Full-Time");

$job5 = new Job("Senior Technical System Analyst", 144327);
$job5->set_description("-Support Charles River and Eagle Applications\n-Partner with infrastructure and business teams to resolve business system issues\n-Work with development teams to review requirements\n-Build relationships with business and infrastructure teams\n-Evaluate and operate day-to-day activities with third party vendors");
$job5->set_requirement("-5+ years of IT experience with ability to create and run SQL queries, troubleshoot batch cycle issues\n-Experience with Business Process Analysis tools\n-Strong written and verbal communication skills\n-BA/BS or technology related certificate");
$job5->set_deadline("October 22, 2017");
$job5->set_location("Minneapolis");
$job5->set_employment_type("Regular - U.S");

$jobs = array($job1, $job2, $job3, $job4, $job5);

$command = $_POST['cmd'];
$original_cmd = $command;

$command = explode(" ", strtolower(trim($command)));

$outputText = ($command[$cmd_index] == "" ?  "" : "\n");
if (count($command) == 1){
	if ($command[$cmd_index] == "") return "";
	if ($command[$cmd_index] == 'help' || $command[$cmd_index] == 'ls' || $command[$cmd_index] == 'dir'){
		$outputText .= ">about-us   Learn about RBC\n";
		$outputText .= ">jobs       See what openings RBC has for you!\n";
		$outputText .= ">apply      Apply for Jobs!\n";
		$outputText .= ">clear      Clear this console (Case Sensitive)\n";
	}
	else if ($command[$cmd_index] == "about-us"){
		$outputText .= "RBC is one of the largest bank in Canada. We are one of North America's leading diversified financial services companies, and provide personal and commercial banking, wealth management, insurance, investor services and capital markets products and services on a global basis.\n";
	}
	else if ($command[$cmd_index] == "jobs"){
		$outputText .= "-l --list_all                 List all available openings\n";
		$outputText .= "-o --open <Job_ID>            Get Details about a job\n";
		$outputText .= "-s --search [OPTIONS] <str>   Search for opportunity by keywords\n";
		$outputText .= "           -n --name\n";
		$outputText .= "           -d --description\n";
	}
	else if ($command[$cmd_index] == "apply"){
		$outputText .= "apply [REQUIRED-OPTIONS (IN ORDER)]\n";
		$outputText .= "      -j --job <Job ID>\n";
		$outputText .= "      -fn --first_name\n";
		$outputText .= "      -ln --last_name\n";
		$outputText .= "      -e  --email\n";
		$outputText .= "      -r --resume <Path/to/resume>\n";
	}
	else{
		$outputText .= "Could not find command '".$original_cmd."'";
	}
}
else if ($command[$cmd_index] == "jobs"){
	if ($command[$cmd_index + 1] == "--list_all" || $command[$cmd_index + 1] == "-l"){
		for ($i = 0; $i < count($jobs); $i = $i + 1){
			$outputText .= (string)$jobs[$i]->get_id()." ".(string)$jobs[$i]->get_title()."\n";
		}
	}
	else if ($command[$cmd_index + 1] == "--open" || $command[$cmd_index + 1] == "-o"){
		$job_id_to_find = (int)$command[$cmd_index + 2];
		$job_found = false;
		for ($i = 0; $i < count($jobs); $i = $i + 1){
			if ($jobs[$i]->get_id() == $job_id_to_find){
				$job_found = true;
				$outputText .= $jobs[$i]->print_job();
			}
		}
		if (!$job_found){
			$outputText .= "Could not find job with id: ".(string)$job_id_to_find;
		}
	}
	else if ($command[$cmd_index + 1] == "--search" || $command[$cmd_index + 1] == "-s") {
		$search_options = array("--name", "-n", "--description", "-d");
		$dual_search_options = array("-dn", "-nd");
		$dual_search = false;
		
		$search_flag = $command[$cmd_index + 2];
		
		$to_search = "";
		for ($i = 3; $i < count($command); $i = $i + 1){
			$to_search .= str_replace("\"", "", $command[$i])." ";
		}
		
		if (in_array($search_flag, $dual_search_options)){
			$outputText .= "Searching by 'Name' AND 'Description'\n";
			for ($i = 0; $i < count($jobs); $i = $i + 1){
				if (strpos(strtolower($jobs[$i]->get_title()), $to_search) !== false || strpos(strtolower($jobs[$i]->get_description()), $to_search) !== false){
					$outputText .= (string)$jobs[$i]->get_id()." ".(string)$jobs[$i]->get_title()."\n";
				}
			}
		}
		else if (in_array($search_flag, $search_options)){
			if ($search_flag == "--name" || $search_flag == "-n"){
				$outputText .= "Searching by 'Name'";
				for ($i = 0; $i < count($jobs); $i = $i + 1){
					if (strpos($jobs[$i]->get_title(), $to_search) !== false){
						$outputText .= (string)$jobs[$i]->get_id()." ".(string)$jobs[$i]->get_title()."\n";
					}
				}
			}
			else if ($search_flag == "--description" || $search_flag == "-d"){
				$outputText .= "Searching by 'Description'";
				for ($i = 0; $i < count($jobs); $i = $i + 1){
					if (strpos($jobs[$i]->get_description(), $to_search) !== false){
						$outputText .= (string)$jobs[$i]->get_id()." ".(string)$jobs[$i]->get_title()."\n";
					}
				}
			}
		}
		else {
			$outputText .= "Invalid flag";
		}
	}
	else{
		$outputText .= "Flag '".$command[$cmd_index + 1]."' not found under 'jobs'";
	}
}
else if ($command[$cmd_index] == "apply"){
	$err = false;
	$cmd = $command[$cmd_index + 1]; 
	if ($cmd == "-j" || $cmd == "--job"){
		$job_id = (int)$command[$cmd_index + 2];
		$job_found = false;
		for ($i = 0; $i < count($jobs); $i = $i + 1){
			if ($jobs[$i]->get_id() == $job_id){
				$job_found = true;
				$outputText .= "Applying to Job => ".(string)$jobs[$i]->get_title()."\n";
			}
		}
		if (!$job_found){
			$outputText .= "Job not found\n";
			$err = true;
		}
	}
	else{
		$outputText .= "\nABORTED: Invalid Flag for Job ID (Use: -j or --job)";
		$err = true;
	}
	
	$first_name = "";
	$cmd = $command[$cmd_index + 3]; 
	if (!$err && ($cmd == "-fn" || $cmd == "--first_name")){
		$first_name = $command[$cmd_index + 4]; 
	}
	else if (!$err){
		$outputText .= "\nABORTED: Invalid Flag for First Name (Use: -fn or --first_name)\n";
		$err = true;
	}
	$last_name = "";
	$cmd = $command[$cmd_index + 5]; 
	if (!$err && ($cmd == "-ln" || $cmd == "--last_name")){
		$last_name = $command[$cmd_index + 6];
		if ($first_name != ""){
			$outputText .= "With full name  => ".$first_name." ".$last_name."\n";
		}
	}
	else if (!$err){
		$outputText .= "\nABORTED: Invalid Flag for Last Name (User: -ln or --last_name)\n";
		$err = true;
	}
	
	$cmd = $command[$cmd_index + 7];
	if (!$err && ($cmd == "-e" || $cmd == "--email")){
		$outputText .= "With e-mail     => ".$command[$cmd_index + 8]."\n";
	}
	else if (!$err){
		$outputText .= "\nABORTED: Invalid Flag for e-mail (Use: -e or --email)\n";
		$err = true;
	}
	
	$cmd = $command[$cmd_index + 9];
	if (!$err && ($cmd == "-r" || $cmd == "--resume")){
		$outputText .= "Uploading resume => ".$command[$cmd_index + 10]."\n";
		$outputText .= "Upload successful\n";
	}		
	else if (!$err){
		$outputText .= "\nABORTED: Invalid Flag for resume (Use -r or --resume)\n";
		$err = true;
	}
	
	if (!$err){ $outputText .= "\n\nThank You for applying to RBC!"; }
	
}
else{
	$outputText .= "Could not find command '".$original_cmd."'";
}

echo $outputText;

restore_error_handler();
?>