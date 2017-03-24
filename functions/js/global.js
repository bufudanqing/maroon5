function  addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function (){
			oldonload();
			func();
		}
	}
}
//===============================================
//控制登录注册窗口的显示

function toggle_visibility() {
	var e = document.getElementById("popup-box1");
	// alert(e);
	if (e.style.display == "block") {
		e.style.display = "none";
	} else {
		e.style.display = "block";
	}
}
// $(document).ready(function(){
//     $("l-r-close").click(function(){
//         // $("#popup-box1")
//     });
// });
// // addLoadEvent(toggle_visibility);

//============================================
// image slider 部分
sliderInt = 1;
sliderNext = 2;

$(document).ready(function(){
	$('#slider>img#1').fadeIn(300);
	startSlider();
});

function startSlider(){
	count = $("#slider>img").length;
    // alert(count);

	loop = setInterval(function(){
		if(sliderNext > count){
			sliderNext = 1;
			sliderInt = 1;

		}
		$("#slider>img").fadeOut(300);
		$("#slider>img#"+sliderNext).fadeIn(300);//这里总是少写#

		sliderInt = sliderNext;
		sliderNext = sliderNext+1;
	} , 3000);
}

function prev(){
	newSlider = sliderInt - 1;
	showSlider(newSlider);
}
function next(){
	newSlider = sliderInt + 1;
	showSlider(newSlider);
}

function stoploop(){
	window.clearInterval(loop);
}
function showSlider(id){
    
    stoploop();

    if(id>count) {
    	id=1;
    }else if(id<1){
    	id=count;
    }

    $("#slider>img").fadeOut(300);
    $("#slider>img#"+id).fadeIn(300);

    sliderInt = id;
    sliderNext = id +1;
    startSlider();
}

$("#slider>img").hover(
    function (){
    	stoploop();
    },
    function(){
    	startSlider();
    }
)

//==================================================
// music部分翻页
$(function(){
	var page = 1;
	var i = 4;
    // alert(4);
	$("span.music_prev").click(function(){
		var $parent = $(this).parents("div.music");
		var $viewcontent = $parent.find("div.view-content");//所有视频
		var $blockcontent = $parent.find("div.block_content");//视频外部div

		var $clickdots = $parent.find("div.click-dots");
		var $dots = $clickdots.find("div");

	    var width = $blockcontent.width();//外围div宽度，即所限制的每个版面宽度
	    
	    var len = $viewcontent.find("article").length;
	    var page_count = Math.ceil(len /i);
	    // alert(page_count);

	    if( page == page_count){
	    	$viewcontent.animate({left: '0px'},"slow");
	    	page = 1; 
	    }else{
	    	$viewcontent.animate({left:'-='+width},"slow");
	    	page++;
	    }
	    $dots.eq((page-1)).addClass("current").siblings().removeClass("current");
	});
	$("span.music_next").click(function(){
		var $parent = $(this).parents("div.music");
		var $viewcontent = $parent.find("div.view-content");//所有视频
		var $blockcontent = $parent.find("div.block_content");//视频外部div.

		var $clickdots = $parent.find("div.click-dots");
		var $dots = $clickdots.find("div");

	    var width = $blockcontent.width();
	    
	    var len = $viewcontent.find("article").length;
	    var page_count = Math.ceil(len /i);
	    // alert(page_count);

	    if( page == 1){//如果处于第一版面，如果再向前，则跳到最后一个版面
	    	$viewcontent.animate({left: '-='+width*(page_count-1)},"slow");
	    	page = page_count; 
	    }else{
	    	$viewcontent.animate({left:'+='+width},"slow");
	    	page--;
	    }
	    $dots.eq((page-1)).addClass("current").siblings().removeClass("current");
	})
});

//==================视频翻页===================
$(function(){
       var page = 1;
       var videocount = 5;
       // alert(page);
       $("span.video_next").click(function(){
       
       var $parent = $(this).parent("div.video");
       var $viewvideo = $parent.find("div.view-video");//视频
       var $blockvideo = $parent.find("div.block_video");//视频外围框

       var width = $blockvideo.width();
       var pagecount = $viewvideo.find("article").length;
       // alert(width);
       if(page == videocount){//处于最后一个视频
           $viewvideo.animate({left: '0px'},"slow");//改变内部的视频长条的left值
           page = 1;
       } else {
       	   $viewvideo.animate({left:'-='+width},"slow");
           page++; 
       }

   })
       $("span.video_prev").click(function(){
       
       var $parent = $(this).parent("div.video");
       var $viewvideo = $parent.find("div.view-video");//视频
       var $blockvideo = $parent.find("div.block_video");//视频外围框

       var width = $blockvideo.width();
       var pagecount = $viewvideo.find("article").length;
       // alert(width);
       if(page == 1){//处于第一个视频
           $viewvideo.animate({left: '-='+width*(videocount-1)},"slow");//改变内部的视频长条的left值
           page = videocount;
       } else {
       	   $viewvideo.animate({left:'+='+width},"slow");
           page--; 
       }

   })
});
// =============================
//footer部分mail.php 提交邮箱
$(document).ready(function(){
		// alert();
			$("#edit-submit").click(function(){
                var email = $("#email-text").val();
                var zipcode = $("#zipcode").val();

                var insert = [];
                $('.get_value').each(function(){
                     if($(this).is(":checked")){
                     	insert.push($(this).val());
                     }
                });
                insert = insert.toString();
                // alert (email);
				$.ajax({
					type:'POST',
					url:'mail.php',
					data:{"email_address":email,"zip_code":zipcode,insert:insert},
                    success:function(data){
                        // $("#print").text(data);
                        $("#email-text").val("");
                        $("#zipcode").val("");
                        $("#edit-submit").val("SUBSCRIBED");
                        // $(".subscribed_tip").css("opacity":1);
                        $(".subscribed_tip").animate({"left":"26%"},100);
                        $(".subscribed_tip").append(insert);
                        setTimeout(function(){
                        	$(".subscribed_tip").hide();
                        },3000);
                    }
				})
				return false;
			})
		});
