function validateform1(){  
	var name=document.myform1.name.value;  
	var password=document.myform1.password.value;  
	passcheck1=/^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,18}$/;
	if(passcheck1.test(password))
	{
		
	}
	else{
		alert("please enter the password as given in hint");
		return false;
	}
	if (name==null || name==""){  
	  alert("Name can't be blank");  
	  return false;  
	}else if(password.length<6){  
	  alert("Password must be at least 6 characters long.");  
	  return false;  
	  }
	} 
	function validateform2(){  
		var name2=document.myform2.name.value;  
		var password2=document.myform2.password.value;
		var m2 = document.myform2.mobile.value; 
		
		passcheck=/^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,18}$/;
		mcheck=/^[6789]{1}[0-9]{9}$/;
		if(passcheck.test(password2))
		{
			
		}
		else{
			alert("please enter the password as given in hint");
			return false;
		}
		if(mcheck.test(m2))
		{}
		else
		{
			alert("enter a valid mobile number");
			return false;
		}
		
		  
		if (name2==null || name2==""){  
		  alert("Name can't be blank");  
		  return false;  
		}else if(password2.length<6){  
		  alert("Password must be at least 6 characters long.");  
		  return false;  
		  }
		  var x=document.myform2.email.value;  
		  var atposition=x.indexOf("@");  
		  var dotposition=x.lastIndexOf(".");  
		  if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
			alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
			return false;  
			}   
		} 
	


jQuery(document).ready(function(){
	"use strict";
	$('#slider-carousel').caroufredsel({
	    responsive:true,
		width:'100%',
		circular:true,
		scroll:{
			items:1,
			duration:500,
			pauseOnHover:true
		},
		auto:true,
		items:
		{
			visible:{
				min:1,
				max:1
			},
			height:"variable"
		},
		pagination:{
			container:"sliderpager",
			pageAnchorBuilder:false
		}
	});
	$(window).scroll(function(){
		var top = $(window).scrollTop();
		if(top>=60)
		{
			$("header").addClass('secondary');
		}
		else
			if($("header").hasClass('secondary')){
				$("header").removeClass('secondary');

			}




	});



});
