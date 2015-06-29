<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?echo 'test';?>
<?/*
switch (id)
	{
		case 1:
			coverflow.setPreset([86, 78, 200, 93, 70, 100, 0, true, 0, true, 0, 0, "dualsided", "left", "rgba(0, 0, 0, 0)", "rgba(0, 0, 0, 1)"]);
			break;
		case 2:
			coverflow.setPreset([80, 165, 400, 130, -40, 100, 0, true, 0, false, 0, 0, "dualsided", "left", "rgba(0, 0, 0, .4)", "rgba(0, 0, 0, 1)"]);
			break;
		case 3:
			coverflow.setPreset([86, 78, 200, 93, 2, 100, 0, true, 0, false, 0, 0, "dualsided", "left", "rgba(0, 0, 0, .4)", "rgba(0, 0, 0, 1)"]);
			break;
		case 4:
			coverflow.setPreset([100, 20, 150, 30, 60, 50, 0, true, 0, true, -15, 0, "dualsided", "left", "rgba(0, 0, 0, .4)", "rgba(0, 0, 0, 1)"]);
			break;
		case 5:
			coverflow.setPreset([240, 0, 0, 20, 0, 0, 0, true, 0, true, -15, 0, "onesided", "left", "rgba(0, 0, 0, .2)", "rgba(0, 0, 0, 1)"]);
			break;
		case 6:
			coverflow.setPreset([240, 0, 0, 20, 0, 0, 0, true, 0, true, -15, 0, "crosssided", "left", "rgba(0, 0, 0, 1)", "rgba(0, 0, 0, .2)"]);
			break;
		case 7:
			coverflow.setPreset([100, 30, 150, 60, 60, 50, 0, true, 0, true, -3, 0, "frontonesided", "left", "rgba(0, 0, 0, 1)", "rgba(0, 0, 0, .2)"]);
			break;
		case 8:
			coverflow.setPreset([86, 78, 200, 93, 70, 0, 0, true, 0, true, -10, 0, "acordeon", "left", "rgba(0, 0, 0, 0)", "rgba(0, 0, 0, 0)"]);
			break;
		case 9:
			coverflow.setPreset([86, 78, 200, 93, 70, 0, 0, true, 0, true, 0, -30, "flipping", "left", "rgba(0, 0, 0, 0)", "rgba(0, 0, 0, 0)"]);
			break;
	}
*/?>


