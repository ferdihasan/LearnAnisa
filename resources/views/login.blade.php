<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>login anisa</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container"><br>
            <div class="col-md-4 col-md-offset-4">
                <h2 class="text-center"><b>ANISA</b><br>Aplikasi Anak Santri</h2><hr>
                    @if (session('error'))
                    <div class="alert alert-danger">
                    <b>Opps! </b>{{ session('error') }}
                    </div>
                    @endif

                <form action="{{ route('actionlogin') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="masukan email" required>
                    </div>
                    <div class="formgroup">
                        <label>Password: </label>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary btn-blok" >Log In</button>
                    <hr>
                    <p>Lupa password? <a href="#">klik disini!</a></p>
                    <p>Belum punya akun? <a href="register">Register </a>Sekarang!</p>
                </form>
            </div>
        </div>
    </body>
</html>
