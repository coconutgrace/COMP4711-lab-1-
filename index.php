<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        /*
          Include the Student php file
         */
        include ('Student.php');
        /*
          Initalise a student array
         */
        $students = array();
        /*
          Create a student and set the appropriate attributes
          add the student to the array
         */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        /*
          Create a student and set the appropriate attributes
          add the student to the array
         */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        /*
          Create a student and set the appropriate attributes
          add the student to the array
         */
        $third = new Student();
        $third->surname = "Kobunnoi";
        $third->first_name = "Kunlaya";
        $third->add_email('home', 'kunlayakobunnoi@gmail.com');
        $third->add_email('work1', 'kkobunnoi@my.bcit.ca');
        $third->add_grade(80);
        $third->add_grade(80);
        $third->add_grade(80);
        $students['y123'] = $third;
        /*
          Print every student using the student toString method
         */
        foreach ($students as $student)
            echo $student->toString();
        ?>

    </body>
</html>