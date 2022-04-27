<?php
    $subjid = $_GET['id'];
    $singlesubject = new Subject();
    $object = $singlesubject->single_subject($subjid);
?>

<form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $subjid;?>" method="POST">
    <fieldset>
        <legend>Edit Subject</legend>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="subjcode">Subject Code</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder="Subject Code"
                        type="text" value="<?php echo $object->SUBJ_CODE;?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="subjdesc">Subject Description</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder="Subject Description"
                        type="text" value="<?php echo $object->SUBJ_DESCRIPTION;?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="lec_unit">Lecture units</label>
                <div class="col-md-8">
                    <input class="form-control input-sm" id="lec_unit" name="lec_unit" placeholder="Lecture units"
                        type="number" value="<?php echo $object->LEC_UNIT;?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="lab_unit">Lab units</label>
                <div class="col-md-8">
                    <input class="form-control input-sm" id="lab_unit" name="lab_unit" placeholder="Lab units"
                        type="number" value="<?php echo $object->LAB_UNIT;?>">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="course">Course</label>

                <div class="col-md-8">
                    <select class="form-control input-sm" name="course" id="course">
                        <?php
              	$course = new Course();
              	$cur = $course->listOfcourse();	
              	foreach ($cur as $course) {
                  ?>
                        <option value="<?php echo $course->COURSE_ID; ?>"
                            <?php if($course->COURSE_ID == $object->COURSE_ID){ ?> selected="selected" <?php } ?>>
                            <?php echo $course->COURSE_NAME;?></option>
                        <?php
              	}

              	?>

                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="Semester">Year Level</label>

                <div class="col-md-8">
                    <select class="form-control input-sm" name="yearLevel" id="yearLevel">
                        <option <?php if ($object->YEAR_LEVEL == '1') echo ' selected="selected"'; ?> value="1">First
                            Year
                        </option>
                        <option <?php if ($object->YEAR_LEVEL == '2') echo ' selected="selected"'; ?> value="2">Second
                            Year</option>
                        <option <?php if ($object->YEAR_LEVEL == '3') echo ' selected="selected"'; ?> value="3">Third
                            Year
                        </option>
                        <option <?php if ($object->YEAR_LEVEL == '4') echo ' selected="selected"'; ?> value="4">Fourth
                            Year</option>
                        <option <?php if ($object->YEAR_LEVEL == '5') echo ' selected="selected"'; ?> value="5">Fifth
                            Year
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="Semester">Semester</label>

                <div class="col-md-8">
                    <select class="form-control input-sm" name="Semester" id="Semester">
                        <option <?php if ($object->SEMESTER == 'First') echo ' selected="selected"'; ?> value="First">
                            First</option>
                        <option <?php if ($object->SEMESTER == 'Second') echo ' selected="selected"'; ?> value="Second">
                            Second</option>
                        <option <?php if ($object->SEMESTER == 'Summer') echo ' selected="selected"'; ?> value="Summer">
                            Summer</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="pre">Pre-requisite</label>
                <div class="col-md-8">
                    <input class="form-control input-sm" id="pre" name="pre" placeholder="Enter subject code"
                        type="text" value="<?php echo $object->PRE_REQUISITE ?>">
                    <!-- <select class="form-control input-sm" name="pre" id="pre">
                        <option value="" <?php if($object->PRE_REQUISITE == ""){ ?> selected="selected" <?php } ?>>None
                        </option>
                        <?php
                      $subjects = new Subject();
                      $subject = $subjects->listOfsubject(); 
                      foreach ($subject as $subjects) {
                          ?>
                        <option value="<?php echo $subjects->SUBJ_ID; ?>"
                            <?php if($subjects->SUBJ_ID == $object->PRE_REQUISITE){ ?> selected="selected" <?php } ?>>
                            <?php echo $subjects->SUBJ_CODE;?></option>
                        <?php
                      }
                      ?>
                    </select> -->
                </div>
            </div>
        </div>

        <?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
	 <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "idno"></label>

          <div class="col-md-8">
            <button class="btn btn-primary" name="savecourse" type="submit" >Save</button>
          </div>
        </div>
      </div>';
    }
    ?>

    </fieldset>
</form>
</div>
<!--End of container-->
