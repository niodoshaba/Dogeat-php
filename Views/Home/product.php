<?php 
use Bang\Lib\Bundle;
$frontData1 = Bang\Lib\ResponseBag::Get('front_data1');

Bundle::Css('test_css', array(
    'Content/css/product.css',
));
        
?>
<div id="CartPrompt" style="background: #25672dde;padding: 10px;position: fixed;top: 10px;left: 50%;transform: translateX(-50%);display: none;border-radius: 20px;font-size: larger;color: #fff;z-index:1;">
    加入購物車成功
</div>
<div style="transform: rotate(-20deg);position: fixed;top: 50px;z-index: 5;left: 10px;">
    <img src="Content/img/title.png" alt="" style="width: 250px;">
    <span style="position: absolute;display: block;top: 50%;left: 50%;font-size: 45px;width: 250px;transform: translate(-50%, -50%);text-align: center;color: #fff;letter-spacing: 5px;">蔬菜零食</span>
</div>


<div class="bg">
    <div class="index_productdiv">
    
    <?php 
        for($i=0;$i<count($frontData1);$i++){
        echo '	<div class="index_product index_product'.$i.'" >
                    <div class="productcardup">
                        <div class="cardimg" data-cardnumber="'.($frontData1[$i] -> pro_no).'">
                            <img src="Content/img/tag1.png" alt=""  class="tag">
                            <img class="product_each_img" data-pro_no="'.($frontData1[$i] -> pro_no).'" src="';
        echo                json_decode($frontData1[$i]->pro_img) -> img_01;
        echo'        			" alt="">
                            <div class="productbtn">';
        echo 				($frontData1[$i] -> pro_name);
        echo '				</div>
                        </div>
                    </div>
                    <div class="product_textdiv">
                        <span class="product_text">NT$';
        echo        	'<span class="product_text price" data-cardprice="'.($i+1).'">'.($frontData1[$i] -> pro_price).'</span>' ;
        echo        	'</span>
                        <button type="button"  class="atc" data-atcnum="'.($frontData1[$i] -> pro_no).'">
                            <img src="Content/img/icon/addtocar3.png" alt="" >
                        </button>
                    </div>
                </div>';
        }
    ?>
    </div>    
</div>

<script>
    
        $(".product_each_img").click(function(){
            location.href="index.php?action=ProductInfo&controller=Home&pro_no="+$(this).attr("data-pro_no")
        });

</script>

