

PHP_CodeSniffer\Exceptions\DeepExitException: <?php

                                                /**
                                                 * This
                                                 * 
                                                 * PHP VERSION 5.6.3
                                                 * 
                                                 * @category This
                                                 * @package  Common
                                                 * @author   Wcq <wuchangqian@gmail.com>
                                                 * @license  http://www.baidu.com/bsd.license bsd
                                                 * @link     http://www.baidu.com/b.html
                                                 */

                                                header("Content-Type:text/plain;charset=utf-8");

                                                $host = 'localhost';

                                                if (strpos($_SERVER['HTTP_HOST'], 'didaozhan.com') !== false) {
                                                    $db_user = 'shop7001798_u';
                                                    $db_pwd = 'SMTuPQG5b6Tn';
                                                    $db_name = 'shop7001798';
                                                } else {
                                                    $db_user = 'root';
                                                    $db_pwd = 'sys123';
                                                    $db_name = 'ekd';
                                                }

                                                /**
                                                 * This 
                                                 * 
                                                 * @return void;
                                                 */
                                                function Get_cats()
                                                {
                                                    global $db_user, $db_name, $db_pwd, $host;

                                                    $link = mysql_connect($host, $db_user, $db_pwd);

                                                    mysql_select_db($db_name, $link);

                                                    if (!$link) {
                                                        die("Connect failed: " . mysql_error());
                                                        exit();
                                                    }

    /* --------------------- */

                                                    mysql_query('SET NAMES "utf8";', $link);
    /* ====================== */

                                                    $result = mysql_query('SELECT cat_id , parent_id , cat_path , is_leaf , cat_name , child_count FROM `sdb_goods_cat` WHERE disabled="false" ORDER BY cat_path LIMIT 0 , 100000;', $link) or die(mysql_error($link));

                                                    $cat_record = <<<ENDOF
    
<item>
    <cat_id>%s</cat_id>
    <parent_id>%s</parent_id>
    <parent_name>%s</parent_name>
    <cat_path>%s</cat_path>
    <cat_name><![CDATA[%s]]></cat_name>
    <is_leaf>%s</is_leaf>
    <child_count>%s</child_count>
</item>
ENDOF;
    //echo mysql_num_rows($result);

                                                    $ary = array("<?xml version='1.0' encoding='utf-8' ?>\n<cats>");

                                                    $objs = array();

                                                    while ($obj = mysql_fetch_assoc($result)) {
                                                        $objs[] = $obj;
                                                    }

                                                    foreach ($objs as $o) {
                                                        $parent_name = '临时节点';

                                                        foreach ($objs as $tmo) {
                                                            if ($tmo['cat_id'] == $o['parent_id']) {
                                                                $parent_name = $tmo['cat_name'];
                                                                break;
                                                            }
                                                        }

                                                        $ary[] = sprintf($cat_record, $o['cat_id'], $o['parent_id'], $parent_name, $o['cat_path'], $o['cat_name'], $o['is_leaf'], $o['child_count']);

                                                    }

                                                    $ary[] = '</cats>';
                                                    mysql_free_result($result);
                                                    mysql_close($link);
                                                    echo join('', $ary);
                                                }

                                                /**
                                                 * Nosdfl sdfasl 
                                                 * $a string sddsdf
                                                 * $b string sdsdfsdf
                                                 * 
                                                 * @return string
                                                 */
                                                function Biantai_sort($a, $b)
                                                {
                                                    if ($a['parent_id'] == '0' || $a['parent_id'] == 0) {
                                                        return 1;
                                                    } else {

                                                    }
                                                }

                                                /**
                                                 * No
                                                 * 
                                                 * @return void
                                                 */
                                                function Get_Virtual_cats()
                                                {
                                                    global $db_user, $db_name, $db_pwd, $host;

                                                }

                                                get_cats();
                                                in / Users / wcq / . composer / vendor / squizlabs / php_codesniffer / src / Reports / Cbf . php on line 56

                                                    Call Stack :
                                                    0.0005 356720 1. {
                                                    main
                                                }
                                                () / Users / wcq / . composer / vendor / squizlabs / php_codesniffer / bin / phpcbf : 0
                                                    0.0027 570648 2. PHP_CodeSniffer\Runner->runPHPCBF() / Users / wcq / . composer / vendor / squizlabs / php_codesniffer / bin / phpcbf : 18
                                                    0.0683 2995352 3. PHP_CodeSniffer\Runner->run() / Users / wcq / . composer / vendor / squizlabs / php_codesniffer / src / Runner . php : 200
                                                    0.0745 3487536 4. PHP_CodeSniffer\Runner->processFile() / Users / wcq / . composer / vendor / squizlabs / php_codesniffer / src / Runner . php : 401
                                                    0.1581 4077280 5. PHP_CodeSniffer\Reporter->cacheFileReport() / Users / wcq / . composer / vendor / squizlabs / php_codesniffer / src / Runner . php : 618
                                                    0.1582 4095864 6. PHP_CodeSniffer\Reports\Cbf->generateFileReport() / Users / wcq / . composer / vendor / squizlabs / php_codesniffer / src / Reporter . php : 284

                                                    < ? php

                                                /**
                                                 * This
                                                 * 
                                                 * PHP VERSION 5.6.3
                                                 * 
                                                 * @category This
                                                 * @package  Common
                                                 * @author   Wcq <wuchangqian@gmail.com>
                                                 * @license  http://www.baidu.com/bsd.license bsd
                                                 * @link     http://www.baidu.com/b.html
                                                 */

                                                header("Content-Type:text/plain;charset=utf-8");

                                                $host = 'localhost';

                                                if (strpos($_SERVER['HTTP_HOST'], 'didaozhan.com') !== false) {
                                                    $db_user = 'shop7001798_u';
                                                    $db_pwd = 'SMTuPQG5b6Tn';
                                                    $db_name = 'shop7001798';
                                                } else {
                                                    $db_user = 'root';
                                                    $db_pwd = 'sys123';
                                                    $db_name = 'ekd';
                                                }

                                                /**
                                                 * This 
                                                 * 
                                                 * @return void;
                                                 */
                                                function Get_cats()
                                                {
                                                    global $db_user, $db_name, $db_pwd, $host;

                                                    $link = mysql_connect($host, $db_user, $db_pwd);

                                                    mysql_select_db($db_name, $link);

                                                    if (!$link) {
                                                        die("Connect failed: " . mysql_error());
                                                        exit();
                                                    }

    /* --------------------- */

                                                    mysql_query('SET NAMES "utf8";', $link);
    /* ====================== */

                                                    $result = mysql_query('SELECT cat_id , parent_id , cat_path , is_leaf , cat_name , child_count FROM `sdb_goods_cat` WHERE disabled="false" ORDER BY cat_path LIMIT 0 , 100000;', $link) or die(mysql_error($link));

                                                    $cat_record = <<<ENDOF
    
<item>
    <cat_id>%s</cat_id>
    <parent_id>%s</parent_id>
    <parent_name>%s</parent_name>
    <cat_path>%s</cat_path>
    <cat_name><![CDATA[%s]]></cat_name>
    <is_leaf>%s</is_leaf>
    <child_count>%s</child_count>
</item>
ENDOF;
    //echo mysql_num_rows($result);

                                                    $ary = array("<?xml version='1.0' encoding='utf-8' ?>\n<cats>");

                                                    $objs = array();

                                                    while ($obj = mysql_fetch_assoc($result)) {
                                                        $objs[] = $obj;
                                                    }

                                                    foreach ($objs as $o) {
                                                        $parent_name = '临时节点';

                                                        foreach ($objs as $tmo) {
                                                            if ($tmo['cat_id'] == $o['parent_id']) {
                                                                $parent_name = $tmo['cat_name'];
                                                                break;
                                                            }
                                                        }

                                                        $ary[] = sprintf($cat_record, $o['cat_id'], $o['parent_id'], $parent_name, $o['cat_path'], $o['cat_name'], $o['is_leaf'], $o['child_count']);

                                                    }

                                                    $ary[] = '</cats>';
                                                    mysql_free_result($result);
                                                    mysql_close($link);
                                                    echo join('', $ary);
                                                }

                                                /**
                                                 * Nosdfl sdfasl 
                                                 * $a string sddsdf
                                                 * $b string sdsdfsdf
                                                 * 
                                                 * @return string
                                                 */
                                                function Biantai_sort($a, $b)
                                                {
                                                    if ($a['parent_id'] == '0' || $a['parent_id'] == 0) {
                                                        return 1;
                                                    } else {

                                                    }
                                                }

                                                /**
                                                 * No
                                                 * 
                                                 * @return void
                                                 */
                                                function Get_Virtual_cats()
                                                {
                                                    global $db_user, $db_name, $db_pwd, $host;

                                                }

                                                get_cats();
