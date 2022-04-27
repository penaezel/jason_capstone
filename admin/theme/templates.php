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
<style type="text/css">
table {
    font-size: 9px;
}

table tr td {
    font-size: 12px;
}
/*modal*/
                     h2{
                        font-family: Arial, Helvetica, sans-serif;
                    }
                 
                    .modal{
                        display: none;
                        position: fixed;
                        z-index: 1;
                        padding-top: 100px;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        overflow: auto;
                        background-color: rgba(0,0,0);
                        background-color: rgba(0,0,0,0.4);
                    }
                   
                    .modal-content{
                        background-color: #fefefe;
                        margin: auto;
                        padding: 20px;
                        margin-left: 100px;
                        border: 1px solid #888;
                        width: 80%;
                    }
                    .close{
                        color: #aaaaaa;
                        float: right;
                        font-size: 20px;
                        font-weight: bold;

                    }
                    .close:hover,
                    .close:focus{
                        color: #000;
                        
                        text-decoration: none;
                        cursor: pointer;                   
                    }
                /*end modal style*/

</style>
<?php
  //login confirmation
 confirm_logged_in();

  ?>
<body class="">
    
<div class="wrapper ">
    
<div class="sidebar" data-color="green" style="font-size: 17px;">
    
                                <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
        <div class="logo" style="text-align: center; font-weight: bold; font-size: 15px;">
            <a href="<?php echo WEB_ROOT; ?>admin/index.php" class="simple-text logo-normal">
                Student Grading<br>Information System
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="<?php echo (currentpage_admin() == '') ? "active" : false;?>"><a
                        href="<?php echo WEB_ROOT; ?>admin/index.php">
                        <i class="now-ui-icons design_app"></i>
                        <p class="fa" style="color:black;">Dashboard</p>
                    </a></li>
                <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
                ?>
                <li class="<?php echo (currentpage_admin() == 'student') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php">
                        <i class="now-ui-icons business_badge"></i>
                        <p class="fa" style="color:black;">Students</p>
                    </a>
                </li>
                <li class="<?php echo (currentpage_admin() == 'subject') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/subject/index.php">
                        <i class="now-ui-icons education_agenda-bookmark"></i>
                        <p class="fa" style="color:black;">Subjects</p>
                    </a>
                </li>
               <!-- <li class="<?php echo (currentpage_admin() == 'course') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/course/index.php">
                        <i class="now-ui-icons business_chart-bar-32"></i>
                        <p>Course</p>
                    </a>
                </li>-->
                <li class="<?php echo (currentpage_admin() == 'instructor') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/instructor/index.php">
                        <i class="now-ui-icons users_circle-08"></i>
                        <p class="fa" style="color:black;">Grades</p>
                    </a>
                </li>
                <li class="<?php echo (currentpage_admin() == 'department') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/department/index.php">
                        <i class="now-ui-icons business_bank"></i>
                        <p class="fa" style="color:black;">Department</p>
                    </a>
                </li>
                <!-- <li class="<?php echo (currentpage_admin() == 'room') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/room/index.php">
                        <i class="now-ui-icons shopping_box"></i>
                        <p>Rooms</p>
                    </a>
                </li>-->
<!--
                <li class="<?php echo (currentpage_admin() == 'class') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/class/index.php">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p class="fa" style="color:black;">TOR</p>
                    </a>
                </li> 
                -->           
                <?php
              }?>

                <?php if($_SESSION['ACCOUNT_TYPE']=='Teacher'){ 
                ?>
                <li class="<?php echo (currentpage_admin() == 'inst_front') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/inst_front/index.php?view=record">
                        <i class="now-ui-icons users_single-02"></i>
                        <p class="fa" style="color:black;">Record</p>
                    </a>
                </li>
                <?php
              }?>
                <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
                ?>
                <li class="<?php echo (currentpage_admin() == 'user') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/user/index.php">
                        <i class="now-ui-icons users_single-02"></i>
                        <p class="fa" style="color: black;">Manage Users</p>
                    </a>
                </li>
                <?php
              }?>
                <!-- <li><a href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a></li>  -->

            </ul>
        </div>
    </div>
    
                

    <div class="main-panel" id="main-panel"  >
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute"style="background: green;" >
            <div class="container-fluid" style="background: green;">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                   
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" style="background: green;">
                   
                    <ul class="navbar-nav" style="background: green;">
                        <!--        <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li> -->
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">
                                        <?Php echo $_SESSION['ACCOUNT_NAME'];?>
                                    </span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <?php if($_SESSION['ACCOUNT_TYPE']=='Teacher') { ?>
                                <a href="<?php echo WEB_ROOT; ?>admin/modules/inst_front/index.php?view=prof">
                                    Profile
                                </a>

                                <?php } ?>
                                
                              
                                <a class="dropdown-item" href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
<!--START MODAL-->
              
               

<!--END MODAL-->
        <div class="panel-header panel-header-sm" style="background: green;" >
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="container">
                            <?php check_message(); ?>
                            <?php require_once $content;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->


    </div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/jquery.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/popper.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo WEB_ROOT; ?>plugins/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
<script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8">
</script>

<script type="text/javascript">
$('.form_curdate').datetimepicker({
    language: 'en',
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});
$('.form_bdatess').datetimepicker({
    language: 'en',
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});
</script>
<script>
function checkall(selector) {
    if (document.getElementById('chkall').checked == true) {
        var chkelement = document.getElementsByName(selector);
        for (var i = 0; i < chkelement.length; i++) {
            chkelement.item(i).checked = true;
        }
    } else {
        var chkelement = document.getElementsByName(selector);
        for (var i = 0; i < chkelement.length; i++) {
            chkelement.item(i).checked = false;
        }
    }
}

function checkNumber(textBox) {
    while (textBox.value.length > 0 && isNaN(textBox.value)) {
        textBox.value = textBox.value.substring(0, textBox.value.length - 1)
    }
    textBox.value = trim(textBox.value);
}
//
function checkText(textBox) {
    var alphaExp = /^[a-zA-Z]+$/;
    while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
        textBox.value = textBox.value.substring(0, textBox.value.length - 1)
    }
    textBox.value = trim(textBox.value);
}

function calculate() {

    var first = document.getElementById('first').value;
    var second = document.getElementById('second').value;
    var third = document.getElementById('third').value;
    var fourth = document.getElementById('fourth').value;

    var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth);
    document.getElementById('finalave').value = totalVal;
    document.getElementById('finalave').value = Math.round((parseInt(totalVal) / 4));
}
</script>
<script>
$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

});
</script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var t = $('#example').DataTable({
        "columnDefs": [{
            "searchable": false,
            "orderable": false,
            "targets": 1
        }],
        "order": [
            [3, 'asc']
        ]
    });

    t.on('order.dt search.dt', function() {
        t.column(0, {
            search: 'applied',
            order: 'applied'
        }).nodes().each(function(cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();
});

/*$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 2
        } ],
        //vertical scroll
         "scrollY":        "400px",
        "scrollCollapse": true,
        //ordering start at column 2
       "order": [[ 2, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
*/
/*$(document).ready(function() {
    $('#example').dataTable( {
        "pagingType": "full_numbers"
    } );
} );*/
/*$(document).ready(function() {
    $('#example').dataTable();
} );
*/ //scroll vertical
/*$(document).ready(function() {
    $('#example').dataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
*/
</script>

</body>

</html>
