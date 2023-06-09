@extends('chat.layouts.app')

@section('main-content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="row">
                    <div class="col">
                        <!-- DIRECT CHAT PRIMARY -->
                        <div class="card card-primary card-outline direct-chat direct-chat-primary">
                            <div class="card-header">
                                <h3 class="card-title">Direct Chat</h3>
                                <div class="card-tools">
                                    <span title="3 New Messages" class="badge bg-primary">3</span>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-tool"
                                        title="Contacts"
                                        data-widget="chat-pane-toggle"
                                    >
                                        <i class="fas fa-comments"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            Is this template really for free? That's unbelievable!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            You better believe it!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                </div>
                                <!--/.direct-chat-messages-->
                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contatcts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            name="message"
                                            placeholder="Type Message ..."
                                            class="form-control"
                                        >
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                </div>
            </div>
            <!-- /.content-wrapper -->
@endsection