version=$(( $RANDOM % 15 + 80 ))
getter=(curl -k -s -H "User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:$version.0) Gecko/20100101 Firefox/$version.0" -H "sky.net")

while :; do
	sleep $(( $RANDOM % 30 + 2 ))s

	"${getter[@]}" "https://www.sky.net/" | grep -oE "href=\"([^\"]*)\"" | cut -d'"' -f2 | xargs -i "${getter[@]}" "https://www.sky.net/{}"
done
