<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file.
 *
 * @package    mod_structlabel
 * @copyright  2019 Coventry University
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnmoreresources'] = 'Add {no} more resources';
$string['content'] = 'Content';
$string['errorinvalidiconnameatline'] = 'The icon name at line {$a} is not valid.';
$string['errornotacolouratline'] = 'The colour at line {$a} is not valid.';
$string['gridsize'] = 'Grid size';
$string['gridsize_desc'] = 'The grid size to use for the content and its associated image. This is compatible with Bootstrap 4 grid, and applies to breakpoints `sm` and above. A value of `8-4` would translate to `col-sm-8` for the content, and `col-sm-4`  for the image.';
$string['image'] = 'Image';
$string['imageheight'] = 'Image height';
$string['imageheight_desc'] = 'The height of the image. When both the width and height are defined, the image will be cropped to these exact dimensions.';
$string['imagewidth'] = 'Image width';
$string['imagewidth_desc'] = 'The width of the image to determine the aspect ratio. When both the width and height are defined, the image will be cropped to these exact dimensions.';
$string['modulename'] = 'Structured label';
$string['modulenameplural'] = 'Structured labels';
$string['pluginadministration'] = 'Structured label administration';
$string['pluginname'] = 'Structured label';
$string['resourceicon'] = 'Icon';
$string['resourcenourl'] = 'Resource {no} URL';
$string['resourcesstyles'] = 'Resources styles';
$string['resourcesstyles_desc'] = 'Define the styles for resources matching certain URLs.

Each line must include at least a URL fragment to match against a resource, and their background colour.
Optionally, a third parameter can be included to specify the icon of the resource. These parameters
must be delimited by a `|`.

Example:

```
youtube.com|#FF0000|fa-play-circle
lynda.com|#F1B500
```
';
$string['resourcetext'] = 'Name';
$string['structlabel:addinstance'] = 'Add a structured label to the course page';
$string['structlabel:view'] = 'View structured label';
$string['supportingresources'] = 'Supporting resources';
$string['title'] = 'Title';
$string['urlandtextrequired'] = 'Both the URL and name are required';
