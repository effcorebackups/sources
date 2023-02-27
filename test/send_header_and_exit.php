<?php


core::send_header_and_exit('access_forbidden', 'custom_title'                                          );
core::send_header_and_exit('access_forbidden', null                                                    );
core::send_header_and_exit('access_forbidden', new text_multiline([1,2,3])                             );
core::send_header_and_exit('access_forbidden', 'custom_title'             , null                       );
core::send_header_and_exit('access_forbidden', 'custom_title'             , 'custom_message'           );
core::send_header_and_exit('access_forbidden', 'custom_title'             , new text_multiline([4,5,6]));
core::send_header_and_exit('access_forbidden', null                       , null                       );
core::send_header_and_exit('access_forbidden', null                       , 'custom_message'           );
core::send_header_and_exit('access_forbidden', null                       , new text_multiline([4,5,6]));
core::send_header_and_exit('access_forbidden', new text_multiline([1,2,3]), null                       );
core::send_header_and_exit('access_forbidden', new text_multiline([1,2,3]), 'custom_message'           );
core::send_header_and_exit('access_forbidden', new text_multiline([1,2,3]), new text_multiline([4,5,6]));

core::send_header_and_exit('page_not_found', 'custom_title'                                          );
core::send_header_and_exit('page_not_found', null                                                    );
core::send_header_and_exit('page_not_found', new text_multiline([1,2,3])                             );
core::send_header_and_exit('page_not_found', 'custom_title'             , null                       );
core::send_header_and_exit('page_not_found', 'custom_title'             , 'custom_message'           );
core::send_header_and_exit('page_not_found', 'custom_title'             , new text_multiline([4,5,6]));
core::send_header_and_exit('page_not_found', null                       , null                       );
core::send_header_and_exit('page_not_found', null                       , 'custom_message'           );
core::send_header_and_exit('page_not_found', null                       , new text_multiline([4,5,6]));
core::send_header_and_exit('page_not_found', new text_multiline([1,2,3]), null                       );
core::send_header_and_exit('page_not_found', new text_multiline([1,2,3]), 'custom_message'           );
core::send_header_and_exit('page_not_found', new text_multiline([1,2,3]), new text_multiline([4,5,6]));

core::send_header_and_exit('file_not_found', 'custom_title'                                          );
core::send_header_and_exit('file_not_found', null                                                    );
core::send_header_and_exit('file_not_found', new text_multiline([1,2,3])                             );
core::send_header_and_exit('file_not_found', 'custom_title'             , null                       );
core::send_header_and_exit('file_not_found', 'custom_title'             , 'custom_message'           );
core::send_header_and_exit('file_not_found', 'custom_title'             , new text_multiline([4,5,6]));
core::send_header_and_exit('file_not_found', null                       , null                       );
core::send_header_and_exit('file_not_found', null                       , 'custom_message'           );
core::send_header_and_exit('file_not_found', null                       , new text_multiline([4,5,6]));
core::send_header_and_exit('file_not_found', new text_multiline([1,2,3]), null                       );
core::send_header_and_exit('file_not_found', new text_multiline([1,2,3]), 'custom_message'           );
core::send_header_and_exit('file_not_found', new text_multiline([1,2,3]), new text_multiline([4,5,6]));

