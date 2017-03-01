@extends('layouts.dashboard')
@section('title', $title)
@section('link')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

@if (session('store_succes'))
        <div class="alert alert-success" style="font-size: 0.9em;">
            {!! session('store_succes') !!}
        </div>
    @endif
    @if (session('storing_process_error'))
        <div class="alert alert-danger" style="font-size: 0.9em;">
            {!! session('storing_process_error') !!}
        </div>
    @endif
	
{!! BootForm::openHorizontal($columnSizes)->multipart()->post()->action( route('postStoreProduct')) !!}
<div class="row" style="background-color: #fff;padding: 30px;">
	<div class="col-md-9" style="border-right: 1px solid #EEE;padding-right: 30px;">	
		{!! BootForm::select('Category *', 'category_id')->options($categories)->select('1') !!}
		{!! BootForm::text('Mark *', 'mark') !!}
		{!! BootForm::text('Model *', 'model') !!}
		{!! BootForm::text('Prod. Code *', 'product_code') !!}
		{!! BootForm::text('Start Serial *', 'start_serial') !!}
		{!! BootForm::text('End Serial *', 'end_serial') !!}
		<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}"><label class="col-sm-4 col-lg-2 control-label" for="quantity">Quantity *</label><div class="col-sm-8 col-lg-10"><input type="number" min="1" name="quantity" id="quantity" <?= (Input::old('quantity')) ? "value='".Input::old('quantity')."'" : ''; ?> class="form-control">{!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}</div></div>

		<div class="form-group  {{ $errors->has('price') ? 'has-error' : '' }}"><label class="col-sm-4 col-lg-2 control-label" for="price">Price *</label><div class="col-sm-8 col-lg-10"><input type="number" step="0.01" min="0" name="price" id="price" <?= (Input::old('price')) ? "value='".Input::old('price')."'" : ''; ?> class="form-control">{!! $errors->first('price', '<p class="help-block">:message</p>') !!}</div></div>

		{!! BootForm::select('Currecy *', 'currency_id')->options($currencies)->select('1') !!}		
	</div>
	<div class="col-md-3" style="padding-left: 20px;border-left: 1px solid #EEE;">
		 	<input type="submit" class="btn btn-primary" value="Submit" />	
	</div>
</div>
{!! BootForm::close() !!}

@endsection
@section('script')
	<script type="text/javascript">
		
		$('input[name=mark]').focus();

		$.ajaxSetup({
			headers : {
				'X-CSRF-TOKEN': {!! json_encode(csrf_token()) !!}
			},
		});

		$( "#mark" ).autocomplete({
			source: function (request, response) {
				getAvailableTags('Product', 'mark', request, response);
			},
		});
		$("#model").autocomplete({
			source: function (request, response) {
				getAvailableTags('Product', 'model', request, response);
			},
		});
		$("#product_code").autocomplete({
			source: function (request, response) {
				getAvailableTags('Product', 'product_code', request, response);
			},
		});
		$('#category_id').selectmenu();

		$(document.body).on('blur', 'input', function () {

			$('input').blur(function () {
				var child = $(this).parent();
				var parent = child.parent('.form-group');
				var name = $(this).attr('name');
				var value = $(this).val();
				var datas = {}
				datas['_token'] = getCsrfToken();
				datas[name] = value;

				if (name == 'end_serial') {

					datas['start_serial'] = getStartSerialValue();
					datas['end_serial'] = getEndSerialValue();
					datas['check_serials'] = 1;

					ajaxFormLiveValidation(datas, parent, child);
				} else if (name == 'quantity') {

					datas['start_serial'] = getStartSerialValue();
					datas['end_serial'] = getEndSerialValue();
					datas['quantity'] = getInputVal('quantity');
					datas['check_quantity'] = 1;

					ajaxFormLiveValidation(datas, parent, child);
				} else {

					ajaxFormLiveValidation(datas, parent, child);
				};

			});
		});

		function getAvailableTags(table, column, request, response) {
			$.ajax({

				url: '{{ route("autocomplete") }}',
				type: 'POST',
				data: {
					_token: getCsrfToken(),
					name_startWith: request.term,
					table: table,
					column: column,
				},
				dataType: 'json',
				success: function (data) {
					response($.map( data, function (item) {
						return {
							label: item,
							value: item,
						}
					}));
				} 
			});
		};

		function ajaxFormLiveValidation(datas, parent, child) {
			$.ajax({
				url: '{{ route("ajax_live_validator") }}',
				type: 'POST',
				data: datas,
				dataType: 'json',
				success: function(el, statut) {
							
					$.each(el, function (key, value) {
								
						if (key == 'valide') {

							removeValidationErrors(parent);

						} else if (key == 'qt_calculated') {

							setInputVal('quantity', value);

							removeValidationErrors(parent);
						} else {

							addValidationErrors(parent, child, value);
									
						};
					});
				},
				error: function(result, statut, error) {
					errors = error.responseJSON;

					console.log(errors);
				},
			});
		};

		function addValidationErrors (parent, child, value) {
			if (parent.attr('class') == 'form-group has-error') {
				parent.find('.help-block').remove();
				$('<p class="help-block">'+value+'</p>').appendTo(child);
			} else {
				parent.attr('class', 'form-group has-error');
				$('<p class="help-block">'+value+'</p>').appendTo(child);
			};
		};

		function removeValidationErrors(parent) {
			parent.find('.help-block').remove();
			parent.attr('class', 'form-group');
		};

		function setInputVal(input, value) {
			$('input[name='+input+']').val(value);
		};

		function getInputVal(input) {
			var inputVal = $('input[name='+input+']').val();

			return inputVal;
		}

		function getEndSerialValue() {
			
			var en_s = $('input[name=end_serial]').val();
			var end_serial = en_s.substring(1);

			return end_serial;
		};

		function getStartSerialValue() {

			var st_s = $('input[name=start_serial]').val();
			var start_serial = st_s.substring(1);

			return start_serial;
		};

		function getCsrfToken() {
			var csrf = $('meta[name="csrf-token"]').attr('content');

			return csrf;
		};

		function showLoaderAnimation(parent, child, value) {
			//
		}
	</script>
@endsection