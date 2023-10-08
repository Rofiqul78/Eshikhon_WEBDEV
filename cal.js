$(document).ready(function () {
    let currentInput = "";
    let operator = "";
    let result = 0;

    function updateDisplay() {
        $("#display").val(currentInput);
    }

    $(".digit").click(function () {
        currentInput += $(this).text();
        updateDisplay();
    });

    $(".operator").click(function () {
        operator = $(this).text();
        if (currentInput !== "") {
            result = parseFloat(currentInput);
            currentInput = "";
        }
    });

    $("#equals").click(function () {
        if (currentInput !== "") {
            const secondOperand = parseFloat(currentInput);
            switch (operator) {
                case "+":
                    result += secondOperand;
                    break;
                case "-":
                    result -= secondOperand;
                    break;
                case "*":
                    result *= secondOperand;
                    break;
                case "/":
                    if (secondOperand !== 0) {
                        result /= secondOperand;
                    } else {
                        result = "Error";
                    }
                    break;
            }
            currentInput = result.toString();
            updateDisplay();
            operator = "";
        }
    });

    $("#clear").click(function () {
        currentInput = "";
        operator = "";
        result = 0;
        updateDisplay();
    });
});
