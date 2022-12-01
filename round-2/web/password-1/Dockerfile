FROM python:3.10-slim-bullseye
WORKDIR /app
COPY app.py app.py
COPY server.py server.py
COPY requirements.txt requirements.txt
RUN pip3 install -r requirements.txt
CMD [ "python3","app.py"]
EXPOSE 3000
