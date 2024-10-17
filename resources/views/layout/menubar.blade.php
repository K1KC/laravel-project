{{-- Tempat untuk menu --}}
<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.mahasiswa', $nilai=90) }}">Menu Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dosen', $namadosen='Lecturer') }}">Menu Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.karyawan') }}">Menu Karyawan</a>
                </li>
            </ul>
        </nav>
    </div>
</div>