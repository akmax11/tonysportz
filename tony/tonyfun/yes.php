<?php
// Set the HTTP response status code to 302 for a temporary redirect
http_response_code(302);

// Clear the Referer by modifying headers to avoid sending it
header("Referrer-Policy: no-referrer");
header("Location: http://p8r9.com/?utm_campaign=D65m7f7e4i&v1=[v1]&v2=[v2]&v3=[v3]");
exit();
