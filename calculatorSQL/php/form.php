<?php
require_once "calc.php";
require_once "sql.php";

$a = $_REQUEST["a"];
$b = $_REQUEST["b"];
$s = $_REQUEST["s"];
$result = calculator($a, $b, $s);
if (!empty($a) && !empty($b)) {
     sqlSave($a, $b, $s, $result);// продолжает при обновлении записывать старые данные
}
$story = sqlReturn();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Калькулятор</title>
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <div class="block">
            <form id="forma">
                <label class="vvod"> Первое число 
                    <input class="parametr raz a" name="a" type="number" required 
                    min="-999" max="999" title="Число от -999 до 999" placeholder="введите число А"/>
                </label>
                <select class="operationSelect" name="s">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <label class="vvod"> Второе число 
                    <input class="parametr raz b" name="b" type="number" required 
                    min="-999" max="999" title="Число от -999 до 999" placeholder="введите число Б"/>
                </label>
                <div class="dop">
                    <button type="submit"  class="button">
                        Посчитать
                    </button>
                </div>
                <div class="otvet">
                    Ответ: <?php echo $result?>
                </div>
            </form>
            <div class = "histori">
                <div class = "1 rezalt"><?php $first = viborka($story, 0); echo $first; ?></div>
                <div class = "2 rezalt"><?php $too = viborka($story, 1); echo $too; ?></div>
                <div class = "3 rezalt"><?php $thre = viborka($story, 2); echo $thre; ?></div>
                <div class = "4 rezalt"><?php $forr = viborka($story, 3); echo $forr; ?></div>
                <div class = "5 rezalt"><?php $five = viborka($story, 4); echo $five; ?></div>
            </div>
        </div>
    </body>
</html>