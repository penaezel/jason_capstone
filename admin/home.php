<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="plugins/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="plugins/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Student Grading Information System
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.css" rel="stylesheet" />
    <link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo WEB_ROOT; ?>/images/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo WEB_ROOT; ?>/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo WEB_ROOT; ?>/images/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo WEB_ROOT; ?>/images/icons/site.webmanifest">
</head>
<body>
<?php 
	$student = new Student();
	$student_count = $student->get_student_count();

    $subject = new Subject();
	$subject_count = $subject->get_subject_count();

    $course = new Course();
	$course_count = $course->get_course_count();
?>
   <h3 align="left">Dashboard</h3>  
<div class='row my-3'>
    
    <div class="col-md-4">
        <div class="rounded p-3 border text-center">
            <h3 class='mb-0'><?php echo $student_count?></h3>
            <p class='mb-0'>Total Students</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="rounded p-3 border text-center">
            <h3 class='mb-0'><?php echo $subject_count?></h3>
            <p class='mb-0'>Total Subjects</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="rounded p-3 border text-center">
            <h3 class='mb-0'><?php echo $course_count?></h3>
            <p class='mb-0'>Total Courses</p>
        </div>
    </div>
</div>
</body>
</html>