@extends ('books.layout')

@section ('content')

@if ($errors -> any())
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oppsie !</strong> Something wrong with your input, check them again...</p>
        <ul>
            @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div id="create-container">
    <div class="display-4 text-center my-1">Add New Book Informations</div>
    <form action="{{ route('books.store') }}" method="POST" class="mb-5">
        @csrf
        <div class="form-group">
            <label for="book_id">Book ID: </label>
            <input type="text" class="form-control" name="book_id" placeholder="Book ID (YY-XX)" id="book_id"> 
        </div>
        <div class="form-group">
            <label for="book_name">Book Name: </label>
            <input type="text" class="form-control" name="book_name" placeholder="Book Name" id="book_name">
        </div>
        <div class="form-group">
            <label for="writer_name">Writer Name: </label>
            <input type="text" class="form-control" name="writer_name" placeholder="Writer Name" id="writer_name">
        </div>
        <div class="form-group">
            <label for="published_year">Published Year: </label>
            <input type="number" class="form-control" name="published_year" placeholder="Published Year (YYYY)" id="published_year">
        </div>
        <div class="form-group">
            <label for="price">Price: </label>
            <input type="number" class="form-control" name="price" placeholder="Price" id="price">
        </div>
        <div class="form-group">
            <label for="book_image">Book Image Link:</label>
            <input class="form-control" name="book_image" placeholder="Link" id="book_image"> 
        </div>
        <div class="form-group">
            <label for="book-desc">Book Description:</label>
            <textarea class="form-control" rows="2" name="book_description" placeholder="Write Some Description About Book..." id="book-desc"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create New Book</button>
    </form>
</div>
@endsection
