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
                            <h1 class="text-center font-weight-bold">CONGRATULATION</h1>
                            <p class="text-center font-weight-bold pl-5 pr-5">
                                We send you a poster containing your reference link for this competition via email.
                                <u>The more people using your referral link, the more entries you have.</u>
                                We also provide your reference link on this page, in case you encounter
                                a problem for accessing your e-mail.
                                <input type="text" class="form-control text-center mt-4" value="<?php echo "http://127.0.0.1:8000/signup/". $myId; ?>" disabled/>
                                <a href="/"><button class="btn btn-secondary font-weight-bold mt-2 w-100">Back</button></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
