<?php 
use Bang\Lib\Bundle;

$frontData3 = Bang\Lib\ResponseBag::Get('frontData3');
Bundle::Css('test_css', array(
    'Content/css/benefitpage.css',
));
?>

  
<div style="transform: rotate(-20deg);position: fixed;top: 50px;z-index: 5;left: 10px;">
    <img src="Content/img/title.png" alt="" style="width: 250px;">
    <span style="position: absolute;display: block;top: 50%;left: 50%;font-size: 45px;width: 250px;transform: translate(-50%, -50%);text-align: center;color: #fff;letter-spacing: 5px;">蔬菜功效</span>
</div>



<div class="benefitpage">
    <div class="benefitpage_up">
        <div class="book">
            <img src="Content/img/benefit_bg3.png" alt="" id="book1">
            <img src="Content/img/benefit_bg4.png" alt="" id="bookrwd">
       

            <div class="benefit_text">

            <?php  
            for($i=0;$i<count($frontData3);$i++) {
                echo '<div id="switchdiv'.($i+1).'">';
                echo '<span class="t1">'.($frontData3[$i] -> veg_name).'</span><br>'; 
                echo '<span class="t2">'.($frontData3[$i] -> veg_textarea1).'</span>';
                echo '<div class="benefit_textdown">'.($frontData3[$i] -> veg_textarea2).'</div>';
                echo '</div>';
            }
            ?>

            </div>       
            <div class="benefit_pic">
                    <?php echo '<img src='.($frontData3[0] -> veg_img_big).' alt="" id="vegetable_pic1">' ?>
                    <?php echo '<img src='.($frontData3[1] -> veg_img_big).' alt="" id="vegetable_pic2">' ?>
                    <?php echo '<img src='.($frontData3[2] -> veg_img_big).' alt="" id="vegetable_pic3">' ?>
                    <?php echo '<img src='.($frontData3[3] -> veg_img_big).' alt="" id="vegetable_pic4">' ?>
            </div>
        
            <div class="benefit_tag">
                <img src="Content/img/benefit_tag1.png" alt="" id="bnftag1">
                <img src="Content/img/benefit_tag2.png" alt="" id="bnftag2">
                <img src="Content/img/benefit_tag3.png" alt="" id="bnftag3">
                <img src="Content/img/benefit_tag4.png" alt="" id="bnftag4">
            </div>
            <div class="rwdtag">
                <img src="Content/img/benefit_tag1_rwd.png" alt="" id="bnftag1rwd">
                <img src="Content/img/benefit_tag2_rwd.png" alt="" id="bnftag2rwd">
                <img src="Content/img/benefit_tag3_rwd.png" alt="" id="bnftag3rwd">
                <img src="Content/img/benefit_tag4_rwd.png" alt="" id="bnftag4rwd">
            </div>
        </div>
    </div>
    <div class="titlerwd">
        <p>製作過程</p> 
    </div>
    <div class="benefit_howtodo2">
        <p>我們選用最優質的各種蔬菜食材，切碎、搗碎後經過12小時以上的低溫烘焙，
        最後磨碎成粉，製造出狗狗們最喜歡的健康蔬菜粉。</p>
    </div>
<div id="cookpicdiv">
    <div id="benefitpage_down1">
        <img src="Content/img/cook1.png" alt="">
        <img src="Content/img/cook2.png" alt="">
        <img src="Content/img/cook3.png" alt="">
        <img src="Content/img/cook4.png" alt="">
    </div>
    <div id="benefitpage_down2">
        <img src="Content/img/cook2.png" alt="">
        <img src="Content/img/cook3.png" alt="">
        <img src="Content/img/cook4.png" alt="">
        <img src="Content/img/cook1.png" alt="">
    </div>
    <div id="benefitpage_down3">
        <img src="Content/img/cook3.png" alt="">
        <img src="Content/img/cook4.png" alt="">
        <img src="Content/img/cook1.png" alt="">
        <img src="Content/img/cook2.png" alt="">
    </div>
    <div id="benefitpage_down4">
        <img src="Content/img/cook4.png" alt="">
        <img src="Content/img/cook1.png" alt="">
        <img src="Content/img/cook2.png" alt="">
        <img src="Content/img/cook3.png" alt="">
    </div>
</div>
<div class="benefit_howtodo">
    <p>我們選用最優質的各種蔬菜食材，切碎、搗碎後經過12小時以上的低溫烘焙，
    最後磨碎成粉，製造出狗狗們最喜歡的健康蔬菜粉。</p>
</div>
</div>

<?php 

        Bundle::Js('test_js', array(
            'Content/js/benefitpage.js',
        ));

 ?>