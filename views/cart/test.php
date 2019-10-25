<?php

use app\assets\AppCart;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $cart \devanych\cart\Cart */
/* @var $item \devanych\cart\CartItem */

$this->title = 'Catalogs';
$this->params['breadcrumbs'][] = $this->title;
AppCart::register($this);
?>

<!-- Home -->

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(/web/images/cart.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="<? echo Url::toRoute('');?>">Home</a></li>
                                    <li><a href="<? echo Url::toRoute('site/categories');?>">Categories</a></li>
                                    <li>Shopping Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart Info -->

<div class="cart_info">
    <div class="container">
        <?php if(!empty($cartItems = $cart->getItems())): ?>
        <div class="row">
            <div class="col">
                <!-- Column Titles -->
                <div class="cart_info_columns clearfix">
                    <div class="cart_info_col cart_info_col_product">Product</div>
                    <div class="cart_info_col cart_info_col_price">Price</div>
                    <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                    <div class="cart_info_col cart_info_col_total">Total</div>
                </div>
            </div>
        </div>
        <div class="row cart_items_row">
            <?php foreach($cart as $item): ?>
                <div class="col">

                    <!-- Cart Item -->
                    <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                        <!-- Name -->
                        <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                            <div class="cart_item_image">
                                <div><?=Html::img("@web{$item->getProduct()->image}", ['alt' => $item->getProduct()->titleproduct])?></div>
                            </div>
                            <div class="cart_item_name_container">
                                <div class="cart_item_name"><?= Html::a(Html::encode($item->titleproduct) , ['product', 'id'=>$item->id_product] )?></div>
                                <!--                            <div class="cart_item_edit"><a href="#">Edit Product</a></div>-->
                            </div>
                        </div>
                        <!-- Price -->
                        <div class="cart_item_price"><?=$item->getPrice()?></div>
                        <!-- Quantity -->
                        <div class="cart_item_quantity">
                            <div class="product_quantity_container">
                                <div class="product_quantity clearfix">
                                    <span>Qty</span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total -->
                        <div class="cart_item_total"><?=$item->getCost()?></div>
                    </div>

                </div>
            <?php endforeach; ?>
            <?php else:?>
                <div class="container" style="margin-top: 10%">Корзина пуста</div>
            <?php endif;?>
        </div>
        <div class="row row_cart_buttons">
            <div class="col">
                <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                    <div class="button continue_shopping_button"><a href="#">Continue shopping</a></div>
                    <div class="cart_buttons_right ml-lg-auto">
                        <div class="button clear_cart_button"><a href="#">Clear cart</a></div>
                        <div class="button update_cart_button"><a href="#">Update cart</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row_extra">
            <div class="col-lg-4">

                <!-- Delivery -->
                <div class="delivery">
                    <div class="section_title">Shipping method</div>
                    <div class="section_subtitle">Select the one you want</div>
                    <div class="delivery_options">
                        <label class="delivery_option clearfix">Next day delivery
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">$4.99</span>
                        </label>
                        <label class="delivery_option clearfix">Standard delivery
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">$1.99</span>
                        </label>
                        <label class="delivery_option clearfix">Personal pickup
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">Free</span>
                        </label>
                    </div>
                </div>

                <!-- Coupon Code -->
                <div class="coupon">
                    <div class="section_title">Coupon code</div>
                    <div class="section_subtitle">Enter your coupon code</div>
                    <div class="coupon_form_container">
                        <form action="#" id="coupon_form" class="coupon_form">
                            <input type="text" class="coupon_input" required="required">
                            <button class="button coupon_button"><span>Apply</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-lg-2">
                <div class="cart_total">
                    <div class="section_title">Cart total</div>
                    <div class="section_subtitle">Final info</div>
                    <div class="cart_total_container">
                        <ul>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Subtotal</div>
                                <div class="cart_total_value ml-auto">$790.90</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Shipping</div>
                                <div class="cart_total_value ml-auto">Free</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Total</div>
                                <div class="cart_total_value ml-auto">$790.90</div>
                            </li>
                        </ul>
                    </div>
                    <div class="button checkout_button"><a href="#">Proceed to checkout</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
