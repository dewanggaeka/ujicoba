<?php
$tmpdir = sys_get_temp_dir();
$file = tempnam($tmpdir, 'ctk');
$handle = fopen($file, 'w');
$condensed = Chr(27) . Chr(33) . Chr(4);
$bold1 = Chr(27) . Chr(69);
$bold0 = Chr(27) . Chr(70);
$initialized = chr(27).chr(64);
$condensed1 = chr(15);
$condensed0 = chr(18);
$Data = $initialized;
$Data .= $condensed1;
$Data .= "----------------------------\n";
?>
<h3><b>
	<?php
$Data .= "         JNE TARUNA         \n";
?>
</b></h3>
<?php
$Data .= "----------------------------\n";
$Data .= "Selamat datang,\n";
$Data .= "--------------------------\n";
fwrite($handle, $Data);
fclose($handle);
copy($file, "D://file.txt"); # Lakukan cetak
unlink($file);

print $Data;
?>