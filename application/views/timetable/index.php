<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Program of exams</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Program of exams</li>
							</ol>
						</div>
					</div>
					<div class="row">
                        <div id='external-events'></div>
						<div class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-head">
									<header>Calendar</header>
								</div>
								<div class="card-body">
									<div class="panel-body">
										<div id="calendar" class="has-toolbar"> </div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="addEventTitle">Add Event</h5>
									<h5 class="modal-title" id="editEventTitle">Edit Event</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form class="">
										<input type="hidden" id="id" name="id">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Title</label>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Title"
															name="title" id="title">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 mb-4">
												<label>Category</label>
												<select class="form-select" id="categorySelect">
													<option id="work" value="fc-event-success">Work</option>
													<option id="personal" value="fc-event-warning">Personal</option>
													<option id="important" value="fc-event-primary">Important</option>
													<option id="travel" value="fc-event-danger">Travel</option>
													<option id="friends" value="fc-event-info">Friends</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label>Start Date</label>
													<input type="text" class="form-control datetimepicker"
														placeholder="Start Date" name="starts_at" id="starts-at">
												</div>
											</div>
											<div class="col-6">

												<div class="form-group">
													<label>End Date</label>
													<input type="text" class="form-control datetimepicker"
														placeholder="End Date" name="ends_at" id="ends-at">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Event Details</label>
													<textarea id="eventDetails" name="eventDetails"
														placeholder="Enter Details" class="form-control"></textarea>
												</div>
											</div>
										</div>
										<div class="modal-footer bg-whitesmoke pr-0">
											<button type="button" class="btn btn-round btn-primary" id="add-event">Add
												Event</button>
											<button type="button" class="btn btn-round btn-primary" id="edit-event">Edit
												Event</button>
											<button type="button" id="close" class="btn btn-danger"
												data-bs-dismiss="modal">Close</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>