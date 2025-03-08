<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h2>Kalkulator BMI</h2>
        <form method="POST" action="proses.php">
            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <input type="radio" id="pria" name="gender" value="pria" checked>
                <label for="pria">Pria</label>
                <input type="radio" id="wanita" name="gender" value="wanita">
                <label for="wanita">Wanita</label>
            </div>

            <label for="berat">Berat Badan (kg)</label>
            <input type="number" name="berat" id="berat" placeholder="Masukkan berat badan">

            <label for="usia">Usia (tahun)</label>
            <input type="number" name="usia" id="usia" placeholder="Minimal 18 tahun" min="18">

            <label for="tinggi">Tinggi Badan (cm)</label>
            <input type="number" name="tinggi" id="tinggi" placeholder="Masukkan tinggi badan">

            <div class="button-group">
                <button type="submit" class="hitung">Hitung BMI</button>
                <button type="reset" class="reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>