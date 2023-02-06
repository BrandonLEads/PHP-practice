<?php 

class Person {

		public $name = '';
		public $name2;
		public $name3;
		
		
		function name($newname = NULL)
		{
		if(!is_null($newname)){
		$this->name = $newname;
		}
		
		return $this->name;
		}
		
		
		
		
		
}

$ed = new Person;
$ed->name('Edison');
echo "Hello, {$ed->name} <br/>";
$tc = new Person;
$tc->name('Crapper');
echo "Look out below {$tc->name} <br /><br />";

$name2 = new Person;
$name2->name('Bob');
echo " Hello, {$name2->name} <br/>";
$tc = new Person;
$tc->name('Brandon');
echo "My name is {$tc->name} <br /><br />";

$name3 = new Person;
$name3->name('Robert');
echo " Hi, {$name3->name} <br/>";
$tc = new Person;
$tc->name('Doug');
echo "What is {$tc->name} doing?  <br/>";

?>