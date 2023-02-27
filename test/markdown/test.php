<?php

namespace effcore;


##############
### simple ###
##############


# headers
$simple['header_setext_1']['data'] = 'Title H1 (Setext-style)'.NL;
$simple['header_setext_1']['data'].= '=';
$simple['header_setext_1']['expected'] = '<h1>Title H1 (Setext-style)</h1>';

$simple['header_setext_2']['data'] = '   Title H1 (Setext-style)   '.NL;
$simple['header_setext_2']['data'].= '=   ';
$simple['header_setext_2']['expected'] = '<h1>Title H1 (Setext-style)</h1>';

$simple['header_setext_3']['data'] = 'Title H1 (Setext-style)'.NL;
$simple['header_setext_3']['data'].= '=x';
$simple['header_setext_3']['expected'] = '<p>';
$simple['header_setext_3']['expected'].=   'Title H1 (Setext-style)'.NL;
$simple['header_setext_3']['expected'].=   '=x';
$simple['header_setext_3']['expected'].= '</p>';

$simple['header_setext_4']['data'] = 'Title H2 (Setext-style)'.NL;
$simple['header_setext_4']['data'].= '-';
$simple['header_setext_4']['expected'] = '<h2>Title H2 (Setext-style)</h2>';

$simple['header_setext_5']['data'] = '   Title H2 (Setext-style)   '.NL;
$simple['header_setext_5']['data'].= '-   ';
$simple['header_setext_5']['expected'] = '<h2>Title H2 (Setext-style)</h2>';

$simple['header_setext_6']['data'] = 'Title H2 (Setext-style)'.NL;
$simple['header_setext_6']['data'].= '-x';
$simple['header_setext_6']['expected'] = '<p>';
$simple['header_setext_6']['expected'].=   'Title H2 (Setext-style)'.NL;
$simple['header_setext_6']['expected'].=   '-x';
$simple['header_setext_6']['expected'].= '</p>';

$simple['header_atx_1']['data'] =       '# Title H1 (atx-style)';
$simple['header_atx_2']['data'] =      '## Title H2 (atx-style)';
$simple['header_atx_3']['data'] =     '### Title H3 (atx-style)';
$simple['header_atx_4']['data'] =    '#### Title H4 (atx-style)';
$simple['header_atx_5']['data'] =   '##### Title H5 (atx-style)';
$simple['header_atx_6']['data'] =  '###### Title H6 (atx-style)';
$simple['header_atx_1']['expected'] = '<h1>Title H1 (atx-style)</h1>';
$simple['header_atx_2']['expected'] = '<h2>Title H2 (atx-style)</h2>';
$simple['header_atx_3']['expected'] = '<h3>Title H3 (atx-style)</h3>';
$simple['header_atx_4']['expected'] = '<h4>Title H4 (atx-style)</h4>';
$simple['header_atx_5']['expected'] = '<h5>Title H5 (atx-style)</h5>';
$simple['header_atx_6']['expected'] = '<h6>Title H6 (atx-style)</h6>';

$simple['header_atx_7']['data'] = '# Title H1 (atx-style)';
$simple['header_atx_7']['expected'] = '<h1>Title H1 (atx-style)</h1>';

$simple['header_atx_8']['data'] = '   #      Title H1 (atx-style)      ######';
$simple['header_atx_8']['expected'] = '<h1>Title H1 (atx-style)</h1>';

# list: bulleted and flat
$simple['list_10']['data'] = '- flat list item 1'.NL;
$simple['list_10']['data'].= '- flat list item 2'.NL;
$simple['list_10']['data'].= '- flat list item 3'.NL;
$simple['list_10']['data'].= '+ flat list item 4'.NL;
$simple['list_10']['data'].= '+ flat list item 5'.NL;
$simple['list_10']['data'].= '+ flat list item 6'.NL;
$simple['list_10']['data'].= '* flat list item 7'.NL;
$simple['list_10']['data'].= '* flat list item 8'.NL;
$simple['list_10']['data'].= '* flat list item 9';
$simple['list_10']['expected'] = '<ul>';
$simple['list_10']['expected'].=   '<li>flat list item 1</li>';
$simple['list_10']['expected'].=   '<li>flat list item 2</li>';
$simple['list_10']['expected'].=   '<li>flat list item 3</li>';
$simple['list_10']['expected'].=   '<li>flat list item 4</li>';
$simple['list_10']['expected'].=   '<li>flat list item 5</li>';
$simple['list_10']['expected'].=   '<li>flat list item 6</li>';
$simple['list_10']['expected'].=   '<li>flat list item 7</li>';
$simple['list_10']['expected'].=   '<li>flat list item 8</li>';
$simple['list_10']['expected'].=   '<li>flat list item 9</li>';
$simple['list_10']['expected'].= '</ul>';

$simple['list_11']['data'] = '   -   flat list item 1'.NL;
$simple['list_11']['data'].= '   -   flat list item 2'.NL;
$simple['list_11']['data'].= '   -   flat list item 3'.NL;
$simple['list_11']['data'].= '   +   flat list item 4'.NL;
$simple['list_11']['data'].= '   +   flat list item 5'.NL;
$simple['list_11']['data'].= '   +   flat list item 6'.NL;
$simple['list_11']['data'].= '   *   flat list item 7'.NL;
$simple['list_11']['data'].= '   *   flat list item 8'.NL;
$simple['list_11']['data'].= '   *   flat list item 9';
$simple['list_11']['expected'] = '<ul>';
$simple['list_11']['expected'].=   '<li>flat list item 1</li>';
$simple['list_11']['expected'].=   '<li>flat list item 2</li>';
$simple['list_11']['expected'].=   '<li>flat list item 3</li>';
$simple['list_11']['expected'].=   '<li>flat list item 4</li>';
$simple['list_11']['expected'].=   '<li>flat list item 5</li>';
$simple['list_11']['expected'].=   '<li>flat list item 6</li>';
$simple['list_11']['expected'].=   '<li>flat list item 7</li>';
$simple['list_11']['expected'].=   '<li>flat list item 8</li>';
$simple['list_11']['expected'].=   '<li>flat list item 9</li>';
$simple['list_11']['expected'].= '</ul>';

# list: bulleted and hierarchical (ascent and descent algorithm)
$simple['list_20']['data'] = '- list item 1'.NL;
$simple['list_20']['data'].= '- list item 2'.NL;
$simple['list_20']['data'].= '  - list item 2.1'.NL;
$simple['list_20']['data'].= '  - list item 2.2'.NL;
$simple['list_20']['data'].= '    - list item 2.2.1'.NL;
$simple['list_20']['data'].= '    - list item 2.2.2'.NL;
$simple['list_20']['data'].= '  - list item 2.3'.NL;
$simple['list_20']['data'].= '  - list item 2.4'.NL;
$simple['list_20']['data'].= '- list item 3'.NL;
$simple['list_20']['data'].= '- list item 4'.NL;
$simple['list_20']['data'].= '  - list item 4.1'.NL;
$simple['list_20']['data'].= '  - list item 4.2'.NL;
$simple['list_20']['data'].= '    - list item 4.2.1'.NL;
$simple['list_20']['data'].= '    - list item 4.2.2'.NL;
$simple['list_20']['data'].= '  - list item 4.3'.NL;
$simple['list_20']['data'].= '  - list item 4.4'.NL;
$simple['list_20']['data'].= '- list item 5'.NL;
$simple['list_20']['data'].= '- list item 6';
$simple['list_20']['expected'] = '<ul>';
$simple['list_20']['expected'].=   '<li>list item 1</li>';
$simple['list_20']['expected'].=   '<li>list item 2';
$simple['list_20']['expected'].=     '<ul>';
$simple['list_20']['expected'].=       '<li>list item 2.1</li>';
$simple['list_20']['expected'].=       '<li>list item 2.2';
$simple['list_20']['expected'].=         '<ul>';
$simple['list_20']['expected'].=           '<li>list item 2.2.1</li>';
$simple['list_20']['expected'].=           '<li>list item 2.2.2</li>';
$simple['list_20']['expected'].=         '</ul>';
$simple['list_20']['expected'].=       '</li>';
$simple['list_20']['expected'].=       '<li>list item 2.3</li>';
$simple['list_20']['expected'].=       '<li>list item 2.4</li>';
$simple['list_20']['expected'].=     '</ul>';
$simple['list_20']['expected'].=   '</li>';
$simple['list_20']['expected'].=   '<li>list item 3</li>';
$simple['list_20']['expected'].=   '<li>list item 4';
$simple['list_20']['expected'].=     '<ul>';
$simple['list_20']['expected'].=       '<li>list item 4.1</li>';
$simple['list_20']['expected'].=       '<li>list item 4.2';
$simple['list_20']['expected'].=         '<ul>';
$simple['list_20']['expected'].=           '<li>list item 4.2.1</li>';
$simple['list_20']['expected'].=           '<li>list item 4.2.2</li>';
$simple['list_20']['expected'].=         '</ul>';
$simple['list_20']['expected'].=       '</li>';
$simple['list_20']['expected'].=       '<li>list item 4.3</li>';
$simple['list_20']['expected'].=       '<li>list item 4.4</li>';
$simple['list_20']['expected'].=     '</ul>';
$simple['list_20']['expected'].=   '</li>';
$simple['list_20']['expected'].=   '<li>list item 5</li>';
$simple['list_20']['expected'].=   '<li>list item 6</li>';
$simple['list_20']['expected'].= '</ul>';

$simple['list_21']['data'] = '   -   list item 1'.NL;
$simple['list_21']['data'].= '   -   list item 2'.NL;
$simple['list_21']['data'].= '     -   list item 2.1'.NL;
$simple['list_21']['data'].= '     -   list item 2.2'.NL;
$simple['list_21']['data'].= '       -   list item 2.2.1'.NL;
$simple['list_21']['data'].= '       -   list item 2.2.2'.NL;
$simple['list_21']['data'].= '     -   list item 2.3'.NL;
$simple['list_21']['data'].= '     -   list item 2.4'.NL;
$simple['list_21']['data'].= '   -   list item 3'.NL;
$simple['list_21']['data'].= '   -   list item 4'.NL;
$simple['list_21']['data'].= '     -   list item 4.1'.NL;
$simple['list_21']['data'].= '     -   list item 4.2'.NL;
$simple['list_21']['data'].= '       -   list item 4.2.1'.NL;
$simple['list_21']['data'].= '       -   list item 4.2.2'.NL;
$simple['list_21']['data'].= '     -   list item 4.3'.NL;
$simple['list_21']['data'].= '     -   list item 4.4'.NL;
$simple['list_21']['data'].= '   -   list item 5'.NL;
$simple['list_21']['data'].= '   -   list item 6';
$simple['list_21']['expected'] = '<ul>';
$simple['list_21']['expected'].=   '<li>list item 1</li>';
$simple['list_21']['expected'].=   '<li>list item 2';
$simple['list_21']['expected'].=     '<ul>';
$simple['list_21']['expected'].=       '<li>list item 2.1</li>';
$simple['list_21']['expected'].=       '<li>list item 2.2';
$simple['list_21']['expected'].=         '<ul>';
$simple['list_21']['expected'].=           '<li>list item 2.2.1</li>';
$simple['list_21']['expected'].=           '<li>list item 2.2.2</li>';
$simple['list_21']['expected'].=         '</ul>';
$simple['list_21']['expected'].=       '</li>';
$simple['list_21']['expected'].=       '<li>list item 2.3</li>';
$simple['list_21']['expected'].=       '<li>list item 2.4</li>';
$simple['list_21']['expected'].=     '</ul>';
$simple['list_21']['expected'].=   '</li>';
$simple['list_21']['expected'].=   '<li>list item 3</li>';
$simple['list_21']['expected'].=   '<li>list item 4';
$simple['list_21']['expected'].=     '<ul>';
$simple['list_21']['expected'].=       '<li>list item 4.1</li>';
$simple['list_21']['expected'].=       '<li>list item 4.2';
$simple['list_21']['expected'].=         '<ul>';
$simple['list_21']['expected'].=           '<li>list item 4.2.1</li>';
$simple['list_21']['expected'].=           '<li>list item 4.2.2</li>';
$simple['list_21']['expected'].=         '</ul>';
$simple['list_21']['expected'].=       '</li>';
$simple['list_21']['expected'].=       '<li>list item 4.3</li>';
$simple['list_21']['expected'].=       '<li>list item 4.4</li>';
$simple['list_21']['expected'].=     '</ul>';
$simple['list_21']['expected'].=   '</li>';
$simple['list_21']['expected'].=   '<li>list item 5</li>';
$simple['list_21']['expected'].=   '<li>list item 6</li>';
$simple['list_21']['expected'].= '</ul>';

# list: numbered and hierarchical (ascent and descent algorithm)
$simple['list_30']['data'] = '1. numbered list item 1'.NL;
$simple['list_30']['data'].= '2. numbered list item 2'.NL;
$simple['list_30']['data'].= '  21. numbered list item 2.1'.NL;
$simple['list_30']['data'].= '  22. numbered list item 2.2'.NL;
$simple['list_30']['data'].= '    221. numbered list item 2.2.1'.NL;
$simple['list_30']['data'].= '    222. numbered list item 2.2.2'.NL;
$simple['list_30']['data'].= '  23. numbered list item 2.3'.NL;
$simple['list_30']['data'].= '  24. numbered list item 2.4'.NL;
$simple['list_30']['data'].= '3. numbered list item 3'.NL;
$simple['list_30']['data'].= '4. numbered list item 4'.NL;
$simple['list_30']['data'].= '  41. numbered list item 4.1'.NL;
$simple['list_30']['data'].= '  42. numbered list item 4.2'.NL;
$simple['list_30']['data'].= '    421. numbered list item 4.2.1'.NL;
$simple['list_30']['data'].= '    422. numbered list item 4.2.2'.NL;
$simple['list_30']['data'].= '  43. numbered list item 4.3'.NL;
$simple['list_30']['data'].= '  44. numbered list item 4.4'.NL;
$simple['list_30']['data'].= '5. numbered list item 5'.NL;
$simple['list_30']['data'].= '6. numbered list item 6';
$simple['list_30']['expected'] = '<ol>';
$simple['list_30']['expected'].= '<li>numbered list item 1</li>';
$simple['list_30']['expected'].=   '<li>numbered list item 2';
$simple['list_30']['expected'].=     '<ol>';
$simple['list_30']['expected'].=       '<li>numbered list item 2.1</li>';
$simple['list_30']['expected'].=       '<li>numbered list item 2.2';
$simple['list_30']['expected'].=         '<ol>';
$simple['list_30']['expected'].=           '<li>numbered list item 2.2.1</li>';
$simple['list_30']['expected'].=           '<li>numbered list item 2.2.2</li>';
$simple['list_30']['expected'].=         '</ol>';
$simple['list_30']['expected'].=       '</li>';
$simple['list_30']['expected'].=       '<li>numbered list item 2.3</li>';
$simple['list_30']['expected'].=       '<li>numbered list item 2.4</li>';
$simple['list_30']['expected'].=     '</ol>';
$simple['list_30']['expected'].=   '</li>';
$simple['list_30']['expected'].=   '<li>numbered list item 3</li>';
$simple['list_30']['expected'].=   '<li>numbered list item 4';
$simple['list_30']['expected'].=     '<ol>';
$simple['list_30']['expected'].=       '<li>numbered list item 4.1</li>';
$simple['list_30']['expected'].=       '<li>numbered list item 4.2';
$simple['list_30']['expected'].=         '<ol>';
$simple['list_30']['expected'].=           '<li>numbered list item 4.2.1</li>';
$simple['list_30']['expected'].=           '<li>numbered list item 4.2.2</li>';
$simple['list_30']['expected'].=         '</ol>';
$simple['list_30']['expected'].=       '</li>';
$simple['list_30']['expected'].=       '<li>numbered list item 4.3</li>';
$simple['list_30']['expected'].=       '<li>numbered list item 4.4</li>';
$simple['list_30']['expected'].=     '</ol>';
$simple['list_30']['expected'].=   '</li>';
$simple['list_30']['expected'].=   '<li>numbered list item 5</li>';
$simple['list_30']['expected'].=   '<li>numbered list item 6</li>';
$simple['list_30']['expected'].= '</ol>';

$simple['list_31']['data'] = '   1.   numbered list item 1'.NL;
$simple['list_31']['data'].= '   2.   numbered list item 2'.NL;
$simple['list_31']['data'].= '     21.   numbered list item 2.1'.NL;
$simple['list_31']['data'].= '     22.   numbered list item 2.2'.NL;
$simple['list_31']['data'].= '       221.   numbered list item 2.2.1'.NL;
$simple['list_31']['data'].= '       222.   numbered list item 2.2.2'.NL;
$simple['list_31']['data'].= '     23.   numbered list item 2.3'.NL;
$simple['list_31']['data'].= '     24.   numbered list item 2.4'.NL;
$simple['list_31']['data'].= '   3.   numbered list item 3'.NL;
$simple['list_31']['data'].= '   4.   numbered list item 4'.NL;
$simple['list_31']['data'].= '     41.   numbered list item 4.1'.NL;
$simple['list_31']['data'].= '     42.   numbered list item 4.2'.NL;
$simple['list_31']['data'].= '       421.   numbered list item 4.2.1'.NL;
$simple['list_31']['data'].= '       422.   numbered list item 4.2.2'.NL;
$simple['list_31']['data'].= '     43.   numbered list item 4.3'.NL;
$simple['list_31']['data'].= '     44.   numbered list item 4.4'.NL;
$simple['list_31']['data'].= '   5.   numbered list item 5'.NL;
$simple['list_31']['data'].= '   6.   numbered list item 6';
$simple['list_31']['expected'] = '<ol>';
$simple['list_31']['expected'].=   '<li>numbered list item 1</li>';
$simple['list_31']['expected'].=   '<li>numbered list item 2';
$simple['list_31']['expected'].=     '<ol>';
$simple['list_31']['expected'].=       '<li>numbered list item 2.1</li>';
$simple['list_31']['expected'].=       '<li>numbered list item 2.2';
$simple['list_31']['expected'].=         '<ol>';
$simple['list_31']['expected'].=           '<li>numbered list item 2.2.1</li>';
$simple['list_31']['expected'].=           '<li>numbered list item 2.2.2</li>';
$simple['list_31']['expected'].=         '</ol>';
$simple['list_31']['expected'].=       '</li>';
$simple['list_31']['expected'].=       '<li>numbered list item 2.3</li>';
$simple['list_31']['expected'].=       '<li>numbered list item 2.4</li>';
$simple['list_31']['expected'].=     '</ol>';
$simple['list_31']['expected'].=   '</li>';
$simple['list_31']['expected'].=   '<li>numbered list item 3</li>';
$simple['list_31']['expected'].=   '<li>numbered list item 4';
$simple['list_31']['expected'].=     '<ol>';
$simple['list_31']['expected'].=       '<li>numbered list item 4.1</li>';
$simple['list_31']['expected'].=       '<li>numbered list item 4.2';
$simple['list_31']['expected'].=         '<ol>';
$simple['list_31']['expected'].=           '<li>numbered list item 4.2.1</li>';
$simple['list_31']['expected'].=           '<li>numbered list item 4.2.2</li>';
$simple['list_31']['expected'].=         '</ol>';
$simple['list_31']['expected'].=       '</li>';
$simple['list_31']['expected'].=       '<li>numbered list item 4.3</li>';
$simple['list_31']['expected'].=       '<li>numbered list item 4.4</li>';
$simple['list_31']['expected'].=     '</ol>';
$simple['list_31']['expected'].=   '</li>';
$simple['list_31']['expected'].=   '<li>numbered list item 5</li>';
$simple['list_31']['expected'].=   '<li>numbered list item 6</li>';
$simple['list_31']['expected'].= '</ol>';

# list: hierarchical mix of numbered and bulleted (ascent and descent algorithm)
$simple['list_40']['data'] = '1. numbered list item 1'.NL;
$simple['list_40']['data'].= '2. numbered list item 2'.NL;
$simple['list_40']['data'].= '  - list item 2.1'.NL;
$simple['list_40']['data'].= '  - list item 2.2'.NL;
$simple['list_40']['data'].= '    221. numbered list item 2.2.1'.NL;
$simple['list_40']['data'].= '    222. numbered list item 2.2.2'.NL;
$simple['list_40']['data'].= '  - list item 2.3'.NL;
$simple['list_40']['data'].= '  - list item 2.4'.NL;
$simple['list_40']['data'].= '3. numbered list item 3'.NL;
$simple['list_40']['data'].= '4. numbered list item 4'.NL;
$simple['list_40']['data'].= '  - list item 4.1'.NL;
$simple['list_40']['data'].= '  - list item 4.2'.NL;
$simple['list_40']['data'].= '    421. numbered list item 4.2.1'.NL;
$simple['list_40']['data'].= '    422. numbered list item 4.2.2'.NL;
$simple['list_40']['data'].= '  - list item 4.3'.NL;
$simple['list_40']['data'].= '  - list item 4.4'.NL;
$simple['list_40']['data'].= '5. numbered list item 5'.NL;
$simple['list_40']['data'].= '6. numbered list item 6';
$simple['list_40']['expected'] = '<ol>';
$simple['list_40']['expected'].=   '<li>numbered list item 1</li>';
$simple['list_40']['expected'].=   '<li>numbered list item 2';
$simple['list_40']['expected'].=     '<ul>';
$simple['list_40']['expected'].=       '<li>list item 2.1</li>';
$simple['list_40']['expected'].=       '<li>list item 2.2';
$simple['list_40']['expected'].=         '<ol>';
$simple['list_40']['expected'].=           '<li>numbered list item 2.2.1</li>';
$simple['list_40']['expected'].=           '<li>numbered list item 2.2.2</li>';
$simple['list_40']['expected'].=         '</ol>';
$simple['list_40']['expected'].=       '</li>';
$simple['list_40']['expected'].=       '<li>list item 2.3</li>';
$simple['list_40']['expected'].=       '<li>list item 2.4</li>';
$simple['list_40']['expected'].=     '</ul>';
$simple['list_40']['expected'].=   '</li>';
$simple['list_40']['expected'].=   '<li>numbered list item 3</li>';
$simple['list_40']['expected'].=   '<li>numbered list item 4';
$simple['list_40']['expected'].=     '<ul>';
$simple['list_40']['expected'].=       '<li>list item 4.1</li>';
$simple['list_40']['expected'].=       '<li>list item 4.2';
$simple['list_40']['expected'].=         '<ol>';
$simple['list_40']['expected'].=           '<li>numbered list item 4.2.1</li>';
$simple['list_40']['expected'].=           '<li>numbered list item 4.2.2</li>';
$simple['list_40']['expected'].=         '</ol>';
$simple['list_40']['expected'].=       '</li>';
$simple['list_40']['expected'].=       '<li>list item 4.3</li>';
$simple['list_40']['expected'].=       '<li>list item 4.4</li>';
$simple['list_40']['expected'].=     '</ul>';
$simple['list_40']['expected'].=   '</li>';
$simple['list_40']['expected'].=   '<li>numbered list item 5</li>';
$simple['list_40']['expected'].=   '<li>numbered list item 6</li>';
$simple['list_40']['expected'].= '</ol>';

$simple['list_41']['data'] = '   1.   numbered list item 1'.NL;
$simple['list_41']['data'].= '   2.   numbered list item 2'.NL;
$simple['list_41']['data'].= '     -   list item 2.1'.NL;
$simple['list_41']['data'].= '     -   list item 2.2'.NL;
$simple['list_41']['data'].= '       221.   numbered list item 2.2.1'.NL;
$simple['list_41']['data'].= '       222.   numbered list item 2.2.2'.NL;
$simple['list_41']['data'].= '     -   list item 2.3'.NL;
$simple['list_41']['data'].= '     -   list item 2.4'.NL;
$simple['list_41']['data'].= '   3.   numbered list item 3'.NL;
$simple['list_41']['data'].= '   4.   numbered list item 4'.NL;
$simple['list_41']['data'].= '     -   list item 4.1'.NL;
$simple['list_41']['data'].= '     -   list item 4.2'.NL;
$simple['list_41']['data'].= '       421.   numbered list item 4.2.1'.NL;
$simple['list_41']['data'].= '       422.   numbered list item 4.2.2'.NL;
$simple['list_41']['data'].= '     -   list item 4.3'.NL;
$simple['list_41']['data'].= '     -   list item 4.4'.NL;
$simple['list_41']['data'].= '   5.   numbered list item 5'.NL;
$simple['list_41']['data'].= '   6.   numbered list item 6';
$simple['list_41']['expected'] = '<ol>';
$simple['list_41']['expected'].=   '<li>numbered list item 1</li>';
$simple['list_41']['expected'].=   '<li>numbered list item 2';
$simple['list_41']['expected'].=     '<ul>';
$simple['list_41']['expected'].=       '<li>list item 2.1</li>';
$simple['list_41']['expected'].=       '<li>list item 2.2';
$simple['list_41']['expected'].=         '<ol>';
$simple['list_41']['expected'].=           '<li>numbered list item 2.2.1</li>';
$simple['list_41']['expected'].=           '<li>numbered list item 2.2.2</li>';
$simple['list_41']['expected'].=         '</ol>';
$simple['list_41']['expected'].=       '</li>';
$simple['list_41']['expected'].=       '<li>list item 2.3</li>';
$simple['list_41']['expected'].=       '<li>list item 2.4</li>';
$simple['list_41']['expected'].=     '</ul>';
$simple['list_41']['expected'].=   '</li>';
$simple['list_41']['expected'].=   '<li>numbered list item 3</li>';
$simple['list_41']['expected'].=   '<li>numbered list item 4';
$simple['list_41']['expected'].=     '<ul>';
$simple['list_41']['expected'].=       '<li>list item 4.1</li>';
$simple['list_41']['expected'].=       '<li>list item 4.2';
$simple['list_41']['expected'].=         '<ol>';
$simple['list_41']['expected'].=           '<li>numbered list item 4.2.1</li>';
$simple['list_41']['expected'].=           '<li>numbered list item 4.2.2</li>';
$simple['list_41']['expected'].=         '</ol>';
$simple['list_41']['expected'].=       '</li>';
$simple['list_41']['expected'].=       '<li>list item 4.3</li>';
$simple['list_41']['expected'].=       '<li>list item 4.4</li>';
$simple['list_41']['expected'].=     '</ul>';
$simple['list_41']['expected'].=   '</li>';
$simple['list_41']['expected'].=   '<li>numbered list item 5</li>';
$simple['list_41']['expected'].=   '<li>numbered list item 6</li>';
$simple['list_41']['expected'].= '</ol>';

# paragraph
$simple['paragraph_1']['data'] = 'paragraph line 1'.NL;
$simple['paragraph_1']['data'].= 'paragraph line 2';
$simple['paragraph_1']['expected'] = '<p>';
$simple['paragraph_1']['expected'].=   'paragraph line 1'.NL;
$simple['paragraph_1']['expected'].=   'paragraph line 2';
$simple['paragraph_1']['expected'].= '</p>';

$simple['paragraph_2']['data'] = '   paragraph line 1   '.NL;
$simple['paragraph_2']['data'].= '      paragraph line 2   ';
$simple['paragraph_2']['expected'] = '<p>';
$simple['paragraph_2']['expected'].=   'paragraph line 1';
$simple['paragraph_2']['expected'].=   '<br>'.NL;
$simple['paragraph_2']['expected'].=   '      paragraph line 2   ';
$simple['paragraph_2']['expected'].= '</p>';

# blockquote
$simple['blockquote_1']['data'] = '>blockquote line   ';
$simple['blockquote_1']['expected'] = '<blockquote>';
$simple['blockquote_1']['expected'].=   '<p>';
$simple['blockquote_1']['expected'].=     'blockquote line';
$simple['blockquote_1']['expected'].=   '</p>';
$simple['blockquote_1']['expected'].= '</blockquote>';

$simple['blockquote_2']['data'] = '   >   blockquote line 1   '.NL;
$simple['blockquote_2']['data'].= '   >   blockquote line 2   ';
$simple['blockquote_2']['expected'] = '<blockquote>';
$simple['blockquote_2']['expected'].=   '<p>';
$simple['blockquote_2']['expected'].=     'blockquote line 1';
$simple['blockquote_2']['expected'].=     '<br>'.NL;
$simple['blockquote_2']['expected'].=     '  blockquote line 2';
$simple['blockquote_2']['expected'].=   '</p>';
$simple['blockquote_2']['expected'].= '</blockquote>';

$simple['blockquote_3']['data'] = '> blockquote line 1'.NL;
$simple['blockquote_3']['data'].= 'blockquote line 2';
$simple['blockquote_3']['expected'] = '<blockquote>';
$simple['blockquote_3']['expected'].=   '<p>';
$simple['blockquote_3']['expected'].=     'blockquote line 1'.NL;
$simple['blockquote_3']['expected'].=     'blockquote line 2';
$simple['blockquote_3']['expected'].=   '</p>';
$simple['blockquote_3']['expected'].= '</blockquote>';

