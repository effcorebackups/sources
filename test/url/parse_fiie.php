<?php

const nl = "\n";

# ─────────────────────────────────────────────────────────────────────
# possible transpositions of '"|.|..|...|0'
# ─────────────────────────────────────────────────────────────────────

/*  │"  │   │   │ */           $test['http://example.com/'.'']          = ['dirs' => null, 'name' => null, 'type' => null]; # no file
/*  │.  │   │   │ */           $test['http://example.com/'.'.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.. │   │   │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │...│   │   │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │0  │   │   │ */           $test['http://example.com/'.'0']         = ['dirs' => dir_root, 'name' => '0', 'type' => ''];
/*  │"  │"  │   │ */           $test['http://example.com/'.'']          = ['dirs' => null, 'name' => null, 'type' => null]; # no file
/*  │"  │.  │   │ */           $test['http://example.com/'.'.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │"  │.. │   │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │"  │...│   │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │"  │0  │   │ */           $test['http://example.com/'.'0']         = ['dirs' => dir_root, 'name' => '0', 'type' => ''];
/*  │.  │"  │   │ */           $test['http://example.com/'.'.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.  │.  │   │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.  │.. │   │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │.  │...│   │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.  │0  │   │ */           $test['http://example.com/'.'.0']        = ['dirs' => dir_root, 'name' => '', 'type' => '0'];
/*  │.. │"  │   │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.. │.  │   │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │.. │.. │   │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.. │...│   │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.. │0  │   │ */           $test['http://example.com/'.'..0']       = ['dirs' => dir_root, 'name' => '.', 'type' => '0'];
/*  │...│"  │   │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │...│.  │   │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │...│.. │   │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │...│...│   │ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │...│0  │   │ */           $test['http://example.com/'.'...0']      = ['dirs' => dir_root, 'name' => '..', 'type' => '0'];
/*  │0  │"  │   │ */           $test['http://example.com/'.'0']         = ['dirs' => dir_root, 'name' => '0', 'type' => ''];
/*  │0  │.  │   │ */           $test['http://example.com/'.'0.']        = ['dirs' => dir_root, 'name' => '0.', 'type' => ''];
/*  │0  │.. │   │ */           $test['http://example.com/'.'0..']       = ['dirs' => dir_root, 'name' => '0..', 'type' => ''];
/*  │0  │...│   │ */           $test['http://example.com/'.'0...']      = ['dirs' => dir_root, 'name' => '0...', 'type' => ''];
/*  │0  │0  │   │ */           $test['http://example.com/'.'00']        = ['dirs' => dir_root, 'name' => '00', 'type' => ''];
/*  │"  │"  │"  │ */           $test['http://example.com/'.'']          = ['dirs' => null, 'name' => null, 'type' => null]; # no file
/*  │"  │"  │.  │ */           $test['http://example.com/'.'.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │"  │"  │.. │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │"  │"  │...│ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │"  │"  │0  │ */           $test['http://example.com/'.'0']         = ['dirs' => dir_root, 'name' => '0', 'type' => ''];
/*  │"  │.  │"  │ */           $test['http://example.com/'.'.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │"  │.  │.  │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │"  │.  │.. │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │"  │.  │...│ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │"  │.  │0  │ */           $test['http://example.com/'.'.0']        = ['dirs' => dir_root, 'name' => '', 'type' => '0'];
/*  │"  │.. │"  │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │"  │.. │.  │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │"  │.. │.. │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │"  │.. │...│ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │"  │.. │0  │ */           $test['http://example.com/'.'..0']       = ['dirs' => dir_root, 'name' => '.', 'type' => '0'];
/*  │"  │...│"  │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │"  │...│.  │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │"  │...│.. │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │"  │...│...│ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │"  │...│0  │ */           $test['http://example.com/'.'...0']      = ['dirs' => dir_root, 'name' => '..', 'type' => '0'];
/*  │"  │0  │"  │ */           $test['http://example.com/'.'0']         = ['dirs' => dir_root, 'name' => '0', 'type' => ''];
/*  │"  │0  │.  │ */           $test['http://example.com/'.'0.']        = ['dirs' => dir_root, 'name' => '0.', 'type' => ''];
/*  │"  │0  │.. │ */           $test['http://example.com/'.'0..']       = ['dirs' => dir_root, 'name' => '0..', 'type' => ''];
/*  │"  │0  │...│ */           $test['http://example.com/'.'0...']      = ['dirs' => dir_root, 'name' => '0...', 'type' => ''];
/*  │"  │0  │0  │ */           $test['http://example.com/'.'00']        = ['dirs' => dir_root, 'name' => '00', 'type' => ''];
/*  │.  │"  │"  │ */           $test['http://example.com/'.'.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.  │"  │.  │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.  │"  │.. │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │.  │"  │...│ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.  │"  │0  │ */           $test['http://example.com/'.'.0']        = ['dirs' => dir_root, 'name' => '', 'type' => '0'];
/*  │.  │.  │"  │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.  │.  │.  │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │.  │.  │.. │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.  │.  │...│ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.  │.  │0  │ */           $test['http://example.com/'.'..0']       = ['dirs' => dir_root, 'name' => '.', 'type' => '0'];
/*  │.  │.. │"  │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │.  │.. │.  │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.  │.. │.. │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.  │.. │...│ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │.  │.. │0  │ */           $test['http://example.com/'.'...0']      = ['dirs' => dir_root, 'name' => '..', 'type' => '0'];
/*  │.  │...│"  │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.  │...│.  │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.  │...│.. │ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │.  │...│...│ */           $test['http://example.com/'.'.......']   = ['dirs' => dir_root, 'name' => '.......', 'type' => ''];
/*  │.  │...│0  │ */           $test['http://example.com/'.'....0']     = ['dirs' => dir_root, 'name' => '...', 'type' => '0'];
/*  │.  │0  │"  │ */           $test['http://example.com/'.'.0']        = ['dirs' => dir_root, 'name' => '', 'type' => '0'];
/*  │.  │0  │.  │ */           $test['http://example.com/'.'.0.']       = ['dirs' => dir_root, 'name' => '.0.', 'type' => ''];
/*  │.  │0  │.. │ */           $test['http://example.com/'.'.0..']      = ['dirs' => dir_root, 'name' => '.0..', 'type' => ''];
/*  │.  │0  │...│ */           $test['http://example.com/'.'.0...']     = ['dirs' => dir_root, 'name' => '.0...', 'type' => ''];
/*  │.  │0  │0  │ */           $test['http://example.com/'.'.00']       = ['dirs' => dir_root, 'name' => '', 'type' => '00'];
/*  │.. │"  │"  │ */           $test['http://example.com/'.'..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │.. │"  │.  │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │.. │"  │.. │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.. │"  │...│ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.. │"  │0  │ */           $test['http://example.com/'.'..0']       = ['dirs' => dir_root, 'name' => '.', 'type' => '0'];
/*  │.. │.  │"  │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │.. │.  │.  │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.. │.  │.. │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.. │.  │...│ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │.. │.  │0  │ */           $test['http://example.com/'.'...0']      = ['dirs' => dir_root, 'name' => '..', 'type' => '0'];
/*  │.. │.. │"  │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │.. │.. │.  │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.. │.. │.. │ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │.. │.. │...│ */           $test['http://example.com/'.'.......']   = ['dirs' => dir_root, 'name' => '.......', 'type' => ''];
/*  │.. │.. │0  │ */           $test['http://example.com/'.'....0']     = ['dirs' => dir_root, 'name' => '...', 'type' => '0'];
/*  │.. │...│"  │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │.. │...│.  │ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │.. │...│.. │ */           $test['http://example.com/'.'.......']   = ['dirs' => dir_root, 'name' => '.......', 'type' => ''];
/*  │.. │...│...│ */           $test['http://example.com/'.'........']  = ['dirs' => dir_root, 'name' => '........', 'type' => ''];
/*  │.. │...│0  │ */           $test['http://example.com/'.'.....0']    = ['dirs' => dir_root, 'name' => '....', 'type' => '0'];
/*  │.. │0  │"  │ */           $test['http://example.com/'.'..0']       = ['dirs' => dir_root, 'name' => '.', 'type' => '0'];
/*  │.. │0  │.  │ */           $test['http://example.com/'.'..0.']      = ['dirs' => dir_root, 'name' => '..0.', 'type' => ''];
/*  │.. │0  │.. │ */           $test['http://example.com/'.'..0..']     = ['dirs' => dir_root, 'name' => '..0..', 'type' => ''];
/*  │.. │0  │...│ */           $test['http://example.com/'.'..0...']    = ['dirs' => dir_root, 'name' => '..0...', 'type' => ''];
/*  │.. │0  │0  │ */           $test['http://example.com/'.'..00']      = ['dirs' => dir_root, 'name' => '.', 'type' => '00'];
/*  │...│"  │"  │ */           $test['http://example.com/'.'...']       = ['dirs' => dir_root, 'name' => '...', 'type' => ''];
/*  │...│"  │.  │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │...│"  │.. │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │...│"  │...│ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │...│"  │0  │ */           $test['http://example.com/'.'...0']      = ['dirs' => dir_root, 'name' => '..', 'type' => '0'];
/*  │...│.  │"  │ */           $test['http://example.com/'.'....']      = ['dirs' => dir_root, 'name' => '....', 'type' => ''];
/*  │...│.  │.  │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │...│.  │.. │ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │...│.  │...│ */           $test['http://example.com/'.'.......']   = ['dirs' => dir_root, 'name' => '.......', 'type' => ''];
/*  │...│.  │0  │ */           $test['http://example.com/'.'....0']     = ['dirs' => dir_root, 'name' => '...', 'type' => '0'];
/*  │...│.. │"  │ */           $test['http://example.com/'.'.....']     = ['dirs' => dir_root, 'name' => '.....', 'type' => ''];
/*  │...│.. │.  │ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │...│.. │.. │ */           $test['http://example.com/'.'.......']   = ['dirs' => dir_root, 'name' => '.......', 'type' => ''];
/*  │...│.. │...│ */           $test['http://example.com/'.'........']  = ['dirs' => dir_root, 'name' => '........', 'type' => ''];
/*  │...│.. │0  │ */           $test['http://example.com/'.'.....0']    = ['dirs' => dir_root, 'name' => '....', 'type' => '0'];
/*  │...│...│"  │ */           $test['http://example.com/'.'......']    = ['dirs' => dir_root, 'name' => '......', 'type' => ''];
/*  │...│...│.  │ */           $test['http://example.com/'.'.......']   = ['dirs' => dir_root, 'name' => '.......', 'type' => ''];
/*  │...│...│.. │ */           $test['http://example.com/'.'........']  = ['dirs' => dir_root, 'name' => '........', 'type' => ''];
/*  │...│...│...│ */           $test['http://example.com/'.'.........'] = ['dirs' => dir_root, 'name' => '.........', 'type' => ''];
/*  │...│...│0  │ */           $test['http://example.com/'.'......0']   = ['dirs' => dir_root, 'name' => '.....', 'type' => '0'];
/*  │...│0  │"  │ */           $test['http://example.com/'.'...0']      = ['dirs' => dir_root, 'name' => '..', 'type' => '0'];
/*  │...│0  │.  │ */           $test['http://example.com/'.'...0.']     = ['dirs' => dir_root, 'name' => '...0.', 'type' => ''];
/*  │...│0  │.. │ */           $test['http://example.com/'.'...0..']    = ['dirs' => dir_root, 'name' => '...0..', 'type' => ''];
/*  │...│0  │...│ */           $test['http://example.com/'.'...0...']   = ['dirs' => dir_root, 'name' => '...0...', 'type' => ''];
/*  │...│0  │0  │ */           $test['http://example.com/'.'...00']     = ['dirs' => dir_root, 'name' => '..', 'type' => '00'];
/*  │0  │"  │"  │ */           $test['http://example.com/'.'0']         = ['dirs' => dir_root, 'name' => '0', 'type' => ''];
/*  │0  │"  │.  │ */           $test['http://example.com/'.'0.']        = ['dirs' => dir_root, 'name' => '0.', 'type' => ''];
/*  │0  │"  │.. │ */           $test['http://example.com/'.'0..']       = ['dirs' => dir_root, 'name' => '0..', 'type' => ''];
/*  │0  │"  │...│ */           $test['http://example.com/'.'0...']      = ['dirs' => dir_root, 'name' => '0...', 'type' => ''];
/*  │0  │"  │0  │ */           $test['http://example.com/'.'00']        = ['dirs' => dir_root, 'name' => '00', 'type' => ''];
/*  │0  │.  │"  │ */           $test['http://example.com/'.'0.']        = ['dirs' => dir_root, 'name' => '0.', 'type' => ''];
/*  │0  │.  │.  │ */           $test['http://example.com/'.'0..']       = ['dirs' => dir_root, 'name' => '0..', 'type' => ''];
/*  │0  │.  │.. │ */           $test['http://example.com/'.'0...']      = ['dirs' => dir_root, 'name' => '0...', 'type' => ''];
/*  │0  │.  │...│ */           $test['http://example.com/'.'0....']     = ['dirs' => dir_root, 'name' => '0....', 'type' => ''];
/*  │0  │.  │0  │ */           $test['http://example.com/'.'0.0']       = ['dirs' => dir_root, 'name' => '0', 'type' => '0'];
/*  │0  │.. │"  │ */           $test['http://example.com/'.'0..']       = ['dirs' => dir_root, 'name' => '0..', 'type' => ''];
/*  │0  │.. │.  │ */           $test['http://example.com/'.'0...']      = ['dirs' => dir_root, 'name' => '0...', 'type' => ''];
/*  │0  │.. │.. │ */           $test['http://example.com/'.'0....']     = ['dirs' => dir_root, 'name' => '0....', 'type' => ''];
/*  │0  │.. │...│ */           $test['http://example.com/'.'0.....']    = ['dirs' => dir_root, 'name' => '0.....', 'type' => ''];
/*  │0  │.. │0  │ */           $test['http://example.com/'.'0..0']      = ['dirs' => dir_root, 'name' => '0.', 'type' => '0'];
/*  │0  │...│"  │ */           $test['http://example.com/'.'0...']      = ['dirs' => dir_root, 'name' => '0...', 'type' => ''];
/*  │0  │...│.  │ */           $test['http://example.com/'.'0....']     = ['dirs' => dir_root, 'name' => '0....', 'type' => ''];
/*  │0  │...│.. │ */           $test['http://example.com/'.'0.....']    = ['dirs' => dir_root, 'name' => '0.....', 'type' => ''];
/*  │0  │...│...│ */           $test['http://example.com/'.'0......']   = ['dirs' => dir_root, 'name' => '0......', 'type' => ''];
/*  │0  │...│0  │ */           $test['http://example.com/'.'0...0']     = ['dirs' => dir_root, 'name' => '0..', 'type' => '0'];
/*  │0  │0  │"  │ */           $test['http://example.com/'.'00']        = ['dirs' => dir_root, 'name' => '00', 'type' => ''];
/*  │0  │0  │.  │ */           $test['http://example.com/'.'00.']       = ['dirs' => dir_root, 'name' => '00.', 'type' => ''];
/*  │0  │0  │.. │ */           $test['http://example.com/'.'00..']      = ['dirs' => dir_root, 'name' => '00..', 'type' => ''];
/*  │0  │0  │...│ */           $test['http://example.com/'.'00...']     = ['dirs' => dir_root, 'name' => '00...', 'type' => ''];
/*  │0  │0  │0  │ */           $test['http://example.com/'.'000']       = ['dirs' => dir_root, 'name' => '000', 'type' => ''];
/*  │.  │0  │.  │0  │.  │ */   $test['http://example.com/'.'.0.0.'   ]  = ['dirs' => dir_root, 'name' => '.0.0.', 'type' => ''];
/*  │.. │0  │.  │0  │.. │ */   $test['http://example.com/'.'..0.0..' ]  = ['dirs' => dir_root, 'name' => '..0.0..', 'type' => ''];
/*  │.. │0  │.. │0  │.. │ */   $test['http://example.com/'.'..0..0..']  = ['dirs' => dir_root, 'name' => '..0..0..', 'type' => ''];

# ─────────────────────────────────────────────────────────────────────

/*  │dir  │"  │   │   │ */           $test['http://example.com/'.'dir/']          = ['dirs' => dir_root, 'name' => 'dir', 'type' => '']; # redirect to 'http://example.com/dir'
/*  │dir  │.  │   │   │ */           $test['http://example.com/'.'dir/.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.. │   │   │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │...│   │   │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │0  │   │   │ */           $test['http://example.com/'.'dir/0']         = ['dirs' => dir_root.'dir/', 'name' => '0', 'type' => ''];
/*  │dir  │"  │"  │   │ */           $test['http://example.com/'.'dir/']          = ['dirs' => dir_root, 'name' => 'dir', 'type' => '']; # redirect to 'http://example.com/dir'
/*  │dir  │"  │.  │   │ */           $test['http://example.com/'.'dir/.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │"  │.. │   │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │"  │...│   │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │"  │0  │   │ */           $test['http://example.com/'.'dir/0']         = ['dirs' => dir_root.'dir/', 'name' => '0', 'type' => ''];
/*  │dir  │.  │"  │   │ */           $test['http://example.com/'.'dir/.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.  │.  │   │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.  │.. │   │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │.  │...│   │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.  │0  │   │ */           $test['http://example.com/'.'dir/.0']        = ['dirs' => dir_root.'dir/', 'name' => '', 'type' => '0'];
/*  │dir  │.. │"  │   │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.. │.  │   │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │.. │.. │   │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.. │...│   │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.. │0  │   │ */           $test['http://example.com/'.'dir/..0']       = ['dirs' => dir_root.'dir/', 'name' => '.', 'type' => '0'];
/*  │dir  │...│"  │   │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │...│.  │   │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │...│.. │   │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │...│...│   │ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │...│0  │   │ */           $test['http://example.com/'.'dir/...0']      = ['dirs' => dir_root.'dir/', 'name' => '..', 'type' => '0'];
/*  │dir  │0  │"  │   │ */           $test['http://example.com/'.'dir/0']         = ['dirs' => dir_root.'dir/', 'name' => '0', 'type' => ''];
/*  │dir  │0  │.  │   │ */           $test['http://example.com/'.'dir/0.']        = ['dirs' => dir_root.'dir/', 'name' => '0.', 'type' => ''];
/*  │dir  │0  │.. │   │ */           $test['http://example.com/'.'dir/0..']       = ['dirs' => dir_root.'dir/', 'name' => '0..', 'type' => ''];
/*  │dir  │0  │...│   │ */           $test['http://example.com/'.'dir/0...']      = ['dirs' => dir_root.'dir/', 'name' => '0...', 'type' => ''];
/*  │dir  │0  │0  │   │ */           $test['http://example.com/'.'dir/00']        = ['dirs' => dir_root.'dir/', 'name' => '00', 'type' => ''];
/*  │dir  │"  │"  │"  │ */           $test['http://example.com/'.'dir/']          = ['dirs' => dir_root, 'name' => 'dir', 'type' => '']; # redirect to 'http://example.com/dir'
/*  │dir  │"  │"  │.  │ */           $test['http://example.com/'.'dir/.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │"  │"  │.. │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │"  │"  │...│ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │"  │"  │0  │ */           $test['http://example.com/'.'dir/0']         = ['dirs' => dir_root.'dir/', 'name' => '0', 'type' => ''];
/*  │dir  │"  │.  │"  │ */           $test['http://example.com/'.'dir/.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │"  │.  │.  │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │"  │.  │.. │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │"  │.  │...│ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │"  │.  │0  │ */           $test['http://example.com/'.'dir/.0']        = ['dirs' => dir_root.'dir/', 'name' => '', 'type' => '0'];
/*  │dir  │"  │.. │"  │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │"  │.. │.  │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │"  │.. │.. │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │"  │.. │...│ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │"  │.. │0  │ */           $test['http://example.com/'.'dir/..0']       = ['dirs' => dir_root.'dir/', 'name' => '.', 'type' => '0'];
/*  │dir  │"  │...│"  │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │"  │...│.  │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │"  │...│.. │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │"  │...│...│ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │"  │...│0  │ */           $test['http://example.com/'.'dir/...0']      = ['dirs' => dir_root.'dir/', 'name' => '..', 'type' => '0'];
/*  │dir  │"  │0  │"  │ */           $test['http://example.com/'.'dir/0']         = ['dirs' => dir_root.'dir/', 'name' => '0', 'type' => ''];
/*  │dir  │"  │0  │.  │ */           $test['http://example.com/'.'dir/0.']        = ['dirs' => dir_root.'dir/', 'name' => '0.', 'type' => ''];
/*  │dir  │"  │0  │.. │ */           $test['http://example.com/'.'dir/0..']       = ['dirs' => dir_root.'dir/', 'name' => '0..', 'type' => ''];
/*  │dir  │"  │0  │...│ */           $test['http://example.com/'.'dir/0...']      = ['dirs' => dir_root.'dir/', 'name' => '0...', 'type' => ''];
/*  │dir  │"  │0  │0  │ */           $test['http://example.com/'.'dir/00']        = ['dirs' => dir_root.'dir/', 'name' => '00', 'type' => ''];
/*  │dir  │.  │"  │"  │ */           $test['http://example.com/'.'dir/.']         = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.  │"  │.  │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.  │"  │.. │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │.  │"  │...│ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.  │"  │0  │ */           $test['http://example.com/'.'dir/.0']        = ['dirs' => dir_root.'dir/', 'name' => '', 'type' => '0'];
/*  │dir  │.  │.  │"  │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.  │.  │.  │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │.  │.  │.. │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.  │.  │...│ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.  │.  │0  │ */           $test['http://example.com/'.'dir/..0']       = ['dirs' => dir_root.'dir/', 'name' => '.', 'type' => '0'];
/*  │dir  │.  │.. │"  │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │.  │.. │.  │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.  │.. │.. │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.  │.. │...│ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │.  │.. │0  │ */           $test['http://example.com/'.'dir/...0']      = ['dirs' => dir_root.'dir/', 'name' => '..', 'type' => '0'];
/*  │dir  │.  │...│"  │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.  │...│.  │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.  │...│.. │ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │.  │...│...│ */           $test['http://example.com/'.'dir/.......']   = ['dirs' => dir_root.'dir/', 'name' => '.......', 'type' => ''];
/*  │dir  │.  │...│0  │ */           $test['http://example.com/'.'dir/....0']     = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => '0'];
/*  │dir  │.  │0  │"  │ */           $test['http://example.com/'.'dir/.0']        = ['dirs' => dir_root.'dir/', 'name' => '', 'type' => '0'];
/*  │dir  │.  │0  │.  │ */           $test['http://example.com/'.'dir/.0.']       = ['dirs' => dir_root.'dir/', 'name' => '.0.', 'type' => ''];
/*  │dir  │.  │0  │.. │ */           $test['http://example.com/'.'dir/.0..']      = ['dirs' => dir_root.'dir/', 'name' => '.0..', 'type' => ''];
/*  │dir  │.  │0  │...│ */           $test['http://example.com/'.'dir/.0...']     = ['dirs' => dir_root.'dir/', 'name' => '.0...', 'type' => ''];
/*  │dir  │.  │0  │0  │ */           $test['http://example.com/'.'dir/.00']       = ['dirs' => dir_root.'dir/', 'name' => '', 'type' => '00'];
/*  │dir  │.. │"  │"  │ */           $test['http://example.com/'.'dir/..']        = ['dirs' => null, 'name' => null, 'type' => null]; # reserved
/*  │dir  │.. │"  │.  │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │.. │"  │.. │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.. │"  │...│ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.. │"  │0  │ */           $test['http://example.com/'.'dir/..0']       = ['dirs' => dir_root.'dir/', 'name' => '.', 'type' => '0'];
/*  │dir  │.. │.  │"  │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │.. │.  │.  │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.. │.  │.. │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.. │.  │...│ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │.. │.  │0  │ */           $test['http://example.com/'.'dir/...0']      = ['dirs' => dir_root.'dir/', 'name' => '..', 'type' => '0'];
/*  │dir  │.. │.. │"  │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │.. │.. │.  │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.. │.. │.. │ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │.. │.. │...│ */           $test['http://example.com/'.'dir/.......']   = ['dirs' => dir_root.'dir/', 'name' => '.......', 'type' => ''];
/*  │dir  │.. │.. │0  │ */           $test['http://example.com/'.'dir/....0']     = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => '0'];
/*  │dir  │.. │...│"  │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │.. │...│.  │ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │.. │...│.. │ */           $test['http://example.com/'.'dir/.......']   = ['dirs' => dir_root.'dir/', 'name' => '.......', 'type' => ''];
/*  │dir  │.. │...│...│ */           $test['http://example.com/'.'dir/........']  = ['dirs' => dir_root.'dir/', 'name' => '........', 'type' => ''];
/*  │dir  │.. │...│0  │ */           $test['http://example.com/'.'dir/.....0']    = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => '0'];
/*  │dir  │.. │0  │"  │ */           $test['http://example.com/'.'dir/..0']       = ['dirs' => dir_root.'dir/', 'name' => '.', 'type' => '0'];
/*  │dir  │.. │0  │.  │ */           $test['http://example.com/'.'dir/..0.']      = ['dirs' => dir_root.'dir/', 'name' => '..0.', 'type' => ''];
/*  │dir  │.. │0  │.. │ */           $test['http://example.com/'.'dir/..0..']     = ['dirs' => dir_root.'dir/', 'name' => '..0..', 'type' => ''];
/*  │dir  │.. │0  │...│ */           $test['http://example.com/'.'dir/..0...']    = ['dirs' => dir_root.'dir/', 'name' => '..0...', 'type' => ''];
/*  │dir  │.. │0  │0  │ */           $test['http://example.com/'.'dir/..00']      = ['dirs' => dir_root.'dir/', 'name' => '.', 'type' => '00'];
/*  │dir  │...│"  │"  │ */           $test['http://example.com/'.'dir/...']       = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => ''];
/*  │dir  │...│"  │.  │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │...│"  │.. │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │...│"  │...│ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │...│"  │0  │ */           $test['http://example.com/'.'dir/...0']      = ['dirs' => dir_root.'dir/', 'name' => '..', 'type' => '0'];
/*  │dir  │...│.  │"  │ */           $test['http://example.com/'.'dir/....']      = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => ''];
/*  │dir  │...│.  │.  │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │...│.  │.. │ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │...│.  │...│ */           $test['http://example.com/'.'dir/.......']   = ['dirs' => dir_root.'dir/', 'name' => '.......', 'type' => ''];
/*  │dir  │...│.  │0  │ */           $test['http://example.com/'.'dir/....0']     = ['dirs' => dir_root.'dir/', 'name' => '...', 'type' => '0'];
/*  │dir  │...│.. │"  │ */           $test['http://example.com/'.'dir/.....']     = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => ''];
/*  │dir  │...│.. │.  │ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │...│.. │.. │ */           $test['http://example.com/'.'dir/.......']   = ['dirs' => dir_root.'dir/', 'name' => '.......', 'type' => ''];
/*  │dir  │...│.. │...│ */           $test['http://example.com/'.'dir/........']  = ['dirs' => dir_root.'dir/', 'name' => '........', 'type' => ''];
/*  │dir  │...│.. │0  │ */           $test['http://example.com/'.'dir/.....0']    = ['dirs' => dir_root.'dir/', 'name' => '....', 'type' => '0'];
/*  │dir  │...│...│"  │ */           $test['http://example.com/'.'dir/......']    = ['dirs' => dir_root.'dir/', 'name' => '......', 'type' => ''];
/*  │dir  │...│...│.  │ */           $test['http://example.com/'.'dir/.......']   = ['dirs' => dir_root.'dir/', 'name' => '.......', 'type' => ''];
/*  │dir  │...│...│.. │ */           $test['http://example.com/'.'dir/........']  = ['dirs' => dir_root.'dir/', 'name' => '........', 'type' => ''];
/*  │dir  │...│...│...│ */           $test['http://example.com/'.'dir/.........'] = ['dirs' => dir_root.'dir/', 'name' => '.........', 'type' => ''];
/*  │dir  │...│...│0  │ */           $test['http://example.com/'.'dir/......0']   = ['dirs' => dir_root.'dir/', 'name' => '.....', 'type' => '0'];
/*  │dir  │...│0  │"  │ */           $test['http://example.com/'.'dir/...0']      = ['dirs' => dir_root.'dir/', 'name' => '..', 'type' => '0'];
/*  │dir  │...│0  │.  │ */           $test['http://example.com/'.'dir/...0.']     = ['dirs' => dir_root.'dir/', 'name' => '...0.', 'type' => ''];
/*  │dir  │...│0  │.. │ */           $test['http://example.com/'.'dir/...0..']    = ['dirs' => dir_root.'dir/', 'name' => '...0..', 'type' => ''];
/*  │dir  │...│0  │...│ */           $test['http://example.com/'.'dir/...0...']   = ['dirs' => dir_root.'dir/', 'name' => '...0...', 'type' => ''];
/*  │dir  │...│0  │0  │ */           $test['http://example.com/'.'dir/...00']     = ['dirs' => dir_root.'dir/', 'name' => '..', 'type' => '00'];
/*  │dir  │0  │"  │"  │ */           $test['http://example.com/'.'dir/0']         = ['dirs' => dir_root.'dir/', 'name' => '0', 'type' => ''];
/*  │dir  │0  │"  │.  │ */           $test['http://example.com/'.'dir/0.']        = ['dirs' => dir_root.'dir/', 'name' => '0.', 'type' => ''];
/*  │dir  │0  │"  │.. │ */           $test['http://example.com/'.'dir/0..']       = ['dirs' => dir_root.'dir/', 'name' => '0..', 'type' => ''];
/*  │dir  │0  │"  │...│ */           $test['http://example.com/'.'dir/0...']      = ['dirs' => dir_root.'dir/', 'name' => '0...', 'type' => ''];
/*  │dir  │0  │"  │0  │ */           $test['http://example.com/'.'dir/00']        = ['dirs' => dir_root.'dir/', 'name' => '00', 'type' => ''];
/*  │dir  │0  │.  │"  │ */           $test['http://example.com/'.'dir/0.']        = ['dirs' => dir_root.'dir/', 'name' => '0.', 'type' => ''];
/*  │dir  │0  │.  │.  │ */           $test['http://example.com/'.'dir/0..']       = ['dirs' => dir_root.'dir/', 'name' => '0..', 'type' => ''];
/*  │dir  │0  │.  │.. │ */           $test['http://example.com/'.'dir/0...']      = ['dirs' => dir_root.'dir/', 'name' => '0...', 'type' => ''];
/*  │dir  │0  │.  │...│ */           $test['http://example.com/'.'dir/0....']     = ['dirs' => dir_root.'dir/', 'name' => '0....', 'type' => ''];
/*  │dir  │0  │.  │0  │ */           $test['http://example.com/'.'dir/0.0']       = ['dirs' => dir_root.'dir/', 'name' => '0', 'type' => '0'];
/*  │dir  │0  │.. │"  │ */           $test['http://example.com/'.'dir/0..']       = ['dirs' => dir_root.'dir/', 'name' => '0..', 'type' => ''];
/*  │dir  │0  │.. │.  │ */           $test['http://example.com/'.'dir/0...']      = ['dirs' => dir_root.'dir/', 'name' => '0...', 'type' => ''];
/*  │dir  │0  │.. │.. │ */           $test['http://example.com/'.'dir/0....']     = ['dirs' => dir_root.'dir/', 'name' => '0....', 'type' => ''];
/*  │dir  │0  │.. │...│ */           $test['http://example.com/'.'dir/0.....']    = ['dirs' => dir_root.'dir/', 'name' => '0.....', 'type' => ''];
/*  │dir  │0  │.. │0  │ */           $test['http://example.com/'.'dir/0..0']      = ['dirs' => dir_root.'dir/', 'name' => '0.', 'type' => '0'];
/*  │dir  │0  │...│"  │ */           $test['http://example.com/'.'dir/0...']      = ['dirs' => dir_root.'dir/', 'name' => '0...', 'type' => ''];
/*  │dir  │0  │...│.  │ */           $test['http://example.com/'.'dir/0....']     = ['dirs' => dir_root.'dir/', 'name' => '0....', 'type' => ''];
/*  │dir  │0  │...│.. │ */           $test['http://example.com/'.'dir/0.....']    = ['dirs' => dir_root.'dir/', 'name' => '0.....', 'type' => ''];
/*  │dir  │0  │...│...│ */           $test['http://example.com/'.'dir/0......']   = ['dirs' => dir_root.'dir/', 'name' => '0......', 'type' => ''];
/*  │dir  │0  │...│0  │ */           $test['http://example.com/'.'dir/0...0']     = ['dirs' => dir_root.'dir/', 'name' => '0..', 'type' => '0'];
/*  │dir  │0  │0  │"  │ */           $test['http://example.com/'.'dir/00']        = ['dirs' => dir_root.'dir/', 'name' => '00', 'type' => ''];
/*  │dir  │0  │0  │.  │ */           $test['http://example.com/'.'dir/00.']       = ['dirs' => dir_root.'dir/', 'name' => '00.', 'type' => ''];
/*  │dir  │0  │0  │.. │ */           $test['http://example.com/'.'dir/00..']      = ['dirs' => dir_root.'dir/', 'name' => '00..', 'type' => ''];
/*  │dir  │0  │0  │...│ */           $test['http://example.com/'.'dir/00...']     = ['dirs' => dir_root.'dir/', 'name' => '00...', 'type' => ''];
/*  │dir  │0  │0  │0  │ */           $test['http://example.com/'.'dir/000']       = ['dirs' => dir_root.'dir/', 'name' => '000', 'type' => ''];
/*  │dir  │.  │0  │.  │0  │.  │ */   $test['http://example.com/'.'dir/.0.0.'   ]  = ['dirs' => dir_root.'dir/', 'name' => '.0.0.', 'type' => ''];
/*  │dir  │.. │0  │.  │0  │.. │ */   $test['http://example.com/'.'dir/..0.0..' ]  = ['dirs' => dir_root.'dir/', 'name' => '..0.0..', 'type' => ''];
/*  │dir  │.. │0  │.. │0  │.. │ */   $test['http://example.com/'.'dir/..0..0..']  = ['dirs' => dir_root.'dir/', 'name' => '..0..0..', 'type' => ''];

# ─────────────────────────────────────────────────────────────────────
# result
# ─────────────────────────────────────────────────────────────────────

foreach ($test as $c_value => $c_expected) {
    $c_real_url = rtrim($c_value, '/'); # redirect emulation
    $c_file = (new url($c_real_url))->file_info_get();
    $c_result = $c_file                               &&
                $c_file->dirs === $c_expected['dirs'] &&
                $c_file->name === $c_expected['name'] &&
                $c_file->type === $c_expected['type'];
    if ($c_result)
         print 'true "' .$c_value.'" '.($c_file ? '['.$c_file->dirs.'!'.$c_file->name.'!'.$c_file->type.']' : '').nl;
    else print 'FALSE "'.$c_value.'"'.nl;
}

