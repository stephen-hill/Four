<?php

namespace Four\Framework
{
	$db = new Database('localhost');
	$db->Cache = new Cache('localhost');
	
	// Select
	$db->Get('table_name', array('id' => 123));
	
	// Map Single Row to Object
	$db->Map('table_name', array('id' => 123), 'ClassName');
	
	// Insert
	$db->Add('table_name', array('name' => 'Stephen'));
	
	// Delete
	$db->Delete('table_name', array('id' => 123));
}