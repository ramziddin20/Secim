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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Университет</h1>
                <h4 class="h3 mb-0 text-gray-800">
                    <a class="btn btn-success" href="{{route('university.create')}}">Создать</a>
                </h4>
            </div>
            <div class="row">
                @foreach($universities as $university)
                    <div class="col-xl-6 col-md-9 mb-4">
                        <div class="card mb-3" style="max-width: 640px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/'.$university->image)}}" class="card-img" alt="..."
                                         style="width: 180px; height: 130px; ">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$university->title}}</h5>
                                        <h5 class="card-title">{{$university->link}}</h5>
                                        <form action="{{route('university.destroy',$university->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('university.edit',$university->id)}}"
                                               class="btn btn-primary">Edit</a>
                                            <input class="btn btn-danger" type="submit" value="Delete"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- End of Main Content -->
@endsection
