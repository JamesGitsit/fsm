<?php

/*

James Vela
407-340-4411
jamesjjimmy@yahoo.com

Simple Tester

*/

Namespace ModThree;

Use ModThree\FSM;

class SimpleTester
{

    public function __construct()
    {
        $class_methods = get_class_methods(__CLASS__);

        foreach ($class_methods as $method_name) {
            if($method_name != "__construct")
            {
                call_user_func(array($this, $method_name));
            }
        }
    }

    public function TestStateS0_0()
    {
        
        $fsm = new FSM();

        if($this->AssertSame($fsm->Transition("s0", "0"), "s0"))
        {
            echo __FUNCTION__ . ' with input 0 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 0 Failed.<br>';

        }

    }

    public function TestStateS0_1()
    {
        
        $fsm = new FSM();

        if($this->AssertSame($fsm->Transition("s0", "1"), "s1"))
        {
            echo __FUNCTION__ . ' with input 1 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 1 Failed.<br>';

        }

    }
    
    public function TestStateS1_0()
    {
        
        $fsm = new FSM();

        if($this->AssertSame($fsm->Transition("s1", "0"), "s2"))
        {
            echo __FUNCTION__ . ' with input 0 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 0 Failed.<br>';

        }

    }

    public function TestStateS1_1()
    {
        
        $fsm = new FSM();

        if($this->AssertSame($fsm->Transition("s1", "1"), "s0"))
        {
            echo __FUNCTION__ . ' with input 1 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 1 Failed.<br>';

        }

    }
    

    public function TestStateS2_0()
    {
        
        $fsm = new FSM();

        if($this->AssertSame($fsm->Transition("s2", "0"), "s1"))
        {
            echo __FUNCTION__ . ' with input 0 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 0 Failed.<br>';

        }

    }

    public function TestStateS2_1()
    {
        
        $fsm = new FSM();

        if($this->AssertSame($fsm->Transition("s2", "1"), "s2"))
        {
            echo __FUNCTION__ . ' with input 1 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 1 Failed.<br>';

        }

    }

    public function TestBadInput()
    {
        
        $fsm = new FSM();

        if($this->AssertFalse($fsm->modThree("11112")))
        {
            echo __FUNCTION__ . ' with input 11112 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 11112 Failed.<br>';

        }

    }

    public function TestGoodInput()
    {
        
        $fsm = new FSM();

        if($this->AssertNotFalse($fsm->modThree("1111")))
        {
            echo __FUNCTION__ . ' with input 1111 passed.<br>';

        } else {
            
            echo __FUNCTION__ . ' with input 1111 Failed.<br>';

        }

    }

    public function AssertSame($var1 = [], $var2 = [])
    {
        return $var1 === $var2;
    }

    public function AssertFalse($var1 = [])
    {
        return $var1 === false;
    }

    public function AssertNotFalse($var1 = [])
    {
        return $var1 !== false;
    }

}

?>