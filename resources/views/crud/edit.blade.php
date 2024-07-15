<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>
<div class="container">
    <h2>Edit Data</h2>
    <form action="{{ route('crud.update', $data->id) }}" method="POST" onsubmit="return validateForm()">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label for="jenis_bisnis">Jenis Bisnis</label>
            <input type="text" name="jenis_bisnis" id="jenis_bisnis" class="form-control" value="{{ old('jenis_bisnis', $data->jenis_bisnis) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $data->nama) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $data->email) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="jenis_layanan">Jenis Layanan</label>
            <input type="text" name="jenis_layanan" id="jenis_layanan" class="form-control" value="{{ old('jenis_layanan', $data->jenis_layanan) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="no">No</label>
            <input type="text" name="no" id="no" class="form-control" value="{{ old('no', $data->no) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="kebutuhan">Kebutuhan</label>
            <textarea name="kebutuhan" id="kebutuhan" class="form-control">{{ old('kebutuhan', $data->kebutuhan) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script>
    function validateForm() {
        var jenisLayanan = document.getElementById('jenis_layanan').value;
        if (jenisLayanan === '') {
            alert('Jenis Layanan tidak boleh kosong');
            return false;
        }
        return true;
    }
</script>
</body>
</html>
