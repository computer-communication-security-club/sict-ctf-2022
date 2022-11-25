import discord
from dotenv import load_dotenv
import requests
import json
import random
import time
import os

load_dotenv('.env')
intents = discord.Intents.default()
client = discord.Client(intents=intents)
endgame = 0

async def on_ready():
    print('we have logged in as {0.user}'.format(client))
@client.event
async def on_member_join(member):
    await member.create_dm()
    await member.dm_channel.send(
        f'Hi {member.name}, use !help to see command lists!')
@client.event
async def on_message(message):
    global s
    global value
    if message.content.startswith('!help'):
           await message.channel.send('help ---> show commands\n!flag ---> DM me with !flag')
    if message.content.startswith('!flag'):
        s = time.time()
        await message.channel.send('Ugsun toonuudiig usuh erembend oruul \njishee: !answer=[123, 234, 345, 678] ')
        rand_list=[]
        n=10

        for i in range(n):
            num = random.randint(10000,100000)
            print(str(num))
            rand_list.append(num)
            await message.channel.send(num)
            time.sleep(1)
        global hariu
        print(rand_list)
        hariu = sorted(rand_list)
        print(hariu)
        # global hariu
        print(message.content)
    if message.content.startswith('!answer'):
        if (message.content == '!answer=%s' % (hariu)):
            if(time.time() - s <= 20):
                flag = os.getenv('FLAG') 
                await message.author.send(flag)
            else:
                await message.channel.send("Udaad baina "+message.author.name+"!")
        else: await message.author.send("Buruu baina!")


        if message.author == client.user:
            return 
    if message.author == client.user:
        return 
        
client.run(os.getenv('DISCORD_TOKEN'))