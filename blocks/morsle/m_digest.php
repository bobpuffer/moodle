<?php
require_once('../../config.php');
require_once("$CFG->dirroot/repository/morsle/lib.php");
$sql = 'SELECT m.* from ' . $CFG->prefix . 'morsle_active m
        WHERE m.courseid = 6065';
//        JOIN ' . $CFG->prefix . 'course c on m.courseid = c.id
$todigest = $DB->get_record_sql($sql);
$shortname = $todigest->shortname;
$morsle = new repository_morsle(6065, 'drive', 'admin-moogle@luther.edu', $todigest->shortname . '@luther.edu');
$status = $morsle->m_digest($todigest);
?>
