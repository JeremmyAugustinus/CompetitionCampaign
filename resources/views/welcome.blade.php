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
                            <h1 class="text-center font-weight-bold">COMPETITION</h1>
                            <p class="text-center font-weight-bold pl-5 pr-5">
                                To celebrate our new stardrink product, we encourage you to join
                                our stardrink competition. The more entry you have, the higher your
                                chance to win the prize. <u>The prize is 100 bottles of "stardrink" drink
                                and only the top 10 persons with the most entries will win the prize.</u>
                            </p>
                            @if(isset($countdown))
                                <h2 id="countdown" class="text-center mt-4"></h2>
                                <script>
                                    $(document).ready(function(){
                                        var seconds = <?php echo $countdown ?>;

                                        if (seconds) {
                                            setInterval(function() {
                                                seconds = seconds - 1;                        
                                                var d = Math.floor(seconds / (3600*24));
                                                var h = Math.floor(seconds % (3600*24) / 3600);
                                                var m = Math.floor(seconds % 3600 / 60);
                                                var s = Math.floor(seconds % 60);

                                                var dDisplay = d > 0 ? d + (d == 1 ? " day, " : " days, ") : "";
                                                var hDisplay = h > 0 ? h + (h == 1 ? " hour, " : " hours, ") : "";
                                                var mDisplay = m > 0 ? m + (m == 1 ? " minute, " : " minutes, ") : "";
                                                var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
                                                $("#countdown").html(dDisplay + hDisplay + mDisplay + sDisplay);
                                                if (!seconds) {
                                                    location.reload();
                                                }
                                            }, 1000);
                                        }
                                    });
                                </script>
                            @elseif(isset($expiration))
                                <a href="/signup"><h2 class="text-center mt-3">REGISTER HERE!</h2></a>
                                <u id="expiration" class="text-center"></u>
                                <a href="/check"><p class="text-center mt-2">check my entry instead</h3></a>
                                <script>
                                    $(document).ready(function(){
                                        var seconds = <?php echo $expiration ?>;

                                        if (seconds) {
                                            setInterval(function() {
                                                seconds = seconds - 1;                        
                                                var d = Math.floor(seconds / (3600*24));
                                                var h = Math.floor(seconds % (3600*24) / 3600);
                                                var m = Math.floor(seconds % 3600 / 60);
                                                var s = Math.floor(seconds % 60);

                                                var dDisplay = d > 0 ? d + (d == 1 ? " day, " : " days, ") : "";
                                                var hDisplay = h > 0 ? h + (h == 1 ? " hour, " : " hours, ") : "";
                                                var mDisplay = m > 0 ? m + (m == 1 ? " minute, " : " minutes, ") : "";
                                                var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
                                                $("#expiration").html("Ends in " + dDisplay + hDisplay + mDisplay + sDisplay);
                                                if (!seconds) {
                                                    location.reload();
                                                }
                                            }, 1000);
                                        }
                                    });
                                </script>
                            @else
                                <i class="text-center mt-3"><u>REGISTRATION FORM HAS BEEN CLOSED</u></i>
                                <a href="/check"><p class="text-center mt-2">check my entry instead</h3></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
