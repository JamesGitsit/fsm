<?php

/*

James Vela
407-340-4411
jamesjjimmy@yahoo.com

Finite State Machine

*/

Namespace ModThree;

class FSM
{
    private $current = 's0';
    private $final = ['s0' => '0', 's1' => '1', 's2' => '2'];
    private $inputs = ['0','1'];

    public function __construct()
    {

    }

    public function modThree($number = [])
    {
        $this->ResetState();

        $this->input = str_split($number);

        while($this->input)
        {
            $digit = array_shift($this->input);

            if(!in_array($digit, $this->inputs)) {
                return false;
            }

            $this->current = $this->Transition($this->current, $digit);

        }

        return $this->final[$this->current];
    }

    public function Transition($state = [], $digit = [])
    {

        $s0 = ['s0', 's1'];
        $s1 = ['s2', 's0'];
        $s2 = ['s1', 's2'];
        
        return ${$state}[$digit];
        
    }

    private function ResetState()
    {
        $this->current = 's0';
    }

}

?>