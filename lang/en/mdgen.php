<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     mod_mdgen
 * @category    string
 * @copyright   2022 Lisa Jeske 
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Alphabetical sorting (comments)

// Deprecated since 4.0.
$string['infosyntax'] = 'Syntax information';
$string['printheading'] = 'Display mdgen name';
$string['printheadingexplain'] = 'Display mdgen name above content?';

// Informationen zur Syntax
$string['headlines'] = '<h5> Headings';
$string['headlinesdes'] = '<li> To create a headline, add a hashtag (#) before a word or phrase.</li>
<li>The number of hashtags used should correspond to the headline level.</li>
<li>For example, to create a level three heading (HTML: h3), use three number characters (for example, ### My Heading). </li><br><hr>';

$string['bolditalic'] = '<h5> Formatting: bold and italic';
$string['bolditalicdes'] = '<li> To make text bold, add two asterisks or underscores before and after a word or phrase. </li>
<li> To italicize text, insert an asterisk or underscore before and after a word or phrase. </li>
<li> To emphasize text simultaneously using bold and italics, add three asterisks or underscores before and after a word or phrase. </li><br><hr>';

$string['lists'] = '<h5> (Un)formatted lists';
$string['listsdes'] = '<li> To create an ordered list, add rows with numbers followed by dots. </li>
<li> The numbers do not have to be in numerical order, but the list should start with number one. </li>
<li> To create an unsorted list, insert hyphens (-), asterisks (*) or plus signs (+) in front of the entries. </li><br><hr>';

$string['code'] = '<h5> Code';
$string['codedes'] = '<li> To mark a word or phrase as code, enclose it in backticks (`). </li>
<li> To mark a word or phrase as Java code, enclose it in three backticks, java, and another three backticks (``java ```). </li><br><hr>';

$string['newslide'] = '<h5> Horizontal lines ';
$string['newslidedes'] = '<li>  To include a horizontal line, insert three asterisks (***). </li><br><hr>';

$string['link'] = '<h5> Include link';
$string['linkdes'] = '<li> To create a link, enclose the link text in square brackets 
(e.g. [Moodle]) and then directly specify the URL in brackets (e.g. (https://moodle.de/)).</li>
<li> Example: [Moodle](https://moodle.de/) </li><br><hr>';

$string['slide'] = '<h5> Separate slides';
$string['slidedes'] = '<li> The separator `---` creates sections (left / right navigation).</li>
<li> The separator `----` creates subpages (up / down navigation).</li><br><hr>';

$string['more'] = '<h6> For more syntax examples, see: ';
$string['moredes'] = '<a href="https://www.markdownguide.org/basic-syntax/">More examples</a>';

// Markdown Editor Informationsicon 
$string['modulename_help'] = 'The Markdown Editor module allows a teacher to create a Markdown Editor web resource using the Text Editor. A Markdown Editor module can display mainly headings, tables or formatting. Moreover, it is also possible to include code fragments, images or tasks. 

The advantages of using the Markdown Editor module over the Page module are that the simple Markdown syntax can be used to create consistent presentation scripts using the Reveal.js framework. 

A Markdown editor module can be used

* to make interactive scripts vivid and consistent 
* to easily implement formatting of the scripts 

For more information about Markdown syntax, just click "Syntax information" when creating a Markdown editor module';

// Standard 
$string['configdisplayoptions'] = 'Select all options that should be available, existing settings are not modified. Hold CTRL key to select multiple fields.';
$string['content'] = 'Markdown generator content';
$string['contentheader'] = 'Content';
$string['createmdgen'] = 'Create a new mdgen resource';
$string['displayoptions'] = 'Available display options';
$string['displayselect'] = 'Display';
$string['displayselectexplain'] = 'Select display type.';
$string['indicator:cognitivedepth'] = 'mdgen cognitive';
$string['indicator:cognitivedepth_help'] = 'This indicator is based on the cognitive depth reached by the student in a mdgen resource.';
$string['indicator:cognitivedepthdef'] = 'mdgen cognitive';
$string['indicator:cognitivedepthdef_help'] = 'The participant has reached this percentage of the cognitive engagement offered by the mdgen resources during this analysis interval (Levels = No view, View)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'mdgen social';
$string['indicator:socialbreadth_help'] = 'This indicator is based on the social breadth reached by the student in a mdgen resource.';
$string['indicator:socialbreadthdef'] = 'mdgen social';
$string['indicator:socialbreadthdef_help'] = 'The participant has reached this percentage of the social engagement offered by the mdgen resources during this analysis interval (Levels = No participation, Participant alone)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['legacyfiles'] = 'Migration of old course file';
$string['legacyfilesactive'] = 'Active';
$string['legacyfilesdone'] = 'Finished';
$string['modulename'] = 'Markdown Editor';
$string['modulename_link'] = 'Placeholder';
$string['modulenameplural'] = 'mdgens';
$string['optionsheader'] = 'Display options';
$string['page-mod-mdgen-x'] = 'Any mdgen module mdgen';
$string['mdgen:addinstance'] = 'Add a new mdgen resource';
$string['mdgen:view'] = 'View mdgen content';
$string['pluginadministration'] = 'mdgen module administration';
$string['pluginname'] = 'Markdown Editor';
$string['popupheight'] = 'Pop-up height (in pixels)';
$string['popupheightexplain'] = 'Specifies default height of popup windows.';
$string['popupwidth'] = 'Pop-up width (in pixels)';
$string['popupwidthexplain'] = 'Specifies default width of popup windows.';
$string['printintro'] = 'Display mdgen description';
$string['printintroexplain'] = 'Display mdgen description above content?';
$string['printlastmodified'] = 'Display last modified date';
$string['printlastmodifiedexplain'] = 'Display last modified date below content?';
$string['privacy:metadata'] = 'The mdgen resource plugin does not store any personal data.';
$string['search:activity'] = 'Markdown Editor';
