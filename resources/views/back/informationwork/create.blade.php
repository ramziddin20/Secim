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
        <form method="POST" action="{{route('informationWork.store')}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Адрес</label>
                    <input type="text" name="street" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Адрес...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Время работы</label>
                <input type="text" name="time_work" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Время работы...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Номер телефона</label>
                <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать Номер...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Электронная почта</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Писать почта...">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="{{route('informationWork.index')}}">Cancel</a>
        </form>
    </div>
@endsection
