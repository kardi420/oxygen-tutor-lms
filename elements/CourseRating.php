<?php
namespace Oxygen\TutorElements;

class CourseRating extends \OxygenTutorElements {

	function name() {
        return 'Course Rating';
    }

    function tag() {
        return $this->headingTagChoices();
    }

    function tutor_button_place() {
        return "single_course";
    }

    /* function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    } */

    function render($options, $defaults, $content) {
        include_once otlms_get_template('course/rating');
    }


    function class_names() {
        return array('course_title', 'entry-title', 'oxy-tutor-element');
    }


    function controls() {

    }

}

new CourseRating();