<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>

<body>
    <?php
        function bracket($chr) {
            $stack = [];
            $leftBrackets = ['(', '[', '{'];
            $rightBrackets = [')', ']', '}'];

            for ($i = 0; $i < strlen($chr); $i++) {
                $char = $chr[$i];

                if (in_array($char, $leftBrackets)) {
                    array_push($stack, $char);
                } elseif (in_array($char, $rightBrackets)) {
                    if (empty($stack)) {
                        return "NO";
                    }

                    $lastBracket = array_pop($stack);
                    $matchBracket = $leftBrackets[array_search($char, $rightBrackets)];

                    if ($lastBracket != $matchBracket) {
                        return "NO";
                    }
                }
            }

            return (empty($stack)) ? "YES" : "NO";
        }

        $task1 = "{[()]}";
        echo "Output: " . bracket($task1);

        $task2 = "{[(])}";
        echo " <br> Output: " . bracket($task2);

        $task3 = "{(([])[])[]}";
        echo "<br> Output: " . bracket($task3);
        ?>

</body>

</html>