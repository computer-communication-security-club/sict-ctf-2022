FROM ubuntu:20.04 

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install openssh-server -y 
RUN groupadd -r ctf && useradd -r -g ctf -s /bin/bash -u 1000 ctf

RUN echo "sictCTF{N1ce_w0rk_u_pwn3d_m4chine}" > /root/flag.txt
ADD hogyoku /usr/bin/hogyoku

RUN chmod u+s /usr/bin/hogyoku
RUN echo "Port 22222" >> /etc/ssh/sshd_config
RUN mkhomedir_helper ctf
RUN echo 'ctf:s3cret_p4ss' | chpasswd
RUN service ssh start 

COPY banner.txt /home/ctf/banner.txt

EXPOSE 22222

CMD ["/usr/sbin/sshd", "-D"]

