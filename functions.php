<?php

function thumbnail($cid) {
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('table.contents.text')
        ->from('table.contents')
        ->where('type = \'attachment\' AND table.contents.parent=?', $cid)
        ->order('table.contents.cid', Typecho_Db::SORT_ASC)
        ->limit(1));

    if (count($rs) == 1) {
        $attach_text = unserialize($rs['text']);
        echo Helper::options()->siteUrl.$attach_text['path'];
    } else {
        echo Helper::options()->themeUrl."/images/index.jpg";
    }

}