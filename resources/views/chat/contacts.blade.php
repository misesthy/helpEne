@extends('chat.layouts.app')

@section('main-content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <!-- Content Header (Page header) -->
                        <div class="row py-3">
                            <div class="col"></div>
                            <div class="col-auto">
                                <div class="row">
                                    <div class="col-auto">
                                        <button
                                            type="submit"
                                            data-target="#modal-create-ticket"
                                            data-toggle="modal"
                                            class="btn btn-primary"
                                        >
                                            <i class="fas fa-plus"></i>
                                            New Ticket
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    in : User Lable : contacts
                                                </span>
                                            </div>
                                            <input
                                                type="text"
                                                name="group"
                                                id="group"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                placeholder="Search Groups"
                                            >
                                            <div class="input-group-append">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ticket-table" class="row">
                            <div class="col-sm-12">
                                <div class="card card-light ">
                                    <div id="message-table" style="display: block;" class="card-body align-center table-responsive p-0">
                                        <table class="table table-head-fixed text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Country(City)</th>
                                                    <th>Details</th>
                                                    <th>IP Address</th>
                                                    <th>Last Activity Time</th>
                                                    <th>
                                                        <i class="fas fa-download toastsDefaultSuccess"></i>
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td onclick="openTicketDetails()">
                                                        <img src="../docs/assets/img/india-flag.png" style="height: 24px;width: 24px;">
                                                    </td>
                                                    <td onclick="openTicketDetails()"> user@gmail.com</td>
                                                    <td onclick="openTicketDetails()"></td>
                                                    <td onclick="openTicketDetails()"> 27/Aug 11:18</td>
                                                    <td>
                                                        <button class="btn btn-default" data-target="#modal-create-ticket" data-toggle="modal">
                                                            <i class="fas fa-ticket-alt"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-default" data-toggle="modal" data-target="#delete-contact">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td onclick="openTicketDetails()">
                                                        <img src="../docs/assets/img/america-flag.png" style="height: 24px;width: 24px;">
                                                    </td>
                                                    <td onclick="openTicketDetails()"> user@gmail.com</td>
                                                    <td onclick="openTicketDetails()"></td>
                                                    <td onclick="openTicketDetails()"> 27/Aug 11:18</td>
                                                    <td>
                                                        <button class="btn btn-default" data-target="#modal-create-ticket" data-toggle="modal">
                                                            <i class="fas fa-ticket-alt"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-default" data-toggle="modal" data-target="#delete-contact">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="noMessage" style="display: none;" class="card-body align-center">
                                        <span>
                                            No Open Messages
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="create-ticket">
                            <div class="modal fade" id="modal-create-ticket">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Create Ticket</h4>
                                            <button
                                                type="button"
                                                class="close"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                            >
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="createTicket">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label> Properties</label>
                                                            <select class="form-control" style="width: 100%;" placeholder="Properties">
                                                                <option selected="selected">All</option>
                                                                <option>User</option>
                                                                <option>User 1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Recipient Name</label>
                                                            <input
                                                                type="text"
                                                                name="name"
                                                                id="name"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Min # of Msg"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Recipient Email</label>
                                                            <input
                                                                type="email"
                                                                name="email"
                                                                id="email"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Recipient Email"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Subject</label>
                                                            <input
                                                                type="text"
                                                                name="subject"
                                                                id="subject"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Subject"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Message</label>
                                                            <textarea
                                                                type="text"
                                                                name="message"
                                                                id="message"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Tags"
                                                            ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Assign to</label>
                                                            <select class="form-control" style="width: 100%;" placeholder="Status">
                                                                <!-- <option selected="selected">All</option> -->
                                                                <option>Me(User)</option>
                                                                <option>User 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Priority</label>
                                                            <select class="form-control" style="width: 100%;" placeholder="Status">
                                                                <!-- <option selected="selected">All</option> -->
                                                                <option>Highest</option>
                                                                <option>High</option>
                                                                <option>Medium</option>
                                                                <option>Low</option>
                                                                <option>Lowest</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Tags</label>
                                                            <input
                                                                type="text"
                                                                name="tag"
                                                                id="tag"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Tags"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Attachment</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div style="display: none;" id="required-fields">
                                                <span style="color:red">please enter name , email , subject</span>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                                            <button id="crt-tic-btn" onclick="CreateTicket()" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                        <div class="modal fade" id="modal-ticket-details">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">#1 : Subject</h4>
                                        <div style="float: right;">
                                            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a
                                                        class="nav-link active"
                                                        id="custom-content-ticket-tab"
                                                        data-toggle="pill"
                                                        href="#custom-content-ticket"
                                                        role="tab"
                                                        aria-controls="custom-content-above-home"
                                                        aria-selected="true"
                                                    >
                                                        <i class="fas fa-ticket-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a
                                                        class="nav-link"
                                                        id="custom-content-details-tab"
                                                        data-toggle="pill"
                                                        href="#custom-content-details"
                                                        role="tab"
                                                        aria-controls="custom-content-above-profile"
                                                        aria-selected="false"
                                                    >
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tab-content" id="custom-content-above-tabContent">
                                            <div
                                                class="tab-pane fade show active"
                                                id="custom-content-ticket"
                                                role="tabpanel"
                                                aria-labelledby="custom-content-above-home-tab"
                                            >
                                                <div class="direct-chat-messages" id="message-area">
                                                    <div class="direct-chat-msg">
                                                        <p>
                                                            <i class="fas fa-ticket-alt"></i>
                                                            <b>User</b>
                                                        </p>
                                                        <div class="direct-chat-infos clearfix">
                                                            <div class="direct-chat-name float-left">Message</div>
                                                        </div>
                                                    </div>
                                                    <div class="date-container">
                                                        <div class="line1"></div>
                                                    </div>
                                                    <div class="direct-chat-msg">
                                                        <p>
                                                            <b>User</b>
                                                        </p>
                                                        <div class="direct-chat-infos clearfix">
                                                            <div class="direct-chat-name float-left">Message 2</div>
                                                            <div class="direct-chat-timestamp float-right">14:05</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="custom-content-details"
                                                role="tabpanel"
                                                aria-labelledby="custom-content-above-profile-tab"
                                            >
                                                <div style="height: 475px;">
                                                    <div class="row py-1">
                                                        <div class="col-4">
                                                            <b>Ticket Id</b>
                                                        </div>
                                                        <div class="col-1">
                                                            :
                                                        </div>
                                                        <div class="col-7">
                                                            <span>#1</span>
                                                        </div>
                                                    </div>
                                                    <div class="row py-1">
                                                        <div class="col-4">
                                                            <b>Name</b>
                                                        </div>
                                                        <div class="col-1">
                                                            :
                                                        </div>
                                                        <div class="col-7">
                                                            <span>User</span>
                                                        </div>
                                                    </div>
                                                    <div class="row py-1">
                                                        <div class="col-4">
                                                            <b>Email</b>
                                                        </div>
                                                        <div class="col-1">
                                                            :
                                                        </div>
                                                        <div class="col-7">
                                                            <span>user@gmail.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row py-1">
                                                        <div class="col-4">
                                                            <b>Created On</b>
                                                        </div>
                                                        <div class="col-1">
                                                            :
                                                        </div>
                                                        <div class="col-7">
                                                            <span>August 27 2021, 10:59</span>
                                                        </div>
                                                    </div>
                                                    <div class="row py-1">
                                                        <div class="col-4">
                                                            <b>Created By</b>
                                                        </div>
                                                        <div class="col-1">
                                                            :
                                                        </div>
                                                        <div class="col-7">
                                                            <span>User</span>
                                                        </div>
                                                    </div>
                                                    <div class="row py-1">
                                                        <div class="col-4">
                                                            <b>Tags</b>
                                                        </div>
                                                        <div class="col-1">
                                                            :
                                                        </div>
                                                        <div class="col-7">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div id="ticket" style="display: none;" class="card card-light ">
                            <div class="card-header">
                                <span onclick="backtoTicketTable()">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                &nbsp;&nbsp;
                                <span> User</span>
                                <div class="card-tools">
                                    <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                        <li class="nav-item">
                                            <a
                                                class="nav-link active"
                                                id="custom-content-previous-tab"
                                                data-toggle="pill"
                                                href="#custom-content-previous"
                                                role="tab"
                                                aria-controls="custom-content-above-home"
                                                aria-selected="true"
                                            >
                                                <i class="fas fa-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="custom-content-next-tab"
                                                data-toggle="pill"
                                                href="#custom-content-next"
                                                role="tab"
                                                aria-controls="custom-content-above-profile"
                                                aria-selected="false"
                                            >
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-content-above-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="custom-content-previous"
                                        role="tabpanel"
                                        aria-labelledby="custom-content-above-home-tab"
                                    >
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="direct-chat-messages" id="message-area">
                                                            <div class="direct-chat-msg">
                                                                <div class="direct-chat-infos clearfix">
                                                                    <div class="direct-chat-name float-left">
                                                                        <i class="fas fa-ticket-alt"></i>
                                                                        Ticket Created : #1 Subject
                                                                    </div>
                                                                    <div class="direct-chat-timestamp float-right">14:05</div>
                                                                </div>
                                                                <div class="direct-chat-infos clearfix">
                                                                    <div class="direct-chat-name float-left">Message</div>
                                                                    <br>
                                                                    <span>...</span>
                                                                    <br>
                                                                    <a data-target="#modal-ticket-details" data-toggle="modal" style="color:royalblue;">View Ticket</a>
                                                                    <!-- <div class="direct-chat-timestamp float-right">16:15</div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card" style="height: 475px;">
                                                    <div class="card-body">
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Name</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>User</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Email</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>user@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Total Visits</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Total Chats</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Total Tickets</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>1</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>First Visit</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Last Activity Time</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="custom-content-next"
                                        role="tabpanel"
                                        aria-labelledby="custom-content-above-profile-tab"
                                    >
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="direct-chat-messages" id="message-area">
                                                            <div class="direct-chat-msg">
                                                                <!-- <p> <b>Me</b></p> -->
                                                                <div class="direct-chat-infos clearfix">
                                                                    <div class="direct-chat-name float-left">
                                                                        <i class="fas fa-ticket-alt"></i>
                                                                        Ticket Created : #1 Subject
                                                                    </div>
                                                                    <div class="direct-chat-timestamp float-right">14:05</div>
                                                                </div>
                                                                <div class="direct-chat-infos clearfix">
                                                                    <div class="direct-chat-name float-left">Message</div>
                                                                    <br>
                                                                    <span>...</span>
                                                                    <br>
                                                                    <a data-target="#modal-ticket-details" data-toggle="modal" style="color:royalblue;">View Ticket</a>
                                                                    <!-- <div class="direct-chat-timestamp float-right">16:15</div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card" style="height: 475px;">
                                                    <div class="card-body">
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Name</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>User</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Email</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>user@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Total Visits</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Total Chats</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Total Tickets</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span>1</span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>First Visit</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-6">
                                                                <b>Last Activity Time</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-5">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delete-contact">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Remove Contact</h4>
                                        <button
                                            type="button"
                                            class="close"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                        >
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to remove contact ?&hellip;</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" onclick="removecontact()" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.content-wrapper -->
@endsection