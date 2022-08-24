<?php

defined('MOODLE_INTERNAL') || die();

$observers = [
        [

                'eventname' => '\core\event\course_module_created',
                'callback'    => '\mod_mdgen\mdgen_observer::course_module_created',
                'internal' => false,
        ],
        [
                'eventname' => '\core\event\course_module_updated',
                'callback'    => '\mod_mdgen\mdgen_observer::course_module_updated',
                'internal' => false,
        ]
];