$simple['blockquote_4']['data'] = '> blockquote line 1'.NL;
$simple['blockquote_4']['data'].= '          blockquote line 2';
$simple['blockquote_4']['expected'] = '<blockquote>';
$simple['blockquote_4']['expected'].=   '<p>';
$simple['blockquote_4']['expected'].=     'blockquote line 1'.NL;
$simple['blockquote_4']['expected'].=     '          blockquote line 2';
$simple['blockquote_4']['expected'].=   '</p>';
$simple['blockquote_4']['expected'].= '</blockquote>';

$simple['blockquote_5']['data'] = '>          blockquote line 1'.NL;
$simple['blockquote_5']['data'].= 'blockquote line 2';
$simple['blockquote_5']['expected'] = '<blockquote>';
$simple['blockquote_5']['expected'].=   '<pre>';
$simple['blockquote_5']['expected'].=     '<code>     ';
$simple['blockquote_5']['expected'].=       'blockquote line 1';
$simple['blockquote_5']['expected'].=     '</code>';
$simple['blockquote_5']['expected'].=   '</pre>';
$simple['blockquote_5']['expected'].=   '<p>';
$simple['blockquote_5']['expected'].=     'blockquote line 2';
$simple['blockquote_5']['expected'].=   '</p>';
$simple['blockquote_5']['expected'].= '</blockquote>';

$simple['blockquote_6']['data'] = '>          blockquote line 1'.NL;
$simple['blockquote_6']['data'].= '          blockquote line 2';
$simple['blockquote_6']['expected'] = '<blockquote>';
$simple['blockquote_6']['expected'].=   '<pre>';
$simple['blockquote_6']['expected'].=     '<code>';
$simple['blockquote_6']['expected'].=       '     blockquote line 1'.NL;
$simple['blockquote_6']['expected'].=       '      blockquote line 2';
$simple['blockquote_6']['expected'].=     '</code>';
$simple['blockquote_6']['expected'].=   '</pre>';
$simple['blockquote_6']['expected'].= '</blockquote>';

$simple['blockquote_7']['data'] = '> blockquote line 1'.NL;
$simple['blockquote_7']['data'].= '> blockquote line 2';
$simple['blockquote_7']['expected'] = '<blockquote>';
$simple['blockquote_7']['expected'].=   '<p>';
$simple['blockquote_7']['expected'].=     'blockquote line 1'.NL;
$simple['blockquote_7']['expected'].=     'blockquote line 2';
$simple['blockquote_7']['expected'].=   '</p>';
$simple['blockquote_7']['expected'].= '</blockquote>';

$simple['blockquote_8']['data'] = '> blockquote line 1'.NL;
$simple['blockquote_8']['data'].= '         > blockquote line 2';
$simple['blockquote_8']['expected'] = '<blockquote>';
$simple['blockquote_8']['expected'].=   '<p>';
$simple['blockquote_8']['expected'].=      'blockquote line 1';
$simple['blockquote_8']['expected'].=   '</p>';
$simple['blockquote_8']['expected'].= '</blockquote>';
$simple['blockquote_8']['expected'].= '<pre>';
$simple['blockquote_8']['expected'].=   '<code>';
$simple['blockquote_8']['expected'].=     '     &gt; blockquote line 2';
$simple['blockquote_8']['expected'].=   '</code>';
$simple['blockquote_8']['expected'].= '</pre>';

$simple['blockquote_9']['data'] = '>          blockquote line 1'.NL;
$simple['blockquote_9']['data'].= '> blockquote line 2';
$simple['blockquote_9']['expected'] = '<blockquote>';
$simple['blockquote_9']['expected'].=   '<pre>';
$simple['blockquote_9']['expected'].=     '<code>';
$simple['blockquote_9']['expected'].=       '     blockquote line 1';
$simple['blockquote_9']['expected'].=     '</code>';
$simple['blockquote_9']['expected'].=   '</pre>';
$simple['blockquote_9']['expected'].=   '<p>';
$simple['blockquote_9']['expected'].=     'blockquote line 2';
$simple['blockquote_9']['expected'].=   '</p>';
$simple['blockquote_9']['expected'].= '</blockquote>';

$simple['blockquote_10']['data'] = '>          blockquote line 1'.NL;
$simple['blockquote_10']['data'].= '         > blockquote line 2';
$simple['blockquote_10']['expected'] = '<blockquote>';
$simple['blockquote_10']['expected'].=   '<pre>';
$simple['blockquote_10']['expected'].=     '<code>';
$simple['blockquote_10']['expected'].=       '     blockquote line 1';
$simple['blockquote_10']['expected'].=     '</code>';
$simple['blockquote_10']['expected'].=   '</pre>';
$simple['blockquote_10']['expected'].= '</blockquote>';
$simple['blockquote_10']['expected'].= '<pre>';
$simple['blockquote_10']['expected'].=   '<code>';
$simple['blockquote_10']['expected'].=     '     &gt; blockquote line 2';
$simple['blockquote_10']['expected'].=   '</code>';
$simple['blockquote_10']['expected'].= '</pre>';

# code
$simple['code']['data'] = '    code line 1     '.NL;
$simple['code']['data'].= '         code line 2'.NL;
$simple['code']['data'].= '    code line 3';
$simple['code']['expected'] = '<pre>';
$simple['code']['expected'].=   '<code>';
$simple['code']['expected'].=     'code line 1     '.NL;
$simple['code']['expected'].=       '     code line 2'.NL;
$simple['code']['expected'].=     'code line 3';
$simple['code']['expected'].=   '</code>';
$simple['code']['expected'].= '</pre>';

# italic/bold/code in header
$simple['decoration_header_1']['data'] = '# Title with *italic text*';
$simple['decoration_header_1']['expected'] = '<h1>Title with <em>italic text</em></h1>';

$simple['decoration_header_2']['data'] = '# Title with _italic text_';
$simple['decoration_header_2']['expected'] = '<h1>Title with <em>italic text</em></h1>';

$simple['decoration_header_3']['data'] = '# Title with **bold text**';
$simple['decoration_header_3']['expected'] = '<h1>Title with <strong>bold text</strong></h1>';

$simple['decoration_header_4']['data'] = '# Title with __bold text__';
$simple['decoration_header_4']['expected'] = '<h1>Title with <strong>bold text</strong></h1>';

$simple['decoration_header_5']['data'] = '# Title with ***italic and bold text***';
$simple['decoration_header_5']['expected'] = '<h1>Title with <em><strong>italic and bold text</strong></em></h1>';

$simple['decoration_header_6']['data'] = '# Title with ___italic and bold text___';
$simple['decoration_header_6']['expected'] = '<h1>Title with <em><strong>italic and bold text</strong></em></h1>';

$simple['decoration_header_7']['data'] = '# Title with `code`';
$simple['decoration_header_7']['expected'] = '<h1>Title with <code>code</code></h1>';

# italic/bold/code in paragraph
$simple['decoration_paragraph_1']['data'] = 'paragraph line 1'.NL;
$simple['decoration_paragraph_1']['data'].= 'paragraph *italic line 2*'.NL;
$simple['decoration_paragraph_1']['data'].= 'paragraph line 3';
$simple['decoration_paragraph_1']['expected'] = '<p>';
$simple['decoration_paragraph_1']['expected'].=   'paragraph line 1'.NL;
$simple['decoration_paragraph_1']['expected'].=   'paragraph <em>italic line 2</em>'.NL;
$simple['decoration_paragraph_1']['expected'].=   'paragraph line 3';
$simple['decoration_paragraph_1']['expected'].= '</p>';

$simple['decoration_paragraph_2']['data'] = 'paragraph line 1'.NL;
$simple['decoration_paragraph_2']['data'].= 'paragraph _italic line 2_'.NL;
$simple['decoration_paragraph_2']['data'].= 'paragraph line 3';
$simple['decoration_paragraph_2']['expected'] = '<p>';
$simple['decoration_paragraph_2']['expected'].=   'paragraph line 1'.NL;
$simple['decoration_paragraph_2']['expected'].=   'paragraph <em>italic line 2</em>'.NL;
$simple['decoration_paragraph_2']['expected'].=   'paragraph line 3';
$simple['decoration_paragraph_2']['expected'].= '</p>';

$simple['decoration_paragraph_3']['data'] = 'paragraph line 1'.NL;
$simple['decoration_paragraph_3']['data'].= 'paragraph **bold line 2**'.NL;
$simple['decoration_paragraph_3']['data'].= 'paragraph line 3';
$simple['decoration_paragraph_3']['expected'] = '<p>';
$simple['decoration_paragraph_3']['expected'].=   'paragraph line 1'.NL;
$simple['decoration_paragraph_3']['expected'].=   'paragraph <strong>bold line 2</strong>'.NL;
$simple['decoration_paragraph_3']['expected'].=   'paragraph line 3';
$simple['decoration_paragraph_3']['expected'].= '</p>';

$simple['decoration_paragraph_4']['data'] = 'paragraph line 1'.NL;
$simple['decoration_paragraph_4']['data'].= 'paragraph __bold line 2__'.NL;
$simple['decoration_paragraph_4']['data'].= 'paragraph line 3';
$simple['decoration_paragraph_4']['expected'] = '<p>';
$simple['decoration_paragraph_4']['expected'].=   'paragraph line 1'.NL;
$simple['decoration_paragraph_4']['expected'].=   'paragraph <strong>bold line 2</strong>'.NL;
$simple['decoration_paragraph_4']['expected'].=   'paragraph line 3';
$simple['decoration_paragraph_4']['expected'].= '</p>';

$simple['decoration_paragraph_5']['data'] = 'paragraph line 1'.NL;
$simple['decoration_paragraph_5']['data'].= 'paragraph ***italic and bold line 2***'.NL;
$simple['decoration_paragraph_5']['data'].= 'paragraph line 3';
$simple['decoration_paragraph_5']['expected'] = '<p>';
$simple['decoration_paragraph_5']['expected'].=   'paragraph line 1'.NL;
$simple['decoration_paragraph_5']['expected'].=   'paragraph <em><strong>italic and bold line 2</strong></em>'.NL;
$simple['decoration_paragraph_5']['expected'].=   'paragraph line 3';
$simple['decoration_paragraph_5']['expected'].= '</p>';

$simple['decoration_paragraph_6']['data'] = 'paragraph line 1'.NL;
$simple['decoration_paragraph_6']['data'].= 'paragraph ___italic and bold line 2___'.NL;
$simple['decoration_paragraph_6']['data'].= 'paragraph line 3';
$simple['decoration_paragraph_6']['expected'] = '<p>';
$simple['decoration_paragraph_6']['expected'].=   'paragraph line 1'.NL;
$simple['decoration_paragraph_6']['expected'].=   'paragraph <em><strong>italic and bold line 2</strong></em>'.NL;
$simple['decoration_paragraph_6']['expected'].=   'paragraph line 3';
$simple['decoration_paragraph_6']['expected'].= '</p>';

$simple['decoration_paragraph_7']['data'] = 'paragraph line 1'.NL;
$simple['decoration_paragraph_7']['data'].= 'paragraph `code line 2`'.NL;
$simple['decoration_paragraph_7']['data'].= 'paragraph line 3';
$simple['decoration_paragraph_7']['expected'] = '<p>';
$simple['decoration_paragraph_7']['expected'].=   'paragraph line 1'.NL;
$simple['decoration_paragraph_7']['expected'].=   'paragraph <code>code line 2</code>'.NL;
$simple['decoration_paragraph_7']['expected'].=   'paragraph line 3';
$simple['decoration_paragraph_7']['expected'].= '</p>';

# italic/bold/code in blockquote
$simple['decoration_blockquote_1']['data'] = '> blockquote line 1'.NL;
$simple['decoration_blockquote_1']['data'].= '> blockquote *italic line 2*'.NL;
$simple['decoration_blockquote_1']['data'].= '> blockquote line 3';
$simple['decoration_blockquote_1']['expected'] = '<blockquote>';
$simple['decoration_blockquote_1']['expected'].=   '<p>';
$simple['decoration_blockquote_1']['expected'].=     'blockquote line 1'.NL;
$simple['decoration_blockquote_1']['expected'].=     'blockquote <em>italic line 2</em>'.NL;
$simple['decoration_blockquote_1']['expected'].=     'blockquote line 3';
$simple['decoration_blockquote_1']['expected'].=   '</p>';
$simple['decoration_blockquote_1']['expected'].= '</blockquote>';

$simple['decoration_blockquote_2']['data'] = '> blockquote line 1'.NL;
$simple['decoration_blockquote_2']['data'].= '> blockquote _italic line 2_'.NL;
$simple['decoration_blockquote_2']['data'].= '> blockquote line 3';
$simple['decoration_blockquote_2']['expected'] = '<blockquote>';
$simple['decoration_blockquote_2']['expected'].=   '<p>';
$simple['decoration_blockquote_2']['expected'].=     'blockquote line 1'.NL;
$simple['decoration_blockquote_2']['expected'].=     'blockquote <em>italic line 2</em>'.NL;
$simple['decoration_blockquote_2']['expected'].=     'blockquote line 3';
$simple['decoration_blockquote_2']['expected'].=   '</p>';
$simple['decoration_blockquote_2']['expected'].= '</blockquote>';

$simple['decoration_blockquote_3']['data'] = '> blockquote line 1'.NL;
$simple['decoration_blockquote_3']['data'].= '> blockquote **bold line 2**'.NL;
$simple['decoration_blockquote_3']['data'].= '> blockquote line 3';
$simple['decoration_blockquote_3']['expected'] = '<blockquote>';
$simple['decoration_blockquote_3']['expected'].=   '<p>';
$simple['decoration_blockquote_3']['expected'].=     'blockquote line 1'.NL;
$simple['decoration_blockquote_3']['expected'].=     'blockquote <strong>bold line 2</strong>'.NL;
$simple['decoration_blockquote_3']['expected'].=     'blockquote line 3';
$simple['decoration_blockquote_3']['expected'].=   '</p>';
$simple['decoration_blockquote_3']['expected'].= '</blockquote>';

$simple['decoration_blockquote_4']['data'] = '> blockquote line 1'.NL;
$simple['decoration_blockquote_4']['data'].= '> blockquote __bold line 2__'.NL;
$simple['decoration_blockquote_4']['data'].= '> blockquote line 3';
$simple['decoration_blockquote_4']['expected'] = '<blockquote>';
$simple['decoration_blockquote_4']['expected'].=   '<p>';
$simple['decoration_blockquote_4']['expected'].=     'blockquote line 1'.NL;
$simple['decoration_blockquote_4']['expected'].=     'blockquote <strong>bold line 2</strong>'.NL;
$simple['decoration_blockquote_4']['expected'].=     'blockquote line 3';
$simple['decoration_blockquote_4']['expected'].=   '</p>';
$simple['decoration_blockquote_4']['expected'].= '</blockquote>';

$simple['decoration_blockquote_5']['data'] = '> blockquote line 1'.NL;
$simple['decoration_blockquote_5']['data'].= '> blockquote ***italic and bold line 2***'.NL;
$simple['decoration_blockquote_5']['data'].= '> blockquote line 3';
$simple['decoration_blockquote_5']['expected'] = '<blockquote>';
$simple['decoration_blockquote_5']['expected'].=   '<p>';
$simple['decoration_blockquote_5']['expected'].=     'blockquote line 1'.NL;
$simple['decoration_blockquote_5']['expected'].=     'blockquote <em><strong>italic and bold line 2</strong></em>'.NL;
$simple['decoration_blockquote_5']['expected'].=     'blockquote line 3';
$simple['decoration_blockquote_5']['expected'].=   '</p>';
$simple['decoration_blockquote_5']['expected'].= '</blockquote>';

$simple['decoration_blockquote_6']['data'] = '> blockquote line 1'.NL;
$simple['decoration_blockquote_6']['data'].= '> blockquote ___italic and bold line 2___'.NL;
$simple['decoration_blockquote_6']['data'].= '> blockquote line 3';
$simple['decoration_blockquote_6']['expected'] = '<blockquote>';
$simple['decoration_blockquote_6']['expected'].=   '<p>';
$simple['decoration_blockquote_6']['expected'].=     'blockquote line 1'.NL;
$simple['decoration_blockquote_6']['expected'].=     'blockquote <em><strong>italic and bold line 2</strong></em>'.NL;
$simple['decoration_blockquote_6']['expected'].=     'blockquote line 3';
$simple['decoration_blockquote_6']['expected'].=   '</p>';
$simple['decoration_blockquote_6']['expected'].= '</blockquote>';

$simple['decoration_blockquote_7']['data'] = '> blockquote line 1'.NL;
$simple['decoration_blockquote_7']['data'].= '> blockquote `code line 2`'.NL;
$simple['decoration_blockquote_7']['data'].= '> blockquote line 3';
$simple['decoration_blockquote_7']['expected'] = '<blockquote>';
$simple['decoration_blockquote_7']['expected'].=   '<p>';
$simple['decoration_blockquote_7']['expected'].=     'blockquote line 1'.NL;
$simple['decoration_blockquote_7']['expected'].=     'blockquote <code>code line 2</code>'.NL;
$simple['decoration_blockquote_7']['expected'].=     'blockquote line 3';
$simple['decoration_blockquote_7']['expected'].=   '</p>';
$simple['decoration_blockquote_7']['expected'].= '</blockquote>';

# italic/bold/code in list
$simple['decoration_list_1']['data'] = '- list *italic item*';
$simple['decoration_list_1']['expected'] = '<ul>';
$simple['decoration_list_1']['expected'].=   '<li>list <em>italic item</em></li>';
$simple['decoration_list_1']['expected'].= '</ul>';

$simple['decoration_list_2']['data'] = '- list _italic item_';
$simple['decoration_list_2']['expected'] = '<ul>';
$simple['decoration_list_2']['expected'].=   '<li>list <em>italic item</em></li>';
$simple['decoration_list_2']['expected'].= '</ul>';

$simple['decoration_list_3']['data'] = '- list **bold item**';
$simple['decoration_list_3']['expected'] = '<ul>';
$simple['decoration_list_3']['expected'].=   '<li>list <strong>bold item</strong></li>';
$simple['decoration_list_3']['expected'].= '</ul>';

$simple['decoration_list_4']['data'] = '- list __bold item__';
$simple['decoration_list_4']['expected'] = '<ul>';
$simple['decoration_list_4']['expected'].=   '<li>list <strong>bold item</strong></li>';
$simple['decoration_list_4']['expected'].= '</ul>';

$simple['decoration_list_5']['data'] = '- list ***italic and bold item***';
$simple['decoration_list_5']['expected'] = '<ul>';
$simple['decoration_list_5']['expected'].=   '<li>list <em><strong>italic and bold item</strong></em></li>';
$simple['decoration_list_5']['expected'].= '</ul>';

$simple['decoration_list_6']['data'] = '- list ___italic and bold item___';
$simple['decoration_list_6']['expected'] = '<ul>';
$simple['decoration_list_6']['expected'].=   '<li>list <em><strong>italic and bold item</strong></em></li>';
$simple['decoration_list_6']['expected'].= '</ul>';

$simple['decoration_list_7']['data'] = '- list `code item`';
$simple['decoration_list_7']['expected'] = '<ul>';
$simple['decoration_list_7']['expected'].=   '<li>list <code>code item</code></li>';
$simple['decoration_list_7']['expected'].= '</ul>';

# links
$simple['links']['data'] = '[]()'.NL;
$simple['links']['data'].= '[](http://example.com)'.NL;
$simple['links']['data'].= '[link text]()'.NL;
$simple['links']['data'].= '[link text](http://example.com)'.NL;
$simple['links']['data'].= '[]("title")'.NL;
$simple['links']['data'].= '[](http://example.com "title")'.NL;
$simple['links']['data'].= '[link text]("title")'.NL;
$simple['links']['data'].= '[link text](http://example.com "title")';
$simple['links']['expected'] = '<p>';
$simple['links']['expected'].=   '<a title="" href=""></a>'.NL;
$simple['links']['expected'].=   '<a title="" href="http://example.com"></a>'.NL;
$simple['links']['expected'].=   '<a title="" href="">link text</a>'.NL;
$simple['links']['expected'].=   '<a title="" href="http://example.com">link text</a>'.NL;
$simple['links']['expected'].=   '<a title="title" href=""></a>'.NL;
$simple['links']['expected'].=   '<a title="title" href="http://example.com"></a>'.NL;
$simple['links']['expected'].=   '<a title="title" href="">link text</a>'.NL;
$simple['links']['expected'].=   '<a title="title" href="http://example.com">link text</a>';
$simple['links']['expected'].= '</p>';

$simple['links_references']['data'] = '[][id_1]'.NL;
$simple['links_references']['data'].= '[link text 1][id_1]'.NL;
$simple['links_references']['data'].= '[][id_2]'.NL;
$simple['links_references']['data'].= '[link text 2][id_2]'.NL;
$simple['links_references']['data'].= '[][id_3]'.NL;
$simple['links_references']['data'].= '[link text 3][id_3]'.NL;
$simple['links_references']['data'].= '[link text 4][]'.NL;
$simple['links_references']['data'].= '[link text 5][]'.NL;
$simple['links_references']['data'].= '[][id_unknown]'.NL;
$simple['links_references']['data'].= '[link text unknown][id_unknown]'.NL;
$simple['links_references']['data'].= '<!-- references -->'.NL;
$simple['links_references']['data'].= '[id_1]: http://example.com/'.NL;
$simple['links_references']['data'].= '[id_2]: "Title"'.NL;
$simple['links_references']['data'].= '[id_3]: http://example.com/ "Title"'.NL;
$simple['links_references']['data'].= '[link text 4]: http://example.com/'.NL;
$simple['links_references']['data'].= '[link text 5]: http://example.com/ "Title"';
$simple['links_references']['expected'] = '<p>';
$simple['links_references']['expected'].=   '<a title="" href="http://example.com/"></a>'.NL;
$simple['links_references']['expected'].=   '<a title="" href="http://example.com/">link text 1</a>'.NL;
$simple['links_references']['expected'].=   '<a title="Title" href=""></a>'.NL;
$simple['links_references']['expected'].=   '<a title="Title" href="">link text 2</a>'.NL;
$simple['links_references']['expected'].=   '<a title="Title" href="http://example.com/"></a>'.NL;
$simple['links_references']['expected'].=   '<a title="Title" href="http://example.com/">link text 3</a>'.NL;
$simple['links_references']['expected'].=   '<a title="" href="http://example.com/">link text 4</a>'.NL;
$simple['links_references']['expected'].=   '<a title="Title" href="http://example.com/">link text 5</a>'.NL;
$simple['links_references']['expected'].=   '[][id<em>unknown]'.NL;
$simple['links_references']['expected'].=   '[link text unknown][id</em>unknown]'.NL;
$simple['links_references']['expected'].=   '<!-- references -->'.NL.NL.NL.NL.NL;
$simple['links_references']['expected'].= '</p>';

$simple['link_and_email']['data'] = 'url: <http://example.com>'.NL;
$simple['link_and_email']['data'].= 'email: <user@example.com>';
$simple['link_and_email']['expected'] = '<p>';
$simple['link_and_email']['expected'].=   'url: <a href="http://example.com">http://example.com</a>'.NL;
$simple['link_and_email']['expected'].=   'email: <a href="mailto:user@example.com">user@example.com</a>';
$simple['link_and_email']['expected'].= '</p>';

# images
$simple['images']['data'] = '![]()'.NL;
$simple['images']['data'].= '![alt text]()'.NL;
$simple['images']['data'].= '![](path)'.NL;
$simple['images']['data'].= '![alt text](path)'.NL;
$simple['images']['data'].= '![]("Title")'.NL;
$simple['images']['data'].= '![alt text]("Title")'.NL;
$simple['images']['data'].= '![](path "Title")'.NL;
$simple['images']['data'].= '![alt text](path "Title")';
$simple['images']['expected'] = '<p>';
$simple['images']['expected'].=   '<img title="" src="" alt="">'.NL;
$simple['images']['expected'].=   '<img title="" src="" alt="alt text">'.NL;
$simple['images']['expected'].=   '<img title="" src="path" alt="">'.NL;
$simple['images']['expected'].=   '<img title="" src="path" alt="alt text">'.NL;
$simple['images']['expected'].=   '<img title="Title" src="" alt="">'.NL;
$simple['images']['expected'].=   '<img title="Title" src="" alt="alt text">'.NL;
$simple['images']['expected'].=   '<img title="Title" src="path" alt="">'.NL;
$simple['images']['expected'].=   '<img title="Title" src="path" alt="alt text">';
$simple['images']['expected'].= '</p>';

$simple['images_references']['data'] = '![][id_1]'.NL;
$simple['images_references']['data'].= '![alt text 1][id_1]'.NL;
$simple['images_references']['data'].= '![][id_2]'.NL;
$simple['images_references']['data'].= '![alt text 2][id_2]'.NL;
$simple['images_references']['data'].= '![][id_3]'.NL;
$simple['images_references']['data'].= '![alt text 3][id_3]'.NL;
$simple['images_references']['data'].= '![][id_4]'.NL;
$simple['images_references']['data'].= '![alt text 4][id_4]'.NL;
$simple['images_references']['data'].= '<!-- references -->'.NL;
$simple['images_references']['data'].= '[id_1]: path'.NL;
$simple['images_references']['data'].= '[id_2]: "Title"'.NL;
$simple['images_references']['data'].= '[id_3]: path "Title"';
$simple['images_references']['expected'] = '<p><img title="" src="path" alt="">'.NL;
$simple['images_references']['expected'].=   '<img title="" src="path" alt="alt text 1">'.NL;
$simple['images_references']['expected'].=   '<img title="Title" src="" alt="">'.NL;
$simple['images_references']['expected'].=   '<img title="Title" src="" alt="alt text 2">'.NL;
$simple['images_references']['expected'].=   '<img title="Title" src="path" alt="">'.NL;
$simple['images_references']['expected'].=   '<img title="Title" src="path" alt="alt text 3">'.NL;
$simple['images_references']['expected'].=   '![][id<em>4]'.NL;
$simple['images_references']['expected'].=   '![alt text 4][id</em>4]'.NL;
$simple['images_references']['expected'].=   '<!-- references -->'.NL.NL.NL;
$simple['images_references']['expected'].= '</p>';



##################
### separation ###
##################


# header near header
$separation[100]['data'] = '# Title H1 (atx-style)'.NL;
$separation[100]['data'].= '## Title H2 (atx-style)';
$separation[100]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[100]['expected'].= '<h2>Title H2 (atx-style)</h2>';

$separation[101]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[101]['data'].= '======================='.NL;
$separation[101]['data'].= 'Title H2 (Setext-style)'.NL;
$separation[101]['data'].= '-----------------------';
$separation[101]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[101]['expected'].= '<h2>Title H2 (Setext-style)</h2>';

$separation[102]['data'] = '# Title H1 (atx-style)'.NL;
$separation[102]['data'].= 'Title H2 (Setext-style)'.NL;
$separation[102]['data'].= '-----------------------';
$separation[102]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[102]['expected'].= '<h2>Title H2 (Setext-style)</h2>';

$separation[103]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[103]['data'].= '======================='.NL;
$separation[103]['data'].= '## Title H2 (atx-style)';
$separation[103]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[103]['expected'].= '<h2>Title H2 (atx-style)</h2>';

$separation[104]['data'] = '# Title H1 (atx-style)'.NL;
$separation[104]['data'].= NL;
$separation[104]['data'].= '## Title H2 (atx-style)';
$separation[104]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[104]['expected'].= '<h2>Title H2 (atx-style)</h2>';

$separation[105]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[105]['data'].= '======================='.NL;
$separation[105]['data'].= NL;
$separation[105]['data'].= 'Title H2 (Setext-style)'.NL;
$separation[105]['data'].= '-----------------------';
$separation[105]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[105]['expected'].= '<h2>Title H2 (Setext-style)</h2>';

$separation[106]['data'] = '# Title H1 (atx-style)'.NL;
$separation[106]['data'].= NL;
$separation[106]['data'].= 'Title H2 (Setext-style)'.NL;
$separation[106]['data'].= '-----------------------';
$separation[106]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[106]['expected'].= '<h2>Title H2 (Setext-style)</h2>';

$separation[107]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[107]['data'].= '======================='.NL;
$separation[107]['data'].= NL;
$separation[107]['data'].= '## Title H2 (atx-style)';
$separation[107]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[107]['expected'].= '<h2>Title H2 (atx-style)</h2>';

# header near paragraph
$separation[110]['data'] = '# Title H1 (atx-style)'.NL;
$separation[110]['data'].= 'paragraph line 1'.NL;
$separation[110]['data'].= 'paragraph line 2'.NL;
$separation[110]['data'].= 'paragraph line 3';
$separation[110]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[110]['expected'].= '<p>';
$separation[110]['expected'].=   'paragraph line 1'.NL;
$separation[110]['expected'].=   'paragraph line 2'.NL;
$separation[110]['expected'].=   'paragraph line 3';
$separation[110]['expected'].= '</p>';

