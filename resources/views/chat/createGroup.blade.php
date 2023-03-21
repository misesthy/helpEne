@extends('chat.layouts.app')

@section('main-content')
        <!-- Content Wrapper. Contains page content -->
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
                            <div class="card-header border-0">
                                <div class="row">
                                    <div class="col">
                                        <h1>Create new group</h1>
                                    </div>
                                    <div class="col-auto pt-2">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                            <form id="quickForm">
                                <div class="card-body pt-0">
                                    <div class="border-bottom">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                name="groupName"
                                                id="groupName"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                placeholder="Enter Group Name"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <span>Select Members</span>
                                    <div class="form-group pt-2">
                                        <select class="form-control select2" id="groupOrder">
                                            <option>All</option>
                                            <option>User 1</option>
                                            <option>User 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <div id="input-container">
                                            <i class="fas fa-search"></i>
                                            <input
                                                type="text"
                                                name="agent"
                                                id="agent"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                placeholder="Filter Agent"
                                            >
                                            <a id="showorhide"></a>
                                        </div>
                                    </div>
                                    <div class="align-center">
                                        <img src="../docs/assets/img/search.png" style="height: 150px;width: 150px;">
                                        <h5>No Agents Found</h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </section>
        </div>
@endsection