//==============================================
//使用ajax的全局函数.ajaxStart()和.ajaxStop()控制loading图片的显示和隐藏
$(document).ready(function(){
	$("#loading").ajaxStart(function(){
		$(this).show();
	});
	$("#loading").ajaxStop(function(){
		$(this).hide();
	});
});

//==============================
//login.register
// 点击tab2时调整整个登录框的高度
// $(document).ready(function(){
// 	$("#tab-2").click(function(){
// 		$(".user-login-register").animate({height:"650px"});
// 	})
// })

//==========================================
//news部分的loadmore
$(document).ready(function(){
	$(document).on('click', '#show', function(e){
		//获取hidden input的value值
        var pageno = $("#currentresult").val();
        // alert();

        $.ajax({
            url:"functions/php/newsajaxget.php",
            type:"get",
            //键值对，key和value,page:pageno
            data:"page="+pageno,
            error:function(){

            },
            success:function(data){
                pageno++;
                //把+1后的pageno赋值给hidden input
                $("#currentresult").val(pageno);
                $("#showdata").append(data);
            }
        });
	});
})

//===============================================
//tour部分的分页
$(document).ready(function(){
	$(".tour_pages li:first").css({'color':'#FF0084'});
    //加载第一页内容
    $(".dates .view-content").load('../maroon5/functions/php/getshows.php?page=1');
    //页数点击操作，点击1，则page=1，显示0,9
    //点击2，则page=2，显示9,9
    $(".tour_pages li").click(function(){
        //$(".tour_pages li").css,这种写法错误
        $(".tour_pages li").css({'color':'green'});
        $(this).css({'color':'#FF0084'});
        //获取当前页数即id
        var num = this.id;
        $(".dates .view-content").load('../maroon5/functions/php/getshows.php?page='+num);
    });

})

//==========================================
//左下角图标鼠标悬浮时出现提示
$(document).ready(function(){
     // alert();
     $(".avatar-img").hover(function(){
        $(".td-row-wrapper").show();
     });
     $(".td-row-wrapper").hover(function(){
        $(".td-end,.td-row-facebook,.td-footer").show();
     });
});
$(document).ready(function(){
	$(".td-end").click(function(){
		$(".td-col-content").css({"display":"none"});
	})
})

//==================================================
//无刷新登录注册

//登录
$(document).ready(function(){
     $(document).on('click',"#submit",function(){
         var email = $("#edit-name").val();
         var pass  = $("#edit-pass").val();
         // alert (email);
         $.ajax({
         	url:"functions/php/login.php",
         	type:"POST",
         	data:{ email:email,pass:pass},
         	beforeSend: function () {
               // document.getElementById("status").innerHTML = '正在登录中...';
            },
            success:function(data){
            	
            	console.log(data);
            	// alert(data);
            	$("#edit-name").val(" ");
            	$("#edit-pass").val(" ");
            	// $("#user-login-register").hide();
            	$("#popup-box1").hide();
            	//login部分变化为用户头像和账户
            	$(".user-link-login").css({"display":"none"});
            	$(".user-menu").append(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
				 alert(XMLHttpRequest.status);
				 alert(XMLHttpRequest.readyState);
				 alert(textStatus);
            },
         });
         return false;
     });

});

//======================
//注册
$(document).ready(function(){
    
    $(document).on('click','#reg-submit',function(){
        
        var regemail = $("#reg-email").val();
        var username = $("#edit-name-2").val();
        var pwd1 = $("#edit-pass-pass1").val();
        var pwd2 = $("#edit-pass-pass2").val();
        var postcode = $("#edit-post").val();
        // alert (regemail);
        $.ajax({
        	url:"functions/php/register.php",
        	type:"POST",
        	data:{
        		regemail:regemail,
                username:username,
                pwd1:pwd1,
                pwd2:pwd2,
                postcode:postcode
        	},
        	error:function(XMLHttpRequest,textStatus,errorThrown){
                alert(XMLHttpRequest.status);
                alert(XMLHttpRequest.readyState);
                alert(textStatus);
        	},
        	success:function(data){
                console.log(data);
                alert(data);
                //隐藏登录窗口
                // $("#popup-box1").hide();
        	},
        });
       return false;
    });
});

//================================
//注销登录 logout
$(document).ready(function(){
    $(document).on("click",".user-logout", function(){
        $.ajax({
        	url:"functions/php/logout.php",
        	type:"POST",
        });
    });
});

//============================
//


