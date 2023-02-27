<?php

namespace effcore;

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) crc32($i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) crc32($i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) crc32($i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) crc32($i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) crc32($i);  $t9 = microtime(true);
print 'crc32: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.093

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) md5($i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) md5($i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) md5($i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) md5($i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) md5($i);  $t9 = microtime(true);
print 'md5: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.320

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) sha1($i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) sha1($i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) sha1($i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) sha1($i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) sha1($i);  $t9 = microtime(true);
print 'sha1: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.335

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md2', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md2', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md2', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md2', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md2', $i);  $t9 = microtime(true);
print 'hash md2: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 4.773

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md4', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md4', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md4', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md4', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md4', $i);  $t9 = microtime(true);
print 'hash md4: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.329

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md5', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md5', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md5', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md5', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('md5', $i);  $t9 = microtime(true);
print 'hash md5: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.374

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha1', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha1', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha1', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha1', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha1', $i);  $t9 = microtime(true);
print 'hash sha1: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.390

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha256', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha256', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha256', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha256', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha256', $i);  $t9 = microtime(true);
print 'hash sha256: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.671

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512/256', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512/256', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512/256', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512/256', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512/256', $i);  $t9 = microtime(true);
print 'hash sha512/256: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.852

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha512', $i);  $t9 = microtime(true);
print 'hash sha512: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.879

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32', $i);  $t9 = microtime(true);
print 'hash crc32: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.198

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32b', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32b', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32b', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32b', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('crc32b', $i);  $t9 = microtime(true);
print 'hash crc32b: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.200

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-224', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-224', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-224', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-224', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-224', $i);  $t9 = microtime(true);
print 'hash sha3-224: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 4.512

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-256', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-256', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-256', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-256', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-256', $i);  $t9 = microtime(true);
print 'hash sha3-256: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 4.680

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-512', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-512', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-512', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-512', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('sha3-512', $i);  $t9 = microtime(true);
print 'hash sha3-512: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 5.100

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd128', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd128', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd128', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd128', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd128', $i);  $t9 = microtime(true);
print 'hash ripemd128: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.572

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd320', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd320', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd320', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd320', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('ripemd320', $i);  $t9 = microtime(true);
print 'hash ripemd320: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.728

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('whirlpool', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('whirlpool', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('whirlpool', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('whirlpool', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('whirlpool', $i);  $t9 = microtime(true);
print 'hash whirlpool: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 1.278

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger128,3', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger128,3', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger128,3', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger128,3', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger128,3', $i);  $t9 = microtime(true);
print 'hash tiger128,3: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.391

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger192,4', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger192,4', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger192,4', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger192,4', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('tiger192,4', $i);  $t9 = microtime(true);
print 'hash tiger192,4: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.443

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru', $i);  $t9 = microtime(true);
print 'hash snefru: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 2.707

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru256', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru256', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru256', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru256', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('snefru256', $i);  $t9 = microtime(true);
print 'hash snefru256: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 2.716

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost', $i);  $t9 = microtime(true);
print 'hash gost: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 1.970

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost-crypto', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost-crypto', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost-crypto', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost-crypto', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('gost-crypto', $i);  $t9 = microtime(true);
print 'hash gost-crypto: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 2.153

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('adler32', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('adler32', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('adler32', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('adler32', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('adler32', $i);  $t9 = microtime(true);
print 'hash adler32: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.204

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv132', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv132', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv132', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv132', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv132', $i);  $t9 = microtime(true);
print 'hash fnv132: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.195

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a32', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a32', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a32', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a32', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a32', $i);  $t9 = microtime(true);
print 'hash fnv1a32: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.201

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv164', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv164', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv164', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv164', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv164', $i);  $t9 = microtime(true);
print 'hash fnv164: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.203

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t9 = microtime(true);
print 'hash fnv1a64: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.209

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('fnv1a64', $i);  $t9 = microtime(true);
print 'hash fnv1a64: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.209

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('joaat', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('joaat', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('joaat', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('joaat', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('joaat', $i);  $t9 = microtime(true);
print 'hash joaat: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.200

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval128,3', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval128,3', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval128,3', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval128,3', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval128,3', $i);  $t9 = microtime(true);
print 'hash haval128,3: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 0.747

$t0 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval256,5', $i);  $t1 = microtime(true);
$t2 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval256,5', $i);  $t3 = microtime(true);
$t4 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval256,5', $i);  $t5 = microtime(true);
$t6 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval256,5', $i);  $t7 = microtime(true);
$t8 = microtime(true);  for($i = 0; $i < 1000000; $i++) hash('haval256,5', $i);  $t9 = microtime(true);
print 'hash haval256,5: '.(($t1-$t0) + ($t3-$t2) + ($t5-$t4) + ($t7-$t6) + ($t9-$t8)) / 5; # 1.134
