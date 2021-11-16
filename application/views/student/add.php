<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3>Student Add</h3>
            </div>
        </div>
            <?php echo form_open('student/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="studentName" class="control-label"><span class="text-danger">*</span>StudentName</label>
						<div class="form-group">
							<input type="text" name="studentName" value="<?php echo $this->input->post('studentName'); ?>" class="form-control" id="studentName" />
							<span class="text-danger"><?php echo form_error('studentName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentLastName" class="control-label"><span class="text-danger">*</span>StudentLastName</label>
						<div class="form-group">
							<input type="text" name="studentLastName" value="<?php echo $this->input->post('studentLastName'); ?>" class="form-control" id="studentLastName" />
							<span class="text-danger"><?php echo form_error('studentLastName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentDOB" class="control-label"><span class="text-danger">*</span>StudentDOB</label>
						<div class="form-group">
							<input type="text" name="studentDOB" value="<?php echo $this->input->post('studentDOB'); ?>" class="has-datepicker form-control" id="studentDOB" />
							<span class="text-danger"><?php echo form_error('studentDOB');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentCountry" class="control-label"><span class="text-danger">*</span>StudentCountry</label>
						<div class="form-group">
							<input type="text" name="studentCountry" value="<?php echo $this->input->post('studentCountry'); ?>" class="form-control" id="studentCountry" />
							<span class="text-danger"><?php echo form_error('studentCountry');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentNumber" class="control-label"><span class="text-danger">*</span>StudentNumber</label>
						<div class="form-group">
							<input type="text" name="studentNumber" value="<?php echo $this->input->post('studentNumber'); ?>" class="form-control" id="studentNumber" />
							<span class="text-danger"><?php echo form_error('studentNumber');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="number" class="control-label"><span class="text-danger">*</span>Number</label>
						<div class="form-group">
							<input type="text" name="number" value="<?php echo $this->input->post('number'); ?>" class="form-control" id="number" />
							<span class="text-danger"><?php echo form_error('number');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="identityNo" class="control-label"><span class="text-danger">*</span>IdentityNo</label>
						<div class="form-group">
							<input type="text" name="identityNo" value="<?php echo $this->input->post('identityNo'); ?>" class="form-control" id="identityNo" />
							<span class="text-danger"><?php echo form_error('identityNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" class="form-control" id="gender" />
							<span class="text-danger"><?php echo form_error('gender');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentEmail" class="control-label"><span class="text-danger">*</span>StudentEmail</label>
						<div class="form-group">
							<input type="text" name="studentEmail" value="<?php echo $this->input->post('studentEmail'); ?>" class="form-control" id="studentEmail" />
							<span class="text-danger"><?php echo form_error('studentEmail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentPassword" class="control-label"><span class="text-danger">*</span>StudentPassword</label>
						<div class="form-group">
							<input type="text" name="studentPassword" value="<?php echo $this->input->post('studentPassword'); ?>" class="form-control" id="studentPassword" />
							<span class="text-danger"><?php echo form_error('studentPassword');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentPhone" class="control-label"><span class="text-danger">*</span>StudentPhone</label>
						<div class="form-group">
							<input type="text" name="studentPhone" value="<?php echo $this->input->post('studentPhone'); ?>" class="form-control" id="studentPhone" />
							<span class="text-danger"><?php echo form_error('studentPhone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentHomeNo" class="control-label"><span class="text-danger">*</span>StudentHomeNo</label>
						<div class="form-group">
							<input type="text" name="studentHomeNo" value="<?php echo $this->input->post('studentHomeNo'); ?>" class="form-control" id="studentHomeNo" />
							<span class="text-danger"><?php echo form_error('studentHomeNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentImage" class="control-label"><span class="text-danger">*</span>StudentImage</label>
						<div class="form-group">
							<input type="text" name="studentImage" value="<?php echo $this->input->post('studentImage'); ?>" class="form-control" id="studentImage" />
							<span class="text-danger"><?php echo form_error('studentImage');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentAddress" class="control-label"><span class="text-danger">*</span>StudentAddress</label>
						<div class="form-group">
							<input type="text" name="studentAddress" value="<?php echo $this->input->post('studentAddress'); ?>" class="form-control" id="studentAddress" />
							<span class="text-danger"><?php echo form_error('studentAddress');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="passport" class="control-label"><span class="text-danger">*</span>Passport</label>
						<div class="form-group">
							<input type="text" name="passport" value="<?php echo $this->input->post('passport'); ?>" class="form-control" id="passport" />
							<span class="text-danger"><?php echo form_error('passport');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="disability" class="control-label"><span class="text-danger">*</span>Disability</label>
						<div class="form-group">
							<input type="text" name="disability" value="<?php echo $this->input->post('disability'); ?>" class="form-control" id="disability" />
							<span class="text-danger"><?php echo form_error('disability');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="hearing" class="control-label"><span class="text-danger">*</span>Hearing</label>
						<div class="form-group">
							<input type="text" name="hearing" value="<?php echo $this->input->post('hearing'); ?>" class="form-control" id="hearing" />
							<span class="text-danger"><?php echo form_error('hearing');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="physicalHealth" class="control-label"><span class="text-danger">*</span>PhysicalHealth</label>
						<div class="form-group">
							<input type="text" name="physicalHealth" value="<?php echo $this->input->post('physicalHealth'); ?>" class="form-control" id="physicalHealth" />
							<span class="text-danger"><?php echo form_error('physicalHealth');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="intellectual" class="control-label"><span class="text-danger">*</span>Intellectual</label>
						<div class="form-group">
							<input type="text" name="intellectual" value="<?php echo $this->input->post('intellectual'); ?>" class="form-control" id="intellectual" />
							<span class="text-danger"><?php echo form_error('intellectual');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="learning" class="control-label"><span class="text-danger">*</span>Learning</label>
						<div class="form-group">
							<input type="text" name="learning" value="<?php echo $this->input->post('learning'); ?>" class="form-control" id="learning" />
							<span class="text-danger"><?php echo form_error('learning');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mental" class="control-label"><span class="text-danger">*</span>Mental</label>
						<div class="form-group">
							<input type="text" name="mental" value="<?php echo $this->input->post('mental'); ?>" class="form-control" id="mental" />
							<span class="text-danger"><?php echo form_error('mental');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vision" class="control-label"><span class="text-danger">*</span>Vision</label>
						<div class="form-group">
							<input type="text" name="vision" value="<?php echo $this->input->post('vision'); ?>" class="form-control" id="vision" />
							<span class="text-danger"><?php echo form_error('vision');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical" class="control-label"><span class="text-danger">*</span>Medical</label>
						<div class="form-group">
							<input type="text" name="medical" value="<?php echo $this->input->post('medical'); ?>" class="form-control" id="medical" />
							<span class="text-danger"><?php echo form_error('medical');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="other" class="control-label"><span class="text-danger">*</span>Other</label>
						<div class="form-group">
							<input type="text" name="other" value="<?php echo $this->input->post('other'); ?>" class="form-control" id="other" />
							<span class="text-danger"><?php echo form_error('other');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="passportDOC" class="control-label"><span class="text-danger">*</span>PassportDOC</label>
						<div class="form-group">
							<input type="text" name="passportDOC" value="<?php echo $this->input->post('passportDOC'); ?>" class="form-control" id="passportDOC" />
							<span class="text-danger"><?php echo form_error('passportDOC');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="proofOfPayment" class="control-label"><span class="text-danger">*</span>ProofOfPayment</label>
						<div class="form-group">
							<input type="text" name="proofOfPayment" value="<?php echo $this->input->post('proofOfPayment'); ?>" class="form-control" id="proofOfPayment" />
							<span class="text-danger"><?php echo form_error('proofOfPayment');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="certificates" class="control-label"><span class="text-danger">*</span>Certificates</label>
						<div class="form-group">
							<input type="text" name="certificates" value="<?php echo $this->input->post('certificates'); ?>" class="form-control" id="certificates" />
							<span class="text-danger"><?php echo form_error('certificates');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="otp" class="control-label"><span class="text-danger">*</span>Otp</label>
						<div class="form-group">
							<input type="text" name="otp" value="<?php echo $this->input->post('otp'); ?>" class="form-control" id="otp" />
							<span class="text-danger"><?php echo form_error('otp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="activeStatus" class="control-label"><span class="text-danger">*</span>ActiveStatus</label>
						<div class="form-group">
							<input type="text" name="activeStatus" value="<?php echo $this->input->post('activeStatus'); ?>" class="form-control" id="activeStatus" />
							<span class="text-danger"><?php echo form_error('activeStatus');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentTimestamp" class="control-label"><span class="text-danger">*</span>StudentTimestamp</label>
						<div class="form-group">
							<input type="text" name="studentTimestamp" value="<?php echo $this->input->post('studentTimestamp'); ?>" class="form-control" id="studentTimestamp" />
							<span class="text-danger"><?php echo form_error('studentTimestamp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label"><span class="text-danger">*</span>Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo $this->input->post('year'); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentMiddleName" class="control-label"><span class="text-danger">*</span>StudentMiddleName</label>
						<div class="form-group">
							<input type="text" name="studentMiddleName" value="<?php echo $this->input->post('studentMiddleName'); ?>" class="form-control" id="studentMiddleName" />
							<span class="text-danger"><?php echo form_error('studentMiddleName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="aggrement" class="control-label"><span class="text-danger">*</span>Aggrement</label>
						<div class="form-group">
							<textarea name="aggrement" class="form-control" id="aggrement"><?php echo $this->input->post('aggrement'); ?></textarea>
							<span class="text-danger"><?php echo form_error('aggrement');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>

