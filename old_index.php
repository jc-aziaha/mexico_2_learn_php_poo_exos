<?php

    class Person
    {
        protected string $firstName;
        protected string $lastName;
        protected string $favoriteMeal;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal)
        {
            $this->firstName    = $firstName;
            $this->lastName     = $lastName;
            $this->favoriteMeal = $favoriteMeal;
        }

        public function getFirstName(): string
        {
            return $this->firstName;
        }

        public function setFirstName(string $firstName): void
        {
            $this->firstName = $firstName;
        }

        public function getLastName(): string
        {
            return $this->lastName;
        }

        public function setLastName(string $lastName): void
        {
            $this->lastName = $lastName;
        }

        public function getFavoriteMeal(): string
        {
            return $this->favoriteMeal;
        }

        public function setFavoriteMeal(string $favoriteMeal): void
        {
            $this->favoriteMeal = $favoriteMeal;
        }

        public function presentation(): string
        {
            return "Je m'appelle {$this->firstName} {$this->lastName} et j'adore {$this->favoriteMeal}.<br/>";
        }
    }

    class Employee extends Person
    {
        protected int|float $salary;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal, int|float $salary)
        {
            $this->firstName    = $firstName;
            $this->lastName     = $lastName;
            $this->favoriteMeal = $favoriteMeal;
            $this->salary       = $salary;
            // parent::__construct($firstName, $lastName, $favoriteMeal);
        }

        public function increaseSalary(int|float $percentage): void
        {
            $this->salary = $this->salary * (1 + $percentage / 100);
        }

        public function getSalary(): int|float
        {
            return $this->salary;
        }

        public function setSalary(int|float $salary): void
        {
            $this->salary = $salary;
        }
    }

    $employee1 = new Employee("Keanu", "Reeves", "de la pizza", 100000);
    $employee1->setSalary(1000000);
    $employee1->increaseSalary(20);

    echo $employee1->getSalary();






    // $person1 = new Person("Harry", "Potter", "de la pizza");
    // $person2 = new Person("James", "Bond", "des sushi");

    // echo $person1->presentation();
    // echo $person2->presentation();

    // $person1->setFavoriteMeal("du couscous");
    // $person2->setFavoriteMeal("la raclette");

    // echo "-------------------Après changement----------------------<br/>";

    // echo $person1->presentation();
    // echo $person2->presentation();



