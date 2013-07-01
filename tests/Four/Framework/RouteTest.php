<?php

namespace Four\Framework
{
	# /
	$home = new Route('index', '/', array(
		'Controller' => 'DefaultController',
		'Action' => 'Default'
	));
	
	# /user/view/stephen-hill
	$viewUser = new Route('username', '/{Username}');
	
	# /user/stephen-hill
	$user = new Route('username', '/User/{Username}', array(
		'Action' => 'View'
	));
	
	# /blog/stephen-hill/post/123
	$blogPost = new Route('blogpost', '/{Controller}/{BlogName}/{Action}/{PostID}');
}