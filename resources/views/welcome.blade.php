<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Streetworks</title>
    @vite([ 'resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">

        @font-face {
            font-family: 'onest-regular';
            font-style: normal;
            font-weight: 900;
            src: url('../public/fonts/onest-regular.tff');
        }
        .mcontainer {
            width: 100vw;
            height: 100vh;
            background-image: url("{{ asset('storage/images/brook-2560.jpg') }}");
            background-repeat: no-repeat;
            box-shadow: 0 0 200px rgba(0,0,0,25) inset;
        }
    </style>
</head>
<body>

    <!-- viewport maxed spash screen container-->
    <div class="mcontainer">
        <div class="banner center">
            <span class="banner-text">Follow our development on Social Media</span>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>


        </div>
        <div class="end spash">
            <p class="">
                <span class="logo center">Streetworks</span> <span class="logo-desc center">The ultimate workout collaboration app coming to iOS - 2024 </span>
            </p>
        </div>
        

        <div class="spash-button center">
            <a href=""><p class="spash-button-press">Notify Me</p></a>
        </div>


    </div>
</body>
</html>