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
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
                <a href="http://127.0.0.1:8000" style="color: yellow;">Competition</a>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid star-can ml-3" src="{{URL::asset('/images/star-can.png')}}" alt="new product"/>
                    </div>
                    <div class="col-lg-8 flex-center">
                        <div class="card card-content h-75 w-100 pl-5 pt-5 pr-3">
                            <form class="pl-5 pr-5" method="post" action="/show">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                <h1 class="text-center">CHECK MY ENTRY</h1>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <input type="text" name="input" class="form-control" placeholder="Email / Phone" required>
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-warning font-weight-bold mt-2 w-100"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
