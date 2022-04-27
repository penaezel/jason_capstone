<form class="form-horizontal well span6" action="controller.php?action=add" method="POST">
    <fieldset>
        <legend>New Course</legend>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="coursename">Course Code</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="coursename" name="coursename" placeholder="Course Code"
                        type="text" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="coursedesc">Description</label>

                <div class="col-md-8">
                    <input class="form-control input-sm" id="coursedesc" name="coursedesc"
                        placeholder="Course Description" type="text" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="dept">Department</label>
                <div class="col-md-8">
                    <select class="form-control" name="dept" id="dept">
                        <?php
                        $dept = new dept();
                        $cur = $dept->listOfDept(); 
                        foreach ($cur as $Department) {
                          echo '<option value="'.$Department->DEPT_ID.'">'.$Department->DEPARTMENT_DESC.'</option>';
                        }
                      ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8">
                <label class="col-md-4 control-label" for="idno"></label>

                <div class="col-md-8">
                    <button class="btn btn-default" name="savecourse" type="submit"><span
                            class="glyphicon glyphicon-floppy-save"></span> Save</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>
</div>
<!--End of container-->
