<?php 
/*
Plugin Name: Twitter Links
Plugin URI: http://mattsblog.ca/plugins/twitter-links/
Description: Converts Twitter usernames mentioned in comments (eg. @mattfreedman) with a link to the mentioned user's Twitter profile page (eg. <a href="http://twitter.com/mattfreedman">@mattfreedman</a>).
Version: 1.0
Author: Matt Freedman
Author URI: http://mattsblog.ca/

Copyright 2008 Matt Freedman (http://mattsblog.ca/)

This program is free software: you can redistribute it and/or modify 
it under the terms of the GNU General Public License as published by 
the Free Software Foundation, either version 3 of the License, or 
(at your option) any later version.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
GNU General Public License for more details.

You should have received a copy of the GNU General Public License 
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

add_filter( 'comment_text', 'twitter_links' );

function twitter_links( $comment ) {

	$search = preg_match_all( "/[@][A-Za-z0-9_]*/", $comment, $matches );

	foreach( $matches[0] as $user ) {

		$user = str_replace( '@', '', $user );

		$handler = curl_init();
		curl_setopt( $handler, CURLOPT_URL, 'http://twitter.com/users/show/' . $user . '.xml' );
		curl_setopt( $handler, CURLOPT_NOBODY, 1 );
		curl_setopt( $handler, CURLOPT_RETURNTRANSFER, 1 );
		curl_exec( $handler );
		$http_code = curl_getinfo( $handler, CURLINFO_HTTP_CODE );
		curl_close( $handler );

		if ( is_int( $http_code ) && $http_code == '200' )
			$comment = str_replace( '@' . $user, '<a href="http://twitter.com/' . $user . '" rel="nofollow">@' . $user . '</a>', $comment );

	}

	return $comment;

}

?>
