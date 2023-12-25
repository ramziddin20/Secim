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
                <h1 class="h3 mb-0 text-gray-800">Услуги</h1>
                <h4 class="h3 mb-0 text-gray-800">
                    <a class="btn btn-success" href="{{route('service.create')}}">Создать</a>
                </h4>
            </div>
            <div class="row">
                @foreach($service as $ser)
                    <div class="card mx-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$ser->title}}</h5>
                            <p class="card-text">{{$ser->description}}</p>

                            <form action="{{route('service.destroy',$ser->id)}}" method="post">
                                <a href="{{route('service.edit',$ser->id)}}"
                                   class="btn btn-primary">Edit</a>
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete"/>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- End of Main Content -->
@endsection
