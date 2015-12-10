<?php
gatekeeper();

$dbprefix = elgg_get_config('dbprefix');
$user = elgg_get_logged_in_user_entity();
elgg_set_page_owner_guid($user->guid);
$options = array();
$offset = get_input('offset');
$options['offset'] = $offset;
$page_type = get_input('page_type');
$base_url = get_input('base_url');
$options['base_url'] = $base_url;
$already_viewed = get_input('already_viewed');
//$GLOBALS['GC_THEME']->debug("IN AJAX ALREADY_VIEWED=$already_viewed");
$options['already_viewed'] = $already_viewed;
if (! $page_type) {
	$preferred_tab = $user->preferred_tab;
	$page_type = ($preferred_tab)?$preferred_tab:'all';
}
switch ($page_type) {
        case 'mine':
                $title = elgg_echo('river:mine');
                $page_filter = 'mine';
                $options['subject_guid'] = elgg_get_logged_in_user_guid();
                break;
        case 'owner':
                $subject_username = get_input('owner', '', false);
                $subject = get_user_by_username($subject_username);
                if (!$subject) {
                        register_error(elgg_echo('river:subject:invalid_subject'));
                        forward('');
                }
                $title = elgg_echo('river:owner', array(htmlspecialchars($subject->name, ENT_QUOTES, 'UTF-8', false)));
                $page_filter = 'subject';
                $options['subject_guid'] = $subject->guid;
                break;
        case 'all':
        default:
                $title = elgg_echo('river:all');
                $page_filter = 'all';
                break;
        case 'friends':
                $title = elgg_echo('river:friends');
                $page_filter = 'friends';
                $options['relationship_guid'] = elgg_get_logged_in_user_guid();
                $options['relationship'] = 'friend';
                break;
}

$options['body_class'] = 'new-feed';
$stream = elgg_list_river($options);
echo $stream;
