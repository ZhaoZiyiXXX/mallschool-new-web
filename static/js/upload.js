document.write("<script src=\"/static/js/config.js\"></script>");
function initshopinfo(){
	var shopid = arguments[0] ? arguments[0] : null;
	if(null == shopid){
		//首先获取学校列表
		$.ajax({
			type:"GET",
			url:API_ROOT+"/Printshops",
			dataType:"json",
			data:{
			},
			success:function(data){
				if(data.result ==0){
					var temphtml;
					for(var i=0;i<data.data.length;i++){
						temphtml +="<a>"+data.data[i].name+"</a>";
					}
					$('#schoolbox').html(temphtml);
					$('#schoolshopbox').html();
				}
			},
			error:function(data){
				alert("网络异常，请稍后重试");
			},
		});
		return;
	}
	$.ajax({
		type:"GET",
		url:API_ROOT+"/Printprice",
		dataType:"json",
		data:{
			shopid:shopid,
		},
		success:function(data){
			$('#selectshop').modal('hide');
			if(data.result ==0){
				var bt=baidu.template;
				price_array = data.data;
				var html=bt('t:pricetable',data);
				$("#prices").html(html);
				for(var pagesize in data.data){
					$('#pagesize').html($('#pagesize').html()+"<option value="+pagesize + ">"+pagesize + "</option>");
				}
				for(var color in data.data[$('#pagesize').val()]){
					$('#pagecolor').html($('#pagecolor').html()+"<option value="+color + ">"+color + "</option>");
				}
			}
		},
		error:function(data){
		},
	});
	
}

function calcprice(){
	var pagecount = $('#pagecount').val();
	if(pagecount!=""&!isNaN(pagecount)){
		if("单面" ==isduplex ){
			onepageprice = price_array[$('#pagesize').val()][$('#pagecolor').val()]["单面"];
		}else{
			onepageprice = price_array[$('#pagesize').val()][$('#pagecolor').val()]["双面"];
			pagecount = Math.ceil(pagecount/2);
		}
		var price = onepageprice * pagecount;
		$('#price').html("总价:"+ price.toFixed(2)+"元");
		$('#orderprice').val(price.toFixed(2)); 
	}else{
		$('#price').html("");
	}
}
$(document).ready(function(){
	//价格表动画效果
	var price_array ;
	var div = $("#pricetable");
	div.animate({marginTop:'0',opacity:'0.5'},"3000",'easeInExpo');
	div.animate({marginTop:'200',opacity:'0.6'},"4000",'easeOutExpo');
	div.animate({marginTop:'0',opacity:'0.7'},"4000",'easeInExpo');
	div.animate({marginTop:'70',opacity:'0.8'},"5000",'easeOutExpo');
	div.animate({marginTop:'0',opacity:'0.9'},"5000",'easeInExpo');
	$("input").keypress(function(e){
		var keyCode= e.keyCode?e.keyCode:e.witch?e.witch:e.charCode;
		if(keyCode == 13){
			return false;
		}
	});
	initshopinfo();
	$('input[id=fileToUpload]').change(function() {
	    var path = $(this).val();
	    path = path.split("\\");
	    $('#filename').html(path[path.length-1]);
	    $('#submit').addClass("disabled");
	    $('#loading').removeClass("dpn");
	    $('#loading').prop("src","static/images/loading.gif");
	    
		var options = {
			    url:API_ROOT+"/PrintFile",
			    dataType: 'json',
			    type:"POST",
			    data:{type:"file"},
			    timeout:100000,
			    success: function(data) {
			    	$('#submit').removeClass("disabled");
			    	$('#loading').prop("src","/static/images/OK.png");
			    	$('#uploadfileid').val(data.data.id);
			    	$('#uploadfilepath').val(data.data.filepath);
			    	$('#uploadfilename').val($('#filename').html());
			    },
			    error:function(data){
			    	$('#submit').addClass("disabled");
			    	$('#loading').addClass("dpn");
			    	$('#filename').html("上传失败，请刷新后重试");
			    }
	    };
	    $('#configform').ajaxSubmit(options);
	});
	var isduplex = "双面";
	$(":radio").click(function(e){
		switch(e.target.id)
		{
			case "blankRadio3":
				isduplex = "双面";
				break;
			case "blankRadio4":
				isduplex = "单面";
				break;
		}
		calcprice();
	});
	$("select").change(function(){
		calcprice();
	});
	$("select#pagesize").change(function(){
			$('#pagecolor').html("");
			for(var color in price_array[$('#pagesize').val()]){
				$('#pagecolor').html($('#pagecolor').html()+"<option value="+color + ">"+color + "</option>");
			}
	});
	
	$('#pagecount').change(function(){
		calcprice();
	});

    $("#submit").click(function(){
    	if($('submit').hasClass("disabled")){
    		alert("请先选择要打印的文件");
    	}else{
    		if($('#tel').val()==""|| !(/^1[3|4|5|7|8][0-9]\d{4,8}$/.test($('#tel').val()))){
    			alert("手机号是取货的凭证，也是唯一的查询订单的方法，请务必填写");
    			$('#tel').focus();
    			return false;
    		}
    		$.ajax({
    			type:"POST",
    			url:API_ROOT+"/PrintFile",
    			timeout : 3000,
    			dataType:"json",
    			data:$("#configform").serialize(),
    			success:function(data){
    				if(data.result ==0){
    					//订单创建成功
    					console.log("订单提交成功");
    					$.ajax({
			    			type:"POST",
			    			url:"/static/alipay/alipayapi.php",
			    			timeout : 3000,
			    			data:{
			    				WIDout_trade_no:data.data.id,
		    					WIDsubject:"喵校园云打印订单",
	    						WIDtotal_fee:$('#orderprice').val(),
	    						ticket:data.data.ticket,
			    			},
			    			success:function(data,e){
			    				$('#resultrest').html(data);
			    				console.log("alipay订单提交成功"+e.message);
			    			},
			    			error:function(data,e){
			    				console.log("alipay订单提交失败"+e.message);
			    			},
    					});
    					$('#myModal').modal({
    						  keyboard: false
    						});
    				}else{
    					alert("网络异常，请稍后重试");
    				}
    			},
    			error:function(data){
    				alert("网络异常，请稍后重试");
    			},
    		});
    	}
    	return false;
    });

	$('#selectshopsubmit').click(function(){
		initshopinfo("123456789012345678901234");
	});
	 //客服QQ相关代码开始
    $('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
	$('.go-top').bind('click',function(){
		$(window).scrollTop(0);
	});
	$(".weixing-container").bind('mouseenter',function(){
		$('.weixing-show').show();
	})
	$(".weixing-container").bind('mouseleave',function(){        
		$('.weixing-show').hide();
	});
	//客服QQ相关代码结束
});