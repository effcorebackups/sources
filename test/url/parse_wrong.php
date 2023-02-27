<?php

$_SERVER['HTTP_HOST'] = 'current_domain';

$urls = [
    ':',
    ':/',
    'http:',
    'http:/',
    'http:///',
    'http:///path/',
    'http:/domain/path?key=value',
    'javascript://%0Aalert(document.cookie)'
];

foreach ($urls as $c_value) {
    $c_info = new url($c_value);
    if ($c_info->has_error === true)
         print 'true "' .$c_value.'" '.$c_info->full_get().nl;
    else print 'FALSE "'.$c_value.'"'.nl;
}

# ─────────────────────────────────────────────────────────────────────

$result = <<<EOT
    ERROR ""
    OK    "http"
    ERROR "://"
    ERROR "http://"
    OK    "subdomain.domain"
    OK    "httpsubdomain.domain"
    ERROR "://subdomain.domain"
    OK    "http://subdomain.domain"
    ERROR ":80"
    OK    "http:80"
    ERROR "://:80"
    ERROR "http://:80"
    OK    "subdomain.domain:80"
    OK    "httpsubdomain.domain:80"
    ERROR "://subdomain.domain:80"
    OK    "http://subdomain.domain:80"
    OK    "/dir/subdir/page"
    OK    "http/dir/subdir/page"
    ERROR ":///dir/subdir/page"
    ERROR "http:///dir/subdir/page"
    OK    "subdomain.domain/dir/subdir/page"
    OK    "httpsubdomain.domain/dir/subdir/page"
    ERROR "://subdomain.domain/dir/subdir/page"
    OK    "http://subdomain.domain/dir/subdir/page"
    ERROR ":80/dir/subdir/page"
    OK    "http:80/dir/subdir/page"
    ERROR "://:80/dir/subdir/page"
    ERROR "http://:80/dir/subdir/page"
    OK    "subdomain.domain:80/dir/subdir/page"
    OK    "httpsubdomain.domain:80/dir/subdir/page"
    ERROR "://subdomain.domain:80/dir/subdir/page"
    OK    "http://subdomain.domain:80/dir/subdir/page"
    ERROR "?key=value"
    ERROR "http?key=value"
    ERROR "://?key=value"
    ERROR "http://?key=value"
    ERROR "subdomain.domain?key=value"
    ERROR "httpsubdomain.domain?key=value"
    ERROR "://subdomain.domain?key=value"
    ERROR "http://subdomain.domain?key=value"
    ERROR ":80?key=value"
    ERROR "http:80?key=value"
    ERROR "://:80?key=value"
    ERROR "http://:80?key=value"
    ERROR "subdomain.domain:80?key=value"
    ERROR "httpsubdomain.domain:80?key=value"
    ERROR "://subdomain.domain:80?key=value"
    ERROR "http://subdomain.domain:80?key=value"
    OK    "/dir/subdir/page?key=value"
    OK    "http/dir/subdir/page?key=value"
    ERROR ":///dir/subdir/page?key=value"
    ERROR "http:///dir/subdir/page?key=value"
    OK    "subdomain.domain/dir/subdir/page?key=value"
    OK    "httpsubdomain.domain/dir/subdir/page?key=value"
    ERROR "://subdomain.domain/dir/subdir/page?key=value"
    OK    "http://subdomain.domain/dir/subdir/page?key=value"
    ERROR ":80/dir/subdir/page?key=value"
    OK    "http:80/dir/subdir/page?key=value"
    ERROR "://:80/dir/subdir/page?key=value"
    ERROR "http://:80/dir/subdir/page?key=value"
    OK    "subdomain.domain:80/dir/subdir/page?key=value"
    OK    "httpsubdomain.domain:80/dir/subdir/page?key=value"
    ERROR "://subdomain.domain:80/dir/subdir/page?key=value"
    OK    "http://subdomain.domain:80/dir/subdir/page?key=value"
    ERROR "#anchor"
    ERROR "http#anchor"
    ERROR "://#anchor"
    ERROR "http://#anchor"
    ERROR "subdomain.domain#anchor"
    ERROR "httpsubdomain.domain#anchor"
    ERROR "://subdomain.domain#anchor"
    ERROR "http://subdomain.domain#anchor"
    ERROR ":80#anchor"
    ERROR "http:80#anchor"
    ERROR "://:80#anchor"
    ERROR "http://:80#anchor"
    ERROR "subdomain.domain:80#anchor"
    ERROR "httpsubdomain.domain:80#anchor"
    ERROR "://subdomain.domain:80#anchor"
    ERROR "http://subdomain.domain:80#anchor"
    OK    "/dir/subdir/page#anchor"
    OK    "http/dir/subdir/page#anchor"
    ERROR ":///dir/subdir/page#anchor"
    ERROR "http:///dir/subdir/page#anchor"
    OK    "subdomain.domain/dir/subdir/page#anchor"
    OK    "httpsubdomain.domain/dir/subdir/page#anchor"
    ERROR "://subdomain.domain/dir/subdir/page#anchor"
    OK    "http://subdomain.domain/dir/subdir/page#anchor"
    ERROR ":80/dir/subdir/page#anchor"
    OK    "http:80/dir/subdir/page#anchor"
    ERROR "://:80/dir/subdir/page#anchor"
    ERROR "http://:80/dir/subdir/page#anchor"
    OK    "subdomain.domain:80/dir/subdir/page#anchor"
    OK    "httpsubdomain.domain:80/dir/subdir/page#anchor"
    ERROR "://subdomain.domain:80/dir/subdir/page#anchor"
    OK    "http://subdomain.domain:80/dir/subdir/page#anchor"
    ERROR "?key=value#anchor"
    ERROR "http?key=value#anchor"
    ERROR "://?key=value#anchor"
    ERROR "http://?key=value#anchor"
    ERROR "subdomain.domain?key=value#anchor"
    ERROR "httpsubdomain.domain?key=value#anchor"
    ERROR "://subdomain.domain?key=value#anchor"
    ERROR "http://subdomain.domain?key=value#anchor"
    ERROR ":80?key=value#anchor"
    ERROR "http:80?key=value#anchor"
    ERROR "://:80?key=value#anchor"
    ERROR "http://:80?key=value#anchor"
    ERROR "subdomain.domain:80?key=value#anchor"
    ERROR "httpsubdomain.domain:80?key=value#anchor"
    ERROR "://subdomain.domain:80?key=value#anchor"
    ERROR "http://subdomain.domain:80?key=value#anchor"
    OK    "/dir/subdir/page?key=value#anchor"
    OK    "http/dir/subdir/page?key=value#anchor"
    ERROR ":///dir/subdir/page?key=value#anchor"
    ERROR "http:///dir/subdir/page?key=value#anchor"
    OK    "subdomain.domain/dir/subdir/page?key=value#anchor"
    OK    "httpsubdomain.domain/dir/subdir/page?key=value#anchor"
    ERROR "://subdomain.domain/dir/subdir/page?key=value#anchor"
    OK    "http://subdomain.domain/dir/subdir/page?key=value#anchor"
    ERROR ":80/dir/subdir/page?key=value#anchor"
    OK    "http:80/dir/subdir/page?key=value#anchor"
    ERROR "://:80/dir/subdir/page?key=value#anchor"
    ERROR "http://:80/dir/subdir/page?key=value#anchor"
    OK    "subdomain.domain:80/dir/subdir/page?key=value#anchor"
    OK    "httpsubdomain.domain:80/dir/subdir/page?key=value#anchor"
    ERROR "://subdomain.domain:80/dir/subdir/page?key=value#anchor"
    OK    "http://subdomain.domain:80/dir/subdir/page?key=value#anchor"
