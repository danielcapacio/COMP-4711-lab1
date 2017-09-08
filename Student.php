<?php

/**
 * Description of a Student.
 * 
 * Properties include surname, first name, a set of email addresses, and a set of grades.
 * Functions include adding emails, adding grades, calculating grades average, and formatting
 * the contact report info.
 *
 * @author danielcapacio
 * 07/09/2017
 */
class Student {
    /**
     * Constructor for the Student class.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Email to add for a Student.
     * @param string $which type of email - e.g. 'work', 'home', etc.
     * @param string $address email address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Grade to add for a Student.
     * @param double $grade grade to add - e.g. 87
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates a Student's average grade.
     * @return double average grade for a Student
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Formats contact information for an individual Student.
     * @return string student information
     */
    function toString() {
        $firstName = $this->first_name;
        $surname = $this->surname;
        $displayName = '<pre>' . 
                            '<h2>' . 
                                $firstName . ' ' . $surname . 
                            '</h2>' . 
                       '</pre>';
        $info = 'Average grade: (' . $this->average() . ")\n";
        foreach ($this->emails as $which=>$what) {
            $info .= $which . ': '. $what. "\n";
        }
        $info .= "\n\n";
        $displayContact = '<pre>' . $info . '</pre>';
        
        return $displayName . $displayContact;
    }
}
