FROM alpine

RUN apk add --update --no-cache socat

EXPOSE 12345

ENTRYPOINT ["socat", "TCP-LISTEN:12345,fork", "EXEC:/bin/sh,stderr,pty,echo=0"]
