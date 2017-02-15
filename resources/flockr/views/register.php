<?php
    include 'views/header.php';
?>
<form action="?p=doregister" method="post">
    <div>
        <label for="name">Username:</label>
        <input type="text" name="name" id="name" />
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" />
    </div>
    <div>
        <label for="password2">Again:</label>
        <input type="password" name="password2" id="password2" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" />
    </div>
    <div>
        <label for="firstname">First name:</label>
        <input type="text" name="firstname" id="firstname" />
    </div>
    <div>
        <label for="lastname">Last name:</label>
        <input type="text" name="lastname" id="lastname" />
    </div>
    <input type="submit" value="Create account" />
</form>
<?php
    include 'views/footer.php';
?>
