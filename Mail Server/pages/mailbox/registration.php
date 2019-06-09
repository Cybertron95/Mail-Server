<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javascript" src="validation.js"></script>
	</head>
	<body>
		<div id="main">
			<form method="" action="">
			<div class="row" style="color:blue;font-size:20px;font-style:italic;text-align:center;height:6%;">
			Registration Form
			</div>
			<div class="row">
				<div class="col">Enter your first name</div>
				<div class="col1">:</div>
				<div class="col2"><input type="text" onBlur="chkBlnk('fn','error')" onKeyPress="return chkNum(event,'error')" name="fn" id="fn" title="first name" placeholder="enter your first name" maxlength="10" required/></div>
				<div class="col3" id="error"></div>
			</div>
			<div class="row">
				<div class="col">Enter your last name</div>
				<div class="col1">:</div>
				<div class="col2"><input type="text" name="ln" onBlur="chkBlnk('ln','error1')" onKeyPress="return chkNum(event,'error1')" id="ln" placeholder="enter your last name"title="last name"  maxlength="10" required/></div>
				<div class="col3" id="error1"></div>
			</div>
			<div class="row">
				<div class="col">Enter your Password</div>
				<div class="col1">:</div>
				<div class="col2"><input type="password" onBlur="chkPass()" name="pwd" id="pwd" placeholder="Your password"  rquired/></div>
				<div class="col3" id="error2"></div>
			</div>
			<div class="row">
				<div class="col">Enter your Conf Pass</div>
				<div class="col1">:</div>
				<div class="col2"><input type="password" onBlur="chkCpass()" name="cpwd" id="cpwd" placeholder="Your confirm password"  rquired/></div>
				<div class="col3" id="error3"></div>
			</div>
			<div class="row">
				<div class="col">Enter your Mobile</div>
				<div class="col1">:</div>
				<div class="col2"><input type="number" pattern="[0-9]*" name="pwd" id="pwd" placeholder="Your mobile"  rquired/></div>
				<div class="col3"></div>
			</div>
			<div class="row">
				<div class="col">Enter your Email</div>
				<div class="col1">:</div>
				<div class="col2"><input type="email"  name="eid" id="eid" onBlur="chkEid()" placeholder="abc@gmail.com"  required/></div>
				<div class="col3" id="error5"></div>
			</div>
			<div class="row">
				<div class="col">Select Your gender</div>
				<div class="col1">:</div>
				<div class="col2">
				Male<input type="radio"  name="gen" id="eid" value="m" checked="checked" />
				Female<input type="radio"  name="gen" id="eid" value="f"  ></div>
				<div class="col3"></div>
			</div>
			<div class="row">
				<div class="col">Choose Your hobbies</div>
				<div class="col1">:</div>
				<div class="col2">
				Singing<input type="checkbox"  name="cheklist[]" value="Singing"  rquired/>
				Reading<input type="checkbox"  name="cheklist[]"  value="Reading"  rquired/></div>
				<div class="col3"></div>
			</div>
			<div class="row" style="height:11%;">
				<div class="col">Enter Your address</div>
				<div class="col1">:</div>
				<div class="col2" style="width:38%;">
				<textarea></textarea></div>
				<div class="col3" style="width:25%;"></div>
			</div>
			<div class="row">
				<div class="col">Upload Your Pics</div>
				<div class="col1">:</div>
				<div class="col2" style="width:45%;">
				<input type="file" name="f"/></div>
				<div class="col3" style="width:17%;"></div>
			</div>
			<div class="row">
				<div class="col">Select Your Country</div>
				<div class="col1">:</div>
				<div class="col2">
					<select onFocus="chkCity()" name="cont" id="cont">
						<option value="" selected="selected" disabled="disabled">Your country</option>
						<option value="india">India</option>
						<option value="pakistan">Pakistan</option>
						<option value="nepal">Nepal</option>
					</select>
				</div>
				<div class="col3" id="error10"></div>
			</div>
			<div class="row">
				<div class="col">Select Your DOB</div>
				<div class="col1">:</div>
				<div class="col2" style="width:40%;">
					<select name="city" id="city">
						<option value="" selected="selected" disabled="disabled">Year</option>
					
					</select>
					<select name="city" id="city">
						<option value="" selected="selected" disabled="disabled">Month</option>
					</select>
					<select name="city" id="city">
						<option value="" selected="selected" disabled="disabled">Date</option>
					</select>
				</div>
				<div class="col3" style="width:23%;"></div>
			</div>
			<div class="row">
				<input type="submit" value="Register" name="send"/>
				<input type="reset" value="Reset"/>
				<input type="button" value="Button" name="button"/>
			</div>
			</form>
		</div>
	</body>
</html>
