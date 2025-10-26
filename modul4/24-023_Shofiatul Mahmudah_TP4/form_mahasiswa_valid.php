<?php
$errors = array();
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input
    $nim = trim($_POST['nim']);
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $jurusan = $_POST['jurusan'];
    $password = trim($_POST['password']);
    $ipk = trim($_POST['ipk']);

    // ✅ Validasi NIM
    if (empty($nim))
        $errors['nim'] = "NIM wajib diisi!";
    elseif (!is_numeric($nim))
        $errors['nim'] = "NIM harus berupa angka!";
    elseif (strlen($nim) != 10)
        $errors['nim'] = "NIM harus 10 digit!";

    // ✅ Validasi Nama
    if (empty($nama))
        $errors['nama'] = "Nama wajib diisi!";
    elseif (!preg_match("/^[a-zA-Z\s']+$/", $nama))
        $errors['nama'] = "Nama hanya boleh huruf dan spasi!";

    // ✅ Validasi Email (regex)
    $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/";
    if (empty($email))
        $errors['email'] = "Email wajib diisi!";
    elseif (!preg_match($email_pattern, $email))
        $errors['email'] = "Format email tidak valid! (contoh: user@mail.com)";

    // ✅ Validasi Password (minimal 8 karakter, huruf & angka)
    if (empty($password))
        $errors['password'] = "Password wajib diisi!";
    elseif (strlen($password) < 8)
        $errors['password'] = "Password minimal 8 karakter!";
    elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password))
        $errors['password'] = "Password harus mengandung huruf dan angka!";

    // ✅ Validasi Jurusan
    if ($jurusan == "-1")
        $errors['jurusan'] = "Jurusan wajib dipilih!";

    // ✅ Validasi IPK
    if (empty($ipk))
        $errors['ipk'] = "IPK wajib diisi!";
    elseif (!is_numeric($ipk))
        $errors['ipk'] = "IPK harus berupa angka!";
    elseif ($ipk < 0 || $ipk > 4)
        $errors['ipk'] = "IPK harus antara 0.00–4.00!";

    // ✅ Jika tidak ada error
    if (empty($errors))
        $success = true;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi Lanjutan Data Mahasiswa</title>
    <style>
        body {font-family: Arial, sans-serif; margin: 20px;}
        .field {margin-bottom: 10px;}
        label {display: inline-block; width: 130px;}
        .error {color: red;}
        .success {color: green; font-weight: bold;}
        input[type="text"], input[type="password"], select {padding: 5px; width: 230px;}
    </style>
</head>
<body>

<h2>Form Input Data Mahasiswa (Validasi Lanjutan)</h2>

<?php
if ($success) {
    echo "<p class='success'>✅ Data berhasil dikirim tanpa error!</p>";
    echo "<h3>Data Mahasiswa:</h3>";
    echo "NIM: $nim <br>";
    echo "Nama: $nama <br>";
    echo "Email: $email <br>";
    echo "Jurusan: $jurusan <br>";
    echo "IPK: $ipk <br>";
} else {
?>
<form method="post" action="form_mahasiswa_valid.php">
    <div class="field">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="<?php echo htmlspecialchars($_POST['nim'] ?? ''); ?>">
        <span class="error"><?php echo $errors['nim'] ?? ''; ?></span>
    </div>

    <div class="field">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($_POST['nama'] ?? ''); ?>">
        <span class="error"><?php echo $errors['nama'] ?? ''; ?></span>
    </div>

    <div class="field">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
        <span class="error"><?php echo $errors['email'] ?? ''; ?></span>
    </div>

    <div class="field">
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($_POST['password'] ?? ''); ?>">
        <span class="error"><?php echo $errors['password'] ?? ''; ?></span>
    </div>

    <div class="field">
        <label for="jurusan">Jurusan:</label>
        <select name="jurusan">
            <option value="-1">-- Pilih Jurusan --</option>
            <option value="Teknik Informatika" <?php if(($_POST['jurusan'] ?? '')=="Teknik Informatika") echo "selected"; ?>>Teknik Informatika</option>
            <option value="Sistem Informasi" <?php if(($_POST['jurusan'] ?? '')=="Sistem Informasi") echo "selected"; ?>>Sistem Informasi</option>
            <option value="Teknik Elektro" <?php if(($_POST['jurusan'] ?? '')=="Teknik Elektro") echo "selected"; ?>>Teknik Elektro</option>
        </select>
        <span class="error"><?php echo $errors['jurusan'] ?? ''; ?></span>
    </div>

    <div class="field">
        <label for="ipk">IPK:</label>
        <input type="text" name="ipk" value="<?php echo htmlspecialchars($_POST['ipk'] ?? ''); ?>">
        <span class="error"><?php echo $errors['ipk'] ?? ''; ?></span>
    </div>

    <div class="field">
        <label></label>
        <input type="submit" value="Kirim">
        <input type="reset" value="Reset">
    </div>
</form>
<?php } ?>

</body>
</html>
