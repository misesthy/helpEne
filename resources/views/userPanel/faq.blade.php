@extends('layouts.app')

@section('main-content')
            <!-- #masthead -->
    <div class="content-wrapper">
            <div class="site-hero clearfix">
                <div class="container">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="text">You are here:</li>
                        <li>
                            <a href="index.html">
                                Home
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="active">Submit Ticket</li>
                    </ol>
                </div>
            </div>
            <!-- .site-hero -->
            <div class="container" style="background-color:white;padding-top:10px;margin-top: -38px;border-radius: 5px;margin-bottom:30px;">
                <!--form 1-->
                <div class="row">
                    <div class="col-sm-8" style="background-color: #eee;border:1px solid #cebdbd;border-radius: 8px;margin-bottom:30px;margin-left: 30px;margin-top: 30px;">
                        <div class="box-container">
                            <!-- <div class="row"> -->
                            <div class="box-header with-border">
                                <div class="col-sm-12">
                                    <h2 class="section-title h4 clearfix" style="margin-top: 10px;background-color: #eee;">Submit a Ticket</h2>
                                </div>
                            </div>
                        </div>
                        <form action="/action_page.php">
                            <div>
                                <label for="name">
                                    <strong>Attachment:</strong>
                                </label>
                                <input
                                    type="file"
                                    class="form-control"
                                    style="line-height: 1.0;"
                                    id="image"
                                    name="image"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="email" style="padding-top: 7px;">
                                    <strong>Email:</strong>
                                </label>
                                <input
                                    type="email"
                                    class="form-control Email"
                                    id="email"
                                    placeholder="Enter email"
                                    name="email"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="Requester">
                                    <strong>Requester</strong>
                                </label>
                                <label style="color: rgb(153, 22, 35);">*</label>
                                <input
                                    type="password"
                                    class="form-control Email"
                                    id="pwd"
                                    placeholder="Enter password"
                                    name="pwd"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="Requester">
                                    <strong>Subject</strong>
                                </label>
                                <label style="color: rgb(153, 22, 35);">*</label>
                                <input
                                    type="password"
                                    class="form-control Email"
                                    id="pwd"
                                    placeholder="Enter password"
                                    name="pwd"
                                    required
                                >
                            </div>
                            <!-- optional -->
                            <div>
                                <div class="form-group">
                                    <label for="Help Topic">
                                        <strong>Help Topic</strong>
                                    </label>
                                    <br>
                                    <select name="Help Topic" class="browser-default custom-select">
                                        <option value="Faveo Helpdesk">Faveo Helpdesk</option>
                                        <option value="Promotion & aids">Promotion & aids</option>
                                        <option value="jobs/careers">jobs/careers</option>
                                        <option value="Web hosting and Domain registration">Web hosting and Domain registration</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Description" style="padding-bottom:0px;">
                                    <strong>Description</strong>
                                </label>
                                <p>
                                    <br>
                                    <textarea name="editor1" id="editor1">&lt;p&gt;&lt;/p&gt;</textarea>
                                </p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember">
                                    Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default Button">
                                <i class="fas fa-sync-alt"></i>
                                Submit
                            </button>
                        </form>
                    </div>
                    <!--Form 1 End-->
                    <!--form 2-->
                    <div class="col-sm-3" style="margin-top: 30px;">
                        <!-- <h2>Submit a Ticket</h2> -->
                        <h2 class="section-title h4 clearfix">Have a Ticket</h2>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">
                                    <strong>Email:</strong>
                                </label>
                                <label style="color: rgb(220, 53, 69);">*</label>
                                <input
                                    type="email"
                                    class="form-control Email"
                                    id="email"
                                    placeholder="Enter email"
                                    name="email"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="Requester">
                                    <strong>Requester</strong>
                                </label>
                                <label style="color: rgb(220, 53, 69);">*</label>
                                <input
                                    type="password"
                                    class="form-control Email"
                                    id="pwd"
                                    placeholder="Enter password"
                                    name="pwd"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default Button">
                                <i class="far fa-save"></i>
                                Submit
                            </button>
                        </form>
                    </div>
                    <!--Form 2 End-->
                </div>
            </div>
    </div>
@endsection