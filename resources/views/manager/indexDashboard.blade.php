@extends('manager.layouts.app')

@section('main-content-manager')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">
                                    Dashboard/Auto
                                    <b>Faveo</b>
                                    Licenser
                                </h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Products:0</h3>
                                        <p>Active:0</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </div>
                                    <a href="viewproducts.html" class="small-box-footer">
                                        View all
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>Clients:0</h3>
                                        <p>Active:0</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <a href="viewallclients.html" class="small-box-footer">
                                        View all
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>Licenses:0</h3>
                                        <p>Active:0</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-id-card"></i>
                                    </div>
                                    <a href="viewlicense.html" class="small-box-footer">
                                        View all
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>Callbacks:0</h3>
                                        <p>Active:0</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <a href="viewcallback.html" class="small-box-footer">
                                        View all
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                            <div class="col-xs-6  col-lg-6">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Latest Clients</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                    <tr class="bg-green">
                                                        <th>Email</th>
                                                        <th>Activation</th>
                                                        <th>Licenses</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-6">
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Latest Licenses</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                    <tr class="bg-yellow">
                                                        <th>Client or License code</th>
                                                        <th>Product</th>
                                                        <th>Activation</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-lg-6">
                                <div class="box box-warning">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Latest Installations</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                    <tr class="bg-blue">
                                                        <th>Client or License code</th>
                                                        <th>Product</th>
                                                        <th>Domain</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-6">
                                <div class="box box-danger">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Latest Callbacks</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                    <tr class="bg-red">
                                                        <th>Client or License code</th>
                                                        <th>Product</th>
                                                        <th>Domain</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-lg-6">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Expiring Support</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                    <tr class="bg-gray">
                                                        <th>Product</th>
                                                        <th>Activation</th>
                                                        <th>Support</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-6">
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Expiring Updates</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                    <tr class="table-info">
                                                        <th>Product</th>
                                                        <th>Activation</th>
                                                        <th>Updates</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.content-wrapper -->
@endsection          