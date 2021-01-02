<?
	// We use PHP to create a simply proxy that fetches the data from NewsAPI
	// This gets around security and CORS related problems when trying to access it directly in Javascript/AJAX
    $content = file_get_contents($_GET['url']);

    // Lets make sure the MIME type is JSON just in case
    header('Content-Type: application/json');
    echo $content;
?>