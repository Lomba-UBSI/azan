<x-enduser>
    <section class="contact-layout2 pb-0 bg-overlay bg-overlay-primary-gradient">
        <div class="bg-img"><img src="{{ asset('assets/images/background2.png') }}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="col-inner">
                        <div class="heading-layout2 heading-light mb-60">
                            <h2 class="heading__subtitle">Menjadikan Zakat Mudah dan Nyaman!</h2>
                            <h3 class="heading__title">
                                Keuntungan Menjadi Amil Zakat
                            </h3>
                            <p class="heading__desc">
                                Pekerjaan amil adalah tugas dakwah. Seorang amil zakat bertugas untuk mengajak umat agar
                                mau melaksanakan ibadah zakat yang luar biasa ini. Ibadah yang tidak saja berdimensi
                                vertikal
                                (hablumminallah) tapi juga berdimensi horizontal (hablumminannaas). Ibadah yang
                                menunjukkan keshalehan individual sekaligus keshalehan sosial
                            </p>
                        </div><!-- /.heading -->
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="contact-panel">
                        <form class="contact-panel__form" method="post"
                            action="{{ route('form.store-pengajuan-amil') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h4 class="contact-panel__title">Pengajuan Amil Zakat</h4>
                                </div>
                                <div class="col">
                                    <x-input type="number" name="kk" placeholder="Masukan No KK" />
                                </div>
                                <div class="col">
                                    <x-input type="number" name="nik" placeholder="Masukan NIK" />
                                </div>
                                <div class="col">
                                    <x-input name="name" placeholder="Nama Lengkap" />
                                </div>
                                <script>
                                    $("#id-name").on("input", function() {
                                        var inputValue = $(this).val();
                                        if (!isNaN(inputValue)) {
                                            $(this).val("");
                                        }
                                    });
                                </script>
                                <div class="col">
                                    <x-input name="email" placeholder="Email" :default="Auth::user()->email" disabled />
                                </div>
                                <div class="col">
                                    <x-input type="number" name="whatsapp" placeholder="Whatsapp" />
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="identity" class="form-label">Selfie Bersama KTP
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="mb-3">
                                            <div class="image">
                                                <img src="" class="image-preview d-none mb-3" alt="Image"
                                                    style="height: 220px;">
                                            </div>
                                            <input class="form-control" type="file" name="identity"
                                                accept=".png, .jpg, .jpeg" id="identity"
                                                onchange="validateAndUploadImage(this)" />
                                            @error('identity')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">AJUKAN</button>
                                </div>
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->
</x-enduser>
