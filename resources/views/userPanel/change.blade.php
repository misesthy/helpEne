@extends('userPanel.layouts.app')

@section('main-userPanel')
<div class="content-wrapper">
            <!-- #masthead -->
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
                    <form action="/action_page.php">
                        <div class="form-group">
                            <div class="content-area">
                                <div class="nav-tabs-custom">
                                    <div></div>
                                    <ul class="nav nav-tabs">
                                        <li class="tab-pane" style="margin-top:20px;">
                                            <a
                                                id="profile_tab"
                                                data-toggle="tab"
                                                aria-expanded="true"
                                                href="profile.html"
                                            >
                                                <strong>Edit profile</strong>
                                            </a>
                                        </li>
                                        <li class="active" style="margin-top:20px;">
                                            <li class="nav-link active">
                                                <a id="profile_tab" data-toggle="tab" aria-expanded="false">
                                                    <strong>Change password</strong>
                                                </a>
                                            </li>
                                        </li>
                                    </ul>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div id="First Name" class="col-sm-4 form-group">
                                                <label for="First Name">
                                                    <strong>old password</strong>
                                                </label>
                                                <label style="color: rgb(220, 53, 69);">*</label>
                                                <!---->
                                                <div>
                                                    <input
                                                        placeholder=""
                                                        id="password"
                                                        type="text"
                                                        class="form-control"
                                                        style="border-color: rgb(210, 214, 222);"
                                                    >
                                                    <!---->
                                                </div>
                                            </div>
                                            <div id="Last Name" class="col-sm-4 form-group">
                                                <label for="Last Name">
                                                    <strong>New password</strong>
                                                </label>
                                                <label style="color: rgb(220, 53, 69);">*</label>
                                                <div>
                                                    <input
                                                        id="text-field"
                                                        type="text"
                                                        class="form-control"
                                                        style="border-color: rgb(210, 214, 222);"
                                                    >
                                                    <!---->
                                                </div>
                                            </div>
                                            <div id="Email" class="col-sm-4 form-group">
                                                <label for="Email">
                                                    <strong>Confirm password</strong>
                                                </label>
                                                <label style="color: rgb(220, 53, 69);">*</label>
                                                <div>
                                                    <input
                                                        id="text-field"
                                                        type="text"
                                                        class="form-control"
                                                        style="border-color: rgb(210, 214, 222);"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <hr>
                                            <button class="btn btn-custom pull-right" style="border-color: rgb(0, 192, 239); background-color: rgb(0, 154, 186);">
                                                <i class="fas fa-sync-alt"></i>
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                    <div class="__cov-progress" style="background-color: rgb(0, 154, 186); opacity: 0; position: fixed; top: 0px; left: 0px; width: 0%; height: 2px; transition: opacity 0.6s ease 0s;padding-bottom: 120px;"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection