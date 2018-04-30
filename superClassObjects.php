<?php 
abstract class Cars
{
    protected $color;
    protected $type;
    abstract protected function changeType($type);
    abstract protected function improveEquipment();    
}
Interface Go
{
    public function drive();
    public function brake();
    public function park();
}

class Car extends Cars implements Go
{
    public $transmission;
    public $wheelsize;
    public function __construct($type, $color, $transmission, $wheelsize)
    {
        $this->type = $type;
        $this->color = $color;
        $this->transmission = $transmission;
        $this->wheelsize = $wheelsize;
    }
    public function improveEquipment()
    {
        return $this->transmission = 'AT';
        return $this->wheelsize = 19;
    }
    public function changeType($type)
    {
        $this->type = $type;
    }    
    public function drive() 
    {
        echo "Step on a gas!<br>";
    }
    public function brake() 
    {
        echo "Step on a brake!<br>";
    }
    public function park()
    {
        echo "go to parking!<br>";
    }
}
echo "<h2>Автомобили</h2>";
$car1 = new Car('sedan', 'white', 'MT', 15);
$car1->improveEquipment();
$car1->drive();
$car2 = new Car('sedan', 'white', 'MT', 15);
$car2->improveEquipment();
$car2->changeType('hatchback');
$car2->park();

abstract Class TVs
{
    protected $screenSize;
    protected $name;
    protected $color;
    abstract protected function changeColor($color);
    abstract protected function changeSize($screenSize);
}

Interface OnOff 
{
    public function On();
    public function Off();
}

Class TV extends TVs implements OnOff
{
    private $tecnology;
    protected $discount;
    public function __construct($name, $tecnology, $screenSize)
    {
        $this->name = $name;
        $this->color = $color = 'black';
        $this->tecnology = $tecnology;
        $this->screenSize = $screenSize;
    }
    public  function changeColor($color)
    {
        $this->color = $color;
    }

    public  function changeSize($screenSize)
    {
        $this->screenSize = $screenSize;
    }
    public  function getDiscount()
    {
        if ($this->color == 'white') {
            return $this->discount = 0.3;
        }
    }
    public function On()
    {
        echo "watch TV!<br>";
    }
    public function Off()
    {
        echo "See you soon!<br>";
    }
}
echo "<h2>Телевизоры</h2>";
$tv1 = new Tv('LG', 'LCD', 32);
$tv1->changeSize(42);
$tv1->On();
$tv2 = new Tv('Samsung', 'LED', 42);
$tv2->changeColor('white');
$tv2->getDiscount();
$tv2->Off();

abstract Class Pens 
{
    protected $brand;
    protected $paintColor = 'blue';
    protected $inkThickness;    
    abstract protected function changePaint($paintColor);
}

Interface HowToWrite
{
    public function write();
}

Class Pen extends Pens implements HowToWrite
{
    public function __construct($brand, $inkThickness)
    {
        $this->brand = $brand;
        $this->inkThickness = $inkThickness;
    }
    public  function changePaint($paintColor)
    {
        $this->paintColor = $paintColor;
    }
    public function write()
    {
        echo "Hello World!<br>";
    }
}
echo "<h2>Ручки</h2>";
$pen1 = new Pen('Parker', 0.03);
$pen1->changePaint ('black');
$pen2 = new Pen('KOH-I-NOOR', 0.08);
$pen2->write();


Class Ducks 
{
    public $age;
    public $gender;    
}

Interface Areal
{
    public function getAreal();
}

Class Duck extends Ducks implements Areal
{
    public $genus;
    public $areal;
    public function __construct($gender, $age, $genus)
    {
        $this->gender = $gender;
        $this->age = $age;
        $this->genus = $genus;
    }
    public function getAreal()
    {
        switch ($this->genus) {
            case 'Anatinae':
                $this->areal = 'South America';
                echo "$this->areal<br>";
                break;
            case 'Dendrocygninae':
                $this->areal = 'Asia';
                echo "$this->areal<br>";
                break;
            case 'Stictonettinae':
                $this->areal = 'Australia';
                echo "$this->areal<br>"; 
                break;
            case 'Tadorninae':
                $this->areal = 'Africa';
                echo "$this->areal<br>"; 
                break;
            }    
    }
}
echo "<h2>Утки</h2>";
$duck1 = new Duck ('male', 2, 'Anatinae');
$duck1->getAreal();
$duck2 = new Duck ('female', 1, 'Tadorninae');
$duck2->getAreal();

abstract Class Goods {
    public $price;
    public $discount;
    public $delivery = 250;
    public $weight;
    public function __construct($price, $weight) 
    {
        $this->price = $price;
        $this->weight = $weight;
    }
    public function getPrice()
    {
        if ($this->weight > 10) {
            $this->discount = 0.1;
            return "с учетом скидки: ".round($this->price - ($this->price) * $this->discount);
        } else {    
            $this->discount = 0;
            return $this->price;
        }    
    }
    public function getDelivery()
    {
        if ($this->discount == 0.1) {
            return ($this->delivery + 50);
        } else {
            return $this->delivery;
        }
    }
    public function getFullDescription()
    {
        $this->getDescription();
        echo "Цена: {$this->getPrice()} Доставка: {$this->getDelivery()}";
    }
    abstract public function getDescription();
}

Class Potatoes extends Goods
{  
    public function getDescription()
    {
        echo "<b>Картофель мытый</b>: ";    
    }
}

Class Cabbage extends Goods
{
    public function getDescription()
    {
        echo "<b>Капуста свежая</b>: ";        
    }
}

Class Watermelon extends Goods
{
    public function getDescription()
    {
        echo "<b>Арбуз астраханский</b>: ";        
    }
}
echo "<h2>Продовольственные товары</h2>";
$potato = new Potatoes(400, 11);
$potato->getFullDescription();
echo "<br>";
$cabbage = new Cabbage (400, 9);
$cabbage->getFullDescription();    
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task 10</title>
</head>
<body style="font-family: arial;">
    <div style="width: 90%; margin: 0 auto">
        <h2>PHP lesson 10</h2>
        <p><strong>1. </strong>
        Полиморфизм - наследование общих для всех последующих классов свойств и методов общего класса. Свойства дочерних классов при этом далее не наследуются другими классами. <br>
        Наследование - это дерево наследований, где от одного суперкласса наследуются только основные свойства методы, которые наследуются другими, общими для всех последующих классов классами. Иногда ветка наследований может быть всего одна, а иногда наследование разбивается на несколько, порой сильно отличающихся друг от друга веток.</p>
        <p><strong>2. </strong>
        Абстрактные классы - классы, по которым нельзя создать объект. Они используются в качестве шаблонов для создания дочерних классов. Абстрактный класс может содержать определенные свойства и абстрактные/неабстрактные методы, которые должны быть переопределены в дочерних классах. <br>
        Интерфейсы - также являются абстракциями, но, в отличие от абстрактных классов, они не могут иметь свойств и могут встраиваться (имплементироваться) в классы. В класс могут быть имплементированы несколько интерфейсов</p>
    </div>
</body>
</html>