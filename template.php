<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="gallery">
    <ul class="news-slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
            <li<?if($arItem["NAME"]=="1"):?> class="show"<?endif;?>><img width="950" height="300" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="photo_<?=$arItem["NAME"]?>" /></li>
         <?endif;?>
    <?endforeach;?>
    </ul>
    <script>
    $('.news-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 100,
});
</script>
</div>
