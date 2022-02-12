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
                        <a href="{{ route('StudentsList') }}" type="button" class="btn btn-inline" title="All Student Lists"> <i class="fa fa-list"></i></a>
                        <button type="button" class="btn btn-inline" title="Excel Upload"> <i class="fa fa-cloud-upload"></i></button>
                        <button type="button" class="btn btn-inline" title="Excel Download"> <i class="fa fa-cloud-download"></i></button>
                        <button type="button" class="btn btn-inline" title="PDF Download"> <i class="fa fa-file-pdf-o"></i></button>
                    </div>
                </div>
            </div>
        </header>

        <section class="tabs-section">
            <div class="tabs-section-nav tabs-section-nav-inline">
                <ul class="nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tabs-4-tab-1" role="tab" data-toggle="tab">
                            Student Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-4-tab-2" role="tab" data-toggle="tab">
                            In Process
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-4-tab-3" role="tab" data-toggle="tab">
                            Replacement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-4-tab-4" role="tab" data-toggle="tab">
                            In Process
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-4-tab-5" role="tab" data-toggle="tab">
                            Active Certs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-4-tab-6" role="tab" data-toggle="tab">
                            Pending Renewal
                        </a>
                    </li>
                </ul>
            </div><!--.tabs-section-nav-->

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="tabs-4-tab-1">
                        <div class="container-fluid">

                            <div class="box-typical box-typical-padding">

                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" id="inputPassword" placeholder="Enter Full Name"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Middle Name</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="text" name="middle_name"  value="{{ old('middle_name') }}"class="form-control" id="inputPassword" placeholder="Enter Full Name"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" id="inputPassword" placeholder="Enter Full Name"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Date Of Birth</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" id="inputPassword" placeholder="Enter Full Name"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Roll Number</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="text" name="roll" value="{{ old('roll') }}" class="form-control" id="inputPassword" placeholder="Enter Roll Number"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Username</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="text" name="username" value="{{ old('username') }}" class="form-control" id="inputPassword" placeholder="Enter Username"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="number" name="phone" value="{{ old('phone') }}" class="form-control" id="inputPassword" placeholder="Ex: 0123456789"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleSelect" class="col-sm-2 form-control-label">Nationality</label>
                                        <div class="col-sm-10">
                                            <select id="exampleSelect" class="form-control">
                                                <option>Select Nationality</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleSelect" class="col-sm-2 form-control-label">State of Origin</label>
                                        <div class="col-sm-10">
                                            <select id="exampleSelect" class="form-control">
                                                <option>Select State</option>
                                                <option>Dhaka</option>
                                                <option>Chottogram</option>
                                                <option>Noyakhali</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleSelect" class="col-sm-2 form-control-label">Local Govt</label>
                                        <div class="col-sm-10">
                                            <select id="exampleSelect" class="form-control">
                                                <option>Select Local Govt.</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleSelect" class="col-sm-2 form-control-label">Gender</label>
                                        <div class="col-sm-10">
                                            <select id="exampleSelect" class="form-control">
                                                <option>Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Religion</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static"><input type="text" name="religion" value="{{ old('religion') }}" class="form-control" id="inputPassword" placeholder="Ex: 0123456789"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary">Save Details</button>
                                        </div>
                                    </div>
                                </form>

                            </div><!--.box-typical-->
                        </div><!--.container-fluid-->
                </div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-4-tab-2">Tab 2</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-4-tab-3">Tab 3</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-4-tab-4">Tab 4</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-4-tab-5">Tab 5</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-4-tab-6">Tab 6</div><!--.tab-pane-->
            </div><!--.tab-content-->
        </section><!--.tabs-section-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@section('footer_js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        @if(session('DormitoryStore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Dormitory Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('DormitoryUpdate'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Dormitory Update Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('DormitoryDelete'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Dormitory Delete Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('DormitoryRestore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Dormitory Restore Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('DormitoryPermanentDelete'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Dormitory Permanent Delete Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
    </script>
