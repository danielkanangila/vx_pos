@extends("app.main")
@section("title", $title)
@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section("content")
    @if (session('add_customer_success'))
        <div class="alert alert-success" style="font-size: 0.9em;">
            {!! session('add_customer_success') !!}
        </div>
    @endif
    @if (session('add_customer_process_error'))
        <div class="alert alert-danger" style="font-size: 0.9em;">
            {!! session('add_customer_process_error') !!}
        </div>
    @endif

    {!! BootForm::openHorizontal($columnSizes)->post()->action( route('u_add_account')) !!}
    <div class="row" style="background-color: #fff;padding: 30px;">
        <div class="col-md-9" style="border-right: 1px solid #EEE;padding-right: 30px;">

            {!! BootForm::text('First name', 'first_name') !!}
            {!! BootForm::text('Lats name', 'last_name') !!}
            {!! BootForm::text('Address', 'address') !!}
            {!! BootForm::text('Phone number', 'phone_number') !!}
        </div>
        <div class="col-md-3" style="padding-left: 20px;border-left: 1px solid #EEE;">
            <button style="margin-right: 5px" id="invoice" type="submit" class="btn btn-primary">ADD</button>
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