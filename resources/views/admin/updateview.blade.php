{{-- <x-app-layout>

</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                    <div class="breadcrumb-item"><a href="{{ url('/foodmenu') }}">Menu Makanan</a></div>
                    <div class="breadcrumb-item">Update Makanan</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Update Makanan {{ $data->title }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-header-form">
                                    <form action="{{ url('/update', $data->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Makanan</label>
                                            <input type="text" name="title" required="" value="{{ $data->title }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Makanan</label>
                                            <input type="text" name="price" required="" value="{{ $data->price }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Makanan</label>
                                            <input type="text" name="description" required="" value="{{ $data->description }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Lama</label>
                                            <img height="350" width="200" src="/foodimage/{{ $data->image }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto Baru</label>
                                            <input type="file" name="image" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                        </div>
                                    </form>
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

