<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil</h2>
        <div class="hasil-box">
            <?php
            $gender = $_POST['gender'];
            $berat = $_POST['berat'];
            $usia = $_POST['usia'];
            $tinggi = $_POST['tinggi'] / 100;

            $bmi = $berat / ($tinggi * $tinggi);

            if ($gender == "pria") {
                if ($bmi < 18.5) {
                    $hasil = "Berat Badan Kurang";
                } else if ($bmi >= 18.5 && $bmi <= 24.9) {
                    $hasil = "Berat Badan Normal";
                } else if ($bmi >= 25 && $bmi <= 29.9) {
                    $hasil = "Berat Badan Berlebih";
                } else {
                    $hasil = "Obesitas";
                }
            } else {
                if ($bmi < 18.0) {
                    $hasil = "Berat Badan Kurang";
                } else if ($bmi >= 18.0 && $bmi <= 23.9) {
                    $hasil = "Berat Badan Normal";
                } else if ($bmi >= 24 && $bmi <= 28.9) {
                    $hasil = "Berat Badan Berlebih";
                } else {
                    $hasil = "Obesitas";
                }
            }
            ?>
            <h3><?php echo $hasil; ?></h3>
            <p class="bmi-score">BMI: <?php echo number_format($bmi, 1); ?></p>
            <p class="bmi-message">
                <?php 
                if ($hasil == "Berat Badan Normal") {
                    echo "Anda memiliki berat badan ideal. <br>Good job!!";
                } else {
                    echo "Perhatikan pola makan dan gaya hidup sehat untuk menjaga berat badan ideal.";
                }
                ?>
            </p>
           
        </div>


        <p class="disclaimer">
            BMI tidak sepenuhnya mewakili diagnosis menyeluruh dari kesehatan tubuh dan risiko penyakit seseorang. Anda perlu konsultasi lebih lanjut mengenai risiko dan kekhawatiran terkait berat badan Anda.
        </p>

        
    </div>
</body>
</html>