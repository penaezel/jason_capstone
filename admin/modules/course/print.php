<?php 
    $courseid = $_GET['courseId'];
    $singledept = new Course();
    $object = $singledept->single_course($courseid);
?>
<div>

    <button class='btn btn-primary' onclick="printdiv('div_print')">Print</button>

    <div id='div_print'>
        <header>
            <center>
                <img src="img/banner2.png" alt="banner" style="width: 100%; height: 180px;">
                <hr style='border-top: 2px solid black' />
            </center>
        </header>
        <h5 class="text-center mt-2"><?php echo $object->COURSE_DESC ?></h5>

        <h6 class='text-center'>FIRST YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'First' AND `YEAR_LEVEL` = '1'");
				  		
					loadresult11();
                    
					function loadresult11(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();
                        $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;

                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		}
                          
                        echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'Second' AND `YEAR_LEVEL` = '1'");
				  		
					loadresult12();
					  	
					function loadresult12(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

                          $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;
                            
                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		} 

                          echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
				  	}	
				  	?>
            </tbody>
        </table>

        <h6 class='text-center'>SECOND YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'First' AND `YEAR_LEVEL` = '2'");
				  		
					loadresult11();
                    
					function loadresult21(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();
                        $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;

                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		}
                          
                        echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'Second' AND `YEAR_LEVEL` = '2'");
				  		
					loadresult12();
					  	
					function loadresult22(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

                          $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;
                            
                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		} 

                          echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
				  	}	
				  	?>
            </tbody>
        </table>

        <h6 class='text-center'>THIRD YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'First' AND `YEAR_LEVEL` = '3'");
				  		
					loadresult31();
                    
					function loadresult31(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();
                        $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;

                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		}
                          
                        echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'Second' AND `YEAR_LEVEL` = '3'");
				  		
					loadresult32();
					  	
					function loadresult32(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

                          $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;
                            
                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		} 

                          echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
				  	}	
				  	?>
            </tbody>
        </table>

        <h6 class='text-center'>FOURTH YEAR</h6>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>FIRST SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'First' AND `YEAR_LEVEL` = '4'");
				  		
					loadresult41();
                    
					function loadresult41(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();
                        $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;

                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		}
                          
                        echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <table class="table table-sm table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th colspan='6'>SECOND SEM</th>
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
                </tr>
                <?php
                    $mydb->setQuery("SELECT * 
                    FROM  `subject`
                    WHERE `COURSE_ID` = '{$courseid}' AND `SEMESTER` = 'Second' AND `YEAR_LEVEL` = '4'");
				  		
					loadresult42();
					  	
					function loadresult42(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

                          $totalUnit= 0;

						foreach ($cur as $result) {
                            $totalUnit += $result->UNIT;
                            
                            echo '<tr>';
                            echo '<td>'. $result->SUBJ_CODE.'</td>';
                            echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                            echo '<td class="text-right">'. $result->LEC_UNIT.'</td>';
                            echo '<td class="text-right">'. $result->LAB_UNIT.'</td>';
                            echo '<td align="center">'. $result->UNIT.'</td>';
                            echo '<td>'.$result->PRE_REQUISITE.'</td>';
                            echo '</tr>';
				  		} 

                          echo '<tr>';
                        echo '<td colspan="4" class="text-right">Total</td>';
                        echo '<td class="text-right">'.$totalUnit.'</td>';
                        echo '<td class="text-right"></td>';
                echo '</tr>';
				  	}	
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
