   <?php

   class OutOfRangeException extends Exception {}

   class Person {
       private string $name;
       private int $age;

       public function __construct(string $name, int $age) {
           $this->name = $name;
           $this->setAge($age);
       }

       public function setAge(int $age): void {
           if ($age < 0 || $age > 150) {
               throw new OutOfRangeException("Возраст должен быть в диапазоне от 0 до 150.");
           }
           $this->age = $age;
       }

       public function getName(): string {
           return $this->name;
       }

       public function getAge(): int {
           return $this->age;
       }
   }

   // Пример использования
   try {
       $person = new Person("Иван", 25);
       echo "Имя: " . $person->getName() . ", Возраст: " . $person->getAge() . PHP_EOL;

       $person->setAge(200); // Неверное значение возраста
   } catch (OutOfRangeException $e) {
       echo "Ошибка: " . $e->getMessage() . PHP_EOL;
   }

   try {
       $person->setAge(-5); // Неверное значение возраста
   } catch (OutOfRangeException $e) {
       echo "Ошибка: " . $e->getMessage() . PHP_EOL;
   }
   
