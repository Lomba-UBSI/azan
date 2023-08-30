<x-dashboard>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>
                            Input Zakat
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row size-column">
                <div class="col-xl-9 xl-100 box-col-12">
                    <div class="row">
                        <div class="col-xl-12">
                            @if (session('alert'))
                                {!! session('alert') !!}
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h5>Input Zakat Muzakki</h5>
                                    <span>Dana zakat akan di simpan pada amil {{ Auth::user()->name }}</span>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route(Route::currentRouteName()) }}" method="POST">
                                        @csrf
                                        <div class="form-group m-form__group">
                                            <label>Nominal</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">Rp.</span>
                                                </div>
                                                <input class="form-control" type="text" placeholder="Nominal"
                                                    name="nominal" id="nominal" value="{{ old('nominal') }}">
                                            </div>
                                            @error('nominal')
                                                <!--begin::Description-->
                                                <div class="text-danger ml-2 small mt-2">{{ $message }}</div>
                                                <!--end::Description-->
                                            @enderror
                                        </div>
                                        <x-input label="Nama Muzakki" type="text" name="muzakki"
                                            placeholder="Masukan Nama Muzakki" />
                                        <x-input label="Email Muzakki" type="email" name="email"
                                            placeholder="Masukan Email Muzakki" />

                                        <x-input name="transaction_type_id" type="select" :model="$model"
                                            label="Transaction Type" />
                                        <button class="btn btn-primary w-100">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</x-dashboard>
