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
        <form method="POST" action="{{route('about.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Текст </label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Текст">
            </div>
            <div class="form-group">
                <label for="text" class="form-label">Текст длинный</label>
                <textarea class="form-control" name="description" id="text" cols="30" rows="10" placeholder="Писать длинный текст"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
