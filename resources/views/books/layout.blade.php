<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Book Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/4d319b78cc.js" crossorigin="anonymous"></script>
        <link href="/css/books.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark shadow-sm justify-content-between">
                <a class="navbar-brand ml-3" href="/home">Online Book Store</a>
                <ul class="navbar-nav mr-3">
                    <li class="nav-item {{ Request::path() === '/home' ? 'active' : '' }}">
                        <a href="/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'books/create' ? 'active' : '' }}">
                        <a href="{{route('books.create')}}" class="nav-link">Add New Book</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'books' ? 'active' : '' }}">
                        <a href="{{route('books.index')}}" class="nav-link">Show All Books</a>
                    </li>
                    <li class="nav-item dropdown ml-2">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container">
            @yield ('content')
        </div>

        <footer>
            <div class="bg-dark text-white d-flex justify-content-between">
                <p>&copy;2021, Online Book Store</p>
                <p>Designed & Developed By Swapnil Aanam</p>
            </div>
        </footer>
    </body>
</html>
