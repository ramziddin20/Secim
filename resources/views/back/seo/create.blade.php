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
        <form method="POST" action="{{route('seo.store')}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Тайтел</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Куличавые слова</label>
                <input type="text" name="keywords" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать куличавые слова...">
            </div>
            <div class="form-group">
                <label for="text" class="form-label">Текст</label>
                <textarea class="form-control" name="description" id="text" cols="30" rows="10"
                          placeholder="Писать длинный текст"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{route('seo.index')}}">Cancel</a>
        </form>
    </div>
@endsection
