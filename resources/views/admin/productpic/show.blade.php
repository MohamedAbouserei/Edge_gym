@extends('backend.header')

@section('content')
    <div class="container">
            <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Image Show Page</h1>
                    </div>
                    <!--End Page Header -->
                </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">productpic {{ $productpic->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/productpic') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/productpic/' . $productpic->id . '/edit') }}" title="Edit productpic"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/productpic' . '/' . $productpic->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete productpic" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $productpic->id }}</td>
                                    </tr>
                                    <tr><th> Product Name </th><td>{{ \App\Product::where(['id' => $productpic->product_id])->pluck('name')->first() }} </td></tr><tr><th> Pic </th><td> {{ $productpic->pic }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
