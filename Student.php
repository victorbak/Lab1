<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student
 *
 * @author victor
 */
class Student {
    //put your code here
    function __construc() {
        $this->surname = '';
        $this->first_name  = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which,$address) {
        $this->emails[$which = $address];
    }
    
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}
