<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <!-- CSS utama -->
    <link rel="stylesheet" href="/css/dashboardadmin.css">

    <!-- FontAwesome untuk icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <!-- SIDEBAR: menu navigasi di sisi kiri -->
    <aside class="sidebar">
        <h2>Menu</h2>
        <ul>
            <!-- Menu Dashboard, icon rumah, aktif saat halaman dashboard -->
            <li class="active"><i class="fa fa-house"></i> Dashboard</li>
            <!-- Menu Aspirasi, icon inbox -->
            <li><i class="fa fa-inbox"></i> Aspirasi</li>
            <!-- Menu Pengguna, icon users -->
            <li><i class="fa fa-users"></i> Pengguna</li>
        </ul>

        <!-- Logout ditempatkan di bawah sidebar -->
        <div class="logout">
            <li>
                <a href="{{ route('logout') }}">
                    <i class="fa fa-right-from-bracket"></i> Logout
                </a>
            </li>
        </div>
    </aside>

    <!-- MAIN: konten utama dashboard -->
    <main class="main">

        <!-- TOPBAR: bar atas, menampilkan judul dan info user -->
        <div class="topbar">
            <div class="title">
                <i class="fa fa-bars"></i> <!-- icon menu -->
                Dashboard Admin
            </div>
            <div class="user">
                Hi, Admin
                <img src="https://i.pravatar.cc/40?img=12"> <!-- avatar user -->
            </div>
        </div>

        <!-- CARDS: ringkasan statistik -->
        <section class="cards">
            <div class="card blue">
                <p>Total Aspirasi</p>
                <h2>120</h2> <!-- jumlah aspirasi -->
            </div>
            <div class="card orange">
                <p>Aspirasi Baru</p>
                <h2>30</h2> <!-- jumlah aspirasi baru -->
            </div>
            <div class="card dark">
                <p>Diproses</p>
                <h2>15</h2> <!-- jumlah aspirasi sedang diproses -->
            </div>
        </section>

        <!-- TABLE: menampilkan daftar aspirasi -->
        <section class="table-box">
            <h3>Daftar Aspirasi</h3>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lampu Kelas Rusak</td>
                        <td>Kebersihan</td>
                        <td>2024-04-20</td>
                        <td><span class="status proses">Diproses</span></td>
                    </tr>
                    <tr>
                        <td>Kebersihan Toilet</td>
                        <td>Fasilitas</td>
                        <td>2024-04-18</td>
                        <td><span class="status baru">Baru</span></td>
                    </tr>
                    <tr>
                        <td>Rak Buku Perpustakaan</td>
                        <td>Fasilitas</td>
                        <td>2024-04-15</td>
                        <td><span class="status selesai">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>
</div>

</body>
</html>
 