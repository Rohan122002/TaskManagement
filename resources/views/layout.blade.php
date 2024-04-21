<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,200&family=Rubik&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:ital,wght@0,400;0,700;1,200&family=Rubik&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <section class="main_section">
        <div class="row">
            <div class="col-2 task nopad">
                <p class="taskAssign">Task Management</p>
                <div class="sidebar col-12">
                    <a class="sideitem {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><span class="menu_icon"><i class="menu_icon_item bi bi-speedometer2"></i> </span>Dashboard</a>
                    <a class="sideitem {{ request()->is('task') ? 'active' : '' }}" href="{{ route('task') }}"><span class="menu_icon"><i class="menu_icon_item bi bi-list-task"></i> </span>Tasks</a>
                    <a class="sideitem {{ request()->is('projects') ? 'active' : '' }}" href="{{ route('projects') }}"><span class="menu_icon"><i class="menu_icon_item bi bi-building"></i></span>Projects</a>
                    <a class="sideitem {{ request()->is('teams') ? 'active' : '' }}" href="{{ route('teams') }}"><span class="menu_icon"><i class="menu_icon_item bi bi-list"></i></span>Team Management</a>
                    <a class="sideitem {{ request()->is('calender') ? 'active' : '' }}" href="{{ route('calender') }}"><span class="menu_icon"><i class="menu_icon_item bi bi-calendar"></i></span>Calendar</a>
                    <a class="sideitem {{ request()->is('settings') ? 'active' : '' }}" href="{{ route('settings') }}"><span class="menu_icon"><i class="menu_icon_item bi bi-gear"></i></span>Settings</a>
                </div>
            </div>

            <div class="col-10 nopad">
                <div class="col-12 dash">
                    <div class="col-2">
                        <p class="dashboard col-2">Dashboard</p>
                    </div>
                    <div class="col-7"></div>
                    <div class="col-1">
                    <p id="username-placeholder" class="user-name"></p>
                    </div>
                    <div class="col-2 profile">
                        <a href=""><i class="fa fa-bell" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="{{route('register')}}"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </div>
                <div class="container">
                    @yield('content')
                </div>
                <script>



                    $(document).ready(function() {
                        $('.sideitem').click(function(e) {
                            e.preventDefault();
                            $('.sideitem').removeClass('active');
                            $(this).addClass('active');
                        });
                    });

                    // Hide success message after 10 seconds
                    setTimeout(function() {
                        document.getElementById('success').style.display = 'none';
                    }, 10000);

                    // Hide fail message after 10 seconds
                    setTimeout(function() {
                        document.getElementById('fail').style.display = 'none';
                    }, 10000);
                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