$separation[111]['data'] = '# Title H1 (atx-style)'.NL;
$separation[111]['data'].= NL;
$separation[111]['data'].= 'paragraph line 1'.NL;
$separation[111]['data'].= 'paragraph line 2'.NL;
$separation[111]['data'].= 'paragraph line 3';
$separation[111]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[111]['expected'].= '<p>';
$separation[111]['expected'].=   'paragraph line 1'.NL;
$separation[111]['expected'].=   'paragraph line 2'.NL;
$separation[111]['expected'].=   'paragraph line 3';
$separation[111]['expected'].= '</p>';

$separation[112]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[112]['data'].= '======================='.NL;
$separation[112]['data'].= 'paragraph line 1'.NL;
$separation[112]['data'].= 'paragraph line 2'.NL;
$separation[112]['data'].= 'paragraph line 3';
$separation[112]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[112]['expected'].= '<p>';
$separation[112]['expected'].=   'paragraph line 1'.NL;
$separation[112]['expected'].=   'paragraph line 2'.NL;
$separation[112]['expected'].=   'paragraph line 3';
$separation[112]['expected'].= '</p>';

$separation[113]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[113]['data'].= '======================='.NL;
$separation[113]['data'].= NL;
$separation[113]['data'].= 'paragraph line 1'.NL;
$separation[113]['data'].= 'paragraph line 2'.NL;
$separation[113]['data'].= 'paragraph line 3';
$separation[113]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[113]['expected'].= '<p>';
$separation[113]['expected'].=   'paragraph line 1'.NL;
$separation[113]['expected'].=   'paragraph line 2'.NL;
$separation[113]['expected'].=   'paragraph line 3';
$separation[113]['expected'].= '</p>';

# header near list
$separation[120]['data'] = '# Title H1 (atx-style)'.NL;
$separation[120]['data'].= '* list item 1'.NL;
$separation[120]['data'].= '* list item 2'.NL;
$separation[120]['data'].= '* list item 3';
$separation[120]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[120]['expected'].= '<ul>';
$separation[120]['expected'].=   '<li>list item 1</li>';
$separation[120]['expected'].=   '<li>list item 2</li>';
$separation[120]['expected'].=   '<li>list item 3</li>';
$separation[120]['expected'].= '</ul>';

$separation[121]['data'] = '# Title H1 (atx-style)'.NL;
$separation[121]['data'].= NL;
$separation[121]['data'].= '* list item 1'.NL;
$separation[121]['data'].= '* list item 2'.NL;
$separation[121]['data'].= '* list item 3';
$separation[121]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[121]['expected'].= '<ul>';
$separation[121]['expected'].=   '<li>list item 1</li>';
$separation[121]['expected'].=   '<li>list item 2</li>';
$separation[121]['expected'].=   '<li>list item 3</li>';
$separation[121]['expected'].= '</ul>';

$separation[122]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[122]['data'].= '======================='.NL;
$separation[122]['data'].= '* list item 1'.NL;
$separation[122]['data'].= '* list item 2'.NL;
$separation[122]['data'].= '* list item 3';
$separation[122]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[122]['expected'].= '<ul>';
$separation[122]['expected'].=   '<li>list item 1</li>';
$separation[122]['expected'].=   '<li>list item 2</li>';
$separation[122]['expected'].=   '<li>list item 3</li>';
$separation[122]['expected'].= '</ul>';

$separation[123]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[123]['data'].= '======================='.NL;
$separation[123]['data'].= NL;
$separation[123]['data'].= '* list item 1'.NL;
$separation[123]['data'].= '* list item 2'.NL;
$separation[123]['data'].= '* list item 3';
$separation[123]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[123]['expected'].= '<ul>';
$separation[123]['expected'].=   '<li>list item 1</li>';
$separation[123]['expected'].=   '<li>list item 2</li>';
$separation[123]['expected'].=   '<li>list item 3</li>';
$separation[123]['expected'].= '</ul>';

# header near code
$separation[130]['data'] = '# Title H1 (atx-style)'.NL;
$separation[130]['data'].= '    code line 1'.NL;
$separation[130]['data'].= '         code line 2'.NL;
$separation[130]['data'].= '    code line 3';
$separation[130]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[130]['expected'].= '<pre>';
$separation[130]['expected'].=   '<code>';
$separation[130]['expected'].=     'code line 1'.NL;
$separation[130]['expected'].=       '     code line 2'.NL;
$separation[130]['expected'].=     'code line 3';
$separation[130]['expected'].=   '</code>';
$separation[130]['expected'].= '</pre>';

$separation[131]['data'] = '# Title H1 (atx-style)'.NL;
$separation[131]['data'].= NL;
$separation[131]['data'].= '    code line 1'.NL;
$separation[131]['data'].= '         code line 2'.NL;
$separation[131]['data'].= '    code line 3';
$separation[131]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[131]['expected'].= '<pre>';
$separation[131]['expected'].=   '<code>';
$separation[131]['expected'].=     'code line 1'.NL;
$separation[131]['expected'].=       '     code line 2'.NL;
$separation[131]['expected'].=     'code line 3';
$separation[131]['expected'].=   '</code>';
$separation[131]['expected'].= '</pre>';

$separation[132]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[132]['data'].= '======================='.NL;
$separation[132]['data'].= '    code line 1'.NL;
$separation[132]['data'].= '         code line 2'.NL;
$separation[132]['data'].= '    code line 3';
$separation[132]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[132]['expected'].= '<pre>';
$separation[132]['expected'].=   '<code>';
$separation[132]['expected'].=     'code line 1'.NL;
$separation[132]['expected'].=       '     code line 2'.NL;
$separation[132]['expected'].=     'code line 3';
$separation[132]['expected'].=   '</code>';
$separation[132]['expected'].= '</pre>';

$separation[133]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[133]['data'].= '======================='.NL;
$separation[133]['data'].= NL;
$separation[133]['data'].= '    code line 1'.NL;
$separation[133]['data'].= '         code line 2'.NL;
$separation[133]['data'].= '    code line 3';
$separation[133]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[133]['expected'].= '<pre>';
$separation[133]['expected'].=   '<code>';
$separation[133]['expected'].=     'code line 1'.NL;
$separation[133]['expected'].=       '     code line 2'.NL;
$separation[133]['expected'].=     'code line 3';
$separation[133]['expected'].=   '</code>';
$separation[133]['expected'].= '</pre>';

# header near blockquote
$separation[140]['data'] = '# Title H1 (atx-style)'.NL;
$separation[140]['data'].= '> blockquote line 1'.NL;
$separation[140]['data'].= '> blockquote line 2'.NL;
$separation[140]['data'].= '> blockquote line 3';
$separation[140]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[140]['expected'].= '<blockquote>';
$separation[140]['expected'].=   '<p>';
$separation[140]['expected'].=     'blockquote line 1'.NL;
$separation[140]['expected'].=     'blockquote line 2'.NL;
$separation[140]['expected'].=     'blockquote line 3';
$separation[140]['expected'].=   '</p>';
$separation[140]['expected'].= '</blockquote>';

$separation[141]['data'] = '# Title H1 (atx-style)'.NL;
$separation[141]['data'].= NL;
$separation[141]['data'].= '> blockquote line 1'.NL;
$separation[141]['data'].= '> blockquote line 2'.NL;
$separation[141]['data'].= '> blockquote line 3';
$separation[141]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[141]['expected'].= '<blockquote>';
$separation[141]['expected'].=   '<p>';
$separation[141]['expected'].=     'blockquote line 1'.NL;
$separation[141]['expected'].=     'blockquote line 2'.NL;
$separation[141]['expected'].=     'blockquote line 3';
$separation[141]['expected'].=   '</p>';
$separation[141]['expected'].= '</blockquote>';

$separation[142]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[142]['data'].= '======================='.NL;
$separation[142]['data'].= '> blockquote line 1'.NL;
$separation[142]['data'].= '> blockquote line 2'.NL;
$separation[142]['data'].= '> blockquote line 3';
$separation[142]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[142]['expected'].= '<blockquote>';
$separation[142]['expected'].=   '<p>';
$separation[142]['expected'].=     'blockquote line 1'.NL;
$separation[142]['expected'].=     'blockquote line 2'.NL;
$separation[142]['expected'].=     'blockquote line 3';
$separation[142]['expected'].=   '</p>';
$separation[142]['expected'].= '</blockquote>';

$separation[143]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[143]['data'].= '======================='.NL;
$separation[143]['data'].= NL;
$separation[143]['data'].= '> blockquote line 1'.NL;
$separation[143]['data'].= '> blockquote line 2'.NL;
$separation[143]['data'].= '> blockquote line 3';
$separation[143]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[143]['expected'].= '<blockquote>';
$separation[143]['expected'].=   '<p>';
$separation[143]['expected'].=     'blockquote line 1'.NL;
$separation[143]['expected'].=     'blockquote line 2'.NL;
$separation[143]['expected'].=     'blockquote line 3';
$separation[143]['expected'].=   '</p>';
$separation[143]['expected'].= '</blockquote>';

# header near hr
$separation[150]['data'] = '# Title H1 (atx-style)'.NL;
$separation[150]['data'].= '*  *  *';
$separation[150]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[150]['expected'].= '<hr>';

$separation[151]['data'] = '# Title H1 (atx-style)'.NL;
$separation[151]['data'].= '-  -  -';
$separation[151]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[151]['expected'].= '<hr>';

$separation[152]['data'] = '# Title H1 (atx-style)'.NL;
$separation[152]['data'].= '-------';
$separation[152]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[152]['expected'].= '<hr>';

$separation[153]['data'] = '# Title H1 (atx-style)'.NL;
$separation[153]['data'].= NL;
$separation[153]['data'].= '*  *  *';
$separation[153]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[153]['expected'].= '<hr>';

$separation[154]['data'] = '# Title H1 (atx-style)'.NL;
$separation[154]['data'].= NL;
$separation[154]['data'].= '-  -  -';
$separation[154]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[154]['expected'].= '<hr>';

$separation[155]['data'] = '# Title H1 (atx-style)'.NL;
$separation[155]['data'].= NL;
$separation[155]['data'].= '-------';
$separation[155]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[155]['expected'].= '<hr>';

$separation[156]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[156]['data'].= '======================='.NL;
$separation[156]['data'].= '*  *  *';
$separation[156]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[156]['expected'].= '<hr>';

$separation[157]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[157]['data'].= '======================='.NL;
$separation[157]['data'].= '-  -  -';
$separation[157]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[157]['expected'].= '<hr>';

$separation[158]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[158]['data'].= '======================='.NL;
$separation[158]['data'].= '-------';
$separation[158]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[158]['expected'].= '<hr>';

$separation[159]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[159]['data'].= '======================='.NL;
$separation[159]['data'].= NL;
$separation[159]['data'].= '*  *  *';
$separation[159]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[159]['expected'].= '<hr>';

$separation[160]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[160]['data'].= '======================='.NL;
$separation[160]['data'].= NL;
$separation[160]['data'].= '-  -  -';
$separation[160]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[160]['expected'].= '<hr>';

$separation[161]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[161]['data'].= '======================='.NL;
$separation[161]['data'].= NL;
$separation[161]['data'].= '-------';
$separation[161]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[161]['expected'].= '<hr>';

# header near markup
$separation[170]['data'] = '# Title H1 (atx-style)'.NL;
$separation[170]['data'].= '<div>'.NL;
$separation[170]['data'].= '  markup line 1'.NL;
$separation[170]['data'].= '  markup line 2'.NL;
$separation[170]['data'].= '  markup line 3'.NL;
$separation[170]['data'].= '</div>';
$separation[170]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[170]['expected'].= '<div>'.NL;
$separation[170]['expected'].= '  markup line 1'.NL;
$separation[170]['expected'].= '  markup line 2'.NL;
$separation[170]['expected'].= '  markup line 3'.NL;
$separation[170]['expected'].= '</div>';

$separation[171]['data'] = '# Title H1 (atx-style)'.NL;
$separation[171]['data'].= NL;
$separation[171]['data'].= '<div>'.NL;
$separation[171]['data'].= '  markup line 1'.NL;
$separation[171]['data'].= '  markup line 2'.NL;
$separation[171]['data'].= '  markup line 3'.NL;
$separation[171]['data'].= '</div>';
$separation[171]['expected'] = '<h1>Title H1 (atx-style)</h1>';
$separation[171]['expected'].= '<div>'.NL;
$separation[171]['expected'].= '  markup line 1'.NL;
$separation[171]['expected'].= '  markup line 2'.NL;
$separation[171]['expected'].= '  markup line 3'.NL;
$separation[171]['expected'].= '</div>';

$separation[172]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[172]['data'].= '======================='.NL;
$separation[172]['data'].= '<div>'.NL;
$separation[172]['data'].= '  markup line 1'.NL;
$separation[172]['data'].= '  markup line 2'.NL;
$separation[172]['data'].= '  markup line 3'.NL;
$separation[172]['data'].= '</div>';
$separation[172]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[172]['expected'].= '<div>'.NL;
$separation[172]['expected'].= '  markup line 1'.NL;
$separation[172]['expected'].= '  markup line 2'.NL;
$separation[172]['expected'].= '  markup line 3'.NL;
$separation[172]['expected'].= '</div>';

$separation[173]['data'] = 'Title H1 (Setext-style)'.NL;
$separation[173]['data'].= '======================='.NL;
$separation[173]['data'].= NL;
$separation[173]['data'].= '<div>'.NL;
$separation[173]['data'].= '  markup line 1'.NL;
$separation[173]['data'].= '  markup line 2'.NL;
$separation[173]['data'].= '  markup line 3'.NL;
$separation[173]['data'].= '</div>';
$separation[173]['expected'] = '<h1>Title H1 (Setext-style)</h1>';
$separation[173]['expected'].= '<div>'.NL;
$separation[173]['expected'].= '  markup line 1'.NL;
$separation[173]['expected'].= '  markup line 2'.NL;
$separation[173]['expected'].= '  markup line 3'.NL;
$separation[173]['expected'].= '</div>';



# paragraph near header
$separation[200]['data'] = 'paragraph line 1'.NL;
$separation[200]['data'].= 'paragraph line 2'.NL;
$separation[200]['data'].= 'paragraph line 3'.NL;
$separation[200]['data'].= '# Title H1 (atx-style)';
$separation[200]['expected'] = '<p>';
$separation[200]['expected'].=   'paragraph line 1'.NL;
$separation[200]['expected'].=   'paragraph line 2'.NL;
$separation[200]['expected'].=   'paragraph line 3';
$separation[200]['expected'].= '</p>';
$separation[200]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[201]['data'] = 'paragraph line 1'.NL;
$separation[201]['data'].= 'paragraph line 2'.NL;
$separation[201]['data'].= 'paragraph line 3'.NL;
$separation[201]['data'].= NL;
$separation[201]['data'].= '# Title H1 (atx-style)';
$separation[201]['expected'] = '<p>';
$separation[201]['expected'].=   'paragraph line 1'.NL;
$separation[201]['expected'].=   'paragraph line 2'.NL;
$separation[201]['expected'].=   'paragraph line 3';
$separation[201]['expected'].= '</p>';
$separation[201]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[202]['data'] = 'paragraph line 1'.NL;
$separation[202]['data'].= 'paragraph line 2'.NL;
$separation[202]['data'].= 'paragraph line 3'.NL;
$separation[202]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[202]['data'].= '======================';
$separation[202]['expected'] = '<h1>';
$separation[202]['expected'].=   'paragraph line 1'.NL;
$separation[202]['expected'].=   'paragraph line 2'.NL;
$separation[202]['expected'].=   'paragraph line 3'.NL;
$separation[202]['expected'].=   'Title H1 (Setex-style)';
$separation[202]['expected'].= '</h1>';

$separation[203]['data'] = 'paragraph line 1'.NL;
$separation[203]['data'].= 'paragraph line 2'.NL;
$separation[203]['data'].= 'paragraph line 3'.NL;
$separation[203]['data'].= NL;
$separation[203]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[203]['data'].= '======================';
$separation[203]['expected'] = '<p>';
$separation[203]['expected'].=   'paragraph line 1'.NL;
$separation[203]['expected'].=   'paragraph line 2'.NL;
$separation[203]['expected'].=   'paragraph line 3';
$separation[203]['expected'].= '</p>';
$separation[203]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

# paragraph near paragraph
$separation[210]['data'] = 'paragraph 1 line 1'.NL;
$separation[210]['data'].= 'paragraph 1 line 2'.NL;
$separation[210]['data'].= 'paragraph 1 line 3'.NL;
$separation[210]['data'].= NL;
$separation[210]['data'].= 'paragraph 2 line 1'.NL;
$separation[210]['data'].= 'paragraph 2 line 2'.NL;
$separation[210]['data'].= 'paragraph 2 line 3';
$separation[210]['expected'] = '<p>';
$separation[210]['expected'].=   'paragraph 1 line 1'.NL;
$separation[210]['expected'].=   'paragraph 1 line 2'.NL;
$separation[210]['expected'].=   'paragraph 1 line 3';
$separation[210]['expected'].= '</p>';
$separation[210]['expected'].= '<p>';
$separation[210]['expected'].=   'paragraph 2 line 1'.NL;
$separation[210]['expected'].=   'paragraph 2 line 2'.NL;
$separation[210]['expected'].=   'paragraph 2 line 3';
$separation[210]['expected'].= '</p>';

$separation[211]['data'] = 'paragraph 1 line 1'.NL;
$separation[211]['data'].= 'paragraph 1 line 2'.NL;
$separation[211]['data'].= 'paragraph 1 line 3'.NL;
$separation[211]['data'].= NL.NL.NL;
$separation[211]['data'].= 'paragraph 2 line 1'.NL;
$separation[211]['data'].= 'paragraph 2 line 2'.NL;
$separation[211]['data'].= 'paragraph 2 line 3';
$separation[211]['expected'] = '<p>';
$separation[211]['expected'].=   'paragraph 1 line 1'.NL;
$separation[211]['expected'].=   'paragraph 1 line 2'.NL;
$separation[211]['expected'].=   'paragraph 1 line 3';
$separation[211]['expected'].= '</p>';
$separation[211]['expected'].= '<p>';
$separation[211]['expected'].=   'paragraph 2 line 1'.NL;
$separation[211]['expected'].=   'paragraph 2 line 2'.NL;
$separation[211]['expected'].=   'paragraph 2 line 3';
$separation[211]['expected'].= '</p>';

# paragraph near list
$separation[220]['data'] = 'paragraph line 1'.NL;
$separation[220]['data'].= 'paragraph line 2'.NL;
$separation[220]['data'].= 'paragraph line 3'.NL;
$separation[220]['data'].= '* list item 1'.NL;
$separation[220]['data'].= '* list item 2'.NL;
$separation[220]['data'].= '* list item 3';
$separation[220]['expected'] = '<p>';
$separation[220]['expected'].=   'paragraph line 1'.NL;
$separation[220]['expected'].=   'paragraph line 2'.NL;
$separation[220]['expected'].=   'paragraph line 3';
$separation[220]['expected'].= '</p>';
$separation[220]['expected'].= '<ul>';
$separation[220]['expected'].=   '<li>list item 1</li>';
$separation[220]['expected'].=   '<li>list item 2</li>';
$separation[220]['expected'].=   '<li>list item 3</li>';
$separation[220]['expected'].= '</ul>';

$separation[221]['data'] = 'paragraph line 1'.NL;
$separation[221]['data'].= 'paragraph line 2'.NL;
$separation[221]['data'].= 'paragraph line 3'.NL;
$separation[221]['data'].= NL;
$separation[221]['data'].= '* list item 1'.NL;
$separation[221]['data'].= '* list item 2'.NL;
$separation[221]['data'].= '* list item 3';
$separation[221]['expected'] = '<p>';
$separation[221]['expected'].=   'paragraph line 1'.NL;
$separation[221]['expected'].=   'paragraph line 2'.NL;
$separation[221]['expected'].=   'paragraph line 3';
$separation[221]['expected'].= '</p>';
$separation[221]['expected'].= '<ul>';
$separation[221]['expected'].=   '<li>list item 1</li>';
$separation[221]['expected'].=   '<li>list item 2</li>';
$separation[221]['expected'].=   '<li>list item 3</li>';
$separation[221]['expected'].= '</ul>';

# paragraph near code
$separation[230]['data'] = 'paragraph line 1'.NL;
$separation[230]['data'].= 'paragraph line 2'.NL;
$separation[230]['data'].= 'paragraph line 3'.NL;
$separation[230]['data'].= '    code line 1'.NL;
$separation[230]['data'].= '         code line 2'.NL;
$separation[230]['data'].= '    code line 3';
$separation[230]['expected'] = '<p>';
$separation[230]['expected'].=   'paragraph line 1'.NL;
$separation[230]['expected'].=   'paragraph line 2'.NL;
$separation[230]['expected'].=   'paragraph line 3'.NL;
$separation[230]['expected'].=   '    code line 1'.NL;
$separation[230]['expected'].=   '         code line 2'.NL;
$separation[230]['expected'].=   '    code line 3';
$separation[230]['expected'].= '</p>';

$separation[231]['data'] = 'paragraph line 1'.NL;
$separation[231]['data'].= 'paragraph line 2'.NL;
$separation[231]['data'].= 'paragraph line 3'.NL;
$separation[231]['data'].= NL;
$separation[231]['data'].= '    code line 1'.NL;
$separation[231]['data'].= '         code line 2'.NL;
$separation[231]['data'].= '    code line 3';
$separation[231]['expected'] = '<p>';
$separation[231]['expected'].=   'paragraph line 1'.NL;
$separation[231]['expected'].=   'paragraph line 2'.NL;
$separation[231]['expected'].=   'paragraph line 3';
$separation[231]['expected'].= '</p>';
$separation[231]['expected'].= '<pre>';
$separation[231]['expected'].=   '<code>';
$separation[231]['expected'].=     'code line 1'.NL;
$separation[231]['expected'].=       '     code line 2'.NL;
$separation[231]['expected'].=     'code line 3';
$separation[231]['expected'].=   '</code>';
$separation[231]['expected'].= '</pre>';

# paragraph near blockquote
$separation[240]['data'] = 'paragraph line 1'.NL;
$separation[240]['data'].= 'paragraph line 2'.NL;
$separation[240]['data'].= 'paragraph line 3'.NL;
$separation[240]['data'].= '> blockquote line 1'.NL;
$separation[240]['data'].= '> blockquote line 2'.NL;
$separation[240]['data'].= '> blockquote line 3';
$separation[240]['expected'] = '<p>';
$separation[240]['expected'].=   'paragraph line 1'.NL;
$separation[240]['expected'].=   'paragraph line 2'.NL;
$separation[240]['expected'].=   'paragraph line 3';
$separation[240]['expected'].= '</p>';
$separation[240]['expected'].= '<blockquote>';
$separation[240]['expected'].=   '<p>';
$separation[240]['expected'].=     'blockquote line 1'.NL;
$separation[240]['expected'].=     'blockquote line 2'.NL;
$separation[240]['expected'].=     'blockquote line 3';
$separation[240]['expected'].=   '</p>';
$separation[240]['expected'].= '</blockquote>';

$separation[241]['data'] = 'paragraph line 1'.NL;
$separation[241]['data'].= 'paragraph line 2'.NL;
$separation[241]['data'].= 'paragraph line 3'.NL;
$separation[241]['data'].= NL;
$separation[241]['data'].= '> blockquote line 1'.NL;
$separation[241]['data'].= '> blockquote line 2'.NL;
$separation[241]['data'].= '> blockquote line 3';
$separation[241]['expected'] = '<p>';
$separation[241]['expected'].=   'paragraph line 1'.NL;
$separation[241]['expected'].=   'paragraph line 2'.NL;
$separation[241]['expected'].=   'paragraph line 3';
$separation[241]['expected'].= '</p>';
$separation[241]['expected'].= '<blockquote>';
$separation[241]['expected'].=   '<p>';
$separation[241]['expected'].=     'blockquote line 1'.NL;
$separation[241]['expected'].=     'blockquote line 2'.NL;
$separation[241]['expected'].=     'blockquote line 3';
$separation[241]['expected'].=   '</p>';
$separation[241]['expected'].= '</blockquote>';

# paragraph near hr
$separation[250]['data'] = 'paragraph line 1'.NL;
$separation[250]['data'].= 'paragraph line 2'.NL;
$separation[250]['data'].= 'paragraph line 3'.NL;
$separation[250]['data'].= '*  *  *';
$separation[250]['expected'] = '<p>';
$separation[250]['expected'].=   'paragraph line 1'.NL;
$separation[250]['expected'].=   'paragraph line 2'.NL;
$separation[250]['expected'].=   'paragraph line 3';
$separation[250]['expected'].= '</p>';
$separation[250]['expected'].= '<hr>';

$separation[251]['data'] = 'paragraph line 1'.NL;
$separation[251]['data'].= 'paragraph line 2'.NL;
$separation[251]['data'].= 'paragraph line 3'.NL;
$separation[251]['data'].= '-  -  -';
$separation[251]['expected'] = '<p>';
$separation[251]['expected'].=   'paragraph line 1'.NL;
$separation[251]['expected'].=   'paragraph line 2'.NL;
$separation[251]['expected'].=   'paragraph line 3';
$separation[251]['expected'].= '</p>';
$separation[251]['expected'].= '<hr>';

$separation[252]['data'] = 'paragraph line 1'.NL;
$separation[252]['data'].= 'paragraph line 2'.NL;
$separation[252]['data'].= 'paragraph line 3'.NL;
$separation[252]['data'].= '-------';
$separation[252]['expected'] = '<h2>';
$separation[252]['expected'].=   'paragraph line 1'.NL;
$separation[252]['expected'].=   'paragraph line 2'.NL;
$separation[252]['expected'].=   'paragraph line 3';
$separation[252]['expected'].= '</h2>';

$separation[253]['data'] = 'paragraph line 1'.NL;
$separation[253]['data'].= 'paragraph line 2'.NL;
$separation[253]['data'].= 'paragraph line 3'.NL;
$separation[253]['data'].= NL;
$separation[253]['data'].= '*  *  *';
$separation[253]['expected'] = '<p>';
$separation[253]['expected'].=   'paragraph line 1'.NL;
$separation[253]['expected'].=   'paragraph line 2'.NL;
$separation[253]['expected'].=   'paragraph line 3';
$separation[253]['expected'].= '</p>';
$separation[253]['expected'].= '<hr>';

$separation[254]['data'] = 'paragraph line 1'.NL;
$separation[254]['data'].= 'paragraph line 2'.NL;
$separation[254]['data'].= 'paragraph line 3'.NL;
$separation[254]['data'].= NL;
$separation[254]['data'].= '-  -  -';
$separation[254]['expected'] = '<p>';
$separation[254]['expected'].=   'paragraph line 1'.NL;
$separation[254]['expected'].=   'paragraph line 2'.NL;
$separation[254]['expected'].=   'paragraph line 3';
$separation[254]['expected'].= '</p>';
$separation[254]['expected'].= '<hr>';

$separation[255]['data'] = 'paragraph line 1'.NL;
$separation[255]['data'].= 'paragraph line 2'.NL;
$separation[255]['data'].= 'paragraph line 3'.NL;
$separation[255]['data'].= NL;
$separation[255]['data'].= '-------';
$separation[255]['expected'] = '<p>';
$separation[255]['expected'].=   'paragraph line 1'.NL;
$separation[255]['expected'].=   'paragraph line 2'.NL;
$separation[255]['expected'].=   'paragraph line 3';
$separation[255]['expected'].= '</p>';
$separation[255]['expected'].= '<hr>';

# paragraph near markup
$separation[260]['data'] = 'paragraph line 1'.NL;
$separation[260]['data'].= 'paragraph line 2'.NL;
$separation[260]['data'].= 'paragraph line 3'.NL;
$separation[260]['data'].= '<div>'.NL;
$separation[260]['data'].= '  markup line 1'.NL;
$separation[260]['data'].= '  markup line 2'.NL;
$separation[260]['data'].= '  markup line 3'.NL;
$separation[260]['data'].= '</div>';
$separation[260]['expected'] = '<p>';
$separation[260]['expected'].=   'paragraph line 1'.NL;
$separation[260]['expected'].=   'paragraph line 2'.NL;
$separation[260]['expected'].=   'paragraph line 3';
$separation[260]['expected'].= '</p>';
$separation[260]['expected'].= '<div>'.NL;
$separation[260]['expected'].= '  markup line 1'.NL;
$separation[260]['expected'].= '  markup line 2'.NL;
$separation[260]['expected'].= '  markup line 3'.NL;
$separation[260]['expected'].= '</div>';

$separation[261]['data'] = 'paragraph line 1'.NL;
$separation[261]['data'].= 'paragraph line 2'.NL;
$separation[261]['data'].= 'paragraph line 3'.NL;
$separation[261]['data'].= NL;
$separation[261]['data'].= '<div>'.NL;
$separation[261]['data'].= '  markup line 1'.NL;
$separation[261]['data'].= '  markup line 2'.NL;
$separation[261]['data'].= '  markup line 3'.NL;
$separation[261]['data'].= '</div>';
$separation[261]['expected'] = '<p>';
$separation[261]['expected'].=   'paragraph line 1'.NL;
$separation[261]['expected'].=   'paragraph line 2'.NL;
$separation[261]['expected'].=   'paragraph line 3';
$separation[261]['expected'].= '</p>';
$separation[261]['expected'].= '<div>'.NL;
$separation[261]['expected'].= '  markup line 1'.NL;
$separation[261]['expected'].= '  markup line 2'.NL;
$separation[261]['expected'].= '  markup line 3'.NL;
$separation[261]['expected'].= '</div>';



