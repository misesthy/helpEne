@extends('chat.layouts.app')

@section('main-content')
          <div class="content-wrapper" style="min-height: 603px;">
                <section class="content-header">
                    <div class="alert alert-info">
                        <h4>Add New Client</h4>
                        <p>
                            Add new client to use licensed products. Enter first and last name, email address, and click the 'Submit' button.
                            <br>
                            <br>
                            Client's email address will be used to automatically verify his license.
                        </p>
                    </div>
                </section>
                <section class="content">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Client</h3>
                        </div>
                        <form action="clients_add.php" method="post">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input
                                                type="text"
                                                name="client_fname"
                                                value=""
                                                class="form-control"
                                                placeholder="Client's first name"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input
                                                type="text"
                                                name="client_lname"
                                                value=""
                                                class="form-control"
                                                placeholder="Client's last name"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input
                                                type="text"
                                                name="client_email"
                                                value=""
                                                class="form-control"
                                                placeholder="Client's email address (used to verify license)"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Client Status</label>
                                            <select
                                                name="client_status"
                                                class="form-control select2 select2-hidden-accessible"
                                                data-select2-id="1"
                                                tabindex="-1"
                                                aria-hidden="true"
                                            >
                                                <option value="1" data-select2-id="3">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{-- <label>Client Status</label> --}}
                                            <select
                                                name="client_status"
                                                class="form-control select2 select2-hidden-accessible"
                                                data-select2-id="1"
                                                tabindex="-1"
                                                aria-hidden="true"
                                            >
                                                {{-- <option value="1" data-select2-id="3">Active</option>
                                                <option value="0">Inactive</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" name="submit_ok" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
@endsection