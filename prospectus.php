<?php
    $sy = new Schoolyr();
    $cur_sy = date('Y').'-'.(date('Y')+1);
    $object_sy = $sy->findCourseBySy($_SESSION['IDNO'],$cur_sy);

    $object = [];
    $sub_data=[];

    if(!empty($object_sy->COURSE_ID)){
        $singledept = new Course();
        $object = $singledept->single_course($object_sy->COURSE_ID);

        $sub = new Subject();
        $sub_data = $sub->getSubjectByCourse($object_sy->COURSE_ID);
    }
?>
<div class="container bg-white shadow py-3" style="margin-top: 120px ">

    <button class='btn btn-primary' onclick="printdiv('div_print')">Print</button>

    <div id='div_print'>
        <header>
            <center>
                <img src="img/banner2.png" alt="banner" style="width: 100%; height: 180px;">
                <hr style='border-top: 2px solid black' />
            </center>
        </header>

        <?php
        if(!empty($object->COURSE_DESC)){
            echo '<h5 class="text-center mt-2">'.$object->COURSE_DESC.'</h5>';
        } 
        ?>
        

        <h6 class='text-center'>FIRST YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEMESTER</th>
                </tr>
            </thead>  
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='1' && $res->SEMESTER == 'First'){
                            $totalUnit += $res->UNIT;

                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave = '';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEMESTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='1' && $res->SEMESTER == 'Second'){
                            $totalUnit += $res->UNIT;
                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave = '';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>

        <h6 class='text-center'>SECOND YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEMESTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='2' && $res->SEMESTER == 'First'){
                            $totalUnit += $res->UNIT;

                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave = '';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEMESTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='2' && $res->SEMESTER == 'Second'){
                            $totalUnit += $res->UNIT;

                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave = '';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>

        <h6 class='text-center'>THIRD YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEMESTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='3' && $res->SEMESTER == 'First'){
                            $totalUnit += $res->UNIT;

                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave = '';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEMESTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='3' && $res->SEMESTER == 'Second'){
                            $totalUnit += $res->UNIT;

                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave = '';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>

        <h6 class='text-center'>FOURTH YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEMESTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='4' && $res->SEMESTER == 'First'){
                            $totalUnit += $res->UNIT;

                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave = '';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEMESTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'>Subject Code</td>
                    <td class='text-center'>Descriptive Title</td>
                    <td class='text-center'>Lec Units</td>
                    <td class='text-center'>Lab Units</td>
                    <td class='text-center'>Total Units</td>
                    <td class='text-center'>Pre-requisite/s</td>
                    <td class='text-center'>Grades</td>
                </tr>

                <?php
                    $totalUnit= 0;
                    foreach ($sub_data as $res) {
                        if( $res->YEAR_LEVEL =='4' && $res->SEMESTER == 'Second'){
                            $totalUnit += $res->UNIT;

                            $grade = new Grades();
                            $grade_data = $grade->getStudentGradePerSubject($_SESSION['IDNO'], $res->SUBJ_ID);
                            $ave ='';
                            if(!empty($grade_data->AVE)){
                                $ave = $grade_data->AVE;
                            }

                            echo '<tr>';
                            echo '<td>'. $res->SUBJ_CODE.'</td>';
                            echo '<td>'. $res->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $res->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->LAB_UNIT.'</td>';
                            echo '<td class="text-right">'. $res->UNIT.'</td>';
                            echo '<td>'.$res->PRE_REQUISITE.'</td>';
                            echo '<td>'.$ave.'</td>';
                            echo '</tr>';
                        }
                    } 
                    echo '<tr>';
                    echo '<td colspan="4" class="text-right">Total</td>';
                    echo '<td class="text-right">'.$totalUnit.'</td>';
                    echo '<td class="text-right"></td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>

        <p class='d-flex align-items-center justify-content-between mt-3'>
            <span>Prepared by: <br /> DINO L. ILUSTRISIMO (Head, It Department)</span>
            <span>Noted by: <br /> CANDRELARIO M. AYTONA, Ed.D. (School President)</span>
        </p>
    </div>

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
