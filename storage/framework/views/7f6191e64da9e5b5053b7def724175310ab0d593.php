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

						  <div class="tab-pane animated fadeInRight" id="theme-tab">
						    <div class="user-profile-content-wm">
						    	<h2><strong><?php echo e(trans('messages.theme')); ?></strong> <?php echo e(trans('messages.configuration')); ?></h2>
						    	<?php echo Form::open(['route' => 'configuration.store','role' => 'form', 'class'=>'config-theme-form','id' => 'config-theme-form']); ?>

                                    <?php echo $__env->make('configuration._theme_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo Form::close(); ?>

						    </div>
						</div>
					    </div> 						 
                                        </div>
                                    </div> </div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>