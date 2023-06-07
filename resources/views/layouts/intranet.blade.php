<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<div id="mySidebar" class="sidebar d-flex flex-column justify-content-between align-items-start">
    <div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Categories</a>
        <a href="#">Recipes</a>
    </div>
    <div class="bg-primary w-100">
        <li class="nav-item list-style-none">
            <a class="nav-link">
                Logout
            </a>
        </li>
    </div>

</div>

<div id="main">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="openbtn" onclick="openNav()">&#9776; SalusPlay</button>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
