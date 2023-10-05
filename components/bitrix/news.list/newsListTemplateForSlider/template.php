<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if ($arResult["ITEMS"]): ?>
  <main class="main">
    <div class="container">
      <div class="swiper">
        <div class="swiper-wrapper swiper__wrapper">
          <? foreach ($arResult["ITEMS"] as $arItem): ?>

            <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
           
            <div class="swiper-slide slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" data-color="<?=$arItem["DISPLAY_PROPERTIES"]['color']['VALUE']?>">
              <div class="swiper-slide__left-side">
                <div class="slide__wrapper slide-header">
                  <h3 class="slide-header__head">
                    <?= $arItem["DISPLAY_PROPERTIES"]['food_value']['VALUE'] ?>
                  </h3>
                  <h1 class="slide-header__title">
                    <?= $arItem['NAME'] ?>
                  </h1>
                  <h2 class="slide-header__subtitle">
                    <?= $arItem["DISPLAY_PROPERTIES"]['cost']['VALUE'] ?> &#8381;
                  </h2>
                </div>
                <div class="slide__content slide-content">
                  <div class="slide-content__title">
                    <?= $arItem["DISPLAY_PROPERTIES"]['ingridients']['VALUE'] ?>
                  </div>
                  <div class="slide-content__subtitle">
                    <?= $arItem['PREVIEW_TEXT'] ?>
                  </div>
                  <div class="slide__menu">
                    <? if (!empty($arItem["DISPLAY_PROPERTIES"]['link']['VALUE'])): ?>
                      <a href=<?= $arItem["DISPLAY_PROPERTIES"]['link']['VALUE'] ?>><?= $arItem["DISPLAY_PROPERTIES"]['link_text']['VALUE'] ?></a>
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                          d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    <? else:
                      echo $arItem["DISPLAY_PROPERTIES"]['link_text']['VALUE'];
                    endif; ?>

                  </div>
                </div>
              </div>
              <div class="swiper-slide__center">
                <div class="right-side__img">
                  <img class="slide__image" src=<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?> alt="">
                </div>
              </div>
            </div>
          <? endforeach; ?>
        </div>
        <div class="swiper-navigator navigator">
          <div class="navigator__button swiper-prev-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"
              fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="-5" y1="12" x2="19" y2="12" />
              <line x1="15" y1="16" x2="19" y2="12" />
              <line x1="15" y1="8" x2="19" y2="12" />
            </svg>
          </div>
          <div class="navigator__button swiper-next-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"
              fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="-5" y1="12" x2="19" y2="12" />
              <line x1="15" y1="16" x2="19" y2="12" />
              <line x1="15" y1="8" x2="19" y2="12" />
            </svg>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      <? endif; ?>