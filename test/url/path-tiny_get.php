<?php

const nl = "\n";

# ─────────────────────────────────────────────────────────────────────
# tiny_get() test
# ─────────────────────────────────────────────────────────────────────

$_SERVER['HTTP_HOST'] = 'subdomain.domain';

$urls = [
                           '/'                                 => '/',
                           '/?key=value'                       => '/?key=value',
                           '/#anchor'                          => '/#anchor',
                           '/?key=value#anchor'                => '/?key=value#anchor',
                           '/dir/subdir/page'                  => '/dir/subdir/page',
                           '/dir/subdir/page?key=value'        => '/dir/subdir/page?key=value',
                           '/dir/subdir/page#anchor'           => '/dir/subdir/page#anchor',
                           '/dir/subdir/page?key=value#anchor' => '/dir/subdir/page?key=value#anchor',
           'subdomain.domain'                                  => '/',
           'subdomain.domain/?key=value'                       => '/?key=value',
           'subdomain.domain/#anchor'                          => '/#anchor',
           'subdomain.domain/?key=value#anchor'                => '/?key=value#anchor',
           'subdomain.domain/dir/subdir/page'                  => '/dir/subdir/page',
           'subdomain.domain/dir/subdir/page?key=value'        => '/dir/subdir/page?key=value',
           'subdomain.domain/dir/subdir/page#anchor'           => '/dir/subdir/page#anchor',
           'subdomain.domain/dir/subdir/page?key=value#anchor' => '/dir/subdir/page?key=value#anchor',
    'http://subdomain.domain'                                  => '/',
    'http://subdomain.domain/?key=value'                       => '/?key=value',
    'http://subdomain.domain/#anchor'                          => '/#anchor',
    'http://subdomain.domain/?key=value#anchor'                => '/?key=value#anchor',
    'http://subdomain.domain/dir/subdir/page'                  => '/dir/subdir/page',
    'http://subdomain.domain/dir/subdir/page?key=value'        => '/dir/subdir/page?key=value',
    'http://subdomain.domain/dir/subdir/page#anchor'           => '/dir/subdir/page#anchor',
    'http://subdomain.domain/dir/subdir/page?key=value#anchor' => '/dir/subdir/page?key=value#anchor',
];


foreach ($urls as $c_value => $c_expected) {
    $c_info = new url($c_value);
    $c_result = $c_info->tiny_get() === $c_expected;
    if ($c_result)
         print 'true "' .$c_value.'" '.$c_info->tiny_get().nl;
    else print 'FALSE "'.$c_value.'"'.nl;
}

