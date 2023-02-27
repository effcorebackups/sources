<?php

var_dump( core::bytes_to_human(0                     ) == '0B'       );
var_dump( core::bytes_to_human(1                     ) == '1B'       );
var_dump( core::bytes_to_human(64                    ) == '64B'      );
var_dump( core::bytes_to_human(512                   ) == '512B'     );
var_dump( core::bytes_to_human(1024 + 0              ) == '1K'       );
var_dump( core::bytes_to_human(1024 - 1              ) == '1023B'    );
var_dump( core::bytes_to_human(1024 + 1              ) == '1025B'    );
var_dump( core::bytes_to_human(1024 * 2 + 0          ) == '2K'       );
var_dump( core::bytes_to_human(1024 * 2 - 1          ) == '2047B'    );
var_dump( core::bytes_to_human(1024 * 2 + 1          ) == '2049B'    );
var_dump( core::bytes_to_human(1024 * 1024 + 0       ) == '1M'       );
var_dump( core::bytes_to_human(1024 * 1024 - 1       ) == '1048575B' );
var_dump( core::bytes_to_human(1024 * 1024 + 1       ) == '1048577B' );
var_dump( core::bytes_to_human(1024 * 1024 - 1024    ) == '1023K'    );
var_dump( core::bytes_to_human(1024 * 1024 + 1024    ) == '1025K'    );
var_dump( core::bytes_to_human(1024 * 1024 * 2 + 0   ) == '2M'       );
var_dump( core::bytes_to_human(1024 * 1024 * 2 - 1   ) == '2097151B' );
var_dump( core::bytes_to_human(1024 * 1024 * 2 + 1   ) == '2097153B' );
var_dump( core::bytes_to_human(1024 * 1024 * 2 - 1024) == '2047K'    );
var_dump( core::bytes_to_human(1024 * 1024 * 2 + 1024) == '2049K'    );

# ─────────────────────────────────────────────────────────────────────
# nK
# nB | nnB | nnnnB
# ─────────────────────────────────────────────────────────────────────
var_dump( core::human_to_bytes('0B'   ) === 0    );
var_dump( core::human_to_bytes('8B'   ) === 8    );
var_dump( core::human_to_bytes('64B'  ) === 64   );
var_dump( core::human_to_bytes('512B' ) === 512  );
var_dump( core::human_to_bytes('1023B') === 1023 );
var_dump( core::human_to_bytes('1024B') === 1024 );
var_dump( core::human_to_bytes('1025B') === 1025 );
var_dump( core::human_to_bytes('1K'   ) === 1024 ); # == 1K   == 1024b
var_dump( core::human_to_bytes('1536B') === 1536 ); # == 1.5K == (1024b + 512b)
var_dump( core::human_to_bytes('2K'   ) === 2048 ); # == 2K   == 2048b
var_dump( core::human_to_bytes('2560B') === 2560 ); # == 2.5K == (2048b + 512b)

# ─────────────────────────────────────────────────────────────────────
# nM
# nK | nnK | nnnK | nnnnK
# nB | nnB | nnnB | nnnnB | nnnnnB | nnnnnnB …
# ─────────────────────────────────────────────────────────────────────
var_dump( core::human_to_bytes('8K'         ) === 8192       );
var_dump( core::human_to_bytes('64K'        ) === 65536      );
var_dump( core::human_to_bytes('512K'       ) === 524288     );
var_dump( core::human_to_bytes('1023K'      ) === 1047552    );
var_dump( core::human_to_bytes('1024K'      ) === 1048576    );
var_dump( core::human_to_bytes('1025K'      ) === 1049600    );
var_dump( core::human_to_bytes('1M'         ) === 1048576    ); # == 1M   == 1024k == (1024b * 1024b)
var_dump( core::human_to_bytes('1536K'      ) === 1572864    ); # == 1.5M == (1024k + 512k) == (1024b * 1024b + 1024b * 512b)
var_dump( core::human_to_bytes('2M'         ) === 2097152    ); # == 2M   == 2048k == (1024k * 2) == (1024b * 1024b * 2)
var_dump( core::human_to_bytes('2560K'      ) === 2621440    ); # == 2.5M == 2048k + 512k
var_dump( core::human_to_bytes('1073741824B') === 1073741824 ); # == 1G
