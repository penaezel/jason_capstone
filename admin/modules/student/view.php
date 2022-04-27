<div class="container">
    <div class="well">
        <h3 align="left">Student Enrollment Records</h3>

        <form action="controller.php?action=delsy&studentId=<?php echo $_GET['studentId']; ?>" Method="POST">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">
                            School Year</th>
                        <th>Date Enrolled</th>
                        <th>Course</th>
                        <!-- <th>Status</th> -->
                        <th>Year Level</th>
                        <th>Semester</th>
                        <th>Options</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
				  		$mydb->setQuery("SELECT  `COURSE_NAME` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER` , `YEAR_LEVEL`, s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
										FROM  `schoolyr` s,  `course` c
										WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_GET['studentId']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		// echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$schoolyr->SYID. '"/>
				  		// 		<a href="index.php?view=editenrollment&studentId='.$_GET['studentId'].'&id='.$schoolyr->SYID.'">' . $schoolyr->COURSE_NAME.'</a></td>';
						echo '<td><input class="mr-2" type="checkbox" name="selector[]" id="selector[]" value="'.$schoolyr->SYID. '"/>'.$schoolyr->AY.'</td>';
						  
				  		echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		// echo '<td>'. $schoolyr->STATUS.'</td>';
				  		echo '<td>'. $schoolyr->COURSE_NAME.'</td>';
						  echo '<td>'. $schoolyr->YEAR_LEVEL.'</td>';
						  echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td><a href = "index.php?view=subject&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'&sem='.$schoolyr->SEMESTER.'">Enrolled Subjects</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
                </tbody>

            </table>
            <?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
		
			echo   '<div class="btn-group">
				  <a href="index.php?view=enroll&studentId='. $_GET['studentId'].'" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
				
				 }
				?>
        </form>
    </div>
    <!--End of well-->

</div>
<!--End of container-->
