import time
import socket
import threading
from random import randint


a = " Calculate me faster than 1 second \n"
incorrect = "\nYou calculated very wrong!"
time_msg = "\nTime is out!"
time_correct = "\nIt is correct answer but you are too slow, faster!"
str_err = "\nString is prohibited"

num1 = randint(100_000_000, 200_000_000)
randsum = num1 * (num1 + 1) // 2
print(randsum)

result = num1
size = 1024
HEADER = 64
ADDR = ('0.0.0.0', 10001)
FORMAT = 'utf-8'
server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind(ADDR)


flag = "You win \nflag: sictCTF" + "{" +"m4th3m4t!c4l_g3n!U5_OR_f457_c0mp!l3r?}"


def handle_client(conn, addr):
    conn.settimeout(10)
    start = time.time()
    try:
        data = conn.recv(size).decode("utf-8")
        end = time.time()
        # print(end-start)
        if end - start < 1:
            if int(data) == randsum:
                conn.send(flag.encode("utf-8"))
            else:
                conn.send(incorrect.encode("utf-8"))
        else:
            if int(data) == randsum:
                conn.send(time_correct.encode("utf-8"))
            else:
                conn.send(incorrect.encode("utf-8"))
    except socket.timeout:
        conn.send(time_msg.encode("utf-8"))
    except:
        conn.send(str_err.encode("utf-8"))

    conn.close()


def start():
    server.listen()
    print("Server is listening on")

    conn, addr = server.accept()
    conn.send(a.encode("utf-8"))
    conn.send(str(result).encode())
    conn.send(''.encode())
    thread = threading.Thread(target=handle_client, args=(conn, addr))
    thread.start()

print("STARTING")
start()