EOT;

$parts = [
    1 => 'http', '://', 'subdomain.domain', ':80', '/dir/subdir/page', '?key=value', '#anchor'
];

$lines = [];
for ($i = 0b0000000; $i <= 0b1111111; $i++) {
    $c_value = '';
    $is_part_active_1 = $i & 0b0000001;
    $is_part_active_2 = $i & 0b0000010;
    $is_part_active_3 = $i & 0b0000100;
    $is_part_active_4 = $i & 0b0001000;
    $is_part_active_5 = $i & 0b0010000;
    $is_part_active_6 = $i & 0b0100000;
    $is_part_active_7 = $i & 0b1000000;
    if ($is_part_active_1) $c_value.= $parts[1];
    if ($is_part_active_2) $c_value.= $parts[2];
    if ($is_part_active_3) $c_value.= $parts[3];
    if ($is_part_active_4) $c_value.= $parts[4];
    if ($is_part_active_5) $c_value.= $parts[5];
    if ($is_part_active_6) $c_value.= $parts[6];
    if ($is_part_active_7) $c_value.= $parts[7];
    $c_url = new url($c_value);
    $lines[] = '    '.($c_url->has_error ? 'ERROR' : 'OK   ').' "'.$c_value.'"';
}

print nl.'BEGIN TEST:'.nl.implode(nl, $lines);
if (implode(nl, $lines) === $result) {
    print nl.'PASSED'.nl;
}

