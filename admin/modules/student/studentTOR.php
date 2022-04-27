<?php
    $sy = new Schoolyr();
    $cur_sy = date('Y').'-'.(date('Y')+1);
    $object_sy = $sy->findCourseBySy($_GET['studentId'],$cur_sy);

    $object = [];
    $sub_data=[];

    if(!empty($object_sy->COURSE_ID)){
        $singledept = new Course();
        $object = $singledept->single_course($object_sy->COURSE_ID);

        $sub = new Subject();
        $sub_data = $sub->getSubjectByCourse($object_sy->COURSE_ID);
    }
?>
    <button class='btn btn-primary' onclick="printdiv('div_print')">Print</button>

    <div id='div_print'>
        <img src="img/banner2.png" alt="banner" style="width: 100%; height: 180px;">
        <h1 style="font-size: 30px; font-weight: bold; text-align: center;"> OFFICIAL TRANSCRIPT OF RECORDS </h1>
<?php
		$details = new Student_details();
		$det = $details->secondary_details($_GET['studentId']);
?>
<?php 
    $student = new Student();
    $cur = $student->single_student($_GET['studentId']);
?>

<div class="w-100">
<div class="ml-auto" style="height: 200px; width: 200px; border: 1px solid black; margin-bottom: 1rem;"></div>
</div>

<table class="table table-bordered">
    <tbody>
        <tr>
           <td>
               <span>SURNAME</span><br />
               <strong><?php echo $cur->LNAME ?></strong>
           </td>
           <td>
                <span>FIRST NAME</span><br />
                <strong><?php echo $cur->FNAME ?></strong>
           </td>
           <td>
                <span>MIDDLE NAME</span><br />
                <strong><?php echo $cur->MNAME ?></strong>
           </td>
           <td>
                <span>COURSE</span><br />
                <strong><?php echo !empty($object->COURSE_NAME) ? $object->COURSE_NAME : '' ?></strong>
           </td>
           <td>
                <span>Date of Birth</span><br />
                <strong><?php echo $cur->BDAY ?></strong>
           </td>
        </tr>
        <tr>
            <td colspan="2">
               <span>Place of Birth</span><br />
               <strong><?php echo $cur->BPLACE ?></strong>
           </td>
          
           <td>
                <span>Civil Status</span><br />
                <strong><?php echo $cur->STATUS ?></strong>
           </td>
           <td colspan="2">
                <span>Intermediate S.Y</span><br />
                <strong><?php echo $det->OTHER_PERSON_SUPPORT ?></strong>
           </td>
        </tr>
        <tr>
            <td>
               <span>Citizenship</span><br />
               <strong><?php echo $cur->NATIONALITY ?></strong>
           </td>
           <td>
                <span>Religion</span><br />
                <strong><?php echo $cur->RELIGION ?></strong>
           </td>
           <td>
                <span>Sex</span><br />
                <strong><?php echo $cur->SEX ?></strong>
           </td>
           <td colspan="2">
                <span>High School S.Y.</span><br />
                <strong><?php echo $det->ADDRESS?></strong>
           </td>
        </tr>
        <tr>
           <td>
               <span>Parent or Guardian</span><br />
               <strong><?php echo $det->GUARDIAN?></strong>
           </td>
           <td>
                <span>Student ID no.</span><br />
                <strong><?php echo $cur->IDNO?></strong>
           </td>
           <td>
                <span>Date Enrolled</span><br />
                <strong><?php echo !empty($object_sy->DATE_RESERVED) ? $object_sy->DATE_RESERVED : '' ?></strong>
           </td>
           <td colspan='2'>
                <span>Home Address </span><br />
                <strong><?php echo $cur->HOME_ADD ?></strong>
            </td>
        </tr>
    </tbody>
</table>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" colspan="2" style=" text-align: center; font-weight: bold;">COURSE AND DESCRIPTIVE TITLE</th>
      <th scope="col" style=" font-weight: bold;">RATING</th>
      <th scope="col" style=" font-weight: bold;">RE-EXAM</th>
      <th scope="col" style=" font-weight: bold;">UNITS</th>
      <th scope="col" style=" font-weight: bold;">REMARKS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('First', '1', $_GET['studentId'], $object_sy->COURSE_ID );
            $ay = $curr_sy->AY;
        ?>
        <td colspan="2">First Semester <?php echo $ay; ?></td>
        <td colspan="1"></td>
        <td colspan="1"></td>
        <td colspan="1"></td>
        <td colspan="1"></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='1' && $res->SEMESTER == 'First'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
    <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('Second', '1', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = !empty($curr_sy->AY) ? $curr_sy->AY : '';
        ?>
        <td colspan="6">Second Semester <?php echo $ay; ?></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='1' && $res->SEMESTER == 'Second'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
    <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('First', '2', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = !empty($curr_sy->AY) ? $curr_sy->AY : '';
        ?>
        <td colspan="6">First Semester <?php echo $ay; ?></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='2' && $res->SEMESTER == 'First'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
    </tbody>
    </table>
    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col" colspan="2" style=" text-align: center; font-weight: bold;">COURSE AND DESCRIPTIVE TITLE</th>
      <th scope="col" style=" font-weight: bold;">RATING</th>
      <th scope="col" style=" font-weight: bold;">RE-EXAM</th>
      <th scope="col" style=" font-weight: bold;">UNITS</th>
      <th scope="col" style=" font-weight: bold;">REMARKS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('Second', '2', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = !empty($curr_sy->AY) ? $curr_sy->AY : '';
        ?>
        <td colspan="6">Second Semester <?php echo $ay; ?></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='2' && $res->SEMESTER == 'Second'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
     <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('First', '3', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = !empty($curr_sy->AY) ? $curr_sy->AY : '';
        ?>
        <td colspan="6">First Semester <?php echo $ay; ?></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='3' && $res->SEMESTER == 'First'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
     <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('Second', '3', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = !empty($curr_sy->AY) ? $curr_sy->AY : '';
        ?>
        <td colspan="6">Second Semester <?php echo $ay; ?></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='3' && $res->SEMESTER == 'Second'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
     <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('First', '4', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = !empty($curr_sy->AY) ? $curr_sy->AY : '';
        ?>
        <td colspan="6">First Semester <?php echo $ay; ?></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='4' && $res->SEMESTER == 'First'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
     <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('Second', '4', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = !empty($curr_sy->AY) ? $curr_sy->AY : '';
        ?>
        <td colspan="6">Second Semester <?php echo $ay; ?></td>
    </tr>
    <?php
        $totalUnit= 0;
        foreach ($sub_data as $res) {
            if( $res->YEAR_LEVEL =='4' && $res->SEMESTER == 'Second'){
                $totalUnit += $res->UNIT;

                $grade = new Grades();
                $grade_data = $grade->getStudentGradePerSubject($_GET['studentId'], $res->SUBJ_ID);
                $ave = '';
                $remarks = '';
                $totalunits = $res->LEC_UNIT+$res->LAB_UNIT;
                if(!empty($grade_data->AVE)){
                    $ave = $grade_data->AVE;
                }
                if(!empty($grade_data->REMARKS)){
                    $remarks = $grade_data->REMARKS;
                }

                echo '<tr>';
                echo '<td>'. $res->SUBJ_CODE.'</td>';
                echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                echo '<td>'.$ave.'</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>'.$totalunits.'</td>';
                echo '<td>'.$remarks.'</td>';
                echo '</tr>';
            }
        }
    ?>
  </tbody>
</table>
    </div>

    <script language="javascript">
function printdiv(printpage) {
    var headstr = "<html><head><title></title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr + newstr + footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return false;
}
</script>