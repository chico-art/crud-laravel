<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-light">
<main class="">
  <!-- PESAN SUKSES -->
  @if(Session::has('success'))
  <div class="pt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  @endif
  
  <!-- START DATA -->
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href="{{ route('crud.create') }}" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th class="col-md-1">No</th>
          <th class="col-md-2">Jenis Bisnis</th>
          <th class="col-md-2">Nama</th>
          <th class="col-md-3">Email</th>
          <th class="col-md-2">Jenis Layanan</th>
          <th class="col-md-1">No Tlp</th>
          <th class="col-md-2">Kebutuhan</th>
          <th class="col-md-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = $data->firstItem() ?>
        @foreach ($data as $item)
        <tr>
          <td>{{ $i }}</td>
          <td>{{ $item->jenis_bisnis }}</td>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->jenis_layanan }}</td>
          <td>{{ $item->no }}</td>
          <td>{{ $item->kebutuhan }}</td>
          <td>
            <a href="{{ route('crud.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('crud.destroy', $item->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
            </form>
          </td>
        </tr>
        <?php $i++ ?>
        @endforeach
      </tbody>
    </table>
    {{ $data->links() }}
  </div>
  <!-- AKHIR DATA -->
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script>
  // Menghilangkan pesan sukses setelah 5 detik
  setTimeout(function() {
    var alert = document.querySelector('.alert');
    if (alert) {
      alert.classList.remove('show');
      alert.classList.add('fade');
      setTimeout(function() {
        alert.remove();
      }, 500); // waktu untuk efek fade-out
    }
  }, 5000); // waktu dalam milidetik
</script>
</body>
</html>
