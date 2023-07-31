<?php

    class Calc {

        public $opertator;
        public $num1;
        public $num2;


        public function __construct(string $opertator, int $one, int $two) {
            $this->opertator = $opertator;
            $this->num1 = $one;
            $this->num2 = $two;

        }

        public function calculator(){
            switch( $this->opertator) {
                case 'add' :
                    $result = $this->num1 + $this->num2;
                    return $result;
                    break;
                case 'sub' :
                    $result = $this->num1 - $this->num2;
                    return $result;
                    break;
                case 'div' :
                    $result = $this->num1 / $this->num2;
                    return $result;
                    break;
                case 'mul' :
                    $result = $this->num1 * $this->num2;
                    return $result;
                    break;
                default :
                    echo "error!";
                    break;
            }
        }
    }

    

?>