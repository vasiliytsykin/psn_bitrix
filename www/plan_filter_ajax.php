<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule( "iblock" );


$flatFilter = $_REQUEST['filter'];

function searchPlans($params, $DB){
	$q = '
SELECT Find.type_name
FROM (
	SELECT 
		build.IBLOCK_ELEMENT_ID IBLOCK_ELEMENT_ID, 
		build.BuildingNumber BuildingNumber, 
		room.Rooms Rooms, 
		plans.Plan type_name, 
		finish.ApartmentFurnish ApartmentFurnish
	FROM 
		(SELECT IBLOCK_ELEMENT_ID, VALUE BuildingNumber
		FROM b_iblock_element_property
		WHERE IBLOCK_PROPERTY_ID = 8) as build, 
		
		(SELECT IBLOCK_ELEMENT_ID, VALUE Rooms
		FROM b_iblock_element_property
		WHERE IBLOCK_PROPERTY_ID = 20) as room,
		
		(SELECT IBLOCK_ELEMENT_ID, VALUE Plan
		FROM b_iblock_element_property
		WHERE IBLOCK_PROPERTY_ID = 12) as plans,
				
		(SELECT IBLOCK_ELEMENT_ID, VALUE ApartmentFurnish
		FROM b_iblock_element_property
		WHERE IBLOCK_PROPERTY_ID = 19) as finish 
		
	WHERE 
		room.IBLOCK_ELEMENT_ID = build.IBLOCK_ELEMENT_ID 
		AND room.IBLOCK_ELEMENT_ID = plans.IBLOCK_ELEMENT_ID
		AND room.IBLOCK_ELEMENT_ID = finish.IBLOCK_ELEMENT_ID
) as Find';


	$where = '';
	$arWhere = array();
	foreach($params as $code => $val){
		$sVal = '';
		$arVal=array();
		if($code=='Rooms_'){
			$arFromTo = explode('-',$val);
			$sVal.='('.$code.' BETWEEN '.$arFromTo[0].' AND '.$arFromTo[1].')';

		}elseif($code=='BuildingNumber' || $code=='Rooms'){
			foreach($val as $build){
				$arVal[]=$code.' = '.$build;
			}
			$sVal.='('.implode(' OR ', $arVal).')';
		}elseif($code=='ApartmentFurnish'){
			if(count($val)==1){
				$sVal.='ApartmentFurnish LIKE "'.($val[0]=='Y'?'С отделкой':'Без отделки').'"';
			}
		}
		if($sVal!=''){
			$arWhere[] = '('.$sVal.')';
		}
	}
	$where = implode(' AND ', $arWhere);
	if($where!=''){
		$q.=' WHERE '.$where;
	}
	$q.= ' GROUP BY type_name';
	$resCount = $DB->Query($q, false, $err_mess.__LINE__);
	$arCodes = array();
	while($resRow = $resCount->Fetch())
	{
		$arCodes[] = $resRow['type_name'];
	}
	return $arCodes;
}


$planCodes = searchPlans($flatFilter, $DB);


$flatFilter = array('PROPERTY_name_type' => $planCodes);

?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"tmp_plan_filter_result",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "flatFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "visual",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("square","lv_balcon","lv_bathroom_1","lv_bathroom_2","lv_room_1","lv_room_2","lv_room_3","lv_room_4","lv_kitchen_1","lv_kitchen_2","name_type","lv_hallway","lv_restroom_1","lv_restroom_2","svg"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>