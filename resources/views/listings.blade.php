@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h3">Latest Business Listings</span>
                    <a href="/listings/create" class="btn btn-success btn-xs float-right">Add Listing</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($listings))
                      <ul class="list-group">
                        @foreach($listings as $listing)
                          <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}: {{$listing->bio}}</a></li>
                        @endforeach
                      </ul>
                      @else
                      <p>No Listings Found</p>
                      @endif
                </div>
            </div>
        </div>
    </div>
@endsection