# list near header
$separation[300]['data'] = '* list item 1'.NL;
$separation[300]['data'].= '* list item 2'.NL;
$separation[300]['data'].= '* list item 3'.NL;
$separation[300]['data'].= '# Title H1 (atx-style)';
$separation[300]['expected'] = '<ul>';
$separation[300]['expected'].=   '<li>list item 1</li>';
$separation[300]['expected'].=   '<li>list item 2</li>';
$separation[300]['expected'].=   '<li>list item 3</li>';
$separation[300]['expected'].= '</ul>';
$separation[300]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[301]['data'] = '* list item 1'.NL;
$separation[301]['data'].= '* list item 2'.NL;
$separation[301]['data'].= '* list item 3'.NL;
$separation[301]['data'].= NL;
$separation[301]['data'].= '# Title H1 (atx-style)';
$separation[301]['expected'] = '<ul>';
$separation[301]['expected'].=   '<li>list item 1</li>';
$separation[301]['expected'].=   '<li>list item 2</li>';
$separation[301]['expected'].=   '<li>list item 3</li>';
$separation[301]['expected'].= '</ul>';
$separation[301]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[302]['data'] = '* list item 1'.NL;
$separation[302]['data'].= '* list item 2'.NL;
$separation[302]['data'].= '* list item 3'.NL;
$separation[302]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[302]['data'].= '======================';
$separation[302]['expected'] = '<ul>';
$separation[302]['expected'].=   '<li>list item 1</li>';
$separation[302]['expected'].=   '<li>list item 2</li>';
$separation[302]['expected'].=   '<li>list item 3';
$separation[302]['expected'].=     NL;
$separation[302]['expected'].=     'Title H1 (Setex-style)';
$separation[302]['expected'].=     NL;
$separation[302]['expected'].=     '======================';
$separation[302]['expected'].=   '</li>';
$separation[302]['expected'].= '</ul>';

$separation[303]['data'] = '* list item 1'.NL;
$separation[303]['data'].= '* list item 2'.NL;
$separation[303]['data'].= '* list item 3'.NL;
$separation[303]['data'].= NL;
$separation[303]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[303]['data'].= '======================';
$separation[303]['expected'] = '<ul>';
$separation[303]['expected'].=   '<li>list item 1</li>';
$separation[303]['expected'].=   '<li>list item 2</li>';
$separation[303]['expected'].=   '<li>list item 3</li>';
$separation[303]['expected'].= '</ul>';
$separation[303]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

# list near paragraph
$separation[310]['data'] = '* list item 1'.NL;
$separation[310]['data'].= '* list item 2'.NL;
$separation[310]['data'].= '* list item 3'.NL;
$separation[310]['data'].= 'paragraph line 1'.NL;
$separation[310]['data'].= 'paragraph line 2'.NL;
$separation[310]['data'].= 'paragraph line 3'.NL;
$separation[310]['expected'] = '<ul>';
$separation[310]['expected'].=   '<li>list item 1</li>';
$separation[310]['expected'].=   '<li>list item 2</li>';
$separation[310]['expected'].=   '<li>list item 3'.NL;
$separation[310]['expected'].=     'paragraph line 1'.NL;
$separation[310]['expected'].=     'paragraph line 2'.NL;
$separation[310]['expected'].=     'paragraph line 3</li>';
$separation[310]['expected'].= '</ul>';

$separation[311]['data'] = '* list item 1'.NL;
$separation[311]['data'].= '* list item 2'.NL;
$separation[311]['data'].= '* list item 3'.NL;
$separation[311]['data'].= NL;
$separation[311]['data'].= 'paragraph line 1'.NL;
$separation[311]['data'].= 'paragraph line 2'.NL;
$separation[311]['data'].= 'paragraph line 3'.NL;
$separation[311]['expected'] = '<ul>';
$separation[311]['expected'].=   '<li>list item 1</li>';
$separation[311]['expected'].=   '<li>list item 2</li>';
$separation[311]['expected'].=   '<li>list item 3</li>';
$separation[311]['expected'].= '</ul>';
$separation[311]['expected'].= '<p>';
$separation[311]['expected'].=   'paragraph line 1'.NL;
$separation[311]['expected'].=   'paragraph line 2'.NL;
$separation[311]['expected'].=   'paragraph line 3';
$separation[311]['expected'].= '</p>';

# list near list
$separation[320]['data'] = '* list item 1.1'.NL;
$separation[320]['data'].= '* list item 1.2'.NL;
$separation[320]['data'].= '* list item 1.3'.NL;
$separation[320]['data'].= '+ list item 2.1'.NL;
$separation[320]['data'].= '+ list item 2.2'.NL;
$separation[320]['data'].= '+ list item 2.3';
$separation[320]['expected'] = '<ul>';
$separation[320]['expected'].=   '<li>list item 1.1</li>';
$separation[320]['expected'].=   '<li>list item 1.2</li>';
$separation[320]['expected'].=   '<li>list item 1.3</li>';
$separation[320]['expected'].=   '<li>list item 2.1</li>';
$separation[320]['expected'].=   '<li>list item 2.2</li>';
$separation[320]['expected'].=   '<li>list item 2.3</li>';
$separation[320]['expected'].= '</ul>';

$separation[321]['data'] = '* list item 1.1'.NL;
$separation[321]['data'].= '* list item 1.2'.NL;
$separation[321]['data'].= '* list item 1.3'.NL;
$separation[321]['data'].= NL;
$separation[321]['data'].= '+ list item 2.1'.NL;
$separation[321]['data'].= '+ list item 2.2'.NL;
$separation[321]['data'].= '+ list item 2.3';
$separation[321]['expected'] = '<ul>';
$separation[321]['expected'].=   '<li>list item 1.1</li>';
$separation[321]['expected'].=   '<li>list item 1.2</li>';
$separation[321]['expected'].=   '<li>list item 1.3</li>';
$separation[321]['expected'].=   '<li>list item 2.1</li>';
$separation[321]['expected'].=   '<li>list item 2.2</li>';
$separation[321]['expected'].=   '<li>list item 2.3</li>';
$separation[321]['expected'].= '</ul>';

# list near code
$separation[330]['data'] = '* list item 1'.NL;
$separation[330]['data'].= '* list item 2'.NL;
$separation[330]['data'].= '* list item 3'.NL;
$separation[330]['data'].= '     code line 1'.NL;
$separation[330]['data'].= '           code line 2'.NL;
$separation[330]['data'].= '     code line 3';
$separation[330]['expected'] = '<ul>';
$separation[330]['expected'].=   '<li>list item 1</li>';
$separation[330]['expected'].=   '<li>list item 2</li>';
$separation[330]['expected'].=   '<li>list item 3'.NL;
$separation[330]['expected'].=     'code line 1'.NL;
$separation[330]['expected'].=     'code line 2'.NL;
$separation[330]['expected'].=     'code line 3</li>';
$separation[330]['expected'].= '</ul>';

$separation[331]['data'] = '* list item 1'.NL;
$separation[331]['data'].= '* list item 2'.NL;
$separation[331]['data'].= '* list item 3'.NL;
$separation[331]['data'].= NL;
$separation[331]['data'].= '     code line 1'.NL;
$separation[331]['data'].= '           code line 2'.NL;
$separation[331]['data'].= '     code line 3';
$separation[331]['expected'] = '<ul>';
$separation[331]['expected'].=   '<li>list item 1</li>';
$separation[331]['expected'].=   '<li>list item 2</li>';
$separation[331]['expected'].=   '<li>list item 3';
$separation[331]['expected'].=     '<p>';
$separation[331]['expected'].=       'code line 1'.NL;
$separation[331]['expected'].=       'code line 2'.NL;
$separation[331]['expected'].=       'code line 3';
$separation[331]['expected'].=     '</p>';
$separation[331]['expected'].=   '</li>';
$separation[331]['expected'].= '</ul>';

# list near blockquote
$separation[340]['data'] = '* list item 1'.NL;
$separation[340]['data'].= '* list item 2'.NL;
$separation[340]['data'].= '* list item 3'.NL;
$separation[340]['data'].= '> blockquote line 1'.NL;
$separation[340]['data'].= '> blockquote line 2'.NL;
$separation[340]['data'].= '> blockquote line 3';
$separation[340]['expected'] = '<ul>';
$separation[340]['expected'].=   '<li>list item 1</li>';
$separation[340]['expected'].=   '<li>list item 2</li>';
$separation[340]['expected'].=   '<li>list item 3</li>';
$separation[340]['expected'].= '</ul>';
$separation[340]['expected'].= '<blockquote>';
$separation[340]['expected'].=   '<p>';
$separation[340]['expected'].=     'blockquote line 1'.NL;
$separation[340]['expected'].=     'blockquote line 2'.NL;
$separation[340]['expected'].=     'blockquote line 3';
$separation[340]['expected'].=   '</p>';
$separation[340]['expected'].= '</blockquote>';

$separation[341]['data'] = '* list item 1'.NL;
$separation[341]['data'].= '* list item 2'.NL;
$separation[341]['data'].= '* list item 3'.NL;
$separation[341]['data'].= NL;
$separation[341]['data'].= '> blockquote line 1'.NL;
$separation[341]['data'].= '> blockquote line 2'.NL;
$separation[341]['data'].= '> blockquote line 3';
$separation[341]['expected'] = '<ul>';
$separation[341]['expected'].=   '<li>list item 1</li>';
$separation[341]['expected'].=   '<li>list item 2</li>';
$separation[341]['expected'].=   '<li>list item 3</li>';
$separation[341]['expected'].= '</ul>';
$separation[341]['expected'].= '<blockquote>';
$separation[341]['expected'].=   '<p>';
$separation[341]['expected'].=     'blockquote line 1'.NL;
$separation[341]['expected'].=     'blockquote line 2'.NL;
$separation[341]['expected'].=     'blockquote line 3';
$separation[341]['expected'].=   '</p>';
$separation[341]['expected'].= '</blockquote>';

# list near hr
$separation[350]['data'] = '* list item 1'.NL;
$separation[350]['data'].= '* list item 2'.NL;
$separation[350]['data'].= '* list item 3'.NL;
$separation[350]['data'].= '*  *  *';
$separation[350]['expected'] = '<ul>';
$separation[350]['expected'].=   '<li>list item 1</li>';
$separation[350]['expected'].=   '<li>list item 2</li>';
$separation[350]['expected'].=   '<li>list item 3</li>';
$separation[350]['expected'].= '</ul>';
$separation[350]['expected'].= '<hr>';

$separation[351]['data'] = '* list item 1'.NL;
$separation[351]['data'].= '* list item 2'.NL;
$separation[351]['data'].= '* list item 3'.NL;
$separation[351]['data'].= '-  -  -';
$separation[351]['expected'] = '<ul>';
$separation[351]['expected'].=   '<li>list item 1</li>';
$separation[351]['expected'].=   '<li>list item 2</li>';
$separation[351]['expected'].=   '<li>list item 3</li>';
$separation[351]['expected'].= '</ul>';
$separation[351]['expected'].= '<hr>';

$separation[352]['data'] = '* list item 1'.NL;
$separation[352]['data'].= '* list item 2'.NL;
$separation[352]['data'].= '* list item 3'.NL;
$separation[352]['data'].= '-------';
$separation[352]['expected'] = '<ul>';
$separation[352]['expected'].=   '<li>list item 1</li>';
$separation[352]['expected'].=   '<li>list item 2</li>';
$separation[352]['expected'].=   '<li>list item 3</li>';
$separation[352]['expected'].= '</ul>';
$separation[352]['expected'].= '<hr>';

$separation[353]['data'] = '* list item 1'.NL;
$separation[353]['data'].= '* list item 2'.NL;
$separation[353]['data'].= '* list item 3'.NL;
$separation[353]['data'].= NL;
$separation[353]['data'].= '*  *  *';
$separation[353]['expected'] = '<ul>';
$separation[353]['expected'].=   '<li>list item 1</li>';
$separation[353]['expected'].=   '<li>list item 2</li>';
$separation[353]['expected'].=   '<li>list item 3</li>';
$separation[353]['expected'].= '</ul>';
$separation[353]['expected'].= '<hr>';

$separation[354]['data'] = '* list item 1'.NL;
$separation[354]['data'].= '* list item 2'.NL;
$separation[354]['data'].= '* list item 3'.NL;
$separation[354]['data'].= NL;
$separation[354]['data'].= '-  -  -';
$separation[354]['expected'] = '<ul>';
$separation[354]['expected'].=   '<li>list item 1</li>';
$separation[354]['expected'].=   '<li>list item 2</li>';
$separation[354]['expected'].=   '<li>list item 3</li>';
$separation[354]['expected'].= '</ul>';
$separation[354]['expected'].= '<hr>';

$separation[355]['data'] = '* list item 1'.NL;
$separation[355]['data'].= '* list item 2'.NL;
$separation[355]['data'].= '* list item 3'.NL;
$separation[355]['data'].= NL;
$separation[355]['data'].= '-------';
$separation[355]['expected'] = '<ul>';
$separation[355]['expected'].=   '<li>list item 1</li>';
$separation[355]['expected'].=   '<li>list item 2</li>';
$separation[355]['expected'].=   '<li>list item 3</li>';
$separation[355]['expected'].= '</ul>';
$separation[355]['expected'].= '<hr>';

# list near markup
$separation[360]['data'] = '* list item 1'.NL;
$separation[360]['data'].= '* list item 2'.NL;
$separation[360]['data'].= '* list item 3'.NL;
$separation[360]['data'].= '<div>'.NL;
$separation[360]['data'].= '  markup line 1'.NL;
$separation[360]['data'].= '  markup line 2'.NL;
$separation[360]['data'].= '  markup line 3'.NL;
$separation[360]['data'].= '</div>';
$separation[360]['expected'] = '<ul>';
$separation[360]['expected'].=   '<li>list item 1</li>';
$separation[360]['expected'].=   '<li>list item 2</li>';
$separation[360]['expected'].=   '<li>list item 3</li>';
$separation[360]['expected'].= '</ul>';
$separation[360]['expected'].= '<div>'.NL;
$separation[360]['expected'].= '  markup line 1'.NL;
$separation[360]['expected'].= '  markup line 2'.NL;
$separation[360]['expected'].= '  markup line 3'.NL;
$separation[360]['expected'].= '</div>';

$separation[361]['data'] = '* list item 1'.NL;
$separation[361]['data'].= '* list item 2'.NL;
$separation[361]['data'].= '* list item 3'.NL;
$separation[361]['data'].= NL;
$separation[361]['data'].= '<div>'.NL;
$separation[361]['data'].= '  markup line 1'.NL;
$separation[361]['data'].= '  markup line 2'.NL;
$separation[361]['data'].= '  markup line 3'.NL;
$separation[361]['data'].= '</div>';
$separation[361]['expected'] = '<ul>';
$separation[361]['expected'].=   '<li>list item 1</li>';
$separation[361]['expected'].=   '<li>list item 2</li>';
$separation[361]['expected'].=   '<li>list item 3</li>';
$separation[361]['expected'].= '</ul>';
$separation[361]['expected'].= '<div>'.NL;
$separation[361]['expected'].= '  markup line 1'.NL;
$separation[361]['expected'].= '  markup line 2'.NL;
$separation[361]['expected'].= '  markup line 3'.NL;
$separation[361]['expected'].= '</div>';



# code near header
$separation[400]['data'] = '     code line 1'.NL;
$separation[400]['data'].= '          code line 2'.NL;
$separation[400]['data'].= '     code line 3'.NL;
$separation[400]['data'].= '# Title H1 (atx-style)';
$separation[400]['expected'] = '<pre>';
$separation[400]['expected'].=   '<code>';
$separation[400]['expected'].=     ' code line 1'.NL;
$separation[400]['expected'].=       '      code line 2'.NL;
$separation[400]['expected'].=     ' code line 3';
$separation[400]['expected'].=   '</code>';
$separation[400]['expected'].= '</pre>';
$separation[400]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[401]['data'] = '     code line 1'.NL;
$separation[401]['data'].= '          code line 2'.NL;
$separation[401]['data'].= '     code line 3'.NL;
$separation[401]['data'].= NL;
$separation[401]['data'].= '# Title H1 (atx-style)';
$separation[401]['expected'] = '<pre>';
$separation[401]['expected'].=   '<code>';
$separation[401]['expected'].=     ' code line 1'.NL;
$separation[401]['expected'].=       '      code line 2'.NL;
$separation[401]['expected'].=     ' code line 3';
$separation[401]['expected'].=   '</code>';
$separation[401]['expected'].= '</pre>';
$separation[401]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[402]['data'] = '     code line 1'.NL;
$separation[402]['data'].= '          code line 2'.NL;
$separation[402]['data'].= '     code line 3'.NL;
$separation[402]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[402]['data'].= '======================';
$separation[402]['expected'] = '<pre>';
$separation[402]['expected'].=   '<code>';
$separation[402]['expected'].=     ' code line 1'.NL;
$separation[402]['expected'].=       '      code line 2'.NL;
$separation[402]['expected'].=     ' code line 3';
$separation[402]['expected'].=   '</code>';
$separation[402]['expected'].= '</pre>';
$separation[402]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

$separation[403]['data'] = '     code line 1'.NL;
$separation[403]['data'].= '          code line 2'.NL;
$separation[403]['data'].= '     code line 3'.NL;
$separation[403]['data'].= NL;
$separation[403]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[403]['data'].= '======================';
$separation[403]['expected'] = '<pre>';
$separation[403]['expected'].=   '<code>';
$separation[403]['expected'].=     ' code line 1'.NL;
$separation[403]['expected'].=       '      code line 2'.NL;
$separation[403]['expected'].=     ' code line 3';
$separation[403]['expected'].=   '</code>';
$separation[403]['expected'].= '</pre>';
$separation[403]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

# code near paragraph
$separation[410]['data'] = '     code line 1'.NL;
$separation[410]['data'].= '          code line 2'.NL;
$separation[410]['data'].= '     code line 3'.NL;
$separation[410]['data'].= 'paragraph line 1'.NL;
$separation[410]['data'].= 'paragraph line 2'.NL;
$separation[410]['data'].= 'paragraph line 3';
$separation[410]['expected'] = '<pre>';
$separation[410]['expected'].=   '<code>';
$separation[410]['expected'].=     ' code line 1'.NL;
$separation[410]['expected'].=       '      code line 2'.NL;
$separation[410]['expected'].=     ' code line 3';
$separation[410]['expected'].=   '</code>';
$separation[410]['expected'].= '</pre>';
$separation[410]['expected'].= '<p>';
$separation[410]['expected'].=   'paragraph line 1'.NL;
$separation[410]['expected'].=   'paragraph line 2'.NL;
$separation[410]['expected'].=   'paragraph line 3';
$separation[410]['expected'].= '</p>';

$separation[411]['data'] = '     code line 1'.NL;
$separation[411]['data'].= '          code line 2'.NL;
$separation[411]['data'].= '     code line 3'.NL;
$separation[411]['data'].= NL;
$separation[411]['data'].= 'paragraph line 1'.NL;
$separation[411]['data'].= 'paragraph line 2'.NL;
$separation[411]['data'].= 'paragraph line 3';
$separation[411]['expected'] = '<pre>';
$separation[411]['expected'].=   '<code>';
$separation[411]['expected'].=     ' code line 1'.NL;
$separation[411]['expected'].=       '      code line 2'.NL;
$separation[411]['expected'].=     ' code line 3';
$separation[411]['expected'].=   '</code>';
$separation[411]['expected'].= '</pre>';
$separation[411]['expected'].= '<p>';
$separation[411]['expected'].=   'paragraph line 1'.NL;
$separation[411]['expected'].=   'paragraph line 2'.NL;
$separation[411]['expected'].=   'paragraph line 3';
$separation[411]['expected'].= '</p>';

# code near list
$separation[420]['data'] = '     code line 1'.NL;
$separation[420]['data'].= '          code line 2'.NL;
$separation[420]['data'].= '     code line 3'.NL;
$separation[420]['data'].= '* list item 1'.NL;
$separation[420]['data'].= '* list item 2'.NL;
$separation[420]['data'].= '* list item 3';
$separation[420]['expected'] = '<pre>';
$separation[420]['expected'].=   '<code>';
$separation[420]['expected'].=     ' code line 1'.NL;
$separation[420]['expected'].=       '      code line 2'.NL;
$separation[420]['expected'].=     ' code line 3';
$separation[420]['expected'].=   '</code>';
$separation[420]['expected'].= '</pre>';
$separation[420]['expected'].= '<ul>';
$separation[420]['expected'].=   '<li>list item 1</li>';
$separation[420]['expected'].=   '<li>list item 2</li>';
$separation[420]['expected'].=   '<li>list item 3</li>';
$separation[420]['expected'].= '</ul>';

$separation[421]['data'] = '     code line 1'.NL;
$separation[421]['data'].= '          code line 2'.NL;
$separation[421]['data'].= '     code line 3'.NL;
$separation[421]['data'].= NL;
$separation[421]['data'].= '* list item 1'.NL;
$separation[421]['data'].= '* list item 2'.NL;
$separation[421]['data'].= '* list item 3';
$separation[421]['expected'] = '<pre>';
$separation[421]['expected'].=   '<code>';
$separation[421]['expected'].=     ' code line 1'.NL;
$separation[421]['expected'].=       '      code line 2'.NL;
$separation[421]['expected'].=     ' code line 3';
$separation[421]['expected'].=   '</code>';
$separation[421]['expected'].= '</pre>';
$separation[421]['expected'].= '<ul>';
$separation[421]['expected'].=   '<li>list item 1</li>';
$separation[421]['expected'].=   '<li>list item 2</li>';
$separation[421]['expected'].=   '<li>list item 3</li>';
$separation[421]['expected'].= '</ul>';

# code near code
$separation[430]['data'] = '     code 1 line 1'.NL;
$separation[430]['data'].= '     code 1 line 2'.NL;
$separation[430]['data'].= '     code 1 line 3'.NL;
$separation[430]['data'].= NL.NL.NL;
$separation[430]['data'].= '     code 2 line 1'.NL;
$separation[430]['data'].= '     code 2 line 2'.NL;
$separation[430]['data'].= '     code 2 line 3';
$separation[430]['expected'] = '<pre>';
$separation[430]['expected'].=   '<code>';
$separation[430]['expected'].=     ' code 1 line 1'.NL;
$separation[430]['expected'].=     ' code 1 line 2'.NL;
$separation[430]['expected'].=     ' code 1 line 3'.NL;
$separation[430]['expected'].=     NL.NL.NL;
$separation[430]['expected'].=     ' code 2 line 1'.NL;
$separation[430]['expected'].=     ' code 2 line 2'.NL;
$separation[430]['expected'].=     ' code 2 line 3';
$separation[430]['expected'].=   '</code>';
$separation[430]['expected'].= '</pre>';

# code near blockquote
$separation[440]['data'] = '     code line 1'.NL;
$separation[440]['data'].= '          code line 2'.NL;
$separation[440]['data'].= '     code line 3'.NL;
$separation[440]['data'].= '> blockquote line 1'.NL;
$separation[440]['data'].= '> blockquote line 2'.NL;
$separation[440]['data'].= '> blockquote line 3';
$separation[440]['expected'] = '<pre>';
$separation[440]['expected'].=   '<code>';
$separation[440]['expected'].=     ' code line 1'.NL;
$separation[440]['expected'].=       '      code line 2'.NL;
$separation[440]['expected'].=     ' code line 3';
$separation[440]['expected'].=   '</code>';
$separation[440]['expected'].= '</pre>';
$separation[440]['expected'].= '<blockquote>';
$separation[440]['expected'].=   '<p>';
$separation[440]['expected'].=     'blockquote line 1'.NL;
$separation[440]['expected'].=     'blockquote line 2'.NL;
$separation[440]['expected'].=     'blockquote line 3';
$separation[440]['expected'].=   '</p>';
$separation[440]['expected'].= '</blockquote>';

$separation[441]['data'] = '     code line 1'.NL;
$separation[441]['data'].= '          code line 2'.NL;
$separation[441]['data'].= '     code line 3'.NL;
$separation[441]['data'].= NL;
$separation[441]['data'].= '> blockquote line 1'.NL;
$separation[441]['data'].= '> blockquote line 2'.NL;
$separation[441]['data'].= '> blockquote line 3';
$separation[441]['expected'] = '<pre>';
$separation[441]['expected'].=   '<code>';
$separation[441]['expected'].=     ' code line 1'.NL;
$separation[441]['expected'].=       '      code line 2'.NL;
$separation[441]['expected'].=     ' code line 3';
$separation[441]['expected'].=   '</code>';
$separation[441]['expected'].= '</pre>';
$separation[441]['expected'].= '<blockquote>';
$separation[441]['expected'].=   '<p>';
$separation[441]['expected'].=     'blockquote line 1'.NL;
$separation[441]['expected'].=     'blockquote line 2'.NL;
$separation[441]['expected'].=     'blockquote line 3';
$separation[441]['expected'].=   '</p>';
$separation[441]['expected'].= '</blockquote>';

# code near hr
$separation[450]['data'] = '     code line 1'.NL;
$separation[450]['data'].= '          code line 2'.NL;
$separation[450]['data'].= '     code line 3'.NL;
$separation[450]['data'].= '*  *  *';
$separation[450]['expected'] = '<pre>';
$separation[450]['expected'].=   '<code>';
$separation[450]['expected'].=     ' code line 1'.NL;
$separation[450]['expected'].=       '      code line 2'.NL;
$separation[450]['expected'].=     ' code line 3';
$separation[450]['expected'].=   '</code>';
$separation[450]['expected'].= '</pre>';
$separation[450]['expected'].= '<hr>';

$separation[451]['data'] = '     code line 1'.NL;
$separation[451]['data'].= '          code line 2'.NL;
$separation[451]['data'].= '     code line 3'.NL;
$separation[451]['data'].= '-  -  -';
$separation[451]['expected'] = '<pre>';
$separation[451]['expected'].=   '<code>';
$separation[451]['expected'].=     ' code line 1'.NL;
$separation[451]['expected'].=       '      code line 2'.NL;
$separation[451]['expected'].=     ' code line 3';
$separation[451]['expected'].=   '</code>';
$separation[451]['expected'].= '</pre>';
$separation[451]['expected'].= '<hr>';

$separation[452]['data'] = '     code line 1'.NL;
$separation[452]['data'].= '          code line 2'.NL;
$separation[452]['data'].= '     code line 3'.NL;
$separation[452]['data'].= '-------';
$separation[452]['expected'] = '<pre>';
$separation[452]['expected'].=   '<code>';
$separation[452]['expected'].=     ' code line 1'.NL;
$separation[452]['expected'].=       '      code line 2'.NL;
$separation[452]['expected'].=     ' code line 3';
$separation[452]['expected'].=   '</code>';
$separation[452]['expected'].= '</pre>';
$separation[452]['expected'].= '<hr>';

$separation[453]['data'] = '     code line 1'.NL;
$separation[453]['data'].= '          code line 2'.NL;
$separation[453]['data'].= '     code line 3'.NL;
$separation[453]['data'].= NL;
$separation[453]['data'].= '*  *  *';
$separation[453]['expected'] = '<pre>';
$separation[453]['expected'].=   '<code>';
$separation[453]['expected'].=     ' code line 1'.NL;
$separation[453]['expected'].=       '      code line 2'.NL;
$separation[453]['expected'].=     ' code line 3';
$separation[453]['expected'].=   '</code>';
$separation[453]['expected'].= '</pre>';
$separation[453]['expected'].= '<hr>';

$separation[454]['data'] = '     code line 1'.NL;
$separation[454]['data'].= '          code line 2'.NL;
$separation[454]['data'].= '     code line 3'.NL;
$separation[454]['data'].= NL;
$separation[454]['data'].= '-  -  -';
$separation[454]['expected'] = '<pre>';
$separation[454]['expected'].=   '<code>';
$separation[454]['expected'].=     ' code line 1'.NL;
$separation[454]['expected'].=       '      code line 2'.NL;
$separation[454]['expected'].=     ' code line 3';
$separation[454]['expected'].=   '</code>';
$separation[454]['expected'].= '</pre>';
$separation[454]['expected'].= '<hr>';

$separation[455]['data'] = '     code line 1'.NL;
$separation[455]['data'].= '          code line 2'.NL;
$separation[455]['data'].= '     code line 3'.NL;
$separation[455]['data'].= NL;
$separation[455]['data'].= '-------';
$separation[455]['expected'] = '<pre>';
$separation[455]['expected'].=   '<code>';
$separation[455]['expected'].=     ' code line 1'.NL;
$separation[455]['expected'].=       '      code line 2'.NL;
$separation[455]['expected'].=     ' code line 3';
$separation[455]['expected'].=   '</code>';
$separation[455]['expected'].= '</pre>';
$separation[455]['expected'].= '<hr>';

