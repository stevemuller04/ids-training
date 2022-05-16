FROM alpine

RUN echo "@testing https://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories 
RUN apk add --no-cache bash curl netcat-openbsd expect hping3@testing
RUN touch /init.sh

ENTRYPOINT ["/bin/bash"]
CMD ["/init.sh"]
