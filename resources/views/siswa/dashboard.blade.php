<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="/css/dashboardsiswa.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- TOPBAR -->
<header class="topbar">
    <div class="left">
        <span class="menu">☰</span>
        <h2>Dashboard Siswa</h2>
    </div>

    <div class="right">
        <!-- Nama user -->
        <span class="user"><i class="fa-solid fa-user"></i> {{ auth()->user()->username }}</span>

        <!-- Logout pakai form POST -->
        <form action="{{ route('logout') }}" method="GET" class="logout-form">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </button>
        </form>
    </div>
</header>

<!-- CONTENT -->
<div class="container">

    <h1 class="welcome">Selamat datang, <b>{{ auth()->user()->username }} (X RPL 1)</b></h1>

    <!-- INFO BOX -->
    <div class="cards">
        <div class="card blue">
            <p>Total Aspirasi</p>
            <h2>{{ $total_aspirasi }}</h2>
        </div>
        <div class="card orange">
            <p>Menunggu</p>
            <h2>{{ $aspirasi_menunggu }}</h2>
        </div>
        <div class="card green">
            <p>Diproses</p>
            <h2>{{ $aspirasi_diproses }}</h2>
        </div>
        <div class="card teal">
            <p>Selesai</p>
            <h2>{{ $aspirasi_selesai }}</h2>
        </div>
    </div>

    <!-- BUTTON -->
    <div class="submit-box">
        <button class="submit-btn">+ Ajukan Aspirasi</button>
    </div>

    <!-- TABLE -->
    <div class="table-box">
        <h3>Riwayat Aspirasi</h3>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Detail Aduan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aspirasi as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori->nama_kategori }}</td>
                    <td>{{ $item->isi }}</td>
                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td><span class="status {{ $item->status }}" style="text-transform: capitalize">{{ $item->status }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
