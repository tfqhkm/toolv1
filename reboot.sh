clear
echo "--WELCOME TO TAUFIQ's PROGRAMES--"
echo "[-MAY YOUR DAY IS BETTER-]"
echo "--++ [PROGRAM BY TAUFIQ HAKIM] ++--"

echo "=[SELECT YOUR MENU!]="

echo "[1] POWER OFF"
echo "[2] REBOOT/RESTART"

read -p "[?] CHOOSE YOUR MENU [1-2]:" CHOOSE

case $pilih in 
1)
echo "[*] YOUR PHONE WILL POWER OFF IN 5 SECOND PLEASE WAIT A SECOND"
sleep 5
/system/bin/reboot -p
;;
2) 
echo "[*] YOUR PHONE WILL RESTART IN 5 SECOND PLEASE WAIT A SECOND"
sleep 5
/system/bin/reboot
;;
*)
echo "[*] YOU,VE HAS ENTER A WRONG COMMAND PLEASE TRY AGAIN"
sleep 2
source $0
;;
esac