# code near markup
$separation[460]['data'] = '    code line 1'.NL;
$separation[460]['data'].= '         code line 2'.NL;
$separation[460]['data'].= '    code line 3'.NL;
$separation[460]['data'].= '<div>'.NL;
$separation[460]['data'].= '  markup line 1'.NL;
$separation[460]['data'].= '  markup line 2'.NL;
$separation[460]['data'].= '  markup line 3'.NL;
$separation[460]['data'].= '</div>';
$separation[460]['expected'] = '<pre>';
$separation[460]['expected'].=   '<code>';
$separation[460]['expected'].=     'code line 1'.NL;
$separation[460]['expected'].=       '     code line 2'.NL;
$separation[460]['expected'].=     'code line 3';
$separation[460]['expected'].=   '</code>';
$separation[460]['expected'].= '</pre>';
$separation[460]['expected'].= '<div>'.NL;
$separation[460]['expected'].= '  markup line 1'.NL;
$separation[460]['expected'].= '  markup line 2'.NL;
$separation[460]['expected'].= '  markup line 3'.NL;
$separation[460]['expected'].= '</div>';

$separation[461]['data'] = '    code line 1'.NL;
$separation[461]['data'].= '         code line 2'.NL;
$separation[461]['data'].= '    code line 3'.NL;
$separation[461]['data'].= NL;
$separation[461]['data'].= '<div>'.NL;
$separation[461]['data'].= '  markup line 1'.NL;
$separation[461]['data'].= '  markup line 2'.NL;
$separation[461]['data'].= '  markup line 3'.NL;
$separation[461]['data'].= '</div>';
$separation[461]['expected'] = '<pre>';
$separation[461]['expected'].=   '<code>';
$separation[461]['expected'].=     'code line 1'.NL;
$separation[461]['expected'].=       '     code line 2'.NL;
$separation[461]['expected'].=     'code line 3';
$separation[461]['expected'].=   '</code>';
$separation[461]['expected'].= '</pre>';
$separation[461]['expected'].= '<div>'.NL;
$separation[461]['expected'].= '  markup line 1'.NL;
$separation[461]['expected'].= '  markup line 2'.NL;
$separation[461]['expected'].= '  markup line 3'.NL;
$separation[461]['expected'].= '</div>';



# blockquote near header
$separation[500]['data'] = '> blockquote line 1'.NL;
$separation[500]['data'].= '> blockquote line 2'.NL;
$separation[500]['data'].= '> blockquote line 3'.NL;
$separation[500]['data'].= '# Title H1 (atx-style)';
$separation[500]['expected'] = '<blockquote>';
$separation[500]['expected'].=   '<p>';
$separation[500]['expected'].=     'blockquote line 1'.NL;
$separation[500]['expected'].=     'blockquote line 2'.NL;
$separation[500]['expected'].=     'blockquote line 3';
$separation[500]['expected'].=   '</p>';
$separation[500]['expected'].= '</blockquote>';
$separation[500]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[501]['data'] = '> blockquote line 1'.NL;
$separation[501]['data'].= '> blockquote line 2'.NL;
$separation[501]['data'].= '> blockquote line 3'.NL;
$separation[501]['data'].= NL;
$separation[501]['data'].= '# Title H1 (atx-style)';
$separation[501]['expected'] = '<blockquote>';
$separation[501]['expected'].=   '<p>';
$separation[501]['expected'].=     'blockquote line 1'.NL;
$separation[501]['expected'].=     'blockquote line 2'.NL;
$separation[501]['expected'].=     'blockquote line 3';
$separation[501]['expected'].=   '</p>';
$separation[501]['expected'].= '</blockquote>';
$separation[501]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[502]['data'] = '> blockquote line 1'.NL;
$separation[502]['data'].= '> blockquote line 2'.NL;
$separation[502]['data'].= '> blockquote line 3'.NL;
$separation[502]['data'].= 'Title H1 (Setext-style)'.NL;
$separation[502]['data'].= '=======================';
$separation[502]['expected'] = '<blockquote>';
$separation[502]['expected'].=   '<p>';
$separation[502]['expected'].=     'blockquote line 1'.NL;
$separation[502]['expected'].=     'blockquote line 2'.NL;
$separation[502]['expected'].=     'blockquote line 3'.NL;
$separation[502]['expected'].=     'Title H1 (Setext-style)'.NL;
$separation[502]['expected'].=     \effcore\markdown::meta_encode('=======================');
$separation[502]['expected'].=   '</p>';
$separation[502]['expected'].= '</blockquote>';

$separation[503]['data'] = '> blockquote line 1'.NL;
$separation[503]['data'].= '> blockquote line 2'.NL;
$separation[503]['data'].= '> blockquote line 3'.NL;
$separation[503]['data'].= NL;
$separation[503]['data'].= 'Title H1 (Setext-style)'.NL;
$separation[503]['data'].= '=======================';
$separation[503]['expected'] = '<blockquote>';
$separation[503]['expected'].=   '<p>';
$separation[503]['expected'].=     'blockquote line 1'.NL;
$separation[503]['expected'].=     'blockquote line 2'.NL;
$separation[503]['expected'].=     'blockquote line 3';
$separation[503]['expected'].=   '</p>';
$separation[503]['expected'].= '</blockquote>';
$separation[503]['expected'].= '<h1>Title H1 (Setext-style)</h1>';

# blockquote near paragraph
$separation[510]['data'] = '> blockquote line 1'.NL;
$separation[510]['data'].= '> blockquote line 2'.NL;
$separation[510]['data'].= '> blockquote line 3'.NL;
$separation[510]['data'].= 'paragraph line 1'.NL;
$separation[510]['data'].= 'paragraph line 2'.NL;
$separation[510]['data'].= 'paragraph line 3';
$separation[510]['expected'] = '<blockquote>';
$separation[510]['expected'].=   '<p>';
$separation[510]['expected'].=     'blockquote line 1'.NL;
$separation[510]['expected'].=     'blockquote line 2'.NL;
$separation[510]['expected'].=     'blockquote line 3'.NL;
$separation[510]['expected'].=     'paragraph line 1'.NL;
$separation[510]['expected'].=     'paragraph line 2'.NL;
$separation[510]['expected'].=     'paragraph line 3';
$separation[510]['expected'].=   '</p>';
$separation[510]['expected'].= '</blockquote>';

$separation[511]['data'] = '> blockquote line 1'.NL;
$separation[511]['data'].= '> blockquote line 2'.NL;
$separation[511]['data'].= '> blockquote line 3'.NL;
$separation[511]['data'].= NL;
$separation[511]['data'].= 'paragraph line 1'.NL;
$separation[511]['data'].= 'paragraph line 2'.NL;
$separation[511]['data'].= 'paragraph line 3';
$separation[511]['expected'] = '<blockquote>';
$separation[511]['expected'].=   '<p>';
$separation[511]['expected'].=     'blockquote line 1'.NL;
$separation[511]['expected'].=     'blockquote line 2'.NL;
$separation[511]['expected'].=     'blockquote line 3';
$separation[511]['expected'].=   '</p>';
$separation[511]['expected'].= '</blockquote>';
$separation[511]['expected'].= '<p>';
$separation[511]['expected'].=   'paragraph line 1'.NL;
$separation[511]['expected'].=   'paragraph line 2'.NL;
$separation[511]['expected'].=   'paragraph line 3';
$separation[511]['expected'].= '</p>';

# blockquote near list
$separation[520]['data'] = '> blockquote line 1'.NL;
$separation[520]['data'].= '> blockquote line 2'.NL;
$separation[520]['data'].= '> blockquote line 3'.NL;
$separation[520]['data'].= '* list item 1'.NL;
$separation[520]['data'].= '* list item 2'.NL;
$separation[520]['data'].= '* list item 3';
$separation[520]['expected'] = '<blockquote>';
$separation[520]['expected'].=   '<p>';
$separation[520]['expected'].=     'blockquote line 1'.NL;
$separation[520]['expected'].=     'blockquote line 2'.NL;
$separation[520]['expected'].=     'blockquote line 3';
$separation[520]['expected'].=   '</p>';
$separation[520]['expected'].= '</blockquote>';
$separation[520]['expected'].= '<ul>';
$separation[520]['expected'].=   '<li>list item 1</li>';
$separation[520]['expected'].=   '<li>list item 2</li>';
$separation[520]['expected'].=   '<li>list item 3</li>';
$separation[520]['expected'].= '</ul>';

$separation[521]['data'] = '> blockquote line 1'.NL;
$separation[521]['data'].= '> blockquote line 2'.NL;
$separation[521]['data'].= '> blockquote line 3'.NL;
$separation[521]['data'].= NL;
$separation[521]['data'].= '* list item 1'.NL;
$separation[521]['data'].= '* list item 2'.NL;
$separation[521]['data'].= '* list item 3';
$separation[521]['expected'] = '<blockquote>';
$separation[521]['expected'].=   '<p>';
$separation[521]['expected'].=     'blockquote line 1'.NL;
$separation[521]['expected'].=     'blockquote line 2'.NL;
$separation[521]['expected'].=     'blockquote line 3';
$separation[521]['expected'].=   '</p>';
$separation[521]['expected'].= '</blockquote>';
$separation[521]['expected'].= '<ul>';
$separation[521]['expected'].=   '<li>list item 1</li>';
$separation[521]['expected'].=   '<li>list item 2</li>';
$separation[521]['expected'].=   '<li>list item 3</li>';
$separation[521]['expected'].= '</ul>';

# blockquote near code
$separation[530]['data'] = '> blockquote line 1'.NL;
$separation[530]['data'].= '> blockquote line 2'.NL;
$separation[530]['data'].= '> blockquote line 3'.NL;
$separation[530]['data'].= '    code line 1'.NL;
$separation[530]['data'].= '         code line 2'.NL;
$separation[530]['data'].= '    code line 3';
$separation[530]['expected'] = '<blockquote>';
$separation[530]['expected'].=   '<p>';
$separation[530]['expected'].=     'blockquote line 1'.NL;
$separation[530]['expected'].=     'blockquote line 2'.NL;
$separation[530]['expected'].=     'blockquote line 3'.NL;
$separation[530]['expected'].=     '    code line 1'.NL;
$separation[530]['expected'].=     '         code line 2'.NL;
$separation[530]['expected'].=     '    code line 3';
$separation[530]['expected'].=   '</p>';
$separation[530]['expected'].= '</blockquote>';

$separation[531]['data'] = '> blockquote line 1'.NL;
$separation[531]['data'].= '> blockquote line 2'.NL;
$separation[531]['data'].= '> blockquote line 3'.NL;
$separation[531]['data'].= NL;
$separation[531]['data'].= '    code line 1'.NL;
$separation[531]['data'].= '         code line 2'.NL;
$separation[531]['data'].= '    code line 3';
$separation[531]['expected'] = '<blockquote>';
$separation[531]['expected'].=   '<p>';
$separation[531]['expected'].=     'blockquote line 1'.NL;
$separation[531]['expected'].=     'blockquote line 2'.NL;
$separation[531]['expected'].=     'blockquote line 3';
$separation[531]['expected'].=   '</p>';
$separation[531]['expected'].= '</blockquote>';
$separation[531]['expected'].= '<pre>';
$separation[531]['expected'].=   '<code>';
$separation[531]['expected'].=     'code line 1'.NL;
$separation[531]['expected'].=       '     code line 2'.NL;
$separation[531]['expected'].=     'code line 3';
$separation[531]['expected'].=   '</code>';
$separation[531]['expected'].= '</pre>';

# blockquote near blockquote
$separation[540]['data'] = '> blockquote 1 line 1'.NL;
$separation[540]['data'].= '> blockquote 1 line 2'.NL;
$separation[540]['data'].= '> blockquote 1 line 3'.NL;
$separation[540]['data'].= NL;
$separation[540]['data'].= '> blockquote 2 line 1'.NL;
$separation[540]['data'].= '> blockquote 2 line 2'.NL;
$separation[540]['data'].= '> blockquote 2 line 3';
$separation[540]['expected'] = '<blockquote>';
$separation[540]['expected'].=   '<p>';
$separation[540]['expected'].=     'blockquote 1 line 1'.NL;
$separation[540]['expected'].=     'blockquote 1 line 2'.NL;
$separation[540]['expected'].=     'blockquote 1 line 3';
$separation[540]['expected'].=   '</p>';
$separation[540]['expected'].= '</blockquote>';
$separation[540]['expected'].= '<blockquote>';
$separation[540]['expected'].=   '<p>';
$separation[540]['expected'].=     'blockquote 2 line 1'.NL;
$separation[540]['expected'].=     'blockquote 2 line 2'.NL;
$separation[540]['expected'].=     'blockquote 2 line 3';
$separation[540]['expected'].=   '</p>';
$separation[540]['expected'].= '</blockquote>';

# blockquote near hr
$separation[550]['data'] = '> blockquote line 1'.NL;
$separation[550]['data'].= '> blockquote line 2'.NL;
$separation[550]['data'].= '> blockquote line 3'.NL;
$separation[550]['data'].= '*  *  *';
$separation[550]['expected'] = '<blockquote>';
$separation[550]['expected'].=   '<p>';
$separation[550]['expected'].=     'blockquote line 1'.NL;
$separation[550]['expected'].=     'blockquote line 2'.NL;
$separation[550]['expected'].=     'blockquote line 3';
$separation[550]['expected'].=   '</p>';
$separation[550]['expected'].= '</blockquote>';
$separation[550]['expected'].= '<hr>';

$separation[551]['data'] = '> blockquote line 1'.NL;
$separation[551]['data'].= '> blockquote line 2'.NL;
$separation[551]['data'].= '> blockquote line 3'.NL;
$separation[551]['data'].= '-  -  -';
$separation[551]['expected'] = '<blockquote>';
$separation[551]['expected'].=   '<p>';
$separation[551]['expected'].=     'blockquote line 1'.NL;
$separation[551]['expected'].=     'blockquote line 2'.NL;
$separation[551]['expected'].=     'blockquote line 3';
$separation[551]['expected'].=   '</p>';
$separation[551]['expected'].= '</blockquote>';
$separation[551]['expected'].= '<hr>';

$separation[552]['data'] = '> blockquote line 1'.NL;
$separation[552]['data'].= '> blockquote line 2'.NL;
$separation[552]['data'].= '> blockquote line 3'.NL;
$separation[552]['data'].= '-------';
$separation[552]['expected'] = '<blockquote>';
$separation[552]['expected'].=   '<p>';
$separation[552]['expected'].=     'blockquote line 1'.NL;
$separation[552]['expected'].=     'blockquote line 2'.NL;
$separation[552]['expected'].=     'blockquote line 3';
$separation[552]['expected'].=   '</p>';
$separation[552]['expected'].= '</blockquote>';
$separation[552]['expected'].= '<hr>';

$separation[553]['data'] = '> blockquote line 1'.NL;
$separation[553]['data'].= '> blockquote line 2'.NL;
$separation[553]['data'].= '> blockquote line 3'.NL;
$separation[553]['data'].= NL;
$separation[553]['data'].= '*  *  *';
$separation[553]['expected'] = '<blockquote>';
$separation[553]['expected'].=   '<p>';
$separation[553]['expected'].=     'blockquote line 1'.NL;
$separation[553]['expected'].=     'blockquote line 2'.NL;
$separation[553]['expected'].=     'blockquote line 3';
$separation[553]['expected'].=   '</p>';
$separation[553]['expected'].= '</blockquote>';
$separation[553]['expected'].= '<hr>';

$separation[554]['data'] = '> blockquote line 1'.NL;
$separation[554]['data'].= '> blockquote line 2'.NL;
$separation[554]['data'].= '> blockquote line 3'.NL;
$separation[554]['data'].= NL;
$separation[554]['data'].= '-  -  -';
$separation[554]['expected'] = '<blockquote>';
$separation[554]['expected'].=   '<p>';
$separation[554]['expected'].=     'blockquote line 1'.NL;
$separation[554]['expected'].=     'blockquote line 2'.NL;
$separation[554]['expected'].=     'blockquote line 3';
$separation[554]['expected'].=   '</p>';
$separation[554]['expected'].= '</blockquote>';
$separation[554]['expected'].= '<hr>';

$separation[555]['data'] = '> blockquote line 1'.NL;
$separation[555]['data'].= '> blockquote line 2'.NL;
$separation[555]['data'].= '> blockquote line 3'.NL;
$separation[555]['data'].= NL;
$separation[555]['data'].= '-------';
$separation[555]['expected'] = '<blockquote>';
$separation[555]['expected'].=   '<p>';
$separation[555]['expected'].=     'blockquote line 1'.NL;
$separation[555]['expected'].=     'blockquote line 2'.NL;
$separation[555]['expected'].=     'blockquote line 3';
$separation[555]['expected'].=   '</p>';
$separation[555]['expected'].= '</blockquote>';
$separation[555]['expected'].= '<hr>';

# blockquote near markup
$separation[560]['data'] = '> blockquote line 1'.NL;
$separation[560]['data'].= '> blockquote line 2'.NL;
$separation[560]['data'].= '> blockquote line 3'.NL;
$separation[560]['data'].= '<div>'.NL;
$separation[560]['data'].= '  markup line 1'.NL;
$separation[560]['data'].= '  markup line 2'.NL;
$separation[560]['data'].= '  markup line 3'.NL;
$separation[560]['data'].= '</div>';
$separation[560]['expected'] = '<blockquote>';
$separation[560]['expected'].=   '<p>';
$separation[560]['expected'].=     'blockquote line 1'.NL;
$separation[560]['expected'].=     'blockquote line 2'.NL;
$separation[560]['expected'].=     'blockquote line 3';
$separation[560]['expected'].=   '</p>';
$separation[560]['expected'].= '</blockquote>';
$separation[560]['expected'].= '<div>'.NL;
$separation[560]['expected'].= '  markup line 1'.NL;
$separation[560]['expected'].= '  markup line 2'.NL;
$separation[560]['expected'].= '  markup line 3'.NL;
$separation[560]['expected'].= '</div>';

$separation[561]['data'] = '> blockquote line 1'.NL;
$separation[561]['data'].= '> blockquote line 2'.NL;
$separation[561]['data'].= '> blockquote line 3'.NL;
$separation[561]['data'].= NL;
$separation[561]['data'].= '<div>'.NL;
$separation[561]['data'].= '  markup line 1'.NL;
$separation[561]['data'].= '  markup line 2'.NL;
$separation[561]['data'].= '  markup line 3'.NL;
$separation[561]['data'].= '</div>';
$separation[561]['expected'] = '<blockquote>';
$separation[561]['expected'].=   '<p>';
$separation[561]['expected'].=     'blockquote line 1'.NL;
$separation[561]['expected'].=     'blockquote line 2'.NL;
$separation[561]['expected'].=     'blockquote line 3';
$separation[561]['expected'].=   '</p>';
$separation[561]['expected'].= '</blockquote>';
$separation[561]['expected'].= '<div>'.NL;
$separation[561]['expected'].= '  markup line 1'.NL;
$separation[561]['expected'].= '  markup line 2'.NL;
$separation[561]['expected'].= '  markup line 3'.NL;
$separation[561]['expected'].= '</div>';



# hr near header
$separation[600]['data'] = '*  *  *'.NL;
$separation[600]['data'].= '# Title H1 (atx-style)';
$separation[600]['expected'] = '<hr>';
$separation[600]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[601]['data'] = '-  -  -'.NL;
$separation[601]['data'].= '# Title H1 (atx-style)';
$separation[601]['expected'] = '<hr>';
$separation[601]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[602]['data'] = '-------'.NL;
$separation[602]['data'].= '# Title H1 (atx-style)';
$separation[602]['expected'] = '<hr>';
$separation[602]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[603]['data'] = '*  *  *'.NL;
$separation[603]['data'].= NL;
$separation[603]['data'].= '# Title H1 (atx-style)';
$separation[603]['expected'] = '<hr>';
$separation[603]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[604]['data'] = '-  -  -'.NL;
$separation[604]['data'].= NL;
$separation[604]['data'].= '# Title H1 (atx-style)';
$separation[604]['expected'] = '<hr>';
$separation[604]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[605]['data'] = '-------'.NL;
$separation[605]['data'].= NL;
$separation[605]['data'].= '# Title H1 (atx-style)';
$separation[605]['expected'] = '<hr>';
$separation[605]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[606]['data'] = '*  *  *'.NL;
$separation[606]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[606]['data'].= '======================';
$separation[606]['expected'] = '<hr>';
$separation[606]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

$separation[607]['data'] = '-  -  -'.NL;
$separation[607]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[607]['data'].= '======================';
$separation[607]['expected'] = '<hr>';
$separation[607]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

$separation[608]['data'] = '--------'.NL;
$separation[608]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[608]['data'].= '======================';
$separation[608]['expected'] = '<hr>';
$separation[608]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

$separation[609]['data'] = '*  *  *'.NL;
$separation[609]['data'].= NL;
$separation[609]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[609]['data'].= '======================';
$separation[609]['expected'] = '<hr>';
$separation[609]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

$separation[610]['data'] = '-  -  -'.NL;
$separation[610]['data'].= NL;
$separation[610]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[610]['data'].= '======================';
$separation[610]['expected'] = '<hr>';
$separation[610]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

$separation[611]['data'] = '-------'.NL;
$separation[611]['data'].= NL;
$separation[611]['data'].= 'Title H1 (Setex-style)'.NL;
$separation[611]['data'].= '======================';
$separation[611]['expected'] = '<hr>';
$separation[611]['expected'].= '<h1>Title H1 (Setex-style)</h1>';

# hr near paragraph
$separation[620]['data'] = '*  *  *'.NL;
$separation[620]['data'].= 'paragraph line 1'.NL;
$separation[620]['data'].= 'paragraph line 2'.NL;
$separation[620]['data'].= 'paragraph line 3';
$separation[620]['expected'] = '<hr>';
$separation[620]['expected'].= '<p>';
$separation[620]['expected'].=   'paragraph line 1'.NL;
$separation[620]['expected'].=   'paragraph line 2'.NL;
$separation[620]['expected'].=   'paragraph line 3';
$separation[620]['expected'].= '</p>';

$separation[621]['data'] = '-  -  -'.NL;
$separation[621]['data'].= 'paragraph line 1'.NL;
$separation[621]['data'].= 'paragraph line 2'.NL;
$separation[621]['data'].= 'paragraph line 3';
$separation[621]['expected'] = '<hr>';
$separation[621]['expected'].= '<p>';
$separation[621]['expected'].=   'paragraph line 1'.NL;
$separation[621]['expected'].=   'paragraph line 2'.NL;
$separation[621]['expected'].=   'paragraph line 3';
$separation[621]['expected'].= '</p>';

$separation[622]['data'] = '-------'.NL;
$separation[622]['data'].= 'paragraph line 1'.NL;
$separation[622]['data'].= 'paragraph line 2'.NL;
$separation[622]['data'].= 'paragraph line 3';
$separation[622]['expected'] = '<hr>';
$separation[622]['expected'].= '<p>';
$separation[622]['expected'].=   'paragraph line 1'.NL;
$separation[622]['expected'].=   'paragraph line 2'.NL;
$separation[622]['expected'].=   'paragraph line 3';
$separation[622]['expected'].= '</p>';

$separation[623]['data'] = '*  *  *'.NL;
$separation[623]['data'].= NL;
$separation[623]['data'].= 'paragraph line 1'.NL;
$separation[623]['data'].= 'paragraph line 2'.NL;
$separation[623]['data'].= 'paragraph line 3';
$separation[623]['expected'] = '<hr>';
$separation[623]['expected'].= '<p>';
$separation[623]['expected'].=   'paragraph line 1'.NL;
$separation[623]['expected'].=   'paragraph line 2'.NL;
$separation[623]['expected'].=   'paragraph line 3';
$separation[623]['expected'].= '</p>';

$separation[624]['data'] = '-  -  -'.NL;
$separation[624]['data'].= NL;
$separation[624]['data'].= 'paragraph line 1'.NL;
$separation[624]['data'].= 'paragraph line 2'.NL;
$separation[624]['data'].= 'paragraph line 3';
$separation[624]['expected'] = '<hr>';
$separation[624]['expected'].= '<p>';
$separation[624]['expected'].=   'paragraph line 1'.NL;
$separation[624]['expected'].=   'paragraph line 2'.NL;
$separation[624]['expected'].=   'paragraph line 3';
$separation[624]['expected'].= '</p>';

$separation[625]['data'] = '-------'.NL;
$separation[625]['data'].= NL;
$separation[625]['data'].= 'paragraph line 1'.NL;
$separation[625]['data'].= 'paragraph line 2'.NL;
$separation[625]['data'].= 'paragraph line 3';
$separation[625]['expected'] = '<hr>';
$separation[625]['expected'].= '<p>';
$separation[625]['expected'].=   'paragraph line 1'.NL;
$separation[625]['expected'].=   'paragraph line 2'.NL;
$separation[625]['expected'].=   'paragraph line 3';
$separation[625]['expected'].= '</p>';

# hr near list
$separation[630]['data'] = '*  *  *'.NL;
$separation[630]['data'].= '* list item 1'.NL;
$separation[630]['data'].= '* list item 1'.NL;
$separation[630]['data'].= '* list item 1';
$separation[630]['expected'] = '<hr>';
$separation[630]['expected'].= '<ul>';
$separation[630]['expected'].=   '<li>list item 1</li>';
$separation[630]['expected'].=   '<li>list item 1</li>';
$separation[630]['expected'].=   '<li>list item 1</li>';
$separation[630]['expected'].= '</ul>';

$separation[631]['data'] = '-  -  -'.NL;
$separation[631]['data'].= '* list item 1'.NL;
$separation[631]['data'].= '* list item 1'.NL;
$separation[631]['data'].= '* list item 1';
$separation[631]['expected'] = '<hr>';
$separation[631]['expected'].= '<ul>';
$separation[631]['expected'].=   '<li>list item 1</li>';
$separation[631]['expected'].=   '<li>list item 1</li>';
$separation[631]['expected'].=   '<li>list item 1</li>';
$separation[631]['expected'].= '</ul>';

$separation[632]['data'] = '-------'.NL;
$separation[632]['data'].= '* list item 1'.NL;
$separation[632]['data'].= '* list item 1'.NL;
$separation[632]['data'].= '* list item 1';
$separation[632]['expected'] = '<hr>';
$separation[632]['expected'].= '<ul>';
$separation[632]['expected'].=   '<li>list item 1</li>';
$separation[632]['expected'].=   '<li>list item 1</li>';
$separation[632]['expected'].=   '<li>list item 1</li>';
$separation[632]['expected'].= '</ul>';

$separation[633]['data'] = '*  *  *'.NL;
$separation[633]['data'].= NL;
$separation[633]['data'].= '* list item 1'.NL;
$separation[633]['data'].= '* list item 1'.NL;
$separation[633]['data'].= '* list item 1';
$separation[633]['expected'] = '<hr>';
$separation[633]['expected'].= '<ul>';
$separation[633]['expected'].=   '<li>list item 1</li>';
$separation[633]['expected'].=   '<li>list item 1</li>';
$separation[633]['expected'].=   '<li>list item 1</li>';
$separation[633]['expected'].= '</ul>';

$separation[634]['data'] = '-  -  -'.NL;
$separation[634]['data'].= NL;
$separation[634]['data'].= '* list item 1'.NL;
$separation[634]['data'].= '* list item 1'.NL;
$separation[634]['data'].= '* list item 1';
$separation[634]['expected'] = '<hr>';
$separation[634]['expected'].= '<ul>';
$separation[634]['expected'].=   '<li>list item 1</li>';
$separation[634]['expected'].=   '<li>list item 1</li>';
$separation[634]['expected'].=   '<li>list item 1</li>';
$separation[634]['expected'].= '</ul>';

$separation[635]['data'] = '-------'.NL;
$separation[635]['data'].= NL;
$separation[635]['data'].= '* list item 1'.NL;
$separation[635]['data'].= '* list item 1'.NL;
$separation[635]['data'].= '* list item 1';
$separation[635]['expected'] = '<hr>';
$separation[635]['expected'].= '<ul>';
$separation[635]['expected'].=   '<li>list item 1</li>';
$separation[635]['expected'].=   '<li>list item 1</li>';
$separation[635]['expected'].=   '<li>list item 1</li>';
$separation[635]['expected'].= '</ul>';

# hr near code
$separation[640]['data'] = '*  *  *'.NL;
$separation[640]['data'].= '    code line 1'.NL;
$separation[640]['data'].= '         code line 2'.NL;
$separation[640]['data'].= '    code line 3';
$separation[640]['expected'] = '<hr>';
$separation[640]['expected'].= '<pre>';
$separation[640]['expected'].=   '<code>';
$separation[640]['expected'].=     'code line 1'.NL;
$separation[640]['expected'].=       '     code line 2'.NL;
$separation[640]['expected'].=     'code line 3';
$separation[640]['expected'].=   '</code>';
$separation[640]['expected'].= '</pre>';

