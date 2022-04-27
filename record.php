 <div class="container bg-white shadow py-3" style="margin-top: 120px">
     <caption>
         <h3 align="left">Student Enrollment Records</h3>
     </caption>
     <form action="controller.php?action=delsy&studentId=<?php echo $_SESSION['IDNO']; ?>" Method="POST">
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th>School Year</th>
                     <th>Date Enrolled</th>
                     <th>Course</th>
                     <th>Year Level</th>
                     <th>Semester</th>
                     <th>Options</th>
                 </tr>
             </thead>
             <tbody>
                 <?php 
				  		$mydb->setQuery("SELECT  `COURSE_NAME` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER`, `YEAR_LEVEL` , s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
										FROM  `schoolyr` s,  `course` c
										WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_SESSION['IDNO']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
				  		echo '<tr>';
						  echo '<td>'. $schoolyr->AY.'</td>';
						  echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		echo '<td>' . $schoolyr->COURSE_DESC.'</td>';
				  		echo '<td>'. $schoolyr->YEAR_LEVEL.'</td>';
						  echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		
				  		echo '<td><a href = "index.php?page=4&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'&sem='.$schoolyr->SEMESTER.'">Enrolled Subjects</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
             </tbody>
         </table>

     </form>
 </div>
 <!--End of well-->

 </div>
 <!--End of container-->
