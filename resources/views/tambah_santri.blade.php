@extends('master')
@section('konten')
    <h2 class="container">Tambah Santri</h2>
    <div class="col-md-4">
        <form class="form-group" action="{{ route('tambah') }}" method="POST">
            @csrf
            <div class="formgroup">
                <label>Nama: </label>
                <input class="form-control" type="text" name="name" placeholder="Name" required>
            </div><br>
            <div class="formgroup">
                <label>Tempat Lahir: </label>
                <input class="form-control" type="text" name="tmp_lahir" placeholder="Tempat Lahir" required>
            </div><br>
            <div class="formgroup">
                <label>Tanggal Lahir: </label>
                <input class="form-control" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required>
            </div><br>
            <div class="formgroup">
                <label>Alamat: </label>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
            </div><br>
            <div class="formgroup">
                <label>No Hp: </label>
                <input class="form-control" type="text" name="no_hp" placeholder="No Hp" required>
            </div><br>
            <div class="formgroup">
            <button class="btn btn-success fa fa-save" type="submit"> Tambah</button>

        </form>
    </div
@endsection
