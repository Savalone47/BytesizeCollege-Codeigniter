
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
            
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel tab-border card-box">
                        <div class="row">
                            <div class="card">
                                <h3 style="text-align:center">ALL STUDENTS</h3>
                                <br><br>
                                <div class="table-scrollable">
                                    <table
                                            class="table table-responsive table-bordered table-hover table-checkable order-column valign-middle"
                                            id="example4">
                                        <thead>
                                        <tr>
                                            <th> FirstName </th>
                                            <th> LastName </th>
                                            <th> Email </th>
                                            <th> Number </th>
                                            <th> Gender </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach ($allStudent as $std): ?>
                                            <tr class="odd gradeX">
                                                <td style="text-align:center"><?php echo $std['studentName'];?></td>
                                                <td style="text-align:center"><?php echo $std['studentLastName'];?></td>
                                                <td><?php echo $std['studentEmail'];?></td>
                                                <td style="text-align:center"><?php echo $std['studentNumber'];?></td>
                                                <td style="text-align:center"><?php echo $std['gender'];?></td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            