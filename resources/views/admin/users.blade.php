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
                    <h1>Users</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="{{ url('/redirects') }}">Dashboard</a></div>
                        <div class="breadcrumb-item">Users</div>
                    </div>
                </div>

                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Tabel User</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($data as $data)
                                                <tr>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>

                                                    @if ($data->usertype == '0')
                                                        <td><a href="{{ url('/deleteuser', $data->id) }}">Delete</a>
                                                        </td>
                                                    @else
                                                        <td><a>Not Allowed</a></td>
                                                    @endif
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
        @include('admin.adminscript')
</body>

</html>
