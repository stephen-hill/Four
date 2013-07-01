<?php

namespace Four\Framework
{
	use \Memcache;
	
	$memcache = new Memcache();
	$memcache->addServer('localhost');
	
	$cache = new Cache($memcache);
	
	var_dump($cache->Set('key', str_repeat(rand(0,9), 1048576)));
	var_dump($cache->Get('key'))
}