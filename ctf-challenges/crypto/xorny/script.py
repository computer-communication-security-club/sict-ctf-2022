from pwn import xor

flag = b"fakeFlag"
key = b"fakeKey"
cipher = xor(flag,key)
print(cipher)