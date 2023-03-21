@extends('chat.layouts.app')

@section('main-content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-light ">
                            <div class="row">
                                <div class="col">
                                    <div id="ticket" style="display: block;" class="card card-light ">
                                        <div class="card-header">
                                            <img src="../docs/assets/img/india-flag.png" style="height: 24px;width: 24px;">
                                            &nbsp;
                                            <span>203.109.122.133 - Uses 1</span>
                                            <div class="card-tools">
                                                <button class="btn btn-tool">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                                <button onclick="closeticketDetails()" class="btn btn-tool">
                                                    <i class="fas fa-window-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <i class="fas fa-chevron-left"></i>
                                                </div>
                                                <div class="col">
                                                    <span>Details</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col">
                                                    <i class="fab fa-chrome"></i>
                                                </div>
                                                <div class="col">
                                                    00:02:18
                                                </div>
                                                <div class="col">
                                                    0 chats
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span>Visitor Navigate to</span>
                                            <span style="color: #0056b3;">IT Product</span>
                                            <hr>
                                            <span>Visitor Navigate to</span>
                                            <span style="color: #0056b3;">IT Product</span>
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
                                                    >Whisper</a>
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
                                                            <button class="btn btn-primary" onclick="sendMessage()">Join</button>
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
                                                            <button class="btn btn-primary" onclick="sendNote()">Join</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="ticket" style="display: block;" class="card card-light ">
                                        <div class="card-header">
                                            <img src="../docs/assets/img/america-flag.png" style="height: 24px;width: 24px;">
                                            &nbsp;
                                            <span>203.109.124.134 - Uses 2</span>
                                            <div class="card-tools">
                                                <button class="btn btn-tool">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                                <button onclick="closeticketDetails()" class="btn btn-tool">
                                                    <i class="fas fa-window-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <i class="fas fa-chevron-left"></i>
                                                </div>
                                                <div class="col">
                                                    <span>Details</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col">
                                                    <i class="fab fa-chrome"></i>
                                                </div>
                                                <div class="col">
                                                    00:02:18
                                                </div>
                                                <div class="col">
                                                    0 chats
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span>Visitor Navigate to</span>
                                            <span style="color: #0056b3;">IT Product</span>
                                            <hr>
                                            <span>Visitor Navigate to</span>
                                            <span style="color: #0056b3;">IT Product</span>
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
                                                    >Whisper</a>
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
                                                            <button class="btn btn-primary" onclick="sendMessage()">Join</button>
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
                                                            id="typing-box"
                                                            name="message"
                                                            placeholder="Type Message ..."
                                                            class="form-control"
                                                        >
                                                        <span class="input-group-append">
                                                            <button class="btn btn-primary" onclick="sendMessage()">Join</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <aside class="control-sidebar control-sidebar-dark"></aside>
        </div>
@endsection