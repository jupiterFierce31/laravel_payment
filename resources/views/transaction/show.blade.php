
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h4 class="modal-title">{!! trans('messages.transaction').' '.trans('messages.detail') !!}
		@if($transaction->source)
			<span class="label label-success">{{trans('messages.paid').' by '.trans('messages.customer')}}</span>
		@endif
		</h4>
	</div>
	<div class="modal-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped show-table">
				<tbody>
					@if($transaction->head != 'account-transfer')
					<tr>
						<th>{{trans('messages.customer')}}</th>
						<td>{{$transaction->Customer->full_name}}</td>
					</tr>
					@endif
					@if($invoice)
					<tr>
						<th>{{trans('messages.invoice').' '.trans('messages.number')}}</th>
						<td>{{$invoice->invoice_prefix.getInvoiceNumber($invoice)}}</td>
					</tr>
					@endif
					<tr>
						<th>{{trans('messages.token')}}</th>
						<td>{{$transaction->token}}</td>
					</tr>
					@if(!Entrust::hasRole(config('constant.default_customer_role')) && $transaction->customer_id != $transaction->user_id)
					<tr>
						<th>{{trans('messages.staff')}}</th>
						<td>{{$transaction->User->full_name}}</td>
					</tr>
					@endif
					@if(!Entrust::hasRole(config('constant.default_customer_role')))
						@if($transaction->head == 'income')
						<tr>
							<th>{{trans('messages.category')}}</th>
							<td>{{($transaction->IncomeCategory) ? $transaction->IncomeCategory->name : '-'}}</td>
						</tr>
						@elseif($transaction->head == 'expense')
						<tr>
							<th>{{trans('messages.category')}}</th>
							<td>{{($transaction->ExpenseCategory) ? $transaction->ExpenseCategory->name : '-'}}</td>
						</tr>
						@endif
						@if($transaction->head == 'income' || $transaction->head == 'expense')
						<tr>
							<th>{{trans('messages.account')}}</th>
							<td>{{($transaction->Account) ? $transaction->Account->name : '-'}}</td>
						</tr>
						@else
							<tr>
								<th>{{trans('messages.from').' '.trans('messages.account')}}</th>
								<td>{{($transaction->FromAccount) ? $transaction->FromAccount->name : '-'}}</td>
							</tr>
							<tr>
								<th>{{trans('messages.to').' '.trans('messages.account')}}</th>
								<td>{{($transaction->Account) ? $transaction->Account->name : '-'}}</td>
							</tr>
						@endif
					@endif
					<tr>
						<th>{{trans('messages.amount')}}</th>
						<td>{{currency($transaction->amount,1,$transaction->Currency->id)}}</td>
					</tr>
					<tr>
						<th>{{trans('messages.date')}}</th>
						<td>{{showDate($transaction->date)}}</td>
					</tr>
					<tr>
						<th>{{trans('messages.payment').' '.trans('messages.method')}}</th>
						<td>{{($transaction->PaymentMethod) ? $transaction->PaymentMethod->name : (($transaction->source) ? toWord($transaction->source) : '')}}</td>
					</tr>
					@if($transaction->source && !Entrust::hasRole(config('constant.default_customer_role')))
						<tr>
							<th>{{trans('messages.processing_fee')}}</th>
							<td>{{currency($transaction->processing_fee,1,$transaction->Currency->id)}}</td>
						</tr>
						<tr>
							<th>{{trans('messages.withdraw').' '.trans('messages.date')}}</th>
							<td>{{showDate($transaction->date)}}</td>
						</tr>
						<tr>
							<th>{{trans('messages.withdraw').' '.trans('messages.remarks')}}</th>
							<td>{{$transaction->withdraw_remarks}}</td>
						</tr>
					@endif
					@if($transaction->coupon)
						<tr>
							<th>{{trans('messages.coupon')}}</th>
							<td>{{$transaction->coupon}}</td>
						</tr>
						<tr>
							<th>{{trans('messages.discount')}}</th>
							<td>{{$transaction->coupon_discount}}%</td>
						</tr>
					@endif
					@if(!Entrust::hasRole(config('constant.default_customer_role')))
					<tr>
						<th>{{trans('messages.created_at')}}</th>
						<td>{{showDateTime($transaction->created_at)}}</td>
					</tr>
						@if($transaction->updated_at)
						<tr>
							<th>{{trans('messages.updated_at')}}</th>
							<td>{{showDateTime($transaction->updated_at)}}</td>
						</tr>
						@endif
					@endif
				</tbody>
			</table>
		</div>
		@if($uploads->count())
		<div class="row">
			<div class="col-md-12">
				<div class="box-info">
					<h2><strong>{{trans('messages.attachment')}}</strong></h2>
		            @foreach($uploads as $upload)
		                <p><i class="fa fa-paperclip"></i> <a href="/transaction/{{$upload->attachments}}/download">{{$upload->user_filename}}</a></p>
		            @endforeach
        		</div>
			</div>
		</div>
		@endif
		<div class="clear"></div>
	</div>