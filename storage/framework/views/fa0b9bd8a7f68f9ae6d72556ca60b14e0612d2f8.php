	<?php $__env->startSection('breadcrumb'); ?>
		<ul class="breadcrumb">
		    <li><a href="/home"><?php echo trans('messages.home'); ?></a></li>
		    <li class="active"><?php echo trans('messages.custom').' '.trans('messages.field'); ?></li>
		</ul>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('content'); ?>
		<div class="row">
			<div class="col-sm-4">
				<div class="box-info">
					<h2><strong><?php echo trans('messages.add_new'); ?></strong> <?php echo trans('messages.custom').' '.trans('messages.field'); ?>

					</h2>
					<?php echo Form::open(['route' => 'custom-field.store','role' => 'form', 'class'=>'custom-field-form','id' => 'custom-field-form','data-disable-enter-submission' => '1']); ?>

					  <div class="form-group">
					    <?php echo Form::label('form',trans('messages.form'),[]); ?>

						<?php echo Form::select('form', config('custom_field'),'',['class'=>'form-control input-xlarge show-tick','title'=>trans('messages.select_one')]); ?>

					  </div>
					  <div class="form-group">
					    <?php echo Form::label('title',trans('messages.title'),[]); ?>

						<?php echo Form::input('text','title','',['class'=>'form-control','placeholder'=>trans('messages.title')]); ?>

					  </div>
					  <div class="form-group">
		                <div class="checkbox">
		                <input name="is_required" type="checkbox" class="switch-input" data-size="mini" data-on-text="Required" data-off-text="Optional" value="1" checked>
		                </div>
		              </div>
					  <div class="form-group">
					    <?php echo Form::label('type',trans('messages.type'),[]); ?>

						<?php echo Form::select('type', [
							'text' => 'Text Box',
							'number' => 'Number',
							'email' => 'Email',
							'url' => 'URL',
							'date' => 'Date',
							'select' => 'Select Box',
							'radio' => 'Radio Button',
							'checkbox' => 'Check Box',
							'textarea' => 'Textarea'
							],'',['id' => 'type', 'class'=>'form-control input-xlarge show-tick','title'=>trans('messages.select_one')]); ?>

					  </div>
					  <div class="custom-field-option">
						<div class="form-group">
						    <?php echo Form::label('options',trans('messages.option'),[]); ?>

							<?php echo Form::input('text','options','',['class'=>'form-control','placeholder'=>trans('messages.option'),'data-role' => 'tagsinput']); ?>

						</div>
					  </div>
					  	<?php echo Form::submit(isset($buttonText) ? $buttonText : trans('messages.save'),['class' => 'btn btn-primary pull-right']); ?>

	
					<?php echo Form::close(); ?>

				</div>
			</div>
			<div class="col-sm-8">
				<div class="box-info full">
					<h2><strong><?php echo trans('messages.list_all'); ?></strong> <?php echo trans('messages.custom').' '.trans('messages.field'); ?>

					</h2>
					<?php echo $__env->make('global.datatable',['table' => $table_data['custom-field-table']], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			</div>
		</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>