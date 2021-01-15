<html>
   <head>
      <title>Login System</title>
   </head>
   <body>
   <?php if ( $_GET['bad'] == 1 ) { ?>
   <font color="brown">Error unknown<br/></font>
   <?php } ?>
   <?php if ( $_GET['bad'] == 2 ) { ?>
   <font color="red">Bad login or password, please try again<br/></font>
   <?php } ?>
   <?php if ( $_GET['bad'] == 3 ) { ?>
   <font color="red">Access denied, GTFOHMF!<br/></font>
   <?php } ?>
   <?php if ( $_GET['good'] == 1 ) { ?>
   <font color="red">Volte sempre!<br/></font>
   <?php } ?>
      <form action="login.php" method="post">
         <table width="400" border="2" cellspacing="0" cellpadding="2">
            <tr>
               <td>Username:</td>
               <td><input type="text" name="user" /></td>
            </tr>
            <tr>
               <td>Password:</td>
               <td><input type="password" name="password" /></td>
            </tr>
            <tr>
               <td colspan="2">
                  <center><input type="submit" value="Login" /></center>
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>