randsleep() {
	sleep $(( RANDOM % 150 + 30 ))s
}

getter=(curl -k -s -H "User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:11.0) Gecko/20100101 Firefox/11.0" -H "sky.net")

while :; do
	randsleep
	"${getter[@]}" "https://www.sky.net/" --cookie "is_logged_in=() { :;};" >/dev/null
	randsleep
	"${getter[@]}" "https://www.sky.net/.htpasswd" >/dev/null
	randsleep
	"${getter[@]}" "https://www.sky.net/../../../../../../Windows/system32/calc.exe" >/dev/null
	randsleep
	"${getter[@]}" "https://www.sky.net/log4jAdmin.jsp?SESSID=2sa4f3f24f2432uj243g" >/dev/null
done
