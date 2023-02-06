<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Students</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                @foreach ($errors->all() as $error )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
                @endif
                <h1>Data Students</h1>
                <form action="{{ url('/students/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" placeholder="Silahkan masukkan nama lengkap anda"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">NIM</label>
                        <input type="text" name="nim" id="nim" placeholder="Silahkan masukkan NIM lengkap anda"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Pilih Gender</option>
                            <option value="L">Pria</option>
                            <option value="P">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name">Address</label>
                        <textarea name="address" id="address" cols="30" rows="10" class="form-control"
                            placeholder="Silahkan masukkan alamat lengkap anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
