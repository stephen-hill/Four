<?php

namespace Four\Framework
{
	use \DateTime;

	class FileInfo
	{
		public $Attributes;
		public $Created;
		public $Directory;
		public $Extension;
		public $FullName;
		public $LastAccess;
		public $Updated;
		public $Size;
		public $Name;

		public function __construct($filename)
		{
			$this->Created = DateTime::createFromFormat("U", (string)filectime($filename));
			$this->Directory = pathinfo($filename, PATHINFO_DIRNAME);
			$this->Extension = pathinfo($filename, PATHINFO_EXTENSION);
			$this->FullName = $filename;
			$this->LastAccess = DateTime::createFromFormat("U", (string)fileatime($filename));
			$this->Updated = DateTime::createFromFormat("U", (string)filemtime($filename));
			$this->Size = filesize($filename);
			$this->Name = pathinfo($filename, PATHINFO_BASENAME);
		}

		public function CopyTo($filename){}
		public function Delete(){}
		public function MoveTo($filename){}
	}
}