<script type="text/javascript">
    var coverflow;

    FWDUtils.onReady(function(){

                    setupCoverflow();

    });

    function setupCoverflow(){
            coverflow = new FWDSimple3DCoverflow(
            {
                    //required settings
                    coverflowHolderDivId:"slider-3d",
                    coverflowDataListDivId:"playList1",
                    displayType:"<?echo $arParams["FLUID"]?>",//responsive //fluidwidth
                    autoScale:"no",
                    coverflowWidth:<?echo $arParams["SLIDE_WIDHT"]?>,
                    coverflowHeight:<?echo $arParams["SLIDE_HEIGHT"]?>,
                    skinPath:"/bitrix/components/alienspro/slider3d/templates/.default/images/",

                    //main settings
                    backgroundColor:"<?echo $arParams["THEME_COLOR"]?>",
                    backgroundImagePath:"",
                    backgroundRepeat:"repeat-x",
                    showDisplay2DAlways:"no",
                    coverflowStartPosition:"center",
                    coverflowTopology:"dualsided",
                    coverflowXRotation:0,
                    coverflowYRotation:0,
                    numberOfThumbnailsToDisplayLeftAndRight:"all",
                    showContextMenu:"no",

                    //thumbnail settings
                    thumbnailWidth:<?echo $arParams["THUMBNAIL_WIDHT"]?>,
                    thumbnailHeight:<?echo $arParams["THUMBNAIL_HEIGHT"]?>,
                    thumbnailXOffset3D:80,
                    thumbnailXSpace3D:80,
                    thumbnailZOffset3D:400,
                    thumbnailZSpace3D:0,
                    thumbnailYAngle3D:70,
                    thumbnailXOffset2D:20,
                    thumbnailXSpace2D:30,
                    thumbnailHoverOffset:100,
                    thumbnailBorderSize:0,
                    thumbnailBackgroundColor:"#FFFFFF",
                    thumbnailBorderColor1:"#FFFFFF",
                    thumbnailBorderColor2:"#FFFFFF",
                    transparentImages:"no",
                    thumbnailsAlignment:"bottom",
                    maxNumberOfThumbnailsOnMobile:13,
                    showThumbnailsGradient:"yes",
                    thumbnailGradientDirection:"left",
                    thumbnailGradientColor1:"rgba(0, 0, 0, 0)",
                    thumbnailGradientColor2:"rgba(0, 0, 0, 1)",
                    showText:"<?echo $arParams["SHOW_TEXT"]?>",
                    textOffset:10,
                    showThumbnailBoxShadow:"yes",
                    thumbnailBoxShadowCss:"0px 2px 2px #111111",
                    showTooltip:"yes",
                    dynamicTooltip:"yes",
                    showReflection:"yes",
                    reflectionHeight:60,
                    reflectionDistance:0,
                    reflectionOpacity:.4,

                    //controls settings
                    slideshowDelay:5000,
                    autoplay:"no",
                    disableNextAndPrevButtonsOnMobile:"no",
                    controlsMaxWidth:700,
                    slideshowTimerColor:"#FFFFFF",
                    controlsPosition:"bottom",
                    controlsOffset:15,
                    showPrevButton:"yes",
                    showNextButton:"yes",
                    showSlideshowButton:"yes",
                    showScrollbar:"yes",
                    disableScrollbarOnMobile:"yes",
                    enableMouseWheelScroll:"yes",
                    scrollbarHandlerWidth:200,
                    scrollbarTextColorNormal:"#000000",
                    scrollbarTextColorSelected:"#FFFFFF",
                    addKeyboardSupport:"yes",

                    //categories settings
                    showCategoriesMenu:"no",
                    startAtCategory:1,
                    categoriesMenuMaxWidth:700,
                    categoriesMenuOffset:25,
                    categoryColorNormal:"#999999",
                    categoryColorSelected:"#FFFFFF",

                    //lightbox settings
                    addLightBoxKeyboardSupport:"yes",
                    showLightBoxNextAndPrevButtons:"yes",
                    showLightBoxZoomButton:"yes",
                    showLightBoxInfoButton:"yes",
                    showLighBoxSlideShowButton:"yes",
                    showLightBoxInfoWindowByDefault:"no",
                    slideShowAutoPlay:"no",
                    lightBoxVideoAutoPlay:"no",
                    lightBoxBackgroundColor:"#000000",
                    lightBoxInfoWindowBackgroundColor:"#FFFFFF",
                    lightBoxItemBorderColor1:"#fcfdfd",
                    lightBoxItemBorderColor2:"#e4FFe4",
                    lightBoxItemBackgroundColor:"#333333",
                    lightBoxMainBackgroundOpacity:.9,
                    lightBoxInfoWindowBackgroundOpacity:.9,
                    lightBoxBorderSize:0,
                    lightBoxBorderRadius:0,
                    lightBoxSlideShowDelay:4
            });

    }

    </script>
    <div id="slider-3d"></div>

    
    <!-- thumbnails holder -->
    <div id="mainThumbsHolder">
    <div id="thumbsHolder"></div>
    </div>
    <!-- coverflow data -->
    <ul id="playList1" style="display: none;">
       
    <!-- category 1 -->
    <ul data-cat="">
        <?foreach($arResult["ITEMS"] as $arItems):?>
        <? 
           
          $slideImages = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"], Array("width" => $arParams['BIG_WIDTH'], "height" => $arParams['BIG_HEIGHT']));?>

             <ul>
                        <li data-type="media" data-url="<?=$slideImages['src']?>"></li>
                        <li data-thumbnail-path="<?=$slideImages['src']?>" data-thumbnail-width="<?echo $arParams["THUMBNAIL_WIDHT"]?>" data-thumbnail-height="<?echo $arParams["THUMBNAIL_HEIGHT"]?>"></li>
                        <li data-thumbnail-text="">

                                <p class="smallLabel"><?=$arItems["NAME"]?></p>
                        </li>
                        <li data-info="">

                                <p class="mediaDescriptionText"><?=$arItems["NAME"]?></p>
                        </li>
                </ul>
         <?endforeach?>
    </ul>
 </ul>