# ─────────────────────────────────────────────────────────────────────

$result = <<<EOT
    ERROR ""
    OK    "http"
    ERROR "://"
    ERROR "http://"
    OK    "subdomain.domain"
    OK    "httpsubdomain.domain"
    ERROR "://subdomain.domain"
    OK    "http://subdomain.domain"
    ERROR ":80"
    OK    "http:80"
    ERROR "://:80"
    ERROR "http://:80"
    OK    "subdomain.domain:80"
    OK    "httpsubdomain.domain:80"
    ERROR "://subdomain.domain:80"
    OK    "http://subdomain.domain:80"
    OK    "/"
    OK    "http/"
    ERROR ":///"
    ERROR "http:///"
    OK    "subdomain.domain/"
    OK    "httpsubdomain.domain/"
    ERROR "://subdomain.domain/"
    OK    "http://subdomain.domain/"
    ERROR ":80/"
    OK    "http:80/"
    ERROR "://:80/"
    ERROR "http://:80/"
    OK    "subdomain.domain:80/"
    OK    "httpsubdomain.domain:80/"
    ERROR "://subdomain.domain:80/"
    OK    "http://subdomain.domain:80/"
    ERROR "?key=value"
    ERROR "http?key=value"
    ERROR "://?key=value"
    ERROR "http://?key=value"
    ERROR "subdomain.domain?key=value"
    ERROR "httpsubdomain.domain?key=value"
    ERROR "://subdomain.domain?key=value"
    ERROR "http://subdomain.domain?key=value"
    ERROR ":80?key=value"
    ERROR "http:80?key=value"
    ERROR "://:80?key=value"
    ERROR "http://:80?key=value"
    ERROR "subdomain.domain:80?key=value"
    ERROR "httpsubdomain.domain:80?key=value"
    ERROR "://subdomain.domain:80?key=value"
    ERROR "http://subdomain.domain:80?key=value"
    OK    "/?key=value"
    OK    "http/?key=value"
    ERROR ":///?key=value"
    ERROR "http:///?key=value"
    OK    "subdomain.domain/?key=value"
    OK    "httpsubdomain.domain/?key=value"
    ERROR "://subdomain.domain/?key=value"
    OK    "http://subdomain.domain/?key=value"
    ERROR ":80/?key=value"
    OK    "http:80/?key=value"
    ERROR "://:80/?key=value"
    ERROR "http://:80/?key=value"
    OK    "subdomain.domain:80/?key=value"
    OK    "httpsubdomain.domain:80/?key=value"
    ERROR "://subdomain.domain:80/?key=value"
    OK    "http://subdomain.domain:80/?key=value"
    ERROR "#anchor"
    ERROR "http#anchor"
    ERROR "://#anchor"
    ERROR "http://#anchor"
    ERROR "subdomain.domain#anchor"
    ERROR "httpsubdomain.domain#anchor"
    ERROR "://subdomain.domain#anchor"
    ERROR "http://subdomain.domain#anchor"
    ERROR ":80#anchor"
    ERROR "http:80#anchor"
    ERROR "://:80#anchor"
    ERROR "http://:80#anchor"
    ERROR "subdomain.domain:80#anchor"
    ERROR "httpsubdomain.domain:80#anchor"
    ERROR "://subdomain.domain:80#anchor"
    ERROR "http://subdomain.domain:80#anchor"
    OK    "/#anchor"
    OK    "http/#anchor"
    ERROR ":///#anchor"
    ERROR "http:///#anchor"
    OK    "subdomain.domain/#anchor"
    OK    "httpsubdomain.domain/#anchor"
    ERROR "://subdomain.domain/#anchor"
    OK    "http://subdomain.domain/#anchor"
    ERROR ":80/#anchor"
    OK    "http:80/#anchor"
    ERROR "://:80/#anchor"
    ERROR "http://:80/#anchor"
    OK    "subdomain.domain:80/#anchor"
    OK    "httpsubdomain.domain:80/#anchor"
    ERROR "://subdomain.domain:80/#anchor"
    OK    "http://subdomain.domain:80/#anchor"
    ERROR "?key=value#anchor"
    ERROR "http?key=value#anchor"
    ERROR "://?key=value#anchor"
    ERROR "http://?key=value#anchor"
    ERROR "subdomain.domain?key=value#anchor"
    ERROR "httpsubdomain.domain?key=value#anchor"
    ERROR "://subdomain.domain?key=value#anchor"
    ERROR "http://subdomain.domain?key=value#anchor"
    ERROR ":80?key=value#anchor"
    ERROR "http:80?key=value#anchor"
    ERROR "://:80?key=value#anchor"
    ERROR "http://:80?key=value#anchor"
    ERROR "subdomain.domain:80?key=value#anchor"
    ERROR "httpsubdomain.domain:80?key=value#anchor"
    ERROR "://subdomain.domain:80?key=value#anchor"
    ERROR "http://subdomain.domain:80?key=value#anchor"
    OK    "/?key=value#anchor"
    OK    "http/?key=value#anchor"
    ERROR ":///?key=value#anchor"
    ERROR "http:///?key=value#anchor"
    OK    "subdomain.domain/?key=value#anchor"
    OK    "httpsubdomain.domain/?key=value#anchor"
    ERROR "://subdomain.domain/?key=value#anchor"
    OK    "http://subdomain.domain/?key=value#anchor"
    ERROR ":80/?key=value#anchor"
    OK    "http:80/?key=value#anchor"
    ERROR "://:80/?key=value#anchor"
    ERROR "http://:80/?key=value#anchor"
    OK    "subdomain.domain:80/?key=value#anchor"
    OK    "httpsubdomain.domain:80/?key=value#anchor"
    ERROR "://subdomain.domain:80/?key=value#anchor"
    OK    "http://subdomain.domain:80/?key=value#anchor"
