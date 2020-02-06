<form method="post" action="check_registration.php" ENCTYPE="multipart/form-data">

    <div class="reg">
        <div><label for="authorName">* Имя автора: </label></div>
        <div><input id="authorName" type="text" name="author_name"
                    value="<?php if (isset($_POST['author_name']))
                        echo $_POST['author_name']; ?>"
                    maxlength="50" required></div>

        <div><label for="authorFam">* Фамилия автора: </label></div>
        <div><input id="authorFam" type="text" name="author_family"
                    value="<?php if (isset($_POST['author_family']))
                        echo $_POST['author_family']; ?>"
                    maxlength="50" required></div>

        <div><label for="email">* email: </label></div>
        <div><input id="email" type="email" name="author_email" maxlength="50" required
                    value="<?php if (isset($_POST['author_email']))
                        echo $_POST['author_email']; ?>"></div>

        <div><label for="log">* Л о г и н</label></div>
        <div><input id="log" type="text" name="author_login" required
                    value="<?php if (isset($_POST['author_login']))
                        echo $_POST['author_login']; ?>"></div>

        <div><label for="pas">* П а р о л ь</label></div>
        <div><input id="pas" type="password" name="author_pass" value="" required></div>

        <div><input type="submit" value="Сохранить"></div>

    </div>

</form>