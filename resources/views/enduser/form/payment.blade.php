<x-enduser>
    <section class="about-layout1 pt-30 pb-30">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{ route('form.store-pengajuan-amil') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row row-cols-2 row-cols-md-4">
                                    @foreach ($paymentMethods as $pm)
                                        <div class="col">
                                            <div class="card" id="payment-method" style="cursor: pointer;">
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
                                    @endforeach
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-enduser>
