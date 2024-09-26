<!DOCTYPE html>
<html>
<head>
    <title> Laboratorium 1</title>
</head>
<body>

<h1>Polindrome Piramid</h1>
<form method="post">
        <label for="number">Masukkan Bilangan Positif:</label>
        <input type="number" id="number" name="number" min="1" max="100" required>
        <input type="submit" value="Enter">
    </form>

<div class="piramida">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST["number"]);
            
            if ($number > 0) {
                for ($i = 1; $i <= $number; $i++) {
                    $palindrome = "";
                    for ($j = $i; $j > 0; $j--) {
                        $palindrome .= $j;
                    }
                    for ($j = 2; $j <= $i; $j++) {
                        $palindrome .= $j;
                    }
                    echo str_repeat(" ", $number - $i) . $palindrome . "<br>";
                }
            } else {
                echo "Silakan masukkan bilangan positif.";
            }
        }
        ?>
    </div>