<?php
function isAdmin()
{
    // Check if the user is logged in and has the role "admin"
    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
        return true;
    }

    return false;
}
