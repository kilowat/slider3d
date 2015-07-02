<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
global $DB;
/** @global CUser $USER */
global $USER;
/** @global CMain $APPLICATION */
global $APPLICATION;

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
if(strlen($arParams["IBLOCK_TYPE"])<=0)
	$arParams["IBLOCK_TYPE"] = "news";
$arParams["IBLOCK_ID"] = trim($arParams["IBLOCK_ID"]);

$arFilter = array(
	"IBLOCK_TYPE"=>$arParams["IBLOCK_TYPE"],
	"IBLOCK_ID"=>$arParams["IBLOCK_ID"],
	"ACTIVE"=>"Y",
);

if($this->StartResultCache(false, array(($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))){
	if(!CModule::IncludeModule("iblock")){
		$this->AbortResultCache();
		ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
		return;
	}
	$dbRes = CIBlockElement::GetList(
			array("SORT"=>"ASC"),
			$arFilter,
			false,
			false,
			array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_".$arParams["LINK"])
			);
	while($res = $dbRes->GetNext()){
		$arResult["ITEMS"][] = $res;
	}
		$this->IncludeComponentTemplate();
}
	


?>