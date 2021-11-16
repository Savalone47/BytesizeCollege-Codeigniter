<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h1>Add Lesson</h1>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <form action="<?php echo site_url('learning/add/').$moduleid?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="card-body row">
                            <div class="col-lg-12" style="text-align: center; color: #888">
                                <p>Create Course</p>
                            </div>
                            <?php if(isset($this->session->error)):?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->error?>
                                </div>
                            <?php endif?>
                            <div class="col-md-6">
                                <label for="learningTopic" class="control-label">LearningTopic</label>
                                <div class="form-group">
                                    <select name="learningTopic" class="form-control">
                                        <option value="">Select Topic</option>
                                        <?php
                                        foreach($topics as $topic)
                                        {
                                            $selected = ($topic['topicName'] == $this->input->post('learningTopic')) ? ' selected="selected"' : "";

                                            echo '<option value="'.$topic['topicName'].'" '.$selected.'>'.$topic['topicName'].'</option>';
                                        }
                                        ?>
                                    </select>
                               
                            </div>

                            <div class="col-md-6">
                                <label for="moduleID" class="control-label">ModuleID</label>
                                <div class="form-group">
                                    <input type="text" readonly="true" name="moduleID" value="<?php echo $moduleid ?>" class="form-control" id="moduleID" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="time_stamp" class="control-label">Time Stamp</label>
                                <div class="form-group">
                                    <input type="time" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="deleteStatus" class="control-label">DeleteStatus</label>
                                <div class="form-group">
                                    <input type="text" name="deleteStatus" value="<?php echo $this->input->post('deleteStatus'); ?>" class="form-control" id="deleteStatus" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="learningName" class="control-label">LearningName</label>
                                <div class="form-group">
                                    <input name="learningName" type="text" class="form-control" id="learningName"><?php echo $this->input->post('learningName'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="comment" class="control-label">Comment</label>
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" id="comment"><?php echo $this->input->post('comment'); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="link" class="control-label">Link</label>
                                <div class="form-group">
                                    <textarea name="link" class="form-control" id="link"><?php echo $this->input->post('link'); ?></textarea>
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