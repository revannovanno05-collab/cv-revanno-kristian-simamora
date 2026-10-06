<?php 
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-sussces'>Terima kasih
        <strong>$nama</strong>, pesan anda telah berhasil dikirim ke server SMKN 5 Batam!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Revanno -SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
        <div class="profile-info">
        <div class="avatar"><img src="kamen.jpg" alt=""></div>
    <div>
    <h1 style="margin: 0;">Revanno kristian simamora</h1>
    <p style="margin: 5px 0 0 0; color: gray;">Siswa Latihan Komputer dan jaringan SMKN 5 Batam</p>
    </div>
    </div>
    <nav>
        <a href="#profil">Home</a>
        <a href="#skills">skills</a>
        <a href="#kontak">contact</a>
        <button id="btn-theme" onclick="toggleTheme()">🌙 Dark Mode</button>
    </nav>
        </header>
        <div class="main-content">
            <div class="left-column">
                <div class="card" id="profil">
                    <h2>PROFIL</h2>
                    <h3>👩‍🎓BIODATA</h3>
                    <P>Siswa aktif dan praktisi di bidang teknik komputer dan jaringan dengan fokus pada administrasi server dan keamanan jaringan.</P>
                    <h3>👤PENDIDIKAN</h3>
                    <ul>
                        <li>lulus SD Thabita Batam</li>
                        <li>Lulusan SMP N 27 Batam</li>
                        <li>Siswa aktif di SMKN 5 BAtam</li>
                    </ul>
                    <h3>💼PENGALAMAN PELAJAR</h3>
                    <ul>
                        <li>Merakit pcx.</li>
                        <li>Merakit kabel lan dan juga bisa </li>
                    </ul>
                </div>
            </div>
            <div class="right-column">
                <div class="card" id="skills">
                    <h2>NETWORK SKILL</h2>
                    <div class="skill-item">
                        <span class="skill-name">Mikrotik RouterOS</span>
                        <div class="progress-bar"><div class="progress-fill" style="width: 50%;"></div></div>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Crimping kabel</span>
                        <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Membuat Laporan</span>
                        <div class="progress-bar"><div class="progress-fill" style="width: 75%;"></div></div>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Merakit pc</span>
                        <div class="progress-bar"><div class="progress-fill" style="width: 60%;"></div></div>
                    </div>
                </div>
                <div class="card" id="kontak">
                    <h2>FORM KONTAK</h2>
                    <?php echo $pesan_status; ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">nama lengkap:</label>
                            <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="txt_email" placeholder="Masukkan email..." required>
                        </div>
                        <div class="form-group">
                            <label for="pesam">Pesan:</label>
                            <textarea type="pesan" id="pesan" name="txt_pesan" rows="4" placeholder="Tuliskan pesan..." required></textarea>
                        </div>
                        <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
</body>
</html>