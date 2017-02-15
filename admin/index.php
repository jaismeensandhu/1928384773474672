<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mentor Admin Portal</title>
    <link href="style.css" rel="stylesheet"/>
  </head>
  <body>
    <div>
      <h1 style="margin-top:2%;color:#ffe;">
        <center>
          <b>WELCOME to MENTOR Jobs</b>
        </center>
      </h1>
    </div>

    <div style="margin-top:50px; ">
      <center>
        <form method="post" action="logininsert.php" name="form">
          <table id="utable" style="margin-top:100px;border=1px;">
            <tr>
              <td>Admin Name:</td>
              <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
              <td> Admin Password:</td>
              <td><input type="password" name="password" id="password"/></td>
            </tr>
            <tr>
              <td colspan="2"><center><button type="submit" name="submit" id="submit" style="font-size:1em;color:grey"><b>Submit</b></button></center></td>
            </tr>
          </table>
        </form>
      </center>
    </div>
  </body>
</html>