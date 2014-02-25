<?php

/**
 * execute all tests
 */
$start = microtime(true);
require_once dirname(__FILE__) . '/cases/parser/aliases.php';
require_once dirname(__FILE__) . '/cases/parser/allcolumns.php';
require_once dirname(__FILE__) . '/cases/parser/backtick.php';
require_once dirname(__FILE__) . '/cases/parser/delete.php';
require_once dirname(__FILE__) . '/cases/parser/drop.php';
require_once dirname(__FILE__) . '/cases/parser/from.php';
require_once dirname(__FILE__) . '/cases/parser/gtltop.php';
require_once dirname(__FILE__) . '/cases/parser/inlist.php';
require_once dirname(__FILE__) . '/cases/parser/insert.php';
require_once dirname(__FILE__) . '/cases/parser/issue11.php';
require_once dirname(__FILE__) . '/cases/parser/issue12.php';
require_once dirname(__FILE__) . '/cases/parser/issue15.php';
require_once dirname(__FILE__) . '/cases/parser/issue21.php';
require_once dirname(__FILE__) . '/cases/parser/issue25.php';
require_once dirname(__FILE__) . '/cases/parser/issue30.php';
require_once dirname(__FILE__) . '/cases/parser/issue31.php';
require_once dirname(__FILE__) . '/cases/parser/issue32.php';
require_once dirname(__FILE__) . '/cases/parser/issue33.php';
require_once dirname(__FILE__) . '/cases/parser/issue34.php';
require_once dirname(__FILE__) . '/cases/parser/issue36.php';
require_once dirname(__FILE__) . '/cases/parser/issue37.php';
require_once dirname(__FILE__) . '/cases/parser/issue38.php';
require_once dirname(__FILE__) . '/cases/parser/issue39.php';
require_once dirname(__FILE__) . '/cases/parser/issue40.php';
require_once dirname(__FILE__) . '/cases/parser/issue41.php';
require_once dirname(__FILE__) . '/cases/parser/issue42.php';
require_once dirname(__FILE__) . '/cases/parser/issue43.php';
require_once dirname(__FILE__) . '/cases/parser/issue44.php';
require_once dirname(__FILE__) . '/cases/parser/issue45.php';
require_once dirname(__FILE__) . '/cases/parser/issue46.php';
require_once dirname(__FILE__) . '/cases/parser/issue50.php';
require_once dirname(__FILE__) . '/cases/parser/issue51.php';
require_once dirname(__FILE__) . '/cases/parser/issue52.php';
require_once dirname(__FILE__) . '/cases/parser/issue53.php';
require_once dirname(__FILE__) . '/cases/parser/issue54.php';
require_once dirname(__FILE__) . '/cases/parser/issue55.php';
require_once dirname(__FILE__) . '/cases/parser/issue56.php';
require_once dirname(__FILE__) . '/cases/parser/issue60.php';
require_once dirname(__FILE__) . '/cases/parser/issue61.php';
require_once dirname(__FILE__) . '/cases/parser/issue62.php';
require_once dirname(__FILE__) . '/cases/parser/issue65.php';
require_once dirname(__FILE__) . '/cases/parser/issue67.php';
require_once dirname(__FILE__) . '/cases/parser/issue68.php';
require_once dirname(__FILE__) . '/cases/parser/issue69.php';
require_once dirname(__FILE__) . '/cases/parser/issue70.php';
require_once dirname(__FILE__) . '/cases/parser/issue71.php';
require_once dirname(__FILE__) . '/cases/parser/issue72.php';
require_once dirname(__FILE__) . '/cases/parser/issue74.php';
require_once dirname(__FILE__) . '/cases/parser/issue78.php';
require_once dirname(__FILE__) . '/cases/parser/issue80.php';
require_once dirname(__FILE__) . '/cases/parser/issue82.php';
require_once dirname(__FILE__) . '/cases/parser/issue84.php';
require_once dirname(__FILE__) . '/cases/parser/issue87.php';
require_once dirname(__FILE__) . '/cases/parser/issue90.php';
require_once dirname(__FILE__) . '/cases/parser/issue91.php';
require_once dirname(__FILE__) . '/cases/parser/issue93.php';
require_once dirname(__FILE__) . '/cases/parser/issue94.php';
require_once dirname(__FILE__) . '/cases/parser/issue95.php';
require_once dirname(__FILE__) . '/cases/parser/issue97.php';
require_once dirname(__FILE__) . '/cases/parser/issue98.php';
require_once dirname(__FILE__) . '/cases/parser/issue102.php';
require_once dirname(__FILE__) . '/cases/parser/issue107.php';
require_once dirname(__FILE__) . '/cases/parser/issue108.php';
require_once dirname(__FILE__) . '/cases/parser/issue117.php';
require_once dirname(__FILE__) . '/cases/parser/issue120.php';
require_once dirname(__FILE__) . '/cases/parser/issue122.php';
require_once dirname(__FILE__) . '/cases/parser/issue125.php';
require_once dirname(__FILE__) . '/cases/parser/left.php';
require_once dirname(__FILE__) . '/cases/parser/manual.php';
require_once dirname(__FILE__) . '/cases/parser/nested.php';
require_once dirname(__FILE__) . '/cases/parser/positions.php';
require_once dirname(__FILE__) . '/cases/parser/select.php';
require_once dirname(__FILE__) . '/cases/parser/show.php';
require_once dirname(__FILE__) . '/cases/parser/subselect.php';
require_once dirname(__FILE__) . '/cases/parser/tableoptions.php';
require_once dirname(__FILE__) . '/cases/parser/union.php';
require_once dirname(__FILE__) . '/cases/parser/update.php';
require_once dirname(__FILE__) . '/cases/parser/variables.php';
require_once dirname(__FILE__) . '/cases/parser/zero.php';
echo "processing tests within: " . (microtime(true) - $start) . " seconds\n";

?>