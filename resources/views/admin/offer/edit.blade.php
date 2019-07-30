@extends('backend.header')

@section('content')
    <div class="container">
            <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Offers Edit Page</h1>
                    </div>
                    <!--End Page Header -->
                </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit offer #{{ $offer->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/offer') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/offer/' . $offer->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.offer.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
