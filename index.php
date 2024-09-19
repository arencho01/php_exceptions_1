<?php

//assert(true);
//assert(false);

//Создать класс исключения MyException и отдельную функцию mythrow которая бросвет исключение
//класса MyException

class MyException extends Exception {
    function __construct()
    {
        $this->message = "Моё исключение";
        parent::__construct();
    }
}



function myThrow()
{
    throw new MyException();
}

//myThrow();