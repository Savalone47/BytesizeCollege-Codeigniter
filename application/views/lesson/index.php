<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lessons Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lesson/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>LessonID</th>
						<th>TutorID</th>
						<th>SubjectID</th>
						<th>LessonName</th>
						<th>WeekDay</th>
						<th>RoomID</th>
						<th>RoomPin</th>
						<th>AdminPin</th>
						<th>LecturerRoomID</th>
						<th>Grade</th>
						<th>LessonTime</th>
						<th>LessonDate</th>
						<th>LessonStart</th>
						<th>LessonEnd</th>
						<th>Ref</th>
						<th>DateEventCreated</th>
						<th>LessonDescription</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lessons as $l){ ?>
                    <tr>
						<td><?php echo $l['lessonID']; ?></td>
						<td><?php echo $l['tutorID']; ?></td>
						<td><?php echo $l['subjectID']; ?></td>
						<td><?php echo $l['lessonName']; ?></td>
						<td><?php echo $l['weekDay']; ?></td>
						<td><?php echo $l['roomID']; ?></td>
						<td><?php echo $l['roomPin']; ?></td>
						<td><?php echo $l['adminPin']; ?></td>
						<td><?php echo $l['lecturerRoomID']; ?></td>
						<td><?php echo $l['grade']; ?></td>
						<td><?php echo $l['lessonTime']; ?></td>
						<td><?php echo $l['lessonDate']; ?></td>
						<td><?php echo $l['lessonStart']; ?></td>
						<td><?php echo $l['lessonEnd']; ?></td>
						<td><?php echo $l['ref']; ?></td>
						<td><?php echo $l['dateEventCreated']; ?></td>
						<td><?php echo $l['lessonDescription']; ?></td>
						<td>
                            <a href="<?php echo site_url('lesson/edit/'.$l['lessonID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lesson/remove/'.$l['lessonID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
</div>
