<html>
<head>
	<title>COMP 4711 - LAB 1</title>
</head>
<body>
	<h1><b>COMP4711 : LAB 1</b></h1>
	<p>
		<?php
			include('Student.php');
			
			//create an empty student array
			$students = array();
			
			//dummy data - Student 1
			$first = new Student();
			$first->surname = "Doe";
			$first->first_name = "John";
			$first->add_email('home','john@doe.com');
			$first->add_email('work','jdoe@mcdonalds.com');
			$first->add_grade(65);
			$first->add_grade(75);
			$first->add_grade(55);
			
			//uses catapi to generate random cat picture
			$first->change_picture("http://thecatapi.com/api/images/get?format=src&type=gif");
			$students['j123'] = $first;
			
			//dummy data - Student 2
			$second = new Student();
			$second->surname = "Einstein";
			$second->first_name = "Albert";
			$second->add_email('home','albert@braniacs.com');
			$second->add_email('work1','a_einstein@bcit.ca');
			$second->add_email('work2','albert@physics.mit.edu');
			$second->add_grade(95);
			$second->add_grade(80);
			$second->add_grade(50);
			$students['a456'] = $second;
			
			//dummy data - Student 3
			$studentMe = new Student();
			$studentMe->surname = "Kao";
			$studentMe->first_name = "Paul";
			$studentMe->add_email('home', 'home@email.com');
			$studentMe->add_email('work', 'work@email.com');
			$studentMe->add_grade(50);
			$studentMe->add_grade(75);
			$studentMe->add_grade(85);
			$students['a000'] = $studentMe;
			
			//sort array by key
			ksort($students);
			
			//output each student in the array
			foreach($students as $student)
				echo $student->toString();
		?>
	</p>
</body>

</html>