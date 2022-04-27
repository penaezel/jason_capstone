<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){	
	if (isset($_POST['savecourse'])){
		if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['lec_unit'] == "" OR $_POST['lab_unit'] == "") {
			message("All field is required!","error");
			check_message();
		}else{
			$subj = new Subject();
			$subjcode   	= $_POST['subjcode'];
			$subjdesc	 	= $_POST['subjdesc'];
			$pre 			= $_POST['pre'];
			$course 		= $_POST['course'];
			$Semester 		= $_POST['Semester'];
			$yearLevel 		= $_POST['yearLevel'];
			$lec_unit 		= $_POST['lec_unit'];
			$lab_unit 		= $_POST['lab_unit'];
		
			$subj->SUBJ_CODE		 = $subjcode;
			$subj->SUBJ_DESCRIPTION  = $subjdesc;
			$subj->PRE_REQUISITE 	 = $pre;
			$subj->COURSE_ID 		 = $course;
			$subj->SEMESTER 		 = $Semester;
			$subj->YEAR_LEVEL 		 = $yearLevel;
			$subj->LEC_UNIT 		 = $lec_unit;
			$subj->LAB_UNIT 		 = $lab_unit;
			$subj->UNIT 			 = $lec_unit + $lab_unit;

			$istrue = $subj->create(); 
			if ($istrue == 1){
				message("New Subject created successfully!","success");
				redirect('index.php');
			}
		}
	}
	elseif (isset($_POST['saveandnewcourse'])) {
	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['lec_unit'] == "" OR $_POST['lab_unit'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$subj = new Subject();
		$subjcode   	= $_POST['subjcode'];
		$subjdesc	 	= $_POST['subjdesc'];
		// $unit 			= $_POST['unit'];
		$pre 			= $_POST['pre'];
		$course 		= $_POST['course'];
		// $ay 			= $_POST['ay'];
		$Semester 		= $_POST['Semester'];
		$yearLevel 		= $_POST['yearLevel'];
		$lec_unit 		= $_POST['lec_unit'];
		$lab_unit 		= $_POST['lab_unit'];
	
			$subj->SUBJ_CODE		 = $subjcode;
			$subj->SUBJ_DESCRIPTION  = $subjdesc;
			$subj->PRE_REQUISITE 	 = $pre;
			$subj->COURSE_ID 		 = $course;
			// $subj->AY 				 = $ay;
			$subj->SEMESTER 		 = $Semester;
			$subj->YEAR_LEVEL 		 = $yearLevel;
			$subj->LEC_UNIT 		 = $lec_unit;
			$subj->LAB_UNIT 		 = $lab_unit;
			$subj->UNIT 			 = $lec_unit + $lab_unit;


			 $istrue = $subj->create(); 
			 if ($istrue == 1){
			 	
			 	message("New Subject created successfully!","success");
				redirect('index.php?view=add');
			 }
}

}
}



function doEdit(){
	if (isset($_POST['savecourse'])){
	

	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['lec_unit'] == "" OR $_POST['lab_unit'] == "") {
		message("All field is required!","error");
		redirect('index.php');
	}else{
		

		$subj = new Subject();
		$Subjectid		= $_GET['id'];
		$subjcode   	= $_POST['subjcode'];
		$subjdesc	 	= $_POST['subjdesc'];
		// $unit 			= $_POST['unit'];
		$pre 			= $_POST['pre'];
		$course 		= $_POST['course'];
		// $ay 			= $_POST['ay'];
		$Semester 		= $_POST['Semester'];
		$yearLevel 		= $_POST['yearLevel'];
		$lec_unit 		= $_POST['lec_unit'];
		$lab_unit 		= $_POST['lab_unit'];

			$subj->SUBJ_ID			 = $Subjectid;
			$subj->SUBJ_CODE		 = $subjcode;
			$subj->SUBJ_DESCRIPTION  = $subjdesc;
			$subj->PRE_REQUISITE 	 = $pre;
			$subj->COURSE_ID 		 = $course;
			// $subj->AY 				 = $ay;
			$subj->SEMESTER 		 = $Semester;
			$subj->YEAR_LEVEL 		 = $yearLevel;
			$subj->LEC_UNIT 		 = $lec_unit;
			$subj->LAB_UNIT 		 = $lab_unit;
			$subj->UNIT 			 = $lec_unit + $lab_unit;
			
 			$subj->update($Subjectid);
			message($subjcode. " has updated successfully!", "info");
			redirect('index.php');
			 
			
		}	 

		
	}
		
}

function doDelete(){
		  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$subj = new Subject();
		$subj->delete($id[$i]);
	}
	message("Course(s) already Deleted!","info");
	redirect('index.php');

}

?>
