<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type= text/css href = "sheetstyle.css">
        <script>
            
             function send(event) {
                 event.preventDefault();
                 event.preventDefault();
                 fetch("Calculator Egor PHP.php", {method: "POST", body: new FormData(document.forms[0])})
                 .then(response => {
                     return response.text();
                 })
                 .then(result => {
                     document.querySelector("#result").innerHTML=result;
                 })
             }
        </script>
    </head>

        <body class="bckgrnd">
        <form method="post">
           <p>
               <b class = "text"> Введите число:</b>
               <br>
               <input type = "text" size="40" class = "firstinput" name="n1"/>
            </p>

            <p> 
            
             <select size="1" class="secondinput" name="oper">
             <option disabled>Выберите действие</option>
             <option value="+">+</option>
             <option value="-">-</option>
             <option value="*">*</option>
             <option value="/">/</option>
             </select>
            
            </p>
            
             <p>
            
            <b class = "text">Введите число:</b>
            <br>
            <input type = "text" size="40" class="firstinput" name="n2"/>

            </p>

            <input type="button" onclick="send(event)" class="b1" value="Отправить"/>
        </form> 
        
        <?php

        $connection=mysqli_connect("localhost", "root", "", "notebook");
        mysqli_query($connection, "INSERT INTO users(username, password) VALUES('igor', MD5("zxc"))");
        
        $resource=mysqli_query($connection, "select * from users");

        $users=[];
        foreach($resource as $row) {
        $users[]=$row;
        /* $row
           [
           id =>1,
           "username" => "petr"
           "password" => "1234"
           "created => "2019-10-30 16:37:12"
           ]
           echo $row["username"];
           */    
        }

        ?>

            
            <div id="result" class="firstinput">Результат</div>
             
       

    </body>

<html>    






















</html>

