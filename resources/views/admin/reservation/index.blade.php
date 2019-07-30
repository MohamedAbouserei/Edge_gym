@extends('backend.header')
<script>
setTimeout(function() {
    $('#selector').fadeOut('slow');
}, 5000);
</script>
@section('content')

    <div class="container">

            <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Reservation Page</h1>
                    </div>
                    <!--End Page Header -->
                </div>
                <div class="row">
                        <div class="container">
                                @if(session('flash_message'))
                                <div class="alert alert-success" id="selector">
                                {{session('flash_message')}}
                                </div>
                                @endif
                            </div>
                            <div class="container">
                                @if(session('errors'))
                                <div class="alert alert-danger" id="selector">
                                {{session('errors')}}
                                </div>
                                @endif
                            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Reservation</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/reservation/create') }}" class="btn btn-success btn-sm" title="Add New reservation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/reservation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">

                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Program Name</th><th>User Name</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reservation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \App\Program::where(['id' => $item->program_id])->pluck('name')->first() }}</td><td>{{ $item->user_id }}</td>
                                        <td>
                                            <a href="{{ url('/admin/reservation/' . $item->id) }}" title="View reservation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/reservation/' . $item->id . '/edit') }}" title="Edit reservation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/reservation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete reservation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $reservation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
