<div class="container bg-white shadow py-3" style="margin-top: 120px">

    <div class="col-12 col-sm-12 col-lg-12">
        <?php
		  	 if (isset($_GET['studentId'])){
				if ($_GET['studentId']==""){
					message("ID Number is required!","error");
					check_message();
					
				}else{

					
					$Schoolyr = new Schoolyr();
					$NumberofResult = $Schoolyr->findsy($_GET['studentId']);
					if ($NumberofResult == 0){
						// message("This Student is advice to go back from step 1!","error");
						// check_message();
 						redirect("enrollment.php?studentId=".$_GET['studentId']);


					}else{

						$sy = $Schoolyr->single_sy($_GET['sy']);
						$course = new Course();
						$studcourse = $course->single_course($sy->COURSE_ID);
						//the button in assigning the subjects.
						$button ='<a href = "index.php?view=assign&studentId='.$_GET['studentId'].'&SY='.$sy->AY.'&cid='.$sy->COURSE_ID.'&sy='.$_GET['sy'].'" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Assign Subject</a>
						 <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>';

					}

					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);

				}
			}

  ?>
<div class="btn-group" id="divButtons" name="divButtons">

<input type="button" value="Print" onclick="printdiv('printout');"
    class="btn btn-primary">
<!-- <a href = "assignstudentsubjects.php?studentId=<?php // echo (isset($_GET['studentId'])) ? $_GET['studentId'] : 'ID' ; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Assign Subject</a> -->
<!--  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
</div>
                </div>
                <br>
        <!-- <form class="form-horizontal span4" action="#.php" method="POST"> -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Report Card of Students </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="container">
                        <div class="well">
                            <span id="printout">
                                <table>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <p><b>ID Number :
                                                    </b><?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?><br />
                                                    <b>Name
                                                        : </b><?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?><br />
                                                    <!-- <b>Status :
                                                    </b><?php echo (isset($sy)) ? $sy->STATUS : 'STATUS' ;?><br /> -->
                                                    <b>AY : </b><?php echo (isset($sy)) ? $sy->AY : 'STATUS' ;?><br />
                                                    <b>Course :
                                                    </b><?php echo (isset($studcourse)) ? $studcourse->COURSE_DESC : 'Department' ;?>
                                                  </p>
                                            </td>

                                        </tr>
                                    </tbody>

                                </table>
                            
                                <center style="font-weight: bold; color: black;"><?php echo (isset($sy)) ? $sy->SEMESTER : 'COURSE' ;?> Semester</center>  
                                <p></p>
                                <form class="form-horizontal span4"
                                    action="controller.php?action=delsubj&studentId=<?php echo $_GET['studentId']; ?>&cid=<?php echo $_GET['cid']; ?>&sy=<?php echo $_GET['sy']; ?>"
                                    method="POST">
                                    <table class="table table-striped" cellspacing="0" id="table">

                                        <thead>
                                            <tr>


                                                <th>Subject</th>
                                                <th class="bottom">Description</th>
                                              <!--  <th class="bottom">Semester</th>-->
                                                <th>Lec Unit</th>
                                                <th>Lab Unit</th>
                                                <th>Total Units</th>
                                                <th>Grade</th>
                                                <th>Remarks</th>
                                                <!--	<th class="bottom">Semester</th>
								 		<th class="bottom">Department</th>
								 		<th class="bottom">Pre-requisite</th>
								 		<th align="center" class="bottom">Unit</th>
								  		-->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
							 			$cid = (isset($studcourse)) ? $studcourse->COURSE_ID : 0;
									  		$mydb->setQuery("SELECT * 
															FROM  `subject` s,  `course` c ,`grades` g
															WHERE s.`COURSE_ID` = c.`COURSE_ID` AND s.`SUBJ_ID`=g.`SUBJ_ID` 
															AND  `IDNO` = ".$_GET['studentId']. " AND c.`COURSE_ID`=".$_GET['cid']);
									
								  			$cur = $mydb->loadResultlist();
											foreach ($cur as $result) {
                                                if($result->SEMESTER == $_GET['sem']){
										  		echo '<tr>';
										  		echo '<td width="15%">'. $result->SUBJ_CODE .'</td>';
										  		echo '<td width="30%">'. $result->SUBJ_DESCRIPTION.'</td>';
                                        //echo '<td>'. $result->SEMESTER.'</td>';
									  			echo '<td>'.$result->LEC_UNIT.'</td>';
										  		echo '<td>'. $result->LAB_UNIT.'</td>';
												echo '<td align="center">'. $result->UNIT.'</td>';
										  	//	echo '<td>'. $result->LEC_UNIT + $result->LAB_UNIT.'</td>';
										  		
                                                  if($result->AVE == "0"){
                                                    echo '<td>&nbsp;</td>';
                                                  } else{
                                                    echo '<td>'. $result->AVE.'</td>';
                                                  }
                                                  if($result->REMARKS == "NONE"){
                                                    echo '<td>&nbsp;</td>';
                                                  } else{
                                                    echo '<td>'. $result->REMARKS.'</td>';
                                                  }
										  		// echo '<td>'. $result->REMARKS.'</td>';  	
										  	//	echo '<td>'. $result->SEMESTER.'</td>';
										  	//	echo '<td>'. $result->COURSE_NAME.'</td>';
										  		//echo '<td>'. $result->COURSE_LEVEL.'</td>';
				  							//	echo '<td>'. $result->PRE_REQUISITE.'</td>';
				  							

										  		echo '</tr>';}
									  		}
									  	 
								  	?>
                                        </tbody>

                                    </table>
                            </span>



                             </form>
                                </body>

                                </html>
                            </div>
                        </div>

                        </form>

                  
            </div>
        </div>
        <!--/span-->
        <!--  </form> -->




    </div>
</div>
<script>
function tablePrint() {
    document.all.divButtons.style.visibility = 'hidden';
    var display_setting = "toolbar=no,location=no,directories=no,menubar=no,";
    display_setting += "scrollbars=no,width=500, height=500, left=100, top=25";
    //   var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
    var content_innerhtml = document.getElementById("printout").innerHTML;
    var document_print = window.open("", "", display_setting);
    document_print.document.open();
    document_print.document.write(
        '<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
    document_print.document.write(content_innerhtml);
    document_print.document.write('</body></html>');
    document_print.print();
    // document_print.document.close();

    return false;
}

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
$(document).ready(function() {
    oTable = jQuery('#example').dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers"
    });
});
</script>
