<?php
//## CRF - This file Copr. 2023 Nexus Systems Incorporated - Licensed as OSS per MIT##
declare(strict_types=1);

use const PHP_SAPI;

if (class_exists('Phar'))
{
	//get pharname
	define('PHAR_PATH', Phar::running(false));
	define('PHAR_NAME', basename(PHAR_PATH));
	if (PHAR_NAME)
	{
		define('APP_BASE_DIR', 'phar://'.PHAR_NAME);
	}
}

//Use non-stupid autoloader
// because phars are a case affected by php bug #49625
if (!function_exists('_SHIM_MATCH_CLASSFILE_ASIS_LOADER'))
{
	function _SHIM_MATCH_CLASSFILE_ASIS_LOADER($class) // Global Function Name NOSONAR
	{
		$aPaths=explode(PATH_SEPARATOR, get_include_path());
		$aExts=array_reverse(explode(',', spl_autoload_extensions()));
		foreach ($aPaths as $sBasePath)
		{
			foreach($aExts as $ext)
			{
				$cpath=$sBasePath.DIRECTORY_SEPARATOR.$class.$ext;
				// echo $cpath."\n"
				if (is_readable($cpath))
				{
					require_once $cpath; //this is required NOSONAR
					return true;
				}
			}
		}
		return false;
	}
	spl_autoload_register('_SHIM_MATCH_CLASSFILE_ASIS_LOADER');
}

//this main file does run in the same context as the stub,
//but after ::mapPhar() and ::interceptFileFuncs()
//elsewhere please use APP_BASE_DIR
require_once 'src/Common.php'; //this is required NOSONAR
if('cli' == PHP_SAPI || 'embed' == PHP_SAPI)
{
	// require_once 'ConsoleMain.php'
	// return ConsoleMain($argc, $argv)
}
else // 99% sure we're in a web context
{
	// require_once 'WebMain.php'
	// return WebMain()
}
//and we're done. HC gets called shortly after now
