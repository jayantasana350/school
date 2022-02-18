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
                        <button type="button" class="btn btn-rounded btn-block">Create</button>
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
                                    <i class="font-icon font-icon-cogwheel"></i>
                                    Settings
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <span class="glyphicon glyphicon-music"></span>
                                    Contacts
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <i class="fa fa-product-hunt"></i>
                                    Gateway
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <i class="font-icon font-icon-users"></i>
                                    SSO
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-5" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <i class="font-icon font-icon-home"></i>
                                    Billing
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-tab-6" role="tab" data-toggle="tab">
                                <span class="nav-link-in">
                                    <i class="font-icon font-icon-speed"></i>
                                    Settings
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--.tabs-section-nav-->

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab-1">Tab 1</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">Tab 2</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">Tab 4</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-5">Tab 5</div><!--.tab-pane-->
                <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-6">Tab 6</div><!--.tab-pane-->
            </div><!--.tab-content-->
        </section><!--.tabs-section-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
