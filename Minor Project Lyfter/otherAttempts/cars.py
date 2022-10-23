class Cars:
    def __init__(self, seats):
        self.seats = seats

    def SeatsTaken(self):
        self.seats += 1
        if (self.seats > 1):
            print("No more seats available")
        else:
            print("There are " + str(1 - self.seats) + " seat(s) left")