$separation[641]['data'] = '-  -  -'.NL;
$separation[641]['data'].= '    code line 1'.NL;
$separation[641]['data'].= '         code line 2'.NL;
$separation[641]['data'].= '    code line 3';
$separation[641]['expected'] = '<hr>';
$separation[641]['expected'].= '<pre>';
$separation[641]['expected'].=   '<code>';
$separation[641]['expected'].=     'code line 1'.NL;
$separation[641]['expected'].=       '     code line 2'.NL;
$separation[641]['expected'].=     'code line 3';
$separation[641]['expected'].=   '</code>';
$separation[641]['expected'].= '</pre>';

$separation[642]['data'] = '-------'.NL;
$separation[642]['data'].= '    code line 1'.NL;
$separation[642]['data'].= '         code line 2'.NL;
$separation[642]['data'].= '    code line 3';
$separation[642]['expected'] = '<hr>';
$separation[642]['expected'].= '<pre>';
$separation[642]['expected'].=   '<code>';
$separation[642]['expected'].=     'code line 1'.NL;
$separation[642]['expected'].=       '     code line 2'.NL;
$separation[642]['expected'].=     'code line 3';
$separation[642]['expected'].=   '</code>';
$separation[642]['expected'].= '</pre>';

$separation[643]['data'] = '*  *  *'.NL;
$separation[643]['data'].= NL;
$separation[643]['data'].= '    code line 1'.NL;
$separation[643]['data'].= '         code line 2'.NL;
$separation[643]['data'].= '    code line 3';
$separation[643]['expected'] = '<hr>';
$separation[643]['expected'].= '<pre>';
$separation[643]['expected'].=   '<code>';
$separation[643]['expected'].=     'code line 1'.NL;
$separation[643]['expected'].=       '     code line 2'.NL;
$separation[643]['expected'].=     'code line 3';
$separation[643]['expected'].=   '</code>';
$separation[643]['expected'].= '</pre>';

$separation[644]['data'] = '-  -  -'.NL;
$separation[644]['data'].= NL;
$separation[644]['data'].= '    code line 1'.NL;
$separation[644]['data'].= '         code line 2'.NL;
$separation[644]['data'].= '    code line 3';
$separation[644]['expected'] = '<hr>';
$separation[644]['expected'].= '<pre>';
$separation[644]['expected'].=   '<code>';
$separation[644]['expected'].=     'code line 1'.NL;
$separation[644]['expected'].=       '     code line 2'.NL;
$separation[644]['expected'].=     'code line 3';
$separation[644]['expected'].=   '</code>';
$separation[644]['expected'].= '</pre>';

$separation[645]['data'] = '-------'.NL;
$separation[645]['data'].= NL;
$separation[645]['data'].= '    code line 1'.NL;
$separation[645]['data'].= '         code line 2'.NL;
$separation[645]['data'].= '    code line 3';
$separation[645]['expected'] = '<hr>';
$separation[645]['expected'].= '<pre>';
$separation[645]['expected'].=   '<code>';
$separation[645]['expected'].=     'code line 1'.NL;
$separation[645]['expected'].=       '     code line 2'.NL;
$separation[645]['expected'].=     'code line 3';
$separation[645]['expected'].=   '</code>';
$separation[645]['expected'].= '</pre>';

# hr near blockquote
$separation[650]['data'] = '*  *  *'.NL;
$separation[650]['data'].= '> blockquote line 1'.NL;
$separation[650]['data'].= '> blockquote line 2'.NL;
$separation[650]['data'].= '> blockquote line 3';
$separation[650]['expected'] = '<hr>';
$separation[650]['expected'].= '<blockquote>';
$separation[650]['expected'].=   '<p>';
$separation[650]['expected'].=     'blockquote line 1'.NL;
$separation[650]['expected'].=     'blockquote line 2'.NL;
$separation[650]['expected'].=     'blockquote line 3';
$separation[650]['expected'].=   '</p>';
$separation[650]['expected'].= '</blockquote>';

$separation[651]['data'] = '-  -  -'.NL;
$separation[651]['data'].= '> blockquote line 1'.NL;
$separation[651]['data'].= '> blockquote line 2'.NL;
$separation[651]['data'].= '> blockquote line 3';
$separation[651]['expected'] = '<hr>';
$separation[651]['expected'].= '<blockquote>';
$separation[651]['expected'].=   '<p>';
$separation[651]['expected'].=     'blockquote line 1'.NL;
$separation[651]['expected'].=     'blockquote line 2'.NL;
$separation[651]['expected'].=     'blockquote line 3';
$separation[651]['expected'].=   '</p>';
$separation[651]['expected'].= '</blockquote>';

$separation[652]['data'] = '-------'.NL;
$separation[652]['data'].= '> blockquote line 1'.NL;
$separation[652]['data'].= '> blockquote line 2'.NL;
$separation[652]['data'].= '> blockquote line 3';
$separation[652]['expected'] = '<hr>';
$separation[652]['expected'].= '<blockquote>';
$separation[652]['expected'].=   '<p>';
$separation[652]['expected'].=     'blockquote line 1'.NL;
$separation[652]['expected'].=     'blockquote line 2'.NL;
$separation[652]['expected'].=     'blockquote line 3';
$separation[652]['expected'].=   '</p>';
$separation[652]['expected'].= '</blockquote>';

$separation[653]['data'] = '*  *  *'.NL;
$separation[653]['data'].= NL;
$separation[653]['data'].= '> blockquote line 1'.NL;
$separation[653]['data'].= '> blockquote line 2'.NL;
$separation[653]['data'].= '> blockquote line 3';
$separation[653]['expected'] = '<hr>';
$separation[653]['expected'].= '<blockquote>';
$separation[653]['expected'].=   '<p>';
$separation[653]['expected'].=     'blockquote line 1'.NL;
$separation[653]['expected'].=     'blockquote line 2'.NL;
$separation[653]['expected'].=     'blockquote line 3';
$separation[653]['expected'].=   '</p>';
$separation[653]['expected'].= '</blockquote>';

$separation[654]['data'] = '-  -  -'.NL;
$separation[654]['data'].= NL;
$separation[654]['data'].= '> blockquote line 1'.NL;
$separation[654]['data'].= '> blockquote line 2'.NL;
$separation[654]['data'].= '> blockquote line 3';
$separation[654]['expected'] = '<hr>';
$separation[654]['expected'].= '<blockquote>';
$separation[654]['expected'].=   '<p>';
$separation[654]['expected'].=     'blockquote line 1'.NL;
$separation[654]['expected'].=     'blockquote line 2'.NL;
$separation[654]['expected'].=     'blockquote line 3';
$separation[654]['expected'].=   '</p>';
$separation[654]['expected'].= '</blockquote>';

$separation[655]['data'] = '-------'.NL;
$separation[655]['data'].= NL;
$separation[655]['data'].= '> blockquote line 1'.NL;
$separation[655]['data'].= '> blockquote line 2'.NL;
$separation[655]['data'].= '> blockquote line 3';
$separation[655]['expected'] = '<hr>';
$separation[655]['expected'].= '<blockquote>';
$separation[655]['expected'].=   '<p>';
$separation[655]['expected'].=     'blockquote line 1'.NL;
$separation[655]['expected'].=     'blockquote line 2'.NL;
$separation[655]['expected'].=     'blockquote line 3';
$separation[655]['expected'].=   '</p>';
$separation[655]['expected'].= '</blockquote>';

# hr near hr
$separation[660]['data'] = '-  -  -'.NL;
$separation[660]['data'].= '-  -  -';
$separation[660]['expected'] = '<hr>';
$separation[660]['expected'].= '<hr>';

$separation[661]['data'] = '*  *  *'.NL;
$separation[661]['data'].= '*  *  *';
$separation[661]['expected'] = '<hr>';
$separation[661]['expected'].= '<hr>';

$separation[662]['data'] = '*  *  *'.NL;
$separation[662]['data'].= '-  -  -';
$separation[662]['expected'] = '<hr>';
$separation[662]['expected'].= '<hr>';

$separation[663]['data'] = '-  -  -'.NL;
$separation[663]['data'].= '*  *  *';
$separation[663]['expected'] = '<hr>';
$separation[663]['expected'].= '<hr>';

$separation[664]['data'] = '-------'.NL;
$separation[664]['data'].= '-------';
$separation[664]['expected'] = '<hr>';
$separation[664]['expected'].= '<hr>';

$separation[665]['data'] = '*  *  *'.NL;
$separation[665]['data'].= '*  *  *';
$separation[665]['expected'] = '<hr>';
$separation[665]['expected'].= '<hr>';

$separation[667]['data'] = '*  *  *'.NL;
$separation[667]['data'].= '-------';
$separation[667]['expected'] = '<hr>';
$separation[667]['expected'].= '<hr>';

$separation[668]['data'] = '-------'.NL;
$separation[668]['data'].= '*  *  *';
$separation[668]['expected'] = '<hr>';
$separation[668]['expected'].= '<hr>';

$separation[669]['data'] = '-  -  -'.NL;
$separation[669]['data'].= NL;
$separation[669]['data'].= '-  -  -';
$separation[669]['expected'] = '<hr>';
$separation[669]['expected'].= '<hr>';

$separation[670]['data'] = '*  *  *'.NL;
$separation[670]['data'].= NL;
$separation[670]['data'].= '*  *  *';
$separation[670]['expected'] = '<hr>';
$separation[670]['expected'].= '<hr>';

$separation[671]['data'] = '*  *  *'.NL;
$separation[671]['data'].= NL;
$separation[671]['data'].= '-  -  -';
$separation[671]['expected'] = '<hr>';
$separation[671]['expected'].= '<hr>';

$separation[672]['data'] = '-  -  -'.NL;
$separation[672]['data'].= NL;
$separation[672]['data'].= '*  *  *';
$separation[672]['expected'] = '<hr>';
$separation[672]['expected'].= '<hr>';

$separation[673]['data'] = '-------'.NL;
$separation[673]['data'].= NL;
$separation[673]['data'].= '-------';
$separation[673]['expected'] = '<hr>';
$separation[673]['expected'].= '<hr>';

$separation[674]['data'] = '*  *  *'.NL;
$separation[674]['data'].= NL;
$separation[674]['data'].= '*  *  *';
$separation[674]['expected'] = '<hr>';
$separation[674]['expected'].= '<hr>';

$separation[675]['data'] = '*  *  *'.NL;
$separation[675]['data'].= NL;
$separation[675]['data'].= '-------';
$separation[675]['expected'] = '<hr>';
$separation[675]['expected'].= '<hr>';

$separation[676]['data'] = '-------'.NL;
$separation[676]['data'].= NL;
$separation[676]['data'].= '*  *  *';
$separation[676]['expected'] = '<hr>';
$separation[676]['expected'].= '<hr>';

# hr near markup
$separation[680]['data'] = '*  *  *'.NL;
$separation[680]['data'].= '<div>'.NL;
$separation[680]['data'].= '  markup line 1'.NL;
$separation[680]['data'].= '  markup line 2'.NL;
$separation[680]['data'].= '  markup line 3'.NL;
$separation[680]['data'].= '</div>';
$separation[680]['expected'] = '<hr>';
$separation[680]['expected'].= '<div>'.NL;
$separation[680]['expected'].= '  markup line 1'.NL;
$separation[680]['expected'].= '  markup line 2'.NL;
$separation[680]['expected'].= '  markup line 3'.NL;
$separation[680]['expected'].= '</div>';

$separation[681]['data'] = '-  -  -'.NL;
$separation[681]['data'].= '<div>'.NL;
$separation[681]['data'].= '  markup line 1'.NL;
$separation[681]['data'].= '  markup line 2'.NL;
$separation[681]['data'].= '  markup line 3'.NL;
$separation[681]['data'].= '</div>';
$separation[681]['expected'] = '<hr>';
$separation[681]['expected'].= '<div>'.NL;
$separation[681]['expected'].= '  markup line 1'.NL;
$separation[681]['expected'].= '  markup line 2'.NL;
$separation[681]['expected'].= '  markup line 3'.NL;
$separation[681]['expected'].= '</div>';

$separation[682]['data'] = '-------'.NL;
$separation[682]['data'].= '<div>'.NL;
$separation[682]['data'].= '  markup line 1'.NL;
$separation[682]['data'].= '  markup line 2'.NL;
$separation[682]['data'].= '  markup line 3'.NL;
$separation[682]['data'].= '</div>';
$separation[682]['expected'] = '<hr>';
$separation[682]['expected'].= '<div>'.NL;
$separation[682]['expected'].= '  markup line 1'.NL;
$separation[682]['expected'].= '  markup line 2'.NL;
$separation[682]['expected'].= '  markup line 3'.NL;
$separation[682]['expected'].= '</div>';

$separation[683]['data'] = '*  *  *'.NL;
$separation[683]['data'].= NL;
$separation[683]['data'].= '<div>'.NL;
$separation[683]['data'].= '  markup line 1'.NL;
$separation[683]['data'].= '  markup line 2'.NL;
$separation[683]['data'].= '  markup line 3'.NL;
$separation[683]['data'].= '</div>';
$separation[683]['expected'] = '<hr>';
$separation[683]['expected'].= '<div>'.NL;
$separation[683]['expected'].= '  markup line 1'.NL;
$separation[683]['expected'].= '  markup line 2'.NL;
$separation[683]['expected'].= '  markup line 3'.NL;
$separation[683]['expected'].= '</div>';

$separation[684]['data'] = '-  -  -'.NL;
$separation[684]['data'].= NL;
$separation[684]['data'].= '<div>'.NL;
$separation[684]['data'].= '  markup line 1'.NL;
$separation[684]['data'].= '  markup line 2'.NL;
$separation[684]['data'].= '  markup line 3'.NL;
$separation[684]['data'].= '</div>';
$separation[684]['expected'] = '<hr>';
$separation[684]['expected'].= '<div>'.NL;
$separation[684]['expected'].= '  markup line 1'.NL;
$separation[684]['expected'].= '  markup line 2'.NL;
$separation[684]['expected'].= '  markup line 3'.NL;
$separation[684]['expected'].= '</div>';

$separation[685]['data'] = '-------'.NL;
$separation[685]['data'].= NL;
$separation[685]['data'].= '<div>'.NL;
$separation[685]['data'].= '  markup line 1'.NL;
$separation[685]['data'].= '  markup line 2'.NL;
$separation[685]['data'].= '  markup line 3'.NL;
$separation[685]['data'].= '</div>';
$separation[685]['expected'] = '<hr>';
$separation[685]['expected'].= '<div>'.NL;
$separation[685]['expected'].= '  markup line 1'.NL;
$separation[685]['expected'].= '  markup line 2'.NL;
$separation[685]['expected'].= '  markup line 3'.NL;
$separation[685]['expected'].= '</div>';



# markup near markup
$separation[700]['data'] = '<div>'.NL;
$separation[700]['data'].= '  markup 1 line 1'.NL;
$separation[700]['data'].= '  markup 1 line 2'.NL;
$separation[700]['data'].= '  markup 1 line 3'.NL;
$separation[700]['data'].= '</div>'.NL;
$separation[700]['data'].= '<div>'.NL;
$separation[700]['data'].= '  markup 2 line 1'.NL;
$separation[700]['data'].= '  markup 2 line 2'.NL;
$separation[700]['data'].= '  markup 2 line 3'.NL;
$separation[700]['data'].= '</div>';
$separation[700]['expected'] = '<div>'.NL;
$separation[700]['expected'].= '  markup 1 line 1'.NL;
$separation[700]['expected'].= '  markup 1 line 2'.NL;
$separation[700]['expected'].= '  markup 1 line 3'.NL;
$separation[700]['expected'].= '</div>'.NL;
$separation[700]['expected'].= '<div>'.NL;
$separation[700]['expected'].= '  markup 2 line 1'.NL;
$separation[700]['expected'].= '  markup 2 line 2'.NL;
$separation[700]['expected'].= '  markup 2 line 3'.NL;
$separation[700]['expected'].= '</div>';

$separation[701]['data'] = '<div>'.NL;
$separation[701]['data'].= '  markup 1 line 1'.NL;
$separation[701]['data'].= '  markup 1 line 2'.NL;
$separation[701]['data'].= '  markup 1 line 3'.NL;
$separation[701]['data'].= '</div>'.NL;
$separation[701]['data'].= NL;
$separation[701]['data'].= '<div>'.NL;
$separation[701]['data'].= '  markup 2 line 1'.NL;
$separation[701]['data'].= '  markup 2 line 2'.NL;
$separation[701]['data'].= '  markup 2 line 3'.NL;
$separation[701]['data'].= '</div>';
$separation[701]['expected'] = '<div>'.NL;
$separation[701]['expected'].= '  markup 1 line 1'.NL;
$separation[701]['expected'].= '  markup 1 line 2'.NL;
$separation[701]['expected'].= '  markup 1 line 3'.NL;
$separation[701]['expected'].= '</div>';
$separation[701]['expected'].= '<div>'.NL;
$separation[701]['expected'].= '  markup 2 line 1'.NL;
$separation[701]['expected'].= '  markup 2 line 2'.NL;
$separation[701]['expected'].= '  markup 2 line 3'.NL;
$separation[701]['expected'].= '</div>';

# markup near header
$separation[710]['data'] = '<div>'.NL;
$separation[710]['data'].= '  markup line 1'.NL;
$separation[710]['data'].= '  markup line 2'.NL;
$separation[710]['data'].= '  markup line 3'.NL;
$separation[710]['data'].= '</div>'.NL;
$separation[710]['data'].= '# Title H1 (atx-style)';
$separation[710]['expected'] = '<div>'.NL;
$separation[710]['expected'].= '  markup line 1'.NL;
$separation[710]['expected'].= '  markup line 2'.NL;
$separation[710]['expected'].= '  markup line 3'.NL;
$separation[710]['expected'].= '</div>'.NL;
$separation[710]['expected'].= '# Title H1 (atx-style)';

$separation[711]['data'] = '<div>'.NL;
$separation[711]['data'].= '  markup line 1'.NL;
$separation[711]['data'].= '  markup line 2'.NL;
$separation[711]['data'].= '  markup line 3'.NL;
$separation[711]['data'].= '</div>'.NL;
$separation[711]['data'].= NL;
$separation[711]['data'].= '# Title H1 (atx-style)';
$separation[711]['expected'] = '<div>'.NL;
$separation[711]['expected'].= '  markup line 1'.NL;
$separation[711]['expected'].= '  markup line 2'.NL;
$separation[711]['expected'].= '  markup line 3'.NL;
$separation[711]['expected'].= '</div>';
$separation[711]['expected'].= '<h1>Title H1 (atx-style)</h1>';

$separation[712]['data'] = '<div>'.NL;
$separation[712]['data'].= '  markup line 1'.NL;
$separation[712]['data'].= '  markup line 2'.NL;
$separation[712]['data'].= '  markup line 3'.NL;
$separation[712]['data'].= '</div>'.NL;
$separation[712]['data'].= 'Title H1 (Setext-style)'.NL;
$separation[712]['data'].= '=======================';
$separation[712]['expected'] = '<div>'.NL;
$separation[712]['expected'].= '  markup line 1'.NL;
$separation[712]['expected'].= '  markup line 2'.NL;
$separation[712]['expected'].= '  markup line 3'.NL;
$separation[712]['expected'].= '</div>'.NL;
$separation[712]['expected'].= 'Title H1 (Setext-style)'.NL;
$separation[712]['expected'].= '=======================';

$separation[713]['data'] = '<div>'.NL;
$separation[713]['data'].= '  markup line 1'.NL;
$separation[713]['data'].= '  markup line 2'.NL;
$separation[713]['data'].= '  markup line 3'.NL;
$separation[713]['data'].= '</div>'.NL;
$separation[713]['data'].= NL;
$separation[713]['data'].= 'Title H1 (Setext-style)'.NL;
$separation[713]['data'].= '=======================';
$separation[713]['expected'] = '<div>'.NL;
$separation[713]['expected'].= '  markup line 1'.NL;
$separation[713]['expected'].= '  markup line 2'.NL;
$separation[713]['expected'].= '  markup line 3'.NL;
$separation[713]['expected'].= '</div>';
$separation[713]['expected'].= '<h1>Title H1 (Setext-style)</h1>';

# markup near paragraph
$separation[720]['data'] = '<div>'.NL;
$separation[720]['data'].= '  markup line 1'.NL;
$separation[720]['data'].= '  markup line 2'.NL;
$separation[720]['data'].= '  markup line 3'.NL;
$separation[720]['data'].= '</div>'.NL;
$separation[720]['data'].= 'paragraph line 1'.NL;
$separation[720]['data'].= 'paragraph line 2'.NL;
$separation[720]['data'].= 'paragraph line 3';
$separation[720]['expected'] = '<div>'.NL;
$separation[720]['expected'].= '  markup line 1'.NL;
$separation[720]['expected'].= '  markup line 2'.NL;
$separation[720]['expected'].= '  markup line 3'.NL;
$separation[720]['expected'].= '</div>'.NL;
$separation[720]['expected'].= 'paragraph line 1'.NL;
$separation[720]['expected'].= 'paragraph line 2'.NL;
$separation[720]['expected'].= 'paragraph line 3';

$separation[721]['data'] = '<div>'.NL;
$separation[721]['data'].= '  markup line 1'.NL;
$separation[721]['data'].= '  markup line 2'.NL;
$separation[721]['data'].= '  markup line 3'.NL;
$separation[721]['data'].= '</div>'.NL;
$separation[721]['data'].= NL;
$separation[721]['data'].= 'paragraph line 1'.NL;
$separation[721]['data'].= 'paragraph line 2'.NL;
$separation[721]['data'].= 'paragraph line 3';
$separation[721]['expected'] = '<div>'.NL;
$separation[721]['expected'].= '  markup line 1'.NL;
$separation[721]['expected'].= '  markup line 2'.NL;
$separation[721]['expected'].= '  markup line 3'.NL;
$separation[721]['expected'].= '</div>';
$separation[721]['expected'].= '<p>';
$separation[721]['expected'].=   'paragraph line 1'.NL;
$separation[721]['expected'].=   'paragraph line 2'.NL;
$separation[721]['expected'].=   'paragraph line 3';
$separation[721]['expected'].= '</p>';

# markup near list
$separation[730]['data'] = '<div>'.NL;
$separation[730]['data'].= '  markup line 1'.NL;
$separation[730]['data'].= '  markup line 2'.NL;
$separation[730]['data'].= '  markup line 3'.NL;
$separation[730]['data'].= '</div>'.NL;
$separation[730]['data'].= '* list item 1'.NL;
$separation[730]['data'].= '* list item 2'.NL;
$separation[730]['data'].= '* list item 3';
$separation[730]['expected'] = '<div>'.NL;
$separation[730]['expected'].= '  markup line 1'.NL;
$separation[730]['expected'].= '  markup line 2'.NL;
$separation[730]['expected'].= '  markup line 3'.NL;
$separation[730]['expected'].= '</div>'.NL;
$separation[730]['expected'].= '* list item 1'.NL;
$separation[730]['expected'].= '* list item 2'.NL;
$separation[730]['expected'].= '* list item 3';

$separation[731]['data'] = '<div>'.NL;
$separation[731]['data'].= '  markup line 1'.NL;
$separation[731]['data'].= '  markup line 2'.NL;
$separation[731]['data'].= '  markup line 3'.NL;
$separation[731]['data'].= '</div>'.NL;
$separation[731]['data'].= NL;
$separation[731]['data'].= '* list item 1'.NL;
$separation[731]['data'].= '* list item 2'.NL;
$separation[731]['data'].= '* list item 3';
$separation[731]['expected'] = '<div>'.NL;
$separation[731]['expected'].= '  markup line 1'.NL;
$separation[731]['expected'].= '  markup line 2'.NL;
$separation[731]['expected'].= '  markup line 3'.NL;
$separation[731]['expected'].= '</div>';
$separation[731]['expected'].= '<ul>';
$separation[731]['expected'].=   '<li>list item 1</li>';
$separation[731]['expected'].=   '<li>list item 2</li>';
$separation[731]['expected'].=   '<li>list item 3</li>';
$separation[731]['expected'].= '</ul>';

# markup near code
$separation[740]['data'] = '<div>'.NL;
$separation[740]['data'].= '  markup line 1'.NL;
$separation[740]['data'].= '  markup line 2'.NL;
$separation[740]['data'].= '  markup line 3'.NL;
$separation[740]['data'].= '</div>'.NL;
$separation[740]['data'].= '    code line 1'.NL;
$separation[740]['data'].= '         code line 2'.NL;
$separation[740]['data'].= '    code line 3';
$separation[740]['expected'] = '<div>'.NL;
$separation[740]['expected'].= '  markup line 1'.NL;
$separation[740]['expected'].= '  markup line 2'.NL;
$separation[740]['expected'].= '  markup line 3'.NL;
$separation[740]['expected'].= '</div>'.NL;
$separation[740]['expected'].= '    code line 1'.NL;
$separation[740]['expected'].= '         code line 2'.NL;
$separation[740]['expected'].= '    code line 3';

$separation[741]['data'] = '<div>'.NL;
$separation[741]['data'].= '  markup line 1'.NL;
$separation[741]['data'].= '  markup line 2'.NL;
$separation[741]['data'].= '  markup line 3'.NL;
$separation[741]['data'].= '</div>'.NL;
$separation[741]['data'].= NL;
$separation[741]['data'].= '    code line 1'.NL;
$separation[741]['data'].= '         code line 2'.NL;
$separation[741]['data'].= '    code line 3';
$separation[741]['expected'] = '<div>'.NL;
$separation[741]['expected'].= '  markup line 1'.NL;
$separation[741]['expected'].= '  markup line 2'.NL;
$separation[741]['expected'].= '  markup line 3'.NL;
$separation[741]['expected'].= '</div>';
$separation[741]['expected'].= '<pre>';
$separation[741]['expected'].=   '<code>';
$separation[741]['expected'].=     'code line 1'.NL;
$separation[741]['expected'].=       '     code line 2'.NL;
$separation[741]['expected'].=     'code line 3';
$separation[741]['expected'].=   '</code>';
$separation[741]['expected'].= '</pre>';

# markup near blockquote
$separation[750]['data'] = '<div>'.NL;
$separation[750]['data'].= '  markup line 1'.NL;
$separation[750]['data'].= '  markup line 2'.NL;
$separation[750]['data'].= '  markup line 3'.NL;
$separation[750]['data'].= '</div>'.NL;
$separation[750]['data'].= '> blockquote line 1'.NL;
$separation[750]['data'].= '> blockquote line 2'.NL;
$separation[750]['data'].= '> blockquote line 3';
$separation[750]['expected'] = '<div>'.NL;
$separation[750]['expected'].= '  markup line 1'.NL;
$separation[750]['expected'].= '  markup line 2'.NL;
$separation[750]['expected'].= '  markup line 3'.NL;
$separation[750]['expected'].= '</div>'.NL;
$separation[750]['expected'].= '> blockquote line 1'.NL;
$separation[750]['expected'].= '> blockquote line 2'.NL;
$separation[750]['expected'].= '> blockquote line 3';

$separation[751]['data'] = '<div>'.NL;
$separation[751]['data'].= '  markup line 1'.NL;
$separation[751]['data'].= '  markup line 2'.NL;
$separation[751]['data'].= '  markup line 3'.NL;
$separation[751]['data'].= '</div>'.NL;
$separation[751]['data'].= NL;
$separation[751]['data'].= '> blockquote line 1'.NL;
$separation[751]['data'].= '> blockquote line 2'.NL;
$separation[751]['data'].= '> blockquote line 3';
$separation[751]['expected'] = '<div>'.NL;
$separation[751]['expected'].= '  markup line 1'.NL;
$separation[751]['expected'].= '  markup line 2'.NL;
$separation[751]['expected'].= '  markup line 3'.NL;
$separation[751]['expected'].= '</div>';
$separation[751]['expected'].= '<blockquote>';
$separation[751]['expected'].=   '<p>';
$separation[751]['expected'].=     'blockquote line 1'.NL;
$separation[751]['expected'].=     'blockquote line 2'.NL;
$separation[751]['expected'].=     'blockquote line 3';
$separation[751]['expected'].=   '</p>';
$separation[751]['expected'].= '</blockquote>';

# markup near hr
$separation[760]['data'] = '<div>'.NL;
$separation[760]['data'].= '  markup line 1'.NL;
$separation[760]['data'].= '  markup line 2'.NL;
$separation[760]['data'].= '  markup line 3'.NL;
$separation[760]['data'].= '</div>'.NL;
$separation[760]['data'].= '*  *  *';
$separation[760]['expected'] = '<div>'.NL;
$separation[760]['expected'].= '  markup line 1'.NL;
$separation[760]['expected'].= '  markup line 2'.NL;
$separation[760]['expected'].= '  markup line 3'.NL;
$separation[760]['expected'].= '</div>'.NL;
$separation[760]['expected'].= '*  *  *';

