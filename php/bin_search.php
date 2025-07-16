#! /usr/bin/php
<?php
/**
 * $ary : array
 * $val : String;
 * @return string;
 */
function bin_search($ary, $val)
{
    $left = 0;
	$right = count($ary);
	while ($left < $right) {
		$middle = $left + (($right - $left) >> 1);
		if ($ary[$middle] > $val) {
			$right = $middle;
		} else if ($ary[$middle] < $val) {
			$left = $middle + 1;
		} else {
			return $middle;
		}
	}
	return -1;
}

function test()
{

	$tmp = range(1,30);
	$val = 30;

	echo "$val : ", bin_search($tmp, $val), "\n";
	

}
test();
