<?php
require_once ("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case '1' :
        $title="tor";	
		$content='studentTOR.php';		
		break;

	case 'list' :
		$content    = 'list.php';		
		break;

	case 'tor' :
		$content    = 'studentTOR.php';		
		break;

	case 'add' :
		$content    = 'add.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;

    case 'view' :
		$content    = 'view.php';		
		break;

	case 'subject' :
		$content    = 'studentsubject.php';		
		break;

	case 'tor' :
		$content    = 'studentTOR.php';		
		break;
			
	case 'assign' :
		$content    = 'assignsubj.php';		
		break;

	case 'delsubj' :
		$content    = 'assignsubj.php';		
		break;

	case 'enroll' :
		$content    = 'enrollment.php';		
		break;
		
	case 'editenrollment' :
	$content    = 'editenrollment.php';		
	break;

	default :
		$content    = 'list.php';
				
}

require_once '../../theme/templates.php';
?>
