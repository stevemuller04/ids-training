while :; do
	sleep $(( $RANDOM % 30 + 2 ))s

	cat | expect <<- EOF

	set timeout -1
	spawn nc ftp.sky.net 21

	expect "220 Welcome Alpine ftp server *"

	send -- "USER lynx\n"
	expect "331 Please specify the password."

	send -- "PASS lucid\n"
	expect "230 Login successful."

	send -- "MKD hi\n"
	expect "257 * created"

	send -- "CWD hi\n"
	expect "250 Directory successfully changed."

	send -- "LIST\n"
	expect "425 Use PORT or PASV first."

	send -- "CWD ..\n"
	expect "250 Directory successfully changed."

	send -- "RMD hi\n"
	expect "250 Remove directory operation successful."

	send -- "QUIT\n"
	expect "221 Goodbye."

	send -- ""
	expect eof

	EOF

done
