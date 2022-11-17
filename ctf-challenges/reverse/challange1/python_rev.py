# Author Alisa

def check(user_input):
	compare_flag = [148877, 1000000, 110592, 1124864, 140608, 140608, 140608, 140608, 148877, 1000000, 148877, 125000, 884736, 148877, 970299, 941192, 1124864, 
				941192, 125000, 1092727, 1000000, 941192, 1030301, 884736, 166375, 166375, 1157625, 125000, 970299, 1157625, 884736, 1000000, 148877, 970299, 132651, 1000000, 1092727, 1000000, 166375, 1000000, 884736, 1092727, 1030301, 970299, 125000, 1000000, 884736, 941192, 884736, 1092727]

	make_ur_flag = []

	if len(user_input) != 50: return

	for char in user_input:
		make_ur_flag.append(ord(char) ^ ord('Q'))

	make_ur_flag = make_ur_flag[::-1]

	for i, char in enumerate(make_ur_flag):
		make_ur_flag[i] = char ** 3

	if compare_flag != make_ur_flag:
		return
	else:
		print ("Yay congratz")

if __name__ == "__main__":
	
	user_input = input("Please enter your flag >  ")	
	check(user_input)