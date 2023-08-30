<x-dashboard>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>
                            Amil Zakat
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.amil') }}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Ecommerce</li>
                        </ol>
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
                                                            <th class="f-22">
                                                                ID
                                                            </th>
                                                            <th>Muszakki</th>
                                                            <th>Status Cash</th>
                                                            <th>Country</th>
                                                            <th>Total</th>
                                                            <th class="text-right">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($transactions as $trx)
                                                            <tr>
                                                                <td>
                                                                    {{ $trx->id }}
                                                                </td>
                                                                <td>
                                                                    {{$trx->}}
                                                                </td>
                                                                <td>CAP</td>
                                                                <td><i class="flag-icon flag-icon-gb"></i>
                                                                </td>
                                                                <td> <span class="label">$5,08,652</span>
                                                                </td>
                                                                <td class="text-right"><i
                                                                        class="fa fa-check-circle"></i>Done
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
