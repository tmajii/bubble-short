<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort</title>
</head>
<body>
    <h2>Bubble Sort</h2>
    
    <form method="POST">
        <label>Masukkan angka (pisahkan dengan koma):</label><br>
        <input type="text" name="numbers" value="64, 34, 25, 12, 22, 11, 90, 5" size="50"><br><br>
        <button type="submit">Urutkan</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST['numbers'];
        $array = array_map('trim', explode(',', $input));
        $array = array_map('intval', $array);
        
        echo "<p><b>Array awal:</b> " . implode(", ", $array) . "</p>";
        
        // Implementasi Bubble Sort
        $n = count($array);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        
        echo "<p><b>Array terurut:</b> " . implode(", ", $array) . "</p>";
    }
    ?>

    