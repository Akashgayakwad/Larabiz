@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h3">Dashboard</span>
                    <a href="/listings/create" class="btn btn-success btn-xs float-right">Add Listing</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if(count($listings))
                      <table class="table table-striped">
                        <tr>
                          <th>Company Name</th>
                          <!-- <th>User Id</th>
                          <th>Address</th>
                          <th>Website</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Bio</th> -->
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        @foreach($listings as $listing)
                          <tr>
                            <td>{{$listing->name}}</td>
                            <!-- <td>{{$listing->user_id}}</td>
                            <td>{{$listing->address}}</td>
                            <td><a href= "http://www.{{$listing->website}}">{{$listing->website}}<a></td>
                            <td>{{$listing->email}}</td>
                            <td>{{$listing->phone}}</td>
                            <td>{{$listing->bio}}</td> -->
                            <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-info">Edit</a></td>
                            <td>
                              {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST']) !!}
                                 {{ Form::hidden('_method', 'DELETE')}}
                                 {{ Form::bsSubmit('Delete',['class' => 'btn btn-danger'])}}
                              {!! Form::close() !!}
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
