<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-6 col-xs-offset-3">
                <h1>Dense Ranking</h1>
                <?php
                    function denseRanking($jum, $score, $getScore) {
                    $rankings = array();
                    foreach ($getScore as $getScores) {
                        $mergeScore = array_values(array_unique(array_merge($score, array($getScores))));
                        // ----- array desc ---------
                        rsort($mergeScore);

                        $ranking = array_search($getScores, $mergeScore) + 1;
                        $rankings[] = $ranking;
                    }

                    return $rankings;
                    }

                    $jum = 7;
                    $score = [100, 100, 50, 40 , 40, 20, 10];
                    $getScore = [5, 25, 50, 120];

                    echo "Nilai yang didapatkan : " . $jum;
                    foreach($getScore as $data){
                        echo $data . ", ";
                        }

                    $result = denseRanking($jum, $score, $getScore);
                    echo "<br> Hasil peringkat GITS : " . implode(', ', $result);
                    ?>
            </div>
        </div>
    </div>
</body>

</html>