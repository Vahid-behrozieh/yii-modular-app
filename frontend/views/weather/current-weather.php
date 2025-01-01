<?php
//echo "<pre>";
//var_dump($data);
$this->registerCss("
//    body {
//        background-image: image-set(
//            url('" . Yii::getAlias('@web/images/weather/london.webp') . "') type('image/webp'),
//            url('" . Yii::getAlias('@web/images/weather/london.jpg') . "') type('image/jpeg')
//        );
//        background-size: cover; /* یا cover یا contain */
//        background-repeat: no-repeat;
////        background-position: center center;
//    }
");
//http://openweathermap.org/img/wn/11n@2x.png
?>


<div style="width:100vw;height: 100vh;background-color: black;padding: 44px;">
    <div class='d-flex' style="width: 100%;height: 100%">
        <div class="sidebar-section" style="width: 84px;height: 100%">

        </div>
        <div class="main-section"></div>
    </div>
</div>
