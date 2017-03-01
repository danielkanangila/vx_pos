@extends("app.main")
@section("title", $title)
@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section("content")
    @if (session('search_account_succes'))
        <div class="alert alert-success" style="font-size: 0.9em;">
            {!! session('search_account_succes') !!}
        </div>
    @endif
    @if (session('search_account_process_error'))
        <div class="alert alert-danger" style="font-size: 0.9em;">
            {!! session('search_account_process_error') !!}
        </div>
    @endif

    {!! BootForm::open($columnSizes)->post()->action( route('u_search')) !!}
    <div class="row" style="background-color: #fff;padding: 30px;">
        <div class="col-md-9" style="border-right: 1px solid #EEE;padding-right: 30px;">

            {!! BootForm::text('search', 'search')->placeholder("Search")->hidelabel() !!}

        </div>
        <div class="col-md-3" style="padding-left: 20px;border-left: 1px solid #EEE;">
            <button style="margin-right: 5px" id="invvoice" type="submit" class="btn btn-primary">SEARCH</button>
        </div>

    </div>
    {!! BootForm::close() !!}
    <div style="background-color: #fff;padding: 30px;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead style="font-size: 0.9em;font-weight: bold;">
                <tr>
                    <td>Date</td>
                    <td>Customer</td>
                    <td>Name</td>
                    <td>Transaction label</td>
                    <td>Reference</td>
                    <td>Debit</td>
                    <td>Credit</td>
                </tr>
                </thead>
                <tbody class="cl">

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("form").submit(function(e) {
            e.preventDefault();
        })
    </script>
@endsection