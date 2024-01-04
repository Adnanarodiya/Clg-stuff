# practical 1-B

a = float(input('Enter a length: '))
b = float(input('Enter b length: '))
c = float(input('Enter c length: '))

d = (a + b + c) / 2

area = (d * (d - a) * (d - b) * (d - c)) ** 0.5


print('Area of triangle is: %0.2f ' %area)
