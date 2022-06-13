<?php
function miniCalc($one, $two, $operator) {
    $result = "Error!";
    $zero = "Can't divide by zero";
    #number validation
    if(!is_numeric($one) || !is_numeric($two)) {
        $result = "Invalid input.";
    } else {
        #number operation
        switch ($operator) {
            case "+":
                $result = $one + $two;
                break;
            case "-":
                $result = $one - $two;
                break;
            case "*":
                $result = $one * $two;
                break;
            case "/":
                $result = $two == "0" ? $zero : ($one / $two);
                break;
            case "%":
                $result = $two == "0" ? $zero : ($one % $two);
                break;
            default:
                $result = "Unsupported operator.";
            break;
        }
    }
    return is_float($result) ? number_format($result, 2) : $result;
}
echo miniCalc("5", "9", "-");
?>
