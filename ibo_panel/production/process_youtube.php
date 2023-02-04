<?php include "config.php";
mysql_query("UPDATE `distributor` SET `youtube` = 'y' WHERE `distributor`.`d_id` = $_SESSION[d_id];");
echo "<script>location.href='https://www.youtube.com/channel/UCZo4qg937UeSpre36ATiMeA?view_as=subscriber';</script>";
?>