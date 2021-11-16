<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Extralessons Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('extralesson/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>LessonID</th>
						<th>SubjectID</th>
						<th>TutorID</th>
						<th>LessonName</th>
						<th>WeekDay</th>
						<th>RoomID</th>
						<th>RoomPin</th>
						<th>AdminPin</th>
						<th>Price</th>
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
                    <?php foreach($extralessons as $e){ ?>
                    <tr>
						<td><?php echo $e['lessonID']; ?></td>
						<td><?php echo $e['subjectID']; ?></td>
						<td><?php echo $e['tutorID']; ?></td>
						<td><?php echo $e['lessonName']; ?></td>
						<td><?php echo $e['weekDay']; ?></td>
						<td><?php echo $e['roomID']; ?></td>
						<td><?php echo $e['roomPin']; ?></td>
						<td><?php echo $e['adminPin']; ?></td>
						<td><?php echo $e['price']; ?></td>
						<td><?php echo $e['grade']; ?></td>
						<td><?php echo $e['lessonTime']; ?></td>
						<td><?php echo $e['lessonDate']; ?></td>
						<td><?php echo $e['lessonStart']; ?></td>
						<td><?php echo $e['lessonEnd']; ?></td>
						<td><?php echo $e['ref']; ?></td>
						<td><?php echo $e['dateEventCreated']; ?></td>
						<td><?php echo $e['lessonDescription']; ?></td>
						<td>
                            <a href="<?php echo site_url('extralesson/edit/'.$e['lessonID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('extralesson/remove/'.$e['lessonID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
