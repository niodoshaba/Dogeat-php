<?php
use Bang\Lib\Bundle;
Bundle::Css('test_css', array(
    'Content/css/header_footer.css',
    'Content/css/ProductInfo.css',
));

$pro_info = Bang\Lib\ResponseBag::Get('pro_info');

if ( $pro_info[0] -> pro_status == 0 ){
    $pro_info[0] -> pro_status = "有現貨";
}else{
    $pro_info[0] -> pro_status = "已售完";
};


?>
<div style="transform: rotate(-20deg);position: fixed;top: 50px;z-index: 5;left: 10px;">
    <img src="Content/img/title.png" alt="" style="width: 250px;">
    <span style="position: absolute;display: block;top: 50%;left: 50%;font-size: 45px;width: 250px;transform: translate(-50%, -50%);text-align: center;color: #fff;letter-spacing: 5px;">商品資訊</span>
</div>

<div id="product_info_all">
    <div id="product_info_img">
        <div id="product_info_big_img">
            <img id="product_info_big_img_show" src="<?php echo json_decode($pro_info[0]->pro_img) -> img_01 ?>" alt="" >
        </div>
        <div id="product_info_small_img">
            <div class="product_info_small_img_each">
                <img class="product_info_small_img" src="<?php echo json_decode($pro_info[0]->pro_img) -> img_01 ?>" alt="">
            </div>
            <div class="product_info_small_img_each">
                <img class="product_info_small_img" src="<?php echo json_decode($pro_info[0]->pro_img) -> img_02 ?>" alt="">
            </div>
            <div class="product_info_small_img_each">
                <img class="product_info_small_img" src="<?php echo json_decode($pro_info[0]->pro_img) -> img_03 ?>" alt="">

            </div>
            <div class="product_info_small_img_each">
                <img class="product_info_small_img" src="<?php echo json_decode($pro_info[0]->pro_img) -> img_04 ?>" alt="">

            </div>
        </div>
    </div>

    <d  iv id="product_info_info">
        <span id="product_info_catalog1">多種蔬菜添加，搭配雞肉滿足營養及美味</span>
        <span id="product_info_catalog2">新鮮蔬菜烘乾製粉，營養成份超超超濃縮</span>
        <div id="product_info_title">
            <span> <?php echo $pro_info[0] -> pro_name?> </span>
        </div>
        <div id="product_info_price">
            <span>NT$ <?php echo $pro_info[0] -> pro_price?></span>
        </div>
        <div id="product_info_detail">
            <span> <?php echo json_decode($pro_info[0]->pro_all_info) -> pro_info ?> </span>
        </div>
        <div>
            <span id="product_info_sec_title">商品資訊</span>
        </div>
        <div id="product_info_li">
            <ul>
                <li>產品成分： <?php echo json_decode($pro_info[0]->pro_all_info) -> product_element?></li>
                <li>保存期限： <?php echo json_decode($pro_info[0]->pro_all_info) -> pro_deadtime?></li>
                <li>產品容量： <?php echo json_decode($pro_info[0]->pro_all_info) -> product_content?> g / 包</li>
                <li id="pro_info_status">庫存狀況： <?php echo $pro_info[0] -> pro_status?></li>
            </ul>
        </div>
        <div id="product_info_btn">
            <div id="product_info_back">
                回上一頁
            </div>
            <div id="product_info_cart"  class="atc" data-atcnum="<?php echo $pro_info[0] -> pro_no?>">
                加入購物車
            </div>
        </div>
    </d>
</div>

<script>
    let cata_no = <?php echo $pro_info[0] -> cata_no; ?>

    if(cata_no == 1){
        $("#product_info_catalog1").css("display","inline-block")
        $("#product_info_catalog2").css("display","none")
    }else{
        $("#product_info_catalog1").css("display","none")
        $("#product_info_catalog2").css("display","inline-block")
    }

    $("#product_info_back").click(function(){
        history.back();
    });
    $("#product_info_cart").click(function(){
        
    });

    $(".product_info_small_img").click(function(){
        current_img = $(this).attr("src");
        $("#product_info_big_img_show").attr("src",current_img)
    });
</script>