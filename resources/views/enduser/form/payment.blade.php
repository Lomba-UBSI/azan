<x-enduser>
    <style>
        .payment-method:hover {
            border-color: #285AEB;
            border-width: 2px;
        }

        .payment-method.active {
            border-color: #285AEB;
            border-width: 2px;
        }
    </style>
    <section class="about-layout1 pt-30 pb-30">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{ route('confirm.payment') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row row-cols-2 row-cols-md-4">
                                    <input type="text" name="nominal_zakat" value="{{ $data['nominal_zakat'] }}"
                                        hidden>
                                    <input type="text" name="payment_method" hidden>
                                    <input type="text" name="muzakki" value="{{ $data['name'] }}" hidden>
                                    @foreach ($paymentMethods as $pm)
                                        <div class="col">
                                            <div class="card payment-method" id="payment-method-{{ $pm->id }}"
                                                style="cursor: pointer;">
                                                <div class="card-header text-right">IDR</div>
                                                <div class="card-body">
                                                    <div
                                                        class="row row-cols-2 justify-content-between align-items-center">
                                                        <div class="col">
                                                            <img src="{{ asset($pm->image) }}"
                                                                style="height: 50px;object-fit:contain;">
                                                        </div>
                                                        <div class="col text-right">
                                                            {{ $data['nominal_zakat'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    {{ $pm->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $("#payment-method-{{ $pm->id }}").on('click', function() {
                                                $(".payment-method").removeClass("active");
                                                $(this).addClass('active');
                                                $('input[name="payment_method"]').val("{{ $pm->id }}")
                                            })
                                        </script>
                                    @endforeach
                                </div>
                                <!-- /.row -->
                                <div class="col-12 text-center mt-3">
                                    <button class="btn btn-success" type="submit">Konfirmasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-enduser>
