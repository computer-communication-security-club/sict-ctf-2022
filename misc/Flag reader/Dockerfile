FROM ubuntu:18.04 

ENV USER ctf
WORKDIR /home/$USER

RUN groupadd -r ctf && useradd -r -g ctf ctf

RUN apt-get update && apt-get install -yqq socat
RUN apt-get install -yqq python3

COPY flag /flag
COPY fakeflag /home/$USER/fakeflag
COPY src/serv.py .
USER ctf

CMD socat TCP-L:12001,fork,reuseaddr EXEC:"python3 serv.py",pty,ctty,stderr,echo=0
