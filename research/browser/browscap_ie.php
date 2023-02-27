<?php

##########################
### collect statistics ###
##########################

$test[] = [
    'string' => '...MSIE 7.0...Trident/8...',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => '...MSIE 7.0...',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => '...Trident/8...',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

# ─────────────────────────────────────────────────────────────────────
# IE 11.0
# ─────────────────────────────────────────────────────────────────────

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 10.0*; Trident/8*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.4*; Trident/8*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.3*; Trident/8*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.1*; Trident/8*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows*; Trident/8*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8',
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 10.0*Trident/7*Touch*rv:11.0*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.4*Trident/7*Touch*rv:11.0*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.3*Trident/7*Touch*rv:11.0*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows*Trident/7*Touch*rv:11.0*)*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 10.0*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.4*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.3*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*x64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 10.0*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.4*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.3*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*WOW64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*x64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 10.0*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.4*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.3*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*WOW64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*x64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 10.0*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.4*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.3*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*WOW64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*x64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 10.0*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.4*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.3*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*WOW64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*x64*Trident/7*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 10.0*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.4*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.3*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*x64*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 10.0*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.4*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.3*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*WOW64*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*x64*Trident/8*Touch*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 10.0*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.4*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.3*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.1*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 10.0*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.4*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.3*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*x64*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 10.0*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.4*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.3*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*x64*Trident/7*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 10.0*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.4*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.3*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.1*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*WOW64*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*x64*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows NT 10.0*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows NT 6.4*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows NT 6.3*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows NT 6.1*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows*WOW64*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows*x64*Trident/7*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 10.0*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.4*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.3*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.1*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*WOW64*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*x64*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 10.0*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.4*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.3*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.1*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*WOW64*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*x64*Trident/7*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 10.0*Trident/7*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.4*Trident/7*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.3*Trident/7*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.1*Trident/7*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*Trident/7*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*WOW64*Trident/7*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*x64*Trident/7*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.3*; Trident/7*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.1*; Trident/7*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows*; Trident/7*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (Windows 95; Anonymisiert*; Trident/7*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0; TOB* (*Windows NT 10.0*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0; TOB* (*Windows NT 6.4*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0; TOB* (*Windows NT 6.3*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0; TOB* (*Windows NT 6.1*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0; TOB* (*Windows*Trident/7*rv:11.0*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '7'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 10.0*Trident/8; rv:550) applewebkit* (*khtml*like*gecko*) Version/7.0 Safari/*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.4*Trident/8; rv:550) applewebkit* (*khtml*like*gecko*) Version/7.0 Safari/*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.3*Trident/8; rv:550) applewebkit* (*khtml*like*gecko*) Version/7.0 Safari/*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows NT 6.1*Trident/8; rv:550) applewebkit* (*khtml*like*gecko*) Version/7.0 Safari/*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*Windows*Trident/8; rv:550) applewebkit* (*khtml*like*gecko*) Version/7.0 Safari/*',
    'name'   => 'msie',    'name_version' => '11', # auto-detection
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 10.0*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.4*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.3*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*x64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 10.0*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.4*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.3*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*x64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 10.0*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.4*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.3*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.1*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*WOW64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*x64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 10.0*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.4*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.3*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows NT 6.1*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*WOW64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0; *Windows*x64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 10.0*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.4*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.3*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows NT 6.1*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*WOW64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0; *Windows*x64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 10.0*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.4*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.3*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows NT 6.1*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*WOW64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; *Windows*x64*Trident/8*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '8'
];

# ─────────────────────────────────────────────────────────────────────
# IE 10.0
# ─────────────────────────────────────────────────────────────────────

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.2*Trident/6*Xbox; Xbox One*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.2*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.1*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*Windows*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.*Windows NT 6.2*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.*Windows NT 6.1*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.*Windows*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.*Windows*WOW64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.*Windows*x64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.*Windows NT 6.2*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.*Windows NT 6.1*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.*Windows*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.*Windows*WOW64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.*Windows*x64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.*Windows NT 6.2*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.*Windows NT 6.1*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.*Windows*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.*Windows*WOW64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.*Windows*x64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.*Windows NT 6.2*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.*Windows NT 6.1*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.*Windows*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.*Windows*WOW64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.*Windows*x64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.*Windows NT 6.2*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.*Windows NT 6.1*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.*Windows*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.*Windows*WOW64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.*Windows*x64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.*Windows NT 6.2*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.*Windows NT 6.1*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.*Windows*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.*Windows*WOW64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.*Windows*x64*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0; Windows 95; Anonymisiert*Trident/6*)*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*; Trident/6; *Windows NT 6.1*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*; Trident/6; *Windows*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*; *Windows NT 6.2*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*; *Windows NT 6.1*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 10.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 10.0*; *Windows NT 6.2*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 10.0*; *Windows NT 6.1*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 10.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '10',
    'core'   => 'trident', 'core_version' => '6' # auto-detection
];

# ─────────────────────────────────────────────────────────────────────
# IE 9.0
# ─────────────────────────────────────────────────────────────────────

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5; Xbox*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0*; *Windows NT 6.0*Trident/5*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0*; *Windows*Trident/5*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.0*Trident/5*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0*; *Windows*Trident/5*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*x64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.0*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*x64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.1*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows NT 6.0*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*WOW64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0; *Windows*x64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows NT 6.1*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows NT 6.0*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows*WOW64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0; *Windows*x64*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*MSIE 9.0*; *Windows NT 6.1*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*MSIE 9.0*; *Windows NT 6.0*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (*MSIE 9.0*; *Windows*Trident/5*)*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.0*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 9.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0*; *Windows NT 6.1*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0*; *Windows NT 6.0*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 9.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '9',
    'core'   => 'trident', 'core_version' => '5', # auto-detection
];

# ─────────────────────────────────────────────────────────────────────
# IE 8.0
# ─────────────────────────────────────────────────────────────────────

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0; *Windows NT 6.1*Trident/4*Mozilla/4.0 (compatible*; MSIE 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0; *Windows NT 6.0*Trident/4*Mozilla/4.0 (compatible*; MSIE 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0; *Windows*Trident/4*Mozilla/4.0 (compatible*; MSIE 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0; *Windows*WOW64*Trident/4*Mozilla/4.0 (compatible*; MSIE 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0; *Windows*x64*Trident/4*Mozilla/4.0 (compatible*; MSIE 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0*; *Windows NT 6.1*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0*; *Windows NT 6.0*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.0*Trident/4*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0*; *Windows NT 6.0*Trident/4*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 8.0*; *Windows*Trident/4*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0; *Windows*x64*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows NT 6.0*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*WOW64*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0; *Windows*x64*Trident/4*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '4'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.0*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '8',
    'core'   => 'trident', 'core_version' => '4' # auto-detection
];

# ─────────────────────────────────────────────────────────────────────
# IE 7.0b
# ─────────────────────────────────────────────────────────────────────

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0b*; *Windows NT 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0b*; *Windows*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (*MSIE 7.0b*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (*MSIE 7.0b*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

# ─────────────────────────────────────────────────────────────────────
# IE 7.0
# ─────────────────────────────────────────────────────────────────────

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows NT 6.0*Mozilla/4.0 (compatible*; MSIE 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows*Mozilla/4.0 (compatible*; MSIE 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows NT 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0*; *Windows NT 6.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 7.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0*; *Windows NT 6.1*Trident/3.1; Xbox*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3'
];

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 7.0*; *Windows NT 6.2*Trident/3.1; Xbox; Xbox One*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3'
];

$test[] = [
    'string' => 'Mozilla/4.0 (*MSIE 7.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (*MSIE 7.0*',
    'name'   => 'msie',    'name_version' => '7',
    'core'   => 'trident', 'core_version' => '3' # auto-detection
];

# ─────────────────────────────────────────────────────────────────────
# IE 6.0
# ─────────────────────────────────────────────────────────────────────

$test[] = [
    'string' => 'Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '6',
    'core'   => 'trident', 'core_version' => '2' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (compatible; MSIE 6.0*; *Windows*',
    'name'   => 'msie',    'name_version' => '6',
    'core'   => 'trident', 'core_version' => '2' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/4.0 (*MSIE 6.0*)*',
    'name'   => 'msie',    'name_version' => '6',
    'core'   => 'trident', 'core_version' => '2' # auto-detection
];

$test[] = [
    'string' => 'Mozilla/5.0 (*MSIE 6.0*)*',
    'name'   => 'msie',    'name_version' => '6',
    'core'   => 'trident', 'core_version' => '2' # auto-detection
];


############
### test ###
############

function test($string) {
    $return = new \stdCLass;
    # detect Internet Explorer v.6-v.11
    # note: unexist version like "12" will be identified as "1"
    $matches = [];
    $ie_core_to_name = ['8' => '11', '7' => '11', '6' => '10', '5' => '9', '4' => '8', '3' => '7', '2' => '6', '1' => '5'];
    $ie_name_to_core = array_flip($ie_core_to_name);
    preg_match('%^(?:.+?(?<name>MSIE) '.'(?<name_v>11|10|9|8|7|6|5|4|3|2|1)|)'.
                 '(?:.+?(?<core>Trident)/(?<core_v>8|7|6|5|4|3|2|1)|)%', $string, $matches);
    $return->name = isset($matches['name']) ? strtolower($matches['name']) : '';
    $return->core = isset($matches['core']) ? strtolower($matches['core']) : '';
    $return->core_version = isset($matches['core_v']) ? $matches['core_v'] : '';
    $return->name_version = isset($matches['name_v']) ? $matches['name_v'] : '';
    if ($return->name == '' && $return->core && isset($ie_core_to_name[$matches['core_v']])) {$return->name = 'msie';    $return->name_version = $ie_core_to_name[$matches['core_v']];}
    if ($return->core == '' && $return->name && isset($ie_name_to_core[$matches['name_v']])) {$return->core = 'trident'; $return->core_version = $ie_name_to_core[$matches['name_v']];}
    return $return;
}

foreach ($test as $c_item) {
    $c_result = test($c_item['string']);
    print $c_item['string']."\n";
    print 'name = '        .$c_result->name."\n";
    print 'name_version = '.$c_result->name_version."\n";
    print 'core = '        .$c_result->core."\n";
    print 'core_version = '.$c_result->core_version."\n";
    print $c_item['name']         == $c_result->name         ? 'true'."\n" : 'FALSE'."\n";
    print $c_item['name_version'] == $c_result->name_version ? 'true'."\n" : 'FALSE'."\n";
    print $c_item['core']         == $c_result->core         ? 'true'."\n" : 'FALSE'."\n";
    print $c_item['core_version'] == $c_result->core_version ? 'true'."\n" : 'FALSE'."\n";
    print "\n\n\n";
}
