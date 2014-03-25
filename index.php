<?php
$pages = array();
$docs = array();

$languages = array();
if ($handle = opendir('pages')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != '.' && $file != '..') {
        $parts = explode('.', $file);
        $languages[] = $parts[0];
      }
    }
    closedir($handle);
}

$language = $_GET['l'];

if (! $language) {
  if ($_SERVER['HTTP_ACCEPT_LANGUAGE']) {
    $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  }
}

if ((! $language) || (! in_array($language, $languages))) {
  $language = 'en';
}

$lang_dir = 'pages/' . $language;
if ($handle = opendir($lang_dir)) {
  while (false !== ($file = readdir($handle))) {
    if ($file != '.' && $file != '..') {
      $parts = explode('.', $file);
      $pages[] = $parts[0];
    }
  }
  closedir($handle);
}
$content_dir = $lang_dir;

$doc_dir = 'doc/';
if ($handle = opendir($doc_dir)) {
  while (false !== ($file = readdir($handle))) {
    if ($file != '.' && $file != '..') {
      $parts = explode('.', $file);
      $docs[] = $parts[0];
    }
  }
  closedir($handle);
}

$query = $_GET['q'];
if (! $query) {
  $query = 'hello';
}

$parts = explode('/', $query);
if (count($parts) == 2) {
	if ($parts[0] == 'doc') {
		$content_dir = $doc_dir;
		$query = $parts[1];
		$pages = $docs;
	}
}

if (in_array($query, $pages)) {
  include 'include/header.php';
  if (in_array('header', $pages)) {
    include $lang_dir . '/header.php';
  }

  include $content_dir . '/' . $query . '.php';

  if (in_array('footer', $pages)) {
    include $lang_dir . '/footer.php';
  }
  include 'include/footer.php';

} else {
  header('HTTP/1.0 404 Not Found');
  echo "<h1>404 Not Found</h1>";
  echo "The page that you have requested could not be found.";
}
?>