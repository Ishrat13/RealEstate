(function($)
{
	$(document).ready(function() {
		$('.styleswitch').click(function()
		{
			switchStylestyle(this.getAttribute("rel"));
			return false;
		});
		var c = readCookie('style');
		if (c) switchStylestyle(c);
	});

	function switchStylestyle(styleName)
	{
		$('link[rel*=style][title]').each(function(i) 
		{
			this.disabled = true;
			if (this.getAttribute('title') == styleName) this.disabled = false;
		});
		$('.logochange').attr('src','images/'+styleName+'.png');
		createCookie('style', styleName, 365);
	}
})(jQuery);
// cookie functions http://www.quirksmode.org/js/cookies.html
function createCookie(name,value,days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
function eraseCookie(name)
{
	createCookie(name,"",-1);
}


$('body').append('<div class="color-setting"><span class="icon"><i style="padding:5px;height:30px;width:30px;background:#000;cursor:pointer;color:#fff;position:absolute;top:15%;bottom:0;left:0%;font-size:18px;z-index:1000;" class="fa fa-cogs" aria-hidden="true"></i></span><div class="mainbox" style="left:0;position:absolute;width:125px;z-index:1000;top:15%;bottom:0;background-color: rgba(0, 0, 0, 0.9);height:140px;padding:20px 15px;"><span><i style="padding:5px;height:30px;width:30px;background:#000;color:#fff;position:absolute;top:0%;bottom:0;left:100%;font-size:18px;cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></span><ul class="list-inline"><li style="margin-bottom:20px;"><a href="javascript:;" rel="style" class="styleswitch"><span style="display: -moz-inline-stack;display: inline-block;*display: inline;width:20px;height:20px;padding:1px 10px;background:#f55a4e;border:1px solid #fff;"></span></a></li><li style="margin-bottom:20px;"><a href="javascript:;" rel="style_blue" class="styleswitch"><span style="display: -moz-inline-stack;display: inline-block;*display: inline;width:20px;height:20px;padding:1px 10px;background:#3498db;border:1px solid #fff;"></span></a></li><li style="margin-bottom:20px;"><a href="javascript:;" rel="style_cyan" class="styleswitch"><span style="display: -moz-inline-stack;display: inline-block;*display: inline;width:20px;height:20px;padding:1px 10px;background:#4BC7D2;border:1px solid #fff;"></span></a></li><li style="margin-bottom:20px;"><a href="javascript:;" rel="style_green" class="styleswitch"><span style="display: -moz-inline-stack;display: inline-block;*display: inline;width:20px;height:20px;padding:1px 10px;background:#27ae60;border:1px solid #fff;"></span></a></li><li style="margin-bottom:20px;"><a href="javascript:;" rel="style_orange" class="styleswitch"><span style="display: -moz-inline-stack;display: inline-block;*display: inline;width:20px;height:20px;padding:1px 10px;background:#e67f22;border:1px solid #fff;"></span></a></li><li style="margin-bottom:20px;"><a href="javascript:;" rel="style_pink" class="styleswitch"><span style="display: -moz-inline-stack;display: inline-block;*display: inline;width:20px;height:20px;padding:1px 10px;background:#ff1493;border:1px solid #fff;"></span></a></li><li style="margin-bottom:20px;"><a href="javascript:;" rel="style_purple" class="styleswitch"><span style="display: -moz-inline-stack;display: inline-block;*display: inline;width:20px;height:20px;padding:1px 10px;background:#8e44ad;border:1px solid #fff;"></span></a></li></ul></div></div>');

$('.color-setting .mainbox').hide();
$('.color-setting .icon .fa').on('click', function(){
    $('.color-setting .mainbox').show();
    $('.color-setting .icon .fa').hide();
});
$('.color-setting .fa-times').on('click', function(){
    $('.color-setting .mainbox').hide();
    $('.color-setting .icon .fa').show();
});

// /cookie functions