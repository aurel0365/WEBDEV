<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Array Bilangan</h1>
    <form method="post">

        <label for="angka1">nums1 = </label><br>
        <input type="text" name="angka1" id ="angka1"><br><br/>

        <label for="m">m = </label><br>
        <input type="number" name="m" id ="m"><br><br/>

        <label for="angka2">nums2 = </label><br>
        <input type="text" name="angka2" id ="angka2"><br><br/>

        <label for="n">n = </label><br>
        <input type="number" name="n" id ="n"><br><br/>

        <button type="submit">Enter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $angka1Input = $_POST['angka1'];
        $m = intval($_POST['m']);
        $angka2Input = $_POST['angka2'];
        $n = intval($_POST['n']);

        $angka1 = array_map('intval', explode(',', $angka1Input));
        $angka2 = array_map('intval', explode(',', $angka2Input));

        merge($angka1,$m,$angka2,$n);

        echo"<h3> Hasil Penggabungan : </h3>";
        echo "output : [ ". implode(",",$angka1). "]";
    }

        function merge(&$angka1, $m,$angka2,$n){
            $i = $m - 1;
            $j = $n - 1;
            $k = $m + $n - 1;

                while ($i >= 0 && $j >= 0){
                    if ($angka1[$i] == $angka2[$j]){
                        $angka1[$k] = $angka1[$i];
                        $i--;
                    }else {
                        $angka1[$k] = $angka2[$j];
                        $j--;
                    }
                    $k--;
                }

                while ($j>=0){
                    $angka1[$k] = $angka2[$j];
                    $j--;
                    $k--;
                }
    }
    ?>
</body>
</html>
