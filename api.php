<?php 

function api($type, $value)
{
    if ($type == "skype") {
        $skypeChat = "?chat";
    } else {
        $skypeChat = "";
    }
    echo '<!DOCTYPE HTML>
        <html lang="en-US">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="refresh" content="1;url=' . $type . ':' . $value . $skypeChat . '">
                <script type="text/javascript">
                    window.location.href = "' . $type . ':' . $value . $skypeChat . '"
                </script>
                <title>Page Redirection</title>
            </head>
            <body>
                <!-- Note: don\'t tell people to `click` the link, just tell them that it is a link. -->
                Loading up the ' . $type . ' account of' . $value . ', click <a href=\'' . $type . ':' . $value . $skypeChat . '\'>here</a> if it is not working.
            </body>
        </html>';
}


if (!empty($_GET['skype'])) {
    api('skype', $_GET['skype']);
} else {
    api('mailto', $_GET['mailto']);
}
