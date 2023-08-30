<x-enduser>
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h bg-overlay bg-overlay-2">
                <div class="bg-img">
                    <img src="{{ asset('assets/images/sliders/backround-landing.webp') }}" alt="slide img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                            <div class="slide__body">
                                <span class="slide__subtitle">
                                    Pengelolaan, Distribusi dan Pelaporan Zakat
                                </span>
                                <h2 class="slide__title">
                                    Digitalisasi <br> Pembayaran Zakat Di Nusantara
                                </h2>
                                <p class="slide__desc">
                                    Jadikan pengalaman membayar dan mengelola zakat
                                    menjadi lebih mudah dan nyaman dengan website AZAN (Amil Zakat Nasional).
                                </p>
                                <div class="d-flex">
                                    <a href="services.html" class="btn btn__primary mr-30">
                                        <i class="icon-arrow-right"></i><span>
                                            Hubungi Admin
                                        </span>
                                    </a>
                                    <a href="{{ route('zakat.index') }}" class="btn btn__white">Zakat Sekarang</a>
                                </div>
                            </div><!-- /.slide__body -->
                        </div><!-- /.col-xl-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
  About Layout 1
=========================== -->
    <section class="about-layout1 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                    <div class="heading__layout2 mb-60">
                        <h2 class="heading__subtitle">
                            Inovasi Membantu Kemajuan Daerah-di Indonesia Melalui AZAN (Amil Zakat Nasional)
                        </h2>
                        <h3 class="heading__title">
                            Optimalkan Pengumpulan dan Pendistribusian Zakat Fitrah dengan AZAN (Amil Zakat Nasional)!
                        </h3>
                    </div><!-- /.heading__layout2 -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col">
                    <div class="row row-cols-2">
                        <!-- counter item #1 -->
                        <div class="col counter-item">
                            <h4 class="counter">1,000</h4>
                            <p class="counter__desc pr-0">Muzakki</p>
                            <div class="divider__line"></div>
                        </div>
                        <!-- counter item #2 -->
                        <div class="col counter-item">
                            <h4 class="counter">2,512</h4>
                            <p class="counter__desc pr-0">Amil Zakat</p>
                            <div class="divider__line"></div>
                        </div>
                        <!-- counter item #3 -->
                        <div class="col counter-item">
                            <h4 class="counter">2,512</h4>
                            <p class="counter__desc pr-0">Mustahiq</p>
                            <div class="divider__line"></div>
                        </div>
                        <div class="col counter-item">
                            <h4 class="counter">2,512</h4>
                            <p class="counter__desc pr-0">Daerah</p>
                            <div class="divider__line"></div>
                        </div>
                    </div>
                </div><!-- /.col-lg-2 -->
                <div class="col">
                    <div class="about__text">
                        <div class="text__icon">
                            <x-application-logo />
                        </div>
                        <p class="heading__desc font-weight-medium color-secondary mb-30">
                            AZAN (Amil Zakat Nasional) adalah platform zakat yang memiliki misi utama untuk menurunkan
                            index
                            kemiskinan di indonesia dengan cara
                            mengedukasi dan mengajak masyarakat untuk menunaikan kewajiban zakat
                        </p>
                        <p class="heading__desc mb-20">
                            Zakat, jauh lebih dari sekadar kewajiban finansial dalam Islam. Ini adalah panggilan untuk
                            mengubah dunia melalui kepedulian. Ketika kita memberikan sebagian dari harta kita kepada
                            yang membutuhkan, kita bukan hanya mengurangi ketidaksetaraan, tetapi juga membuka pintu
                            bagi keberkahan dan transformasi sosial. Zakat adalah investasi dalam kemanusiaan,
                            menciptakan jaring pengaman sosial dan menghadirkan harapan bagi mereka yang kurang
                            beruntung. Bergabunglah dalam perjalanan ini, di mana setiap kontribusi membentuk cerita
                            perubahan yang menginspirasi.
                        </p>
                        <p class="heading__desc mb-20">
                            Zakat mengingatkan kita bahwa rezeki sebenarnya berasal dari Allah, dan kita hanya menjadi
                            pemegang amanah atasnya." - Al-Junaid Baghdadi
                        </p>
                        <div class="d-flex align-items-center mt-30">
                            <a href="{{ route('zakat.index') }}" class="btn btn__secondary mr-30">
                                <span>
                                    Mulai Berzakat
                                </span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.about__text -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->


    <section class="services-layout2 pt-120">
        <div class="bg-img"><img src="assets/images/backgrounds/5.jpg" alt="background"></div>
        <div class="container">
            <div class="row mb-70">
                <div class="col-12">
                    <h2 class="heading__subtitle color-primary">Kategori mustahiq yang berhak menerima zakat</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title color-white">
                        Berikut adalah kategori mustahiq yang berhak menerima zakat
                    </h3>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc font-weight-bold color-gray mb-30">
                        Bagi muslim yang tidak mampu mencukupi
                        biaya hidup atau pendapatan dan kekayaannya belum mencapai nisab, mereka tidak wajib membayar
                        zakat Siapa saja orang-orang yang berhak menerima
                        zakat?
                    </p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel carousel-arrows-light"
                        data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                        <!-- service item #1 -->
                        @foreach ($zakatTypes as $zt)
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ FileHelper::getStorageImageURL($zt->image) }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Fakir</h4>
                                    <p class="service__desc">mereka yang hampir tidak memiliki apa-apa sehingga tidak
                                        mampu memenuhi kebutuhan pokok hidup. </p>
                                </div><!-- /.service__body -->
                            </div>
                        @endforeach
                        <!-- /.service-item -->
                    </div><!-- /.carousel-->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.services Layout 2 -->
</x-enduser>
