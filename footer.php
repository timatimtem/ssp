<section class="support-section">

    <div class="wrap">
        <div class="container">
            <div class="section-header">
                <h1 class="section-title">
                    24/7 SUPPORT
                </h1>

                <p class="section-description">
                    Our pro representatives are here to help you 24/7. <br>
                    No issue is too big or too small!
                </p>
            </div>

            <a target="_blank" href="https://portal.supersonicproxies.com/billing/contact.php" class="connect-with-us-btn">Connect with us</a>

        </div>
    </div>




</section>


<footer class="footer">

    <div class="container">
        <div class="footer-header">

            <h2 class="footer-title">
                Copyright © 2017 - <?php
                echo date("Y");
                ?> Super Sonic Proxies. All Rights Reserved.
            </h2>

            <ul class="footer-socials">
                <li>
                    <a target="_blank" href=""><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/supersonicproxy"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
                </li>

                <li>
                    <a target="_blank" href=""><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
        </div>


        <p class="footer-text">
            All logos, trademarks, and brands appearing on the site are the property of their respective owners. Use of these logos, trademarks, and brands does not imply endorsement nor any affiliation with supersonicproxies.com.
        </p>
    </div>





</footer>


<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */
wp_footer();
?>


<!--<script type="text/javascript">-->
<!--    jQuery(document).ready(function($) {-->
<!--        -->
<!---->
<!--        sharedfn();-->
<!--        backconnectfn();-->
<!--        dedicatedfn();-->
<!--        shoeproxyfn();-->
<!---->
<!--        $('#chooselocation1').change(function() {-->
<!--            $('#quantity1').val('5');-->
<!--            sharedfn();-->
<!--        });-->
<!---->
<!---->
<!--        $('#quantity1').change(function () {-->
<!--            sharedfn();-->
<!---->
<!--        });-->
<!---->
<!--        $('#quantity1').keyup(function () {-->
<!--            sharedfn();-->
<!--        });-->
<!---->
<!--        $('#chooselocation2').change(function() {-->
<!--            $('#quantity2').val('5');-->
<!--            backconnectfn();-->
<!--        });-->
<!---->
<!---->
<!--        $('#quantity2').change(function () {-->
<!--            backconnectfn();-->
<!---->
<!--        });-->
<!---->
<!--        $('#quantity2').keyup(function () {-->
<!--            backconnectfn();-->
<!--        });-->
<!---->
<!--        $('#chooselocation3').change(function() {-->
<!--            $('#quantity3').val('5');-->
<!--            dedicatedfn();-->
<!--        });-->
<!---->
<!---->
<!--        $('#quantity3').change(function () {-->
<!--            dedicatedfn();-->
<!---->
<!--        });-->
<!---->
<!--        $('#quantity3').keyup(function () {-->
<!--            dedicatedfn();-->
<!--        });-->
<!---->
<!--        $('#chooselocation4').change(function() {-->
<!--            $('#quantity4').val('5');-->
<!--            shoeproxyfn();-->
<!--        });-->
<!---->
<!---->
<!--        $('#quantity4').change(function () {-->
<!--            shoeproxyfn();-->
<!---->
<!--        });-->
<!---->
<!--        $('#quantity4').keyup(function () {-->
<!--            shoeproxyfn();-->
<!--        });-->
<!---->
<!--    });-->
<!---->
<!--    function sharedfn() {-->
<!--        ccc=jQuery('#quantity1').val();-->
<!--        if(parseInt(ccc) < 5) {-->
<!--            msg='Minimum proxies per month should more than 5.';-->
<!---->
<!--            if(document.getElementById('errorbb1')) {-->
<!--                jQuery("#errorbb1").html(msg);-->
<!--            } else {-->
<!--                jQuery("#btnbuy1").after('<div id="errorbb1">'+msg+'</div>');-->
<!--            }-->
<!--            jQuery("#errorbb1").show();-->
<!---->
<!--            ccc=5;-->
<!---->
<!--            lll=jQuery('#chooselocation1').val();-->
<!--            ppprice=getprice('0',lll,ccc);-->
<!--            jQuery( "#proprice1" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return false;-->
<!--        } else {-->
<!--            jQuery("#errorbb1").remove();-->
<!---->
<!--            lll=jQuery('#chooselocation1').val();-->
<!--            ppprice=getprice('0',lll,ccc);-->
<!--            jQuery( "#proprice1" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return true;-->
<!--        }-->
<!--    }-->
<!---->
<!---->
<!--    function backconnectfn() {-->
<!--        ccc=jQuery('#quantity2').val();-->
<!--        if(parseInt(ccc) < 5) {-->
<!--            msg='Minimum proxies per month should more than 5.';-->
<!---->
<!--            if(document.getElementById('errorbb2')) {-->
<!--                jQuery("#errorbb2").html(msg);-->
<!--            } else {-->
<!--                jQuery("#btnbuy2").after('<div id="errorbb2">'+msg+'</div>');-->
<!--            }-->
<!--            jQuery("#errorbb2").show();-->
<!---->
<!--            ccc=5;-->
<!---->
<!--            lll=jQuery('#chooselocation2').val();-->
<!--            ppprice=getprice('1',lll,ccc);-->
<!--            jQuery( "#proprice2" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return false;-->
<!--        } else {-->
<!--            jQuery("#errorbb2").remove();-->
<!---->
<!--            lll=jQuery('#chooselocation2').val();-->
<!--            ppprice=getprice('1',lll,ccc);-->
<!--            jQuery( "#proprice2" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return true;-->
<!--        }-->
<!--    }-->
<!---->
<!---->
<!---->
<!--    function dedicatedfn() {-->
<!--        ccc=jQuery('#quantity3').val();-->
<!--        if(parseInt(ccc) < 5) {-->
<!--            msg='Minimum proxies per month should more than 5.';-->
<!---->
<!--            if(document.getElementById('errorbb3')) {-->
<!--                jQuery("#errorbb3").html(msg);-->
<!--            } else {-->
<!--                jQuery("#btnbuy3").after('<div id="errorbb3">'+msg+'</div>');-->
<!--            }-->
<!--            jQuery("#errorbb3").show();-->
<!---->
<!--            ccc=5;-->
<!---->
<!--            lll=jQuery('#chooselocation3').val();-->
<!--            ppprice=getprice('2',lll,ccc);-->
<!--            jQuery( "#proprice3" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return false;-->
<!--        } else {-->
<!--            jQuery("#errorbb3").remove();-->
<!---->
<!--            lll=jQuery('#chooselocation3').val();-->
<!--            ppprice=getprice('2',lll,ccc);-->
<!--            jQuery( "#proprice3" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return true;-->
<!--        }-->
<!--    }-->
<!---->
<!---->
<!--    function shoeproxyfn() {-->
<!--        ccc=jQuery('#quantity4').val();-->
<!--        if(parseInt(ccc) < 5) {-->
<!--            msg='Minimum proxies per month should more than 5.';-->
<!---->
<!--            if(document.getElementById('errorbb4')) {-->
<!--                jQuery("#errorbb4").html(msg);-->
<!--            } else {-->
<!--                jQuery("#btnbuy4").after('<div id="errorbb4">'+msg+'</div>');-->
<!--            }-->
<!--            jQuery("#errorbb4").show();-->
<!---->
<!--            ccc=5;-->
<!---->
<!--            lll=jQuery('#chooselocation4').val();-->
<!--            ppprice=getprice('3',lll,ccc);-->
<!--            jQuery( "#proprice4" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return false;-->
<!--        } else {-->
<!--            jQuery("#errorbb4").remove();-->
<!---->
<!--            lll=jQuery('#chooselocation4').val();-->
<!--            ppprice=getprice('3',lll,ccc);-->
<!--            jQuery( "#proprice4" ).val( "$" + parseFloat(ccc*ppprice).toFixed(2)  );-->
<!--            return true;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function validateshared(){-->
<!--        quantity=jQuery("#quantity1").val();-->
<!--        country = jQuery('#chooselocation1').val(),-->
<!--            type = 'shared';-->
<!--        if(sharedfn()) {-->
<!--            //sharedaddtocart();-->
<!--            addToCart('1');-->
<!--        } else {-->
<!--            return false;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function validatebackconnect(){-->
<!--        quantity=jQuery("#quantity2").val();-->
<!--        country = jQuery('#chooselocation2').val(),-->
<!--            type = 'backconnect';-->
<!--        if(backconnectfn()) {-->
<!--            //rotateaddtocart();-->
<!--            addToCart('2');-->
<!--        } else {-->
<!--            return false;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function validatededicated(){-->
<!--        quantity=jQuery("#quantity3").val();-->
<!--        country = jQuery('#chooselocation3').val(),-->
<!--            type = 'dedicated';-->
<!--        if(dedicatedfn()) {-->
<!--            //dediaddtocart();-->
<!--            addToCart('3');-->
<!--        } else {-->
<!--            return false;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function validateshoeproxy(){-->
<!--        quantity=jQuery("#quantity4").val();-->
<!--        country = jQuery('#chooselocation4').val(),-->
<!--            type = 'sneaker';-->
<!--        if(shoeproxyfn()) {-->
<!--            //shoeaddtocart();-->
<!--            addToCart('4');-->
<!--        } else {-->
<!--            return false;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function getprice(product,loc,count) {-->
<!---->
<!--        //USA-->
<!--        var myArr= new Array();-->
<!---->
<!--        //Shared/Semi dedicated-->
<!--        var myTempu1Arr= new Array();-->
<!--        myTempu1Arr[0] = new Array('5','24','0.44');-->
<!--        myTempu1Arr[1] = new Array('25','99','0.42');-->
<!--        myTempu1Arr[2] = new Array('100','499','0.4');-->
<!--        myTempu1Arr[3] = new Array('500','999','0.37');-->
<!--        myTempu1Arr[4] = new Array('1000','1999','0.36');-->
<!--        myTempu1Arr[5] = new Array('2000','9999999999999','0.35');-->
<!---->
<!--        //rotating/Backconnect-->
<!--        var myTempu2Arr= new Array();-->
<!--        myTempu2Arr[0] = new Array('5','24','1.97');-->
<!--        myTempu2Arr[1] = new Array('25','99','1.88');-->
<!--        myTempu2Arr[2] = new Array('100','199','1.79');-->
<!--        myTempu2Arr[3] = new Array('200','499','1.75');-->
<!--        myTempu2Arr[4] = new Array('500','999','1.74');-->
<!--        myTempu2Arr[5] = new Array('1000','9999999999999','1.66');-->
<!---->
<!--        //Dedicated-->
<!--        var myTempu3Arr= new Array();-->
<!--        myTempu3Arr[0] = new Array('5','24','1.06');-->
<!--        myTempu3Arr[1] = new Array('25','99','1.03');-->
<!--        myTempu3Arr[2] = new Array('100','499','1.02');-->
<!--        myTempu3Arr[3] = new Array('500','999','0.98');-->
<!--        myTempu3Arr[4] = new Array('1000','1999','0.89');-->
<!--        myTempu3Arr[5] = new Array('2000','9999999999999','0.8');-->
<!---->
<!--        //shoeproxies-->
<!--        var myTempu4Arr= new Array();-->
<!--        myTempu4Arr[0] = new Array('5','49','2.19');-->
<!--        myTempu4Arr[1] = new Array('50','99','2.19');-->
<!--        myTempu4Arr[2] = new Array('100','9999999999999','2.19');-->
<!---->
<!---->
<!--        myArr['usa']= [myTempu1Arr,myTempu2Arr,myTempu3Arr,myTempu4Arr];-->
<!---->
<!--        //Semi Dedicated-->
<!--        var myTempg1Arr= new Array();-->
<!--        myTempg1Arr[0] = new Array('5','24','0.53');-->
<!--        myTempg1Arr[1] = new Array('25','99','0.49');-->
<!--        myTempg1Arr[2] = new Array('100','499','0.48');-->
<!--        myTempg1Arr[3] = new Array('500','9999999999999','0.46');-->
<!---->
<!--        //Rotating-->
<!--        var myTempg2Arr= new Array();-->
<!--        myTempg2Arr[0] = new Array('5','24','2.33');-->
<!--        myTempg2Arr[1] = new Array('25','99','2.15');-->
<!--        myTempg2Arr[2] = new Array('100','199','2.06');-->
<!--        myTempg2Arr[3] = new Array('200','499','2.02');-->
<!--        myTempg2Arr[4] = new Array('500','9999999999999','1.88');-->
<!---->
<!--        //Dedicated-->
<!--        var myTempg3Arr= new Array();-->
<!--        myTempg3Arr[0] = new Array('5','24','1.43');-->
<!--        myTempg3Arr[1] = new Array('25','99','1.25');-->
<!--        myTempg3Arr[2] = new Array('100','9999999999999','1.16');-->
<!---->
<!---->
<!--        var myTempg4Arr= new Array();-->
<!--        myTempg4Arr[0] = new Array('5','49','2.20');-->
<!--        myTempg4Arr[1] = new Array('50','99','2.20');-->
<!--        myTempg4Arr[2] = new Array('100','9999999999999','2.20');-->
<!---->
<!--        myArr['ger']= [myTempg1Arr,myTempg2Arr,myTempg3Arr,myTempg4Arr];-->
<!---->
<!--        //semi dedicated-->
<!--        var myTempb1Arr= new Array();-->
<!--        myTempb1Arr[0] = new Array('5','24','0.53');-->
<!--        myTempb1Arr[1] = new Array('25','99','0.49');-->
<!--        myTempb1Arr[2] = new Array('100','499','0.48');-->
<!--        myTempb1Arr[3] = new Array('500','9999999999999','0.46')-->
<!---->
<!--        //rotating/Backconnect-->
<!--        var myTempb2Arr= new Array();-->
<!--        myTempb2Arr[0] = new Array('5','24','2.33');-->
<!--        myTempb2Arr[1] = new Array('25','99','2.15');-->
<!--        myTempb2Arr[2] = new Array('100','199','2.06');-->
<!--        myTempb2Arr[3] = new Array('200','499','2.02');-->
<!--        myTempb2Arr[4] = new Array('500','9999999999999','1.88');-->
<!---->
<!--        //dedicated-->
<!--        var myTempb3Arr= new Array();-->
<!--        myTempb3Arr[0] = new Array('5','9','1.43');-->
<!--        myTempb3Arr[1] = new Array('10','49','1.25');-->
<!--        myTempb3Arr[2] = new Array('50','99','1.23');-->
<!--        myTempb3Arr[3] = new Array('100','9999999999999','1.16');-->
<!---->
<!---->
<!--        var myTempb4Arr= new Array();-->
<!--        myTempb4Arr[0] = new Array('5','49','2.20');-->
<!--        myTempb4Arr[1] = new Array('50','99','2.20');-->
<!--        myTempb4Arr[2] = new Array('100','9999999999999','2.20');-->
<!---->
<!--        myArr['bra'] = [myTempb1Arr,myTempb2Arr,myTempb3Arr,myTempb4Arr];-->
<!---->
<!--        currentArr=myArr[loc][product];-->
<!--        for (i = 0; i < currentArr.length; i++) {-->
<!--            min=currentArr[i][0];-->
<!--            max=currentArr[i][1];-->
<!--            price=currentArr[i][2];-->
<!--            if (parseInt(min) <= parseInt(count) && parseInt(count) <= parseInt(max) ) {-->
<!--                return price;-->
<!--            }-->
<!---->
<!---->
<!--        }-->
<!---->
<!---->
<!--    }-->
<!--    function addToCart(type){-->
<!--        quantity=jQuery("#quantity"+type).val();-->
<!--        if(quantity > 0 ) {-->
<!--            var $ = jQuery,-->
<!--                country = $('#chooselocation'+type).val();-->
<!--            //type='1';-->
<!---->
<!--            var countryMap = {-->
<!--                usa: 'us',-->
<!--                ger: 'de',-->
<!--                bra: 'br'-->
<!--            }, typeMap = {-->
<!--                1: 'semi-3',-->
<!--                2: 'rotating',-->
<!--                3: 'dedicated',-->
<!--                4: 'sneaker'-->
<!--            };-->
<!---->
<!--            var url = 'https://portal.supersonicproxies.com/purchase/';-->
<!---->
<!--            // Apply type-->
<!--            if (countryMap[country] && typeMap[type]) {-->
<!--                url += countryMap[country] + '-' + typeMap[type];-->
<!--            }-->
<!--            // Inject quantity-->
<!--            url += '?quantity=' + quantity;-->
<!---->
<!--            window.location = url;-->
<!--        }-->
<!--    }-->
<!--    function sharedaddtocart() {-->
<!--        quantity=jQuery("#quantity1").val();-->
<!--        if(quantity > 0 ) {-->
<!--            var $ = jQuery,-->
<!--                country = $('#chooselocation1').val(),-->
<!--                type='1';-->
<!---->
<!--            var countryMap = {-->
<!--                usa: 'us',-->
<!--                ger: 'de',-->
<!--                bra: 'br'-->
<!--            }, typeMap = {-->
<!--                1: 'semi-3',-->
<!--                2: 'dedicated',-->
<!--                3: 'backconnect',-->
<!--                4: 'sneaker'-->
<!--            };-->
<!---->
<!--            var url = 'https://portal.supersonicproxies.com/purchase/';-->
<!---->
<!--            // Apply type-->
<!--            if (countryMap[country] && typeMap[type]) {-->
<!--                url += countryMap[country] + '-' + typeMap[type];-->
<!--            }-->
<!--            // Inject quantity-->
<!--            url += '?quantity=' + quantity;-->
<!---->
<!--            window.location = url;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function rotateaddtocart() {-->
<!--        quantity=jQuery("#quantity2").val();-->
<!--        if(quantity > 0 ) {-->
<!--            var $ = jQuery,-->
<!--                country = $('#chooselocation2').val(),-->
<!--                type='2';-->
<!---->
<!--            var countryMap = {-->
<!--                usa: 'us',-->
<!--                ger: 'de',-->
<!--                bra: 'br'-->
<!--            }, typeMap = {-->
<!--                1: 'shared',-->
<!--                2: 'dedicated',-->
<!--                3: 'backconnect',-->
<!--                4: 'sneaker'-->
<!--            };-->
<!---->
<!--            var url = 'https://portal.supersonicproxies.com/purchase/us-rotating/';-->
<!---->
<!--            // Apply type-->
<!--            if (countryMap[country] && typeMap[type]) {-->
<!--                //url += countryMap[country] + '-' + typeMap[type];-->
<!--            }-->
<!--            // Inject quantity-->
<!--            url += '?quantity=' + quantity;-->
<!---->
<!--            window.location = url;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function dediaddtocart() {-->
<!--        quantity=jQuery("#quantity3").val();-->
<!--        if(quantity > 0 ) {-->
<!--            var $ = jQuery,-->
<!--                country = $('#chooselocation3').val(),-->
<!--                type='3';-->
<!---->
<!--            var countryMap = {-->
<!--                usa: 'us',-->
<!--                ger: 'de',-->
<!--                bra: 'br'-->
<!--            }, typeMap = {-->
<!--                1: 'shared',-->
<!--                2: 'dedicated',-->
<!--                3: 'backconnect',-->
<!--                4: 'sneaker'-->
<!--            };-->
<!---->
<!--            var url = 'https://portal.supersonicproxies.com/purchase/us-dedicated/';-->
<!---->
<!--            // Apply type-->
<!--            if (countryMap[country] && typeMap[type]) {-->
<!--                //url += countryMap[country] + '-' + typeMap[type];-->
<!--            }-->
<!--            // Inject quantity-->
<!--            url += '?quantity=' + quantity;-->
<!---->
<!--            window.location = url;-->
<!--        }-->
<!--    }-->
<!---->
<!--    function shoeaddtocart() {-->
<!--        quantity=jQuery("#quantity4").val();-->
<!--        if(quantity > 0 ) {-->
<!--            var $ = jQuery,-->
<!--                country = $('#chooselocation4').val(),-->
<!--                type='4';-->
<!---->
<!--            var countryMap = {-->
<!--                usa: 'us',-->
<!--                ger: 'de',-->
<!--                bra: 'br'-->
<!--            }, typeMap = {-->
<!--                1: 'shared',-->
<!--                2: 'dedicated',-->
<!--                3: 'backconnect',-->
<!--                4: 'sneaker'-->
<!--            };-->
<!---->
<!--            var url = 'https://portal.supersonicproxies.com/purchase/';-->
<!---->
<!--            // Apply type-->
<!--            if (countryMap[country] && typeMap[type]) {-->
<!--                url += countryMap[country] + '-' + typeMap[type];-->
<!--            }-->
<!--            // Inject quantity-->
<!--            url += '?quantity=' + quantity;-->
<!---->
<!--            window.location = url;-->
<!--        }-->
<!--    }-->
<!--</script>-->



</body>
</html>