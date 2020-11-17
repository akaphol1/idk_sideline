<!DOCTYPE html>

<html>

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>




    <!--fontawesome-->

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>

    <!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->




    <title>Responsive nav bar with Bootstrap 4</title>

</head>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">

        <a class="navbar-brand"><img src="img/dish.png"></a>

        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-between" id="nav">

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3" href="#">HOME</a>

                </li>

                <li class="nav-item dropdown" data-toggle="dropdown">

                    <a class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CATEGORIES</a>

                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="#">Fast Food</a>

                        <a class="dropdown-item" href="#">Lunch</a>

                        <a class="dropdown-item" href="#">Dessert</a>

                    </div>

                </li>

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3" href="#">ABOUT US</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3" href="#">CONTACT</a>

                </li>

            </ul>


            <!-- Search bar -->

            <form class="form-inline ml-3">

                <div class="input-group">

                    <input type="text" class="form-control " placeholder="Search">

                    <button type="submit"><i class="fa fa-search"></i></button>

                </div>

            </form>

        </div>

    </nav>

</body>

</html>
