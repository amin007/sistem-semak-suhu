<?php
#--------------------------------------------------------------------------------------------------
	function debugValue($senarai,$jadual,$p='0')
	{
		echo '<pre>$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		echo '</pre><hr>';//*/
		//debugValue($ujian,'ujian',0);
		//$this->debugValue($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
#--------------------------------------------------------------------------------------------------
	function debugServer()
	{
		//phpinfo();
		//debugValue($_SERVER['PATH_INFO'],'server');
		debugValue($_SERVER['SCRIPT_NAME'],'server');
		//debugValue($_SERVER,'server');
	}
#--------------------------------------------------------------------------------------------------
$url = '<hr>' . $_SERVER['SCRIPT_NAME'];

echo "
$url/index/utama
$url/index/bulan/
$url/index/suhu
$url/user/baru
$url/user/ubah
$url/user/buang
";


