<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body>
    <main class="container">
        @if($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
       
        
        <form action="{{ url('crud') }}" method="post" onsubmit="return validateForm()">
            @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="jenis_bisnis" class="col-sm-2 col-form-label">Jenis Bisnis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jenis_bisnis" id="jenis_bisnis" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jenis_layanan" class="col-sm-2 col-form-label">Jenis Layanan</label>
                    <div class="col-sm-10">
                        <select name="jenis_layanan" id="jenis_layanan" class="form-control" required>
                            <option value="">-Pilih layanan-</option>
                            <option value="cacssas">cacssas</option>
                            <option value="fedaca">fedaca</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no" class="col-sm-2 col-form-label">No Tlp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no" id="no">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kebutuhan" class="col-sm-2 col-form-label">Kebutuhan</label>
                    <div class="col-sm-10">
                        <textarea name="kebutuhan" id="kebutuhan" class="form-control" cols="70" rows="5"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
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
