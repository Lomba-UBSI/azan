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
                                    <h5>Simpan Data Mustahiq</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('mustahiq.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="file_mustahiq" class="form-label">Upload Data Mustahiq</label>
                                            <input type="file" class="form-control" accept="application/pdf"
                                                name="file_mustahiq">
                                        </div>

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
