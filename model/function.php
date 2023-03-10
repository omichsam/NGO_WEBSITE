<?php
function PageName()
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

$current_page = PageName();




// Get current page file name
$page = basename($_SERVER["PHP_SELF"]);


function showActive($Activepage)
{
    $page = basename($_SERVER["PHP_SELF"]);
    echo ($page == $Activepage) ? 'class="active nav-item nav-link "' : 'class=" nav-item nav-link "';
}
