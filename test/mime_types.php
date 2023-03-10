<?php

$test_types = [
    'application/atom+xml',
    'application/EDI-X12',
    'application/EDIFACT',
    'application/font-sfnt',
    'application/font-woff',
    'application/font-woff2',
    'application/java-archive',
    'application/javascript',
    'application/json',
    'application/msword',
    'application/octet-stream',
    'application/ogg',
    'application/pdf',
    'application/rss+xml',
    'application/rtf',
    'application/vnd.google-earth.kml+xml',
    'application/vnd.mozilla.xul+xml',
    'application/vnd.ms-excel',
    'application/vnd.ms-fontobject',
    'application/vnd.ms-powerpoint',
    'application/vnd.oasis.opendocument.graphics',
    'application/vnd.oasis.opendocument.presentation',
    'application/vnd.oasis.opendocument.spreadsheet',
    'application/vnd.oasis.opendocument.text',
    'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'application/x-7z-compressed',
    'application/x-bzip',
    'application/x-bzip2',
    'application/x-compressed',
    'application/x-dvi',
    'application/x-font-opentype',
    'application/x-font-ttf',
    'application/x-gzip',
    'application/x-iwork-keynote-sffkey',
    'application/x-iwork-numbers-sffnumbers',
    'application/x-iwork-pages-sffpages',
    'application/x-javascript',
    'application/x-latex',
    'application/x-newton-compatible-pkg',
    'application/x-pkcs12',
    'application/x-pkcs7-certificates',
    'application/x-pkcs7-certreqresp',
    'application/x-pkcs7-mime',
    'application/x-pkcs7-signature',
    'application/x-rar-compressed',
    'application/x-redhat-package-manager',
    'application/x-shockwave-flash',
    'application/x-stuffit',
    'application/x-tar',
    'application/x-www-form-urlencoded',
    'application/x-x509-ca-cert',
    'application/xhtml+xml',
    'application/zip',
    'audio/aac',
    'audio/aiff',
    'audio/flac',
    'audio/midi',
    'audio/mpeg',
    'audio/ogg',
    'audio/wav',
    'audio/x-m4a',
    'audio/x-ms-wma',
    'image/gif',
    'image/jpeg',
    'image/png',
    'image/svg+xml',
    'image/tiff',
    'image/webp',
    'image/x-icon',
    'image/x-ms-bmp',
    'multipart/alternative',
    'multipart/encrypted',
    'multipart/form-data',
    'multipart/mixed',
    'multipart/related',
    'multipart/signed',
    'text/cmd',
    'text/css',
    'text/csv',
    'text/html',
    'text/javascript',
    'text/markdown',
    'text/php',
    'text/plain',
    'text/x-jquery-tmpl',
    'text/xml',
    'video/3gpp',
    'video/3gpp2',
    'video/mp4',
    'video/mpeg',
    'video/ogg',
    'video/quicktime',
    'video/webm',
    'video/x-flv',
    'video/x-m4v',
    'video/x-matroska',
    'video/x-ms-wmv',
    'video/x-msvideo',
];

foreach ($test_types as $c_type) {
    $c_result = filter_var($c_type, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '%^[a-z]{1,20}/[a-zA-Z0-9\\+\\-\\.]{1,100}$%']]);
    print $c_type == $c_result ? 'true' : 'FALSE';
    print ' '.$c_type.nl;
}
