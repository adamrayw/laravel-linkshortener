<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/6678200964.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <header>
            <div class="header-top">
                <h1>Shortku</h1>
                <p>Short your link simply</p>
            </div>
            <div class="link">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/pages/contact">Contact</a></li>
                    <li><a href="/pages/about">About</a></li>
                    <li><a href="/pages/about">Find</a></li>
                </ol>
            </div>
        </header>
    </nav>
    @yield('content')
    <footer>
        <div>
            <p>Copyright &copy; 2021 Adam Ray</p>
        </div>
    </footer>
</body>

</html>