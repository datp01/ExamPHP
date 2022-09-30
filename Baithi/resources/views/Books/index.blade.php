@extends('books.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12>
           <h2 class="text-center"> Book Management</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px; margin-bottom:10px;">
           <a class="btn btn-success " href="{{route('books.create')}}">
             Add Books</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        {{$message}}
      </div>
      @endif

      @if(sizeof($books) > 0)
       <table class="table table-bordered">
           <tr>
            <th>No</th>
            <th>ID</th>
            <th>Authorid</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Pub_year</th>
            <th>Available</th>
            <th width="280px">More</th>
           </tr>
           @foreach($books as $book)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{$book->bookid}}</td>
                  <td>{{$book->authorid}}</td>
                  <td>{{$book->title}}</td>
                  <td>{{$book->ISBN}}</td>
                  <td>{{$book->pub_year}}</td>
                  <td>{{$book->available}}</td>
                <td>
                    <form action="{{ route('books.destroy',$book->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('books.show',$book->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                        @csrf 
                        @method('DELETE')
                        <button type ="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
                    
            </tr>
            @endforeach
</table>
@else
<div class="alert alert-alert">Start Adding to the Database.</div>
@endif
{!! $books->links() !!}
@endsection