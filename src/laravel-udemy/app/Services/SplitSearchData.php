<?php

namespace App\Services;

class SplitSearchData 
{
    public static function splitSeach($search) {
        // 全角スペースを半角にする
        $search_split = mb_convert_kana($search, 's');

        // 空白で区切る
        $search_split2 = preg_split('/[\s]+/', $search_split);

        return $search_split2;
    }
}