<?php

namespace effcore;

var_dump( (array)request::software_get_info('nginx/1.1X.X'                                  ) === ['name' => 'nginx',                'version' => '1.1X.X'] );
var_dump( (array)request::software_get_info('Apache/2.4.XX (Unix) LibreSSL/2.2.X PHP/5.6.XX') === ['name' => 'apache',               'version' => '2.4.XX'] );
var_dump( (array)request::software_get_info('Apache/2.4.XX (Win32) OpenSSL/1.X.X PHP/5.6.XX') === ['name' => 'apache',               'version' => '2.4.XX'] );
var_dump( (array)request::software_get_info('Microsoft-IIS/7.5'                             ) === ['name' => 'microsoft-iis',        'version' => '7.5']    );
var_dump( (array)request::software_get_info('lighttpd/1.X.XX'                               ) === ['name' => 'lighttpd',             'version' => '1.X.XX'] );
var_dump( (array)request::software_get_info('Unknown/1.0.XX (Linux)'                        ) === ['name' => 'unknown',              'version' => '1.0.XX'] );
var_dump( (array)request::software_get_info('Unknown server v-1-0'                          ) === ['name' => 'unknown server v-1-0', 'version' => '']       );
