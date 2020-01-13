<?php
namespace Oxygen\TutorElements;

class CourseLastUpdate extends \OxygenTutorElements {

	function name() {
        return 'Last Update';
    }

    function tutor_button_place() {
        return "single_course";
    }

    /* function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    } */

    function render($options, $defaults, $content) {
        include_once otlms_get_template('course/last-update');
    }

    function class_names() {
        return array('tutor-course-last-update', 'oxy-tutor-element');
    }


    function controls() {

    }

}

new CourseLastUpdate();