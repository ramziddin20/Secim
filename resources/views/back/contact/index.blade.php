@extends('back.master')
@section('home')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card-body">
            <div class="row">
                @foreach($contacts as $contact)
                    <div class="card mx-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$contact->name}}</h5>
                            <h5 class="card-title">{{$contact->email}}</h5>
                            <h5 class="card-title">{{$contact->phone_number}}</h5>
                            <p class="card-text">{{$contact->country}}</p>
                            <p class="card-text">{{$contact->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- End of Main Content -->
@endsection
