@extends('master')

@section('konten')

<h4>Selamat Datang <b>{{ Auth::user()->name }}</b>, Anda Login Sebagai <b>{{ Auth::user()->role }}</b></h4>
<table  width="100%" class="text-center">
    <tr>
        <td><a href="/santri" class="text-decoration-none"><img src="img/logo/santri.png" alt="logo santri.png" width="100"><br>Santri</a></td>
        <td><a href="/orang_tua" class="text-decoration-none"><img src="img/logo/orang_tua.png" alt="logo orang_tua.png" width="100"><br>Orang Tua</a></td>
        <td><a href="/ustadz" class="text-decoration-none"><img src="img/logo/ustadz.png" alt="logo ustadz.png" width="100"><br>Ustadz</a></td>
        <td><a href="/kelas" class="text-decoration-none"><img src="img/logo/kelas.png" alt="logo kelas.png" width="100"><br>Kelas</a></td>
    </tr>
    <tr>
        <td><a href="/mapel" class="text-decoration-none"><img src="img/logo/mapel.png" alt="logo mapel.png" width="100"><br>Mata Pelajaran</a></td>
        <td><a href="/semester" class="text-decoration-none"><img src="img/logo/semester.png" alt="logo semester.png" width="100"><br>Semester</a></td>
        <td><a href="/thn_pelajaran" class="text-decoration-none"><img src="img/logo/tahun_pelajaran.png" alt="logo tahun_pelajaran.png" width="100"><br>Tahun Pelajaran</a></td>
    </tr>
</table>
@endsection
