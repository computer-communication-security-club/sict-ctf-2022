import socket
import time

# serveriin ip portiig zaah
host = 'localhost'
port = 10001
# serverees heden byte medeelel huleej avahaa todorhoiloh
size = 1024
# socket objectiig uusgeh "s" huvisagchid hadgalah
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
# servertei holbolt uusgelt
s.connect((host, port))
# serverees irj bui messageiig huleej avah
answer = s.recv(size)
# serverees irsen msgnees zuwhun buhel toog tasalj avah
num = [int(x) for x in answer.split() if x.isdigit()] 
# serverees irsen code byte helberiinh baidag tul utf-8 format luu shiljuulj hevleh
print("Irsen msg :\n   {\n"+answer.decode()+"\n   }")
print("Irsen msgnees buh int utgiig salgasan baidal : "+ str(num))
result = (num[1] * (num[1] + 1) // 2)
print("Bodson bodoltni hariu : " + str(result))
# herew 1 secees udval ymar hariu irhiig doorh murnii #-g hasaad ajilluulad uzeerei!
# time.sleep(1) 
# serverluu bodson hariugaa .encode function ashiglan byte ruu shiljuulj yvuulah
s.send(str(result).encode())
# ilgeesen bodoltiinha hariug n huleej avah
print(s.recv(size).decode())
# holboltiig salgah
s.close()
