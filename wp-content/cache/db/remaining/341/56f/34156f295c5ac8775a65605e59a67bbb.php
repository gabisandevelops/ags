�r&a<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:422:"SELECT p.ID, pm.meta_value FROM wp_postmeta as pm
						INNER JOIN wp_posts as p ON pm.post_id = p.ID
						WHERE pm.meta_key = 'ehf_target_include_locations'
						AND p.post_type = 'elementor-hf'
						AND p.post_status = 'publish' AND (pm.meta_value LIKE '%"basic-global"%' OR pm.meta_value LIKE '%"basic-singulars"%' OR pm.meta_value LIKE '%"page|all"%' OR pm.meta_value LIKE '%"post-1730"%') ORDER BY p.post_date DESC";s:11:"last_result";a:2:{i:0;O:8:"stdClass":2:{s:2:"ID";s:4:"1469";s:10:"meta_value";s:68:"a:2:{s:4:"rule";a:1:{i:0;s:12:"basic-global";}s:8:"specific";a:0:{}}";}i:1;O:8:"stdClass":2:{s:2:"ID";s:3:"494";s:10:"meta_value";s:68:"a:2:{s:4:"rule";a:1:{i:0;s:12:"basic-global";}s:8:"specific";a:0:{}}";}}s:8:"col_info";a:2:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:1:"p";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:9:"247patrol";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:10:"meta_value";s:7:"orgname";s:10:"meta_value";s:5:"table";s:2:"pm";s:8:"orgtable";s:11:"wp_postmeta";s:3:"def";s:0:"";s:2:"db";s:9:"247patrol";s:7:"catalog";s:3:"def";s:10:"max_length";i:68;s:6:"length";i:4294967295;s:9:"charsetnr";i:224;s:5:"flags";i:16;s:4:"type";i:252;s:8:"decimals";i:0;}}s:8:"num_rows";i:2;s:10:"return_val";i:2;}