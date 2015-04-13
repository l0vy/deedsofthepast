<?php

$rec_limit = 10;

include('conn.php');

/* Get total number of records */
$sql = "SELECT count(ID) FROM city ";
$retval = mysqli_query($conn,$sql );

$row = mysqli_fetch_array($retval);
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT ID, District, Population, CountryCode ".
       "FROM city ".
       "LIMIT $offset, $rec_limit";

$retval = mysqli_query($conn,$sql );

while($row = mysqlI_fetch_array($retval))
{
    echo " ID :${row['ID']}  <br> ".
         "NAME : {$row['District']} <br> ".
         "Country Code : {$row['CountryCode']} <br> ".
        "Population : {$row['Population']} <br> ".
         "--------------------------------<br>";
} 

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href= paging.php?page=$last\>Last 10 Records</a> |";
   echo "<a href= paging.php?page=$page\>Next 10 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href= paging.php?page=$page\>Next 10 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
?>