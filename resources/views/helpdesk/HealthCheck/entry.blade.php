@extends('helpdesk.layouts.app')

@section('main-content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Starter Page</h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Health Check</li>
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
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-light">
                                    <div class="card-header">
                                        <h3 class="card-title">Logs</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-6">
                                                <div class="settingiconblue">
                                                    <div class="settingdivblue" id="cron-link">
                                                        <a href="javascript:;" onclick="updateClass('cron')">
                                                            <span class="fa-stack fa-2x">
                                                                <i class="fas fa-user fa-stack-1x"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="text-center text-sm fw_400">CRON</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="settingiconblue">
                                                    <div class="settingdivblue" id="exception-link">
                                                        <a href="javascript:;" onclick="updateClass('exception')">
                                                            <span class="fa-stack fa-2x">
                                                                <i class="fas fa-exclamation-triangle fa-stack-1x"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="text-center text-sm fw_400">Exception</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="settingiconblue">
                                                    <div class="settingdivblue" id="mail-link">
                                                        <a href="javascript:;" onclick="updateClass('mail')">
                                                            <span class="fa-stack fa-2x">
                                                                <i class="fas fa-envelope fa-stack-1x"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="text-center text-sm fw_400">Mail</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-9">
                                                <div class="card card-light" id="cron-log">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Cron Logs</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 1</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">41</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">10 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 2</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">10</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">0 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 3</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">567</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">4 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 4</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">98</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">56 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 5</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">51</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">30 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 6</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">60</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">09 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 7</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">67</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">24 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Cron Log 8</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">8</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">26 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-light hide" id="exception-log">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Exception Logs</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 1</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">41</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">10 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 2</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">10</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">0 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 3</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">567</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">4 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 4</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">98</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">56 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 5</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">51</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">30 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 6</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">60</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">09 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 7</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">67</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">24 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Exception Log 8</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">8</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">26 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-light hide" id="mail-log">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Mail Logs</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 1</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">41</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">10 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 2</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">10</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">0 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 3</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">567</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">4 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 4</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">98</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">56 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 5</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">51</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">30 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 6</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">60</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">09 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 7</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">67</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">24 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-12">
                                                                <a href="javascript:;" onclick="openTable()">
                                                                    <div class="info-box bg-gradient-light">
                                                                        <div class="info-box-content">
                                                                            <span class="info-box-text">Mail Log 8</span>
                                                                            <span class="info-box-number">
                                                                                <span class="text-blue text-xl">8</span>
                                                                                <small> Completed</small>
                                                                            </span>
                                                                        </div>
                                                                        <span class="info-box-icon custom-box-icon">
                                                                            <small class="text-red">26 Failed</small>
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div id="date-picker"></div>
                                            </div>
                                        </div>
                                        <div class="row hide" id="log-table">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Logs Table</h3>
                                                        <div class="card-tools">
                                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                                <input
                                                                    type="text"
                                                                    name="table_search"
                                                                    class="form-control float-right"
                                                                    placeholder="Search"
                                                                >
                                                                <div class="input-group-append">
                                                                    <button type="submit" class="btn btn-default">
                                                                        <i class="fas fa-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body table-responsive p-0">
                                                        <table class="table table-hover text-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>User</th>
                                                                    <th>Date</th>
                                                                    <th>Status</th>
                                                                    <th>Reason</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>John Doe</td>
                                                                    <td>11-7-2014</td>
                                                                    <td>
                                                                        <span class="tag tag-success">Approved</span>
                                                                    </td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>219</td>
                                                                    <td>Alexander Pierce</td>
                                                                    <td>11-7-2014</td>
                                                                    <td>
                                                                        <span class="tag tag-warning">Pending</span>
                                                                    </td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>657</td>
                                                                    <td>Bob Doe</td>
                                                                    <td>11-7-2014</td>
                                                                    <td>
                                                                        <span class="tag tag-primary">Approved</span>
                                                                    </td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>175</td>
                                                                    <td>Mike Doe</td>
                                                                    <td>11-7-2014</td>
                                                                    <td>
                                                                        <span class="tag tag-danger">Denied</span>
                                                                    </td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
@endsection