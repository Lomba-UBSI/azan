<x-enduser>
    <section class="contact-layout2 pb-0 bg-overlay bg-overlay-primary-gradient">
        <div class="bg-img">
            <img src="{{ asset('assets/images/background2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="col-inner">
                        <div class="heading-layout2 heading-light mb-60">
                            <h2 class="heading__subtitle">Menjadikan Zakat Mudah dan Nyaman!</h2>
                            <h3 class="heading__title">
                                Keuntungan Berzakat
                            </h3>
                            <p class="heading__desc">
                                Zakat bukan hanya kewajiban, tetapi juga pintu menuju keberkahan dan kemanusiaan. Dalam
                                setiap rupiah yang diberikan, terbentuk ikatan yang mengubah hidup. Zakat menciptakan
                                keseimbangan dalam masyarakat, membangun jaringan solidaritas, dan mengangkat derajat
                                yang lemah. Ini adalah peluang untuk merasakan makna sejati dalam memberi, merasakan
                                kehangatan dalam setiap tindakan, dan menyaksikan perubahan nyata. Jadilah bagian dari
                                perubahan positif, karena setiap kontribusi Anda, sekecil apa pun, menjadi sinar
                                kebaikan bagi dunia yang lebih baik.
                            </p>
                        </div><!-- /.heading -->
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="contact-panel">
                        <form class="contact-panel__form" method="post" action="{{ route(Route::currentRouteName()) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h4 class="contact-panel__title">Zakat Penghasilan</h4>
                                </div>
                                <div class="col d-flex justify-content-around">
                                    <div>
                                        <input type="radio" name="bulan" id="zakat-perbulan" value="bulan"
                                            onclick="updatePlaceholder(this)">
                                        <label for="zakat-perbulan">Bulanan</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="bulan" id="zakat-pertahun" value="tahun"
                                            onclick="updatePlaceholder(this)">
                                        <label for="zakat-pertahun">Tahunan</label>
                                    </div>
                                </div>
                                <input type="text" hidden id="nisab">
                                <div class="col">
                                    <small class="text-danger" id="help-nominal"></small>
                                    <x-input type="nominal" name="nominal-penghasilan" placeholder="Nominal Penghasilan"
                                        disabled />
                                </div>
                                <div class="col">
                                    <label for="nominal_zakat">Nominal Zakat</label>
                                    <input type="text" name="nominal_zakat" readonly class="form-control"
                                        id="nominal-zakat">
                                </div>
                                <script>
                                    var nominalZakat = document.getElementById('nominal');
                                    nominalZakat.addEventListener('keyup', function(e) {
                                        let inputElement = document.getElementById("nominal-zakat");
                                        let inputNisab = document.getElementById("nisab");
                                        let button = document.getElementById("submit-zakat");
                                        if (parseInt(inputNisab.value) <= this.value.replaceAll('.', '')) {
                                            let angka = Math.ceil(parseInt(this.value.replaceAll('.', '')) * 0.025);
                                            inputElement.value = formatRupiah("" + angka, "Rp.");
                                            button.removeAttribute("disabled");
                                        } else {
                                            inputElement.value = "Belum memenuhin Nisab";
                                            button.addAttribute("disabled");
                                        }
                                    });

                                    function updatePlaceholder(radio) {
                                        let inputElement = document.getElementById("nominal");
                                        inputElement.removeAttribute("disabled");
                                        let placeholderText = radio.value === "bulan" ? "Nominal Penghasilan per Bulan" :
                                            "Nominal Penghasilan per Tahun";
                                        inputElement.placeholder = placeholderText;

                                        let nisabElement = document.getElementById("help-nominal");
                                        let nisabText = radio.value === "bulan" ? "Nisab per Bulan Rp. " + formatRupiah("{{ $nisab1Bulan }}") :
                                            "Nisab per Tahun Rp. " + formatRupiah("{{ $nisab1Tahun }}");
                                        nisabElement.textContent = nisabText;

                                        let inputNisab = document.getElementById('nisab');
                                        let nisabText2 = radio.value === "bulan" ? "{{ $nisab1Bulan }}" : "{{ $nisab1Tahun }}";
                                        inputNisab.value = nisabText2;
                                    }
                                </script>
                                <div class="col mt-3">
                                    <x-input name="name" placeholder="Nama Lengkap" />
                                </div>
                                <div class="col">
                                    <x-input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary" id="submit-zakat"
                                        disabled>ZAKAT</button>
                                </div>
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->
</x-enduser>
