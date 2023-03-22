@extends('userPanel.layouts.app')

@section('main-userPanel')
        
    <div class="content-wrapper"> 
        <!-- .site-hero -->
        <!-- #masthead -->
		
		<div class="site-hero clearfix">
			<div class="container">
				<ol class="breadcrumb breadcrumb-custom">
					<li class="text"> </li>
					<li><a href="index.html"></a></li>
                    <li class="active"><i class="fas fa-chevron-right"></i></li>
				</ol>
			</div>
        </div>

        <div id="main" class="site-main clearfix">
            <div class="container" style="background-color:#fffbfb;margin-top: -3px;border-radius: 8px;">
                <div class="content-area">
                    <div class="row">
                        <div id="content" class="site-content col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                25
                                            </small>
                                            <a href="#">Installation and Upgradation</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Faveo-Helpdesk Installation on wamp server with Apache</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to enable required PHP extension on different server for faveo installation</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Basic server requirements</a>
                                                </h3>
                                            </li>
                                        </ul>
                                        <p class="more-link text-center">
                                            <a href="#" class="btn btn-custom btn-sm">View All</a>
                                        </p>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                56
                                            </small>
                                            <a href="#">Administrator Guide</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to create a Helptopic in faveo?</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to create teams?</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to view a Department profile?</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to link Ticket status to Department?</a>
                                                </h3>
                                            </li>
                                        </ul>
                                        <p class="more-link text-center">
                                            <a href="#" class="btn btn-custom btn-sm">View All</a>
                                        </p>
                                    </section>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                8
                                            </small>
                                            <a href="#">Agents Guide</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Create common reply to template</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Tickets</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">My tasks</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Tools Knowledge Base</a>
                                                </h3>
                                            </li>
                                            <p class="more-link text-center">
                                                <a href="#" class="btn btn-custom btn-sm">View All</a>
                                            </p>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                10
                                            </small>
                                            <a href="#">Known Issues</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How email will be append as a thread?</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Why emails are not getting fetched in faveo?</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Cant contact to LDAP Sever</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Bug after update from 1.0.7.4 to 1.0.7.5</a>
                                                </h3>
                                            </li>
                                        </ul>
                                        <p class="more-link text-center">
                                            <a href="#" class="btn btn-custom btn-sm">View All</a>
                                        </p>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                8
                                            </small>
                                            <a href="#">Knowledge Base Known Issues</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Creating a customized requester from</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to configure a 2FA  enabled Emails?</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Configuring reCaptcha with faveo</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Replying to aTicket thread</a>
                                                </h3>
                                            </li>
                                            <p class="more-link text-center">
                                                <a href="#" class="btn btn-custom btn-sm">View All</a>
                                            </p>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                97
                                            </small>
                                            <a href="#">Releases</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Faveo Helpdesk v2.1.8</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Faveo Helpdesk v2.1.7</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Faveo Helpdesk v2.1.7</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Faveo Helpdesk v2.1.6</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Faveo Helpdesk v2.1.5</a>
                                                </h3>
                                            </li>
                                            <p class="more-link text-center">
                                                <a href="#" class="btn btn-custom btn-sm">View All</a>
                                            </p>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                56
                                            </small>
                                            <a href="#">API</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Knowledge Base API's</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Webhooks</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Client panel API's</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Forgot Password</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Ticket reply with my thread</a>
                                                </h3>
                                            </li>
                                            <p class="more-link text-center">
                                                <a href="#" class="btn btn-custom btn-sm">View All</a>
                                            </p>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                5
                                            </small>
                                            <a href="#">Plugins & Packages</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">LDAP Functionality</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">LDAP configuration and features</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Time tracking and Billing mpodule</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">LDAP Authentication plugins</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Podio plugin setup Manual</a>
                                                </h3>
                                            </li>
                                            <p class="more-link text-center">
                                                <a href="#" class="btn btn-custom btn-sm">View All</a>
                                            </p>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                1
                                            </small>
                                            <a href="#">Creating Organisations</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to generate various Reports</a>
                                                </h3>
                                            </li>
                                            <p class="more-link text-center">
                                                <a href="#" class="btn btn-custom btn-sm">View All</a>
                                            </p>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                    <section class="box-categories">
                                        <h1 class="section-title h4 clearfix">
                                            <i class="fa fa-folder-open fa-fw text-muted"></i>
                                            <small class="pull-right float-right">
                                                <i class="far fa-hdd fa-fw"></i>
                                                8
                                            </small>
                                            <a href="#">Working with Emails</a>
                                        </h1>
                                        <ul class="fa-ul">
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to configure system support Emails</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">How to test your outgoing Emails frtom Faveo</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Setting up Sendgrid outgoing mail service in Faveo</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Exchange server working and settings</a>
                                                </h3>
                                            </li>
                                            <li>
                                                <i class="fa-li fa fa-list-alt fa-fw text-muted"></i>
                                                <h3 class="h5">
                                                    <a href="#">Configuring 2FA enabled outlook email address on Faveo</a>
                                                </h3>
                                            </li>
                                            <p class="more-link text-center">
                                                <a href="#" class="btn btn-custom btn-sm">View All</a>
                                            </p>
                                        </ul>
                                    </section>
                                </div>
                                <div class="col-sm-12">
                                    <ul class="pagination" style="float: right;">
                                        <li class="page-item">
                                            <a class="page-link" href="#">Previous</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <section class="section">
                                <div class="banner-wrapper banner-horizontal clearfix">
                                    <h4 class="banner-title h3">Need more support?</h4>
                                    <div class="banner-content">
                                        <p>If you did not find an answer, please raise a ticket describing the issue.</p>
                                    </div>
                                    <p>
                                        <a href="#" class="btn btn-custom">Submit Ticket</a>
                                    </p>
                                </div>
                            </section>
                        </div>
                        <div id="content" class="site-content col-md-3">
                            <div class="col-md-12">
                                <section id="section-categories" class="section">
                                    <h2 class="section-title h4 clearfix">Categories</h2>
                                    <ul class="nav nav-pills nav-stacked nav-categories">
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="list-group-item list-group-item-action" href="#">
                                                <span class="badge badge-pill pull-right float-right">6</span>
                                                Installation
                                            </a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="list-group-item list-group-item-action" href="#">
                                                <span class="badge badge-pill pull-right float-right">5</span>
                                                Agents guide
                                            </a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="list-group-item list-group-item-action" href="#">
                                                <span class="badge badge-pill pull-right float-right">3</span>
                                                Known issues
                                            </a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="list-group-item list-group-item-action" href="#">
                                                <span class="badge badge-pill pull-right float-right">11</span>
                                                API
                                            </a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="list-group-item list-group-item-action" href="#">
                                                <span class="badge badge-pill pull-right float-right">10</span>
                                                Releases
                                            </a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="list-group-item list-group-item-action" href="#">
                                                <span class="badge badge-pill pull-right float-right">21</span>
                                                Knowledge base
                                            </a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <a class="list-group-item list-group-item-action" href="#">
                                                <span class="badge badge-pill pull-right float-right">11</span>
                                                Plugins
                                            </a>
                                        </li>
                                    </ul>
                                </section>
                                <!-- #section-categories -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #main -->
            </div>
        </div>
    </div>
@endsection