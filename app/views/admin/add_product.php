<?php include_once 'app/views/admin/header_admin.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">
        <!-- Phần content của trang addUser -->
        <h1>Add User</h1>
        <form method="post" action="/php/admin/user/save">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>