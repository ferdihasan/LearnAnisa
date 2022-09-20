{{-- @dd($santri) --}}
@extends('master')
@section('konten')
    <h2 class="container">Tampil Data Santri</h2>
    <div class="container">
        <a href="/santri/tambah" class="btn btn-success fa fa-plus"> Tambah</a>
    </div>
    <div class="container">
        <table width="100%" class="table">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </thead>
            <?php $no = 1?>
            @foreach($santri as $s)
            <tr>
                <td><?= $no?></td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->tmp_lahir }}</td>
                <td>{{ $s->tgl_lahir }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->no_hp }}</td>
                <td>
                    <a href="/santri/edit/{{ $s->id }}" class="btn btn-primary btn-sm fa fa-pencil"></a>
                    <a href="/santri/hapus/{{ $s->id }}" class="btn btn-danger btn-sm fa fa-trash" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"></a>
                </td>
            </tr>
            <?php $no++ ?>
            @endforeach
        </table>
    </div>
@endsection
