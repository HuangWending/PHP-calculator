# PHP-calculator
Web服务器端计算器程序
<?php 和 ?>：这对标记表示其中包含的是PHP代码。

if(isset($_POST['submit'])){}：检查是否提交了名为 "submit" 的表单字段。

$num1 = $_POST['num1']; 和 $num2 = $_POST['num2'];：获取表单中名为 "num1" 和 "num2" 的值。

$operator = $_POST['operator'];：获取表单中名为 "operator" 的运算符值。

switch($operator){}：根据运算符执行相应的计算。

case "+": 和 break;：如果运算符是 "+"，执行后面的代码，并跳出 switch 语句。

if($num2 != 0){} 和 else{}：检查除数是否为零，如果不为零则执行除法计算，否则将结果设置为 "除数不能为零"。

default:：如果运算符不是任何已知的运算符，执行后面的代码。

<!DOCTYPE html> ... </html>：这部分代码是HTML代码，用于显示一个简单的表单和计算结果。

<form method="post" action=""> ... </form>：定义一个提交方法为 POST 的表单，用于输入数字和选择运算符。

<input type="submit" name="submit" value="计算">：一个提交按钮，用于触发表单提交。

if(isset($result)){} 和 echo "<h2>结果：".$result."</h2>";：如果有计算结果，显示结果。

这是一个PHP计算器程序，通过表单输入数字和运算符，然后根据运算符执行相应的计算并显示结果。
