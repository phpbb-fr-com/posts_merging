<?php
/**
 *
 * Posts Merging extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, rxu, https://www.phpbbguru.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Swedish translation by Holger (http://www.maskinisten.net)
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'MERGE_SEPARATOR'		=> "\n\n[size=85][color=green]Tillägg efter %s:[/color][/size]\n",
	'MERGE_SUBJECT'			=> "[size=85][color=green]%s[/color][/size]\n",
	'POSTS_MERGING_OPTION'	=> 'Lägg ej ihop med föregående inlägg',

	'D_SECONDS'  => array(
		1	=> '%d sekund',
		2	=> '%d sekunder',
	),
	'D_MINUTES'  => array(
		1	=> '%d minut',
		2	=> '%d minuter',
	),
	'D_HOURS'    => array(
		1	=> '%d timme',
		2	=> '%d timmar',
	),
	'D_MDAY'     => array(
		1	=> '%d dag',
		2	=> '%d dagar',
	),
	'D_MON'      => array(
		1	=> '%d månad',
		2	=> '%d månader',
	),
	'D_YEAR'     => array(
		1	=> '%d år',
		2	=> '%d år',
	),
]);
