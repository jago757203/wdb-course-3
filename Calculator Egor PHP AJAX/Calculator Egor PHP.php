<<<<<<< HEAD
<html>
    <head>
        <link rel="stylesheet" type= text/css href = "sheetstyle.css">
    </head>
    <body class="bckgrnd">
        <form method="POST"
            <input type="text" name="n1" class="firstinput" id="n1">
            <br>
            <input type= "text" name="n2" class="firstinput" id="n2">
            <br>
            <p><select size="1" class="secondinput" name="oper" id="oper">
             <option disabled>Выберите действие</option>
             <option value="+">+</option>
             <option value="-">-</option>
             <option value="*">*</option>
             <option value="/">/</option>
             </select>
            </p>
            <input type="submit" class="b1">
        </form>  
        
        <?php
        $n1 = $_POST['n1']
        $n2 = $_POST['n2']
        $oper = $_POST['oper']

        if ($_POST['oper']){
            if ($oper=="+"){
                $result=$n1+$n2;
            }
            elseif ($oper=="-"){
             $result=$n1-$n2;
            }
            elseif($oper=="*"){
             $result=$n1*$n2;
            }
            elseif($oper=="/"){
             $result=$n1/$n2;   
            }

        }

        ?>
        <div id="result" name="result" class="firstinput">
             <?php echo $result; ?>
        </div>

    </body>

<html>    






















</html>

=======
<html>
    
    <head>
        <link rel="stylesheet" type= text/css href = "sheetstyle.css">
    </head>
    <body class="bckgrnd">
        <form method="POST"
            <input type="text" name="n1" class="firstinput" id="n1">
            <br>
            <input type= "text" name="n2" class="firstinput" id="n2">
            <br>
            <p> <select size="3" class="secondinput" name="oper" id="oper">
             <option disabled>Выберите действие</option>
             <option value="+">+</option>
             <option value="-">-</option>
             <option value="*">*</option>
             <option value="/">/</option>
             </select>
            </p>
            <input type="submit" class="b1">
        </form>  
        
        <?php
        $n1 = $_POST['n1']
        $n2 = $_POST['n2']
        $oper = $_POST['oper']

        if ($_POST['oper']){
            if ($oper=="+"){
                $result=$n1+$n2;
            }
            elseif ($oper=="-"){
             $result=$n1-$n2;
            }
            elseif($oper=="*"){
             $result=$n1*$n2;
            }
            elseif($oper=="/"){
             $result=$n1/$n2;   
            }

        }

        ?>
        <div id="result" name="result" class="firstinput">
             <?php echo $result; ?>
        </div>

    </body>

<html> 
>>>>>>> ee8dd7b8e90ec8d4d635df03ef44580ed7abfac1