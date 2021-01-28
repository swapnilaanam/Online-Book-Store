@extends ('books.layout')

@section ('content')
<div id="show-container">
    <img src="{{$book->book_image}}" alt="Book Image" class="img-fluid mx-auto d-block mb-4" id="book-image"/>
    <h2 class="my-3">{{$book->book_name}}</h2>
    <h5 class="my-2">Writer: {{$book->writer_name}}</h5>
    <h5 class="my-2">Price: {{$book->price}}</h5>
    <h6 class="mt-4">Description: </h6>
    <p>{{$book->book_description}}</p>
</div>
@endsection