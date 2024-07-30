
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Surat Akademik Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>FORM PENGAJUAN SURAT AKADEMIK MAHASISWA</h1>

<a type="submit" class="btn btn-primary" href="{{ url('/ajuansurat') }} ">Ajukan Surat</a>

        <div class="info">
            <p>Sistem Informasi Pengajuan Surat Akademik.</p>
            <p>Untuk informasi lebih lanjut, hubungi admin fakultas melalui WhatsApp.</p>
            <a href="{{ url('loginmahasiswa') }}">Login</a>
            <a href="{{ url('registermahasiswa') }}">Register</a>

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
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
    color: #555;
}

select {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    padding: 10px;
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
    text-align: center;
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
