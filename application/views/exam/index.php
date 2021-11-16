
<div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Exams</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="<?=base_url('course/report')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Exams</li>
                    </ol>
                </div>
            </div>
            <div class="row">
				<div class="col-md-6 col-sm-6 col-6">
					<div class="btn-group">
						<a href="<?php echo site_url("exam/add")?>" id="addRow" class="btn btn-info">
							Add New <i class="fa fa-plus"></i>
						</a>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab2">
                                <div class="row">
								<?php foreach($exam as $e){ ?>
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <a style="color: inherit" href="<?=site_url('exam/exam_detail/'.$e["id"])?>">
                                            <div class="info-box bg-cyan">
                                                <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text"><?php echo $e["exam"]?></span>
                                                    <span class="info-box-number"><?php echo $e["title"]?></span>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 45%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                   <?php echo $e["marks"]?>
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                        </a>
                                        <div class="container">
                                            <a href="<?php echo site_url('exam/edit/'.$e['id']);?>" class="btn btn-circle blue-bgcolor btn-sm">Edit</a>
                                            <a href="<?php echo site_url('exam/remove/' .$e['id']);?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash-o "></i>Delete</a>
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
								<?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>