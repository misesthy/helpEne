@extends('layouts.app')

@section('main-content')
            <div class="content-wrapper" style="min-height: 652.2px;">
                <section class="content-header">
                    <div class="alert alert-info">
                        <h4>View Clients</h4>
                        <p>View existing clients. If any client needs to be modified, click the client name. If any client needs to be deleted, check the client name (or license code) and click the 'Submit' button.</p>
                    </div>
                </section>
                <section class="content">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">View Clients</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-default">Excel</button>
                                        <button type="button" class="btn btn-default">PDF</button>
                                        <button type="button" class="btn btn-default">Print</button>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Search here.."
                                            aria-label="Input group example"
                                            aria-describedby="btnGroupAddon2"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table
                                    class="custom_table table table-bordered table-striped table-hover dataTable"
                                    id="DataTables_Table_0"
                                    role="grid"
                                    aria-describedby="DataTables_Table_0_info"
                                >
                                    <thead>
                                        <tr role="row">
                                            <th
                                                width="10"
                                                class="sorting-disabled sorting_disabled"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label=""
                                                style="width: 13.4px;"
                                            >
                                                <input type="checkbox" class="check-all-rows">
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="DataTables_Table_0"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Product: activate to sort column ascending"
                                                style="width: 130.6px;"
                                            >Full Name</th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="DataTables_Table_0"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="SKU: activate to sort column ascending"
                                                style="width: 85px;"
                                            >Email</th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="DataTables_Table_0"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Homepage: activate to sort column ascending"
                                                style="width: 163.4px;"
                                            >Date</th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="DataTables_Table_0"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Version: activate to sort column ascending"
                                                style="width: 125px;"
                                            >Licenses</th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="DataTables_Table_0"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Licenses: activate to sort column ascending"
                                                style="width: 135.4px;"
                                            >Installations</th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="DataTables_Table_0"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112.2px;"
                                            >Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td
                                                valign="top"
                                                colspan="8"
                                                class="dataTables_empty"
                                                style="text-align: center;"
                                            >No data available in table</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th
                                                width="10"
                                                class="sorting-disabled"
                                                rowspan="1"
                                                colspan="1"
                                            >
                                                <input type="checkbox" class="check-all-rows">
                                            </th>
                                            <th rowspan="1" colspan="1">Full Name</th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Date</th>
                                            <th rowspan="1" colspan="1">Licenses</th>
                                            <th rowspan="1" colspan="1">Installations</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div
                                    class="dataTables_info"
                                    id="DataTables_Table_0_info"
                                    role="status"
                                    aria-live="polite"
                                >Showing 0 to 0 of 0 entries</div>
                            </div>
                            <div class="col-lg-4">
                                <div class="pagination" id="pagination"></div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button
                                type="submit"
                                name="submit_ok"
                                class="btn btn-primary"
                                onclick="return confirm('Are you absolutely sure?');"
                            >Submit</button>
                        </div>
                    </div>
                </section>
            </div>
@endsection