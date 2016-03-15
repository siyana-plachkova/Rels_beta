<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Rels -
        @yield('title')
    </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    @yield('style')
</head>

<body>

    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right nav-red">
                    @yield('searchbar')
                    @yield('notifications')
                    @if (Auth::check())
                        <li role="presentation" class="active"><a href="/profile">My profile</a></li>
                        <li role="presentation"><a href="/auth/logout">Logout</a></li>
                    @endif
                </ul>
            </nav>
            <h3 class="text-muted"><a href="/" style="color: #fff; text-decoration: none;">Rels</a></h3>
        </div>

        @yield('content')

        <footer class="footer">
            <p>&copy; Rels, Inc.</p>
        </footer>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>