<?php // phpcs:ignoreFile

/**
 * This contains the information needed to convert the function signatures for php 8.0 to php 7.4 (and vice versa)
 *
 * This has two sections.
 * The 'new' section contains function/method names from FunctionSignatureMap (And alternates, if applicable) that do not exist in php7.3 or have different signatures in php 7.4.
 *   If they were just updated, the function/method will be present in the 'added' signatures.
 * The 'old' signatures contains the signatures that are different in php 7.3.
 *   Functions are expected to be removed only in major releases of php.
 *
 * TODO: Add remaining functions
 *
 * @see FunctionSignatureMap.php
 *
 * @phan-file-suppress PhanPluginMixedKeyNoKey (read by Phan when analyzing this file)
 */
return [
'new' => [
'array_combine' => ['associative-array', 'keys'=>'string[]|int[]', 'values'=>'array'],
'bcdiv' => ['string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcmod' => ['string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcpowmod' => ['string', 'base'=>'string', 'exponent'=>'string', 'modulus'=>'string', 'scale='=>'int'],
'collator_get_strength' => ['int', 'coll'=>'collator'],
'com_load_typelib' => ['bool', 'typelib_name'=>'string', 'case_insensitive='=>'true'],
'count_chars' => ['array<int,int>|string', 'input'=>'string', 'mode='=>'int'],
'curl_close' => ['void', 'ch'=>'CurlHandle'],
'curl_copy_handle' => ['CurlHandle', 'ch'=>'CurlHandle'],
'curl_errno' => ['int', 'ch'=>'CurlHandle'],
'curl_error' => ['string', 'ch'=>'CurlHandle'],
'curl_escape' => ['string|false', 'ch'=>'CurlHandle', 'string'=>'string'],
'curl_exec' => ['bool|string', 'ch'=>'CurlHandle'],
'curl_getinfo' => ['mixed', 'ch'=>'CurlHandle', 'option='=>'int'],
'curl_init' => ['CurlHandle|false', 'url='=>'string'],
'curl_multi_add_handle' => ['int', 'mh'=>'CurlMultiHandle', 'ch'=>'CurlHandle'],
'curl_multi_close' => ['void', 'mh'=>'CurlMultiHandle'],
'curl_multi_errno' => ['int', 'mh'=>'CurlMultiHandle'],
'curl_multi_exec' => ['int', 'mh'=>'CurlMultiHandle', '&w_still_running'=>'int'],
'curl_multi_getcontent' => ['string', 'ch'=>'CurlHandle'],
'curl_multi_info_read' => ['array|false', 'mh'=>'CurlMultiHandle', '&w_msgs_in_queue='=>'int'],
'curl_multi_init' => ['CurlMultiHandle'],
'curl_multi_remove_handle' => ['int', 'mh'=>'CurlMultiHandle', 'ch'=>'CurlHandle'],
'curl_multi_select' => ['int', 'mh'=>'CurlMultiHandle', 'timeout='=>'float'],
'curl_multi_setopt' => ['bool', 'mh'=>'CurlMultiHandle', 'option'=>'int', 'value'=>'mixed'],
'curl_pause' => ['int', 'ch'=>'CurlHandle', 'bitmask'=>'int'],
'curl_reset' => ['void', 'ch'=>'CurlHandle'],
'curl_setopt' => ['bool', 'ch'=>'CurlHandle', 'option'=>'int', 'value'=>'mixed'],
'curl_setopt_array' => ['bool', 'ch'=>'CurlHandle', 'options'=>'array'],
'curl_share_close' => ['void', 'sh'=>'CurlShareHandle'],
'curl_share_errno' => ['int', 'sh'=>'CurlShareHandle'],
'curl_share_init' => ['CurlShareHandle'],
'curl_share_setopt' => ['bool', 'sh'=>'CurlShareHandle', 'option'=>'int', 'value'=>'mixed'],
'curl_unescape' => ['string|false', 'ch'=>'CurlShareHandle', 'string'=>'string'],
'date_add' => ['DateTime', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_date_set' => ['DateTime', 'object'=>'DateTime', 'year'=>'int', 'month'=>'int', 'day'=>'int'],
'date_diff' => ['DateInterval', 'obj1'=>'DateTimeInterface', 'obj2'=>'DateTimeInterface', 'absolute='=>'bool'],
'date_format' => ['string', 'object'=>'DateTimeInterface', 'format'=>'string'],
'date_isodate_set' => ['DateTime', 'object'=>'DateTime', 'year'=>'int', 'week'=>'int', 'day='=>'int|mixed'],
'date_parse' => ['array<string,mixed>', 'date'=>'string'],
'date_sub' => ['DateTime', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_sun_info' => ['array<string,bool|int>', 'time'=>'int', 'latitude'=>'float', 'longitude'=>'float'],
'date_time_set' => ['DateTime', 'object'=>'DateTime', 'hour'=>'int', 'minute'=>'int', 'second='=>'int', 'microseconds='=>'int'],
'date_timestamp_set' => ['DateTime', 'object'=>'DateTime', 'unixtimestamp'=>'int'],
'date_timezone_set' => ['DateTime', 'object'=>'DateTime', 'timezone'=>'DateTimeZone'],
'fdiv' => ['float', 'dividend'=>'float', 'divisor'=>'float'],
'fpassthru' => ['int', 'fp'=>'resource'],
'get_debug_type' => ['string', 'var'=>'mixed'],
'get_resource_id' => ['int', 'res'=>'resource'],
'gmdate' => ['string', 'format'=>'string', 'timestamp='=>'int'],
'gmmktime' => ['int|false', 'hour'=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'gmp_binomial' => ['GMP', 'n'=>'GMP|string|int', 'k'=>'int'],
'gmp_export' => ['string', 'gmpnumber'=>'GMP|string|int', 'word_size='=>'int', 'options='=>'int'],
'gmp_import' => ['GMP', 'data'=>'string', 'word_size='=>'int', 'options='=>'int'],
'gmp_random' => ['GMP', 'limiter='=>'int'],
'gmp_random_seed' => ['void', 'seed'=>'GMP|string|int'],
'gzpassthru' => ['int', 'zp'=>'resource'],
'hash_hkdf' => ['string', 'algo'=>'string', 'ikm'=>'string', 'length='=>'int', 'info='=>'string', 'salt='=>'string'],
'imageaffine' => ['false|GdImage', 'src'=>'GdImage', 'affine'=>'array', 'clip='=>'array'],
'imagecopy' => ['bool', 'dst_im'=>'GdImage', 'src_im'=>'GdImage', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopymerge' => ['bool', 'src_im'=>'GdImage', 'dst_im'=>'GdImage', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopymergegray' => ['bool', 'src_im'=>'GdImage', 'dst_im'=>'GdImage', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopyresampled' => ['bool', 'dst_im'=>'GdImage', 'src_im'=>'GdImage', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopyresized' => ['bool', 'dst_im'=>'GdImage', 'src_im'=>'GdImage', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecreate' => ['false|GdImage', 'x_size'=>'int', 'y_size'=>'int'],
'imagecreatefrombmp' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromgd' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromgd2' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromgd2part' => ['false|GdImage', 'filename'=>'string', 'srcx'=>'int', 'srcy'=>'int', 'width'=>'int', 'height'=>'int'],
'imagecreatefromgif' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromjpeg' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefrompng' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromstring' => ['false|GdImage', 'image'=>'string'],
'imagecreatefromtga' => ['false|GdImage', 'image' => 'string'],
'imagecreatefromwbmp' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromwebp' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromxbm' => ['false|GdImage', 'filename'=>'string'],
'imagecreatefromxpm' => ['false|GdImage', 'filename'=>'string'],
'imagecreatetruecolor' => ['false|GdImage', 'x_size'=>'int', 'y_size'=>'int'],
'imagecropauto' => ['false|GdImage', 'im'=>'GdImage', 'mode'=>'int', 'threshold'=>'float', 'color'=>'int'],
'imagecrop' => ['false|GdImage', 'im'=>'GdImage', 'rect'=>'array'],
'imagedestroy' => ['bool', 'im'=>'GdImage'],
'imagefill' => ['bool', 'im'=>'GdImage', 'x'=>'int', 'y'=>'int', 'col'=>'int'],
'imagefilledarc' => ['bool', 'im'=>'GdImage', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 's'=>'int', 'e'=>'int', 'col'=>'int', 'style'=>'int'],
'imagefilledellipse' => ['bool', 'im'=>'GdImage', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 'color'=>'int'],
'imagefilledpolygon' => ['bool', 'im'=>'GdImage', 'point'=>'array', 'num_points'=>'int', 'col'=>'int'],
'imagefilledrectangle' => ['bool', 'im'=>'GdImage', 'x1'=>'int', 'y1'=>'int', 'x2'=>'int', 'y2'=>'int', 'col'=>'int'],
'imagefilltoborder' => ['bool', 'im'=>'GdImage', 'x'=>'int', 'y'=>'int', 'border'=>'int', 'col'=>'int'],
'imagegetclip' => ['array<int,int>', 'im'=>'GdImage'],
'imagegetinterpolation' => ['int', 'image'=>'GdImage'],
'imagegif' => ['bool', 'im'=>'GdImage', 'filename='=>'?string'],
'imagegrabscreen' => ['false|GdImage'],
'imagegrabwindow' => ['false|GdImage', 'window_handle'=>'int', 'client_area='=>'int'],
'imagejpeg' => ['bool', 'im'=>'GdImage', 'filename='=>'?string', 'quality='=>'int'],
'imagepng' => ['bool', 'im'=>'GdImage', 'filename='=>'?string', 'quality='=>'int', 'filters='=>'int'],
'imagerotate' => ['false|GdImage', 'src_im'=>'GdImage', 'angle'=>'float', 'bgdcolor'=>'int', 'ignoretransparent='=>'int'],
'imagesavealpha' => ['bool', 'im'=>'GdImage', 'on'=>'bool'],
'imagescale' => ['false|GdImage', 'im'=>'GdImage', 'new_width'=>'int', 'new_height='=>'int', 'method='=>'int'],
'imagesx' => ['int', 'im'=>'GdImage'],
'imagesy' => ['int', 'im'=>'GdImage'],
'imagewbmp' => ['bool', 'im'=>'GdImage', 'filename='=>'?string', 'foreground='=>'int'],
'mb_decode_numericentity' => ['string|false', 'string'=>'string', 'convmap'=>'array', 'encoding='=>'string'],
'mktime' => ['int|false', 'hour'=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'parse_str' => ['void', 'encoded_string'=>'string', '&w_result'=>'array'],
'password_hash' => ['string', 'password'=>'string', 'algo'=>'?string|?int', 'options='=>'array'],
'PhpToken::getTokenName' => ['string'],
'PhpToken::is' => ['bool', 'kind'=>'string|int|string[]|int[]'],
'PhpToken::isIgnorable' => ['bool'],
'PhpToken::tokenize' => ['list<PhpToken>', 'code'=>'string', 'flags='=>'int'],
'proc_get_status' => ['array<string,int|string|bool>', 'process'=>'resource'],
'shmop_open' => ['Shmop', 'key'=>'int', 'flags'=>'string', 'mode'=>'int', 'size'=>'int'],
'shmop_read' => ['string', 'shmid'=>'Shmop', 'start'=>'int', 'count'=>'int'],
'shmop_size' => ['int', 'shmid'=>'Shmop'],
'shmop_write' => ['int', 'shmid'=>'Shmop', 'data'=>'string', 'offset'=>'int'],
'simplexml_import_dom' => ['SimpleXMLElement', 'node'=>'DOMNode', 'class_name='=>'string'],
'sleep' => ['int', 'seconds'=>'int'],
'socket_accept' => ['Socket|false', 'socket'=>'Socket'],
'socket_addrinfo_bind' => ['Socket|false', 'addrinfo'=>'AddressInfo'],
'socket_addrinfo_connect' => ['Socket|false', 'addrinfo'=>'AddressInfo'],
'socket_addrinfo_explain' => ['array', 'addrinfo'=>'AddressInfo'],
'socket_addrinfo_lookup' => ['AddressInfo[]', 'node'=>'string', 'service='=>'mixed', 'hints='=>'array'],
'socket_bind' => ['bool', 'socket'=>'Socket', 'addr'=>'string', 'port='=>'int'],
'socket_clear_error' => ['void', 'socket='=>'Socket'],
'socket_close' => ['void', 'socket'=>'Socket'],
'socket_connect' => ['bool', 'socket'=>'Socket', 'addr'=>'string', 'port='=>'int'],
'socket_create' => ['Socket|false', 'domain'=>'int', 'type'=>'int', 'protocol'=>'int'],
'socket_create_listen' => ['Socket|false', 'port'=>'int', 'backlog='=>'int'],
'socket_create_pair' => ['bool', 'domain'=>'int', 'type'=>'int', 'protocol'=>'int', '&w_fd'=>'Socket[]'],
'socket_export_stream' => ['resource|false', 'socket'=>'Socket'],
'socket_get_option' => ['mixed|false', 'socket'=>'Socket', 'level'=>'int', 'optname'=>'int'],
'socket_get_status' => ['array<string,mixed>', 'stream'=>'Socket'],
'socket_getopt' => ['mixed', 'socket'=>'Socket', 'level'=>'int', 'optname'=>'int'],
'socket_getpeername' => ['bool', 'socket'=>'Socket', '&w_addr'=>'string', '&w_port='=>'int'],
'socket_getsockname' => ['bool', 'socket'=>'Socket', '&w_addr'=>'string', '&w_port='=>'int'],
'socket_import_stream' => ['Socket|false', 'stream'=>'resource'],
'socket_last_error' => ['int', 'socket='=>'Socket'],
'socket_listen' => ['bool', 'socket'=>'Socket', 'backlog='=>'int'],
'socket_read' => ['string|false', 'socket'=>'Socket', 'length'=>'int', 'type='=>'int'],
'socket_recv' => ['int|false', 'socket'=>'Socket', '&w_buf'=>'string', 'length'=>'int', 'flags'=>'int'],
'socket_recvfrom' => ['int|false', 'socket'=>'Socket', '&w_buf'=>'string', 'length'=>'int', 'flags'=>'int', '&w_name'=>'string', '&w_port='=>'int'],
'socket_recvmsg' => ['int|false', 'socket'=>'Socket', '&w_message'=>'string', 'flags='=>'int'],
'socket_select' => ['int|false', '&rw_read_fds'=>'Socket[]|null', '&rw_write_fds'=>'Socket[]|null', '&rw_except_fds'=>'Socket[]|null', 'tv_sec'=>'int', 'tv_usec='=>'int'],
'socket_send' => ['int|false', 'socket'=>'Socket', 'buf'=>'string', 'length'=>'int', 'flags'=>'int'],
'socket_sendmsg' => ['int|false', 'socket'=>'Socket', 'message'=>'array', 'flags'=>'int'],
'socket_sendto' => ['int|false', 'socket'=>'Socket', 'buf'=>'string', 'length'=>'int', 'flags'=>'int', 'addr'=>'string', 'port='=>'int'],
'socket_set_block' => ['bool', 'socket'=>'Socket'],
'socket_set_blocking' => ['bool', 'socket'=>'Socket', 'mode'=>'int'],
'socket_set_nonblock' => ['bool', 'socket'=>'Socket'],
'socket_set_option' => ['bool', 'socket'=>'Socket', 'level'=>'int', 'optname'=>'int', 'optval'=>'int|string|array'],
'socket_set_timeout' => ['bool', 'stream'=>'resource', 'seconds'=>'int', 'microseconds='=>'int'],
'socket_setopt' => ['bool', 'socket'=>'Socket', 'level'=>'int', 'optname'=>'int', 'optval'=>'int|string|array'],
'socket_shutdown' => ['bool', 'socket'=>'Socket', 'how='=>'int'],
'socket_strerror' => ['string', 'errno'=>'int'],
'socket_write' => ['int|false', 'socket'=>'Socket', 'buf'=>'string', 'length='=>'int'],
'socket_wsaprotocol_info_export' => ['string|false', 'stream'=>'resource', 'target_pid'=>'int'],
'socket_wsaprotocol_info_import' => ['Socket|false', 'id'=>'string'],
'socket_wsaprotocol_info_release' => ['bool', 'id'=>'string'],
'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => ['string|false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
'str_contains' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
'str_ends_with' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
'str_starts_with' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
'strchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
'stripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'stristr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
'strpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'strrchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string'],
'strripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'strrpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'strstr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
'timezone_identifiers_list' => ['list<string>', 'what='=>'int', 'country='=>'?string'],
'timezone_offset_get' => ['int', 'object'=>'DateTimeZone', 'datetime'=>'DateTimeInterface'],
'version_compare' => ['int|bool', 'version1'=>'string', 'version2'=>'string', 'operator='=>'?(\'\x3c\'|\'lt\'|\'\x3c=\'|\'le\'|\'\x3e\'|\'gt\'|\'\x3e=\'|\'ge\'|\'==\'|\'=\'|\'eq\'|\'!=\'|\'\x3c\x3e\'|\'ne\')'],
'xml_get_current_byte_index' => ['int', 'parser'=>'XMLParser'],
'xml_get_current_column_number' => ['int', 'parser'=>'XMLParser'],
'xml_get_current_line_number' => ['int', 'parser'=>'XMLParser'],
'xml_get_error_code' => ['int', 'parser'=>'XMLParser'],
'xml_parse_into_struct' => ['int', 'parser'=>'XMLParser', 'data'=>'string', '&w_values'=>'array', '&w_index='=>'array'],
'xml_parse' => ['int', 'parser'=>'XMLParser', 'data'=>'string', 'isfinal='=>'bool'],
'xml_parser_create' => ['XMLParser', 'encoding='=>'string'],
'xml_parser_create_ns' => ['XMLParser', 'encoding='=>'string', 'sep='=>'string'],
'xml_parser_free' => ['bool', 'parser'=>'XMLParser'],
'xml_parser_get_option' => ['int|string', 'parser'=>'XMLParser', 'option'=>'int'],
'xml_parser_set_option' => ['bool', 'parser'=>'XMLParser', 'option'=>'int', 'value'=>'mixed'],
'xml_set_character_data_handler' => ['bool', 'parser'=>'XMLParser', 'hdl'=>'callable'],
'xml_set_element_handler' => ['bool', 'parser'=>'XMLParser', 'shdl'=>'callable', 'ehdl'=>'callable'],
'xmlwriter_end_attribute' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_cdata' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_comment' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_document' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_pi' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_flush' => ['mixed', 'xmlwriter'=>'XMLWriter', 'empty='=>'bool'],
'xmlwriter_full_end_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_open_memory' => ['XMLWriter'],
'xmlwriter_open_uri' => ['XMLWriter', 'source'=>'string'],
'xmlwriter_output_memory' => ['string', 'xmlwriter'=>'XMLWriter', 'flush='=>'bool'],
'xmlwriter_set_indent' => ['bool', 'xmlwriter'=>'XMLWriter', 'indent'=>'bool'],
'xmlwriter_set_indent_string' => ['bool', 'xmlwriter'=>'XMLWriter', 'indentstring'=>'string'],
'xmlwriter_start_attribute' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_attribute_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_cdata' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_start_comment' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_start_document' => ['bool', 'xmlwriter'=>'XMLWriter', 'version='=>'string', 'encoding='=>'string', 'standalone='=>'string'],
'xmlwriter_start_dtd' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string'],
'xmlwriter_start_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'isparam'=>'bool'],
'xmlwriter_start_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_element_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_pi' => ['bool', 'xmlwriter'=>'XMLWriter', 'target'=>'string'],
'xmlwriter_text' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
'xmlwriter_write_attribute' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_attribute_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_cdata' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
'xmlwriter_write_comment' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
'xmlwriter_write_dtd' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string', 'subset='=>'string'],
'xmlwriter_write_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string', 'pe'=>'bool', 'publicid'=>'string', 'sysid'=>'string', 'ndataid'=>'string'],
'xmlwriter_write_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_element_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_pi' => ['bool', 'xmlwriter'=>'XMLWriter', 'target'=>'string', 'content'=>'string'],
'xmlwriter_write_raw' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
],
'old' => [

'array_combine' => ['associative-array|false', 'keys'=>'string[]|int[]', 'values'=>'array'],
'bcdiv' => ['?string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcmod' => ['?string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcpowmod' => ['?string', 'base'=>'string', 'exponent'=>'string', 'modulus'=>'string', 'scale='=>'int'],
'com_load_typelib' => ['bool', 'typelib_name'=>'string', 'case_insensitive='=>'bool'],
'count_chars' => ['array<int,int>|false|string', 'input'=>'string', 'mode='=>'int'],
'create_function' => ['string', 'args'=>'string', 'code'=>'string'],
'collator_get_strength' => ['int|false', 'coll'=>'collator'],
'curl_close' => ['void', 'ch'=>'resource'],
'curl_copy_handle' => ['resource', 'ch'=>'resource'],
'curl_errno' => ['int', 'ch'=>'resource'],
'curl_error' => ['string', 'ch'=>'resource'],
'curl_escape' => ['string|false', 'ch'=>'resource', 'string'=>'string'],
'curl_exec' => ['bool|string', 'ch'=>'resource'],
'curl_getinfo' => ['mixed', 'ch'=>'resource', 'option='=>'int'],
'curl_init' => ['resource|false', 'url='=>'string'],
'curl_multi_add_handle' => ['int', 'mh'=>'resource', 'ch'=>'resource'],
'curl_multi_close' => ['void', 'mh'=>'resource'],
'curl_multi_errno' => ['int', 'mh'=>'resource'],
'curl_multi_exec' => ['int', 'mh'=>'resource', '&w_still_running'=>'int'],
'curl_multi_getcontent' => ['string', 'ch'=>'resource'],
'curl_multi_info_read' => ['array|false', 'mh'=>'resource', '&w_msgs_in_queue='=>'int'],
'curl_multi_init' => ['resource'],
'curl_multi_remove_handle' => ['int', 'mh'=>'resource', 'ch'=>'resource'],
'curl_multi_select' => ['int', 'mh'=>'resource', 'timeout='=>'float'],
'curl_multi_setopt' => ['bool', 'mh'=>'resource', 'option'=>'int', 'value'=>'mixed'],
'curl_pause' => ['int', 'ch'=>'resource', 'bitmask'=>'int'],
'curl_reset' => ['void', 'ch'=>'resource'],
'curl_setopt' => ['bool', 'ch'=>'resource', 'option'=>'int', 'value'=>'mixed'],
'curl_setopt_array' => ['bool', 'ch'=>'resource', 'options'=>'array'],
'curl_share_close' => ['void', 'sh'=>'resource'],
'curl_share_errno' => ['int', 'sh'=>'resource'],
'curl_share_init' => ['resource'],
'curl_share_setopt' => ['bool', 'sh'=>'resource', 'option'=>'int', 'value'=>'mixed'],
'curl_unescape' => ['string|false', 'ch'=>'resource', 'string'=>'string'],
'date_add' => ['DateTime|false', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_date_set' => ['DateTime|false', 'object'=>'DateTime', 'year'=>'int', 'month'=>'int', 'day'=>'int'],
'date_diff' => ['DateInterval|false', 'obj1'=>'DateTimeInterface', 'obj2'=>'DateTimeInterface', 'absolute='=>'bool'],
'date_format' => ['string|false', 'object'=>'DateTimeInterface', 'format'=>'string'],
'date_isodate_set' => ['DateTime|false', 'object'=>'DateTime', 'year'=>'int', 'week'=>'int', 'day='=>'int|mixed'],
'date_parse' => ['array<string,mixed>|false', 'date'=>'string'],
'date_sub' => ['DateTime|false', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_sun_info' => ['array<string,bool|int>|false', 'time'=>'int', 'latitude'=>'float', 'longitude'=>'float'],
'date_time_set' => ['DateTime|false', 'object'=>'DateTime', 'hour'=>'int', 'minute'=>'int', 'second='=>'int', 'microseconds='=>'int'],
'date_timestamp_set' => ['DateTime|false', 'object'=>'DateTime', 'unixtimestamp'=>'int'],
'date_timezone_set' => ['DateTime|false', 'object'=>'DateTime', 'timezone'=>'DateTimeZone'],
'each' => ['array{0:int|string,key:int|string,1:mixed,value:mixed}', '&r_arr'=>'array'],
'fpassthru' => ['int|false', 'fp'=>'resource'],
'gmdate' => ['string|false', 'format'=>'string', 'timestamp='=>'int'],
'gmmktime' => ['int|false', 'hour='=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'gmp_binomial' => ['GMP|false', 'n'=>'GMP|string|int', 'k'=>'int'],
'gmp_export' => ['string|false', 'gmpnumber'=>'GMP|string|int', 'word_size='=>'int', 'options='=>'int'],
'gmp_import' => ['GMP|false', 'data'=>'string', 'word_size='=>'int', 'options='=>'int'],
'gmp_random' => ['GMP', 'limiter='=>'int'],
'gmp_random_seed' => ['void|false', 'seed'=>'GMP|string|int'],
'gzgetss' => ['string|false', 'zp'=>'resource', 'length'=>'int', 'allowable_tags='=>'string'],
'gzpassthru' => ['int|false', 'zp'=>'resource'],
'hash_hkdf' => ['string|false', 'algo'=>'string', 'ikm'=>'string', 'length='=>'int', 'info='=>'string', 'salt='=>'string'],
'image2wbmp' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'threshold='=>'int'],
'imageaffine' => ['resource|false', 'src'=>'resource', 'affine'=>'array', 'clip='=>'array'],
'imagecopy' => ['bool', 'dst_im'=>'resource', 'src_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopymerge' => ['bool', 'src_im'=>'resource', 'dst_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopymergegray' => ['bool', 'src_im'=>'resource', 'dst_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopyresampled' => ['bool', 'dst_im'=>'resource', 'src_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopyresized' => ['bool', 'dst_im'=>'resource', 'src_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecreatefrombmp' => ['resource|false', 'filename'=>'string'],
'imagecreatefromgd' => ['resource|false', 'filename'=>'string'],
'imagecreatefromgd2' => ['resource|false', 'filename'=>'string'],
'imagecreatefromgd2part' => ['resource|false', 'filename'=>'string', 'srcx'=>'int', 'srcy'=>'int', 'width'=>'int', 'height'=>'int'],
'imagecreatefromgif' => ['resource|false', 'filename'=>'string'],
'imagecreatefromjpeg' => ['resource|false', 'filename'=>'string'],
'imagecreatefrompng' => ['resource|false', 'filename'=>'string'],
'imagecreatefromstring' => ['resource|false', 'image'=>'string'],
'imagecreatefromtga' => ['resource|false', 'filename' => 'string'],
'imagecreatefromwbmp' => ['resource|false', 'filename'=>'string'],
'imagecreatefromwebp' => ['resource|false', 'filename'=>'string'],
'imagecreatefromxbm' => ['resource|false', 'filename'=>'string'],
'imagecreatefromxpm' => ['resource|false', 'filename'=>'string'],
'imagecreate' => ['resource|false', 'x_size'=>'int', 'y_size'=>'int'],
'imagecreatetruecolor' => ['resource|false', 'x_size'=>'int', 'y_size'=>'int'],
'imagecropauto' => ['resource|false', 'im'=>'resource', 'mode'=>'int', 'threshold'=>'float', 'color'=>'int'],
'imagecrop' => ['resource|false', 'im'=>'resource', 'rect'=>'array'],
'imagedestroy' => ['bool', 'im'=>'resource'],
'imagefill' => ['bool', 'im'=>'resource', 'x'=>'int', 'y'=>'int', 'col'=>'int'],
'imagefilledarc' => ['bool', 'im'=>'resource', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 's'=>'int', 'e'=>'int', 'col'=>'int', 'style'=>'int'],
'imagefilledellipse' => ['bool', 'im'=>'resource', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 'color'=>'int'],
'imagefilledpolygon' => ['bool', 'im'=>'resource', 'point'=>'array', 'num_points'=>'int', 'col'=>'int'],
'imagefilledrectangle' => ['bool', 'im'=>'resource', 'x1'=>'int', 'y1'=>'int', 'x2'=>'int', 'y2'=>'int', 'col'=>'int'],
'imagefilltoborder' => ['bool', 'im'=>'resource', 'x'=>'int', 'y'=>'int', 'border'=>'int', 'col'=>'int'],
'imagegetclip' => ['array<int,int>|false', 'im'=>'resource'],
'imagegif' => ['bool', 'im'=>'resource', 'filename='=>'?string'],
'imagegrabscreen' => ['false|resource'],
'imagegrabwindow' => ['false|resource', 'window_handle'=>'int', 'client_area='=>'int'],
'imagejpeg' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'quality='=>'int'],
'imagepng' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'quality='=>'int', 'filters='=>'int'],
'imagerotate' => ['resource|false', 'src_im'=>'resource', 'angle'=>'float', 'bgdcolor'=>'int', 'ignoretransparent='=>'int'],
'imagesavealpha' => ['bool', 'im'=>'resource', 'on'=>'bool'],
'imagescale' => ['resource|false', 'im'=>'resource', 'new_width'=>'int', 'new_height='=>'int', 'method='=>'int'],
'imagesx' => ['int|false', 'im'=>'resource'],
'imagesy' => ['int|false', 'im'=>'resource'],
'imagewbmp' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'foreground='=>'int'],
'jpeg2wbmp' => ['bool', 'jpegname'=>'string', 'wbmpname'=>'string', 'dest_height'=>'int', 'dest_width'=>'int', 'threshold'=>'int'],
'ldap_sort' => ['bool', 'link_identifier'=>'resource', 'result_identifier'=>'resource', 'sortfilter'=>'string'],
'mb_decode_numericentity' => ['string|false', 'string'=>'string', 'convmap'=>'array', 'encoding='=>'string', 'is_hex='=>'bool'],
'mktime' => ['int|false', 'hour='=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'parse_str' => ['void', 'encoded_string'=>'string', '&w_result='=>'array'],
'password_hash' => ['string|false|null', 'password'=>'string', 'algo'=>'?string|?int', 'options='=>'array'],
'png2wbmp' => ['bool', 'pngname'=>'string', 'wbmpname'=>'string', 'dest_height'=>'int', 'dest_width'=>'int', 'threshold'=>'int'],
'proc_get_status' => ['array<string,int|string|bool>|false', 'process'=>'resource'],
'read_exif_data' => ['array', 'filename'=>'string', 'sections_needed='=>'string', 'sub_arrays='=>'bool', 'read_thumbnail='=>'bool'],
'shmop_open' => ['resource|false', 'key'=>'int', 'flags'=>'string', 'mode'=>'int', 'size'=>'int'],
'shmop_read' => ['string|false', 'shmid'=>'resource', 'start'=>'int', 'count'=>'int'],
'shmop_size' => ['int', 'shmid'=>'resource'],
'shmop_write' => ['int|false', 'shmid'=>'resource', 'data'=>'string', 'offset'=>'int'],
'simplexml_import_dom' => ['SimpleXMLElement|false', 'node'=>'DOMNode', 'class_name='=>'string'],
'sleep' => ['int|false', 'seconds'=>'int'],
'socket_accept' => ['resource|false', 'socket'=>'resource'],
'socket_addrinfo_bind' => ['?resource', 'addrinfo'=>'resource'],
'socket_addrinfo_connect' => ['?resource', 'addrinfo'=>'resource'],
'socket_addrinfo_explain' => ['array', 'addrinfo'=>'resource'],
'socket_addrinfo_lookup' => ['resource[]', 'node'=>'string', 'service='=>'mixed', 'hints='=>'array'],
'socket_bind' => ['bool', 'socket'=>'resource', 'addr'=>'string', 'port='=>'int'],
'socket_clear_error' => ['void', 'socket='=>'resource'],
'socket_close' => ['void', 'socket'=>'resource'],
'socket_connect' => ['bool', 'socket'=>'resource', 'addr'=>'string', 'port='=>'int'],
'socket_create' => ['resource|false', 'domain'=>'int', 'type'=>'int', 'protocol'=>'int'],
'socket_create_listen' => ['resource|false', 'port'=>'int', 'backlog='=>'int'],
'socket_create_pair' => ['bool', 'domain'=>'int', 'type'=>'int', 'protocol'=>'int', '&w_fd'=>'resource[]'],
'socket_export_stream' => ['resource|false', 'socket'=>'resource'],
'socket_get_option' => ['mixed|false', 'socket'=>'resource', 'level'=>'int', 'optname'=>'int'],
'socket_get_status' => ['array<string,mixed>', 'stream'=>'resource'],
'socket_getopt' => ['mixed', 'socket'=>'resource', 'level'=>'int', 'optname'=>'int'],
'socket_getpeername' => ['bool', 'socket'=>'resource', '&w_addr'=>'string', '&w_port='=>'int'],
'socket_getsockname' => ['bool', 'socket'=>'resource', '&w_addr'=>'string', '&w_port='=>'int'],
'socket_import_stream' => ['resource|false|null', 'stream'=>'resource'],
'socket_last_error' => ['int', 'socket='=>'resource'],
'socket_listen' => ['bool', 'socket'=>'resource', 'backlog='=>'int'],
'socket_read' => ['string|false', 'socket'=>'resource', 'length'=>'int', 'type='=>'int'],
'socket_recv' => ['int|false', 'socket'=>'resource', '&w_buf'=>'string', 'length'=>'int', 'flags'=>'int'],
'socket_recvfrom' => ['int|false', 'socket'=>'resource', '&w_buf'=>'string', 'length'=>'int', 'flags'=>'int', '&w_name'=>'string', '&w_port='=>'int'],
'socket_recvmsg' => ['int|false', 'socket'=>'resource', '&w_message'=>'string', 'flags='=>'int'],
'socket_select' => ['int|false', '&rw_read_fds'=>'resource[]|null', '&rw_write_fds'=>'resource[]|null', '&rw_except_fds'=>'resource[]|null', 'tv_sec'=>'int', 'tv_usec='=>'int'],
'socket_send' => ['int|false', 'socket'=>'resource', 'buf'=>'string', 'length'=>'int', 'flags'=>'int'],
'socket_sendmsg' => ['int|false', 'socket'=>'resource', 'message'=>'array', 'flags'=>'int'],
'socket_sendto' => ['int|false', 'socket'=>'resource', 'buf'=>'string', 'length'=>'int', 'flags'=>'int', 'addr'=>'string', 'port='=>'int'],
'socket_set_block' => ['bool', 'socket'=>'resource'],
'socket_set_blocking' => ['bool', 'socket'=>'resource', 'mode'=>'int'],
'socket_set_nonblock' => ['bool', 'socket'=>'resource'],
'socket_set_option' => ['bool', 'socket'=>'resource', 'level'=>'int', 'optname'=>'int', 'optval'=>'int|string|array'],
'socket_set_timeout' => ['bool', 'stream'=>'resource', 'seconds'=>'int', 'microseconds='=>'int'],
'socket_setopt' => ['bool', 'socket'=>'resource', 'level'=>'int', 'optname'=>'int', 'optval'=>'int|string|array'],
'socket_shutdown' => ['bool', 'socket'=>'resource', 'how='=>'int'],
'socket_strerror' => ['string', 'errno'=>'int'],
'socket_write' => ['int|false', 'socket'=>'resource', 'buf'=>'string', 'length='=>'int'],
'socket_wsaprotocol_info_export' => ['string|false', 'stream'=>'resource', 'target_pid'=>'int'],
'socket_wsaprotocol_info_import' => ['resource|false', 'id'=>'string'],
'socket_wsaprotocol_info_release' => ['bool', 'id'=>'string'],
'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => ['?string|?false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
'SplFileObject::fgetss' => ['string|false', 'allowable_tags='=>'string'],
'strchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
'stripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'stristr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
'strpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'strrchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int'],
'strripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'strrpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'strstr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
'timezone_identifiers_list' => ['list<string>|false', 'what='=>'int', 'country='=>'?string'],
'timezone_offset_get' => ['int|false', 'object'=>'DateTimeZone', 'datetime'=>'DateTimeInterface'],
'version_compare' => ['int|bool', 'version1'=>'string', 'version2'=>'string', 'operator='=>'\'\x3c\'|\'lt\'|\'\x3c=\'|\'le\'|\'\x3e\'|\'gt\'|\'\x3e=\'|\'ge\'|\'==\'|\'=\'|\'eq\'|\'!=\'|\'\x3c\x3e\'|\'ne\''],
'xml_parser_create' => ['resource', 'encoding='=>'string'],
'xml_parser_create_ns' => ['resource', 'encoding='=>'string', 'sep='=>'string'],
'xml_parser_free' => ['bool', 'parser'=>'resource'],
'xml_parser_get_option' => ['mixed|false', 'parser'=>'resource', 'option'=>'int'],
'xml_parser_set_option' => ['bool', 'parser'=>'resource', 'option'=>'int', 'value'=>'mixed'],
'xml_set_element_handler' => ['bool', 'parser'=>'resource', 'shdl'=>'callable', 'ehdl'=>'callable'],
'xml_set_character_data_handler' => ['bool', 'parser'=>'resource', 'hdl'=>'callable'],
'xml_parse' => ['int', 'parser'=>'resource', 'data'=>'string', 'isfinal='=>'bool'],
'xml_parse_into_struct' => ['int', 'parser'=>'resource', 'data'=>'string', '&w_values'=>'array', '&w_index='=>'array'],
'xml_get_current_byte_index' => ['int|false', 'parser'=>'resource'],
'xml_get_current_column_number' => ['int|false', 'parser'=>'resource'],
'xml_get_current_line_number' => ['int|false', 'parser'=>'resource'],
'xml_get_error_code' => ['int|false', 'parser'=>'resource'],
'xmlwriter_end_attribute' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_cdata' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_comment' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_document' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd_attlist' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd_element' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd_entity' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_element' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_pi' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_flush' => ['mixed', 'xmlwriter'=>'resource', 'empty='=>'bool'],
'xmlwriter_full_end_element' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_open_memory' => ['resource'],
'xmlwriter_open_uri' => ['resource', 'source'=>'string'],
'xmlwriter_output_memory' => ['string', 'xmlwriter'=>'resource', 'flush='=>'bool'],
'xmlwriter_set_indent' => ['bool', 'xmlwriter'=>'resource', 'indent'=>'bool'],
'xmlwriter_set_indent_string' => ['bool', 'xmlwriter'=>'resource', 'indentstring'=>'string'],
'xmlwriter_start_attribute' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_attribute_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_cdata' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_start_comment' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_start_document' => ['bool', 'xmlwriter'=>'resource', 'version='=>'string', 'encoding='=>'string', 'standalone='=>'string'],
'xmlwriter_start_dtd' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string'],
'xmlwriter_start_dtd_attlist' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_dtd_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_dtd_entity' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'isparam'=>'bool'],
'xmlwriter_start_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_element_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_pi' => ['bool', 'xmlwriter'=>'resource', 'target'=>'string'],
'xmlwriter_text' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
'xmlwriter_write_attribute' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_attribute_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_cdata' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
'xmlwriter_write_comment' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
'xmlwriter_write_dtd' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string', 'subset='=>'string'],
'xmlwriter_write_dtd_attlist' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_entity' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string', 'pe'=>'bool', 'publicid'=>'string', 'sysid'=>'string', 'ndataid'=>'string'],
'xmlwriter_write_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_element_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_pi' => ['bool', 'xmlwriter'=>'resource', 'target'=>'string', 'content'=>'string'],
'xmlwriter_write_raw' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
]
];
