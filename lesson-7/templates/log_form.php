<form method="post" action="../login/check.php" ENCTYPE="multipart/form-data">
    <div class="reg">

        <div><label for="log"><span class=bold>*</span>Л о г и н</label></div>
        <div><input id="log" type="text" name="author_login"
                    value="<? if (isset($_POST['author_login']))
                        echo $_POST['author_login']; ?>" required></div>

        <div><label for="pas"><span class=bold>*</span>П а р о л ь</label></div>
        <div><input id="pas" type="password" name="author_pass" value="" required></div>

        <div><input type="submit" value="Войти"></div>

        <div><a href="/reg/" class="reg-word">> Регистрация нового пользователя <</a>

        </div>
</form>