<?php
namespace Oxygen\TutorElements;

class CourseInstructors extends \OxygenTutorElements {

	function name() {
        return 'Instructors';
    }

    function tutor_button_place() {
        return "single_course";
    }

    /* function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    } */

    function render($options, $defaults, $content) {
        tutor_course_instructors_html();
    }


    function class_names() {
        return array('tutor-course-instructors', 'oxy-tutor-element');
    }


    function controls() {

    }

}

new CourseInstructors();