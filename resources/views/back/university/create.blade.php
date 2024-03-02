@extends('back.master')
@section('home')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Неправильно</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Page Heading -->
        <form method="POST" action="{{route('university.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Текст для университет</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Текст">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Сылка</label>
                <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Ставит сылку">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Выбирите картинку</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
