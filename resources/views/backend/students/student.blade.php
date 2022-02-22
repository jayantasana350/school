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
                            <th>Image</th>
                            <th>Registration</th>
                            <th>Student Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $key=>$student)
                            <tr>
                                <td>{{ $students->firstItem() + $key }}</td>
                                <td><img src="{{ asset('images/students/' . $student->image) }}" alt="Student Photo" style="width: 50px;"></td>
                                <td>{{ $student->registration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->dateofbirth }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->religion }}</td>
                                <td>
                                    <a href="{{ route('StudentEdit', $student->id) }}" title="Edit" class="btn btn-inline"><i class="font-icon fa fa-pencil"></i></a>
                                    <a href="{{ route('StudentEdit', $student->id) }}" title="Edit" class="btn btn-inline"><i class="font-icon fa fa-pencil"></i></a>
                                    <!-- Dormitory Add Modal -->
                                    <a href="{{ route('StudentDelete', $student->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                                {{ $students->links() }}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
                    <table id="table-xs" class="table table-bordered table-hover table-xs">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Registration</th>
                            <th>Student Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($trushed_student as $key=>$trushed)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td><img src="{{ asset('images/students/' . $trushed->image ?? 'NA') }}" alt="Student Photo" style="width: 50px;"></td>
                                <td>{{ $trushed->registration }}</td>
                                <td>{{ $trushed->name }}</td>
                                <td>{{ $trushed->dateofbirth }}</td>
                                <td>{{ $trushed->gender }}</td>
                                <td>{{ $trushed->religion }}</td>
                                <td>
                                    <a href="{{ route('StudentRestore', $trushed->id) }}" title="Edit" class="btn btn-inline btn-warning"><i class="font-icon fa fa-share"></i></a>
                                    <!-- Dormitory Add Modal -->
                                    <a href="{{ route('StudentPermanentDelete', $trushed->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--.tab-pane-->
            </div><!--.tab-content-->
        </section><!--.tabs-section-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
