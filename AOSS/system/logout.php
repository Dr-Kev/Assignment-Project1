<?php

session_start();//session is a way to store information (in variables) to be used across multiple pages.
session_destroy();
echo"<script>window.open('../welcomePage/webHome.php','_self')</script>";//use for the redirection to some page

?>