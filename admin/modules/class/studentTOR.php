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

<table class="table">
  <thead>
    <tr>
      <th scope="col" colspan="2">COURSE AND DESCRIPTIVE TITLE</th>
      <th scope="col">RATING</th>
      <th scope="col">RE-EXAM</th>
      <th scope="col">UNITS</th>
      <th scope="col">REMARKS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
            $ay = '';
            $curr_sy = $sy->getSy('First', '1', $_GET['studentId'], $object_sy->COURSE_ID);
            $ay = $curr_sy->AY;
        ?>
        <td colspan="6">First Semester <?php echo $ay; ?></td>
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