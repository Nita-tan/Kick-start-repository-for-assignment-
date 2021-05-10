<!-- Explain the advantages and disadvantages of multiple inheritance:  -->
<!-- Advantages:
-can have multiple superclass
-clean and readable
-write less code
-can have multiple superclass

Disadvantages:
-if the method of the class have the exact same name, it lead to a lot of confusion when we compile
- some programing language don't support to use multiple inheritance 
-high maintenance because of  a lot of superclass inherit  -->

<!-- PHP haven't support multiple inhabitant yet.
 However with the help of interface or trait in PHP it can implement its.   -->
<!-- 
The program below is the trait of multiple inheritance  -->

<?php

class title extends welcome {
	use name;
	public function text() {
		echo "\nWelcome to PHP";
	}
	}

trait name {
	public function nam() {
		echo "\nDear!";
	}
	}

class welcome {
public function greating() {
	echo "Hello";
}
}

$result = new title();
$result->greating();
$result->nam();
$result->text();



class title1 extends welcome1 {
	use name;
	public function text1() {
		echo "\nWelcome to PHP";
	}
	}

trait name1 {
	public function text1() {      //to avoid error change "text1" to
										// something that is different form "class title1 extends welcome function"
		echo "\nDear!";
	}
	}

class welcome1{
public function greating1() {
	echo "Hello";
}
}

$result = new title1();
$result->greating1();
$result->text1();
$result->text1();
?>
?>





