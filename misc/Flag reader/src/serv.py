#!/usr/bin/env python3 

import os 

def run():
  flag, chk = readFlag()
  True if chk else print('[!] Error, Please contact admin ')
  
  while chk:
    print('Please, input filename (example: ~/fakeflag)')
    fname, fchk = filterFName(input('> '))
    if fchk:
      fpath = os.path.expanduser(fname)
      print(f'Trying open file: {fpath}')
      try: 
        print(open(fpath, 'r').read())
      except:
        print('[!] Could not open file')
    else:
      print('[i] Hacking detected, please stop it!')

def filterFName(filename):
  try:
    if filename[0] == '/':
      return '', False
  except:
    return '', False
  elif '.' in filename:
    return '', False
  return filename, True

def readFlag():
  try: 
    return open('/flag', 'r'), True 
  except:
    return '', False

if __name__ == '__main__':
  run()
