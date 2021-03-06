

	<?php $__env->startSection('breadcrumb'); ?>
		<ul class="breadcrumb">
		    <li><a href="/home"><?php echo trans('messages.home'); ?></a></li>
		    <li class="active"><?php echo trans('messages.configuration'); ?></li>
		</ul>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('content'); ?>
           <div class="row">
			<div class="col-sm-12">
				<div class="box-info full">
				       	 <div class="tab-content col-md-12 col-xs-12" style="padding:0px 25px 10px 25px;">

						 
						  <div class="tab-pane animated fadeInRight" id="schedule-job-tab">
						    <div class="user-profile-content-wm">
						    	<h2><strong><?php echo e(trans('messages.scheduled_job')); ?></strong></h2>
						    	<p>Add below cron command in your server:</p>
								<div class="well">
									php /path-to-artisan schedule:run >> /dev/null 2>&1
								</div>
								<div class="table-responsive">
									<table class="table table-stripped table-bordered table-hover">
										<thead>
											<tr>
												<th>Action</th>
												<th>Frequency</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Recurring Invoice Generation</td>
												<td>Once Per day at 12:00 AM</td>
											</tr>
											<tr>
												<td>Birthday/Anniversary wish to Staff/Customer</td>
												<td>Once per day at 09:00 AM</td>
											</tr>
											<tr>
												<td>Daily Backup</td>
												<td>Once per day at 01:00 AM</td>
											</tr>
										</tbody>
									</table>
								</div>
						    </div>
						  </div>
						
						 
						 
					    </div> 						 
                                        </div>
                                    </div> </div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>