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
                /* height: 50px; */
                width: 100vw;
                z-index: 1;
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

            .content {
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
            <div class="content">
                <form>
                    <!-- <img src="{{URL::asset('/images/star-can.png')}}" alt="new product"/> -->
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning font-weight-bold mt-2 w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </body>
</html>
