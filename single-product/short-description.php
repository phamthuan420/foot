<?php
/**
 * Single product short description
 *
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<div class="product-short-description">
* Giá sản phẩm thay đổi tùy theo trọng lượng thực tế của sản phẩm. Vui lòng gọi 1900636526 để được hỗ trợ
</div>
