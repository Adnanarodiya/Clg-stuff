print("FIRST COME FIRST SERVE SCHEDULLING")
process = int(input("Enter number of processes: "))
d = dict()

for i in range(process):
  count = str(i + 1)
  key = "P" + count
  AT = int(input("Enter arrival time of process " + count + ": "))
  BT = int(input("Enter burst time of process " + count + ": "))
  l = []
  l.append(AT)
  l.append(BT)
  d[key] = l

d = sorted(d.items(), key=lambda item: item[1][0])

# Gantt chart
ET = []
for i in range(len(d)):
  # First process
  if i == 0:
    ET.append(d[i][1][1])
  # Get prevET + newBT
  else:
    ET.append(ET[i - 1] + d[i][1][1])

TAT = []
for i in range(len(d)):
  TAT.append(ET[i] - d[i][1][0])

WT = []
for i in range(len(d)):
  WT.append(TAT[i] - d[i][1][1])

avg_WT = 0
for i in WT:
  avg_WT += i
avg_WT = (avg_WT / process)

print("Process | Arrival | Burst | Exit | Turn Around | Wait |")
for i in range(process):
  print("   ", d[i][0], "   |   ", d[i][1][0], " |    ", d[i][1][1], " |    ", ET[i], "  |    ", TAT[i], "  |   ", WT[i], "   |  ")
print("Average Waiting Time: ", avg_WT)
