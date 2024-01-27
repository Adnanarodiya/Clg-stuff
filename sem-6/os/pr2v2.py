class MyProcess:
    def __init__(self, arrival_time, burst_time):
        self.arrival_time = arrival_time
        self.burst_time = burst_time
        self.completion_time = 0
        self.waiting_time = 0
        self.turnaround_time = 0

    def calculate_completion_time(self, previous_completion_time):
        self.completion_time = previous_completion_time + self.burst_time

    def calculate_waiting_time(self):
        self.waiting_time = self.completion_time - self.arrival_time - self.burst_time

    def calculate_turnaround_time(self):
        self.turnaround_time = self.completion_time - self.arrival_time

# Get the number of processes from the user
num_processes = int(input("Enter the number of processes: "))

# Create a list to store the processes
processes = []

# Take input for each process and create MyProcess objects
for i in range(num_processes):
    arrival_time = int(input(f"Enter arrival time for process {i+1}: "))
    burst_time = int(input(f"Enter burst time for process {i+1}: "))
    process = MyProcess(arrival_time, burst_time)
    processes.append(process)

# Sort the processes based on arrival time
processes.sort(key=lambda x: x.arrival_time)

# Calculate completion time, waiting time, and turnaround time for each process
previous_completion_time = 0
for process in processes:
    process.calculate_completion_time(previous_completion_time)
    process.calculate_waiting_time()
    process.calculate_turnaround_time()
    previous_completion_time = process.completion_time

# Calculate average waiting time and average turnaround time
total_waiting_time = sum(process.waiting_time for process in processes)
total_turnaround_time = sum(process.turnaround_time for process in processes)
avg_waiting_time = total_waiting_time / num_processes
avg_turnaround_time = total_turnaround_time / num_processes

# Print the Gantt chart
print("Gantt Chart:")
for process in processes:
    print(f"Process {process.arrival_time} - {process.completion_time}")

# Print the average waiting time and average turnaround time
print(f"Average Waiting Time: {avg_waiting_time}")
print(f"Average Turnaround Time: {avg_turnaround_time}")
