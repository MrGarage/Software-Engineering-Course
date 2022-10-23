import random
xmax = 10
ymax = 10
test = [[0 for x in range(xmax)] for y in range(ymax)]
file = open("usersidk.txt", "w")
i = 0
while i < 20:
    randxStart = random.randint(0, 9)
    randyStart = random.randint(0, 9)
    randxEnd = random.randint(0, 9)
    randyEnd = random.randint(0, 9)
    #print(test[randxStart][randyStart] is 0 or test[randxEnd][randyEnd] is 0)
    if test[randxStart][randyStart] == 0 and test[randxEnd][randyEnd] == 0:
        print("we went in if statement")
        test[randxStart][randyStart] = "R" + str(i)
        test[randxEnd][randyEnd] = "END" + str(i)
        file.write("R" + str(i) + "," + str(randxStart) + "," +
                   str(randyStart) + "," + str(randxEnd) + "," + str(randyEnd) + "\n")
        i += 1
file.close()
