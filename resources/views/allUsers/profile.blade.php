@extends('userPanel.layouts.app')

@section('main-userPanel')no
            <!-- #masthead -->
    <div class="content-wrapper">
            <div class="site-hero clearfix">
                <div class="container" style="padding-left:130px;">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="text">You are here:</li>
                        <li>
                            <a href="index.html">
                                Home
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html">profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="container" style="background-color:white;padding-top:10px;margin-top: -38px;border-radius: 8px;">
                <!--form 1-->
                <div class="col-sm-12">
                    <div class="content-area">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="nav-link active">
                                    <a id="profile_tab" data-toggle="tab">
                                        <strong>Edit profile</strong>
                                    </a>
                                </li>
                                <li class="tab-pane">
                                    <a
                                        id="profile_tab"
                                        data-toggle="tab"
                                        style="margin-top: 50px;"
                                        href="change.html"
                                    >
                                        <strong>Change password</strong>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="active tab-pane">
                                    <div class="row">
                                        <div id="content" class="site-content col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="tab-pane">
                                                        <input type="file" multiple="multiple" style="display: none;">
                                                        <div class="user-block">
                                                            <img
                                                                src="https://secure.gravatar.com/avatar/a88989ebdd54eb31ef2bd86ee8b3870d?s=80&amp;r=g&amp;d=identicon"
                                                                data-toggle="modal"
                                                                alt="User Image"
                                                                class="img-circle"
                                                            >
                                                        </div>
                                                        <button data-toggle="modal" id="change" class="btn-bs-file btn btn-sm btn-default">
                                                            <i class="fa fa-file-image"></i>
                                                            &nbsp;Change image
                                                        </button>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div id="First Name" class="col-sm-6 form-group">
                                                            <label for="First Name">
                                                                <strong>First Name</strong>
                                                            </label>
                                                            <label style="color: rgb(220, 53, 69);">*</label>
                                                            <!---->
                                                            <div>
                                                                <input
                                                                    placeholder=""
                                                                    id="text-field"
                                                                    type="text"
                                                                    class="form-control"
                                                                    style="border-color: rgb(210, 214, 222);"
                                                                >
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div id="Last Name" class="col-sm-6 form-group">
                                                            <label for="Last Name">
                                                                <strong>Last Name</strong>
                                                            </label>
                                                            <div>
                                                                <input
                                                                    placeholder=""
                                                                    id="text-field"
                                                                    type="text"
                                                                    class="form-control"
                                                                    style="border-color: rgb(210, 214, 222);"
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div id="Email" class="col-sm-6 form-group">
                                                            <label for="Email">
                                                                <strong>Email</strong>
                                                            </label>
                                                            <div>
                                                                <input
                                                                    placeholder=""
                                                                    id="text-field"
                                                                    type="text"
                                                                    class="form-control"
                                                                    style="border-color: rgb(210, 214, 222);"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div id="mobile" class="col-sm-6 form-group">
                                                            <label for="Mobile number">
                                                                <strong>Mobile number</strong>
                                                            </label>
                                                            <br>
                                                            <form>
                                                                <input
                                                                    id="phone"
                                                                    name="phone"
                                                                    type="tel"
                                                                    maxlength="1"
                                                                    style="border-color: rgb(210, 214, 222);"
                                                                >
                                                            </form>
                                                            <div>
                                                                <div class="flag-container" style="width: 5pc;">
                                                                    <div tabindex="0" class="selected-flag">
                                                                        <div id="flag" class="iti-flag aq"></div>
                                                                        <div class="selected-dial-code"></div>
                                                                        <div class="iti-arrow"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div id="EXT" class="col-sm-3 form-group">
                                                            <label for="EXT">
                                                                <strong>EXT</strong>
                                                            </label>
                                                            <div>
                                                                <span class="inline">
                                                                    <input
                                                                        id="number"
                                                                        placeholder="0"
                                                                        min="0"
                                                                        type="number"
                                                                        class="form-control"
                                                                        style="border-color: rgb(210, 214, 222);"
                                                                    >
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div id="Work phone" class="col-sm-6 form-group">
                                                            <label for="Work phone">
                                                                <strong>Work phone</strong>
                                                            </label>
                                                            <div>
                                                                <span class="inline">
                                                                    <input
                                                                        id="number"
                                                                        placeholder="0"
                                                                        min="0"
                                                                        type="number"
                                                                        class="form-control"
                                                                        style="border-color: rgb(210, 214, 222);"
                                                                    >
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---->
                                            <div>
                                                <hr>
                                                <button class="btn btn-custom pull-right" style="border-color: rgb(0, 192, 239); background-color: rgb(0, 154, 186);float: right;padding-bottom: 10px;">
                                                    <i class="fas fa-sync-alt"></i>
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="__cov-progress" style="background-color: rgb(0, 154, 186); opacity: 0; position: fixed; top: 0px; left: 0px; width: 0%; height: 2px; transition: opacity 0.6s ease 0s;"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection