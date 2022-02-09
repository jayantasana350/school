@extends('backend.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>General Settings</h3>
                        <ol class="breadcrumb breadcrumb-simple">
                            <li><a href="#">StartUI</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic Inputs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>

        <div class="box-typical box-typical-padding">

            <form action="{{ route('GeneralSettingsStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Site Title</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" name="title" class="form-control" id="inputPassword" placeholder="Enter Site Title"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Language</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" name="language" class="form-control">
                            <option>English</option>
                            <option>Bangla</option>
                            <option>Hindi</option>
                            <option>Arabic</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Address</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" name="address" class="form-control" id="inputPassword" placeholder="Enter Address Line 1"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Phone No</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" name="phone" class="form-control" id="inputPassword" placeholder="Ex: +1123456789"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">System Email</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" name="email" class="form-control" id="inputPassword" placeholder="Enter System Email"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Payment Tax %</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" name="payment_tax" class="form-control" id="inputPassword" placeholder="Ex: 10%"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Footer Copyrights</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" name="footer" class="form-control" id="inputPassword" placeholder="Footer Detaisl"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Attendence Model</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <label for="Subject">
                                <input type="radio" id="Subject" name="attendencemodel" value="SUBJECT">
                            Subject Based</label>
                            <label for="class">
                                <input type="radio" id="class" name="attendencemodel" value="CLASS">
                            Class Only</label>
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Exam Details Notificaiton</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" name="exam_details" class="form-control">
                            <option>Email/SMS</option>
                            <option>Email</option>
                            <option>Notification</option>
                            <option>None</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Send Exam Details To</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" name="send_examdetails" class="form-control">
                            <option>Students</option>
                            <option>Parents</option>
                            <option>Students/Parents</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Send Students Absance Via</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" name="studants_absance" class="form-control">
                            <option>None</option>
                            <option>Email</option>
                            <option>SMS</option>
                            <option>Phone</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleSelect2" class="col-sm-2 form-control-label">Multiple select</label>
                    <div class="col-sm-10">
                        <select multiple class="form-control" name="multiple" id="exampleSelect2">
                            <option>News Board</option>
                            <option>Events</option>
                            <option>Attendance</option>
                            <option>Book Library</option>
                            <option>Payment</option>
                            <option>Media</option>
                            <option>Static Pages</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleSelect2" class="col-sm-2 form-control-label">Site Logo</label>
                    <div class="col-sm-10">
                        <input type="file" name="logo" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-inline btn-primary">Save Settings</button>
                    </div>
                </div>
            </form>
        </div><!--.box-typical-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
