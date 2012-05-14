<?php
/*
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2009-2010 Martijn van der Kleijn <martijn.niji@gmail.com>
 * Copyright (C) 2008 Philippe Archambault <philippe.archambault@gmail.com>
 *
 * This file is part of Wolf CMS. Wolf CMS is licensed under the GNU GPLv3 license.
 * Please see license.txt for the full license text.
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 * The Poll plugin provides an Poll pagetype behaving similar to a blog or news poll.
 *
 * @package Plugins
 * @subpackage poll
 *
 * @author Philippe Archambault <philippe.archambault@gmail.com>
 * @copyright Philippe Archambault, 2008
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

Plugin::setInfos(array(
    'id'          => 'poll',
    'title'       => __('Poll'),
    'description' => __('Provides an Poll pagetype behaving similar to a blog or news poll.'),
    'version'     => '1.1.0',
    'website'     => 'http://www.wolfcms.org/',
    'update_url'  => 'http://www.wolfcms.org/plugin-versions.xml'
));

// Add the plugin's tab and controller
Plugin::addController('poll', '', 'admin_view', false);

Behavior::add('poll', 'poll/poll.php');
Behavior::add('poll_day_index', 'poll/poll.php');
Behavior::add('poll_month_index', 'poll/poll.php');
Behavior::add('poll_year_index', 'poll/poll.php');