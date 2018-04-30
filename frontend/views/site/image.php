<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
	.imgbox{
		position:absolute;
	}
	.big-img-div{

	}
	.big-img-div img{
		position:absolute;
		left:0;top:0;
		dispay:none;
		width:580px;
		height:400px;
	}
	.small-img-div{
		position:absolute;
		top:401px;
		height:110px;
		width:580px;
		overflow:hidden;
	}
	.small-ul{
		position:absolute;
		left:20px;
		top:0;
		width:4100px;
		height:60px;
	}
	.small-ul li{
		list-style:none;
		width:90px;
		height:60px;
	}
	.small-ul li img{
		width:90px;
		height:60px;
	}
	.normal{
		filter:alpha(Opacity=100);
		-moz-opacity:1;
		opacity:1;
	}
	.active{
		filter:alpha(Opacity=80);
		-moz-opacity:0.8;
		opacity: 0.8;
		border:1px solid red;
	}
	.arrow{
		position:absolute;
		z-index:1;
		width:20px;
		height:60px;
		background:rgba(0,0,0,0.4);
	}
	.arrow:hover{
		background:rgba(0,0,0,0.5);
	}
	.left{
		left:0;
	}
	.right{
		right:0;
	}

</style>
<script>
	$(document).ready(function(){
		$(".small-ul li").click(function(){
			$(".small-ul li").attr('class', 'normal');
			$(this).attr('class', 'active');
			$(".big-img-div img").css('display', 'none');
			$(".big-img-div img[data-id=" + $(this).data("id") + "]").css('display', 'block');
		});
		$(".left").click(function(){
			if($(".small-ul").position().left < 0){
				$(".small-ul").animate({left: $(".small-ul").position().left+90}, 10);
			}

		});
		$(".right").click(function(){
			if($(".small-ul").position().left > ($(".small-ul li").length - 6) * -90 + 20){
				$(".small-ul").animate({left: $(".small-ul").position().left-90}, 10);
			}
		});
	});
</script>
<div class="container">
	<div class="imgbox">
		<div class="big-img-div">
			<img data-id="1" src="images/1.jpg" />
			<img data-id="2" src="images/2.jpg" />
			<img data-id="3" src="images/3.jpg" />
			<img data-id="4" src="images/4.jpg" />
			<img data-id="5" src="images/5.jpg" />
			<img data-id="6" src="images/6.jpg" />
			<img data-id="7" src="images/7.jpg" />
			<img data-id="8" src="images/8.jpg" />
			<img data-id="9" src="images/9.jpg" />
			<img data-id="10" src="images/10.jpg" />
		</div>
		<div class="small-img-div">
			<img class="arrow left" src="images/left.png" />
			<img class="arrow right" src="images/right.png" />
			<ul class="small-ul">
				<li data-id="1"><img src="images/1.jpg" /></li>
				<li data-id="2"><img src="images/2.jpg" /></li>
				<li data-id="3"><img src="images/3.jpg" /></li>
				<li data-id="4"><img src="images/4.jpg" /></li>
				<li data-id="5"><img src="images/5.jpg" /></li>
				<li data-id="6"><img src="images/6.jpg" /></li>
				<li data-id="7"><img src="images/7.jpg" /></li>
				<li data-id="8"><img src="images/8.jpg" /></li>
				<li data-id="9"><img src="images/9.jpg" /></li>
				<li data-id="10"><img src="images/10.jpg" /></li>
			</ul>
		</div>
	</div>
</div>
<!--
-->