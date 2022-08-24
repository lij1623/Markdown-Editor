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
$string['printheading'] = 'Display mdgen name';
$string['printheadingexplain'] = 'Display mdgen name above content?';

// Informationen zur Syntax
$string['headlines'] = '<h5> Überschriften';
$string['headlinesdes'] = '<li> Um eine Überschrift zu erstellen, fügen Sie ein Hashtag (#) vor ein Wort oder einen Satz. </li>
<li>Die Anzahl der verwendeten Hashtags sollte der Überschriftsebene entsprechen.</li>
<li>Um zum Beispiel eine Überschrift der Ebene drei (HTML: h3) zu erstellen, verwenden Sie drei Zahlenzeichen (z. B. ### Meine Überschrift). </li><br><hr>';

$string['bolditalic'] = '<h5> Formatierung: fett und kursiv';
$string['bolditalicdes'] = '<li> Um Text fett zu machen, fügen Sie zwei Sternchen oder Unterstriche vor und nach einem Wort oder Satz hinzu. </li>
<li> Um Text kursiv zu setzen, fügen Sie ein Sternchen oder einen Unterstrich vor und nach einem Wort oder Satz ein. </li>
<li> Um Text gleichzeitig durch Fett- und Kursivdruck hervorzuheben, fügen Sie drei Sternchen oder Unterstriche vor und nach einem Wort oder Satz hinzu. </li><br><hr>';

$string['lists'] = '<h5> (Un)formatierte Listen';
$string['listsdes'] = '<li> Um eine geordnete Liste zu erstellen, fügen Sie Zeilen mit Nummern, gefolgt von Punkten, hinzu. </li>
<li> Die Nummern müssen nicht in numerischer Reihenfolge stehen, aber die Liste sollte mit der Nummer eins beginnen. </li>
<li> Um eine unsortierte Liste zu erstellen, fügen Sie Bindestriche (-), Sternchen (*) oder Pluszeichen (+) vor den Einträgen ein. </li><br><hr>';

$string['code'] = '<h5> Code';
$string['codedes'] = '<li> Um ein Wort oder einen Satz als Code zu kennzeichnen, schließen Sie es in Backticks (`) ein. </li>
<li> Um eine unsortierte Liste zu erstellen, fügen Sie Bindestriche (-), Sternchen (*) oder Pluszeichen (+) vor den Einträgen ein. </li><br><hr>';

$string['newslide'] = '<h5> Neue Slides und horizontale Linien ';
$string['newslidedes'] = '<li> Um eine neue Folie zu erstellen, fügen Sie drei Bindestriche (---) ein. </li>
<li> Um eine horizontale Linie einzubinden, fügen Sie drei Sternchen (***) ein. </li><br><hr>';

$string['link'] = '<h5> Link einbinden';
$string['linkdes'] = '<li> Um einen Link zu erstellen, schließen Sie den Linktext in eckige Klammern ein 
(z. B. [Moodle]) und geben dann direkt die URL in Klammern ein (z. B. (https://moodle.de/)).</li>
<li> Beispiel: [Moodle](https://moodle.de/) </li><br><hr>';

$string['slide'] = '<h5> Slides trennen';
$string['slidedes'] = '<li> Der Trenner `---` erzeugt Abschnitte (links / rechts Navigation).</li>
<li> Der Trenner `----` erzeugt Unterseiten (hoch / runter Navigation).</li><br><hr>';

$string['more'] = '<h6> Weitere Syntax Beispiele finden Sie unter: ';
$string['moredes'] = '<a href="https://www.markdownguide.org/basic-syntax/">Weitere Beispiele</a>';

// Markdown Editor Informationsicon 
$string['modulename_help'] = 'Mit dem Markdown-Editor-Modul kann eine Lehrkraft mithilfe des Texteditors eine Markdown-Editor-Webressource erstellen. Ein Modul des Markdown Editors kann vor allem Überschriften, Tabellen oder Formatierungen anzeigen. Zudem ist es auch möglich, Code Fragmente, Bilder oder Aufgaben einzubauen. 

Die Vorteile der Verwendung des Markdown-Editor-Moduls gegenüber dem Page Modul bestehen darin, dass durch die simple Markdown Syntax mit Hilfe des Reveal.js Frameworks einheitliche Präsentationsskripte erstellt werden können. 

Ein Markdown-Editor-Modul kann verwendet werden

* um interaktive Skripte anschaulich und einheitlich zu gestalten 
* um Formatierungen der Skripte einfach umsetzen zu können 

Für weitere Informationen zur Markdown Syntax, klicken Sie einfach auf "Informationen zur Syntax" beim Erstellen eines Markdown-Editor-Moduls';

// Standard 
$string['configdisplayoptions'] = 'Select all options that should be available, existing settings are not modified. Hold CTRL key to select multiple fields.';
$string['content'] = 'mdgen content';
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
