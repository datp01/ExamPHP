@extends('books.layout')

@section('content')
 
   <div class="row">
    <div class ="col-lg-12">
          <h2 class="text-center">Show Book</h2>
</div>
   <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom:10px;">
   <a class="btn btn-primary" href="{{ route ('books.index') }}">Back</a>
</div>
</div>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID : </strong>
                {{ $book->bookid}}
</div>
</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>authorid : </strong>
                {{ $book->authorid}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title : </strong>
                {{ $book->title}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ISBN: </strong>
                {{ $book->ISBN}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pub_year: </strong>
                {{ $book->pub_year}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Available : </strong>
                {{ $book->available}}
</div>
</div>

</div>
@endsection