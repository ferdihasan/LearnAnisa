<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="widht=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>register anisa</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container"><br>
            <div class="col-md-4 col-md-offset-4">
                <h2 class="text-center"><b>ANISA</b><br>Aplikasi Anak Santri</h2><hr>
                @if (Session('berhasil'))
                <div class="alert alert-success">
                    <b>Pendaftaran berhasil</b>{{ Session('berhasil') }}
                </div>
                {{-- @else
                <div class="alert alert-danger">
                    <b>Data yang anda masukan tidak valid</b>
                </div>      --}}
                @endif

                <form action="{{ route('actionregister') }}" method="POST">
                    @csrf
                    <div class="fromgroup">
                        <label>Nama: </label>
                        <input type="text" name="name" class="form-control" placeholder="name" required>
                    </div>
                    <div class="formgroup">
                        <label>Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="email" required>
                    </div>
                    <div class="formgroup">
                        <label>Password: </label>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary btn-blok">Register</button><hr>

                </form>
                <div>Sudah punya akun? Back to <a href="/" class="text-decoration-none">login</a></div>

            </div>
        </div>
    </body>
</html>
