<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php
                    $data = file("baza.txt");
                    foreach ($data as $line){
                        $trs = explode(";", $line);
                                echo '<tr>';
                        echo '<td>'.$trs[0].'</td>';
                        echo '<td>'.$trs[1].'</td>';
                        echo '<td>'.$trs[2].'</td>';
                        echo '<td>'.$trs[3].'</td>';
                                echo '</tr>';
                    }
                ?>
</body>
</html>