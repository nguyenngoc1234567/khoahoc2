<?php

class person
{
    //thuoc tinh
    public $name = '';
    public $age = 0;

    // phuong thuc 


    public function sayHello()
    {
        return  'Xinh chao cac ban  ';
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
}
//khoi tao doi tuong 
$person_1 = new person();

//thiết lập giá trị cho thuộc tính age và name
$person_1->age = 20;
$person_1->name = 'ngoc';
// gọi các phương thức trong lớp Person

echo $person_1->sayHello();
echo '<br>';
echo $person_1->getAge();
echo '<br>';
echo $person_1->getName();
