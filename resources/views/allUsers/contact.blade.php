@extends('userPanel.layouts.app')no

@section('main-userPanel')
            <!-- #masthead -->
    <div class="content-wrapper">
            <div class="site-hero clearfix">
                <div class="container">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="text">You are here:</li>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">
                            <i class="fas fa-chevron-right"></i>
                            Contact Us
                        </li>
                    </ol>
                </div>
            </div>
            <!-- .site-hero -->
            <div id="main" class="site-main clearfix">
                <div class="container">
                    <div class="content-area">
                        <div class="row">
                            <div id="content" class="site-content col-sm-12">
                                <article class="hentry">
                                    <header class="entry-header">
                                        <h1 class="entry-title">Contact Us</h1>
                                    </header>
                                    <!-- .entry-header -->
                                    <div class="entry-content clearfix">
                                        <div class="map-frame">
                                            <div id="map-maker" style="height:300px"></div>
                                        </div>
                                        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
                                        <script>
										var map;
										function initialize(){
											var mapOptions = {
												zoom: 16,
												center: new google.maps.LatLng(-7.95860,112.63196),
												mapTypeId: google.maps.MapTypeId.ROADMAP
											};
											var map = new google.maps.Map(document.getElementById("map-maker"), mapOptions);
											var marker = new google.maps.Marker({
												position: map.getCenter(),
												map: map,
												title: ""
											});
											google.maps.event.addListener(map, "center_changed", function(){
												window.setTimeout(function(){
													map.panTo(marker.getPosition());
												}, 3000);
											});
										}
										google.maps.event.addDomListener(window, "load", initialize);
                                        </script>
                                        <div class="alert alert-info alert-custom pl-5 py-3">
                                            <button
                                                type="button"
                                                class="close"
                                                data-dismiss="alert"
                                                aria-hidden="true"
                                            >&times;</button>
                                            <i class="fa fa-info-circle text-info pl-4 px-3 py-1"></i>
                                            <h4>BUSINESS HOURS</h4>
                                            Just in case you don’t hear about us, our business hours are weekdays 08:00 – 18:00. Thanks for understanding.
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                                <div class="clearfix"></div>
                                                <h4>Address</h4>
                                                <ul class="fa-ul with-line-border">
                                                    <li>
                                                        <i class="fa-li fa fa-map-marker text-muted"></i>
                                                        Street 123 St.Suite 45, New Something, Town City 67890
                                                    </li>
                                                    <li>
                                                        <i class="fa-li fa fa-phone text-muted"></i>
                                                        123-456-7890
                                                    </li>
                                                    <li>
                                                        <i class="fa-li fa fa-print text-muted"></i>
                                                        123-456-7890
                                                    </li>
                                                    <li>
                                                        <i class="fa-li far fa-envelope text-muted"></i>
                                                        mail@yoursite.com
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="" method="post" class="contact-form form-border hidden-print">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="contact-name">Name</label>
                                                                <input type="text" class="form-control" id="contact-name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="contact-email">Email</label>
                                                                <input type="email" class="form-control" id="contact-email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contact-subject">Subject</label>
                                                        <input type="text" class="form-control" id="contact-subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contact-message">Message</label>
                                                        <textarea
                                                            class="form-control"
                                                            id="contact-message"
                                                            cols="30"
                                                            rows="8"
                                                        ></textarea>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                                                    </div>
                                                </form>
                                                <!-- .contact-form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .entry-content -->
                                </article>
                                <!-- .hentry -->
                            </div>
                            <!-- #content -->
                        </div>
                    </div>
                    <!-- .content-area -->
                </div>
            </div>
            <!-- #main -->
    </div>
@endsection
        
