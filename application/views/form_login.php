<?php
echo form_open('auth/login');
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
   <td colspan="2"><button type="submit" name="submit" class="">Login</button></td>
 </tr>

 </table>
 </form>
