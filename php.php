<?php

abstract class User
{
	public function __construct(preotected string $name)
	{
		//make first letter uppercase and the rest lowercase
		$this->name = ucfirst(strtolower($name));
	}

	public function greet(): string
	{
		return "Hello, my name is" . $this->name;
	}
	abstract public function job(): string;
}

class Student extends User
{
	public function __construct(string $name, private string $course)
	{
		parent::__construct($name);
	}
	public function job(): string
	{
		return "I lern " . $this->course;
	}
}

class Teacher extends User 
{
	public function __construct(string $name, private array $teachingCourses)
	{
		parent::__construct($name);
	}
	public function job(): string
	{
		return "I teach " . implode(", ", $this->teachingCourses);
	}
}

$students = [
	new Student("Alice", "Computer Science"),
	new Student("BOB", "Computer Science"),
	new Student("Charlie", "Business Studies"),
];

$teacher = [
	new Teacher("Dan", ["Computer Science", "Information Security"]),
	new Teacher("Erin", ["Computer Science", "3D Graphics Programming"]),
	new Teacher("Frankie", ["Online Marketing", "Business Studies", "E-commerce"]);
];

function show(User ...$user):void
{
	echo $user[0]::class . "s: \n|;

	foreach ($users as $user) {
	echo $user->greet() . ", " . $user->job() . "\n";
	}
}

show(...$students);
show(...$teachers);

?>
	
	
