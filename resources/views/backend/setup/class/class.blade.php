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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-inline btn-warning" data-toggle="modal" data-target="#AddTerm">
                            <i class="font-icon fa fa-plus-square"></i> Add Class
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="AddTerm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{ route('ClassStore') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="box-typical box-typical-padding">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Add Class</label>
                                                    <div class="col-sm-10">
                                                        <p class="form-control-static"><input type="text" name="class_name" class="form-control" id="inputPassword" placeholder="Ex: First"></p>
                                                    </div>
                                                </div>
                                        </div><!--.box-typical-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Add Class</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-inline btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="font-icon fa fa-plus-square"></i> Add SubClass
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="{{ route('SubClassStore') }}" method="POST">
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
                                                        <label class="col-sm-3 form-control-label">Subject</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static">
                                                                <input type="text" name="subclass_name" class="form-control" id="inputPassword" placeholder="Subject Title">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 form-control-label">Class</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static">
                                                                <select name="class_id" id="class_id" class="form-control">
                                                                    @foreach ($classes as $class)
                                                                        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
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
                                    All Class Lists
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <span class="glyphicon font-icon-list-square"></span>
                                    All SubClass Lists
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <i class="font-icon font-icon font-icon-trash"></i>
                                    Trushed Class Lists
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <span class="glyphicon font-icon font-icon-trash"></span>
                                    Trushed SubClass Lists
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
                            <th>Class Name</th>
                            <th>Slug</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $key=>$class)
                            <tr>
                                <td>{{ $classes->firstItem() + $key }}</td>
                                <td>{{ $class->class_name }}</td>
                                <td>{{ $class->slug ?? 'NA' }}</td>
                                <td>{{ $class->created_at }}</td>
                                <td>
                                    <button type="button" title="Edit" class="btn btn-inline" data-toggle="modal" data-target="#AcademicEdit{{ $class->id }}"><i class="font-icon fa fa-pencil"></i></button>
                                    <!-- Dormitory Add Modal -->
                                    <div class="modal fade" id="AcademicEdit{{ $class->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Dormitory Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('ClassUpdate') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="box-typical box-typical-padding">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 form-control-label">Class Name</label>
                                                                    <input type="hidden" name="id" value="{{ $class->id }}">
                                                                    <div class="col-sm-9">
                                                                        <p class="form-control-static"><input type="text" name="class_name" class="form-control" id="inputPassword" value="{{ $class->class_name }}"></p>
                                                                    </div>
                                                                </div>
                                                        </div><!--.box-typical-->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Update Class</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('ClassDelete', $class->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                                {{ $classes->links() }}
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
                                <td>{{ $sub_class->class_id ?? 'NA' }}</td>
                                <td>{{ $sub_class->created_at }}</td>
                                <td>
                                    <button type="button" title="Edit" class="btn btn-inline" data-toggle="modal" data-target="#AcademicEdit{{ $sub_class->id }}"><i class="font-icon fa fa-pencil"></i></button>
                                    <!-- Dormitory Add Modal -->
                                    <div class="modal fade" id="AcademicEdit{{ $sub_class->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                @foreach ($classes as $class)
                                                                                    <option value="{{ $class->id }}">{{ $class->class_name }}</option>
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
                                    <a href="{{ route('ClassDelete', $sub_class->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">
                    <table id="table-xs" class="table table-bordered table-hover table-xs">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Class Name</th>
                            <th>Slug</th>
                            <th>Deleted_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($trushed_class as $key=>$trushedclass)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $trushedclass->class_name }}</td>
                                <td>{{ $trushedclass->slug ?? 'NA' }}</td>
                                <td>{{ $trushedclass->deleted_at ?? 'NA' }}</td>
                                <td>
                                    <a href="{{ route('ClassRestore', $trushedclass->id) }}" title="Restore" type="button" class="btn btn-inline btn-warning"><i class="font-icon fa fa-share"></i></a>
                                    <a href="{{ route('ClassPermanentDelete', $trushedclass->id) }}" title="Permanent Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">
                    {{-- <table id="table-xs" class="table table-bordered table-hover table-xs">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Subject Name</th>
                            <th>Slug</th>
                            <th>Abbrivation</th>
                            <th>Class</th>
                            <th>Deleted_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($trushed_subject as $key=>$trushedsub)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $trushedsub->subject }}</td>
                                <td>{{ $trushedsub->slug ?? 'NA' }}</td>
                                <td>{{ $trushedsub->abbrivation ?? 'NA' }}</td>
                                <td>{{ $trushedsub->class_id ?? 'NA' }}</td>
                                <td>{{ $trushedsub->deleted_at ?? 'NA' }}</td>
                                <td>
                                    <a href="{{ route('SubjectRestore', $trushedsub->id) }}" title="Restore" type="button" class="btn btn-inline btn-warning"><i class="font-icon fa fa-share"></i></a>
                                    <a href="{{ route('SubjectPermanentDelete', $trushedsub->id) }}" title="Permanent Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
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
