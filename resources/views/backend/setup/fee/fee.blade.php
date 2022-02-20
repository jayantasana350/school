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
                        <button type="button" class="btn btn-inline btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="font-icon fa fa-plus-square"></i> Add Subject
                        </button>

                        <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form action="{{ route('FeeStore') }}" method="POST">
                                        @csrf
                                        <div class="modal-content" style="width: 130%;">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="box-typical box-typical-padding">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 form-control-label">Section</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static">
                                                                <select name="section" id="section" class="form-control">
                                                                    <option value="">Select Class</option>
                                                                    @foreach ($classes as $class)
                                                                        <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 form-control-label">Class Lavel</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static">
                                                                <select name="class_lavel" id="class_lavel" class="form-control">
                                                                    @foreach ($subclass as $sub_class)
                                                                        <option value="{{ $sub_class->subclass_name }}">{{ $sub_class->subclass_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 form-control-label">Fee Name</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static">
                                                                <input type="text" name="fee_name" class="form-control" id="inputPassword" placeholder="Ex: Tution Fee">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 form-control-label">Amount</label>
                                                        <div class="col-sm-9">
                                                            <p class="form-control-static">
                                                                <input type="text" name="amount" class="form-control" id="inputPassword" placeholder="Ex: 500">
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
                                    All Fees Configration
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <span class="glyphicon font-icon font-icon-trash"></span>
                                    Trushed Fees
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
                            <th>Section</th>
                            <th>Slug</th>
                            <th>Class Lavel</th>
                            <th>Fees Name</th>
                            <th>Amount</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($allfees as $key=>$all_fees)
                            <tr>
                                <td>{{ $allfees->firstItem() + $key }}</td>
                                <td>{{ $all_fees->section }}</td>
                                <td>{{ $all_fees->slug ?? 'NA' }}</td>
                                <td>{{ $all_fees->class_lavel ?? 'NA' }}</td>
                                <td>{{ $all_fees->fee_name }}</td>
                                <td>{{ $all_fees->amount }}</td>
                                <td>{{ $all_fees->created_at }}</td>
                                <td>
                                    <button type="button" title="Edit" class="btn btn-inline" data-toggle="modal" data-target="#AcademicFeeEdit{{ $all_fees->id }}"><i class="font-icon fa fa-pencil"></i></button>
                                    <!-- Dormitory Add Modal -->
                                    <div class="modal fade" id="AcademicFeeEdit{{ $all_fees->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('FeeUpdate') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-content" style="width: 130%;">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="box-typical box-typical-padding">
                                                                    <div class="form-group row">
                                                                        <input type="hidden" name="id" value="{{ $all_fees->id }}">
                                                                        <label class="col-sm-3 form-control-label">Section</label>
                                                                        <div class="col-sm-9">
                                                                            <p class="form-control-static">
                                                                                <select name="section" id="section" class="form-control">
                                                                                    @foreach ($allfee_lists as $allfee_list)
                                                                                        <option @if ($allfee_list->id == $all_fees->id) selected @endif value="{{ $allfee_list->section }}">{{ $allfee_list->section }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 form-control-label">Class Lavel</label>
                                                                        <div class="col-sm-9">
                                                                            <p class="form-control-static">
                                                                                <select name="class_lavel" id="class_lavel" class="form-control">
                                                                                    @foreach ($allfee_lists as $sub_class)
                                                                                        <option @if ($sub_class->id == $all_fees->id) selected @endif value="{{ $sub_class->class_lavel }}">{{ $sub_class->class_lavel }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 form-control-label">Fee Name</label>
                                                                        <div class="col-sm-9">
                                                                            <p class="form-control-static">
                                                                                <input type="text" name="fee_name" class="form-control" id="inputPassword" value="{{ $all_fees->fee_name }}">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 form-control-label">Amount</label>
                                                                        <div class="col-sm-9">
                                                                            <p class="form-control-static">
                                                                                <input type="text" name="amount" class="form-control" id="inputPassword" value="{{ $all_fees->amount }}">
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
                                    <a href="{{ route('FeeDelete', $all_fees->id) }}" title="Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
                                </td>
                                {{ $allfees->links() }}
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
                            <th>Section</th>
                            <th>Slug</th>
                            <th>Class Lavel</th>
                            <th>Fee Name</th>
                            <th>Amount</th>
                            <th>Deleted_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($trush as $key=>$trushed)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $trushed->section }}</td>
                                <td>{{ $trushed->slug ?? 'NA' }}</td>
                                <td>{{ $trushed->class_lavel ?? 'NA' }}</td>
                                <td>{{ $trushed->fee_name ?? 'NA' }}</td>
                                <td>{{ $trushed->amount ?? 'NA' }}</td>
                                <td>{{ $trushed->deleted_at ?? 'NA' }}</td>
                                <td>
                                    <a href="{{ route('FeeRestore', $trushed->id) }}" title="Restore" type="button" class="btn btn-inline btn-warning"><i class="font-icon fa fa-share"></i></a>
                                    <a href="{{ route('FeePermanentDelete', $trushed->id) }}" title="Permanent Delete" type="button" class="btn btn-inline btn-danger"><i class="font-icon fa fa-trash"></i></a>
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

@section('footer_js')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $("#section").change(function(){
            let section = $(this).val()

            if (section) {
                $.ajax({
               type:'GET',
               url:'/class-ajax/' + section,

               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
            } else {
                $('#class_lavel').empty();
            }
        });
    });
</script>

@endsection
