@extends('layout.admin') 

@section('content')
<body>
    <h1 class="text-center mb-4">Edit Data Pegawai</h1>

    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/from-data"> 
                            @csrf 
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
                                aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Umur</label>
                                <input type="text" name="umur" class="form-control" id="exampleInputEmail1" 
                                aria-describedby="emailHelp" value="{{ $data->umur }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" 
                                aria-describedby="emailHelp" value="{{ $data->jabatan }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                    <option selected>{{ $data->jeniskelamin }}</option>
                                    <option value="perempuan">perempuan</option>
                                    <option value="laki-laki">laki-laki</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" 
                                aria-describedby="emailHelp" value="{{ $data->notelepon }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
@endsection