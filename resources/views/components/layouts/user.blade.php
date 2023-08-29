<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Solatec - Solar and Renewable Energy Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title>Solatec - Solar and Renewable Energy Template</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        {{-- <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div> --}}

        <x-user-navbar />

        {{ $slot }}

        <x-footer />

        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
    </div><!-- /.wrapper -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
