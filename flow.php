<?php

	$language = 'X';

?>
<html>
   <head>
      <title>Flow</title>
   </head>
   <body>

         <table width="400" border="2" cellspacing="0" cellpadding="2">
            <tr>
               <td><?php echo $language=='PT' ? 'usuário' : 'User' ?></td>
               <td><input type="text" name="username" /></td>
            </tr>
            <tr>
               <td><?php if($language=='PT'){echo 'Senha';}else{echo 'Password';}?></td>
               <td><input type="password" name="password" /></td>
            </tr>
            <tr>
               <td colspan="2">
                  <center><input type="submit" value="Login" /></center>
               </td>
            </tr>
         </table>
      
   </body>
</html>


