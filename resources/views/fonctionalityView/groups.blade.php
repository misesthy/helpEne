@extends('layouts.app')

@section('main-content')
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row pt-5">
                            <div class="col"></div>
                            <div class="col-auto pr-5">
                                <div class=".modal-close-icon">
                                    <a href="./chat1.html">
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
                                            <h1>Browse Groups</h1>
                                        </div>
                                        <div class="col-auto pt-2">
                                            <a href="./CreateGroup.html">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-plus"></i> New Group
                                                </button>
                                            </a>
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
                                                    placeholder="Search Groups"
                                                >
                                                <a id="showorhide">
                                                    <!-- <i class="fas fa-window-close"></i> --></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label for="exampleInputPassword1">Password</label> -->
                                            <select class="form-control" id="groupOrder">
                                                <option>Group Name (Ascending)</option>
                                                <option>Group Name (Descending)</option>
                                                <option>Created On (Ascending)</option>
                                                <option>Created On (Descending)</option>
                                            </select>
                                            <!-- <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                        </div>
                                        <div class="align-center">
                                            <img src="../docs/assets/img/search.png" style="height: 150px;width: 150px;">
                                            <h5>No Groups Found</h5>
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
            <!-- ./wrapper -->
@endsection