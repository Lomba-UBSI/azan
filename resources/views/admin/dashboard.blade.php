<x-dashboard>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>
                            Super Admin
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            @if (session('alert'))
                {!! session('alert') !!}
            @endif
            <div class="row size-column">
                <div class="col-xl-9 xl-100 box-col-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="best-seller-table responsive-tbl">
                                        <div class="item">
                                            <div class="table-responsive product-list">
                                                <table class="table table-bordernone">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                ID
                                                            </th>
                                                            <th>Nama</th>
                                                            <th>Email</th>
                                                            <th>Active</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($user as $usr)
                                                            <tr>
                                                                <td>
                                                                    {{ $usr->id }}
                                                                </td>
                                                                <td>
                                                                    {{ $usr->name }}
                                                                </td>
                                                                <td>{{ $usr->email }}</td>
                                                                <td class="text-center">
                                                                    @if ($usr->active)
                                                                        <i class="fa fa-check-circle text-success"></i>
                                                                    @else
                                                                        <i class="fa fa-check-circle text-danger"></i>
                                                                    @endif
                                                                </td>
                                                                <td class="text-center">
                                                                    @if ($usr->active)
                                                                        <i class="fa fa-check-circle text-success"></i>
                                                                    @else
                                                                        <form
                                                                            action="{{ route('activate-user', $usr->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <button
                                                                                class="btn btn-success">aktivasi</button>
                                                                        </form>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 xl-100 box-col-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="best-seller-table responsive-tbl">
                                        <div class="item">
                                            <div class="table-responsive product-list">
                                                <table class="table table-bordernone">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                ID
                                                            </th>
                                                            <th>Muzakki</th>
                                                            <th>Nominal</th>
                                                            <th>Pembayaran</th>
                                                            <th class="text-center">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($transactions as $trx)
                                                            <tr>
                                                                <td>
                                                                    {{ $trx->id }}
                                                                </td>
                                                                <td>
                                                                    {{ $trx->muzakki }}
                                                                </td>
                                                                <td>{{ $trx->amount }}</td>
                                                                <td class="text-center">
                                                                    <div>
                                                                        <img src="{{ asset($trx->paymentMethod->image) }}"
                                                                            style="height: 25px;object-fit:contain;">
                                                                        <p>{{ $trx->paymentMethod->name }}</p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    {{ $trx->transaction_status }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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
