@extends('backend.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h2>Session Setup</h2>
                        <div class="subtitle">Welcome to Ultimate Dashboard</div>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <a href="{{ route('StudentsAdd') }}" class="btn btn-inline btn-warning"><i class="font-icon fa fa-plus-square"></i> Add Students</a>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <a href="" class="btn btn-inline btn-warning"><i class="font-icon fa fa-download"></i> Download Students</a>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <a href="" class="btn btn-inline btn-warning"><i class="font-icon fa fa-upload"></i> Upload Students</a>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <a href="" class="btn btn-inline btn-warning"><i class="font-icon fa fa-file-pdf-o"></i> PDF Download</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="tabs-section">
            <div class="tabs-section-nav tabs-section-nav-icons">
                <div class="tbl">
                    <ul class="nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <i class="font-icon font-icon-list-square"></i>
                                    All Active Students
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <span class="glyphicon font-icon-list-square"></span>
                                    All Previous Students
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--.tabs-section-nav-->

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab-1">
                    <table id="table-xs" class="table table-bordered table-hover table-xs">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Student Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Admission</th>
                            <th>Section</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $key=>$student)
                            <tr>
                                <td>{{ $students->firstItem() + $key }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->dateofbirth }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->religion }}</td>
                                <td>{{ $student->admission_name }}</td>
                                <td>{{ $student->section }}</td>
                                <td>
                                    <a href="{{ route('StudentEdit', $student->id) }}" title="Edit" class="btn btn-inline"><i class="font-icon fa fa-pencil"></i></a>
                                    <!-- Dormitory Add Modal -->
                                    <a href="{{ route('ClassDelete', $student->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                                {{ $students->links() }}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
                    {{-- <table id="table-xs" class="table table-bordered table-hover table-xs">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Class Name</th>
                            <th>Slug</th>
                            <th>Class Id</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($subclass as $key=>$sub_class)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $sub_class->subclass_name }}</td>
                                <td>{{ $sub_class->slug ?? 'NA' }}</td>
                                <td>{{ $sub_class->classname->class_name ?? 'NA' }}</td>
                                <td>{{ $sub_class->created_at }}</td>
                                <td>
                                    <button type="button" title="Edit" class="btn btn-inline" data-toggle="modal" data-target="#SubClassUpdate{{ $sub_class->id }}"><i class="font-icon fa fa-pencil"></i></button>
                                    <!-- Dormitory Add Modal -->
                                    <div class="modal fade" id="SubClassUpdate{{ $sub_class->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Dormitory Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('SubClassUpdate') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="box-typical box-typical-padding">
                                                                    <div class="form-group row">
                                                                        <input type="hidden" name="id" value="{{ $sub_class->id }}">
                                                                        <label class="col-sm-3 form-control-label">Subject</label>
                                                                        <div class="col-sm-9">
                                                                            <p class="form-control-static">
                                                                                <input type="text" name="subclass_name" class="form-control" id="inputPassword" value="{{ $sub_class->subclass_name }}">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 form-control-label">Class</label>
                                                                        <div class="col-sm-9">
                                                                            <p class="form-control-static">
                                                                                <select name="class_id" id="class_id" class="form-control">
                                                                                    @foreach ($allclass as $all_class)
                                                                                        <option @if($all_class->id == $sub_class->class_id) selected @endif value="{{ $all_class->id }}">{{ $all_class->class_name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                            </div><!--.box-typical-->
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('SubClassDelete', $sub_class->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                </div><!--.tab-pane-->
            </div><!--.tab-content-->
        </section><!--.tabs-section-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
