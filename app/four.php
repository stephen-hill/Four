<?php

namespace YourNameSpace;

use Four\Framework\Events;


Events::Add('beforeStart', function()
{
	echo "Hello";
});

Events::Add('beforeStart', function()
{
	echo "Wolrd";
});