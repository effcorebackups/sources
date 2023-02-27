<?php

const nl = "\n";

# ─────────────────────────────────────────────────────────────────────
# full_get() test
# ─────────────────────────────────────────────────────────────────────

$_SERVER['HTTP_HOST'] = 'subdomain.domain';

$urls = [
                           '/'                                 => 'http://subdomain.domain',
                           '/?key=value'                       => 'http://subdomain.domain/?key=value',
                           '/#anchor'                          => 'http://subdomain.domain/#anchor',
                           '/?key=value#anchor'                => 'http://subdomain.domain/?key=value#anchor',
                           '/dir/subdir/page'                  => 'http://subdomain.domain/dir/subdir/page',
                           '/dir/subdir/page?key=value'        => 'http://subdomain.domain/dir/subdir/page?key=value',
                           '/dir/subdir/page#anchor'           => 'http://subdomain.domain/dir/subdir/page#anchor',
                           '/dir/subdir/page?key=value#anchor' => 'http://subdomain.domain/dir/subdir/page?key=value#anchor',
           'subdomain.domain'                                  => 'http://subdomain.domain',
           'subdomain.domain/?key=value'                       => 'http://subdomain.domain/?key=value',
           'subdomain.domain/#anchor'                          => 'http://subdomain.domain/#anchor',
           'subdomain.domain/?key=value#anchor'                => 'http://subdomain.domain/?key=value#anchor',
           'subdomain.domain/dir/subdir/page'                  => 'http://subdomain.domain/dir/subdir/page',
           'subdomain.domain/dir/subdir/page?key=value'        => 'http://subdomain.domain/dir/subdir/page?key=value',
           'subdomain.domain/dir/subdir/page#anchor'           => 'http://subdomain.domain/dir/subdir/page#anchor',
           'subdomain.domain/dir/subdir/page?key=value#anchor' => 'http://subdomain.domain/dir/subdir/page?key=value#anchor',
    'http://subdomain.domain'                                  => 'http://subdomain.domain',
    'http://subdomain.domain/?key=value'                       => 'http://subdomain.domain/?key=value',
    'http://subdomain.domain/#anchor'                          => 'http://subdomain.domain/#anchor',
    'http://subdomain.domain/?key=value#anchor'                => 'http://subdomain.domain/?key=value#anchor',
    'http://subdomain.domain/dir/subdir/page'                  => 'http://subdomain.domain/dir/subdir/page',
    'http://subdomain.domain/dir/subdir/page?key=value'        => 'http://subdomain.domain/dir/subdir/page?key=value',
    'http://subdomain.domain/dir/subdir/page#anchor'           => 'http://subdomain.domain/dir/subdir/page#anchor',
    'http://subdomain.domain/dir/subdir/page?key=value#anchor' => 'http://subdomain.domain/dir/subdir/page?key=value#anchor',
  ];


foreach ($urls as $c_value => $c_expected) {
    $c_info = new url($c_value);
    $c_result = $c_info->full_get() === $c_expected;
    if ($c_result)
         print 'true "' .$c_value.'" '.$c_info->full_get().nl;
    else print 'FALSE "'.$c_value.'"'.nl;
}

