<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Solatec - Solar and Renewable Energy Template">
    <link href="{{ asset('assets\images\AZAN.ico') }}" rel="icon">
    <title>{{ $title ?? 'AZAN (Amil Zakat Nasional)' }}</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/libraries.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <script src="{{ asset('assets') }}/js/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="wrapper">
        {{-- <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div> --}}

        <x-user-navbar />
        @if (session('alert'))
            {!! session('alert') !!}
        @endif

        {{ $slot }}

        <x-footer />

        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
    </div><!-- /.wrapper -->

    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>

    <script>
        function validateImage(input) {
            var file = input.files[0];
            var maxSize = 1 * 1024 * 1024;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

            if (!file || !allowedExtensions.test(file.name)) {
                Swal.fire({
                    text: "Harap pilih file JPG, JPEG, atau PNG!.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                });
                $(input).val('');
            }
        }

        function validateAndUploadImage(input) {
            var file = input.files[0];
            var maxSize = 10 * 1024 * 1024;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

            if (!file || !allowedExtensions.test(file.name)) {
                Swal.fire({
                    text: "Harap pilih file JPG, JPEG, atau PNG!.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                });
                $(input).val('');
                return false;
            }

            var input = $(input)[0];
            var imagePreviewContainer = $(input).siblings('.image');
            var imagePreview = imagePreviewContainer.find('img');
            var plusIcon = imagePreviewContainer.find('.mdi-plus');
            var uploadText = imagePreviewContainer.find('span');
            var closeIcon = imagePreviewContainer.find('.close-icon');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.removeClass('d-none');
                    imagePreview.attr('src', e.target.result);
                    plusIcon.addClass('d-none');
                    uploadText.addClass('d-none');
                    closeIcon.removeClass('d-none');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function changeImage(closeIcon) {
            $(closeIcon).on('click', function(event) {
                event.preventDefault();
                var input = $(closeIcon).siblings('input[type="file"]');
                var imagePreview = $(closeIcon).siblings('.image-preview');
                var plusIcon = $(closeIcon).siblings('.mdi-plus');
                var uploadText = $(closeIcon).siblings('span');

                input.val('');

                imagePreview.attr('src', '').addClass('d-none');
                plusIcon.removeClass('d-none');
                uploadText.removeClass('d-none');
                $(closeIcon).addClass('d-none');
            });
        }

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
