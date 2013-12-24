<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<title>AlmaShines - A Community for Students and Alumnies</title>
<link rel="Shortcut Icon" href="/almashines/images/Almashines_favicon.png"/>
<link rel="stylesheet" type="text/css" href="/almashines/css/common.css">
<style type="text/css">
	html, body
	{
		height: 100%;
	}
	.deselectable{-moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none;user-select: none;}
	.infoimg
	{
		width:60px;height:50px;float:left;border:1px solid #CCCCCC;border-radius:4px;background-color:#f2f2f2;margin-right:30px;
	}
	#login input[type="text"]
	{color:#999;padding:2px 0px;padding-left:5px;margin-right:0px;margin-bottom:5px;width:145px;height:17px;}
	#login-submit
	{	
		color:#333;background-color:white;border:1px solid #bbb;padding:4px 9px;height:25px;text-align:center;
		font-weight:bold;margin-bottom:10px;vertical-align:middle;font-size:12px;line-height:25px;cursor:default;
        -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none;user-select: none;
	}
	#signup input[type="text"]
	{	color:#999;padding:8px 10px;margin-bottom:20px;display:block;width:78%;
		border:1px solid #aaa;border-radius:4px;font-size:16px;}
	.signup-submit
	{	
		color:#333;border:1px solid #ccc;padding:6px 35px;height:25px;text-align:center;display:block;border-radius:3px;
		margin-bottom:0px;vertical-align:middle;font-size:18px;line-height:25px;cursor:default;
        -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none;user-select: none;
	}
	.signup-submit1
	{border:1px solid #ccc;padding:4px 35px;cursor:default;text-align:center;display:block;border-radius:3px;
		argin-bottom:0px;vertical-align:middle;
        -moz-user-select: none;-khtml-user-select: none;-webkit-user-select: none;user-select: none;
	}
	#signup select
	{	display:block;font-size:16px;padding:7px 10px;
		width:78%;border:1px solid #aaa;border-radius:4px;margin-bottom:15px;color:#999;}
	#bdaydiv select
	{width:70px;display:inline;}
	.signupform
	{
		width:410px;padding:30px 0px;padding-top:35px;
	}
	.signcenter{width:83%;}
	#signup_checkbox a{text-decoration:none;color:#ddd;}
	#signup_checkbox a:hover{text-decoration:underline;}
	.dropdown-menu2{left:0px;top:-2px;}
	.formstrip
	{background-color:#6a5e95;border-radius:8px;width:480px;padding:15px 0px;padding-top:0px;}
	.formcenter{display:inline-block;}
	.cloud{font-weight:bold;font-size:19px;color:#222;}
</style>
<!--[if IE]>
	<style type="text/css"> #login input[type="password"]
	{color:#999;padding-bottom:2px;padding-left:5px;margin-right:5px;margin-bottom:10px;width:157px;}</style>
<![endif]-->
<!--[if !IE]><!-->
	<style type="text/css"> #login input[type="password"]
	{color:#999;padding:2px 0px;padding-left:5px;margin-right:5px;margin-bottom:5px;width:158px;}</style>
 <!--<![endif]-->
<script type="text/javascript" src="/almashines/js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.lgn').width($('#login').width());
		$("body").click(function(e) {
			if($('.targt').length && $('.open').length && $('#test').val()!="0")
		 	{
				$('.open').css('display','none');
				var currnt_did = $('.open').attr('class');
				var currnt_tid = $('.targt').attr('class');
				var new_did = currnt_did.replace(' open',''); var new_tid = currnt_tid.replace(' targt','');
				$('.open').removeClass(currnt_did).addClass(new_did );
				$('.targt').removeClass(currnt_tid).addClass(new_tid);
				$('#test').val('0');
			}
			if($('.targt').length && $('.open').length && $('#test').val()=="0")
			{$('#test').val('1');}
		});
		if ($(window).width() < 1280) { $('#size').css("width", "1280px"); }
		else { $('#size').css("width", "100%"); }
		if ($(window).height() < 500) { $('#size').css("height", "500px"); }
		else { $('#size').css("height", "100%"); }
		var int1 = setTimeOut(function(){if($('#sub2').css('display')!='none'){signup();}},3000);
	});
	$(window).resize(function () {
		if ($(window).width() < 1280) { $('#size').css("width", "1280px"); }
		else { $('#size').css("width", "100%"); }
		if ($(window).height() < 500) { $('#size').css("height", "500px"); }
		else { $('#size').css("height", "100%"); }
	});
</script>
</head>
<body style="margin:0;">
	<div style="background:url('7.jpg');background-repeat:no-repeat;background-position:bottom;background-size:100% 100%;position:fixed;z-index:-10;width:100%;height:100%;min-width:1366px;min-height:650px;display:block"></div>
	<div id="msgc" style="position:fixed;z-index:1;width:100%;top:0px;display:none;" align="center">
			<div style="padding-top:6px;">
				<span style="padding:6px 15px;background:#CC0000;color:#FFFFFF;border:1pz solid #cccccc;border-radius:3px;font-size:13px;">
					<span id="msg"></span>
					<span style="cursor:pointer;color:#CCFF00;padding-left:10px;font-size:10px" onclick="$('#msgc').slideUp();">Close</span>
				</span>
			</div>
	</div>
	<div id="size" style="" align="center">
		<table style="width:1020px;height:100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td style="color:#000;" valign="top" align="left">
					<div style="height:610px;padding-left:0%;">
							<div style="padding-top:35px;position:relative;">
								<a title="AlmaShines" href="./" style="margin-bottom:0;">
									<img src="logo.png" style="width:230px;height:auto;border:0px;" />
								</a>
<!--								<p style="font-size:12px;font-family:sans-serif;margin:0;padding-left:4px;color:#ddd;">A Community for Students and Alumnies</p>-->
								<span class="cloud" style="position:absolute;top:180px;left:165px;">Be a part of the</span>
								<span class="cloud" style="position:absolute;top:210px;left:158px;font-size:27px;">Community</span>
								<span class="cloud" style="position:absolute;top:250px;left:80px;">That matters to you the most</span>
							</div>
							<!--<div style="width:460px;margin-top:97px;margin-right:90px;">
								<div style="background:#cccccc;background-color:rgba(204,204,204,0.4);padding:10px;border-radius:8px;">
									<img src="/almashines/images/list1.png" class="infoimg" />
									<div style="vertical-align:top;">
										<h2 style="font-size:16px;margin:0;">Get Updated</h2>
										<span style="color:#000;font-size:13px">Stay in touch with your college or school. Know about events happening around your college and its people. 
										</span>
									</div>
								</div>
								<div style="margin-top:20px;background:#cccccc;background-color:rgba(204,204,204,0.4);padding:10px;border-radius:8px;">
									<img src="/almashines/images/list2.png" class="infoimg" />
									<div style="vertical-align:top;">
										<h2 style="font-size:16px;margin:0;">Get the latest</h2>
										<span style="color:#000;font-size:13px">Know what your classmates, seniors and juniors are doing.<br /> What's happening around them.
										</span>
									</div>
								</div>
							</div>-->
							<!--<h1 style="font-size:16px;margin:0;margin-top:30px;" align="center">And Much More....</h1>-->
					</div>
					<div style="display:block;">
							<ul style="list-style:none;" class="nav-list">
								<li><a href="#">About</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Help</a></li>
							</ul>
					</div>
				</td>
				
				<td valign="top" style="background-color:;color:#FFFFFF;width:410px;"  align="left">
					<div id="steps" style="padding-left:0;">
				<div style="display:block;margin-top:45px;background-color:rgb(59,50,91);border-radius:5px;">
				<?php 
				//if($a==0) {
				?>
					<!---------------Login Form--------------->
					<div style="background-color:;padding-top:18px;padding-bottom:20px;color:;" align="center">
					  <div class='lgn' align='left'>
						<input type="hidden" id="test" value="0" />
						<div style="margin-bottom:5px;">
							<span style="font-size:11px;font-weight:bold;">Sign In As</span> &nbsp;&nbsp;
							<a id="login-as" class="login-as" onclick="showmenu('login-as','dropdown-menu1')">
								<span class="btn_dropdown btn_grad" id="login-as1">Student</span><span id="btn_ar"></span>
							</a>
							<div style="position:relative;">
								<ul class="dropdown-menu" id="dropdown-menu1">
									<li onclick="$('#login-as1').html('Student');$('#loginval').val('Student');"><a>Student</a></li>
									<li onclick="$('#login-as1').html('Alumni');$('#loginval').val('Alumni');"><a>Alumni</a></li>
									<li onclick="$('#login-as1').html('Administrator');$('#loginval').val('Administrator');"><a>Administrator</a></li>
								</ul>
							</div>
						</div>
						<form id="login" action="inde.php" method="post" style="display:inline-block;">
							<input type="hidden" id="loginval" name="loginval" value="Student"/>
							<input type="text" id="email" name="email" value="Email" onfocus="textfocus('email','Email')" onblur="textblur('email','Email')"/>
							<div style="height:34px;display:inline;"><input type="text" id="password" style="display:inline-block;" name="password" value="Password" onfocus="textfocus('password','Password');this.type='password';" onblur="passblur('password','Password');"/></div>
							<a id="login-submit" class="btn_grad" onclick="$('#login').submit()">Login</a>
							<!--<input type="submit" style="margin:0;" value="Login" />-->
						</form>
						<a class="linedeco" style="font-size:11px;margin-left:2px;">Forgot Password?</a>
					   </div>
					</div>
					<!-------------------SignUp Form----------------->
					<div>
						<div class="signupform" style="color:;border-top:1px solid #aaa;" align="center">
							<div class="signcenter" style="margin-bottom:15px;" align="left">
								<h1 style="font-size:20px;margin:0;display:inline;">Sign Up !</h1>
								<div style="float:right;line-height:30px;position:relative;left:10px;">
									<a id="signup-as" class="signup-as" onclick="showmenu('signup-as','dropdown-menu2')">
										<span class="btn_dropdown btn_grad" style="" id="signup-as1">Select Who You are ? </span><span id="btn_ar"></span>
									</a>
									<div style="position:relative;">
										<ul class="dropdown-menu dropdown-menu2" id="dropdown-menu2">
											<li onclick="$('#signup-as1').html('I am a Student');$('#signupval').val('Student');$('#entry_year').show();$('#pass_year').hide();$('#designation').hide();"><a>I am a Student</a></li>
											<li onclick="$('#signup-as1').html('I am an Alumni');$('#signupval').val('Alumni');$('#entry_year').hide();$('#pass_year').show();$('#designation').hide();"><a>I am an Alumni</a></li>
											<li onclick="$('#signup-as1').html('I am an Administrator');$('#signupval').val('Administrator');$('#entry_year').hide();$('#pass_year').hide();$('#designation').show();"><a>I am an Administrator</a></li>
										</ul>
									</div>
								</div>
							</div>
							<form id="signup">
								<input type="hidden" id="signupval" name="signupval" value="Who You Are"/>
								<input type="text" id="name" name="name" value="Name" onfocus="textfocus('name','Name')" onblur="textblur('name','Name')"/>
								<input type="text" id="school" name="school" value="College or School Name" onfocus="textfocus('school','College or School Name')" onblur="textblur('school','College or School Name')"/>
								<select name="entry_year" id="entry_year"><option value="0">Year of Admission</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option></select>
								<select name="pass_year" id="pass_year" style="display:none;"><option value="0">Year of Passing Out</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option></select>
								<input type="text" id="designation" name="designation" style="display:none;margin-bottom:15px;" value="Your Designation" 
								  onfocus="textfocus('designation','Your Designation')" onblur="textblur('designation','Your Designation')"/>
								<div class="signcenter" style="display:block" align="left">
								<div id="bdaydiv" style="">
									<span style="display:block;text-align:left;margin-bottom:3px;font-weight:bold;font-size:14px;">Birthday</span>
									<table width="100%" cellspacing="0" cellpadding="0">
									<tr>
									  <td style="width:33%;">
										<select name="bday_month" id="bday_month"><option value="0" selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
									  </td>
									  <td style="width:33%;" align="center">
										<select name="bday" id="bday" style="margin:;"><option value="0" selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
									   </td>
									   <td style="width:33%;" align="right">
											<select name="bday_year" id="bday_year" style=""><option value="0">Year</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option></select>
										</td>
									</tr>
								 </table>
								</div>
									<!--<span style="display:block;margin-bottom:25px;font-size:13px;" id="signup_checkbox">
										<input type="checkbox" id="terms" name="terms" style="clear:left;"/>
										<span style="cursor:pointer" class="deselectable" onclick="$('#terms').trigger('click'); ">
										Check this box to agree our </span> 
										<a href="#">Terms of Service</a>.
									</span>-->
									<a id="sub1" class="signup-submit btn_grad" style="" onclick="$('#msgc').hide();$(this).hide();$('#sub2').fadeIn();setTimeout('signup()',500);">Submit</a><a id="sub2" class="signup-submit1" style='background-color:#aaa;display:none;'><img src="/almashines/images/loading.gif" style="width:30px;"/></a>
								</div>
								<!--<input type="submit" style="margin:0;" value="Login" />-->
							</form>
						</div>
					<!-------------------SignUp Form----------------->
					<?php 
					//} else { include_once("veralma/verifysignup.php"); } 
					?>
					</div>
				  </div>
				</td>
			</tr>
		</table>
	</div>
	<div id="popup" style="display:none;" align="center">
		<div align="center" style="background-color:#dbdbdb;padding:8px 20px;width:170px;border:5px solid #777;border-radius:5px;position:fixed;z-index:2;top:39%;left:43%;">
			<img src="/almashines/images/preloader.gif" style='height:35px;'/><br />
			<span class="deselectable">Processing...</span>
		</div>
		<div id="cover" style="position:fixed;z-index:1;top:0;left:0;height:100%;width:100%;background:#111;opacity:0.7;filter:Alpha(opacity=70);display:block;"></div>
	</div>
	<script type="text/javascript">
		function textfocus(id,txt){if($('#'+id).val()== txt) {$('#'+id).val('').css('color','#333');}}
		function textblur(id,txt) {if($('#'+id).val()== '') {$('#'+id).val(txt).css('color','#999');}}
		function passblur(id,txt) {if($('#'+id).val()== '') {$('#'+id).prop('type', 'text');$('#'+id).val(txt).css('color','#999');}}
		function showmenu(tid,did) 
		{ 
			var currnt_did = $('#'+did).attr('class');
			var currnt_tid = $('#'+tid).attr('class');
			if($('#'+did).css('display')=='none')
			{	$('#'+did).removeClass(currnt_did).addClass( currnt_did+" open" );
				$('#'+tid).removeClass(currnt_tid).addClass( currnt_tid+" targt" );
				$('#'+did).css('display','block');
			}
			else
			{
				var new_did = currnt_did.replace(' open',''); var new_tid = currnt_tid.replace(' targt','');
				$('#'+did).removeClass(currnt_did).addClass(new_did );
				$('#'+tid).removeClass(currnt_tid).addClass(new_tid);
				$('#'+did).css('display','none');
				$('#test').val('0');
			}
		}
		$("select").change(function(){
			$(this).css('color','#555');
		});
		$('#terms').click(function(){
			if($('#terms').is(':checked')){$('#chk').val('1');}
			else{$('#chk').val('0');}
		});
		$('#terms_trigger').click(function()
		{
			var checkbx = document.getElementById('terms');
			if(checkbx.checked){checkbx.checked=false; $('#chk').val('0');}
			else{checkbx.checked=true; $('#chk').val('1');}
		});
	</script>
	<script type="text/javascript" src="/almashines/js/strtform.js"></script>
</body>
</html>
