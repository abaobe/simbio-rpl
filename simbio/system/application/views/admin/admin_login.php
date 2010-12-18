<br/>
<br/>
<br/>

<h2>Login</h2>

Anda harus login terlebih dahulu untuk mengakses panel administrasi SIMBIO.

<br/>
<br/>

<style type="text/css">

    td, table {border: none; font-size: 13px}
    input {
        border-width: 1px;
	border-style: solid;
	border-color: #969BA5;
        font-size: 13px
    }

</style>

<?php echo form_open('admin/login'); ?>

<table>
    <tr>
        <td></td>
        <td colspan="2" style="color: red"><?php if(isset($error)) echo $error; ?></td>
    </tr>
    <tr>
        <td rowspan="3"><img src="images/login-welcome.gif" alt=""/></td>
        <td width="100">Username</td>
        <td><input type="text" name="admin_username" size="30" /></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="admin_password" size="30" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="   Login   " /></td>
    </tr>

</table>

<?php echo form_close(); ?>

<br/>
<br/>
<br/>
<br/>
<br/>