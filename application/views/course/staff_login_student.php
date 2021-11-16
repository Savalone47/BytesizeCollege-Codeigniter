
    <!-- end sidebar menu -->
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Staff Student</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.php">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a class="parent-item"
                               href="report.php">Report</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Student Login</li>
                    </ol>
                </div>
            </div>
            <div class="row">
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
                                        <div class="card-body " id="bar-parent">
                                            <table id="exportTable"
                                                   class="table  table-striped table-bordered table-hover table-checkable order-column dataTable no-footer "
                                                   style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Function</th>
                                                    <th>Email</th>
                                                    <th>Login</th>
                                                    <th>View</th>
                                                </tr>
                                                </thead>
                                                <tbody id="contentBox">
                                                <th>Full Name</th>
                                                <th>Function</th>
                                                <th>Email</th>
                                                <th>Login</th>
                                                <th>
                                                    <button id="modal-btn">
                                                        View
                                                    </button>
                                                </th>
                                                </tbody>
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

    <div class="modal"
         tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal Content: begins -->
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="gridSystemModalLabel">Login Dates</h4>
                    <button type="button" class="close-btn">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <div class="form-group col-sm-12">
                                        <label>Choose Times</label>
                                        <select class="form-control times">
                                            <option value="Eversince">Ever Since</option>
                                            <option value="month">This Month</option>
                                            <option value="week">This Week</option>
                                            <option value="today">Today</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <table
                                        class="mdl-data-table ml-table-striped ml-table-bordered mdl-js-data-table is-upgraded">
                                        <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                                            <th class="mdl-data-table__cell--non-numeric">Address</th>
                                        </tr>
                                        </thead>
                                        <tbody id="logins">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .modal {
            display: none;
            position: fixed;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            position: relative;
            background-color: white;
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }
        .close-btn {
            float: right;
            color: lightgray;
            font-size: 24px;
            font-weight: bold;
        }
        .close-btn:hover {
            color: darkgray;
        }
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }
        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }
    </style>

    <script>
        let modalBtn = document.getElementById("modal-btn")
        let modal = document.querySelector(".modal")
        let closeBtn = document.querySelector(".close-btn")
        modalBtn.onclick = function(){
            modal.style.display = "block"
        }
        closeBtn.onclick = function(){
            modal.style.display = "none"
        }
        window.onclick = function(e){
            if(e.target == modal){
                modal.style.display = "none"
            }
        }
    </script>

