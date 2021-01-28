@extends ('books.layout')

@section ('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ $message }}</p>
    </div>
@endif

<div id="index-container">
    <div class="display-4 text-center my-2">All Books List</div>
    <div class="row mt-4 mb-2">
        <div class="col-sm-9 pt-2">
            <ul class="nav">
                <li class="nav-item">
                    <p>Sort By: </p>
                </li>
                <li class="nav-item ml-3">
                    <a href="{{ URL::current() }}" 
                    class="nav-text {{Request::has('sort') ? 'text-dark' : 'text-primary'}}">Latest</a>
                </li>

                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>

                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=book_name_asc" }}" 
                    class="nav-text {{Request::get('sort') === 'book_name_asc' ? 'text-primary' : 'text-dark'}}">Book Name (ASC)</a>
                </li>

                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>

                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=book_name_desc" }}"
                       class="nav-text {{Request::get('sort') === 'book_name_desc' ? 'text-primary' : 'text-dark'}}">Book Name (DESC)</a>
                </li>

                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>

                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=price_asc" }}" 
                    class="nav-text {{Request::get('sort') === 'price_asc' ? 'text-primary' : 'text-dark'}}">Price Low To High</a>
                </li>

                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>

                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=price_desc" }}"
                       class="nav-text {{Request::get('sort') === 'price_desc' ? 'text-primary' : 'text-dark'}}">Price High To Low</a>
                </li>

                <li class="nav-item mx-2"><i class="fas fa-circle align-middle"></i></li>

                <li class="nav-item">
                    <a href="{{ URL::current()."?sort=old_to_new" }}"
                       class="nav-text {{Request::get('sort') === 'old_to_new' ? 'text-primary' : 'text-dark'}}">Old To New</a>
                </li>
            </ul>
        </div>

        <div class="col-sm-3">
            <form action="{{ route('books.index') }}" method="GET">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="search_key" placeholder="Search Book Name...">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered table-hover" id="table-index">
        <thead class="thead-dark text-center">
            <tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Writer Name</th>
                <th>Published Year</th>
                <th>Price (Tk.)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="bg-light text-center">
            @foreach ($books as $book)
            <tr>
                <td class="align-middle">{{$book->book_id}}</td>
                <td class="align-middle">{{$book->book_name}}</td>
                <td class="align-middle">{{$book->writer_name}}</td>
                <td class="align-middle">{{$book->published_year}}</td>
                <td class="align-middle">{{$book->price}}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-success">
                           <i class="fas fa-eye"></i> View
                        </a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mx-1"> 
                           <i class="fas fa-edit"></i> Edit 
                        </a> 
                        <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$books->links()}}
    <a href="{{ route('books.create') }}" class="btn btn-primary my-2 d-block mx-auto" style="width: 12%;">Add New Book</a>     
</div>
@endsection
