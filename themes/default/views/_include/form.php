<?php
/**
* 文件说明：用戶信息提交表单
* ==============================================
* 版权所有 @lnc 
* ==============================================
* @date: 2016年3月30日
* @author: admin
* @version:1.0
*/
?>
<script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/yindushenyou/form/diqu.js"></script>
<script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/yindushenyou/form/notorder.js"></script>
<link href="<?php echo $this->_baseUrl?>/static/yindushenyou/form/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
        <!--
        #order{width:100%;background-color:}
        .orderl{width:60%;}
        #order form,.orderl,.title{border-color:;}
        -->
        
.bdbox li input.send{
width:180px;height:38px;cursor:pointer;border:0;
    background:url('<?php echo $this->_baseUrl?>/static/yindushenyou/form/sub.png')
    no-repeat;}
</style>  
<body>
<div id="order">
    <form id="form" name="form" action="<?php echo $this->createUrl('site/form')?>" method="post" onsubmit="return postcheck()" target="_blank">
        <input type="hidden" name="orderid" id="orderid" value="">
        <div class="orderl" id="orderl">
            <div class="title"><img src="<?php echo $this->_baseUrl?>/static/yindushenyou/form/tita.gif" /></div>
            <div class="bdbox">
                <ul>
                    <li class="product">
                        <span class="bdl"><em>*</em>套餐选择</span>
                        <span class="bdr red">

                <?php 
                foreach ($plans as $plan){?>
                    
                    <input type="hidden"  name="sales" value="<?php echo $plan['sales_num']?>" alt="<?php echo $plan['sales_num']?>">
                    <input type="radio" name="product" id="<?php echo "a".$plan['id']?>" value="<?php echo $plan['id']?>" alt="<?php echo $plan['price']?>" onclick="pricea()"   class="dxk">
                    <label for="<?php echo "a".$plan['id']?>"><?php echo $plan['name']?>&nbsp;&nbsp;<?php echo $plan['price']?>元  
                    <?php 
                    if($plan['promote'] == 1){?>
                    <img src="<?php echo $this->_baseUrl?>/static/yindushenyou/images/hot.gif">;
                    <?php } 
                    ?>
                    </label><br>
                <?php }
                
                ?>
                <!-- 
                <input type="radio" name="product" id="a1" value="印度黒油喷剂（买4瓶送2瓶）1400元" alt="1400" onclick="pricea()"   class="dxk"><label for="a1">印度黒油喷剂（买4瓶送2瓶）&nbsp;&nbsp;1400元 </label><br>
                <input type="radio" name="product" id="a1" value="印度黒油喷剂（买4瓶送2瓶）2000元" alt="2000" onclick="pricea()"   class="dxk"><label for="a1">印度黒油喷剂（买4瓶送2瓶）&nbsp;&nbsp;2000元 </label><br>
              
                <input type="radio" name="product" id="a2" value="印度黒油喷剂（买3瓶送1瓶）1050元" alt="1050" onclick="pricea()" checked  class="dxk"><label for="a2">印度黒油喷剂（买3瓶送1瓶）&nbsp;&nbsp;1050元 </label><br>
              
                <input type="radio" name="product" id="a3" value="  650元" alt="650" onclick="pricea()"   class="dxk"><label for="a3">印度黒油喷剂（2瓶）&nbsp;&nbsp;650元 </label><br>
              
                <input type="radio" name="product" id="a4" value="印度黒油喷剂（1瓶）350元" alt="350" onclick="pricea()"   class="dxk"><label for="a4">印度黒油喷剂（1瓶）&nbsp;&nbsp;350元 </label><br>
                -->
                        </span>
                    </li>


