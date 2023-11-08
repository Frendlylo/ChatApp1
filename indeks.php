<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header style="text-align: center; color: #061a05;">School Chat</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nama Depan</label>
                        <input type="text" name="fname" placeholder="Masukan nama" required>
                    </div>
                    <div class="field input">
                        <label>Nama Belakang</label>
                        <input type="text" name="lname" placeholder="Masukan nama" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Alamat Email</label>
                    <input type="text" name="email" placeholder="Masukan Email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukan password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Pilih Gambar</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Sudah Mendaftar? <a href="login.php">Masuk Sekarang</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>

</body>

</html>