<?php
/**
 * The template part for displaying payment
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney child
 */
?>
<article class="payment">

    <div class="payment_container">
        <?php if (!get_post_meta($post->ID, 'wpcf-soldout', true)) { ?>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="business" value="W5BGTPVHQ5A7S">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="ajout panier">
                <input type="hidden" name="item_number" value="<?php echo $post->post_title; ?>">
                <input type="hidden" name="button_subtype" value="products">
                <input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="add" value="1">
                <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
                <table>
                    <tr>
                        <td>
                            <input type="hidden" name="on0" value="Price">Select your price
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="os0">
                                <option value="France/Belgique">France/Belgique 6,50&euro;</option>
                                <option value="Europe">Europe 9,50&euro;</option>
                                <option value="World">World 10,50&euro;</option>
                            </select>
                        </td>
                    </tr>
                </table><br/>
                <input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="option_select0" value="France/Belgique">
                <input type="hidden" name="option_amount0" value="6.50">
                <input type="hidden" name="option_select1" value="Europe">
                <input type="hidden" name="option_amount1" value="9.50">
                <input type="hidden" name="option_select2" value="World">
                <input type="hidden" name="option_amount2" value="10.50">
                <input type="hidden" name="option_index" value="0">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
            </form>
            <p class="detail" >
                <strong>*Shipping :</strong>
                <ul>
                    <li>World : 5.50€</li>
                    <li>Europe : 4.50€</li>
                    <li>France/Belgique : 1.50€</li>
                </ul>
            </p>
        <?php } else { ?>
            <p class="detail" >
                <strong>SOLD OUT!!!</strong>
                <br/>
                But you can help your devoted aliens by clicking on the donation button :
            </p>
        <?php } ?>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>

</article>