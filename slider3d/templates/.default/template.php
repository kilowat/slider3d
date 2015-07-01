<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?
switch ($arParams["THEME_CORUSEL"]) {
    case 0:
        $parametrs = array(
            "thumbXOffset3D"=>86,
            "thumbXSpace3D" => 78,
            "thumbZOffset3D" => 200,
            "thumbZSpace3D" => 93,
            "thumbYAngle3D" => 70,
            "thumbHoverOffset" => 100,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>0,
            "coverflowYRotation"=>0,
            "topology"=> "dualsided",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, .2)",
            "gradientColor2" => "rgba(0, 0, 0, 1)",
        );

        break;
    case 1:
        $parametrs = array(
            "thumbXOffset3D"=>80,
            "thumbXSpace3D" => 165,
            "thumbZOffset3D" => 400,
            "thumbZSpace3D" => 130,
            "thumbYAngle3D" => -40,
            "thumbHoverOffset" => 100,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>0,
            "coverflowYRotation"=>0,
            "topology"=> "dualsided",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, .4)",
            "gradientColor2" => "rgba(0, 0, 0, 1)",
        );
        break;
    case 2:
        $parametrs = array(
            "thumbXOffset3D"=>86,
            "thumbXSpace3D" => 78,
            "thumbZOffset3D" => 200,
            "thumbZSpace3D" => 93,
            "thumbYAngle3D" => 2,
            "thumbHoverOffset" => 100,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>0,
            "coverflowYRotation"=>0,
            "topology"=> "dualsided",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, .4)",
            "gradientColor2" => "rgba(0, 0, 0, 1)",
        );
        break;
    case 3:
        $parametrs = array(
            "thumbXOffset3D"=>240,
            "thumbXSpace3D" => 0,
            "thumbZOffset3D" => 0,
            "thumbZSpace3D" => 20,
            "thumbYAngle3D" => 0,
            "thumbHoverOffset" => 0,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>-15,
            "coverflowYRotation"=>0,
            "topology"=> "crosssided",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, 1)",
            "gradientColor2" => "rgba(0, 0, 0, .2)",
        );
        break;
     case 4:
       $parametrs = array(
            "thumbXOffset3D"=>240,
            "thumbXSpace3D" => 0,
            "thumbZOffset3D" => 0,
            "thumbZSpace3D" => 20,
            "thumbYAngle3D" => 0,
            "thumbHoverOffset" => 0,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>-15,
            "coverflowYRotation"=>0,
            "topology"=> "onesided",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, .2)",
            "gradientColor2" => "rgba(0, 0, 0, 1)",
        );
        break;
     case 5:
       $parametrs = array(
            "thumbXOffset3D"=>100,
            "thumbXSpace3D" => 30,
            "thumbZOffset3D" => 150,
            "thumbZSpace3D" => 60,
            "thumbYAngle3D" => 60,
            "thumbHoverOffset" => 50,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>-3,
            "coverflowYRotation"=>0,
            "topology"=> "frontonesided",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, 1)",
            "gradientColor2" => "rgba(0, 0, 0, .2)",
        );
        break;
     case 6:
       $parametrs = array(
            "thumbXOffset3D"=>86,
            "thumbXSpace3D" => 78,
            "thumbZOffset3D" => 200,
            "thumbZSpace3D" => 93,
            "thumbYAngle3D" => 70,
            "thumbHoverOffset" => 0,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>-10,
            "coverflowYRotation"=>0,
            "topology"=> "acordeon",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, 0)",
            "gradientColor2" => "rgba(0, 0, 0, 0)",
        );
        break;
     case 7:
       $parametrs = array(
            "thumbXOffset3D"=>86,
            "thumbXSpace3D" => 78,
            "thumbZOffset3D" => 200,
            "thumbZSpace3D" => 93,
            "thumbYAngle3D" => 70,
            "thumbHoverOffset" => 0,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>-10,
            "coverflowYRotation"=>0,
            "topology"=> "flipping",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, 0)",
            "gradientColor2" => "rgba(0, 0, 0, 0)",
        );
        break;
  
    default:
        $parametrs = array(
            "thumbXOffset3D"=>86,
            "thumbXSpace3D" => 78,
            "thumbZOffset3D" => 200,
            "thumbZSpace3D" => 93,
            "thumbYAngle3D" => 70,
            "thumbHoverOffset" => 100,
            "showRefl" => true,
            "reflDist" => 0,
            "coverflowXRotation"=>0,
            "coverflowYRotation"=>0,
            "topology"=> "dualsided",
            "thumbnailGradientDirection"=>"left",
            "gradientColor1" => "rgba(0, 0, 0, .2)",
            "gradientColor2" => "rgba(0, 0, 0, 1)",
        );
        break;
}

