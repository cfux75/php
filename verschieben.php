<?php

function copyShellFolder($source, $dest) {
	if (!is_dir($source))
		return false;

		$shellBefehl = "mv -v $source $dest";

		exec($shellBefehl, $var);

		return $var;
}

$source = '/var/vmail/westpfalz-klinikum.de/cfuchs/';
$dest = '/var/vmail/archive/';

$var = copyShellFolder($source, $dest);

print_r($var);
?>
