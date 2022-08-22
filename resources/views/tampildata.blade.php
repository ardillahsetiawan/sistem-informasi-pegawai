@extends('layout.admin')
@section('content')
<body>
  <h1 class="text-center mb-4">Edit Data Pegawai</h1>

  <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <a href="/pegawai" class="btn btn-success mb-3">Kembali</a>
          <div class="card">
            <div class="card-body">
              <form action="/updatedata/{{ $data->id }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" value="{{ $data->nama }}">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jeniskelamin" value="{{ $data->jeniskelamin }}">
                  <option selected>{{ $data->jeniskelamin }}</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No. Telpon</label>
                  <input type="number" name="notelpon" class="form-control" id="notelpon" value="{{ $data->notelpon }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
@endsection