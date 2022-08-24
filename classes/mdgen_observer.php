<?php

namespace mod_mdgen;

use core\event\course_module_created;

defined('MOODLE_INTERNAL') || die();

class mdgen_observer
{

    public static function course_module_created(\core\event\course_module_created $event)
    {

        global $DB;

        // get data of event 
        $event_data = $event->get_data();

        // get "other" array (modulname, instanceid, name) 
        $mdgen = $event_data['other'];

        // get modulename of other array 
        $mn = $mdgen['modulename'];

        // only continue if the module name is mdgen
        if ($mn == 'mdgen') {

            // get instanceid of other array
            $newid = $mdgen['instanceid'];

            // get content where instanceid = $newid
            $dbrecord = $DB->get_record('mdgen', ['id' => $newid]);

            // get content part of the database array
            $mdgencontent = $dbrecord->content;

            // insert line breaks and delete &nbsp;
            $structuredtextold = str_replace("</p>", "\n", $mdgencontent);
            $structuredtext = str_replace("&nbsp;", "", $structuredtextold);

            // remove html tags
            $finaltext = strip_tags($structuredtext);

            // get filename from db 
            $filename = $dbrecord->filename;

            // create .md filename
            $md_filename    =   $filename . '.md';

            // open the file, where content has to stay and write the content in the file
            $myfile = fopen("../../generator/slides/" . $md_filename, "a") or die("Unable to open file!");
            fwrite($myfile, $finaltext);
            fclose($myfile);

            // create .html filename
            $html_filename = $filename . '.html';

            // open the file, where the generation has to stay  
            $myfile2 = fopen("../../generator/_slides/" . $html_filename, "a") or die("Unable to open file!");
            // no exec(cp), because linux and windows have different commands
            $file1 = file_get_contents('../../generator/waiting.html');
            fwrite($myfile2, $file1);
            fclose($myfile2);

            chdir('../../generator/slides');
            $exe = 'npm run static -- slides/' . $md_filename;
            execInBackground($exe);
        }
    }

    public static function course_module_updated(\core\event\course_module_updated $event)
    {

        global $DB;

        // get data of event 
        $event_data = $event->get_data();

        // get "other" array (modulname, instanceid, name) 
        $mdgen = $event_data['other'];

        // get modulename of other array 
        $mn = $mdgen['modulename'];

        // only continue if the module name is mdgen
        if ($mn == 'mdgen') {

            // get instanceid of other array
            $newid = $mdgen['instanceid'];

            // get content where instanceid = $newid
            $dbrecord = $DB->get_record('mdgen', ['id' => $newid]);

            // get content part of the database array
            $mdgencontent = $dbrecord->content;

            // insert line breaks and delete &nbsp;
            $structuredtextold = str_replace("</p>", "\n", $mdgencontent);
            $structuredtext = str_replace("&nbsp;", "", $structuredtextold);

            // remove html tags
            $finaltext = strip_tags($structuredtext);

            // get filename from db 
            $filename = $dbrecord->filename;

            // create .md filename
            $md_filename    =   $filename . '.md';

            // open the file, where content has to stay and write the content in the file
            $myfile = fopen("../../generator/slides/" . $md_filename, "w") or die("Unable to open file!");
            fwrite($myfile, $finaltext);
            fclose($myfile);

            // create .html filename
            $html_filename = $filename . '.html';

            // open the file, where the generated file has to stay  
            $myfile2 = fopen("../../generator/_slides/" . $html_filename, "w") or die("Unable to open file!");
            // no exec(cp), because linux and windows have different commands
            $file1 = file_get_contents('../../generator/waiting.html');
            fwrite($myfile2, $file1);
            fclose($myfile2);

            chdir('../../generator/slides');
            $exe = 'npm run static -- slides/' . $md_filename;
            execInBackground($exe);
        }
    }
}
