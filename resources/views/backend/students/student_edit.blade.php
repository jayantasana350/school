@extends('backend.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>Form Steps</h3>
                        <ol class="breadcrumb breadcrumb-simple">
                            <li><a href="#">StartUI</a></li>
                            <li><a href="#">Components</a></li>
                            <li class="active">Form Steps</li>
                        </ol>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <a href="{{ route('StudentsList') }}" class="btn btn-inline btn-warning"><i class="font-icon fa fa-list"></i> All Added Students</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="box-typical box-panel mb-4">
            <header class="box-typical-header">
                <div class="tbl-row">
                    <div class="tbl-cell tbl-cell-title">
                        <h3>Form steps example</h3>
                    </div>
                </div>
            </header>
            <style>
                .steps.clearfix ul {
                    text-align: center !important;
                }
                .wizard>.content>.body {
                float: left;
                position: inherit !important;
                top: 0;
                width: 100%;
                height: 100%;
                padding: 22px;
            }
            </style>
            <div class="box-typical-body">
                <form id="example-form" class="form-wizard" action="{{ route('StudentUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <h3>Basic Details</h3>
                        <section>
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $students->id }}">
                                <label for="exampleInputEmail1">Full Name</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="name" class="form-control" value="{{ $students->name }}"/>
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Date of Birth</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="date" name="dateofbirth" class="form-control" value="{{ $students->dateofbirth }}"/>
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nationality</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <select name="country_id" id="country_id" class="form-control">
                                        @foreach ($countries as $country)
                                        <option @if ($country->id == $students->country_id) selected @endif value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="glyphicon glyphicon-bookmark"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">State of Origin</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <select name="state_id" id="state_id" class="form-control">
                                        @foreach ($states as $state)
                                        <option @if ($state->id == $students->state_id) selected @endif value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="glyphicon glyphicon-tags"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Local Govt.</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <select name="city_id" id="city_id" class="form-control">
                                        @foreach ($cities as $city)
                                        <option @if ($city->id == $students->city_id) selected @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="glyphicon glyphicon-tag"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <select name="gender" id="exampleInputEmail1" class="form-control">
                                        <option @if ($students->gender == 'Male') selected @endif value="Male">Male</option>
                                        <option @if ($students->gender == 'Female') selected @endif value="Female">Female</option>
                                        <option @if ($students->gender == 'Others') selected @endif value="Others">Others</option>
                                    </select>
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Religion</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="religion" class="form-control" value="{{ $students->religion }}">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Photo</label>
                                <input type="file" name="image" class="form-control">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </section>
                        <h3>Academic Details</h3>
                        <section>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Admission Name</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="admission_name" class="form-control" value="{{ $students->admission_name }}">
                                    <i class="glyphicon glyphicon-equalizer"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Section</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <select name="section" id="section" class="form-control" aria-describedby="emailHelp">
                                        @foreach ($classes as $class)
                                            <option @if ($class->class_name == $students->section) selected @endif value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Class lavel</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <select name="class_lavel" id="class_lavel" class="form-control" aria-describedby="emailHelp">
                                        @foreach ($subclasses as $subclass)
                                        <option @if ($subclass->subclass_name == $students->class_lavel) selected @endif value="{{ $subclass->subclass_name }}">{{ $subclass->subclass_name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Registration</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="registration" class="form-control" value="{{ $students->registration }}">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Admission Date</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="date" name="admission_date" class="form-control" value="{{ $students->admission_date }}">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </div>
                            </div>
                        </section>
                        <h3>Gardian Information</h3>
                        <section>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fathers Name</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="father_name" class="form-control" value="{{ $students->father_name }}">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fathers Occupation</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="father_occupation" class="form-control" value="{{ $students->father_occupation }}">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mothers Name</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="mother_name" class="form-control" value="{{ $students->mother_name }}">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mothers Occupation</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="mother_occupation" class="form-control" value="{{ $students->mother_occupation }}">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </section>
                        <h3>Contact Details</h3>
                        <section>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Phone Number</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="student_number" name="student_phone" class="form-control" value="{{ $students->student_phone }}">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gardian Phone Number</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="gardian_number" name="gardian_phone" class="form-control" value="{{ $students->gardian_phone }}">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="email" name="email" class="form-control" value="{{ $students->email }}">
                                    <i class="glyphicon glyphicon-send"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Home Address</label>
                                <div class="form-control-wrapper form-control-icon-left">
                                    <input type="text" name="address" class="form-control" value="{{ $students->address }}">
                                    <i class="glyphicon glyphicon-home"></i>
                                </div>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 m-auto">
                                    <button type="submit" class="btn btn-inline btn-primary">Submit Student</button>
                                </div>
                            </div>
                        </section>

                    </div>
                </form>
            </div><!--.box-typical-body-->
        </section>
    </div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@section('footer_js')
<script type="text/javascript">
    $(document).ready(function(){
  $('#country_id').change(function(){
        var countryID = $(this).val();
        if (countryID) {
            $.ajax({
                type:"GET",
                url:"{{ url('api/get-state-list') }}/" +countryID,
                success:function(res){
                    if (res) {
                        $("#state_id").empty();
                        $("#state_id").append('<option>Select State</option>');
                        $.each(res,function(key, value){
                            $("#state_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }else{
                        $("#state_id").empty();
                    }
                }
            });
        }else{
            $("#state_id").empty();
            $("#city_id").empty();
        }
    });
    $('#state_id').change(function(){
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                type:"GET",
                url:"{{ url('api/get-city-list') }}/"+stateID,
                success:function(res){
                    if (res) {
                        $("#city_id").empty();
                        $("#city_id").append('<option>Select State</option>');
                        $.each(res,function(key,value){
                            $("#city_id").append('<option name="section" value="'+value.id+'">'+value.name+'</option>');
                        });
                    }else{
                        $("#city_id").empty();
                    }
                }
            });
        }else{
            $("#city_id").empty();
        }
	});
});
</script>
@endsection
