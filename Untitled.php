<?php
$rmote_file_url = ''；
$local_file = 'w.zip';

$copy = copy( $remote_file_url, $local_file );
if( !$copy )

{   echo "<font color=red>OH NO NO NO</FONT>";}   
else
{   echo "<font color=green>OH YES YES YES</font>";}
