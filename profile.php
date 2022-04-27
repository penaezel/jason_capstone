<div class="container shadow py-3" style="margin-top: 120px; background-color: white;">
    <?php
		check_message();
			
		?>
    <div class="wellss">
        <?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>

        <fieldset>
            <legend style=" color: black;">Student Information</legend><br>
            <table class="table table-bordered" cellspacing="0">
                <tr>
                    <td style="font-weight: bold;">ID Number :</td>
                    <td width="80%"><?php echo $cur->IDNO; ?></td>
                </tr>
                <td style="font-weight: bold;">Fullname :</td>
                <td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>
                </tr>
                </tr>
                <td style="font-weight: bold;">Gender :</td>
                <td><?php 
								if($cur->SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>
                </tr>
                <td style="font-weight: bold;">Age :</td>
                <td><?php echo $cur->AGE; ?></td>
                </tr>
                <td style="font-weight: bold;">Birth Date :</td>
                <td><?php echo $cur->BDAY; ?></td>
                </tr>
                <td style="font-weight: bold;">Place of Birth :</td>
                <td><?php echo $cur->BPLACE; ?></td>
                </tr>
                <td style="font-weight: bold;">Civil Status :</td>
                <td><?php echo $cur->STATUS; ?></td>
                </tr>
                <td style="font-weight: bold;">Nationality :</td>
                <td><?php echo $cur->NATIONALITY; ?></td>
                </tr>
                <td style="font-weight: bold;">Religion :</td>
                <td><?php echo $cur->RELIGION; ?></td>
                </tr>
                <td style="font-weight: bold;">Contact No. :</td>
                <td><?php echo $cur->CONTACT_NO; ?></td>
                </tr>
                <td style="font-weight: bold;">Email Address :</td>
                <td><?php echo $cur->EMAIL; ?></td>
                </tr>
                <td style="font-weight: bold;">Home Address :</td>
                <td><?php echo $cur->HOME_ADD; ?></td>
                </tr>

                </tr>
            </table>


        </fieldset>
        <?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);
				?>
        <fieldset><br>
            <legend style="color: black;">Secondary details</legend>
            <table class="table table-bordered" cellspacing="0" width="100%">
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Father :</td>
                        <td width="80%"><?php echo $det->FATHER; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Occupation :</td>
                        <td><?php echo $det->FATHER_OCCU; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Mother :</td>
                        <td><?php echo $det->MOTHER; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Occupation :</td>
                        <td><?php echo $det->MOTHER_OCCU; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Boarding :</td>
                        <td><?php echo $det->BOARDING; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">With family :</td>
                        <td><?php echo $det->WITH_FAMILY; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Guardian :</td>
                        <td><?php echo $det->GUARDIAN; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Address :</td>
                        <td><?php echo $det->GUARDIAN_ADDRESS; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Other Person Supporting :</td>
                        <td><?php echo $det->OTHER_PERSON_SUPPORT; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Address :</td>
                        <td><?php echo $det->ADDRESS; ?></td>
                    </tr>
                </tbody>
            </table>



        </fieldset>
        <!--
        <?php
				$req = new Requirements();
				$res = $req->single_result($_SESSION['IDNO']);
				?>
        <fieldset><br>
            <legend style="color: black;">Requirements</legend>
            <table class="table table-bordered" cellspacing="0">
                <tr>
                    <td style="font-weight: bold;">NSO :</td>
                    <td width="80%"><?php echo $res->NSO; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Baptismal :</td>
                    <td><?php echo $res->BAPTISMAL; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Entrance test Result :</td>
                    <td><?php echo $res->ENTRANCE_TEST_RESULT; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Marriage Contract :</td>
                    <td><?php echo $res->MARRIAGE_CONTRACT; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Certificate Of Transfer :</td>
                    <td><?php echo $res->CERTIFICATE_OF_TRANSFER; ?></td>
                </tr>

            </table>

        </fieldset>

    </div>
    <!--End of well-->

</div>
<!--End of container-->
