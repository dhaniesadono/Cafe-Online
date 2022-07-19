{{-- <x-app-layout>

</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Reservation</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="{{ url('/redirects') }}">Dashboard</a></div>
                        <div class="breadcrumb-item">Reservation</div>
                    </div>
                </div>

                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Tabel Reservasi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Kontak</th>
                                                <th>Guest</th>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Pesan</th>
                                                <th>Alat</th>
                                            </tr>
                                            @foreach ($data as $data)
                                                <tr>
                                                    <td>{{ $data->name_reservation }}</td>
                                                    <td>{{ $data->email_reservation }}</td>
                                                    <td>{{ $data->kontak }}</td>
                                                    <td>{{ $data->guest }}</td>
                                                    <td>{{ $data->tanggal }}</td>
                                                    <td>{{ $data->waktu }}</td>
                                                    <td>{{ $data->pesan }}</td>
                                                    <td><a href="{{ url('/deletereservation', $data->id) }}">Delete</a></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    @include('admin.adminscript')



</body>

</html>
