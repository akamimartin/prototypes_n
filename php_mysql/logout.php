<?php

session_destroy() // destroy all session variables, forgetting them
 

if(isset($_SESSION[username]))
unset($_SESSION[username]);
?> 
