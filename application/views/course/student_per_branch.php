<!-- end sidebar menu -->
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Student Per Branch</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="<?=base_url("course/index")?>">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a class="parent-item"
                               href="<?=site_url('course/report')?>">Report</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Student Per Branch</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control" id="departmentFilter">
                                    <option value="all">All Branches</option>
                                    <option value="Gaborone">Gaborone</option>
                                    <option value="Palapye">Palapye</option>
                                    <option value="Letlhakane">Letlhakane</option>
                                    <option value="Gaborone 2020">Gaborone 2020</option>
                                    <option value="Palapye 2020">Palapye 2020</option>

                                </select>

                            </div>
                        </div>
                    </div>


                    <!-- filtering per course -->
                    <div class="col-md-4 text-center showCourse">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control" id="courseFilter">
                                    <option value="all">All Courses</option>
                                    <option value="">CIPS</option>
                                    <option value="1000">Computer Operation Skills (Basic)</option>
                                    <option value="1001">Computer Operation Skills (Advanced)</option>
                                    <option value="1002">Occupational Health and Safety (OHS)</option>
                                    <option value="1003">Early Childhood Education</option>
                                    <option value="1004">Purchasing and Supply (CIPS)</option>
                                    <option value="1005">Security Management</option>
                                    <option value="1006">Computing and Information System (CIS)</option>
                                    <option value="1008">Social Work</option>
                                    <option value="1009">Public Health</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- filtering per intake -->
                    <div class="col-md-2 text-center showIntake">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control" id="intakeFilter">
                                    <option value="all">All Intakes</option>
                                    <option value="Jan">Jan</option>
                                    <option value="Jun">Jun</option>
                                    <option value="Sep">Sep</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 text-center">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control" id="year">
                                    <option value="all">All years</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card tab-pane active" id="home-2">
                    <div class="row">
                        <div class="card-body ">
                            <div class="table-scrollable">
                                <div id="example4_wrapper"
                                     class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="dataTables_length" id="example4_length">
                                                <label>Show
                                                    <select name="example4_length"
                                                            aria-controls="example4"
                                                            class="form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    entries
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div id="example4_filter"
                                                 class="dataTables_filter">
                                                <label>
                                                    Search:
                                                    <input type="search" class="form-control form-control-sm"
                                                           placeholder="" aria-controls="example4">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-4">
                                            <div class="btn-group pull-right">
                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-bs-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Print </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-pdf-o"></i> Save as
                                                            PDF </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-excel-o"></i>
                                                            Export to Excel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="new_applicants_table"
                                                   class="table table-striped table-bordered table-hover dataTable display"
                                                   style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Student Number</th>
                                                    <th>Gender</th>
                                                    <th>Registered at</th>
                                                    <!-- <th>Edit</th> -->
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Student Number</th>
                                                    <th>Gender</th>
                                                    <th>Registered at</th>
                                                    <!-- <th>Edit</th> -->
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info"
                                                 id="example4_info"
                                                 role="status" aria-live="polite">
                                                Showing 1 to 10 of 14 entries
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="example4_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="example4_previous">
                                                        <a href="#" aria-controls="example4"
                                                           data-dt-idx="0" tabindex="0" class="page-link">
                                                            Previous
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="example4"
                                                           data-dt-idx="1" tabindex="0" class="page-link">
                                                            1
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="example4"
                                                           data-dt-idx="2" tabindex="0" class="page-link">
                                                            2
                                                        </a>
                                                    </li>
                                                    <li class="paginate_button page-item next"
                                                        id="example4_next">
                                                        <a href="#" aria-controls="example4"
                                                           data-dt-idx="3" tabindex="0" class="page-link">
                                                            Next
                                                        </a>
                                                    </li>
                                                </ul>
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
    </div>
    <!-- end page content -->