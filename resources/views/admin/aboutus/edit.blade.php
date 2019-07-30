@extends('backend.header')

@section('content')
    <div class="container">
            <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Aboutus Edit Page</h1>
                    </div>
                    <!--End Page Header -->
                </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit aboutus #{{ $aboutus->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/aboutus') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/aboutus/' . $aboutus->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.aboutus.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
