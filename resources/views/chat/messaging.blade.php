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
                                            <input
                                                type="text"
                                                name="group"
                                                id="group"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                placeholder="Search Groups"
                                            >
                                            <div class="input-group-append">
                                                <div
                                                    onclick="showMoreFilter()"
                                                    data-target="#modal-show-more"
                                                    data-toggle="modal"
                                                    class="input-group-text"
                                                >
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="ticket" style="display: none;" class="card card-light ">
                                    <div class="card-header">
                                        <span>#1 : User</span>
                                        <div class="card-tools">
                                            <button class="btn btn-tool">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button onclick="closeticketDetails()" class="btn btn-tool">
                                                <i class="fas fa-window-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="direct-chat-messages" id="message-area">
                                                            <div class="date-container">
                                                                <div class="line"></div>
                                                                <div class="date">Tuesday</div>
                                                            </div>
                                                            <div class="direct-chat-msg">
                                                                <p>
                                                                    <b>Me</b>
                                                                </p>
                                                                <!-- <div class="clear"></div> -->
                                                                <div class="direct-chat-infos clearfix">
                                                                    <div class="direct-chat-name float-left">Hello</div>
                                                                    <div class="direct-chat-timestamp float-right">14:05</div>
                                                                </div>
                                                                <div class="direct-chat-infos clearfix">
                                                                    <div class="direct-chat-name float-left">Good Morning</div>
                                                                    <div class="direct-chat-timestamp float-right">16:15</div>
                                                                </div>
                                                            </div>
                                                            <div class="date-container">
                                                                <div class="line"></div>
                                                                <div class="date">Today</div>
                                                            </div>
                                                            <div class="direct-chat-msg">
                                                                <p>
                                                                    <b>Me</b>
                                                                </p>
                                                                <!-- <div class="clear"></div> -->
                                                                <div class="direct-chat-infos clearfix">
                                                                    <div class="direct-chat-name float-left">How are you ?</div>
                                                                    <div class="direct-chat-timestamp float-right">14:05</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a
                                                                    class="nav-link active"
                                                                    id="custom-content-above-home-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-content-above-home"
                                                                    role="tab"
                                                                    aria-controls="custom-content-above-home"
                                                                    aria-selected="true"
                                                                >Message</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a
                                                                    class="nav-link"
                                                                    id="custom-content-above-profile-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-content-above-profile"
                                                                    role="tab"
                                                                    aria-controls="custom-content-above-profile"
                                                                    aria-selected="false"
                                                                >Notes</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content" id="custom-content-above-tabContent">
                                                            <div
                                                                class="tab-pane fade show active"
                                                                id="custom-content-above-home"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-content-above-home-tab"
                                                            >
                                                                <div class="input-group">
                                                                    <input
                                                                        type="text"
                                                                        id="typing-box"
                                                                        name="message"
                                                                        placeholder="Type Message ..."
                                                                        class="form-control"
                                                                    >
                                                                    <span class="input-group-append">
                                                                        <button class="btn btn-primary" onclick="sendMessage()">Send</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tab-pane fade"
                                                                id="custom-content-above-profile"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-content-above-profile-tab"
                                                            >
                                                                <div class="input-group">
                                                                    <input
                                                                        type="text"
                                                                        id="note"
                                                                        name="note"
                                                                        placeholder="Add Private Note ..."
                                                                        class="form-control"
                                                                    >
                                                                    <span class="input-group-append">
                                                                        <button class="btn btn-primary" onclick="sendNote()">Send</button>
                                                                    </span>
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
                                                                <b>Status</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-7">
                                                                <select class="form-control" style="width: 100%;" placeholder="Status">
                                                                    <!-- <option selected="selected">All</option> -->
                                                                    <option>Open</option>
                                                                    <option>Pending</option>
                                                                    <option>Closed</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row py-1">
                                                            <div class="col-4">
                                                                <b>Priority</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-7">
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
                                                        <div class="row py-1">
                                                            <div class="col-4">
                                                                <b>Assignee</b>
                                                            </div>
                                                            <div class="col-1">
                                                                :
                                                            </div>
                                                            <div class="col-7">
                                                                <select class="form-control" style="width: 100%;" placeholder="Properties">
                                                                    <option selected="selected">All</option>
                                                                    <option>User</option>
                                                                    <option>User 1</option>
                                                                </select>
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
                        <div id="ticket-table" class="row">
                            <div class="col-sm-12">
                                <div class="card card-light ">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <span>All</span>
                                                    </div>
                                                    <div class="col">
                                                        <span>Mine</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Chat</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Ticket</label>
                                                </div>
                                            </div>
                                            <div class="col-auto float-right">
                                                <select class="form-control form-control-sm" style="width: 100%;" placeholder="Status">
                                                    <option>Any</option>
                                                    <option>Pending</option>
                                                    <option>Closed</option>
                                                </select>
                                            </div>
                                            <div class="col-auto  float-right">
                                                <span>open</span>
                                            </div>
                                            <div class="col-auto  float-right">
                                                <select class="form-control form-control-sm" style="width: 100%;" placeholder="Status">
                                                    <option>Updated On</option>
                                                    <option>Created On</option>
                                                    <option>Priority</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="message-table" style="display: block;" class="card-body align-center">
                                        <table class="table">
                                            <tbody>
                                                <tr onclick="openTicketDetails()" class="border-0">
                                                    <td class="border-0">
                                                        <img
                                                            src="../dist/img/user2-160x160.jpg"
                                                            style="height: 24px;width: 24px;"
                                                            class="img-circle"
                                                            alt="User Image"
                                                        >
                                                    </td>
                                                    <td class="border-0">
                                                        <b> User</b>
                                                        user@gmail.com
                                                    </td>
                                                    <td class="border-0">
                                                        <i class="fas fa-ticket-alt"></i>
                                                    </td>
                                                    <td class="border-0">
                                                        <span class="badge bg-danger">Open</span>
                                                    </td>
                                                    <td class="border-0">13.34</td>
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
                        <div style="display: block;" id="create-ticket">
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
                        <div class="modal fade" id="modal-show-more">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Default Modal</h4>
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
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input
                                                        type="text"
                                                        name="group"
                                                        id="group"
                                                        class="form-control"
                                                        id="exampleInputEmail1"
                                                        placeholder="Min # of Msg"
                                                    >
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control" style="width: 100%;" placeholder="Status">
                                                        <!-- <option selected="selected">All</option> -->
                                                        <option>Open</option>
                                                        <option>Pending</option>
                                                        <option>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="input-group " id="reservationdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group " id="reservationdate1" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1">
                                                        <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select class="form-control" style="width: 100%;" placeholder="Status">
                                                        <option selected="selected">All</option>
                                                        <option>Assigned</option>
                                                        <option>Unassigned</option>
                                                        <option>Me(User)</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <input
                                                        type="text"
                                                        name="group"
                                                        id="group"
                                                        class="form-control"
                                                        id="exampleInputEmail1"
                                                        placeholder="Tags"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" aria-label="Close" class="btn btn-default">Close</button>
                                        <button class="btn btn-secondary" onclick="reset()">Reset</button>
                                        <button class="btn btn-primary" onclick="search()">Search</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </section>
            </div>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here --></aside>
            <!-- /.control-sidebar -->
@endsection