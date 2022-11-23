#include <stdio.h>
#include <stdlib.h>

char input[5000];

char _[72] = {55, 0, 0, 0, 6, 0, 0, 0, 42, 0, 0, 0, 49, 0, 0, 0, 53, 0, 0, 0, 49, 0, 0, 0, 40, 0, 0, 0, 53, 0, 0, 0, 18, 0, 0, 0, 81, 0, 0, 0, 22, 0, 0, 0, 43, 0, 0, 0, 94, 0, 0, 0, 28, 0, 0, 0, 99, 0, 0, 0, 87, 0, 0, 0, 86, 0, 0, 0, 14, 0, 0, 0};
char __[18] = {68, 111, 73, 69,118,101,110,78,101,101,100,70,111,114,84,104,105,115};

int main() {
	printf("Enter your password: ");

	scanf("%s", input);

	for (int i = 0; i < 18; i++) {
		__[i] = __[i] ^ _[i * 4];
	}
	int ok = 1;

	for (int i = 0; i < 18; i++) {
		if (input[i] != __[i])
			ok = 0;
	}
	if (ok)
		printf("ok\n");
	else
		printf("hmm\n");
	return 0;
}