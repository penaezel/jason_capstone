<?php
  $instid = $_GET['id'];
  $singleinstructor = new Instructor();
  $object = $singleinstructor->single_instructor($instid);

?>
 <form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $instid;?>" method="POST">

          <fieldset>
            <legend>Edit Staff</legend>
                              

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Fullname:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder=
                            "Account Name" type="text" value="<?php echo $object->INST_FULLNAME;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "address">Assigned Course:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="address" name="address" placeholder=
                            "Assigned Course" type="text" value="<?php echo $object->INST_ADDRESS;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Gender">Gender:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="Gender" id="Gender">
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "civilstats">Civil Status:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="civilstats" id="civilstats">
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "specialization">Specialization:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="specialization" name="specialization" placeholder=
                            "Specialization" type="text" value="<?php echo $object->SPECIALIZATION;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "empStats">Employment Status:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="empStats" name="empStats" placeholder=
                            "Employment Status" type="text" value="<?php echo $object->EMPLOYMENT_STATUS;?>">
                      </div>
                    </div>
                  </div>
                  


            <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Email Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value=""> -->
                         <input class="form-control input-sm" id="email" name="email" placeholder=
                            "Email Address" type="hidden" value="<?php echo $object->INST_EMAIL;?>">
                <!--     </div>
                  </div>
                      </div>
 -->


                  
            <?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
                        
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-default" name="savefaculty" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                  </div>';
                }
                ?>

              
          </fieldset> 

                  
        </form>
        </div><!--End of container-->