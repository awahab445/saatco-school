@extends('layouts.home')



@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Schools</h4>
                        <p class="category">All Shools in Saatco School Dashboard</p>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 margin-tb">

                            <div class="pull-right">

                                <a class="btn btn-success" href="{{ route('schools.create') }}"> Create New School</a>

                            </div>

                        </div>

                    </div>

                    @if ($message = Session::get('success'))

                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>

                    @endif

                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <th>SNo</th>
                            <th>Name</th>
                            <th>Post Code</th>
                            <th>City</th>
                            <th>Country</th>
                            <th width="280px">Action</th>
                            </thead>
                            <tbody>
                            @foreach ($schools as $school)

                                <tr>

                                    <td>{{ ++$i }}</td>

                                    <td>{{ $school->name}}</td>

                                    <td>{{ $school->zip_code}}</td>

                                    <td>{{ $school->city}}</td>

                                    <td>{{ $school->country}}</td>

                                    <td>

                                        <a class="btn btn-info" href="{{ route('schools.show',$school->school_id) }}">Show</a>

                                        <a class="btn btn-primary"
                                           href="{{ route('schools.edit',$school->school_id) }}">Edit</a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['schools.destroy', $school->school_id],'style'=>'display:inline']) !!}

                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                        {!! Form::close() !!}

                                    </td>

                                </tr>

                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>


    {!! $schools->links() !!}

@endsection