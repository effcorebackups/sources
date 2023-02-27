<?php

$url = new url('http://example.com/test_utf?p1='.urlencode('знач.1'));
print $url->query_arg_select('p1')    .nl; # знач.1
print $url->full_get()                .nl; # http://example.com/test_utf?p1=%D0%B7%D0%BD%D0%B0%D1%87.1
$url->query_arg_insert('p2', 'знач.2').nl;
print $url->query_arg_select('p2')    .nl; # знач.2
print $url->full_get()                .nl; # http://example.com/test_utf?p1=%D0%B7%D0%BD%D0%B0%D1%87.1&p2=%D0%B7%D0%BD%D0%B0%D1%87.2
