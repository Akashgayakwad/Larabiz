@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Dashboard
                  <span class="float-right">
                    <a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a>
                  </span>
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
                          <th>User Id</th>
                          <th>Address</th>
                          <th>Website</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Bio</th>
                          <th></th>
                        </tr>
                        @foreach($listings as $listing)
                          <tr>
                            <td>{{$listing->name}}</td>
                            <td>{{$listing->user_id}}</td>
                            <td>{{$listing->address}}</td>
                            <td><a href= "http://www.{{$listing->website}}">{{$listing->website}}<a></td>
                            <td>{{$listing->email}}</td>
                            <td>{{$listing->phone}}</td>
                            <td>{{$listing->bio}}</td>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
