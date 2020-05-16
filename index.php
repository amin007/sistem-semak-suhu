<?php
#--------------------------------------------------------------------------------------------------
	function panggilLink()
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		$link = array('index/utama/',
			'index/bulan/',
			'index/suhu/',
			'user/baru/',
			'user/ubah/',
			'user/buang/'
		);

		foreach($link as $url):
			echo '<hr><a target="_blank" href="' . URL . '/' . $url . '">'
			. $url . '</a>';
		endforeach;
		#
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
# fungsi global
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
	function versiphp()
	{
		//phpinfo();
		//echo PHPVERSION() . '<br>';
		//echo PHP_VERSION . '<br>';
		//echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
		//echo '$_SERVER=><pre>'; print_r($_SERVER); echo '</pre>';
		echo '<h1>' . $_SERVER['SCRIPT_NAME'] . '</h1>';
		echo '<h1>' . $_SERVER['PATH_INFO'] . '</h1>';
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
###################################################################################################
#--------------------------------------------------------------------------------------------------
if (isset($_SERVER['PATH_INFO'])):
	$cari =  explode('/',$_SERVER['PATH_INFO']);
	/*semakPembolehubah($cari[1],'pilih');
	if($cari[1] == 'json'):
		$pilih = isset($cari[2]) ? $cari[2] : null;
		binaJson($data,$pilih);
	else:
		panggilDataTable($data,$cari[1]);# panggil fungsi
	endif;//*/
else:
	panggilLink();# panggil fungsi
endif;
#--------------------------------------------------------------------------------------------------




