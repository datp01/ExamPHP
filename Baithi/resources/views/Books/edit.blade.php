@extends('books.layout')

@section('content')
    <div class="row">
         <div class="col-lg-12">
            <h2 class="text-center">Edit Book</h2>
</div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom:10px;">
    <a class="btn btn-primary" href="{{ route('books.index')}}">Back</a>
</div>
</div>

     @if($errors->any())
     <div class="alert alert-danger">
        <strong>Whoops!</strong>There were some problems with your input.<br><br>
        <ul>
             @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
               @endforeach
</ul>
</div>
    @endif
    <form action="{{ route('books.update',$book->id)}}" method="POST">
        @csrf 
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <storng>Book ID:</strong>
                    <input type="number" name="bookid" value="{{ $book->bookid}}" class="form-control" placeholder="Id">
</div>
</div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <storng>Authorid:</strong>
                    <input type="number" name="authorid" value="{{ $book->authorid}}" class="form-control" placeholder="Author">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <storng>Title:</strong>
                    <input type="text" name="title" value="{{ $book->title}}" class="form-control" placeholder="title">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <storng>ISBN:</strong>
                    <input type="text" name="isbn" value="{{ $book->ISBN}}" class="form-control" placeholder="isbn">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <storng>Pub_year:</strong>
                    <input type="number" name="pub_year" value="{{ $book->pub_year}}" class="form-control" placeholder="pub_year">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <storng>Available:</strong>
                    <input type="number" name="available" value="{{ $book->available}}" class="form-control" placeholder="Available">
</div>
</div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection