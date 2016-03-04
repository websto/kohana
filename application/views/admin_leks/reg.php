<a style="text-decoration:none; font-size:18px; margin:20px; font-weight:bold;" href="<?php echo URL::base(); ?>">На сайт</a>
<style>
body { background:#666 url(/media/images/adm.jpg) no-repeat top;}
</style>
<h2 style="margin-top: 5px; color:#ccc" align="center">Введите логин и пароль</h2><br/>
<?php if(!empty($message)) echo '<h3 align="center" style="color:#ccc;">'.$message.'</h3>'; ?>
<table width="600px" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:0 auto">
    <tr>
        <td valign="top" align="center">		
        <form method="post" name="form">
            <br>
            <input style="width:150px;" name="username" type="text" maxlength="25">
            <br>
            <input style="width:150px;" name="password" type="password" maxlength="25">
            <br><br><input type="submit" value="Авторизация">
        </form>		
        </td>
    </tr>
</table>