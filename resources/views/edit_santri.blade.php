{{-- @dd($santri) --}}
@extends('master')
@section('konten')
    <h2>Update Santri atas nama: {{ $santri->name }}</h2>
    <div class="col-md-4">
        <form action="{{ route('actionedit') }}" class="formgroup" method="POST">
            @csrf
            <input type="hidden" name="id_santri" value="{{ $santri->id}}">
            <div class="formgroup">
                <label>Nama: </label>
                <input class="form-control" type="text" name="name" placeholder="Name" value="{{ $santri->name }}" required>
            </div><br>
            <div class="formgroup">
                <label>Tempat Lahir: </label>
                <input class="form-control" type="text" name="tmp_lahir" placeholder="Tempat Lahir" value="{{ $santri->tmp_lahir }}" required>
            </div><br>
            <div class="formgroup">
                <label>Tanggal Lahir: </label>
                <input class="form-control" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="{{ $santri->tgl_lahir }}" required>
            </div><br>
            <div class="formgroup">
                <label>Alamat: </label>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" value="{{ $santri->alamat }}" required>
            </div><br>
            <div class="formgroup">
                <label>No Hp: </label>
                <input class="form-control" type="text" name="no_hp" placeholder="No Hp" value="{{ $santri->no_hp }}" required>
            </div><br>
            <div class="formgroup">
            <button class="btn btn-success fa fa-save" type="submit"> Update</button>
        </form>
    </div>
@endsection
