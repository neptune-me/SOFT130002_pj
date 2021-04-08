window.onload=function(){
	small=document.getElementById("small");
	shadow=document.getElementById("shadow");
	shadowWH=shadow.style.width?shadow.style.width:document.defaultView.getComputedStyle(shadow,null).width;
	shadowWH=parseInt(shadowWH);
	smallW=small.style.width?small.style.width:document.defaultView.getComputedStyle(small,null).width;
	smallW=parseInt(smallW);
//	smallML=small.style.marginLeft?small.style.marginLeft:document.defaultView.getComputedStyle(small,null).marginLeft;
//	smallML=parseInt(smallML);
	
	smallMT=small.style.marginTop?small.style.marginTop:document.defaultView.getComputedStyle(small,null).marginTop;
	smallMT=parseInt(smallMT);
	big=document.getElementById("big");
	bigW=big.style.width?big.style.width:document.defaultView.getComputedStyle(big,null).width;
	bigW=parseInt(bigW);
//	console.log(smallW);
//	console.log(shadowWH)
//console.log("smallML="+smallML);
//console.log("smallMT="+smallMT);
//console.log("bigw="+bigW);
	bigImg=big.getElementsByTagName("img")[0];
	move();
}
function move(){
	small.onmouseover=function(){
		shadow.style.display="block";
		big.style.display="block";
		change(event);
	}
	small.onmouseout=function(){
		shadow.style.display="none";
		big.style.display="none";
	}
	small.onmousemove=function(){
		change(event);
	}
}
function change(event){
	var evt=event?event:window.event;
//	var moveL=evt.pageX;
//	var moveT=evt.pageY;
	var moveL=evt.layerX-shadowWH/2;
	var moveT=evt.layerY-shadowWH/2;
	
//	console.log("moveL="+moveL+":  moveT="+moveT);
	
	if(moveL<0){
		moveL=0;
	}
	if(moveL>smallW-shadowWH){
		moveL=smallW-shadowWH;
	}
	
	if(moveT<0){
		moveT=0;
	}
	if(moveT>smallW-shadowWH){
		moveT=smallW-shadowWH;
	}
	
	shadow.style.left=moveL+"px";
	shadow.style.top=moveT+"px";
	/**
	 * 图片放大
	 */
//	big.style.left=smallW+smallML+50+"px";
	big.style.left=50+"px";
	big.style.top=smallMT+"px";
	bigImgW=bigImg.offsetWidth;
//	console.log("bigImgW="+bigImgW);
	var scale=bigImgW/bigW;
	bigImg.style.top=-moveT*scale+"px";
	bigImg.style.left=-moveL*scale+"px";
}