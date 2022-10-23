from argparse import REMAINDER
import random
import math

xmax, ymax = 5, 5
grid = [[0 for x in range(xmax)] for y in range(ymax)]
userList = []
usersAsCoords = []
answerList = []
dict = {}
with open('user.txt') as file:
    lines = file.readlines()
    for i, value in enumerate(lines):
        names = value.split(",")[0]
        xStart = value.split(",")[1]
        yStart = value.split(",")[2]
        xEnd = value.split(",")[3]
        yEnd = value.split(",")[4]
        usersAsCoords.append(str(int(xStart)) + "," + str(int(yStart)) +
                             "," + str(int(xEnd)) + "," + str(int(yEnd)))
        grid[int(xStart)][int(yStart)] = names
        grid[int(xEnd)][int(yEnd)] = "END" + str(i)
        dict[str(int(xStart)) + "," + str(int(yStart)) + "," +
             str(int(xEnd)) + "," + str(int(yEnd))] = "R" + str(i)

print('\n'.join(['\t'.join([str(cell) for cell in row]) for row in grid]))
# print(usersAsCoords)


def read(y):
    newlist = []
    word = y.split(",")[0] + "," + y.split(",")[1] + \
        "," + y.split(",")[2] + "," + y.split(",")[3]
    newlist.append(dict[word])
    return str(newlist)


def readify(list):
    newlist = []
    for x in list:
        temp = []
        for y in x:
            word = y.split(",")[0] + "," + y.split(",")[1] + \
                "," + y.split(",")[2] + "," + y.split(",")[3]
            temp.append(dict[word])
        newlist.append(temp)
    return newlist


def close(pos1, pos2, timer):
    x1 = int(pos1.split(",")[2])
    y1 = int(pos1.split(",")[3])
    x2 = int(pos2.split(",")[0])
    y2 = int(pos2.split(",")[1])

    xdiff = abs(x1-x2)
    ydiff = abs(y1-y2)
    totDist = xdiff + ydiff
    if(totDist + timer < 5):
        return True

    return False


def getThird(person):
    return int(person.split(",")[4])


def distance(pos1, pos2):
    x1 = int(pos1.split(",")[2])
    y1 = int(pos1.split(",")[3])
    x2 = int(pos2.split(",")[0])
    y2 = int(pos2.split(",")[1])

    xdiff = abs(x1-x2)
    ydiff = abs(y1-y2)

    return xdiff + ydiff


def getSmallestDistance(list, origin):
    smallest = math.inf
    for rider in list:
        #current = rider.split(",")[2] + "," + rider.split(",")[3]
        if distance(rider, origin) < smallest:
            smallest = distance(rider, origin)
    return smallest


test = []
#f = usersAsCoords[0]
# test.append(f)
#print("This is test list")
# print(test)
while len(usersAsCoords) != 0:
    rider = usersAsCoords[0]
    h = rider
    test.append(h)
    print("this is test before")
    print(test)
    print("Current rider: " + read(rider))
    finalGroup = []
    finalGroup.append(rider)
    timer = distance(rider, rider)
    print("This is timer: " + str(timer))
    grid[int(rider.split(",")[0])][int(rider.split(",")[1])] = 0

    usersAsCoords.remove(rider)
    currentGroup = []
    for friend in usersAsCoords:
        print("This is friend: " + read(friend))
        if close(rider, friend, timer):
            temp = str(friend) + "," + str(distance(rider, friend))
            print("This is temp: " + temp)
            currentGroup.append(temp)
    currentGroup.sort(key=getThird)
    print("This is currentGroup:")
    print(currentGroup)
    print("This is FinalGroup")
    print(finalGroup)
    for ptr in currentGroup:
        #ptr = currentGroup[0]
        print("This is ptr: " + read(ptr))
        howFar = getSmallestDistance(test, ptr)
        print("This is howFar: " + str(howFar))
        if timer + howFar < 5:
            finalGroup.append(ptr)

            temp = ptr.split(",")[0] + "," + ptr.split(",")[1] + \
                "," + ptr.split(",")[2] + "," + ptr.split(",")[3]
            # print(temp)
            # print(usersAsCoords)
            usersAsCoords.remove(temp)

            grid[int(ptr.split(",")[0])][int(ptr.split(",")[1])] = 0
            timer = timer + howFar
            #print("timer after: " + str(timer))
        if test.__contains__(h):
            test.remove(h)
        test.append(ptr)
        print("Test after:")
        print(test)

        # test.append(ptr)

    if test.__contains__(h):
        test.remove(h)
    answerList.append(finalGroup)

   # print("This is answerList currently")
   # print(readify(answerList))
    # print("\n")


print("Final list:")
print(readify(answerList))

print("This is the amount of cars required: " + str(len(answerList)))
# maybe change the close method to include the timer, timer is 4 which means the car cannot
# pick up anymore so should spawn 2 cars
