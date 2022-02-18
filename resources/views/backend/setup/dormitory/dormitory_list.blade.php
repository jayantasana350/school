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
                        <button type="button" class="btn btn-inline btn-warning" data-toggle="modal" data-target="#Dormitory"><i class="font-icon fa fa-plus-square"></i> Add Dormitory</button>
                        <!-- Button trigger modal -->

                        <!-- Dormitory Add Modal -->
                        <div class="modal fade" id="Dormitory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dormitory Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('DormitoryStore') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Dormitory Name:</label>
                                    <input name="dormitory_name" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea name="description" class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Add Dormitory</button>
                                    </div>
                                </form>
                                </div>
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
                                    All Dormitory Lists
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <span class="glyphicon font-icon font-icon-trash"></span>
                                    Trushed Dormitory Lists
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
                                    <button type="button" title="Edit" class="btn btn-inline" data-toggle="modal" data-target="#DormitoryEdit{{ $dormitories->id }}"><i class="font-icon fa fa-pencil"></i></button>
                                    <!-- Dormitory Add Modal -->
                                    <div class="modal fade" id="DormitoryEdit{{ $dormitories->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Dormitory Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="{{ route('DormitoryUpdate') }}" method="POST">
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
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('DormitoryDelete', $dormitories->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                                {{ $dormitory->links() }}
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
                            <th>Dormitory Name</th>
                            <th>Description</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($dormitory_trush as $key=>$trushed)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $trushed->dormitory_name }}</td>
                                <td>{{ $trushed->description ?? 'NA' }}</td>
                                <td>{{ $trushed->created_at ?? 'NA' }}</td>
                                <td>
                                    <a href="{{ route('DormitoryRestore', $trushed->id) }}" title="Restore" type="button" class="btn btn-inline btn-warning"><i class="font-icon fa fa-share"></i></a>
                                    <a href="{{ route('DormitoryPermanentDelte', $trushed->id) }}" title="Permanent Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
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
