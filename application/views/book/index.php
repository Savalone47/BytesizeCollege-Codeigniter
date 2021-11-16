<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3>Book Listing </h3>
                    <a href="<?php echo site_url('book/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id book</th>
						<th>Title Book</th>
						<th>Book file</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($books as $b){ ?>
                    <tr>
						<td><?php echo $b['id_book']; ?></td>
						<td><?php echo $b['title_book']; ?></td>
						<td><a href="<?php echo site_url($b['file_book']) ?>">View book</a></td>
						<td>
                            <a href="<?php echo site_url('department/edit/'.$b['id_book']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('department/remove/'.$b['id_book']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
</div>

<div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Library</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="<?=base_url('course/index');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Library</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <ul class="nav customtab nav-tabs" role="tablist">
                            <div class="btn-group">
                                <a href="<?=site_url('book/add')?>" id="addRow"
                                   class="btn btn-info">
                                    Add New <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab2">
                                <div class="row">
                                <?php foreach($books as $b){ ?>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="<?=base_url('>resources/assets_admin/img/std/std10.jpg')?>"
                                                         class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name"><?php echo $b['title_book']?></div>
                                                    </div>
                                                    <p><?php echo $b['description_book'];?></p>
                                                    <div class="profile-userbuttons">
                                                        <a href="<?php echo site_url('book/remove/' .$b['id_book']);?>"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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