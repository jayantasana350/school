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
                        <a href="{{ route('StudentsAdd') }}" type="button" class="btn btn-inline"> <i class="fa fa-plus"></i> Add Student</a>
                        <button type="button" class="btn btn-inline"> <i class="fa fa-cloud-upload"></i> Excel Upload</button>
                        <button type="button" class="btn btn-inline"> <i class="fa fa-cloud-download"></i> Excel Download</button>
                        <button type="button" class="btn btn-inline"> <i class="fa fa-file-pdf-o"></i> PDF Download</button>
                    </div>
                </div>
            </div>
        </header>
        <div class="float-right">
            {{-- <button type="button" class="btn btn-inline btn-warning" data-toggle="modal" data-target="#Dormitory"><i class="font-icon fa fa-plus-square"></i> Add Student</button>
            <!-- Button trigger modal -->

            <!-- Dormitory Add Modal -->
            <div class="modal fade" id="Dormitory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Student Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('StudentStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="student_name" class="col-form-label">Student Full Name:</label>
                          <input name="name" type="text" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">Roll:</label>
                            <input name="roll" type="number" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">User Name:</label>
                            <input name="username" type="text" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">Email Address:</label>
                            <input name="email" type="email" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Gender</label>
                            <div class="col-sm-12">
                                <p class="form-control-static">
                                    <label for="Subject">
                                        <input type="radio" id="Subject" name="gender">
                                    Male</label>
                                    <label for="class">
                                        <input type="radio" id="class" name="gender">
                                    Female</label>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">Birthday:</label>
                            <input name="birthday" type="date" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">Phone:</label>
                            <input name="phone" type="number" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">Mobile:</label>
                            <input name="mobile" type="number" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">Class:</label>
                            <input name="class" type="text" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="col-form-label">Transportation:</label>
                            <input name="transportation" type="text" class="form-control" id="student_name">
                        </div>
                        <div class="form-group">
                          <label for="photo" class="col-form-label">Photo:</label>
                          <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Add Dormitory</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div> --}}
        </div>
        <table id="table-xs" class="table table-bordered table-hover table-xs">
            <thead>
            <tr>
                <th>SL</th>
                <th>Dormitory Name</th>
                <th>Description</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($dormitory as $key=>$dormitories)
                <tr>
                    <td>{{ $dormitory->firstItem() + $key }}</td>
                    <td>{{ $dormitories->dormitory_name }}</td>
                    <td>{{ $dormitories->description ?? 'NA' }}</td>
                    <td>{{ $dormitories->created_at ?? 'NA' }}</td>
                    <td>
                        <button type="button" title="Edit" class="btn btn-inline" data-toggle="modal" data-target="#DormitoryEdit"><i class="font-icon fa fa-pencil"></i></button>
                        <!-- Dormitory Add Modal -->
                        <div class="modal fade" id="DormitoryEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dormitory Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                {{-- <form action="{{ route('DormitoryUpdate') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $dormitories->id }}">
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Dormitory Name:</label>
                                    <input name="dormitory_name" value="{{ $dormitories->dormitory_name }}" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea name="description" value="{{ $dormitories->description }}"  class="form-control" id="message-text">{{ $dormitories->description }}</textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Update Dormitory</button>
                                    </div>
                                </form> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
