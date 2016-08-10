<?php
	$version='0.3.10';
?>

<?php
	$vlink='https://github.com/khaleelsyed/anime-flick/tree/v'.$version;
	$file .=$vlink;
	$file_headers = @get_headers($file);
	if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
	    $versionlink .= 'https://github.com/khaleelsyed/anime-flick';
	}
	else {
	    $versionlink .= $vlink;
	}
?>
