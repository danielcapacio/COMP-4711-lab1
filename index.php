<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color: lightgreen">
        <h1>Silly Students - COMP 4711 Lab 1 - Set 4R</h1>
        <hr/>
        <?php
            /* display Students */
            include('Student.php');
            $students = array();
            
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
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
            
            /* adding self */
            $third = new Student();
            $third->surname = "Capacio";
            $third->first_name = "Daniel";
            $third->add_email('home','rocketdan@superfoods.io');
            $third->add_email('work','rocketdan@work.ca');
            $third->add_grade(100);
            $third->add_grade(95);
            $third->add_grade(90);
            $third->add_grade(90);
            $students['a00961774'] = $third;
            
            /* orders $students in key sequence */
            ksort($students);
            
            /* loop through $students array to display contact information */
            foreach ($students as $student) {
                echo $student->toString();
            }
        ?>
        <hr/>
        <p>Due: Sunday, Sep 10, 17:30 PST</p>
    </body>
</html>
