<?php

/*class Temp {
    public $foo = 'foo';

    public function ura(){
        echo $this->foo;
    }
}

$d = new Temp();
$a = $d->foo;
var_dump($a);
$d->foo = 'asdf';
$d->foo = new Temp();
$d = new Temp();
$c = $d->foo;
var_dump($c);*/

class Urok
{
    public $a;
    public $b;

    public function show()
    {
        return $this->a; // вернем a из свойства
    }
    // Метод для изменения a
    public function men($a)
    {
         $this->a=$a;
    }

    public function masy()
    {
        return [$this->a, $this->b];
    }


}
$n = new Urok;
$n->masy();
var_dump($n);

