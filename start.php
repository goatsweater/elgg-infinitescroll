<?php
function infinite_scroll_init() {
	//Ajax pages for scroll
	elgg_register_ajax_view('gc_theme/ajax/allgroups');
	elgg_register_ajax_view('gc_theme/ajax/blogs');
	elgg_register_ajax_view('gc_theme/ajax/bookmarks_all');
	elgg_register_ajax_view('gc_theme/ajax/bookmarks_friends');
	elgg_register_ajax_view('gc_theme/ajax/bookmarks_group');
	elgg_register_ajax_view('gc_theme/ajax/bookmarks_owner');
	elgg_register_ajax_view('gc_theme/ajax/dashboard');
	elgg_register_ajax_view('gc_theme/ajax/comments');
	elgg_register_ajax_view('gc_theme/ajax/embed');
	elgg_register_ajax_view('gc_theme/ajax/friends');
	elgg_register_ajax_view('gc_theme/ajax/friendsof');
	elgg_register_ajax_view('gc_theme/ajax/file_friends');
	elgg_register_ajax_view('gc_theme/ajax/file_owner');
	elgg_register_ajax_view('gc_theme/ajax/file_world');
	elgg_register_ajax_view('gc_theme/ajax/group_members');
	elgg_register_ajax_view('gc_theme/ajax/group_wall');
	elgg_register_ajax_view('gc_theme/ajax/members');
	elgg_register_ajax_view('gc_theme/ajax/members/search/name');
	elgg_register_ajax_view('gc_theme/ajax/messages_inbox');
	elgg_register_ajax_view('gc_theme/ajax/replies');
	elgg_register_ajax_view('gc_theme/ajax/site_notifications');
	elgg_register_ajax_view('gc_theme/ajax/pages_friends');
	elgg_register_ajax_view('gc_theme/ajax/pages_owner');
	elgg_register_ajax_view('gc_theme/ajax/pages_world');
	elgg_register_ajax_view('gc_theme/ajax/polls');
	elgg_register_ajax_view('gc_theme/ajax/search');
	elgg_register_ajax_view('gc_theme/ajax/thewire');
	elgg_register_ajax_view('gc_theme/ajax/user_activity');
	elgg_register_ajax_view('gc_theme/ajax/user_colleagues');
	elgg_register_ajax_view('gc_theme/ajax/user_groups');
	//Scroll
	elgg_extend_view("js/elgg", "js/scroll");
}
elgg_register_event_handler('init', 'system', 'infinite_scroll_init');
