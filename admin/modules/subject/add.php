<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">
    <fieldset>
        <legend>New Subject</legend>
        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="subjcode">Subject Code</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder="Subject Code"
                        type="text" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="subjdesc">Subject Description</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder="Subject Description"
                        type="text" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="lec_unit">Lecture units</label>
                <div class="col-md-8">
                    <input class="form-control input-sm" id="lec_unit" name="lec_unit" placeholder="Lecture units"
                        type="number" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="lab_unit">Lab units</label>
                <div class="col-md-8">
                    <input class="form-control input-sm" id="lab_unit" name="lab_unit" placeholder="Lab units"
                        type="number" value="">
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
                      $cur = $course->listOfDistinctcourse(); 
                      foreach ($cur as $course) {
                        echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.' </option>';
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
                        <option value="1">First Year</option>
                        <option value="2">Second Year</option>
                        <option value="3">Third Year</option>
                        <option value="4">Fourth Year</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="Semester">Semester</label>

                <div class="col-md-8">
                    <select class="form-control input-sm" name="Semester" id="Semester">
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                        <option value="Summer">Summer</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="pre">Pre-requisite</label>
                <div class="col-md-8">
                    <input class="form-control input-sm" id="pre" name="pre" placeholder="Enter subject code"
                        type="text" value="">
                    <!-- <select class="form-control input-sm" name="pre" id="pre">
                        <option value="">None</option>
                        <?php
                            $subjects = new Subject();
                            $subject = $subjects->listOfsubject(); 
                            foreach ($subject as $subjects) {
                                echo '<option value="'. $subjects->SUBJ_ID.'">'.$subjects->SUBJ_CODE.' </option>';
                            }
                        ?>
                    </select> -->
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                    <button class="btn btn-default" name="savecourse" type="submit"><span
                            class="glyphicon glyphicon-floppy-save"></span> Save</button>
                    <button class="btn btn-default" name="saveandnewcourse" type="submit"><span
                            class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>
</div>
<!--End of container-->
