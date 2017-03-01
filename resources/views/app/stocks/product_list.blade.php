@extends("app.main")
@section("title", $title)
@section("content")
    <div style="background-color: #fff;padding: 30px;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead style="font-size: 0.9em;font-weight: bold;">
                <tr>
                    <td>#</td>
                    <td>Product</td>
                    <td>Product Code</td>
                    <td>Start serial</td>
                    <td>End serial</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Value</td>
                </tr>
                </thead>
                <tbody class="cl">

                </tbody>
            </table>
        </div>
    </div>
@endsection