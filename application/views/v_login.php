<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Area</title>
</head>

<body>
<form action="<?php echo base_url('login/aksi_login');?>" method="post">
	<table>
    	<tr>
        	<td>Username</td>
            <td><input type="text" name="username" /></td>
        </tr>
    	<tr>
        	<td>Password</td>
            <td><input type="password" name="password" /></td>
        </tr>
    	<tr>
        	<td></td>
            <td><input type="submit" value="login" /></td>
        </tr>
    </table>
</form>
</body>
</html>