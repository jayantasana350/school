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
                            <i class="font-icon fa fa-plus-square"></i> Add Term
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
                                <form action="{{ route('TermStore') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="box-typical box-typical-padding">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Term</label>
                                                    <div class="col-sm-10">
                                                        <p class="form-control-static"><input type="text" name="term_name" class="form-control" id="inputPassword" placeholder="Ex: First"></p>
                                                    </div>
                                                </div>
                                        </div><!--.box-typical-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add Term</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tbl-cell tbl-cell-action button">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-inline btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="font-icon fa fa-plus-square"></i> Add Academic Year
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="{{ route('AcadamicStore') }}" method="POST">
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
                                                        <label class="col-sm-3 form-control-label">Session</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static"><input type="text" name="session" class="form-control" id="inputPassword" placeholder="2014-2015"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 form-control-label">Term</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static">
                                                                <select name="term_id" id="term_id" class="form-control">
                                                                    @foreach ($terms as $term)
                                                                        <option value="{{ $term->term_name }}">{{ $term->term_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3"> Status</div>
                                                        <label class="col-sm-3">
                                                            <input type="radio" name="active_status" class="" value="Active" placeholder="2014-2015"> Active
                                                        </label>
                                                        <label class="col-sm-3">
                                                            <input type="radio" name="active_status" class="" value="Deactive" placeholder="2014-2015"> Deactive
                                                        </label>
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
                                    All Academic Lists
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <span class="glyphicon font-icon font-icon-trash"></span>
                                    Trushed Academic Lists
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
                            <th>Session Name</th>
                            <th>Slug</th>
                            <th>Term</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($academics as $key=>$academic)
                            <tr>
                                <td>{{ $academics->firstItem() + $key }}</td>
                                <td>{{ $academic->session }}</td>
                                <td>{{ $academic->slug ?? 'NA' }}</td>
                                <td>{{ $academic->term_id ?? 'NA' }}</td>
                                <td>{{ $academic->active_status ?? 'NA' }}</td>
                                <td>
                                    <button type="button" title="Edit" class="btn btn-inline" data-toggle="modal" data-target="#AcademicEdit{{ $academic->id }}"><i class="font-icon fa fa-pencil"></i></button>
                                    <!-- Dormitory Add Modal -->
                                    <div class="modal fade" id="AcademicEdit{{ $academic->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Dormitory Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('AcadamicUpdate') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="box-typical box-typical-padding">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 form-control-label">Session</label>
                                                                    <div class="col-sm-9">
                                                                        <p class="form-control-static"><input type="text" name="session" class="form-control" id="inputPassword" value="{{ $academic->session }}"></p>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="id" value="{{ $academic->id }}">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 form-control-label">Term</label>
                                                                    <div class="col-sm-9">
                                                                        <p class="form-control-static">
                                                                            <select name="term_id" id="term_id" class="form-control">
                                                                                @foreach ($terms as $term)
                                                                                    <option @if ($term->id == $academic->id ) selected @endif value="{{ $term->term_name }}">{{ $term->term_name }}</option>
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
                                    <a href="{{ route('AcadamicDelete', $academic->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                                {{ $academics->links() }}
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
                            <th>Session Name</th>
                            <th>Slug</th>
                            <th>Term</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($trushed_academic as $key=>$trushed)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $trushed->session }}</td>
                                <td>{{ $trushed->slug ?? 'NA' }}</td>
                                <td>{{ $trushed->term ?? 'NA' }}</td>
                                <td>{{ $trushed->created_at ?? 'NA' }}</td>
                                <td>
                                    <a href="{{ route('AcadamicRestore', $trushed->id) }}" title="Restore" type="button" class="btn btn-inline btn-warning"><i class="font-icon fa fa-share"></i></a>
                                    <a href="{{ route('AcadamicPermanentDelte', $trushed->id) }}" title="Permanent Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">Tab 4</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-5">Tab 5</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-6">Tab 6</div><!--.tab-pane-->
            </div><!--.tab-content-->
        </section><!--.tabs-section-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
