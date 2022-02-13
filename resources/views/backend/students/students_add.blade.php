@extends('backend.master')

@section('content')

<div class="page-content">
    {{-- <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h2>Dashboard</h2>
                        <div class="subtitle">Welcome to Ultimate Dashboard</div>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <a href="{{ route('StudentsList') }}" type="button" class="btn btn-inline" title="All Student Lists"> <i class="fa fa-list"></i></a>
                        <button type="button" class="btn btn-inline" title="Excel Upload"> <i class="fa fa-cloud-upload"></i></button>
                        <button type="button" class="btn btn-inline" title="Excel Download"> <i class="fa fa-cloud-download"></i></button>
                        <button type="button" class="btn btn-inline" title="PDF Download"> <i class="fa fa-file-pdf-o"></i></button>
                    </div>
                </div>
            </div>
        </header>
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="style.css" />
            <script src="script.js" defer></script>
            <title>Registraion Form</title>
          </head>
          <body>
            <form action="#" class="form">
              <h1 class="text-center">Registration Form</h1>
              <!-- Progress bar -->
              <div class="progressbar">
                <div class="progress" id="progress"></div>

                <div
                  class="progress-step progress-step-active"
                  data-title="Intro"
                ></div>
                <div class="progress-step" data-title="Contact"></div>
                <div class="progress-step" data-title="ID"></div>
                <div class="progress-step" data-title="Password"></div>
              </div>

              <!-- Steps -->
              <div class="form-step form-step-active">
                <div class="input-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" />
                </div>
                <div class="input-group">
                  <label for="position">Position</label>
                  <input type="text" name="position" id="position" />
                </div>
                <div class="">
                  <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                </div>
              </div>
              <div class="form-step">
                <div class="input-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" id="phone" />
                </div>
                <div class="input-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" />
                </div>
                <div class="btns-group">
                  <a href="#" class="btn btn-prev">Previous</a>
                  <a href="#" class="btn btn-next">Next</a>
                </div>
              </div>
              <div class="form-step">
                <div class="input-group">
                  <label for="dob">Date of Birth</label>
                  <input type="date" name="dob" id="dob" />
                </div>
                <div class="input-group">
                  <label for="ID">National ID</label>
                  <input type="number" name="ID" id="ID" />
                </div>
                <div class="btns-group">
                  <a href="#" class="btn btn-prev">Previous</a>
                  <a href="#" class="btn btn-next">Next</a>
                </div>
              </div>
              <div class="form-step">
                <div class="input-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" />
                </div>
                <div class="input-group">
                  <label for="confirmPassword">Confirm Password</label>
                  <input
                    type="password"
                    name="confirmPassword"
                    id="confirmPassword"
                  />
                </div>
                <div class="btns-group">
                  <a href="#" class="btn btn-prev">Previous</a>
                  <input type="submit" value="Submit" class="btn" />
                </div>
              </div>
            </form>
          </body>
        </html>

    </div><!--.container-fluid--> --}}




    <div class="container-fluid">
      <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h2>Dashboard</h2>
                    <div class="subtitle">Welcome to Ultimate Dashboard</div>
                </div>
                <div class="tbl-cell tbl-cell-action button">
                    <a href="{{ route('StudentsList') }}" type="button" class="btn btn-inline" title="All Student Lists"> <i class="fa fa-list"></i></a>
                    <button type="button" class="btn btn-inline" title="Excel Upload"> <i class="fa fa-cloud-upload"></i></button>
                    <button type="button" class="btn btn-inline" title="Excel Download"> <i class="fa fa-cloud-download"></i></button>
                    <button type="button" class="btn btn-inline" title="PDF Download"> <i class="fa fa-file-pdf-o"></i></button>
                </div>
            </div>
        </div>
    </header>
      <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center p-0 mt-3 mb-2">
              <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                  <form id="msform">
                      <!-- progressbar -->
                      <ul id="progressbar">
                          <li class="active" id="account"><strong>Basic Details</strong></li>
                          <li id="personal"><strong>Acadamic Details</strong></li>
                          <li id="payment"><strong>Gardian Information</strong></li>
                          <li id="confirm"><strong>Contact Details</strong></li>
                      </ul>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <br> <!-- fieldsets -->
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title"></h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 1 - 4</h2>
                                  </div>
                              </div>
                              <label class="fieldlabels">First Name: *</label>
                              <input type="text" name="first_name" placeholder="First Name" />
                              <label class="fieldlabels">Middle Name: *</label>
                              <input type="text" name="middle_name" placeholder="Middle Name" />
                              <label class="fieldlabels">Last Name: *</label>
                              <input type="text" name="last_name" placeholder="Last Name" />
                              <label class="fieldlabels">Date of Birth: *</label>
                              <input type="email" name="date" placeholder="Date of Birth" />
                              <label class="fieldlabels">Nationality: *</label>
                              <select name="nationality" class="fieldlabels" id="nationality">
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                              </select>
                              <label class="fieldlabels">State of Origin: *</label>
                              <select name="state" class="fieldlabels" id="state">
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                              </select>
                              <label class="fieldlabels">Local Govt.: *</label>
                              <select name="localgovt" class="fieldlabels" id="localgovt">
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                              </select>
                              <label class="fieldlabels">Gender: *</label>
                              <select name="gender" class="fieldlabels" id="gender">
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                              </select>
                              <label class="fieldlabels">Religion: *</label>
                              <select name="religion" class="fieldlabels" id="religion">
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                                  <option value="">Bangladeshi</option>
                              </select>
                              <label class="fieldlabels">Select Image: *</label>
                              <input type="file" name="image" />
                          </div>
                          <input type="button" name="next" class="next action-button" value="Next" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Personal Information:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 2 - 4</h2>
                                  </div>
                              </div>
                              <label class="fieldlabels">First Name: *</label>
                              <input type="text" name="fname" placeholder="First Name" />
                              <label class="fieldlabels">Last Name: *</label>
                              <input type="text" name="lname" placeholder="Last Name" />
                              <label class="fieldlabels">Contact No.: *</label>
                              <input type="text" name="phno" placeholder="Contact No." />
                              <label class="fieldlabels">Alternate Contact No.: *</label>
                              <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                          </div>
                          <input type="button" name="next" class="next action-button" value="Next" />
                          <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                      <fieldset>
                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title">Image Upload:</h2>
                                  </div>
                                  <div class="col-5">
                                      <h2 class="steps">Step 3 - 4</h2>
                                  </div>
                              </div>
                              <label class="fieldlabels">Upload Your Photo:</label>
                              <input type="file" name="pic" accept="image/*">
                              <label class="fieldlabels">Upload Signature Photo:</label>
                              <input type="file" name="pic" accept="image/*">
                          </div>
                          <input type="button" name="next" class="next action-button" value="Submit" />
                          <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                      <fieldset>
                        <div class="form-card">
                          <div class="row">
                              <div class="col-7">
                                  <h2 class="fs-title">Image Upload:</h2>
                              </div>
                              <div class="col-5">
                                  <h2 class="steps">Step 3 - 4</h2>
                              </div>
                          </div>
                          <label class="fieldlabels">Upload Your Photo:</label>
                          <input type="file" name="pic" accept="image/*">
                          <label class="fieldlabels">Upload Signature Photo:</label>
                          <input type="file" name="pic" accept="image/*">
                      </div>
                      <input type="button" name="next" class="next action-button" value="Submit" />
                      <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      </fieldset>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div><!--.page-content-->
@endsection

@section('footer_js')
  <script>
    $(document).ready(function(){

      var current_fs, next_fs, previous_fs; //fieldsets
      var opacity;
      var current = 1;
      var steps = $("fieldset").length;

      setProgressBar(current);

      $(".next").click(function(){

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
      step: function(now) {
      // for making fielset appear animation
      opacity = 1 - now;

      current_fs.css({
      'display': 'none',
      'position': 'relative'
      });
      next_fs.css({'opacity': opacity});
      },
      duration: 500
      });
      setProgressBar(++current);
      });

      $(".previous").click(function(){

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();

      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
      step: function(now) {
      // for making fielset appear animation
      opacity = 1 - now;

      current_fs.css({
      'display': 'none',
      'position': 'relative'
      });
      previous_fs.css({'opacity': opacity});
      },
      duration: 500
      });
      setProgressBar(--current);
      });

      function setProgressBar(curStep){
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
      .css("width",percent+"%")
      }

      $(".submit").click(function(){
      return false;
      })

      });
  </script>
@endsection
