<?php namespace HashOver;

// Copyright (C) 2010-2018 Jacob Barkdull
// This file is part of HashOver.
//
// HashOver is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// HashOver is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with HashOver.  If not, see <http://www.gnu.org/licenses/>.
//
//--------------------
//
// IMPORTANT NOTICE:
//
// Do not edit this file unless you know what you are doing. Instead,
// please use the HashOver administration panel to graphically adjust
// the settings, or create/edit the settings JSON file.


// Sensitive and advanced settings not to be exposed to the frontend
class SensitiveSettings extends SafeSettings
{
	// Primary settings
	public $dataFormat		= 'xml';			// Format comments will be stored in; options: xml, json, sql
	public $defaultName		= 'Anonymous';			// Default name to use when one isn't given
	public $allowsLogin		= true;				// Whether users can login and logout (when false form cookies are still set)
	public $usesModeration		= false;			// Whether comments must be approved before they appear to other visitors
	public $pendsUserEdits		= false;			// Whether comments need to be approved again when edited

	// E-mail settings
	public $mailer			= 'sendmail';			// How to send notification e-mails, either 'sendmail' or 'smtp'
	public $mailType		= 'text';			// What format to send e-mails in, either 'text' or 'html'
	public $noreplyEmail		= 'noreply@example.com';	// E-mail address used in e-mail notifications to normal users

	// Behavior settings
	public $usesAutoLogin		= true;				// Whether a user's first comment automatically logs them in

	// Technical settings
	public $loginMethod		= 'defaultLogin';		// Login method class for handling user login information
	public $requiresLogin		= false;			// Whether user must be logged in to comment (only for restrictive login methods)
	public $setsCookies		= true;				// Whether cookies are enabled
	public $secureCookies		= false;			// Whether cookies set over secure HTTPS will only be transmitted over HTTPS
	public $storesIpAddress		= false;			// Whether to store users' IP addresses
	public $spamDatabase		= 'remote';			// Whether to use a remote or local spam database
	public $spamCheckModes		= 'php';			// Perform IP spam check in 'json' or 'php' mode, or 'both'
	public $enabledApi		= array ('all');		// An array of enabled API. 'all' = fully-enabled, empty array = fully disabled
	public $latestMax		= 10;				// Maximum number of comments to save as latest comments
	public $latestTrimWidth		= 100;				// Number of characters to trim latest comments to, 0 for no trim
	public $userDeletionsUnlink	= false;			// Whether user deleted files are actually unlinked from the filesystem
	public $allowLocalMetadata	= false;			// Whether default metadata should be collected while running on a local server

	// Whether multiple website support is enabled
	public $supportsMultisites = false;

	// External domains allowed to remotely load HashOver scripts
	public $allowedDomains = array (
		// '*.example.com',
		// '*.example.org',
		// '*.example.net'
	);

	// Types of images allowed to be embedded in comments
	public $imageTypes = array (
		'jpeg',
		'jpg',
		'png',
		'gif'
	);
}
