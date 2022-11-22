#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>

void bingo(){
    system("/bin/sh");
}

void vuln(){
    char buffer[16] = {0};
    printf("Can you control me?\n");
    read(0, buffer, 0x100);
}

void welcome(){
    printf("Welcome to Pwn2!\n");
}

int main(){
    setvbuf(stdout, NULL, _IOLBF, 0);
    welcome();
    vuln();
    return 0;
}
