function loadScript(url, callback)
{
    // Adding the script tag to the head as suggested before
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;

    // Then bind the event to the callback function.
    // There are several events for cross browser compatibility.
    script.onreadystatechange = callback;
    script.onload = callback;

    // Fire the loading
    head.appendChild(script);
}

$(window).resize(function(){
	$('.content_wrap').width($(window).width() - $('.userinfo').width() - 40)
	$('.content_wrap').height($('.userinfo').height() * 1 + 1 * 40)
})
$(document).ready(function(){
	$(window).resize();		
	loadScript("camera/scripts/jquery.mobile.customized.min.js");
	loadScript("camera/scripts/jquery.easing.1.3.js");
	loadScript("camera/scripts/camera.min.js",function(){
		$('#camera_wrap_4').camera({
			height: 'auto',
			loader: 'bar',
			pagination: true,
			thumbnails: false,
			hover: false,
			opacityOnGrid: false,
			imagePath: 'camera/images/'
		});
	});
})
var test = function(wrap){
	var links =  $('a',wrap);
	for(i = 0; i < links.length ;i++){
		console.log(links[i])
		var VRegExp = new RegExp(/(http:\/\/|https:\/\/|www\.)vk\.com\/|^vk\.com\//);
    	var VResult = VRegExp.test($(links[i]).attr('href')); 
		if (VResult) {
			$(links[i]).css({'border':'1px solid green'})
			alert('Congratulations VK link is find and green bordered')
		}else{
		  alert('Why why??? No link to VK')
		  $(links[i]).css({'border':'1px solid red'})
		}
	}
}