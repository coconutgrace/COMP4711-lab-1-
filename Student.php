<?php

/*
 * Description of Student
 * This class represents a student, it contains information such as name, email, and grades.
 * 
 * @author Kunlaya
 */

class Student {
    /*
      Constructor to make a student
     */

    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /*
      Method to assign email to appropriate type ('work', 'home')
     */

    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /*
      Method to add grade
     */

    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /*
      Method to calculate grade average for a student
     */

    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /*
      Method to print a student object, returns a string that prints all the information
      of a student in a nice manner
     */

    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
