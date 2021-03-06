	<?php $__env->startSection('breadcrumb'); ?>
		<ul class="breadcrumb">
		    <li><a href="/home"><?php echo trans('messages.home'); ?></a></li>
		    <li class="active"><?php echo trans('messages.company'); ?></li>
		</ul>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('content'); ?>
		<div class="row">
			
<?php if(Entrust::can('create-company')): ?>
			<div class="col-sm-12 " id="box-detail">
				<div class="box-info">
					<h2><strong><?php echo trans('messages.add_new'); ?></strong> <?php echo trans('messages.company'); ?>

					<div class="additional-btn">
						
					</div></h2>
					<?php echo Form::open(['route' => 'company.store','role' => 'form', 'class'=>'company-form','id' => 'company-form']); ?>

						<?php echo $__env->make('company._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php echo Form::close(); ?>

				</div>
			</div>
			<?php endif; ?>
			
		</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>