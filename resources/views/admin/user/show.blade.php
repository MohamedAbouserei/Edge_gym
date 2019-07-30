@extends('backend.header')

@section('content')
    <div class="container">
            <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">User Show Page</h1>
                    </div>
                    <!--End Page Header -->
                </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">user {{ $user->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/user/' . $user->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/user' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $user->name }} </td></tr><tr><th> Email </th><td> {{ $user->email }} </td></tr><tr><th> Landline </th><td> {{ $user->landline }} </td></tr><tr><th> PhoneNumber </th><td> {{ $user->phonenumber }} </td></tr><tr><th> Salary </th><td> {{ $user->salary }} </td></tr><tr><th> DOB </th><td> {{ $user->DOB }} </td></tr><tr><th> SocialNumber </th><td> {{ $user->socialnumber }} </td></tr><tr><th> Profile Picture </th><td> {{ $user->pic }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
