<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
    <title>Tasks</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="/">Main</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                     </li>
                    <li class="nav-item">
                       <a class="nav-link" aria-current="page" href="/create">Create</a>
                   </li>
                   @endauth
                </ul>
            </div>
            @guest
                <a class="btn btn-outline-success m-1" aria-current="page" href="/login">Log in</a>
                <a class="btn btn-outline-primary m-1" aria-current="page" href="/register">Register</a>
           @endguest
            @auth
            <form action="{{ route('logout')}}" method="post">
                @csrf
                <button class="btn btn-outline-danger" type="submit" >Log out</button>
            </form>
            @endauth
        </div>
        </nav>
    </header>
    <main class="container-fluid p-2">
        @yield("content")
    </main>
    <footer class="w-100 p-3 container-fluid fixed-bottom bg-dark text-white text-center">
        &copy; IT STEP <?php echo date("Y")?>
    </footer>
</body>
</html>
