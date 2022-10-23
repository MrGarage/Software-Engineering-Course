class Drivers:
    def __init__(self, name, xcoord,ycoord):
        self.name = name
        self.xcoord = xcoord
        self.ycoord = ycoord
    
    def __str__(self):
        return '\nName of Driver: ' + self.name

    