<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Смартфоны в Томске | Официальный сайт | Интернет-магазин';
?>
<div class="home">
    <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(/web/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">Новый опыт интернет магазина.</div>
                                        <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
                                        <div class="button button_light home_button"><a href="<? echo Url::toRoute('/catalog');?>">Купить сейчас</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(/web/images/home_slider_2.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">Новый опыт интернет магазина.</div>
                                        <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
                                        <div class="button button_light home_button"><a href="<? echo Url::toRoute('/catalog');?>">Купить сейчас</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(/web/images/home_slider_3.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">Новый опыт интернет магазина.</div>
                                        <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
                                        <div class="button button_light home_button"><a href="<? echo Url::toRoute('/catalog');?>">Купить сейчас</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_dots">
                                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                    <li class="home_slider_custom_dot active">01.</li>
                                    <li class="home_slider_custom_dot">02.</li>
                                    <li class="home_slider_custom_dot">03.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Ads -->

    <div class="avds">
        <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
            <div class="avds_small">
                <div class="avds_background" style="background-image:url(../../web/images/avds_small.jpg)"></div>
                <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="/web/images/discount.png" alt="">
                        <div>
                            <div class="avds_discount">
                                <div>20<span>%</span></div>
                                <div>Скидка</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content">
                        <div class="avds_title">Смартфон</div>
                        <div class="avds_link"><a href="<? echo Url::toRoute('/catalog');?>">Читать больше</a></div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background" style="background-image:url(/web/images/avds_large.jpg)"></div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title">Профессиональные камеры</div>
                        <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
                        <div class="avds_link avds_link_large"><a href="<? echo Url::toRoute('/catalog');?>">Читать больше</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                        <?php foreach ($product as $item): ?>
                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><?=Html::a(Html::img('/'.$item->image, ['alt' => $item->titleproduct, 'width' => 240]), ['catalog/product', 'id'=>$item->id_product])?></div>
                                <div class="product_content">
                                    <div class="product_title"><?= Html::a(Html::encode($item->titleproduct) , ['catalog/product', 'id'=>$item->id_product] )?></div>
                                    <div class="product_price"><?= $item->price ?></div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Ad -->

    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(/web/images/avds_xl.jpg)"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title">Удивительные устройства</div>
                            <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
                            <div class="avds_link avds_xl_link"><a href="">Читать больше</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
