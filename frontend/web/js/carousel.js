/**
 * Created by Administrator on 2018/1/10.
 * form by 好好好先生
 * email 1570302023@qq.com
 *
 *
 *
 */

$(function(){
    $('.bot-img ul li').click(function(){
        var _this=$(this);
        _this.addClass('active').siblings('li').removeClass('active');
        var int=_this.index();
        $('.activeimg').animate({left:int*-585},"fast");
    });
    var list=$('.bot-img ul li').length;
    $('.activeimg').css({
        width:list*585,
    });
    $('.right').click(function(){
        next(list)

    })
    $('.left').click(function(){
        prev(list)
    });
})
var index=0;
//下一张
function next(list){
    if(index<list-1){
        index++;
        $('.activeimg').animate({left:index*-585},"fast");
        $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
    }else{
        index=0;
        $('.activeimg').animate({left:index*-585},"fast");
        $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
        $('.bot-img ul').animate({left:index*-90},"fast");
    }
    if(index>4){
    	$('.bot-img ul').animate({left:(index-4)*-100},"fast");
    }
    else{
    	$('.bot-img ul').animate({left:0},"fast");
    }
}
//        上一张
function prev(list){
    index--;
    if(index<0){
        index=list-1;
        $('.activeimg').animate({left:index*-585},"fast");
        $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
    }else{
        $('.activeimg').animate({left:index*-585},"fast");
        $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
    }
    if(index>4){
    	$('.bot-img ul').animate({left:(index-4)*-100},"fast");
    }
    else{
    	$('.bot-img ul').animate({left:0},"fast");
    }

}


