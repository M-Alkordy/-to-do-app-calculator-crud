<?php

class Calc {

    public $num1;
    public $num2;
    public $cal;

    public function __construct($num1Inserted, $num2Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->cal = $calInserted;
    }

    public function calcMethod() {
        switch ($this->cal) {
            case '+':
                $result = $this->num1 + $this->num2;
                break;
            case '-':
                $result = $this->num1 - $this->num2;
                break;
            case '*':
                $result = $this->num1 * $this->num2;
                break;
            case '/':
                if ($this->num2 !=0) {
                    $result = $this->num1 / $this->num2;
                }
                else $result = "Error";
                break;
            default:
                $result = "Error";
                break;
        }
        return $result;
    }

}

?>