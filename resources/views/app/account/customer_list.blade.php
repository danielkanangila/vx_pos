@extends("app.main")
@section("title", $title)
@section("content")
    <div style="background-color: #fff;padding: 30px;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead style="font-size: 0.9em;font-weight: bold;">
                <tr>
                    <td>#</td>
                    <td>Customer</td>
                    <td>Title</td>
                    <td>Address</td>
                    <td>Phone number</td>
                    <td>Created at</td>
                    <td>Updated at</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody class="cl">

                </tbody>
            </table>
        </div>
    </div>
@endsection