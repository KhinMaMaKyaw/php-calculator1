<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>PHP CALCULATOR</h1>
        </div>
        <div class="right">
            
            <form action="" method="POST">
                <input type="text" name="first" placeholder="ENTER NUMBER" required><br>
                <input type="text" name="second" placeholder="ENTER NUMBER" required><br>
                <select name="operator" id="">
                    <option value="add" >ADD</option>
                    <option value="sub" >SUB</option>
                    <option value="mul" >MUL</option>
                    <option value="div" >DIV</option>
                </select><br>
                <input class="button" type="submit" value="SUBMIT" name="submit">
            </form>
            
        </div>
        <div class="result">
        <p>
        <?php
            if(isset($_POST['submit'])){
                $first = $_POST['first'];
                $second = $_POST['second'];
                $operator = $_POST['operator'];
           
                switch($operator){
                    case "add":
                        $result = $first + $second;
                        echo "The addition of two num is {$result}.";
                        break;
                    case "sub":
                        $result = $first - $second;
                        echo "The substruction of two num is {$result}.";
                        break;
                    case "mul":
                        $result = $first * $second;
                    echo "The multiplication of two num is {$result}.";
                        break;
                    case "div":
                        $result = $first / $second;
                        echo "The division of two num is {$result}.";
                        break;
                    default: echo "Invalid operator.";
                }
            }
            ?>
        </p>
        </div>

    </div>
</body>
</html>