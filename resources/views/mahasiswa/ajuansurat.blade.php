<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Surat Keterangan Aktif</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>FAKULTAS ILMU KOMPUTER</h1>
        </div>
        <h2>FORM SURAT KETERANGAN AKTIF</h2>
        <form method="post">
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <select class="form-control" id="prodi" name="prodi" required>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_surat">Jenis Surat</label>
                <select class="form-control" id="jenis_surat" name="jenis_surat" required>
                    <option value="Magang">Magang</option>
                    <option value="Surat Penelitian">Surat Penelitian</option>
                    <option value="Keterangan Aktif">Keterangan Aktif</option>
                    <option value="Rekomendasi Mahasiswa">Rekomendasi Mahasiswa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="telpon">Telpon</label>
                <input type="text" class="form-control" id="telpon" name="telpon" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="info">
            <h3>Esa Unggul</h3>
            <p>Sistem Informasi Pengajuan Surat Akademik.</p>
            <p>Untuk informasi lebih lanjut, hubungi admin fakultas melalui WhatsApp:</p>
            <a href="https://wa.me/nomor_wa_admin">Hubungi Admin</a>
        </div>
    </div>
</body>
</html>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}

.header {
    background-color: #007BFF;
    color: #fff;
    padding: 15px;
    border-radius: 8px 8px 0 0;
    margin-bottom: 20px;
}

h1, h2 {
    color: #333;
    margin: 0;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-group {
    width: 100%;
    max-width: 400px;
    margin-bottom: 20px;
}

label {
    margin-bottom: 5px;
    color: #555;
    align-self: flex-start;
}

input, select, textarea {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 100%;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.info {
    margin-top: 20px;
    text-align: left;
    background-color: #e9ecef;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.info h3 {
    margin-top: 0;
    color: #007BFF;
}

.info p {
    margin: 5px 0;
    color: #666;
}

.info a {
    color: #007BFF;
    text-decoration: none;
}

.info a:hover {
    text-decoration: underline;
}

</style>
<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    // Assume the form submission is successful
    alert('Form submitted successfully!');
    // You can also redirect the user to another page
    // window.location.href = 'ajuansurat.html';
  });
</script>
