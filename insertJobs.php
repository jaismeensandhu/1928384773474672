<html>
<body>
<script type="text/javascript">
function chkmail(elementvalue)
	{
		(var m=/^[a-z0-9._]+@[a-z]+\.[a-z]{2,3}$/+)||(var m=/^[a-z0-9._]+@[a-z]+\.[a-z]+\.[a-z]{2}$/);//Regular expression - Regex
		//var m=/^[a-z0-9._]+@[a-z]+\.[a-z]+\.[a-z]{2}$/;
		return m.test(elementvalue);
	}
	
	function abc()
	{   
	    if(document.getElementById("resume").value=="")
		{
			alert("Please upload your resume");
			return false;
		}
        else
		if(document.getElementById("name").value=="")
		{
			alert("Please enter your Full Name");
			return false;
		}
		else
		if((document.getElementById("contact").value=="") && (document.getElementById("email").value==""))
		{
			alert("Please enter atleast one of your contact details either Email or contact Number");
			return false;
		}
		else
		if(document.getElementById("country").value=="")
		{
			alert("Please enter your country");
			return false;
		}
		else
        if(document.getElementById("email").value!="")
        {
            if(!chkmail(document.getElementById("email").value))
            {
                alert("Please provide a valid e-mail address");
                document.getElementById("email").focus();
                return false;
            }
        }
		else
		{
			return true;
		}
		
		
		
	}
</script>
<h1><center>Apply Job</center></h1>
<form action="insert1.php" method="get" enctype="multipart/form-data"><center><table>
    <tr>
        <td>Upload Resume</td>
        <td><input type="file" name="resume" id="resume" /></td>
    </tr>
    <tr>
        <td>Full Name</td>
        <td><input type="text" name="name" id="name"/></td>
    </tr>
    <tr>
        <td>Email ID</td>
        <td><input type="text" name="email" id="email" onClick="return chkmail();"/></td>
    </tr>
    <tr>
        <td>Contact Number</td>
        <td><input type="text" name="contact" id="contact"/></td>
    </tr>
    </tr>
        <tr><td>Country</td>
        <td><input type="text" name="country" id="country"/></td>
    </tr>
    <tr>
        <td>Expected Salary</td>
        <td><input type="text" name="expectedSalary" id="expectedSalary"/></td>
    </tr>
    <tr>
        <td>Experience</td>
        <td><input type="text" name="experience" id="experience"/></td>
    <tr>
        <td>Cover Letter</td>
        <td><input type="textarea" name="coverLetter" id="coverLetter"/></td>
    </tr>
    <tr>
    <td><input type="submit" value="Submit" onClick="return abc();"/>
    <input type="reset"/>
    </td>
    </tr></table></center>
    </form>
</body>
</html>
