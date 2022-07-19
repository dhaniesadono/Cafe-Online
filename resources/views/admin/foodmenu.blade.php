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
                <h1>Foods Menu</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/redirects') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Menu Makanan</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Menu Makanan</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-header-form">
                                    <form action="{{ url('/uploadfood') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Menu Makanan</label>
                                            <input type="text" name="title" required=""
                                                placeholder="Masukan Nama Makanan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" name="price" required=""
                                                placeholder="Masukan Harga Makanan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" name="image" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Makanan</label>
                                            <input type="text" name="description" required=""
                                                placeholder="Masukan Deskripsi Makanan " class="form-control">
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
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Foto Makanan</th>
                                            <th>Aksi</th>
                                        </tr>

                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->title }}</td>
                                                <td>{{ $data->price }}</td>
                                                <td>{{ $data->description }}</td>
                                                <td><img height="200" width="200"
                                                        src="/foodimage/{{ $data->image }}"></td>

                                                <td><a href="{{ url('/deletemenu', $data->id) }}">Delete</a> |
                                                    <a href="{{ url('/updateview', $data->id) }}">Update</a>
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
    </div>

    @include('admin.adminscript')
</body>

</html>
