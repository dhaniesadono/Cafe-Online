{{-- <x-app-layout>

</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')

</head>

<body>

    @include('admin.navbar')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Orders</h1>
                <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="{{ url('/redirects') }}">Dashboard</a></div>
                        <div class="breadcrumb-item">Orders</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Pesanan</h4>
                                <div class="card-header-form">
                                    <form action="{{ url('/search') }}" method="get">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-btn">
                                                <button type="submit" value="search" class="btn btn-primary"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kontak</th>
                                            <th>Alamat</th>
                                            <th>Foodname</th>
                                            <th>Harga</th>
                                            <th>Quantity</th>
                                            <th>Total Harga</th>
                                        </tr>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->address }}</td>
                                                <td>{{ $data->foodname }}</td>
                                                <td>Rp {{ $data->price }}</td>
                                                <td>{{ $data->quantity }}</td>
                                                <td>Rp {{ $data->price * $data->quantity }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.adminscript')



</body>

</html>
