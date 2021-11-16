<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cart Edit</h3>
            </div>
			<?php echo form_open('cart/edit/'.$cart['cartID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label">User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['ID'] == $cart['userID']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['ID'].'" '.$selected.'>'.$user['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">Module</label>
						<div class="form-group">
							<select name="moduleID" class="form-control">
								<option value="">select module</option>
								<?php 
								foreach($all_modules as $module)
								{
									$selected = ($module['id'] == $cart['moduleID']) ? ' selected="selected"' : "";

									echo '<option value="'.$module['id'].'" '.$selected.'>'.$module['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $cart['time_stamp']); ?>" class="form-control" id="time_stamp" />
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