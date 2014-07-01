<?php 
require_once 'admin_header.php';
require_once 'flot.php';
?>
<!-- Form -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Wizard -->
	<script src="js/plugins/wizard/jquery.form.wizard.min.js"></script>
	<script src="js/plugins/mockjax/jquery.mockjax.js"></script>

	<div class="container-fluid" id="content">
		<?php  require_once ('admin_leftpanel.php')  ?>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Agents</h1>
					</div>
					<div class="pull-right">
						<ul class="stats">
							<li class='satgreen'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">$324,12</span>
									<span>Recovered Claims</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-bar-chart"></i>
									Agent Stats
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<div class="input-medium">
												<select name="category" class='chosen-select' data-nosearch="true">
													<option value="1">All</option>
													<option value="1">Pending</option>
													<option value="2">Confirmed</option>
												</select>
											</div>
										</div>
										<div class="right" style="display:none;">
											8,195 <span><i class="icon-circle-arrow-down"></i></span>
										</div>
									</div>
									<div class="bottom">
										<div class="flot medium" id="flot-audience"></div>
									</div>
									<div class="bottom">
										<ul class="stats-overview">
											<li>
												<span class="name">
													All
												</span>
												<span class="value">
													70
												</span>
											</li>
											<li>
												<span class="name">
													pending
												</span>
												<span class="value">
													20
												</span>
											</li>
											<li>
												<span class="name">
													Confirmed
												</span>
												<span class="value">
													50
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-magic"></i>
									Add New Agent
								</h3>
							</div>
							<div class="box-content nopadding">
								<form action="post.php" method="POST" class="form-horizontal form-wizard ui-formwizard" id="ss" novalidate="novalidate">
									<div class="step ui-formwizard-content" id="firstStep" style="display: block;">
										<ul class="wizard-steps steps-3">
											<li class="active">
												<div class="single-step">
													<span class="title">1</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Step 1
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">2</span>
													<span class="circle">
													</span>
													<span class="description">
														Step 2
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">3</span>
													<span class="circle">
													</span>
													<span class="description">
														Step 3
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="firstname" class="control-label">Email</label>
											<div class="controls">
												<input type="email" name="firstname" id="firstname" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">Password</label>
											<div class="controls">
												<input type="text" name="password" id="firstname" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="firstname" class="control-label">First name</label>
											<div class="controls">
												<input type="text" name="firstname" id="firstname" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Last name</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="additionalfield" class="control-label">Address</label>
											<div class="controls">
												<input type="text" name="additionalfield" id="additionalfield" class="input-xlarge ui-wizard-content">
											</div>
										</div>
									</div>
									<div class="step ui-formwizard-content" id="secondStep" style="display: none;">
										<ul class="wizard-steps steps-3">
											<li>
												<div class="single-step">
													<span class="title">1</span>
													<span class="circle">
													</span>
													<span class="description">
														Step 1
													</span>
												</div>
											</li>
											<li class="active">
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Step 2
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Step 3
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="anotherelem" class="control-label">City</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">State</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Zip Code</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Country</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Phone Number</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content">
											</div>
										</div>
									</div>
									<div class="step ui-formwizard-content" id="thirdStep" style="display: none;">
										<ul class="wizard-steps steps-3">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
													</span>
													<span class="description">
														Step 1
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
													</span>
													<span class="description">
														Step 2
													</span>
												</div>
											</li>
											<li class="active">
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Step 3
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Fax Number</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge ui-wizard-content">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label"></label>
											<div class="controls">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name='imagefile' /></span>
														<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="btn ui-wizard-content ui-formwizard-button" value="Back" id="back" disabled="disabled">
										<input type="submit" class="btn btn-primary ui-wizard-content ui-formwizard-button" value="Next" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Agents
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-nomargin dataTable table-bordered table-condensed">
									<thead>
										<tr>
											<th>No</th>
											<th>Actions</th>
											<th>Name</th>
											<th>Level</th>
											<th>Referral</th>
										</tr>
									</thead>
									<tbody>
                                    <?php $i=1; while($i <= 50){ ?>
										<tr>
											<td><?php echo $i; ?></td>
											<td>
												<div class="btn-group">
												<a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li>
														<a href="#">View Clients</a>
													</li>
													<li>
														<a href="#">View Notes</a>
													</li>
													<li>
														<a href="#">View Agreement</a>
													</li>
													<li>
														<a href="#">Edit Agent Record</a>
													</li>
													<li>
														<a href="#">Delete Agent</a>
													</li>
													
												</ul>
											</div>
											
											</td>
											<td>
												Agent <?php echo $i; ?>
											</td>
											<td class='hidden-350'>Divisional President(DP)</td>
											<td class='hidden-350'>Peter Guzzi</td>
											
										</tr>
                                        <?  $i++; } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				
				
			
			</div>
		</div>
	</div>
</body>
</html>