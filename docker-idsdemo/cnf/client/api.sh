getter=(curl -k -s -H "User-Agent: api_tester/v0.93.1" -H "sky.net")
endpoints=(users wiki robots terminate)

while :; do
	sleep $(( $RANDOM % 30 + 2 ))s

	i=$(( $RANDOM % 4 ))
	"${getter[@]}" "https://www.sky.net/api/?r=${endpoints[$i]}" >/dev/null
done
