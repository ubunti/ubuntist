<?php

class Temp {
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
var_dump($d);

