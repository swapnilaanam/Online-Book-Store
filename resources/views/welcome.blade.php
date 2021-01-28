@extends ('books.layout')

@section ('content')
<div id="home-container">
    <div class="jumbotron bg-secondary my-2">
        <h1 class="text-center text-white">Welcome To Our Online Book Store</h1>
        <p class="text-center text-white">We are just a awesome book store to find all the awesome books you need.</p>
    </div>
    <div class="d-flex justify-content-around w-50 mx-auto mt-5">
        <a href="{{ route('books.create')}}" class="btn btn-primary px-4 py-2">Add New Book</a>
        <a href="{{ route('books.index')}}" class="btn btn-success px-4 py-2">Show All Books</a>
    </div>
    <blockquote class="blockquote text-center">
        <p class="mb-0" style="margin-top: 6rem; font-size: 30px">
            <q> You know you've read a good book when you turn the last page and feel
                a little as if you have lost a friend.
            </q>
        </p>
        <footer class="blockquote-footer text-right" style="font-size: 24px;">Paul Sweeney</footer>
    </blockquote>
</div>
@endsection
