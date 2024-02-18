@extends('back.master')
@section('home')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <form method="POST" action="{{route('service.update',$service->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Текст</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Текст" value="{{$service->title}}">
            </div>
            <div class="form-group">
                <label for="text" class="form-label">Текст длинный</label>
                <textarea class="form-control" name="description" id="text" cols="30" rows="10" placeholder="Писать длинный текст">
                    {{$service->description}}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{route('service.index')}}">Cancel</a>
        </form>
    </div>
@endsection
