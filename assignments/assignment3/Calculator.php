<?php
class Calculator {
    public function calc($operator, $num1 = 'none', $num2 = 'none') {
        if ($num1 === 'none' || $num2 === 'none' || !in_array($operator, ['+', '-', '*', '/'])) {
            return '<p>Cannot perform operation. You must have three arguments. A string for the operator (+,-,*,/) and two integers or floats for the numbers.</p>';
        }
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return '<p>Cannot perform operation. Both operands must be valid numbers.</p>';
        }
        $num1 = $num1 + 0;
        $num2 = $num2 + 0;

        switch ($operator) {
            case '+':
                return '<p>The calculation is ' . $num1 . ' + ' . $num2 . '. The answer is ' . ($num1 + $num2) . '.</p>';
            case '-':
                return '<p>The calculation is ' . $num1 . ' - ' . $num2 . '. The answer is ' . ($num1 - $num2) . '.</p>';
            case '*':
                return '<p>The calculation is ' . $num1 . ' * ' . $num2 . '. The answer is ' . ($num1 * $num2) . '.</p>';
            case '/':
                if ($num2 == 0) {
                    return '<p>The calculation is ' . $num1 . ' / ' . $num2 . '. The answer is cannot divide a number by zero.</p>';
                }
                return '<p>The calculation is ' . $num1 . ' / ' . $num2 . '. The answer is ' . ($num1 / $num2) . '.</p>';
            default:
                return '<p>Invalid operation.</p>';
        }
    }
}
?>