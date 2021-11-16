<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Courses Listing</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CourseName</th>
						<th>CourseType</th>
						<th>CourseLevel</th>
						<th>CourseCredits</th>
						<th>CoursePrice</th>
						<th>CourseStartDate</th>
                    </tr>
                    <?php foreach($courses as $c):?>
                    <tr>
						<td><?php echo $c->courseName?></td>
						<td><?php echo $c->courseType; ?></td>			
						<td><?php echo $c->courseLevel; ?></td>
						<td><?php echo $c->courseCredits; ?></td>
						<td><?php echo $c->coursePrice; ?></td>
						<td><?php echo $c->courseStartDate; ?></td>		
						
                    </tr>
                    <?php endforeach?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
