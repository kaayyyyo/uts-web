<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="formlogin.css"> <!-- Link CSS jika ada -->
</head> 
<body>
    <div class="container">
        <div class="header">
            <h1>Selamat anda telah login</h1>
        </div>
        
        <form method="post" action="form_php.php">
            <label for="nama"><h3>Nama : </h3></label>
            <input type="text" name="nama" required><br>

            <label for="nim"><h3>Nim : </h3></label>
            <input type="text" name="nim" required><br>

            <label for="gender"><h3>Gender : </h3></label>
            <input type="radio" name="gender" value="Laki-laki" required> Laki-laki<br>
            <input type="radio" name="gender" value="Perempuan" required> Perempuan<br>
            <br>

            <label for="agama"><h3>Agama : </h3></label>
            <select name="agama" id="agama" required>
                <option value="">--pilih--</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>
            <br><br>

            <label for="ekskul"><h3>Ekskul : </h3></label>
            <input type="checkbox" name="ekskul[]" value="futsal" id="futsal">Futsal
            <input type="checkbox" name="ekskul[]" value="Basket" id="Basket">Basket
            <input type="checkbox" name="ekskul[]" value="volly" id="volly">volly
            <br><br>

            <label for="alamat"><h3>Alamat : </h3></label>
            <textarea name="alamat" id="alamat" required></textarea>
            <br><br>
            <input type="submit" value="Selanjutnya">
        </form>
    </div>
</body>
</html>

