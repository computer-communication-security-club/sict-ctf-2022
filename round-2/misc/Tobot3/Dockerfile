FROM python:3.8-slim-buster


WORKDIR /tobot

COPY requirements.txt requirements.txt

RUN pip3 install -r requirements.txt

COPY . .

CMD [ "python", "./bot.py" ]

EXPOSE 9001