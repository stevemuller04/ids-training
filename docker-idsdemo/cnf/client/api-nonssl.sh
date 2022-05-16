getter=(curl -k -s -H "User-Agent: api_tester/v0.77.8" -H "Host: api.sky.net")
endpoints=(users wiki robots terminate)

while :; do
	sleep $(( $RANDOM % 30 + 2 ))s

	i=$(( $RANDOM % 4 ))
	"${getter[@]}" "http://api.sky.net:8080/?r=${endpoints[$i]}" >/dev/null
done