<!--附加属性e-->
                    <li  ><span class="bdl">订购数量</span><span class="bdr"><input type="text" name="mun" value="1"  onchange="pricea()"  class="txt txt2"> 总价<div id="showprice">1050</div>元</span></li>
                    <li  ><span class="bdl">该套餐销售数量</span><div id="sales" style="font-family: Arial,Verdana;font-size: 28px;font-weight: bold;color: #F60;">1050</div></li>
                    <li><span class="bdl"><em>*</em>收货人姓名</span><span class="bdr"><input type="text" name="name" class="txt kda" /></span></li>
                    <li><span class="bdl"><em>*</em>手机号码</span><span class="bdr"><input type="text" name="mob" class="txt kda" /></span></li>

                    <li><span class="bdl"><em>*</em>所在地区</span><span class="bdr"><select name="province" class="selectb"></select><select name="city" class="selectb"></select><select name="area" class="selectb"></select></span></li>

                    <li><span class="bdl"><em>*</em>详细地址</span><span class="bdr"><input type="text" name="address" class="txt kda" /></span></li>
                <li  ><span class="bdl"><em>*</em>商品价格</span><span class="bdr">
				<input type="hidden" name="zfbprice"  value="1050" />
				<input type="hidden" name="goodsId"  value="<?php echo $this->_gets->getParam( 'id' );?>" />
                <input name="price" value="1050" class="txt kda" style="width:50px;" readonly> 元 <span id="zfbyh"></span>
				</span></li>
                    <li  >
                        <span class="bdl"><em>*</em>付款方式</span>
                    <span class="bdr">
                        <div class="payaa">
             <input type="radio" checked="checked" name="pay" id="b1" value="cod" onclick="return changeItem(0);"  class="dxk"><label for="b1"><img src="<?php echo $this->_baseUrl?>/static/yindushenyou/images/hdfk.gif"></label>
                
              
<div style="clear:both"></div>
                        </div>
                        <div id="paydiv0" class="paybb kda">
                            <p>温馨提示：货物送到开箱验货，确认商品无误后再付款！</p>
                            <p>有任何疑问请拨打我们免费客服电话！</p>
                        </div>
                        <div id="paydiv1" class="paybb kda" style="display:none;">					
                            <p>温馨提示：在线支付可享受相应优惠哦！</p>
                            <p>全球领先的第三方支付平台，在线支付，安全可靠！</p>							
                        </div>
                    </span>
                    </li>
 
                    <li class="guest"><span class="bdl">留言</span><span class="bdr"><textarea name="guest"  placeholder="" class="guest kda"></textarea></span></li>
 
<script>getfrom();</script> 

                    <li class="sub"><input type="submit" name="submit" value="" class="send" /></li>
                </ul>
            </div>
        </div>
<script>
var randnotnum=4;
notchanpin=new Array

notchanpin[1]='<p>您订购的 印度黒油喷剂（买4瓶送2瓶） 已发货 请注意收货 <font color=#FF0000>√</font></p>';
notchanpin[2]='<p>您订购的 印度黒油喷剂（买3瓶送1瓶） 已发货 请注意收货 <font color=#FF0000>√</font></p>';
notchanpin[3]='<p>您订购的 印度黒油喷剂（2瓶） 已发货 请注意收货 <font color=#FF0000>√</font></p>';
notchanpin[4]='<p>您订购的 印度黒油喷剂（1瓶） 已发货 请注意收货 <font color=#FF0000>√</font></p>';
</script>
        <div class="orderr">
            <div class="title">
                <img src="<?php echo $this->_baseUrl?>/static/yindushenyou/form/titb.gif" width=90%/>
            </div>
            <div id="fahuo" style="overflow:hidden;">
                <div id="fahuo1" style="overflow:hidden;"><script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/yindushenyou/form/fha.js"></script></div>
                <div id="fahuo2"></div>
            </div>
			<div><img src="<?php echo $this->_baseUrl?>/static/yindushenyou/form/ddbg.gif" style="max-width:330px" width=100%></div>
            <script type="text/javascript">
                var speeds=30;
                var fahuo=document.getElementById('fahuo');
                var fahuo1=document.getElementById('fahuo1');
                var fahuo2=document.getElementById('fahuo2');
                fahuo2.innerHTML=fahuo1.innerHTML
                function Marquee1(){
                    if(fahuo2.offsetHeight-fahuo.scrollTop<=0)
                    fahuo.scrollTop-=fahuo1.offsetHeight
                    else{
                        fahuo.scrollTop++
                    }
                }
                var MyMar1=setInterval(Marquee1,speeds)
                fahuo.onmouseover=function(){
                    clearInterval(MyMar1)
                }
                fahuo.onmouseout=function(){
                    MyMar1=setInterval(Marquee1,speeds)
                }
            </script>
        </div>
        <div style="clear:both;"></div>
    </form>
</div>
<script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/yindushenyou/form/not3.js"></script> 
