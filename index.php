	<?php 
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='About.html') {
	include $browser_t.'/About.html';
	}
elseif ($page_name=='work.html') {
	include $browser_t.'/work.html';
	}
elseif ($page_name=='agenda.html') {
	include $browser_t.'/agenda.html';
	}
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='contact-post.html') {
	include $browser_t.'/contact.html';
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
