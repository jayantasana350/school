@extends('backend.master')

@section('content')

<div class="page-content">



    <div class="container-fluid">
      <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h2>Dashboard</h2>
                    <div class="subtitle">Welcome to Ultimate Dashboard</div>
                </div>
                <div class="tbl-cell tbl-cell-action button">
                    <a href="{{ route('StudentsList') }}" type="button" class="btn btn-inline" title="All Student Lists"> <i class="fa fa-users"></i></a>
                    <button type="button" class="btn btn-inline" title="Upload Students"> <i class="fa fa-cloud-upload"></i></button>
                    <button type="button" class="btn btn-inline" title="Excel Download"> <i class="fa fa-cloud-download"></i></button>
                    <button type="button" class="btn btn-inline" title="PDF Download"> <i class="fa fa-file-pdf-o"></i></button>
                </div>
            </div>
        </div>
    </header>
      <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center p-0 mb-2">
              <div class="card p-3 mt-3 mb-3">
                  <form id="msform" action="{{ route('StudentStore') }}" method="post" enctype="multipart/form-data">
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
                                <input type="date" name="date" placeholder="Date of Birth" />
                                <label class="fieldlabels">Nationality: *</label>
                                <select name="nationality" class="fieldlabels" id="nationality">
                                    <option value="">Bangladeshi</option>
                                    <option value="">Indian</option>
                                    <option value="">Pakisthanki</option>
                                </select>
                                <label class="fieldlabels">State of Origin: *</label>
                                <select name="state" class="fieldlabels" id="state">
                                    <option value="">Khulna</option>
                                    <option value="">Dhaka</option>
                                    <option value="">Sylet</option>
                                </select>
                                <label class="fieldlabels">Local Govt.: *</label>
                                <select name="localgovt" class="fieldlabels" id="localgovt">
                                    <option value="">Koyra</option>
                                    <option value="">Paikgacha</option>
                                    <option value="">Sathkhira</option>
                                </select>
                                <label class="fieldlabels">Gender: *</label>
                                <select name="gender" class="fieldlabels" id="gender">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Other</option>
                                </select>
                                <label class="fieldlabels">Religion: *</label>
                                <select name="religion" class="fieldlabels" id="religion">
                                    <option value="">Hindu</option>
                                    <option value="">Mushlim</option>
                                    <option value="">Christian</option>
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
                                <label class="fieldlabels">Admission Number: *</label>
                                <input type="text" name="admission_number" placeholder="Admission Number" />
                                <label class="fieldlabels">Section: *</label>
                                <input type="text" name="lname" placeholder="Section" />
                                <label class="fieldlabels">Class Lavel: *</label>
                                <input type="text" name="phno" placeholder="Class Lavel" />
                                <label class="fieldlabels">Class Alphabet: *</label>
                                <input type="text" name="phno_2" placeholder="Class Alphabet" />
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
                                <label class="fieldlabels">Fathers Name:</label>
                                <input type="text" name="father_name" placeholder="Fathers Name">
                                <label class="fieldlabels">Fathers Occupation:</label>
                                <input type="text" name="father_occu" placeholder="Fathers Occupation">
                                <label class="fieldlabels">Fathers National Id:</label>
                                <input type="number" name="father_nid" placeholder="Fathers National Id">
                                <label class="fieldlabels">Mothers Name:</label>
                                <input type="text" name="mother_name" placeholder="Mothers Name">
                                <label class="fieldlabels">Mothers Occupation:</label>
                                <input type="text" name="mother_occu" placeholder="Mothers Occupation">
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
                            <label class="fieldlabels">Student Phone:</label>
                            <input type="text" name="student_phone" placeholder="Student Phone">
                            <label class="fieldlabels">Home Phone:</label>
                            <input type="text" name="home_phone" placeholder="Gardian Phone">
                            <label class="fieldlabels">Parmenent Address:</label>
                            <input type="text" name="permanent_address" placeholder="Parmenent Address">
                            <label class="fieldlabels">Present Address:</label>
                            <input type="text" name="present_address" placeholder="Present Address">
                        </div>
                        <div >
                          <button type="submit" style="width: 200px;" class="next action-button submit_btn">Update Student Details</button>
                          <button type="button" name="previous" class="previous action-button-previous" value="Previous"> Previous</button>
                        </div>

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
