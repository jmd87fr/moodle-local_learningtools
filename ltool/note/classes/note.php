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
 * Notes ltool defined class.
 *
 * @package   ltool_note
 * @copyright bdecent GmbH 2021
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace ltool_note;

defined('MOODLE_INTERNAL') || die();
require_once(dirname(__DIR__).'/lib.php');
/**
 *  Note ltool define class
 */
class note extends \local_learningtools\learningtools {

    /**
     * Tool shortname.
     *
     * @var string
     */
    public $shortname = 'note';

    /**
     * Note name
     * @return string name
     */
    public function get_tool_name() {
        return get_string('note', 'local_learningtools');
    }

    /**
     * Note icon
     * @return string icon
     */
    public function get_tool_icon() {

        return 'fa fa-pencil';
    }

    /**
     * Get the notes content.
     *
     * @return string display tool note plugin html
     */
    public function get_tool_records() {
        global $DB, $PAGE, $USER, $CFG;
        require_once($CFG->dirroot.'/local/learningtools/ltool/note/lib.php');

        $args = [];
        $data = [];
        $args['contextid'] = $PAGE->context->id;
        $args['pagetype'] = $PAGE->pagetype;
        $args['user'] = $USER->id;
        $args['pageurl'] = $PAGE->url->out(false);
        $data = [];
        $data['name'] = $this->get_tool_name();
        $data['icon'] = $this->get_tool_icon();
        $data['ltnote'] = true;
        $data['pagenotes'] = get_userpage_countnotes($args);
        $data['notehovername'] = get_string('createnote', 'local_learningtools');
        return $data;
    }

    /**
     * Load the required javascript files for note.
     *
     * @return void
     */
    public function load_js() {
        // Load note tool js configuration.
        load_notes_js_config();
    }

    /**
     * Return the template of note fab button.
     *
     * @return string note tool fab button html.
     */
    public function render_template() {
        $data = $this->get_tool_records();
        return ltool_note_render_template($data);
    }

}
