<?php
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

class SectionLister{
    public static function getSiblings($sectionId, $parentSectionId, $block)
    {
        $prevNum = 0;
        $curNum = 0;
        $nextNum = 0;
        $prevItem = array();
        $nextItem = array();
        $dbResult = CIBlockSection::GetList(array('NAME'=>'ASC'), Array(
            "IBLOCK_ID" => $block,
            "ACTIVE"=>"Y",
            "GLOBAL_ACTIVE"=>"Y",
            'SECTION_ID' => $parentSectionId,
        ), false, array('ID', 'NAME', 'IBLOCK_SECTION_ID','SECTION_PAGE_URL'));

        while($currentItem = $dbResult->GetNext()){
            if($currentItem['ID'] == $sectionId)
                break;
            else{
                $prevItem = $currentItem;
                $prevNum++;
            }
        }

        $curNum = $prevNum + 1;

        if($currentItem = $dbResult->GetNext()){
            $nextItem = $currentItem;
            $nextNum = $curNum + 1;
        }
        $prevItem['num'] = $prevNum;
        $nextItem['num'] = $nextNum;
        return array('prev'=>$prevItem, 'next' => $nextItem);
    }

}