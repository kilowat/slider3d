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
		"SETTINGS_CONTROL" => array(
			 "NAME" => GetMessage("SETTINGS_CONTROL")
		  ),
		"SETTINGS_LIGHT_BOX" => array(
			 "NAME" => GetMessage("SETTINGS_LIGHT_BOX")
		  ),
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
	"LINK"=>array(
			"PARENT"=>"BASE",
			"NAME"=>GetMessage("SETTINGS_LINK"),
			"TYPE"=>"LIST",
			"VALUES"=>$arProperty_LNS,
			"DEFAULT"=>$arProperty_LNS[0],
			
	),
     "SHOW_TEXT" => Array(
			"PARENT" => "BASE",   
			"NAME" => GetMessage("SHOW_TEXT"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
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
	"PLAY" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("PLAY"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => "no",
		),	
    "PLAY_TIMER" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("PLAY_TIMER"),
			"TYPE" => "STRING",
			"DEFAULT" => 5000,
		),
    "TIMER_TEXT_COLOR" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TIMER_TEXT_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => '#fff',
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
     "MAX_NUM_THUMBNAILS_ON_MOBILE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("MAX_NUM_THUMBNAILS_ON_MOBILE"),
			"TYPE" => "STRING",
			"DEFAULT" => 13,
		),
     "SHOW_THUMBNAILS_GRADIENT" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SHOW_THUMBNAILS_GRADIENT"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
	  "TEXT_OFFSET" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TEXT_OFFSET"),
			"TYPE" => "STRING",
			"DEFAULT" => 10,
		),
	  "CONTROL_POSITION" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_POSITION"),
			"TYPE" => "LIST",
			"VALUES" => array('bottom'=>'снизу','top'=>'сверху'),
			"DEFAULT" => "botton",
		),
	  "CONTROL_OFFSET" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_OFFSET"),
			"TYPE" => "STRING",
			"DEFAULT" => 10,
		),
     "CONTROL_PREV_NEXT_BUTTON" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_PREV_NEXT_BUTTON"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
     "CONTROL_SLIDE_BUTTON" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_SLIDE_BUTTON"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
     "CONTROL_SCROLL_BAR" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_SCROLL_BAR"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
     "CONTROL_ENABLED_MOUSE_WHEEL_SCROLL" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_ENABLED_MOUSE_WHEEL_SCROLL"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
	  "CONTROL_SCROLL_BAR_TEXT_COLOR_NORMAL" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_SCROLL_BAR_TEXT_COLOR_NORMAL"),
			"TYPE" => "STRING",
			"DEFAULT" => "#CCC",
		),
	  "CONTROL_SCROLL_BAR_TEXT_COLOR_SELECTED" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_SCROLL_BAR_TEXT_COLOR_SELECTED"),
			"TYPE" => "STRING",
			"DEFAULT" => "#FFF",
		),
     "CONTROL_SCROLL_BAR_KEYBOARD_SUPPORT" => Array(
			"PARENT" => "SETTINGS_CONTROL",
			"NAME" => GetMessage("CONTROL_SCROLL_BAR_KEYBOARD_SUPPORT"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
     "LIGHT_BOX_BUTTON_NEXT_PREV" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_BUTTON_NEXT_PREV"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
     "LIGHT_BOX_BUTTON_ZOOM" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_BUTTON_ZOOM"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
     "LIGHT_BOX_BUTTON_INFO" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_BUTTON_INFO"),
			"TYPE" => "LIST",
			"VALUES" => array('yes'=>GetMessage("YES"),'no'=>GetMessage("NO")),
			"DEFAULT" => 'yes',
		),
	  "LIGHT_BACKGROUND_COLOR" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BACKGROUND_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "#000",
		),
	  "LIGHT_BOX_BACKGROUND_WINDOW_INFO_COLOR" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_BACKGROUND_WINDOW_INFO_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "#fff",
		),
	  "LIGHT_BOX_ITEMS_BORDER_COLOR_1" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_ITEMS_BORDER_COLOR_1"),
			"TYPE" => "STRING",
			"DEFAULT" => "#000",
		),
	  "LIGHT_BOX_ITEMS_BORDER_COLOR_2" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_ITEMS_BORDER_COLOR_2"),
			"TYPE" => "STRING",
			"DEFAULT" => "#e4FFe4",
		),
	  "LIGHT_BOX_ITEMS_BACKGROUND_COLOR" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_ITEMS_BACKGROUND_COLOR"),
			"TYPE" => "STRING",
			"DEFAULT" => "#000",
		),
	  "LIGHT_BOX_OPACITY" => Array(
			"PARENT" => "SETTINGS_LIGHT_BOX",
			"NAME" => GetMessage("LIGHT_BOX_OPACITY"),
			"TYPE" => "STRING",
			"DEFAULT" => ".9",
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
