<?php

function execSQL($sql) {
    return mysql_query($sql);
}

function fetchOne($sql) {
    $rs = execSQL($sql);
    return mysql_fetch_array($rs);
}

function getDatas($sql) {
    $ar = array();
    $rs = execSQL($sql);
    while ($row = @mysql_fetch_array($rs)) {
        array_push($ar, $row);
    }
    return $ar;
}

function getData($sql) {
    $rs = execSQL($sql);
    return $row = @mysql_fetch_array($rs);
}

function insert($tbl, $aListFieldValue = array()) {
    $listFields = "";
    $listValues = "";
    foreach ($aListFieldValue as $k => $v) {
        $lF[] = $k;
        $lV[] = "'" . $v . "'";
    }
    $listFields = implode(',', $lF);
    $listValues = implode(',', $lV);
    $sql = "INSERT INTO $tbl($listFields) VALUES($listValues)";
    if (execSQL($sql)) {
        return 1;
    }
}

function redir($url) {
    echo "<script>window.location.href='" . $url . "'</script>";
}

?>
