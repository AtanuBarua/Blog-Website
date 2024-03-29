<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/')}}front/css/modern-business.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('/')}}">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('category-blog',['id'=>$category->id, 'name'=>$category->category_name])}}">{{$category->category_name}}</a>
                </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link text-white" href="about.html">About</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('sign-up')}}">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Logout</a>
                    </li>
            </ul>
        </div>
    </div>
</nav>


@yield('body')


<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('/')}}front/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