?>
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
                    displayType:"<?=$arParams["FLUID"]?>",//responsive //fluidwidth
                    coverflowWidth:<?=$arParams["SLIDE_WIDHT"]?>,
                    coverflowHeight:<?=$arParams["SLIDE_HEIGHT"]?>,
                    skinPath:"<?=$templateFolder?>/images",

                    //main settings
                    backgroundColor:"<?=$arParams["BACKGROUND_COLOR"]?>",
                    backgroundImagePath:"<?=$arParams["BACKGROUND_IMAGE"]?>",
                    backgroundRepeat:"<?=$arParams["BACKGROUND_REPEAT"]?>",
                    coverflowTopology:"<?=$parametrs["topology"]?>",
                    coverflowXRotation:<?=$parametrs["coverflowXRotation"]?>,
                    coverflowYRotation:<?=$parametrs["coverflowYRotation"]?>,

                    //thumbnail settings
                    thumbnailWidth:<?=$arParams["THUMBNAIL_WIDHT"]?>,
                    thumbnailHeight:<?=$arParams["THUMBNAIL_HEIGHT"]?>,
                    thumbnailXOffset3D:<?=$parametrs["thumbXOffset3D"]?>,
                    thumbnailXSpace3D:<?=$parametrs["thumbXSpace3D"]?>,
                    thumbnailZOffset3D:<?=$parametrs["thumbZOffset3D"]?>,
                    thumbnailZSpace3D:<?=$parametrs["thumbZSpace3D"]?>,
                    thumbnailYAngle3D:<?=$parametrs["thumbYAngle3D"]?>,
                    thumbnailHoverOffset:<?=$parametrs["thumbHoverOffset"]?>,
                    maxNumberOfThumbnailsOnMobile:<?=$arParams["MAX_NUM_THUMBNAILS_ON_MOBILE"]*1?>,
                    showThumbnailsGradient:"<?=$arParams["SHOW_THUMBNAILS_GRADIENT"]?>",
                    thumbnailGradientDirection:"<?=$parametrs["thumbnailGradientDirection"]?>",
                    thumbnailGradientColor1:"<?=$parametrs["gradientColor1"]?>",
                    thumbnailGradientColor2:"<?=$parametrs["gradientColor2"]?>",
                    showText:"<?=$arParams["SHOW_TEXT"]?>",
                    textOffset:<?=$arParams["TEXT_OFFSET"]*1?>,
                    showReflection:<?=$parametrs["showRefl"]?>,
                    reflectionDistance:<?=$parametrs["reflDist"]?>,
                    //controls settings
                    slideshowDelay:<?=$arParams["PLAY_TIMER"]*1?>,
                    autoplay:"<?=$arParams["PLAY"]?>",
                    slideshowTimerColor:"<?=$arParams["TIMER_TEXT_COLOR"]?>",
                    controlsPosition:"<?=$arParams["CONTROL_POSITION"]?>",
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
    <div id="mainThumbsHolder">
        <div id="thumbsHolder"></div>
    </div>
    <ul id="playList1" style="display: none;"> 
    <ul data-cat="">
        <?foreach($arResult["ITEMS"] as $arItems):?>
            <?$slideImages = CFile::ResizeImageGet($arItems["PREVIEW_PICTURE"], Array("width" => $arParams['BIG_WIDTH'], "height" => $arParams['BIG_HEIGHT']));?>
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