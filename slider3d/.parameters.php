<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arCurrentValues */

if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(Array("-"=>" "));

$arIBlocks=Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = $arRes["NAME"];

$arSorts = Array("ASC"=>GetMessage("T_IBLOCK_DESC_ASC"), "DESC"=>GetMessage("T_IBLOCK_DESC_DESC"));
$arSortFields = Array(
		"ID"=>GetMessage("T_IBLOCK_DESC_FID"),
		"NAME"=>GetMessage("T_IBLOCK_DESC_FNAME"),
		"ACTIVE_FROM"=>GetMessage("T_IBLOCK_DESC_FACT"),
		"SORT"=>GetMessage("T_IBLOCK_DESC_FSORT"),
		"TIMESTAMP_X"=>GetMessage("T_IBLOCK_DESC_FTSAMP")
	);

$arProperty_LNS = array();
$rsProp = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValues["IBLOCK_ID"])?$arCurrentValues["IBLOCK_ID"]:$arCurrentValues["ID"])));
while ($arr=$rsProp->Fetch())
{
	$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S")))
	{
		$arProperty_LNS[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_ID" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => '={$_REQUEST["ID"]}',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),
		"NEWS_COUNT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_CONT"),
			"TYPE" => "STRING",
			"DEFAULT" => "20",
		),
     "SHOW_TEXT" => Array(
			"PARENT" => "BASE",   
			"NAME" => GetMessage("SHOW_TEXT"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>'Да','no'=>'Нет'),
			"DEFAULT" => 'yes',
		),
    "THEME_CORUSEL" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("THEME_CORUSEL"),
			"TYPE" => "LIST",
			"VALUES" => array(
					"dualsided_1",
					"dualsided_2",
					"dualsided_3",
					"crosssided",
					"onesided",
					"frontonesided",
					"acordeon",
					"flipping"
			),
			"DEFAULT" => '1',
		),
     "FLUID" => Array(
			"PARENT" => "BASE",   
			"NAME" => GetMessage("FLUID"),
			"TYPE" => "LIST",
			"VALUES" => array('responsive'=>'responsive','fluidwidth'=>'fluidwidth'),
			"DEFAULT" => 'responsive',
		),
    "BACKGROUND_COLOR" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BACKGROUND_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => '#fff',
		),
     "BACKGROUND_IMAGE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BACKGROUND_IMAGE"),
			"TYPE" => "STRING",
			"DEFAULT" => '',
		),
     "BACKGROUND_REPEAT" => Array(
			"PARENT" => "BASE",   
			"NAME" => GetMessage("BACKGROUND_REPEAT"),
			"TYPE" => "LIST",
			"VALUES" => array('repeat-x'=>'repeat-x','repeat-y'=>'repeat-y','no-repeat'=>'no-repeat'),
			"DEFAULT" => 'no-repeat',
		),
    "SLIDE_WIDHT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SLIDE_WIDHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "500",
		),
    "SLIDE_HEIGHT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SLIDE_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "500",
		),
    "THUMBNAIL_WIDHT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("THUMBNAIL_WIDHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "200",
		),
     "THUMBNAIL_HEIGHT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("THUMBNAIL_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "200",
		),
      "BIG_WIDTH" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BIG_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "800",
		),
      "BIG_HEIGHT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BIG_HEIGHT"),
			"TYPE" => "STRING",
			"DEFAULT" => "600",
		),
		"SORT_BY1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("T_IBLOCK_DESC_IBORD1"),
			"TYPE" => "LIST",
			"DEFAULT" => "ACTIVE_FROM",
			"VALUES" => $arSortFields,
			"ADDITIONAL_VALUES" => "Y",
		),
		"SORT_ORDER1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("T_IBLOCK_DESC_IBBY1"),
			"TYPE" => "LIST",
			"DEFAULT" => "DESC",
			"VALUES" => $arSorts,
			"ADDITIONAL_VALUES" => "Y",
		),
						
		"CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
		
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BNL_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
	),
);

?>
