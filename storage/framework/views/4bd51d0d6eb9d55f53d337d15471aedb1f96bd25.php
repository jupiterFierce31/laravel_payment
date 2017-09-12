	<div class="col-sm-6">		 
 <div class="form-group">
			    <?php echo Form::label('name',trans('messages.document').' '.trans('messages.name'),[]); ?>

				<?php echo Form::input('text','name',isset($document->name) ? $document->name : '',['class'=>'form-control','placeholder'=>trans('messages.document').' '.trans('messages.name')]); ?>

			  </div>
			  <div class="form-group">
			    <?php echo Form::label('value',trans('messages.document').' '.trans('messages.code'),[]); ?>

				<?php echo Form::input('number','doc_code',isset($document->doc_code) ? round($document->doc_code,2) : '',['class'=>'form-control','placeholder'=>trans('messages.document').' '.trans('messages.code')]); ?>

			  </div>
</div>
<div class="col-sm-6">	
	
			  <div class="form-group">	
<?php echo Form::label('value',trans('messages.dirrection'),[]); ?>		    
<?php echo Form::select('dirrection',$dirrection,(isset($document) ? $document->dirrection: ''),['class'=>'form-control show-tick','title'=>trans('messages.dirrection')]); ?>

</div>
 <div class="form-group">
			    <?php echo Form::label('value',trans('messages.document').' '.trans('messages.version'),[]); ?>

				<?php echo Form::input('number','doc_version',isset($document->doc_version) ? round($document->doc_version,2) : '',['class'=>'form-control','placeholder'=>trans('messages.document').' '.trans('messages.version'),'step' => '.05']); ?>

			  </div>
</div>
			
			  <?php echo Form::submit(isset($buttonText) ? $buttonText : trans('messages.save'),['class' => 'btn btn-primary pull-right']); ?>

			  	
