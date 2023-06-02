<?php
abstract class Cars{
    abstract function printCarName();
}

class car1 extends cars{
    public function printCarName()
    {
        echo "car1";
    }
}

class car2 extends Cars{
    public function printCarName()
    {
        echo "car2";
    }
}

$car1 = new car1();
$car1->printCarName();
$car2 = new car2();
$car2->printCarName();

//meore----------------------------
echo '<br>';
class Foo{
    static $name = "saxeli";
    static function intro(): string{
        return "rame";
    }
}
echo Foo::$name.'<br>';
echo Foo::intro();
