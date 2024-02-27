<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Managment System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">

    <style>
        .dataTables_filter {
            margin-bottom: 10px;
        }

        .alertPosition {
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            position: fixed;
            left: 50%;
            top: 50%;

            z-index: 1;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

    @if (session('success'))
        <div class="alert alert-success alert-block alertPosition" id="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-success alert-block alertPosition" id="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="dashboard">Book Managment System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="width: 100%;">

                @guest
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav " style="display: flex; justify-content:space-between;flex:1;">
                        <li class="nav-item ">
                            <a class="nav-link" href="dashboard">Dashboard</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link btn btn-info rounded-pill  p-2" href="{{ route('signout') }}">Logout</a>
                        </li>
                    </ul>
                @endguest

            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>

<script>
    $(document).ready(function() {
        $('.dashboard').DataTable({
            "order": [
                [0, "desc"]
            ] // assuming you want to sort the first column in descending order
        });
    });
</script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#alert').fadeOut('slow');
        }, 2000);
    });
</script>
