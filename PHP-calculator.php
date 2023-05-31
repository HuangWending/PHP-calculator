<?php
// 检查是否提交了表单
if(isset($_POST['submit'])){
    // 获取表单中的值
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    // 根据运算符执行相应的计算
    switch($operator){
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if($num2 != 0){
                $result = $num1 / $num2;
            } else {
                $result = "除数不能为零";
            }
            break;
        default:
            $result = "无效的运算符";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>简单计算器</title>
</head>
<body>
    <h1>简单计算器</h1>
    <form method="post" action="">
        <input type="number" name="num1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" name="submit" value="计算">
    </form>
    
    <?php
    // 如果有计算结果，则显示结果
    if(isset($result)){
        echo "<h2>结果：".$result."</h2>";
    }
    ?>
</body>
</html>
