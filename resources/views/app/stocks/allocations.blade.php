@extends("app.main")
@section("title", $title)
@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section("content")
    @if (session('invoice_succes'))
        <div class="alert alert-success" style="font-size: 0.9em;">
            {!! session('invoice_succes') !!}
        </div>
    @endif
    @if (session('invoice_process_error'))
        <div class="alert alert-danger" style="font-size: 0.9em;">
            {!! session('invoice_process_error') !!}
        </div>
    @endif

    {!! BootForm::openHorizontal($columnSizes)->post()->action( route('u_allocation')) !!}
    <div class="row" style="background-color: #fff;padding: 30px;">
        <div class="col-md-9" style="border-right: 1px solid #EEE;padding-right: 30px;">

            {!! BootForm::text('Product', 'product') !!}
            {!! BootForm::text('Product code', 'product_code') !!}
            {!! BootForm::text('Start serial', 'start_serial') !!}
            {!! BootForm::text('End serial', 'end_serial') !!}
            {!! BootForm::text('Quantity', 'quantity') !!}
            {!! BootForm::text('Price', 'price') !!}
            {!! BootForm::text('Value', 'value') !!}

        </div>
        <div class="col-md-3" style="padding-left: 20px;border-left: 1px solid #EEE;">
            <button style="margin-right: 5px" id="invvoice" type="submit" class="btn btn-primary">ALLOCATED</button>
            <button id="btnReset" type="reset"  class="btn btn-primary">RESET</button>
        </div>
    </div>
    {!! BootForm::close() !!}
@endsection
@section('script')
    <script type="text/javascript">
        $("form").submit(function(e) {
            e.preventDefault();
        })
    </script>
@endsection