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
        <form method="POST" action="{{route('youtube.store')}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Facebook</label>
                <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Адрес...">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{route('youtube.index')}}">Cancel</a>
        </form>
    </div>
@endsection
