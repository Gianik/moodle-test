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
 * Version info
 *
 * This File contains information about the current version of report/logs
 *
 * @package    local_completionreport
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// require_once($CFG->libdir . '/adminlib.php');
// $PAGE->set_context(context_system::instance());
// $PAGE->set_pagelayout('standard');
// $PAGE->set_title("completionreport");
// $PAGE->set_heading("completionreport");


require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');

admin_externalpage_setup('localcompletionreport', '', null, '', array('pagelayout' => 'report'));
require_login();
require_admin();
$context = context_system::instance();
$PAGE->set_context($context);
require_capability('local/coursecompletionreport:view', $context);
echo $OUTPUT->header();

echo $OUTPUT->footer();
