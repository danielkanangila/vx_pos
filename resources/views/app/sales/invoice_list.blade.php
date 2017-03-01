@extends("app.main")
@section("title", $title)
@section("content")
    <div style="background-color: #fff;padding: 30px;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead style="font-size: 0.9em;font-weight: bold;">
                <tr>
                    <td>Invoice number</td>
                    <td>Date</td>
                    <td>Customer</td>
                    <td>Product</td>
                    <td>Quantity invoiced</td>
                    <td>Sales site</td>
                    <td>Net price excl Tax</td>
                    <td>Net price + tax</td>
                    <td>Amt val - tax</td>
                    <td>Amt val + tax</td>
                </tr>
                </thead>
                <tbody class="cl">

                </tbody>
            </table>
        </div>
    </div>
@endsection