$separation[761]['data'] = '<div>'.NL;
$separation[761]['data'].= '  markup line 1'.NL;
$separation[761]['data'].= '  markup line 2'.NL;
$separation[761]['data'].= '  markup line 3'.NL;
$separation[761]['data'].= '</div>'.NL;
$separation[761]['data'].= '-  -  -';
$separation[761]['expected'] = '<div>'.NL;
$separation[761]['expected'].= '  markup line 1'.NL;
$separation[761]['expected'].= '  markup line 2'.NL;
$separation[761]['expected'].= '  markup line 3'.NL;
$separation[761]['expected'].= '</div>'.NL;
$separation[761]['expected'].= '-  -  -';

$separation[762]['data'] = '<div>'.NL;
$separation[762]['data'].= '  markup line 1'.NL;
$separation[762]['data'].= '  markup line 2'.NL;
$separation[762]['data'].= '  markup line 3'.NL;
$separation[762]['data'].= '</div>'.NL;
$separation[762]['data'].= '-------';
$separation[762]['expected'] = '<div>'.NL;
$separation[762]['expected'].= '  markup line 1'.NL;
$separation[762]['expected'].= '  markup line 2'.NL;
$separation[762]['expected'].= '  markup line 3'.NL;
$separation[762]['expected'].= '</div>'.NL;
$separation[762]['expected'].= '-------';

$separation[763]['data'] = '<div>'.NL;
$separation[763]['data'].= '  markup line 1'.NL;
$separation[763]['data'].= '  markup line 2'.NL;
$separation[763]['data'].= '  markup line 3'.NL;
$separation[763]['data'].= '</div>'.NL;
$separation[763]['data'].= NL;
$separation[763]['data'].= '*  *  *';
$separation[763]['expected'] = '<div>'.NL;
$separation[763]['expected'].= '  markup line 1'.NL;
$separation[763]['expected'].= '  markup line 2'.NL;
$separation[763]['expected'].= '  markup line 3'.NL;
$separation[763]['expected'].= '</div>';
$separation[763]['expected'].= '<hr>';

$separation[764]['data'] = '<div>'.NL;
$separation[764]['data'].= '  markup line 1'.NL;
$separation[764]['data'].= '  markup line 2'.NL;
$separation[764]['data'].= '  markup line 3'.NL;
$separation[764]['data'].= '</div>'.NL;
$separation[764]['data'].= NL;
$separation[764]['data'].= '-  -  -';
$separation[764]['expected'] = '<div>'.NL;
$separation[764]['expected'].= '  markup line 1'.NL;
$separation[764]['expected'].= '  markup line 2'.NL;
$separation[764]['expected'].= '  markup line 3'.NL;
$separation[764]['expected'].= '</div>';
$separation[764]['expected'].= '<hr>';

$separation[765]['data'] = '<div>'.NL;
$separation[765]['data'].= '  markup line 1'.NL;
$separation[765]['data'].= '  markup line 2'.NL;
$separation[765]['data'].= '  markup line 3'.NL;
$separation[765]['data'].= '</div>'.NL;
$separation[765]['data'].= NL;
$separation[765]['data'].= '-------';
$separation[765]['expected'] = '<div>'.NL;
$separation[765]['expected'].= '  markup line 1'.NL;
$separation[765]['expected'].= '  markup line 2'.NL;
$separation[765]['expected'].= '  markup line 3'.NL;
$separation[765]['expected'].= '</div>';
$separation[765]['expected'].= '<hr>';



###################
### combination ###
###################


# header (atx) with markup
$combination[100]['data'] = '# <a href="http://example.com">link</a>';
$combination[100]['expected'] = '<h1>';
$combination[100]['expected'].=   '<a href="http://example.com">link</a>';
$combination[100]['expected'].= '</h1>';

$combination[101]['data'] = '# <x-tag data-attribute="true">data</x-tag>';
$combination[101]['expected'] = '<h1>';
$combination[101]['expected'].=   '<x-tag data-attribute="true">data</x-tag>';
$combination[101]['expected'].= '</h1>';

$combination[102]['data'] = '# <div data-attribute="true">data</div>';
$combination[102]['expected'] = '<h1>';
$combination[102]['expected'].=   '<div data-attribute="true">data</div>';
$combination[102]['expected'].= '</h1>';

# header (Setext) with header (atx)
$combination[200]['data'] = '# Title H1'.NL;
$combination[200]['data'].= '----------';
$combination[200]['expected'] = '<h1>Title H1</h1>';
$combination[200]['expected'].= '<hr>';

# header (Setext) with paragraph
$combination[210]['data'] = 'paragraph line 1'.NL;
$combination[210]['data'].= 'paragraph line 2'.NL;
$combination[210]['data'].= 'paragraph line 3'.NL;
$combination[210]['data'].= '----------------';
$combination[210]['expected'] = '<h2>';
$combination[210]['expected'].=   'paragraph line 1'.NL;
$combination[210]['expected'].=   'paragraph line 2'.NL;
$combination[210]['expected'].=   'paragraph line 3';
$combination[210]['expected'].= '</h2>';

# header (Setext) with list item
$combination[220]['data'] = '- list item'.NL;
$combination[220]['data'].= '-----------';
$combination[220]['expected'] = '<ul>';
$combination[220]['expected'].=   '<li>list item</li>';
$combination[220]['expected'].= '</ul>';
$combination[220]['expected'].= '<hr>';

$combination[221]['data'] = '- list item 1'.NL;
$combination[221]['data'].= '- list item 2'.NL;
$combination[221]['data'].= '- list item 3'.NL;
$combination[221]['data'].= '-------------';
$combination[221]['expected'] = '<ul>';
$combination[221]['expected'].=   '<li>list item 1</li>';
$combination[221]['expected'].=   '<li>list item 2</li>';
$combination[221]['expected'].=   '<li>list item 3</li>';
$combination[221]['expected'].= '</ul>';
$combination[221]['expected'].= '<hr>';

# header (Setext) with code
$combination[230]['data'] = '    code line 1'.NL;
$combination[230]['data'].= '         code line 2'.NL;
$combination[230]['data'].= '    code line 3'.NL;
$combination[230]['data'].= '---------------';
$combination[230]['expected'] = '<pre>';
$combination[230]['expected'].=   '<code>';
$combination[230]['expected'].=     'code line 1'.NL;
$combination[230]['expected'].=       '     code line 2'.NL;
$combination[230]['expected'].=     'code line 3';
$combination[230]['expected'].=   '</code>';
$combination[230]['expected'].= '</pre>';
$combination[230]['expected'].= '<hr>';

# header (Setext) with blockquote
$combination[240]['data'] = '> blockquote line 1'.NL;
$combination[240]['data'].= '> blockquote line 2'.NL;
$combination[240]['data'].= '> blockquote line 3'.NL;
$combination[240]['data'].= '-------------------';
$combination[240]['expected'] = '<blockquote>';
$combination[240]['expected'].=   '<p>';
$combination[240]['expected'].=     'blockquote line 1'.NL;
$combination[240]['expected'].=     'blockquote line 2'.NL;
$combination[240]['expected'].=     'blockquote line 3';
$combination[240]['expected'].=   '</p>';
$combination[240]['expected'].= '</blockquote>';
$combination[240]['expected'].= '<hr>';

# header (Setext) with hr
$combination[250]['data'] = '*  *  *'.NL;
$combination[250]['data'].= '-------';
$combination[250]['expected'] = '<hr>';
$combination[250]['expected'].= '<hr>';

# header (Setext) with markup
$combination[260]['data'] = '<a href="http://example.com">link</a>'.NL;
$combination[260]['data'].= '-------------------------------------';
$combination[260]['expected'] = '<h2>';
$combination[260]['expected'].=   '<a href="http://example.com">link</a>';
$combination[260]['expected'].= '</h2>';

$combination[261]['data'] = '<x-tag data-attribute="true">data</x-tag>'.NL;
$combination[261]['data'].= '-----------------------------------------';
$combination[261]['expected'] = '<h2>';
$combination[261]['expected'].=   '<x-tag data-attribute="true">data</x-tag>';
$combination[261]['expected'].= '</h2>';

$combination[262]['data'] = '<div data-attribute="true">data</div>'.NL;
$combination[262]['data'].= '-------------------------------------';
$combination[262]['expected'] = '<div data-attribute="true">data</div>'.NL;
$combination[262]['expected'].= '-------------------------------------';



# paragraph with markup
$combination[300]['data'] = 'paragraph line 1'.NL;
$combination[300]['data'].= '<a href="http://example.com">link</a>'.NL;
$combination[300]['data'].= 'paragraph line 3';
$combination[300]['expected'] = '<p>';
$combination[300]['expected'].=   'paragraph line 1'.NL;
$combination[300]['expected'].=   '<a href="http://example.com">link</a>'.NL;
$combination[300]['expected'].=   'paragraph line 3';
$combination[300]['expected'].= '</p>';

$combination[301]['data'] = 'paragraph line 1'.NL;
$combination[301]['data'].= '<x-tag data-attribute="true">data</x-tag>'.NL;
$combination[301]['data'].= 'paragraph line 3';
$combination[301]['expected'] = '<p>';
$combination[301]['expected'].=   'paragraph line 1'.NL;
$combination[301]['expected'].=   '<x-tag data-attribute="true">data</x-tag>'.NL;
$combination[301]['expected'].=   'paragraph line 3';
$combination[301]['expected'].= '</p>';

$combination[302]['data'] = 'paragraph line 1'.NL;
$combination[302]['data'].= '<div data-attribute="true">data</div>'.NL;
$combination[302]['data'].= 'paragraph line 3';
$combination[302]['expected'] = '<p>';
$combination[302]['expected'].=   'paragraph line 1';
$combination[302]['expected'].= '</p>';
$combination[302]['expected'].= '<div data-attribute="true">data</div>'.NL;
$combination[302]['expected'].= 'paragraph line 3';



# list with header (atx)
$combination[400]['data'] = '- list item 1'.NL;
$combination[400]['data'].= '# Title H1 (atx-style)'.NL;
$combination[400]['data'].= '- list item 2'.NL;
$combination[400]['data'].= '- list item 3';
$combination[400]['expected'] = '<ul>';
$combination[400]['expected'].=   '<li>list item 1</li>';
$combination[400]['expected'].= '</ul>';
$combination[400]['expected'].= '<h1>Title H1 (atx-style)</h1>';
$combination[400]['expected'].= '<ul>';
$combination[400]['expected'].=   '<li>list item 2</li>';
$combination[400]['expected'].=   '<li>list item 3</li>';
$combination[400]['expected'].= '</ul>';

$combination[401]['data'] = '- list item 1'.NL;
$combination[401]['data'].= '   # Title H1 (atx-style)'.NL;
$combination[401]['data'].= '- list item 2'.NL;
$combination[401]['data'].= '- list item 3';
$combination[401]['expected'] = '<ul>';
$combination[401]['expected'].=   '<li>list item 1';
$combination[401]['expected'].=     '<h1>Title H1 (atx-style)</h1>';
$combination[401]['expected'].=   '</li>';
$combination[401]['expected'].=   '<li>list item 2</li>';
$combination[401]['expected'].=   '<li>list item 3</li>';
$combination[401]['expected'].= '</ul>';

# list with header (Setext)
$combination[410]['data'] = '- list item 1'.NL;
$combination[410]['data'].= 'Title H1 (Setext-style)'.NL;
$combination[410]['data'].= '======================='.NL;
$combination[410]['data'].= '- list item 2'.NL;
$combination[410]['data'].= '- list item 3';
$combination[410]['expected'] = '<ul>';
$combination[410]['expected'].=   '<li>list item 1'.NL;
$combination[410]['expected'].=     'Title H1 (Setext-style)'.NL;
$combination[410]['expected'].=     '=======================</li>';
$combination[410]['expected'].=   '<li>list item 2</li>';
$combination[410]['expected'].=   '<li>list item 3</li>';
$combination[410]['expected'].= '</ul>';

$combination[411]['data'] = '- list item 1'.NL;
$combination[411]['data'].= '  Title H1 (Setext-style)'.NL;
$combination[411]['data'].= '  ======================='.NL;
$combination[411]['data'].= '- list item 2'.NL;
$combination[411]['data'].= '- list item 3';
$combination[411]['expected'] = '<ul>';
$combination[411]['expected'].=   '<li>list item 1'.NL;
$combination[411]['expected'].=     'Title H1 (Setext-style)'.NL;
$combination[411]['expected'].=     '=======================</li>';
$combination[411]['expected'].=   '<li>list item 2</li>';
$combination[411]['expected'].=   '<li>list item 3</li>';
$combination[411]['expected'].= '</ul>';

# list with paragraph
$combination[420]['data'] = '- list item 1'.NL;
$combination[420]['data'].= 'paragraph line 1'.NL;
$combination[420]['data'].= 'paragraph line 2'.NL;
$combination[420]['data'].= 'paragraph line 3'.NL;
$combination[420]['data'].= '- list item 2'.NL;
$combination[420]['data'].= '- list item 3';
$combination[420]['expected'] = '<ul>';
$combination[420]['expected'].=   '<li>list item 1'.NL;
$combination[420]['expected'].=     'paragraph line 1'.NL;
$combination[420]['expected'].=     'paragraph line 2'.NL;
$combination[420]['expected'].=     'paragraph line 3</li>';
$combination[420]['expected'].=   '<li>list item 2</li>';
$combination[420]['expected'].=   '<li>list item 3</li>';
$combination[420]['expected'].= '</ul>';

$combination[421]['data'] = '- list item 1'.NL;
$combination[421]['data'].= '          paragraph line 1'.NL;
$combination[421]['data'].= '          paragraph line 2'.NL;
$combination[421]['data'].= '          paragraph line 3'.NL;
$combination[421]['data'].= '- list item 2'.NL;
$combination[421]['data'].= '- list item 3';
$combination[421]['expected'] = '<ul>';
$combination[421]['expected'].=   '<li>list item 1'.NL;
$combination[421]['expected'].=     'paragraph line 1'.NL;
$combination[421]['expected'].=     'paragraph line 2'.NL;
$combination[421]['expected'].=     'paragraph line 3</li>';
$combination[421]['expected'].=   '<li>list item 2</li>';
$combination[421]['expected'].=   '<li>list item 3</li>';
$combination[421]['expected'].= '</ul>';

$combination[422]['data'] = '- list item 1'.NL;
$combination[422]['data'].= 'paragraph line 1'.NL;
$combination[422]['data'].= 'paragraph line 2'.NL;
$combination[422]['data'].= 'paragraph line 3'.NL;
$combination[422]['data'].= NL;
$combination[422]['data'].= '- list item 2'.NL;
$combination[422]['data'].= '- list item 3';
$combination[422]['expected'] = '<ul>';
$combination[422]['expected'].=   '<li>list item 1'.NL;
$combination[422]['expected'].=     'paragraph line 1'.NL;
$combination[422]['expected'].=     'paragraph line 2'.NL;
$combination[422]['expected'].=     'paragraph line 3</li>';
$combination[422]['expected'].=   '<li>list item 2</li>';
$combination[422]['expected'].=   '<li>list item 3</li>';
$combination[422]['expected'].= '</ul>';

$combination[423]['data'] = '- list item 1'.NL;
$combination[423]['data'].= '          paragraph line 1'.NL;
$combination[423]['data'].= '          paragraph line 2'.NL;
$combination[423]['data'].= '          paragraph line 3'.NL;
$combination[423]['data'].= NL;
$combination[423]['data'].= '- list item 2'.NL;
$combination[423]['data'].= '- list item 3';
$combination[423]['expected'] = '<ul>';
$combination[423]['expected'].=   '<li>list item 1'.NL;
$combination[423]['expected'].=     'paragraph line 1'.NL;
$combination[423]['expected'].=     'paragraph line 2'.NL;
$combination[423]['expected'].=     'paragraph line 3</li>';
$combination[423]['expected'].=   '<li>list item 2</li>';
$combination[423]['expected'].=   '<li>list item 3</li>';
$combination[423]['expected'].= '</ul>';

$combination[424]['data'] = '- list item 1'.NL;
$combination[424]['data'].= NL;
$combination[424]['data'].= 'paragraph line 1'.NL;
$combination[424]['data'].= 'paragraph line 2'.NL;
$combination[424]['data'].= 'paragraph line 3'.NL;
$combination[424]['data'].= '- list item 2'.NL;
$combination[424]['data'].= '- list item 3';
$combination[424]['expected'] = '<ul>';
$combination[424]['expected'].=   '<li>list item 1</li>';
$combination[424]['expected'].= '</ul>';
$combination[424]['expected'].= '<p>';
$combination[424]['expected'].=   'paragraph line 1'.NL;
$combination[424]['expected'].=   'paragraph line 2'.NL;
$combination[424]['expected'].=   'paragraph line 3';
$combination[424]['expected'].= '</p>';
$combination[424]['expected'].= '<ul>';
$combination[424]['expected'].=   '<li>list item 2</li>';
$combination[424]['expected'].=   '<li>list item 3</li>';
$combination[424]['expected'].= '</ul>';

$combination[425]['data'] = '- list item 1'.NL;
$combination[425]['data'].= NL;
$combination[425]['data'].= '  paragraph line 1'.NL;
$combination[425]['data'].= '  paragraph line 2'.NL;
$combination[425]['data'].= '  paragraph line 3'.NL;
$combination[425]['data'].= '- list item 2'.NL;
$combination[425]['data'].= '- list item 3';
$combination[425]['expected'] = '<ul>';
$combination[425]['expected'].=   '<li>list item 1';
$combination[425]['expected'].=     '<p>';
$combination[425]['expected'].=       'paragraph line 1'.NL;
$combination[425]['expected'].=       'paragraph line 2'.NL;
$combination[425]['expected'].=       'paragraph line 3';
$combination[425]['expected'].=     '</p>';
$combination[425]['expected'].=   '</li>';
$combination[425]['expected'].=   '<li>list item 2</li>';
$combination[425]['expected'].=   '<li>list item 3</li>';
$combination[425]['expected'].= '</ul>';

$combination[426]['data'] = '- list item 1'.NL;
$combination[426]['data'].= NL;
$combination[426]['data'].= '      paragraph line 1'.NL;
$combination[426]['data'].= '      paragraph line 2'.NL;
$combination[426]['data'].= '      paragraph line 3'.NL;
$combination[426]['data'].= '- list item 2'.NL;
$combination[426]['data'].= '- list item 3';
$combination[426]['expected'] = '<ul>';
$combination[426]['expected'].=   '<li>list item 1';
$combination[426]['expected'].=     '<pre>';
$combination[426]['expected'].=       '<code>';
$combination[426]['expected'].=         'paragraph line 1'.NL;
$combination[426]['expected'].=         'paragraph line 2'.NL;
$combination[426]['expected'].=         'paragraph line 3';
$combination[426]['expected'].=       '</code>';
$combination[426]['expected'].=     '</pre>';
$combination[426]['expected'].=   '</li>';
$combination[426]['expected'].=   '<li>list item 2</li>';
$combination[426]['expected'].=   '<li>list item 3</li>';
$combination[426]['expected'].= '</ul>';

# list with code
$combination[430]['data'] = '- list item 1'.NL;
$combination[430]['data'].= NL;
$combination[430]['data'].= '      code line 1'.NL;
$combination[430]['data'].= '           code line 2'.NL;
$combination[430]['data'].= '      code line 3'.NL;
$combination[430]['data'].= '- list item 2'.NL;
$combination[430]['data'].= '- list item 3';
$combination[430]['expected'] = '<ul>';
$combination[430]['expected'].=   '<li>list item 1';
$combination[430]['expected'].=     '<pre>';
$combination[430]['expected'].=       '<code>';
$combination[430]['expected'].=         'code line 1'.NL;
$combination[430]['expected'].=         '     code line 2'.NL;
$combination[430]['expected'].=         'code line 3';
$combination[430]['expected'].=       '</code>';
$combination[430]['expected'].=     '</pre>';
$combination[430]['expected'].=   '</li>';
$combination[430]['expected'].=   '<li>list item 2</li>';
$combination[430]['expected'].=   '<li>list item 3</li>';
$combination[430]['expected'].= '</ul>';

# list with blockquote
$combination[440]['data'] = '- list item 1'.NL;
$combination[440]['data'].= '> blockquote line 1'.NL;
$combination[440]['data'].= '> blockquote line 2'.NL;
$combination[440]['data'].= '> blockquote line 3'.NL;
$combination[440]['data'].= '- list item 2'.NL;
$combination[440]['data'].= '- list item 3';
$combination[440]['expected'] = '<ul>';
$combination[440]['expected'].=   '<li>list item 1</li>';
$combination[440]['expected'].= '</ul>';
$combination[440]['expected'].= '<blockquote>';
$combination[440]['expected'].=   '<p>';
$combination[440]['expected'].=     'blockquote line 1'.NL;
$combination[440]['expected'].=     'blockquote line 2'.NL;
$combination[440]['expected'].=     'blockquote line 3';
$combination[440]['expected'].=   '</p>';
$combination[440]['expected'].= '</blockquote>';
$combination[440]['expected'].= '<ul>';
$combination[440]['expected'].=   '<li>list item 2</li>';
$combination[440]['expected'].=   '<li>list item 3</li>';
$combination[440]['expected'].= '</ul>';

$combination[441]['data'] = '- list item 1'.NL;
$combination[441]['data'].= '  > blockquote line 1'.NL;
$combination[441]['data'].= '  > blockquote line 2'.NL;
$combination[441]['data'].= '  > blockquote line 3'.NL;
$combination[441]['data'].= '- list item 2'.NL;
$combination[441]['data'].= '- list item 3';
$combination[441]['expected'] = '<ul>';
$combination[441]['expected'].=   '<li>list item 1';
$combination[441]['expected'].=     '<blockquote>';
$combination[441]['expected'].=       '<p>';
$combination[441]['expected'].=         'blockquote line 1'.NL;
$combination[441]['expected'].=         'blockquote line 2'.NL;
$combination[441]['expected'].=         'blockquote line 3';
$combination[441]['expected'].=       '</p>';
$combination[441]['expected'].=     '</blockquote>';
$combination[441]['expected'].=   '</li>';
$combination[441]['expected'].=   '<li>list item 2</li>';
$combination[441]['expected'].=   '<li>list item 3</li>';
$combination[441]['expected'].= '</ul>';

$combination[442]['data'] = '- list item 1'.NL;
$combination[442]['data'].= '      > blockquote line 1'.NL;
$combination[442]['data'].= '        > blockquote line 2'.NL;
$combination[442]['data'].= '      > blockquote line 3'.NL;
$combination[442]['data'].= '- list item 2'.NL;
$combination[442]['data'].= '- list item 3';
$combination[442]['expected'] = '<ul>';
$combination[442]['expected'].=   '<li>list item 1'.NL;
$combination[442]['expected'].=     '&gt; blockquote line 1'.NL;
$combination[442]['expected'].=     '  &gt; blockquote line 2'.NL;
$combination[442]['expected'].=     '&gt; blockquote line 3</li>';
$combination[442]['expected'].=   '<li>list item 2</li>';
$combination[442]['expected'].=   '<li>list item 3</li>';
$combination[442]['expected'].= '</ul>';

$combination[443]['data'] = '- list item 1'.NL;
$combination[443]['data'].= NL;
$combination[443]['data'].= '      > blockquote line 1'.NL;
$combination[443]['data'].= '        > blockquote line 2'.NL;
$combination[443]['data'].= '      > blockquote line 3'.NL;
$combination[443]['data'].= '- list item 2'.NL;
$combination[443]['data'].= '- list item 3';
$combination[443]['expected'] = '<ul>';
$combination[443]['expected'].=   '<li>list item 1';
$combination[443]['expected'].=     '<pre>';
$combination[443]['expected'].=       '<code>';
$combination[443]['expected'].=         '&gt; blockquote line 1'.NL;
$combination[443]['expected'].=         '  &gt; blockquote line 2'.NL;
$combination[443]['expected'].=         '&gt; blockquote line 3';
$combination[443]['expected'].=       '</code>';
$combination[443]['expected'].=     '</pre>';
$combination[443]['expected'].=   '</li>';
$combination[443]['expected'].=   '<li>list item 2</li>';
$combination[443]['expected'].=   '<li>list item 3</li>';
$combination[443]['expected'].= '</ul>';

# list with hr
$combination[450]['data'] = '- list item 1'.NL;
$combination[450]['data'].= '*  *  *'.NL;
$combination[450]['data'].= '- list item 2'.NL;
$combination[450]['data'].= '- list item 3';
$combination[450]['expected'] = '<ul>';
$combination[450]['expected'].=   '<li>list item 1</li>';
$combination[450]['expected'].= '</ul>';
$combination[450]['expected'].= '<hr>';
$combination[450]['expected'].= '<ul>';
$combination[450]['expected'].=   '<li>list item 2</li>';
$combination[450]['expected'].=   '<li>list item 3</li>';
$combination[450]['expected'].= '</ul>';

$combination[451]['data'] = '- list item 1'.NL;
$combination[451]['data'].= '-  -  -'.NL;
$combination[451]['data'].= '- list item 2'.NL;
$combination[451]['data'].= '- list item 3';
$combination[451]['expected'] = '<ul>';
$combination[451]['expected'].=   '<li>list item 1</li>';
$combination[451]['expected'].= '</ul>';
$combination[451]['expected'].= '<hr>';
$combination[451]['expected'].= '<ul>';
$combination[451]['expected'].=   '<li>list item 2</li>';
$combination[451]['expected'].=   '<li>list item 3</li>';
$combination[451]['expected'].= '</ul>';

$combination[452]['data'] = '- list item 1'.NL;
$combination[452]['data'].= '  *  *  *'.NL;
$combination[452]['data'].= '- list item 2'.NL;
$combination[452]['data'].= '- list item 3';
$combination[452]['expected'] = '<ul>';
$combination[452]['expected'].=   '<li>list item 1';
$combination[452]['expected'].=     '<hr>';
$combination[452]['expected'].=   '</li>';
$combination[452]['expected'].=   '<li>list item 2</li>';
$combination[452]['expected'].=   '<li>list item 3</li>';
$combination[452]['expected'].= '</ul>';

$combination[453]['data'] = '- list item 1'.NL;
$combination[453]['data'].= '  -  -  -'.NL;
$combination[453]['data'].= '- list item 2'.NL;
$combination[453]['data'].= '- list item 3';
$combination[453]['expected'] = '<ul>';
$combination[453]['expected'].=   '<li>list item 1';
$combination[453]['expected'].=     '<hr>';
$combination[453]['expected'].=   '</li>';
$combination[453]['expected'].=   '<li>list item 2</li>';
$combination[453]['expected'].=   '<li>list item 3</li>';
$combination[453]['expected'].= '</ul>';

$combination[454]['data'] = '- list item 1'.NL;
$combination[454]['data'].= '      *  *  *'.NL;
$combination[454]['data'].= '- list item 2'.NL;
$combination[454]['data'].= '- list item 3';
$combination[454]['expected'] = '<ul>';
$combination[454]['expected'].=   '<li>list item 1'.NL;
$combination[454]['expected'].=     '&#42;  &#42;  &#42;';
$combination[454]['expected'].=   '</li>';
$combination[454]['expected'].=   '<li>list item 2</li>';
$combination[454]['expected'].=   '<li>list item 3</li>';
$combination[454]['expected'].= '</ul>';

$combination[455]['data'] = '- list item 1'.NL;
$combination[455]['data'].= '      -  -  -'.NL;
$combination[455]['data'].= '- list item 2'.NL;
$combination[455]['data'].= '- list item 3';
$combination[455]['expected'] = '<ul>';
$combination[455]['expected'].=   '<li>list item 1'.NL;
$combination[455]['expected'].=     '&#45;  &#45;  &#45;';
$combination[455]['expected'].=   '</li>';
$combination[455]['expected'].=   '<li>list item 2</li>';
$combination[455]['expected'].=   '<li>list item 3</li>';
$combination[455]['expected'].= '</ul>';

$combination[456]['data'] = '- list item 1'.NL;
$combination[456]['data'].= NL;
$combination[456]['data'].= '      *  *  *'.NL;
$combination[456]['data'].= '- list item 2'.NL;
$combination[456]['data'].= '- list item 3';
$combination[456]['expected'] = '<ul>';
$combination[456]['expected'].=   '<li>list item 1';
$combination[456]['expected'].=     '<pre>';
$combination[456]['expected'].=       '<code>';
$combination[456]['expected'].=         '*  *  *';
$combination[456]['expected'].=       '</code>';
$combination[456]['expected'].=     '</pre>';
$combination[456]['expected'].=   '</li>';
$combination[456]['expected'].=   '<li>list item 2</li>';
$combination[456]['expected'].=   '<li>list item 3</li>';
$combination[456]['expected'].= '</ul>';

