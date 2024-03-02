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
        <form method="POST" action="{{route('university.update',$universities->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Текст для слайдера</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Текст" value="{{$universities->title}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Сылка</label>
                <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Изменит сылку" value="{{$universities->link}}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Выбирите картинку</label>
                <input class="form-control" name="image" type="file" id="formFile">
                <img src="{{asset('storage/'.$universities->image)}}" class="card-img" alt="..."
                     style="width: 180px; height: 130px; ">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{route('slider.index')}}">Cancel</a>
        </form>
    </div>
@endsection
