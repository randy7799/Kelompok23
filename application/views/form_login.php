<h3>Login </h3>
<?php echo validation_errors(); ?>
<?php
echo form_open('auth/validasi');
 ?>
 <table class="table table-bordered">

 <tr>
   <td>username</td>
   <td><input class="form-control" type="text" name="nama_user"></td>
 </tr>

 <tr>
   <td>password</td>
   <td><input class="form-control" type="password" name="password_user"></td>
 </tr>
 <tr>
   <td colspan="2"><button type="submit" name="submit" class="btn btn-default">Login</button></td>
 </tr>

 </table>
 </form>
