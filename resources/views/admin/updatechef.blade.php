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
                <h1>Chef</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/redirects') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/viewchef') }}">Chef</a></div>
                    <div class="breadcrumb-item">Update Chef</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Update Chef {{ $data->name }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-header-form">
                                    <form action="{{ url('/chefupdate', $data->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Chef</label>
                                            <input type="text" name="name" required="" value="{{ $data->name }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Spesialisasi</label>
                                            <input type="text" name="specialist" required="" value="{{ $data->specialist }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Lama</label>
                                            <img height="350" width="200" src="/chefimage/{{ $data->image }}">
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
