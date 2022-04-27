  <div class="ftco-blocks-cover-1"  style="background-color: green;">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/school.jpeg')">
        
      </div>
  </div>


  <div class="site-section" style="margin-top: -450px;">
      <div class="container">
          <div class="row">
              <div class="col-md-5 pr-md-5 mr-auto" style="color: white;">
                  <h2 style="color: white;">Logged In</h2>
                  <p>This area is a student area that you can view a student profile and subject with grades</p>
              </div>
              <div class="col-md-6">
                  <div class="quick-contact-form bg-white">
                      <h2>Login Information</h2>
                      <hr />
                      <span class="fa fa-user"> </span> <label>
                          <?Php echo $_SESSION['FNAME'];?>
                      </label>
                      <span class="fa fa-cog"> </span> <label>
                          <?Php echo $_SESSION['LNAME'];?>
                      </label><br />
                      <hr />
                     
                  </div>
              </div>
          </div>
      </div>
  </div>
