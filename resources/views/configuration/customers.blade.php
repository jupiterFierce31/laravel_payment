@extends('layouts.app')

	@section('breadcrumb')
		<ul class="breadcrumb">
		    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
		    <li class="active">{!! trans('messages.configuration') !!}</li>
		</ul>
	@stop
	
	@section('content')
           <div class="row">
			<div class="col-sm-12">
				<div class="box-info full">
				       	 <div class="tab-content col-md-12 col-xs-12" style="padding:0px 25px 10px 25px;">

						  <div class="tab-pane animated fadeInRight" id="customer-tab">
						    <div class="user-profile-content-wm">
						    	<h2><strong>{!! trans('messages.customer').' '.trans('messages.configuration') !!}</strong></h2>
						    	<div class="row">
									<div class="col-sm-4">
										<div class="box-info">
											<h2><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.customer').' '.trans('messages.group') !!} </h2>
											{!! Form::open(['route' => 'customer-group.store','class'=>'customer-group-form','id' => 'customer-group-form','data-table-refresh' => 'customer-group-table']) !!}
												@include('customer_group._form')
											{!! Form::close() !!}
										</div>
									</div>
									<div class="col-sm-8">
										<div class="box-info full">
											<h2><strong>{!! trans('messages.list_all').'</strong> '.trans('messages.customer').' '.trans('messages.group') !!} </h2>
											<div class="table-responsive">
												<table data-sortable class="table table-hover table-striped ajax-table show-table" id="customer-group-table" data-source="/customer-group/lists">
													<thead>
														<tr>
															<th>{!! trans('messages.name') !!}</th>
															<th>{!! trans('messages.description') !!}</th>
															<th data-sortable="false">{!! trans('messages.option') !!}</th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
						    </div>
						  </div>
					    </div> 						 
                                        </div>
                                    </div> </div>

	@stop
