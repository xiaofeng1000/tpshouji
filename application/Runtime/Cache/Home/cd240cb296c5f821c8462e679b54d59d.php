<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>更换电池</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=yes"/>
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<link rel="stylesheet" type="text/css" href="/shouji/Public/Home/css/main.css">
	<link href="/shouji/Public/Home/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/shouji/Public/Home/css/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/shouji/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script src="/shouji/Public/Home/js/js-image-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/cell-public.js"></script>
	<script type="text/javascript" src="/shouji/Public/Home/js/cell-cell.js"></script>  
</head>
<body>
	<div class="cell-big">
		<div class="cell-banner">
			<img src="/shouji/Public/Home/images/cell-banner.png">
		</div>
		<div class="cell-toggle box">
			<div class="cell-toggle-member">
				<img src="/shouji/Public/Home/images/iphone(1).png">
				<p>￥120.00</p>
				<p>iphone5/iphone 5s/iphone 5c</p>
			</div>
			<div class="cell-toggle-member">
				<img src="/shouji/Public/Home/images/iphone(2).png">
				<p>￥130.00</p>
				<p>iphone5/iphone 5s/iphone 5c</p>
			</div>
			<div class="cell-toggle-member">
				<img src="/shouji/Public/Home/images/iphone(3).png">
				<p>￥140.00</p>
				<p>iphone5/iphone 5s/iphone 5c</p>
			</div>
			<div class="cell-left leftB"></div>
			<div class="cell-right rightB"></div>
		</div>
		<div class="cell-replace">
			<a href="#top" id="top"><h4>马上更换</h4></a>
		</div>
		<div class="cell-phrase">
			<p>80%的用户电池使用1-2年后的情况</p>
			<p>以ipone5上看剧/玩游戏/使用社交/通话为例</p>
		</div>
		<div class="cell-capacity">
			<img src="/shouji/Public/Home/images/27.png">
			<div class="cell-capacity-r">
				<p>1440mAh</p>
				<p>新机出厂容量</p>
			</div>
		</div>
		<div class="cell-capacity">
			<img src="/shouji/Public/Home/images/28.png">
			<div class="cell-capacity-r">
				<p>1206mAh</p>
				<p>使用1年实际容量</p>
			</div>
		</div>
		<div class="cell-capacity">
			<img src="/shouji/Public/Home/images/29.png">
			<div class="cell-capacity-r">
				<p>961mAh</p>
				<p>使用2年实际容量</p>
			</div>
		</div>

	</div>
	<div class="cell-h">
		<img src="/shouji/Public/Home/images/24.png" width="100%">
		<p>以上数据均参考第三方软件检测结果</p>
		<p>实际使用会根据具体情况略有不同</p>
	</div>
	<h2 class="cell-h2">如何判断手机电池老化？</h2>
	<div class="cell-time">
		<div class="cell-capacity-r">
			<p>老化的电池充电时间</p>
			<p>变短相应的使用时间也变短</p>
		</div>
		<img src="/shouji/Public/Home/images/33.png" width="60" height="60">
	</div>
	<div class="cell-time">
		<div class="cell-capacity-r">
			<p>手机使用一段时间</p>
			<p>电池部位机身会发烫</p>
		</div>
		<img src="/shouji/Public/Home/images/34.png" width="60" height="60">		
	</div>
	<div class="cell-time">
		<div class="cell-capacity-r">
			<p>电量显示不正常</p>
			<p>或者时高时低</p>
		</div>
		<img src="/shouji/Public/Home/images/35.png" width="60" height="60">
	</div>
	<h2 class="cell-h2">预约下单</h2>
	
	<div class="cell-order">
		<div class="cell-order-member">
			<select id="cell-model">
				<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["val"]); ?>"><?php echo ($v["model_number"]); ?></option>
					<!-- <option value="200">iphone 8</option>
					<option value="300">iphone 9</option> --><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<div class="cell-order-member">
			<select id="cell-function">
				<option value="1">上门维修</option>
				<option value="2">邮寄维修</option>
				<option value="3">到店维修</option>
			</select>
		</div>
		<div class="cell-order-member cell-pa">
			<label for="">姓名</label>
			<input type="text" name="name" value="" id="name">
		</div>
		<div class="cell-order-member cell-pa">
			<label for="">手机</label>
			<input type="text" name="tel" value="" id="tel">
		</div>
		<div class="cell-order-member cell-branch">
			<select id="cell-address-branch">
				<option value="1">北京分部</option>
				<option value="2">天津分部</option>
				<option value="3">石家庄分部</option>
				<option value="4">上海分部</option>
			</select>
		</div>
		<div class="cell-order-text">
			地址:北京市海淀区知春路甲108号豪景大厦A座606室
		</div>
		<div class="cell-order-address cell-order-portion">
			<div class="order-add-0">
				<select id="cell-province">
					<option value="0">请选择</option>
				</select>
			</div>
			<div class="order-add-1">
				<select id="cell-city">
					<option>请选择</option>
				</select>
			</div>
			<div class="order-add-1">
				<select id="cell-county">
					<option>请选择</option>
				</select>
			</div>
		</div>
		<div class="cell-order-address cell-order-all">
			<div class="order-add-0">
				<select id="province" name="province" onchange="doProvAndCityRelation();">
  　　　　　		<option id="choosePro" value="-1">请选择</option>
  　　　　　	</select>	
			</div>
			<div class="order-add-1">
				<select id="citys" name="city" onchange="doCityAndCountyRelation();">
 　　　　　 		<option id='chooseCity' value='-1'>请选择</option>
 　　　　　 	</select>
			</div>
			<div class="order-add-1">
				<select id="county" name="county">
		　　　　　	<option id='chooseCounty' value='-1'>请选择</option>
		　　　　</select>
			</div>
		</div>
		<div class="cell-order-member cell-pa">
			<textarea placeholder="请填写详细地址信息" id="cell-text"></textarea>
		</div>
		<div class="cell-order-member cell-pa">
			<label for="">IMEI码(选填)</label>
			<input type="text" name="" value="">
		</div>
	</div>
	<div class="cell-phone-clause">
		<div class="select-input on">
			<input type="checkbox" name="" id="select-checkbox" checked="checked">
		</div>
		<p>我同意 <a href="help.html">《服务条款》</a></p>
	</div>
	<div class="cell-footer clearfix">
		<div class="cell-footer-l"><a href="tel:10086"><img src="/shouji/Public/Home/images/13.png"></a>客服 <span>￥<b></b></span></div>
		<div class="cell-footer-r" id="cell-submit">提交订单</div>
	</div>
	<a name="top" id="bottom"></a>
</body>
<script>
$('#cell-submit').click(function(){
	var path1="";
	var model_number=$('#cell-model').find('option:selected').html();
	var Damage_reason="电池";
	var Service=$('#cell-function').find('option:selected').html();
	var user=$('#name').val();
	var Contact=$("#tel").val();
	var path2=$('#cell-text').val();
	var price=$('.cell-footer-l').find('span').text();
	
	if(Service=="上门维修"){
		var path3=$('#cell-province').find('option:selected').html();
		var path4=$('#cell-city').find('option:selected').html();
		var path5=$('#cell-county').find('option:selected').html();
		$.ajax({
			type:'POST',
			url:'/shouji/index.php/Cell/insert',
			data:{
				model_number:model_number,
				Damage_reason:Damage_reason+price,
				user:user,
				Contact:Contact,
				path1:path3+path4+path5+path2,
				Service:Service,
				price:price,
			},
			success:function($data){
				if($data){
					window.location.href='/shouji/index.php/Succeed/index';
				}
			}
		});
	}
});
</script>
</html>