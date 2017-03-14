<script type="text/javascript" src="script.js"></script>

<?php

require 'function.php';
require 'components.php';

/*mitmel
real*/

//tagasi koju
home();
menu($menu_begin, $menu_arr, $menu_end);
echo "<div></div>";

//näitame praegust aega
aeg();

GetVisitorIp();

counter();

?>