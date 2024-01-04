array = [1,7,1,3,1,5]

val = int(input("Enter a value : "))

count = 0

for i in range(len(array)):
    if val == array[i]:
        count += 1
    
    

if count == 0:
    print(f"{val} does not exist in list.")
    
else:
    print(f"{val} is exist & appers {count} times" )


