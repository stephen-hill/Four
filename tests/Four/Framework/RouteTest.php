<?php

namespace Four\Framework
{
	# /
	$home = new Route("/", array(
		"Controller" => "DefaultController",
		"Action" => "Default"
	));
	
	# /user/view/stephen-hill
	$viewUser = new Route("/{Username}");
	
	# /user/stephen-hill
	$user = new Route('/User/{Username}', array(
		"Action" => "View"
	));
	
	# /blog/stephen-hill/post/123
	$blogPost = new Route("/{Controller}/{BlogName}/{Action}/{PostID}");
}