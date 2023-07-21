<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-6 col-xs-offset-3">
                <h1>Sloane Function</h1>
                <form method="post">
                    Masukkan Angka : <input type="text" name="input"
                        value="<?php echo isset($_POST['input']) ? $_POST['input'] : ''; ?>">
                    <input type="submit" name="submit" value="Submit">
                </form>
                <?php
            function sloane($n) {
                return $n * ($n + 1) / 2 + 1;
            }

            function hitungAngka($n) {
                $array = [];
                for ($i = 0; $i < $n; $i++) {
                    $array[] = sloane($i);
                }
                return $array;
            }

            if (isset($_POST['submit'])) {
                $input = isset($_POST['input']) ? (int)$_POST['input'] : 0;
                if ($input > 0) {
                    $array = hitungAngka($input);
                    $output = implode('-', $array);
                    echo "Hasil : " . $output;
                }
            }
        ?>
            </div>
        </div>
    </div>

</body>

</html>