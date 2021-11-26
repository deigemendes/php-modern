<?php
$file = fopen("/var/log/openvpn/openvpn-status-proluminas-sp.log", "r");
$dados = ""; 
$contador = 0;
$chavesexcessao= array('sheila.moreno');

while (!feof($file)) {
        $line = fgets($file);
        if (strpos($line, "10.70.70") !== false) {
                $dados[$contador] = explode(",", $line);
                $contador++;
        }
}
fclose($file);

$outputip = fopen("/tmp/ipsbloqueadosvpn", "w");

foreach($dados as $a) {
        if(in_array($a[1], $chavesexcessao)) {
                fwrite($outputip,"$a[0]\n");
                shell_exec("/sbin/iptables -I FORWARD -s $a[0] -j DROP");
        }

}
fclose($outputip);
?>