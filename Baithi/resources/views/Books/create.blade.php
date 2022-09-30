@extends('books.layout')

@section('content')

<div class="row">
     <div class="col-lg-12">
        <h2 class = "text-center">Add book</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom:10px;">
        <a class="btn btn-primary" href="{{ route('books.index')}}">Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
     <strong>Oops!</strong>There were some problems with your input.<br><br>
     <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
</ul>
</div>

@endif
<form action="{{route('books.store') }}" method="POST">
    @csrf 

    <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Book ID:</strong>
                 <input type="number" name="bookid" class="form-control" placeholder="ID">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>authorid:</strong>
                 <input type="number" name="authorid" class="form-control" placeholder="Authorid">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Title</strong>
                 <input type="text" name="title" class="form-control" placeholder="title">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>ISBN:</strong>
                 <input type="string" name="isbn" class="form-control" placeholder="ISBN">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Pub_year:</strong>
                 <input type="number" name="pub_year" class="form-control" placeholder="pub_year">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Available:</strong>
                 <input type="number" name="available" class="form-control" placeholder="available">
    </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection

