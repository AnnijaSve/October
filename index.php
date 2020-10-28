<?php

abstract class Dog
{
    public abstract function getName(): string;

    public abstract function getGender(): string;

}


interface FatherInterface
{
    public function getFathersName(): string;
}


interface MotherInterface
{
    public function getMothersName(): string;
}

interface HasSameMother
{
    public function SameMother($dog): string;

}

class Dog1 extends Dog implements MotherInterface, FatherInterface, HasSameMother
{
    function getName(): string
    {
        return 'Max';
    }

    public function getGender(): string
    {
        return 'male';
    }

    public function getMothersName(): string
    {
        return 'Mother`s name: Lady';
    }

    public function getFathersName(): string
    {
        return 'Father`s name: Rocky';
    }

    public function SameMother($dog4): string
    {
        return "True";
    }
}

class Dog2 extends Dog implements MotherInterface, FatherInterface, HasSameMother
{
    function getName(): string
    {
        return 'Rocky';
    }

    public function getGender(): string
    {
        return 'male';
    }

    public function getMothersName(): string
    {
        return 'Mother`s name: Molly';
    }

    public function getFathersName(): string
    {
        return 'Fathers`s name: Sam';
    }

    public function SameMother($dog8): string
    {
        return 'True';
    }
}

class Dog3 extends Dog
{
    function getName(): string
    {
        return 'Sparkly';
    }

    public function getGender(): string
    {
        return 'male';
    }
}

class Dog4 extends Dog implements MotherInterface, FatherInterface, HasSameMother
{
    function getName(): string
    {
        return 'Buster';
    }

    public function getGender(): string
    {
        return 'male';
    }

    public function getMothersName(): string
    {
        return 'Mother`s name: Lady';
    }

    public function getFathersName(): string
    {
        return 'Fathers`s name: Sparky';
    }

    public function SameMother($dog1): string
    {
        return 'True';
    }
}

class Dog5 extends Dog
{
    function getName(): string
    {
        return 'Sam';
    }

    public function getGender(): string
    {
        return 'male';
    }
}

class Dog6 extends Dog
{
    function getName(): string
    {
        return 'Lady';
    }

    public function getGender(): string
    {
        return 'female';
    }
}

class Dog7 extends Dog
{
    function getName(): string
    {
        return 'Molly';
    }

    public function getGender(): string
    {
        return 'female';
    }
}

class Dog8 extends Dog implements MotherInterface, FatherInterface, HasSameMother
{
    function getName(): string
    {
        return 'Coco';
    }

    public function getGender(): string
    {
        return 'female';
    }

    public function getMothersName(): string
    {
        return 'Mother`s name: Molly';
    }

    public function getFathersName(): string
    {
        return 'Fathers`s name: Buster';
    }

    public function SameMother($dog2): string
    {
        return 'True';
    }
}

class DogCollection
{
    private $dogs = [];

    public function add(Dog $dog): void
    {
        $this->dogs[] = $dog;
    }

    public function all(): array
    {
        return $this->dogs;
    }
}

$dogCollection = new DogCollection();
$dogCollection->add(new Dog1());
$dogCollection->add(new Dog2());
$dogCollection->add(new Dog3());
$dogCollection->add(new Dog4());
$dogCollection->add(new Dog5());
$dogCollection->add(new Dog6());
$dogCollection->add(new Dog7());
$dogCollection->add(new Dog8());


/** @var Dog $dog */
foreach ($dogCollection->all() as $dog) {
    echo $dog->getName() . ', ';
    echo $dog->getGender() . ' ';
    echo PHP_EOL;
    if ($dog instanceof MotherInterface) {
        echo $dog->getMothersName(), PHP_EOL;
    } else {
        echo 'Mother`s name unknown' . PHP_EOL;
    }
    if ($dog instanceof FatherInterface) {
        echo $dog->getFathersName(), PHP_EOL;
    } else {
        echo 'Father`s name unknown' . PHP_EOL;
    }
    if ($dog instanceof HasSameMother) {
        echo $dog->SameMother($dog), PHP_EOL;

    }
}

echo 'Second Test:' . PHP_EOL;
$dog1 = new Dog1();
$dog4 = new Dog4();
$result = $dog1->SameMother($dog4);
echo $result;