<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Student Edit</h3>
            </div>
			<?php echo form_open('student/edit/'.$student['studentID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="studentName" class="control-label"><span class="text-danger">*</span>StudentName</label>
						<div class="form-group">
							<input type="text" name="studentName" value="<?php echo ($this->input->post('studentName') ? $this->input->post('studentName') : $student['studentName']); ?>" class="form-control" id="studentName" />
							<span class="text-danger"><?php echo form_error('studentName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentLastName" class="control-label"><span class="text-danger">*</span>StudentLastName</label>
						<div class="form-group">
							<input type="text" name="studentLastName" value="<?php echo ($this->input->post('studentLastName') ? $this->input->post('studentLastName') : $student['studentLastName']); ?>" class="form-control" id="studentLastName" />
							<span class="text-danger"><?php echo form_error('studentLastName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentDOB" class="control-label"><span class="text-danger">*</span>StudentDOB</label>
						<div class="form-group">
							<input type="text" name="studentDOB" value="<?php echo ($this->input->post('studentDOB') ? $this->input->post('studentDOB') : $student['studentDOB']); ?>" class="has-datepicker form-control" id="studentDOB" />
							<span class="text-danger"><?php echo form_error('studentDOB');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentCountry" class="control-label"><span class="text-danger">*</span>StudentCountry</label>
						<div class="form-group">
							<input type="text" name="studentCountry" value="<?php echo ($this->input->post('studentCountry') ? $this->input->post('studentCountry') : $student['studentCountry']); ?>" class="form-control" id="studentCountry" />
							<span class="text-danger"><?php echo form_error('studentCountry');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentNumber" class="control-label"><span class="text-danger">*</span>StudentNumber</label>
						<div class="form-group">
							<input type="text" name="studentNumber" value="<?php echo ($this->input->post('studentNumber') ? $this->input->post('studentNumber') : $student['studentNumber']); ?>" class="form-control" id="studentNumber" />
							<span class="text-danger"><?php echo form_error('studentNumber');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="number" class="control-label"><span class="text-danger">*</span>Number</label>
						<div class="form-group">
							<input type="text" name="number" value="<?php echo ($this->input->post('number') ? $this->input->post('number') : $student['number']); ?>" class="form-control" id="number" />
							<span class="text-danger"><?php echo form_error('number');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="identityNo" class="control-label"><span class="text-danger">*</span>IdentityNo</label>
						<div class="form-group">
							<input type="text" name="identityNo" value="<?php echo ($this->input->post('identityNo') ? $this->input->post('identityNo') : $student['identityNo']); ?>" class="form-control" id="identityNo" />
							<span class="text-danger"><?php echo form_error('identityNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $student['gender']); ?>" class="form-control" id="gender" />
							<span class="text-danger"><?php echo form_error('gender');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentEmail" class="control-label"><span class="text-danger">*</span>StudentEmail</label>
						<div class="form-group">
							<input type="text" name="studentEmail" value="<?php echo ($this->input->post('studentEmail') ? $this->input->post('studentEmail') : $student['studentEmail']); ?>" class="form-control" id="studentEmail" />
							<span class="text-danger"><?php echo form_error('studentEmail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentPassword" class="control-label"><span class="text-danger">*</span>StudentPassword</label>
						<div class="form-group">
							<input type="text" name="studentPassword" value="<?php echo ($this->input->post('studentPassword') ? $this->input->post('studentPassword') : $student['studentPassword']); ?>" class="form-control" id="studentPassword" />
							<span class="text-danger"><?php echo form_error('studentPassword');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentPhone" class="control-label"><span class="text-danger">*</span>StudentPhone</label>
						<div class="form-group">
							<input type="text" name="studentPhone" value="<?php echo ($this->input->post('studentPhone') ? $this->input->post('studentPhone') : $student['studentPhone']); ?>" class="form-control" id="studentPhone" />
							<span class="text-danger"><?php echo form_error('studentPhone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentHomeNo" class="control-label"><span class="text-danger">*</span>StudentHomeNo</label>
						<div class="form-group">
							<input type="text" name="studentHomeNo" value="<?php echo ($this->input->post('studentHomeNo') ? $this->input->post('studentHomeNo') : $student['studentHomeNo']); ?>" class="form-control" id="studentHomeNo" />
							<span class="text-danger"><?php echo form_error('studentHomeNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentImage" class="control-label"><span class="text-danger">*</span>StudentImage</label>
						<div class="form-group">
							<input type="text" name="studentImage" value="<?php echo ($this->input->post('studentImage') ? $this->input->post('studentImage') : $student['studentImage']); ?>" class="form-control" id="studentImage" />
							<span class="text-danger"><?php echo form_error('studentImage');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentAddress" class="control-label"><span class="text-danger">*</span>StudentAddress</label>
						<div class="form-group">
							<input type="text" name="studentAddress" value="<?php echo ($this->input->post('studentAddress') ? $this->input->post('studentAddress') : $student['studentAddress']); ?>" class="form-control" id="studentAddress" />
							<span class="text-danger"><?php echo form_error('studentAddress');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="passport" class="control-label"><span class="text-danger">*</span>Passport</label>
						<div class="form-group">
							<input type="text" name="passport" value="<?php echo ($this->input->post('passport') ? $this->input->post('passport') : $student['passport']); ?>" class="form-control" id="passport" />
							<span class="text-danger"><?php echo form_error('passport');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="disability" class="control-label"><span class="text-danger">*</span>Disability</label>
						<div class="form-group">
							<input type="text" name="disability" value="<?php echo ($this->input->post('disability') ? $this->input->post('disability') : $student['disability']); ?>" class="form-control" id="disability" />
							<span class="text-danger"><?php echo form_error('disability');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="hearing" class="control-label"><span class="text-danger">*</span>Hearing</label>
						<div class="form-group">
							<input type="text" name="hearing" value="<?php echo ($this->input->post('hearing') ? $this->input->post('hearing') : $student['hearing']); ?>" class="form-control" id="hearing" />
							<span class="text-danger"><?php echo form_error('hearing');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="physicalHealth" class="control-label"><span class="text-danger">*</span>PhysicalHealth</label>
						<div class="form-group">
							<input type="text" name="physicalHealth" value="<?php echo ($this->input->post('physicalHealth') ? $this->input->post('physicalHealth') : $student['physicalHealth']); ?>" class="form-control" id="physicalHealth" />
							<span class="text-danger"><?php echo form_error('physicalHealth');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="intellectual" class="control-label"><span class="text-danger">*</span>Intellectual</label>
						<div class="form-group">
							<input type="text" name="intellectual" value="<?php echo ($this->input->post('intellectual') ? $this->input->post('intellectual') : $student['intellectual']); ?>" class="form-control" id="intellectual" />
							<span class="text-danger"><?php echo form_error('intellectual');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="learning" class="control-label"><span class="text-danger">*</span>Learning</label>
						<div class="form-group">
							<input type="text" name="learning" value="<?php echo ($this->input->post('learning') ? $this->input->post('learning') : $student['learning']); ?>" class="form-control" id="learning" />
							<span class="text-danger"><?php echo form_error('learning');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mental" class="control-label"><span class="text-danger">*</span>Mental</label>
						<div class="form-group">
							<input type="text" name="mental" value="<?php echo ($this->input->post('mental') ? $this->input->post('mental') : $student['mental']); ?>" class="form-control" id="mental" />
							<span class="text-danger"><?php echo form_error('mental');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vision" class="control-label"><span class="text-danger">*</span>Vision</label>
						<div class="form-group">
							<input type="text" name="vision" value="<?php echo ($this->input->post('vision') ? $this->input->post('vision') : $student['vision']); ?>" class="form-control" id="vision" />
							<span class="text-danger"><?php echo form_error('vision');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical" class="control-label"><span class="text-danger">*</span>Medical</label>
						<div class="form-group">
							<input type="text" name="medical" value="<?php echo ($this->input->post('medical') ? $this->input->post('medical') : $student['medical']); ?>" class="form-control" id="medical" />
							<span class="text-danger"><?php echo form_error('medical');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="other" class="control-label"><span class="text-danger">*</span>Other</label>
						<div class="form-group">
							<input type="text" name="other" value="<?php echo ($this->input->post('other') ? $this->input->post('other') : $student['other']); ?>" class="form-control" id="other" />
							<span class="text-danger"><?php echo form_error('other');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="passportDOC" class="control-label"><span class="text-danger">*</span>PassportDOC</label>
						<div class="form-group">
							<input type="text" name="passportDOC" value="<?php echo ($this->input->post('passportDOC') ? $this->input->post('passportDOC') : $student['passportDOC']); ?>" class="form-control" id="passportDOC" />
							<span class="text-danger"><?php echo form_error('passportDOC');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="proofOfPayment" class="control-label"><span class="text-danger">*</span>ProofOfPayment</label>
						<div class="form-group">
							<input type="text" name="proofOfPayment" value="<?php echo ($this->input->post('proofOfPayment') ? $this->input->post('proofOfPayment') : $student['proofOfPayment']); ?>" class="form-control" id="proofOfPayment" />
							<span class="text-danger"><?php echo form_error('proofOfPayment');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="certificates" class="control-label"><span class="text-danger">*</span>Certificates</label>
						<div class="form-group">
							<input type="text" name="certificates" value="<?php echo ($this->input->post('certificates') ? $this->input->post('certificates') : $student['certificates']); ?>" class="form-control" id="certificates" />
							<span class="text-danger"><?php echo form_error('certificates');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="otp" class="control-label"><span class="text-danger">*</span>Otp</label>
						<div class="form-group">
							<input type="text" name="otp" value="<?php echo ($this->input->post('otp') ? $this->input->post('otp') : $student['otp']); ?>" class="form-control" id="otp" />
							<span class="text-danger"><?php echo form_error('otp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="activeStatus" class="control-label"><span class="text-danger">*</span>ActiveStatus</label>
						<div class="form-group">
							<input type="text" name="activeStatus" value="<?php echo ($this->input->post('activeStatus') ? $this->input->post('activeStatus') : $student['activeStatus']); ?>" class="form-control" id="activeStatus" />
							<span class="text-danger"><?php echo form_error('activeStatus');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentTimestamp" class="control-label"><span class="text-danger">*</span>StudentTimestamp</label>
						<div class="form-group">
							<input type="text" name="studentTimestamp" value="<?php echo ($this->input->post('studentTimestamp') ? $this->input->post('studentTimestamp') : $student['studentTimestamp']); ?>" class="form-control" id="studentTimestamp" />
							<span class="text-danger"><?php echo form_error('studentTimestamp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label"><span class="text-danger">*</span>Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $student['year']); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentMiddleName" class="control-label"><span class="text-danger">*</span>StudentMiddleName</label>
						<div class="form-group">
							<input type="text" name="studentMiddleName" value="<?php echo ($this->input->post('studentMiddleName') ? $this->input->post('studentMiddleName') : $student['studentMiddleName']); ?>" class="form-control" id="studentMiddleName" />
							<span class="text-danger"><?php echo form_error('studentMiddleName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="aggrement" class="control-label"><span class="text-danger">*</span>Aggrement</label>
						<div class="form-group">
							<textarea name="aggrement" class="form-control" id="aggrement"><?php echo ($this->input->post('aggrement') ? $this->input->post('aggrement') : $student['aggrement']); ?></textarea>
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
</div>