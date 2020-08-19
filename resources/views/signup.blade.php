<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stardrink</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            body {
                background-image: url("{{URL::asset('/images/stardrink.jpg')}}");
            }

            .navbar {
                background-color: #000;
                align-items: center;
                display: flex;
                justify-content: center;
                position: fixed;
                width: 100vw;
                z-index: 2;
            }

            .full-height {
                height: 100vh;
                background-color: rgba(238, 238, 238, 0.8);
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .form {
                text-align: center;
                background-color: #fff;
                padding: 20px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #eee;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .star-can {
                position: relative;
                z-index: 1;
            }

            .card-content {
                position: absolute;
                margin-right: 70px;
                border-radius: 20px;
            }
        </style>

        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar">
            <div class="links">
                <a href="https://rockstarenergy.com/">Home</a>
                <a href="https://rockstarenergy.com/company/careers">Jobs</a>
                <a href="https://rockstarenergy.com/products">Products</a>
                <a href="https://rockstarenergy.com/actionsports">Actionsports</a>
                <a href="https://rockstarenergy.com/motorsports">Motorsports</a>
                <a href="https://rockstarenergy.com/music/tours">Music</a>
                <a href="http://127.0.0.1:3000" style="color: yellow;">Competition</a>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-4">
                        <img class="img-fluid star-can ml-3" src="{{URL::asset('/images/star-can.png')}}" alt="new product"/>
                    </div>
                    <div class="col-8 flex-center">
                        <div class="card card-content h-75 w-100 pl-5 pt-5 pr-3">
                            <form class="pl-5 pr-5" method="post" action="/store">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                <h1 class="text-center">REGISTRATION</h1>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <input type="submit" value="Sign Up" class="btn btn-warning font-weight-bold mt-2 w-100"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
