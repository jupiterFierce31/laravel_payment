@extends('layouts.app')

	@section('breadcrumb')
		<ul class="breadcrumb">
		    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
		    <li class="active">{!! trans('messages.neighbourhood') !!}</li>
		</ul>
	@stop
	
	@section('content')
		<div class="row">
			
@if(Entrust::can('create-company'))
			<div class="col-sm-12 " id="box-detail">
				<div class="box-info">
					<h2><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.neighbourhood') !!}
					<div class="additional-btn">
						
					</div></h2>
					{!! Form::open(['route' => 'neighbourhood.store','role' => 'form', 'class'=>'neighbourhood-form','id' => 'neighbourhood-form']) !!}
						@include('neighbourhood._form')
					{!! Form::close() !!}
				</div>
			</div>
			@endif
			
		</div>

	@stop