<?php
$datetime1 = date_create('2007-1-11');
$datetime2 = date_create('2009-12-31');
$interval = date_diff($datetime1, $datetime2);
echo "�� ������� �� 1.11.2007 �� 31.12.2009 �������� " . $interval->format('%Y years, %m months, %d days, %H hours, %i minutes, %s seconds');


