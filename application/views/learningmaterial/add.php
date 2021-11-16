<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h1>Add Material For Lesson</h1>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <form action="<?php echo site_url('learningmaterial/add/').$moduleid?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="card-body row">
                            <?php if(isset($this->session->error)):?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->error?>
                                </div>
                            <?php endif?>
                            <div class="col-md-6">
                                <label for="myfile" class="control-label">File</label>
                                <div class="form-group">
                                    <input type="file" name="myfile" class="form-control" id="myfile" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="learningID" class="control-label">LearningID</label>
                                <div class="form-group">
                                    <select name="learningID" class="form-control">
                                        <option value="">Select Lesson</option>
                                        <?php
                                        foreach($lessons as $lesson)
                                        {
                                            $selected = ($lesson['learningID'] == $this->input->post('learningID')) ? ' selected="selected"' : "";

                                            echo '<option value="'.$lesson['learningID'].'" '.$selected.'>'.$lesson['learningName'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="deleteStatus" class="control-label">DeleteStatus</label>
                                <div class="form-group">
                                    <input type="text" name="deleteStatus" value="<?php echo $this->input->post('deleteStatus'); ?>" class="form-control" id="deleteStatus" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="time_stamp" class="control-label">Time Stamp</label>
                                <div class="form-group">
                                    <input type="time" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" data-upgraded=",MaterialButton,MaterialRipple">Save<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
