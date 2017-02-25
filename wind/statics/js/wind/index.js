/*window.onload = function(){
			var liNodes=document.getElementsByTagName('li');
			var option=document.getElementById('nav');
			var option1=option.getElementsByTagName('img')[0];
			for(var i=0;i<liNodes.length;i++)
			{
				liNodes[i].onclick=function(){
					this.className="subMenDisplay";
				}
				var nav2=document.getElementById('nav2');
				var option2=nav2.getElementsByTagName('img');
				var option3=nav2.getElementsByTagName('li');
				var lizong=document.getElementById('lizong');
				for(var i=0;i<option2.length;i++){
				option2[i].onclick=function(){
					option1.src=this.src;	
					for(var j=1;j<liNodes.length;j++){
					 	liNodes[j].style.display="none";
					 }
					if(this.src==option2[1].src){
						lizong.innerHTML="&nbsp;文综";
					}		
				}
				}
			}
		
}*/
window.onload=function(){
	var nav2=document.getElementById('nav2');
	var option=document.getElementById('nav');
	var option1=option.getElementsByTagName('img')[0];
	var option2=nav2.getElementsByTagName('img');
	option1.onclick=function(){
		nav2.style.display="block";
	}
	for(var i=0;i<option2.length;i++){
		option2[i].onclick=function(){
			option1.src=this.src;
			nav2.style.display="none";	
			if(this.src==option2[1].src){
				lizong.innerHTML="&nbsp;文综";
			}else if(this.src==option2[0].src){
				lizong.innerHTML="&nbsp;理综";
			}
		}
	}
}