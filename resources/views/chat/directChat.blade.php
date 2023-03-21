@extends('chat.layouts.app')

@section('main-content')
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row pt-5">
                            <div class="col"></div>
                            <div class="col-auto pr-5">
                                <div class=".modal-close-icon">
                                    <a href="{{('chat')}}">
                                        <i class=" fas fa-window-close"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 center">
                                <!-- <div class="card card-primary"> -->
                                <div class="card-header border-0">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Browse Direct Messages</h3>
                                        </div>
                                    </div>
                                </div>
                                <form id="quickForm">
                                    <div class="card-body pt-0">
                                        <div class="form-group ">
                                            <!-- <label for="exampleInputEmail1">Email address</label> -->
                                            <div id="input-container">
                                                <i class="fas fa-search"></i>
                                                <input
                                                    type="text"
                                                    name="group"
                                                    id="group"
                                                    class="form-control"
                                                    id="exampleInputEmail1"
                                                    placeholder="Search Direct Messages"
                                                >
                                                <a id="showorhide">
                                                    <!-- <i class="fas fa-window-close"></i> --></a>
                                            </div>
                                        </div>
                                        <div class="align-center">
                                            <img src="../docs/assets/img/search.png" style="height: 150px;width: 150px;">
                                            <h5>No Direct Messages</h5>
                                        </div>
                                    </div>
                                </form>
                                <!-- </div> -->
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </section>
                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here --></aside>
                <!-- /.control-sidebar -->
            </div>
@endsection