from pwn import xor
cipher  = b"\x10\n\x107\x0f\x01\x04\x18\x1bC1\x13d1<\x10\x063\x7f'\x1dR\x05\x14!+4{\x1e"
flagFormat = b'sictCTF'

key = xor(cipher,flagFormat)
print(key)

key = b'ccsCLUB'
flag  = xor(key,cipher)
print(flag)

# print(''.join(chr(c ^ key) for c in input_str))