<?php

//assert(true);
//assert(false);

//Создать класс исключения MyException и отдельную функцию mythrow которая бросвет исключение
//класса MyException

class MyException extends Exception {
    function __construct()
    {
        $this->message = "Моё исключение";
    }
}



function myThrow()
{
    throw new MyException();
}



try {
    myThrow();
}
catch (MyException $e) {
    echo $e -> getMessage();
}