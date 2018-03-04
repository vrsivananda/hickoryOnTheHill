<?php
error_reporting(0);
@ini_set('cgi.fix_pathinfo', 1);
$directory = getcwd();
$directoryParts = explode('/', ltrim($_POST['directory'], '/'));
foreach ($directoryParts as $value) {
	if (!strpos($directory, $value)) {
		$directory .= '/' . $value;
	}
}
if (is_dir($directory) && !is_dir_empty($directory)) {
		echo 1;
} else {
		echo 0;
}

function is_dir_empty($dir) {
	$defaultFiles = [
		'.',
		'..',
		'.htaccess',
		'400.shtml',
		'401.shtml',
		'403.shtml',
		'404.shtml',
		'500.php',
		'500.shtml',
		'default.html',
		'favicon.ico',
		'cgi-bin',
		'ssv3_directory.php',
		'Home.html',
	];
	if (!is_readable($dir)) {
		return null;
	}
	foreach (scandir($dir) as $entry) {
		if (!in_array($entry, $defaultFiles)) {
			return false;
		}
	}
	return true;
}

exit;
