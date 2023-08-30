<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('cuba/assets') }}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('cuba/assets') }}/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/vendors/animate.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('cuba/assets') }}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets') }}/css/responsive.css">
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <x-admin-navbar />
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <x-sidebar />

            {{ $slot }}
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2020 © Cuba theme by pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('cuba/assets') }}/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('cuba/assets') }}/js/bootstrap/popper.min.js"></script>
    <script src="{{ asset('cuba/assets') }}/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="{{ asset('cuba/assets') }}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('cuba/assets') }}/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('cuba/assets') }}/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('cuba/assets') }}/js/sidebar-menu.js"></script>
    <script src="{{ asset('cuba/assets') }}/js/clipboard/clipboard.min.js"></script>
    <script src="{{ asset('cuba/assets') }}/js/counter/counter-custom.js"></script>
    <script src="{{ asset('cuba/assets') }}/js/custom-card/custom-card.js"></script>
    <script src="{{ asset('cuba/assets') }}/js/dashboard/dashboard_2.js"></script>
    <script src="{{ asset('cuba/assets') }}/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('cuba/assets') }}/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->

    <script>
        /* Tanpa Rupiah */
        var tanpa_rupiah = document.getElementById('nominal');
        tanpa_rupiah.addEventListener('keyup', function(e) {
            tanpa_rupiah.value = formatRupiah(this.value);
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
</body>

</html>
