<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="IMG_20201231_090439_070.jpg">
	<script src="jquery-3.5.1.js"></script>
	<meta charset="utf-8">
	<title>invite</title>
	<style>
	html,body{
		height:100%;
		width:100%;
		margin:0px;
		padding:0px;
	}
	@font-face{
		font-family:"fira code";
		src: url("fira code.ttf");
	}
	@font-face{
		font-family:"b yekan";
		src: url("b yekan.ttf");
	}
	.background{
		height:100%;
		position:fixed;
	}
	.layer_1 h1,.layer_1 h2{
		color:white;
		position:absolute;
		font-family:"fira code";
		
	}
	.layer_1 h1{
		    top: 39%;
    background-color: blue;
    font-size: 95px;
    border-radius: 20px;
    padding: 10px;
    left: 45%;
    padding-bottom: 0px;
    padding-top: 0px;
	display:none;
	
		
	}
	.layer_1 h2{
		    top: 48%;
    font-size: 65px;
    border-radius: 20px;
    padding: 10px;
    background-color: lightgray;
    color: todo;
    left: 45%;
    padding-bottom: 0px;
    padding-top: 0px;
	display:none;
	}
	
	.layer_2 .chat_icon_background{
		background-color:black;
		border-radius:1000px;
		position:absolute;
		height:250px;
		width:250px;
		top:50%;
		transform: translate(-50%,-50%);
		left:50%;
		display:flex;
		justify-content:center;
		align-items:center;
		
	}
	.layer_2 .chat_icon{
		fill:white;
		height:50%;
		
		
	}
	.layer_3{
		
	}
	.layer_3 h1,.layer_3 h2{
		display:none;
		direction:rtl;
		font-family:"b yekan";
		position:absolute;
		right:60px;
		
	}
	.layer_3 .besm_allah{
		background-color: blue;
    border-radius: 15px;
    padding: 28px;
    /*
	padding-bottom: 0px;
    padding-top: 0px;
	*/
    color: white;
    font-size: 70px;
	}
	.layer_3 .besm_allah span{
		color:red;
	}
	.layer_3 .title{
		    border-radius: 15px;
    padding: 28px;
    /*
	padding-bottom: 0px;
    padding-top: 0px;
    */
	top: 200px;
    background-color: darkslategrey;
    max-width: 690px;
    color: white;
    font-size: 50px;
	}
	.layer_3 .message{
		border-radius: 15px;
    padding: 28px;
    /*
	padding-bottom: 0px;
    padding-top: 0px;
    */
	top: 460px;
    background-color: darkslategrey;
    max-width: 690px;
    color: white;
    font-size: 50px;
	}
	.layer_3 .message span {
		color:white;
		background-color:blue;
		border-radius:10px;
		    padding: 10px;
    /*
	padding-top: 0px;
    padding-bottom: 0px;
	*/
	}
	.layer_3 .date{
		     border-radius: 15px;
    padding: 28px;
    right: 210px;
    /*
	padding-bottom: 0px;
    padding-top: 0px;
    */
	top: 870px;
    background-color: darkslategrey;
    max-width: 540px;
    color: white;
    font-size: 50px;
	}
	.layer_3 .location{
		    border-radius: 15px;
    padding: 28px;
    right: 210px;
    /*
	padding-bottom: 0px;
    padding-top: 0px;
    */
	top: 1050px;
    background-color: darkslategrey;
    max-width: 540px;
    color: white;
    font-size: 50px;
	}
	.layer_3 .footer{
		    border-radius: 15px;
    padding: 28px;
    /*
	padding-bottom: 0px;
    padding-top: 0px;
    */
	top: 1440px;
    background-color: darkslategrey;
    width: 690px;
    color: white;
    text-align: center;
    font-size: 50px;
	}
	.layer_3 .map_icon{
		position: absolute;
    right: 80px;
    top: 1100px;
    fill: aquamarine;
    height: 80px;
	display:none;
	}
	.layer_3 .calendar_icon{
	    position: absolute;
    right: 80px;
    top: 920px;
    fill: aquamarine;
    height: 80px;
	display:none;
	}
	</style>
	<script>
	$(document).ready(function(){
		
			setTimeout(function(){
				$(".chat_icon_background").animate({"left":"29%"});
				$(".layer_1 h1").slideDown(1000);
				$(".layer_1 h2").slideDown(1000);
				
				$(".chat_icon_background").one('click',function(){
				$(this).find(".chat_icon").hide().parent()
				.css({"transform":"translate(0%,0%)","position":"fixed"})
				.animate({
					"width":"100%",
					"height":"100%",
					"top":"0px",
					"left":"0px",
					"border-radius":"0px"
				});
				setTimeout(function(){
					$(".layer_3 .besm_allah").slideDown();
					
					$(".layer_3 .title").slideDown();
					$(".layer_3 .message").slideDown();
					$(".layer_3 .calendar_icon").slideDown();
					$(".layer_3 .date").slideDown();
					$(".layer_3 .map_icon").slideDown();
					$(".layer_3 .location").slideDown();
					$(".layer_3 .footer").slideDown();
				},700);
				});
			},2000);
		
	});
	
	</script>
</head>
<body>
	<!-- background-image: -->
	<img src="2.jpg" class="background">
	
	<div class="layer_1">
		<h1>anese</h1>
		<h2>al shohada</h2>
		
	</div>
	<div class="layer_2">
		<div class="chat_icon_background">
		<svg viewBox="0 0 16 16" class="chat_icon" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
		</svg>
		</div>
		
	</div>
	<div class="layer_3">
		<h1 class="besm_allah">بسم رب <span>الشهدا</span> و الصدیقین</h1>
		<h2 class="title">الهی کار آن کس کند که تواند، عطا آن کس بخشد که دارد، پس بنده چه تواند و چه دارد.</h2>
		<h2 class="message">
		<?php
		if (isset($_GET["male"])){
			echo "فرهیخته ارجمند جناب آقای";
		}else{
			echo "فرهیخته ارجمند سرکار خانم";
		};
		
		?>
		<span><?php echo $_GET["name"] ?></span> از شما دعوت به عمل می آید تا در جلسه ی هم اندیشی و مشخص نمودن هیئت رئیسه ی گروه جهادی آنسه حضور به هم رسانید.</h2>
		<h2 class="date">روز دوشنبه مورخ 22 دی ماه 1399، ساعت 15</h2>
		<svg viewBox="0 0 16 16" class="map_icon" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z"/>		
		</svg>
		<h2 class="location">خیابان میرزاده عشقی، روبروی تالار حافظ، خانه جوانان</h2>
		<svg viewBox="0 0 16 16" class="calendar_icon" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
		</svg>
		<h2 class="footer">گروه جهادی آنسه الشهدا - همدان</h2>
		
	</div>
	
</body>
</html>