EOT;

$parts = [
    1 => 'http', '://', 'subdomain.domain', ':80', '/', '?key=value', '#anchor'
];

$lines = [];
for ($i = 0b0000000; $i <= 0b1111111; $i++) {
    $c_value = '';
    $is_part_active_1 = $i & 0b0000001;
    $is_part_active_2 = $i & 0b0000010;
    $is_part_active_3 = $i & 0b0000100;
    $is_part_active_4 = $i & 0b0001000;
    $is_part_active_5 = $i & 0b0010000;
    $is_part_active_6 = $i & 0b0100000;
    $is_part_active_7 = $i & 0b1000000;
    if ($is_part_active_1) $c_value.= $parts[1];
    if ($is_part_active_2) $c_value.= $parts[2];
    if ($is_part_active_3) $c_value.= $parts[3];
    if ($is_part_active_4) $c_value.= $parts[4];
    if ($is_part_active_5) $c_value.= $parts[5];
    if ($is_part_active_6) $c_value.= $parts[6];
    if ($is_part_active_7) $c_value.= $parts[7];
    $c_url = new url($c_value);
    $lines[] = '    '.($c_url->has_error ? 'ERROR' : 'OK   ').' "'.$c_value.'"';
}

print nl.'BEGIN TEST:'.nl.implode(nl, $lines);
if (implode(nl, $lines) === $result) {
    print nl.'PASSED'.nl;
}