$combination[457]['data'] = '- list item 1'.NL;
$combination[457]['data'].= NL;
$combination[457]['data'].= '      -  -  -'.NL;
$combination[457]['data'].= '- list item 2'.NL;
$combination[457]['data'].= '- list item 3';
$combination[457]['expected'] = '<ul>';
$combination[457]['expected'].=   '<li>list item 1';
$combination[457]['expected'].=     '<pre>';
$combination[457]['expected'].=       '<code>';
$combination[457]['expected'].=         '-  -  -';
$combination[457]['expected'].=       '</code>';
$combination[457]['expected'].=     '</pre>';
$combination[457]['expected'].=   '</li>';
$combination[457]['expected'].=   '<li>list item 2</li>';
$combination[457]['expected'].=   '<li>list item 3</li>';
$combination[457]['expected'].= '</ul>';

# list with markup
$combination[460]['data'] = '- list item 1'.NL;
$combination[460]['data'].= '<a href="http://example.com">link</a>'.NL;
$combination[460]['data'].= '- list item 2'.NL;
$combination[460]['data'].= '- list item 3';
$combination[460]['expected'] = '<ul>';
$combination[460]['expected'].=   '<li>list item 1'.NL;
$combination[460]['expected'].=     '<a href="http://example.com">link</a>';
$combination[460]['expected'].=   '</li>';
$combination[460]['expected'].=   '<li>list item 2</li>';
$combination[460]['expected'].=   '<li>list item 3</li>';
$combination[460]['expected'].= '</ul>';

$combination[461]['data'] = '- list item 1'.NL;
$combination[461]['data'].= '<x-tag data-attribute="true">data</x-tag>'.NL;
$combination[461]['data'].= '- list item 2'.NL;
$combination[461]['data'].= '- list item 3';
$combination[461]['expected'] = '<ul>';
$combination[461]['expected'].=   '<li>list item 1'.NL;
$combination[461]['expected'].=     '<x-tag data-attribute="true">data</x-tag>';
$combination[461]['expected'].=   '</li>';
$combination[461]['expected'].=   '<li>list item 2</li>';
$combination[461]['expected'].=   '<li>list item 3</li>';
$combination[461]['expected'].= '</ul>';

$combination[462]['data'] = '- list item 1'.NL;
$combination[462]['data'].= '<div data-attribute="true">data</div>'.NL;
$combination[462]['data'].= '- list item 2'.NL;
$combination[462]['data'].= '- list item 3';
$combination[462]['expected'] = '<ul>';
$combination[462]['expected'].=   '<li>list item 1</li>';
$combination[462]['expected'].= '</ul>';
$combination[462]['expected'].= '<div data-attribute="true">data</div>'.NL;
$combination[462]['expected'].= '- list item 2'.NL;
$combination[462]['expected'].= '- list item 3';

$combination[463]['data'] = '- list item 1'.NL;
$combination[463]['data'].= '  <a href="http://example.com">link</a>'.NL;
$combination[463]['data'].= '- list item 2'.NL;
$combination[463]['data'].= '- list item 3';
$combination[463]['expected'] = '<ul>';
$combination[463]['expected'].=   '<li>list item 1'.NL;
$combination[463]['expected'].=     '<a href="http://example.com">link</a>';
$combination[463]['expected'].=   '</li>';
$combination[463]['expected'].=   '<li>list item 2</li>';
$combination[463]['expected'].=   '<li>list item 3</li>';
$combination[463]['expected'].= '</ul>';

$combination[464]['data'] = '- list item 1'.NL;
$combination[464]['data'].= '  <x-tag data-attribute="true">data</x-tag>'.NL;
$combination[464]['data'].= '- list item 2'.NL;
$combination[464]['data'].= '- list item 3';
$combination[464]['expected'] = '<ul>';
$combination[464]['expected'].=   '<li>list item 1'.NL;
$combination[464]['expected'].=     '<x-tag data-attribute="true">data</x-tag>';
$combination[464]['expected'].=   '</li>';
$combination[464]['expected'].=   '<li>list item 2</li>';
$combination[464]['expected'].=   '<li>list item 3</li>';
$combination[464]['expected'].= '</ul>';

$combination[465]['data'] = '- list item 1'.NL;
$combination[465]['data'].= '  <div data-attribute="true">data</div>'.NL;
$combination[465]['data'].= '- list item 2'.NL;
$combination[465]['data'].= '- list item 3';
$combination[465]['expected'] = '<ul>';
$combination[465]['expected'].=   '<li>list item 1</li>';
$combination[465]['expected'].= '</ul>';
$combination[465]['expected'].= '  <div data-attribute="true">data</div>'.NL;
$combination[465]['expected'].= '- list item 2'.NL;
$combination[465]['expected'].= '- list item 3';

$combination[466]['data'] = '- list item 1'.NL;
$combination[466]['data'].= '      <a href="http://example.com">link</a>'.NL;
$combination[466]['data'].= '- list item 2'.NL;
$combination[466]['data'].= '- list item 3';
$combination[466]['expected'] = '<ul>';
$combination[466]['expected'].=   '<li>list item 1'.NL;
$combination[466]['expected'].=     '<a href="http://example.com">link</a>';
$combination[466]['expected'].=   '</li>';
$combination[466]['expected'].=   '<li>list item 2</li>';
$combination[466]['expected'].=   '<li>list item 3</li>';
$combination[466]['expected'].= '</ul>';

$combination[467]['data'] = '- list item 1'.NL;
$combination[467]['data'].= '      <x-tag data-attribute="true">data</x-tag>'.NL;
$combination[467]['data'].= '- list item 2'.NL;
$combination[467]['data'].= '- list item 3';
$combination[467]['expected'] = '<ul>';
$combination[467]['expected'].=   '<li>list item 1'.NL;
$combination[467]['expected'].=     '<x-tag data-attribute="true">data</x-tag>';
$combination[467]['expected'].=   '</li>';
$combination[467]['expected'].=   '<li>list item 2</li>';
$combination[467]['expected'].=   '<li>list item 3</li>';
$combination[467]['expected'].= '</ul>';

$combination[468]['data'] = '- list item 1'.NL;
$combination[468]['data'].= '      <div data-attribute="true">data</div>'.NL;
$combination[468]['data'].= '- list item 2'.NL;
$combination[468]['data'].= '- list item 3';
$combination[468]['expected'] = '<ul>';
$combination[468]['expected'].=   '<li>list item 1</li>';
$combination[468]['expected'].= '</ul>';
$combination[468]['expected'].= '      <div data-attribute="true">data</div>'.NL;
$combination[468]['expected'].= '- list item 2'.NL;
$combination[468]['expected'].= '- list item 3';

$combination[469]['data'] = '- list item 1'.NL;
$combination[469]['data'].= NL;
$combination[469]['data'].= '<a href="http://example.com">link</a>'.NL;
$combination[469]['data'].= '- list item 2'.NL;
$combination[469]['data'].= '- list item 3';
$combination[469]['expected'] = '<ul>';
$combination[469]['expected'].=   '<li>list item 1</li>';
$combination[469]['expected'].= '</ul>';
$combination[469]['expected'].= '<p>';
$combination[469]['expected'].=   '<a href="http://example.com">link</a>';
$combination[469]['expected'].= '</p>';
$combination[469]['expected'].= '<ul>';
$combination[469]['expected'].=   '<li>list item 2</li>';
$combination[469]['expected'].=   '<li>list item 3</li>';
$combination[469]['expected'].= '</ul>';

$combination[470]['data'] = '- list item 1'.NL;
$combination[470]['data'].= NL;
$combination[470]['data'].= '<x-tag data-attribute="true">data</x-tag>'.NL;
$combination[470]['data'].= '- list item 2'.NL;
$combination[470]['data'].= '- list item 3';
$combination[470]['expected'] = '<ul>';
$combination[470]['expected'].=   '<li>list item 1</li>';
$combination[470]['expected'].= '</ul>';
$combination[470]['expected'].= '<p>';
$combination[470]['expected'].=   '<x-tag data-attribute="true">data</x-tag>';
$combination[470]['expected'].= '</p>';
$combination[470]['expected'].= '<ul>';
$combination[470]['expected'].=   '<li>list item 2</li>';
$combination[470]['expected'].=   '<li>list item 3</li>';
$combination[470]['expected'].= '</ul>';

$combination[471]['data'] = '- list item 1'.NL;
$combination[471]['data'].= NL;
$combination[471]['data'].= '<div data-attribute="true">data</div>'.NL;
$combination[471]['data'].= '- list item 2'.NL;
$combination[471]['data'].= '- list item 3';
$combination[471]['expected'] = '<ul>';
$combination[471]['expected'].=   '<li>list item 1</li>';
$combination[471]['expected'].= '</ul>';
$combination[471]['expected'].= '<div data-attribute="true">data</div>'.NL;
$combination[471]['expected'].= '- list item 2'.NL;
$combination[471]['expected'].= '- list item 3';

$combination[472]['data'] = '- list item 1'.NL;
$combination[472]['data'].= NL;
$combination[472]['data'].= '  <a href="http://example.com">link</a>'.NL;
$combination[472]['data'].= '- list item 2'.NL;
$combination[472]['data'].= '- list item 3';
$combination[472]['expected'] = '<ul>';
$combination[472]['expected'].=   '<li>list item 1';
$combination[472]['expected'].= '<p>';
$combination[472]['expected'].=   '<a href="http://example.com">link</a>';
$combination[472]['expected'].= '</p>';
$combination[472]['expected'].= '</li>';
$combination[472]['expected'].=   '<li>list item 2</li>';
$combination[472]['expected'].=   '<li>list item 3</li>';
$combination[472]['expected'].= '</ul>';

$combination[473]['data'] = '- list item 1'.NL;
$combination[473]['data'].= NL;
$combination[473]['data'].= '  <x-tag data-attribute="true">data</x-tag>'.NL;
$combination[473]['data'].= '- list item 2'.NL;
$combination[473]['data'].= '- list item 3';
$combination[473]['expected'] = '<ul>';
$combination[473]['expected'].=   '<li>list item 1';
$combination[473]['expected'].=     '<p>';
$combination[473]['expected'].=       '<x-tag data-attribute="true">data</x-tag>';
$combination[473]['expected'].=     '</p>';
$combination[473]['expected'].=   '</li>';
$combination[473]['expected'].=   '<li>list item 2</li>';
$combination[473]['expected'].=   '<li>list item 3</li>';
$combination[473]['expected'].= '</ul>';

$combination[474]['data'] = '- list item 1'.NL;
$combination[474]['data'].= NL;
$combination[474]['data'].= '  <div data-attribute="true">data</div>'.NL;
$combination[474]['data'].= '- list item 2'.NL;
$combination[474]['data'].= '- list item 3';
$combination[474]['expected'] = '<ul>';
$combination[474]['expected'].=   '<li>list item 1</li>';
$combination[474]['expected'].= '</ul>';
$combination[474]['expected'].= '  <div data-attribute="true">data</div>'.NL;
$combination[474]['expected'].= '- list item 2'.NL;
$combination[474]['expected'].= '- list item 3';

$combination[475]['data'] = '- list item 1'.NL;
$combination[475]['data'].= NL;
$combination[475]['data'].= '      <a href="http://example.com">link</a>'.NL;
$combination[475]['data'].= '- list item 2'.NL;
$combination[475]['data'].= '- list item 3';
$combination[475]['expected'] = '<ul>';
$combination[475]['expected'].=   '<li>list item 1';
$combination[475]['expected'].=     '<pre>';
$combination[475]['expected'].=       '<code>';
$combination[475]['expected'].=         '&lt;a href=&quot;http://example.com&quot;&gt;link&lt;/a&gt;';
$combination[475]['expected'].=       '</code>';
$combination[475]['expected'].=     '</pre>';
$combination[475]['expected'].=   '</li>';
$combination[475]['expected'].=   '<li>list item 2</li>';
$combination[475]['expected'].=   '<li>list item 3</li>';
$combination[475]['expected'].= '</ul>';

$combination[476]['data'] = '- list item 1'.NL;
$combination[476]['data'].= NL;
$combination[476]['data'].= '      <x-tag data-attribute="true">data</x-tag>'.NL;
$combination[476]['data'].= '- list item 2'.NL;
$combination[476]['data'].= '- list item 3';
$combination[476]['expected'] = '<ul>';
$combination[476]['expected'].=   '<li>list item 1';
$combination[476]['expected'].=     '<pre>';
$combination[476]['expected'].=       '<code>';
$combination[476]['expected'].=         '&lt;x-tag data-attribute=&quot;true&quot;&gt;data&lt;/x-tag&gt;';
$combination[476]['expected'].=       '</code>';
$combination[476]['expected'].=     '</pre>';
$combination[476]['expected'].=   '</li>';
$combination[476]['expected'].=   '<li>list item 2</li>';
$combination[476]['expected'].=   '<li>list item 3</li>';
$combination[476]['expected'].= '</ul>';

$combination[477]['data'] = '- list item 1'.NL;
$combination[477]['data'].= NL;
$combination[477]['data'].= '      <div data-attribute="true">data</div>'.NL;
$combination[477]['data'].= '- list item 2'.NL;
$combination[477]['data'].= '- list item 3';
$combination[477]['expected'] = '<ul>';
$combination[477]['expected'].=   '<li>list item 1</li>';
$combination[477]['expected'].= '</ul>';
$combination[477]['expected'].= '      <div data-attribute="true">data</div>'.NL;
$combination[477]['expected'].= '- list item 2'.NL;
$combination[477]['expected'].= '- list item 3';



# code with header (atx)
$combination[500]['data'] = '    # Title H1 (atx-style)';
$combination[500]['expected'] = '<pre>';
$combination[500]['expected'].=   '<code>';
$combination[500]['expected'].=     '# Title H1 (atx-style)';
$combination[500]['expected'].=   '</code>';
$combination[500]['expected'].= '</pre>';

# code with header (Setext)
$combination[510]['data'] = '    Title H1 (Setext-style)'.NL;
$combination[510]['data'].= '    =======================';
$combination[510]['expected'] = '<pre>';
$combination[510]['expected'].=   '<code>';
$combination[510]['expected'].=     'Title H1 (Setext-style)'.NL;
$combination[510]['expected'].=     '=======================';
$combination[510]['expected'].=   '</code>';
$combination[510]['expected'].= '</pre>';

# code with list
$combination[520]['data'] = '    - list item 1'.NL;
$combination[520]['data'].= '    - list item 2'.NL;
$combination[520]['data'].= '    - list item 3';
$combination[520]['expected'] = '<pre>';
$combination[520]['expected'].=   '<code>';
$combination[520]['expected'].=     '- list item 1'.NL;
$combination[520]['expected'].=     '- list item 2'.NL;
$combination[520]['expected'].=     '- list item 3';
$combination[520]['expected'].=   '</code>';
$combination[520]['expected'].= '</pre>';

# code with blockquote
$combination[530]['data'] = '    > blockquote line 1'.NL;
$combination[530]['data'].= '    > blockquote line 2'.NL;
$combination[530]['data'].= '    > blockquote line 3';
$combination[530]['expected'] = '<pre>';
$combination[530]['expected'].=   '<code>';
$combination[530]['expected'].=     '&gt; blockquote line 1'.NL;
$combination[530]['expected'].=     '&gt; blockquote line 2'.NL;
$combination[530]['expected'].=     '&gt; blockquote line 3';
$combination[530]['expected'].=   '</code>';
$combination[530]['expected'].= '</pre>';

# code with hr
$combination[540]['data'] = '    *  *  *';
$combination[540]['expected'] = '<pre>';
$combination[540]['expected'].=   '<code>';
$combination[540]['expected'].=     '*  *  *';
$combination[540]['expected'].=   '</code>';
$combination[540]['expected'].= '</pre>';

$combination[541]['data'] = '    -  -  -';
$combination[541]['expected'] = '<pre>';
$combination[541]['expected'].=   '<code>';
$combination[541]['expected'].=     '-  -  -';
$combination[541]['expected'].=   '</code>';
$combination[541]['expected'].= '</pre>';

# code with markup
$combination[550]['data'] = '    code line 1'.NL;
$combination[550]['data'].= '    <a href="http://example.com">link</a>'.NL;
$combination[550]['data'].= '    code line 3';
$combination[550]['expected'] = '<pre>';
$combination[550]['expected'].=   '<code>';
$combination[550]['expected'].=     'code line 1'.NL;
$combination[550]['expected'].=     '&lt;a href=&quot;http://example.com&quot;&gt;link&lt;/a&gt;'.NL;
$combination[550]['expected'].=     'code line 3';
$combination[550]['expected'].=   '</code>';
$combination[550]['expected'].= '</pre>';

$combination[551]['data'] = '    code line 1'.NL;
$combination[551]['data'].= '    <x-tag data-attribute="true">data</x-tag>'.NL;
$combination[551]['data'].= '    code line 3';
$combination[551]['expected'] = '<pre>';
$combination[551]['expected'].=   '<code>';
$combination[551]['expected'].=     'code line 1'.NL;
$combination[551]['expected'].=     '&lt;x-tag data-attribute=&quot;true&quot;&gt;data&lt;/x-tag&gt;'.NL;
$combination[551]['expected'].=     'code line 3';
$combination[551]['expected'].=   '</code>';
$combination[551]['expected'].= '</pre>';

$combination[552]['data'] = '    code line 1'.NL;
$combination[552]['data'].= '    <div data-attribute="true">data</div>'.NL;
$combination[552]['data'].= '    code line 3';
$combination[552]['expected'] = '<pre>';
$combination[552]['expected'].=   '<code>';
$combination[552]['expected'].=     'code line 1'.NL;
$combination[552]['expected'].=     '&lt;div data-attribute=&quot;true&quot;&gt;data&lt;/div&gt;'.NL;
$combination[552]['expected'].=     'code line 3';
$combination[552]['expected'].=   '</code>';
$combination[552]['expected'].= '</pre>';



# blockquote with header (atx)
$combination[600]['data'] = '> # Title H1 (atx-style)';
$combination[600]['expected'] = '<blockquote>';
$combination[600]['expected'].=   '<h1>Title H1 (atx-style)</h1>';
$combination[600]['expected'].= '</blockquote>';

# blockquote with header (Setext)
$combination[610]['data'] = '> Title H1 (Setext-style)'.NL;
$combination[610]['data'].= '> =======================';
$combination[610]['expected'] = '<blockquote>';
$combination[610]['expected'].=   '<h1>Title H1 (Setext-style)</h1>';
$combination[610]['expected'].= '</blockquote>';

# blockquote with bulleted list
$combination[620]['data'] = '> - list item 1'.NL;
$combination[620]['data'].= '>   - list item 1.1'.NL;
$combination[620]['data'].= '>     - list item 1.1.1'.NL;
$combination[620]['data'].= '>   - list item 1.2'.NL;
$combination[620]['data'].= '> - list item 2';
$combination[620]['expected'] = '<blockquote>';
$combination[620]['expected'].=   '<ul>';
$combination[620]['expected'].=     '<li>list item 1';
$combination[620]['expected'].=       '<ul>';
$combination[620]['expected'].=         '<li>list item 1.1';
$combination[620]['expected'].=           '<ul>';
$combination[620]['expected'].=             '<li>list item 1.1.1</li>';
$combination[620]['expected'].=           '</ul>';
$combination[620]['expected'].=         '</li>';
$combination[620]['expected'].=         '<li>list item 1.2</li>';
$combination[620]['expected'].=       '</ul>';
$combination[620]['expected'].=     '</li>';
$combination[620]['expected'].=     '<li>list item 2</li>';
$combination[620]['expected'].=   '</ul>';
$combination[620]['expected'].= '</blockquote>';

# blockquote with numbered list
$combination[630]['data'] = '> 1. numbered list item 1'.NL;
$combination[630]['data'].= '> 2. numbered list item 2'.NL;
$combination[630]['data'].= '> 3. numbered list item 3';
$combination[630]['expected'] = '<blockquote>';
$combination[630]['expected'].=   '<ol>';
$combination[630]['expected'].=     '<li>numbered list item 1</li>';
$combination[630]['expected'].=     '<li>numbered list item 2</li>';
$combination[630]['expected'].=     '<li>numbered list item 3</li>';
$combination[630]['expected'].=   '</ol>';
$combination[630]['expected'].= '</blockquote>';

# blockquote with code
$combination[640]['data'] = '>     code line 1'.NL;
$combination[640]['data'].= '>          code line 2'.NL;
$combination[640]['data'].= '>     code line 3';
$combination[640]['expected'] = '<blockquote>';
$combination[640]['expected'].=   '<pre>';
$combination[640]['expected'].=     '<code>';
$combination[640]['expected'].=       'code line 1'.NL;
$combination[640]['expected'].=       '     code line 2'.NL;
$combination[640]['expected'].=       'code line 3';
$combination[640]['expected'].=     '</code>';
$combination[640]['expected'].=   '</pre>';
$combination[640]['expected'].= '</blockquote>';

# blockquote with blockquote
$combination[650]['data'] = '> blockquote line 1'.NL;
$combination[650]['data'].= '> > blockquote nested line 2'.NL;
$combination[650]['data'].= '> blockquote line 3';
$combination[650]['expected'] = '<blockquote>';
$combination[650]['expected'].=   '<p>';
$combination[650]['expected'].=     'blockquote line 1';
$combination[650]['expected'].=   '</p>';
$combination[650]['expected'].=   '<blockquote>';
$combination[650]['expected'].=     '<p>';
$combination[650]['expected'].=         'blockquote nested line 2'.NL;
$combination[650]['expected'].=       'blockquote line 3';
$combination[650]['expected'].=     '</p>';
$combination[650]['expected'].=   '</blockquote>';
$combination[650]['expected'].= '</blockquote>';

# blockquote with hr
$combination[660]['data'] = '> *  *  *';
$combination[660]['expected'] = '<blockquote>';
$combination[660]['expected'].=   '<hr>';
$combination[660]['expected'].= '</blockquote>';

$combination[661]['data'] = '> -  -  -';
$combination[661]['expected'] = '<blockquote>';
$combination[661]['expected'].=   '<hr>';
$combination[661]['expected'].= '</blockquote>';

# blockquote with markup
$combination[670]['data'] = '> blockquote line 1'.NL;
$combination[670]['data'].= '> <a href="http://example.com">link</a>'.NL;
$combination[670]['data'].= '> blockquote line 3';
$combination[670]['expected'] = '<blockquote>';
$combination[670]['expected'].=   '<p>';
$combination[670]['expected'].=     'blockquote line 1'.NL;
$combination[670]['expected'].=     '<a href="http://example.com">link</a>'.NL;
$combination[670]['expected'].=     'blockquote line 3';
$combination[670]['expected'].=   '</p>';
$combination[670]['expected'].= '</blockquote>';

$combination[671]['data'] = '> blockquote line 1'.NL;
$combination[671]['data'].= '> <x-tag data-attribute="true">data</x-tag>'.NL;
$combination[671]['data'].= '> blockquote line 3';
$combination[671]['expected'] = '<blockquote>';
$combination[671]['expected'].=   '<p>';
$combination[671]['expected'].=     'blockquote line 1'.NL;
$combination[671]['expected'].=     '<x-tag data-attribute="true">data</x-tag>'.NL;
$combination[671]['expected'].=     'blockquote line 3';
$combination[671]['expected'].=   '</p>';
$combination[671]['expected'].= '</blockquote>';

$combination[672]['data'] = '> blockquote line 1'.NL;
$combination[672]['data'].= '> <div data-attribute="true">data</div>'.NL;
$combination[672]['data'].= '> blockquote line 3';
$combination[672]['expected'] = '<blockquote>';
$combination[672]['expected'].=   '<p>';
$combination[672]['expected'].=     'blockquote line 1';
$combination[672]['expected'].=   '</p>';
$combination[672]['expected'].=   '<div data-attribute="true">data</div>'.NL;
$combination[672]['expected'].=   'blockquote line 3';
$combination[672]['expected'].= '</blockquote>';

# list with mix
$combination[700]['data'] = '- item 1'.NL;
$combination[700]['data'].= '  - item 1.1'.NL;
$combination[700]['data'].= '    - item 1.1.1'.NL;
$combination[700]['data'].= NL;
$combination[700]['data'].= '          title in code (Setext-style)'.NL;
$combination[700]['data'].= '          ---'.NL;
$combination[700]['data'].= '          # title in code (atx-style)'.NL;
$combination[700]['data'].= '          > blockquote in code'.NL;
$combination[700]['data'].= '          * * *'.NL;
$combination[700]['data'].= '          paragraph in code'.NL;
$combination[700]['data'].= '          - list item 1 in code'.NL;
$combination[700]['data'].= '            - list item 1.1 in code'.NL;
$combination[700]['data'].= '              - list item 1.1.1 in code'.NL;
$combination[700]['data'].= '            - list item 1.2 in code'.NL;
$combination[700]['data'].= '          - list item 2 in code';
$combination[700]['expected'] = '<ul>';
$combination[700]['expected'].=   '<li>item 1';
$combination[700]['expected'].=     '<ul>';
$combination[700]['expected'].=       '<li>item 1.1';
$combination[700]['expected'].=         '<ul>';
$combination[700]['expected'].=           '<li>item 1.1.1';
$combination[700]['expected'].=             '<pre>';
$combination[700]['expected'].=               '<code>';
$combination[700]['expected'].=                 'title in code (Setext-style)'.NL;
$combination[700]['expected'].=                 '---'.NL;
$combination[700]['expected'].=                 '# title in code (atx-style)'.NL;
$combination[700]['expected'].=                 '&gt; blockquote in code'.NL;
$combination[700]['expected'].=                 '* * *'.NL;
$combination[700]['expected'].=                 'paragraph in code'.NL;
$combination[700]['expected'].=                 '- list item 1 in code'.NL;
$combination[700]['expected'].=                 '  - list item 1.1 in code'.NL;
$combination[700]['expected'].=                 '    - list item 1.1.1 in code'.NL;
$combination[700]['expected'].=                 '  - list item 1.2 in code'.NL;
$combination[700]['expected'].=                 '- list item 2 in code';
$combination[700]['expected'].=               '</code>';
$combination[700]['expected'].=             '</pre>';
$combination[700]['expected'].=           '</li>';
$combination[700]['expected'].=         '</ul>';
$combination[700]['expected'].=       '</li>';
$combination[700]['expected'].=     '</ul>';
$combination[700]['expected'].=   '</li>';
$combination[700]['expected'].= '</ul>';



############
### test ###
############


$passed_count = 0;
$_total_count = 0;
$output = '';

foreach ($simple as $c_name => $c_info) {
    $c_result = \effcore\markdown::markdown_to_markup($c_info['data'])->render();
    $c_passed = $c_result === $c_info['expected'];
    $output.= 'Simple test "'.$c_name.'": '.($c_passed ? 'OK' : 'MISMATCH').BR.BR;
    $output.= 'Markdown'.BR.'<textarea>'.$c_info['data'].'</textarea>'.BR;
    $output.= 'Result'.BR.'<textarea>'.$c_result.'</textarea>'.BR;
    $output.= 'Expected'.BR.'<textarea>'.$c_info['expected'].'</textarea>'.BR;
    $output.= BR.BR.BR;
    if ($c_passed) $passed_count++;
                   $_total_count++;
}

foreach ($separation as $c_name => $c_info) {
    $c_result = \effcore\markdown::markdown_to_markup($c_info['data'])->render();
    $c_passed = $c_result === $c_info['expected'];
    $output.= 'Separation "'.$c_name.'": '.($c_passed ? 'OK' : 'MISMATCH').BR.BR;
    $output.= 'Markdown'.BR.'<textarea>'.$c_info['data'].'</textarea>'.BR;
    $output.= 'Result'.BR.'<textarea>'.$c_result.'</textarea>'.BR;
    $output.= 'Expected'.BR.'<textarea>'.$c_info['expected'].'</textarea>'.BR;
    $output.= BR.BR.BR;
    if ($c_passed) $passed_count++;
                   $_total_count++;
}

foreach ($combination as $c_name => $c_info) {
    $c_result = \effcore\markdown::markdown_to_markup($c_info['data'])->render();
    $c_passed = $c_result === $c_info['expected'];
    $output.= 'Combination "'.$c_name.'": '.($c_passed ? 'OK' : 'MISMATCH').BR.BR;
    $output.= 'Markdown'.BR.'<textarea>'.$c_info['data'].'</textarea>'.BR;
    $output.= 'Result'.BR.'<textarea>'.$c_result.'</textarea>'.BR;
    $output.= 'Expected'.BR.'<textarea>'.$c_info['expected'].'</textarea>'.BR;
    $output.= BR.BR.BR;
    if ($c_passed) $passed_count++;
                   $_total_count++;
}

?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Markdown test</title>
    <style>
      textarea {font-size: 14px; width: 500px; height: 100px}
      h1, h2, h3, h4, h5, h6 {margin: 5px; border: 1px solid green}
      ul, ol {margin: 5px; border: 1px solid red}
      li {margin: 5px; border: 1px solid brown}
      hr {margin: 5px; border: 1px solid orange}
      p {margin: 5px; border: 1px solid black}
      blockquote {margin: 5px; border: 1px solid gray}
      code {margin: 5px; border: 1px solid blue}
    </style>
</head>
<body>

  <?php print 'RESULT: '.$passed_count.' FROM '.$_total_count; ?> <br><br>
  <?php print $output; ?>

</body>
</html>