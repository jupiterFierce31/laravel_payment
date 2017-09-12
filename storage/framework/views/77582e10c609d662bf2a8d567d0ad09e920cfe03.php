
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h4 class="modal-title"><?php echo trans('messages.edit').' '.trans('messages.localization'); ?></h4>
	</div>
	<div class="modal-body">
		<?php echo Form::model('',['method' => 'PATCH','route' => ['localization.update',$locale] ,'class' => 'localization-edit-form','id' => 'localization-edit-form','data-form-table' => 'localization_table']); ?>

			<?php echo $__env->make('localization._form', ['buttonText' => trans('messages.update')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::close(); ?>

		<div class="clear"></div>
	</div>