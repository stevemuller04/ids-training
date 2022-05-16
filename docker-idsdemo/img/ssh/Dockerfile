FROM alpine

RUN apk add --no-cache openssh \
	&& ssh-keygen -A \
	&& mkdir /root/.ssh \
	&& chmod 0700 /root/.ssh \
	&& echo "root:root" | chpasswd \
	&& ln -s /etc/ssh/ssh_host_ed25519_key.pub /root/.ssh/authorized_keys

EXPOSE 22

CMD ["/usr/sbin/sshd", "-D", "-e"]
