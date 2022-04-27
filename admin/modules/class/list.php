<div class="wells">
    <h3 align="left">List of Student</h3>
    <form action="controller.php?action=delete" Method="POST">
        <table id="example" class="table table-striped" cellspacing="0">

            <thead>
                <tr>
                    <th>No.</th>
                     <th width="10%" align="left"> ID#.</th>
                    <th>Fullname</th>
					<th>Email Address</th>
					
                </tr>
            </thead>
            <tbody>
                <?php
				  	
				  	  	$mydb->setQuery("SELECT  `IDNO` ,UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name',
				  						  `SEX` ,`AGE`, `BDAY` ,  `STATUS` ,  `EMAIL`
				  						  FROM  `tblstudent`");
				  	  	loadresult();

				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';
					  		echo '<td width="5%" align="center"></td>';
					  		echo '<td width="10%">
					  				<a href="index.php?view=edit&id='.$student->IDNO.'">' . $student->IDNO.'</a></td>';
					  		echo '<td  >'. $student->Name.'</td>';
							  
					  		
							echo '<td>'. $student->EMAIL.'</td>';
							echo '</tr>';
					  		}

				  		} 
				  	
				  	?>


            </tbody>

        </table>
    </form>
</div>
<!--End of well-->

</div>
<!--End of container-->
