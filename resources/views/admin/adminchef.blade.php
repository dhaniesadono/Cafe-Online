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
                <h1>Chef</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/redirects') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Chefs</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel Chef</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-header-form">
                                    <form action="{{ url('/uploadchef') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="name" required=""
                                                placeholder="Enter the Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Spesialis</label>
                                            <input type="text" name="specialist" required=""
                                                placeholder="Enter the Specialisty" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" name="image" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>Chef</th>
                                            <th>Specialisty</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->specialist }}</td>
                                                <td><img height="350" width="200"
                                                        src="/chefimage/{{ $data->image }}"></td>

                                                <td><a href="{{ url('/deletechef', $data->id) }}">Delete</a> |
                                                    <a href="{{ url('/updatechef', $data->id) }}">Update</a>
                                                </td>

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
