<div class="rows">
    <div class="col-12 col-sm-12 col-lg-12">
        <?php
		  	 if (isset($_GET['studentId'])){
				$student = new Student();
				$cur = $student->single_student($_GET['studentId']);
			}
		?>

        <form class="form-horizontal span6" action="controller.php?action=enroll" method="POST">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Enroll Student</h3>
                </div>
                <div class="panel-body">
                    <div class='row'>
                        <div class="col-md-8" id="idno">
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="Semester">ID Number: </label>
                                <div class="col-md-6">
                                    <input class="form-control input-sm" id="idno" name="idno" readonly
                                        placeholder="ID Number" type="text"
                                        value="<?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-8" id="idno">
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="Semester">Name: </label>
                                <div class="col-md-6">
                                    <input class="form-control input-sm" readonly placeholder="ID Number" type="text"
                                        value="<?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?>">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="Status">Status : </label>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="Status" id="Status">
                                        <option value="New">New Student</option>
                                        <option value="Continuing">Continuing</option>
                                        <option value="Trasferee">Trasferee</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="course">Course :</label>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="course" id="course">
                                        <?php
												$course = new Course();
												$cur = $course->listOfcourse();	
												foreach ($cur as $course) {
													echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_DESC.'</option>';
												}
											?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input class="form-control input-sm" name="ay" readonly placeholder="Academic Year" type="hidden"
                        value="<?php echo date('Y').'-'.(date('Y')+1); ?>">

                    <div class='row'>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="Semester">Semester : </label>
                                <div class="col-md-6">
                                    <select class="form-control input-sm" name="Semester" id="Semester">
                                        <option value="First">First</option>
                                        <option value="Second">Second</option>
                                        <option value="Summer">Summer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-10" id="idno">
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>

                                <div class="col-md-8">
                                    <?php
										if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
											echo '
												<div class="btn-group"> 
												<a href="index.php" name="back" class="btn btn-default"></span>Back</a>
												<button type="submit" name="savestep1" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
											</div>';
										}
									?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
