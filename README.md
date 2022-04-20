# ProjectMars

## Problem
A squad of robotic rovers are to be landed by NASA on a plateau on Mars. This plateau, which is curiously rectangular, must be navigated by the rovers so that their on-board cameras can get a complete view of the surrounding terrain to send back to Earth. A rover's position and location is represented by a combination of x and y coordinates and a letter representing one of the four cardinal compass points. The plateau is divided up into a grid to simplify navigation. An example position might be 0, 0, N, which means the rover is in the bottom left corner and facing North. In order to control a rover, NASA sends a simple string of letters.The possible letters are 'L', 'R' and 'M'.

* 'L' and 'R' makes the rover spin 90 degrees left or right respectively, without moving from its current spot.
* 'M' means move forward one grid point, and maintain the same Heading.Assume that the square directly North from (x, y) is (x, y+1).

### Input
The first line of input is the upper-right coordinates of the plateau, the lower-left coordinates are assumed to be 0,0.
The rest of the input is information pertaining to the rovers that have been deployed. Each rover has two lines of input. The first line gives the rover's position, and the second line is a series of instructions telling the rover how to explore the plateau. The position is made up of two integers and a letter separated by spaces, corresponding to the x and y coordinates and the rover's orientation. Each rover will be finished sequentially, which means that the second rover won't start to move until the first one has finished moving.

### Output
The output for each rover should be its final co-ordinates and heading.

### Input & Output
Test Input:\
5 5\
1 2 N\
L M L M L M L M M\
3 3 E\
M M R M M R M R R M\


Expected Output:\
1 3 N\
5 1 E

## Solution
We have named our rovers Spirit and Opportunity. Before executing the rover commands, we need to make sure the following items below:
* The input format is valid.
* The rovers are landed on the correct plateau.

After the inputs and the initial positions of the rovers are checked, the rovers get the commands sequentially and start discovering the surface. The rovers are programmed not to exceed the surface boundaries in case there are any commands given to cause them to leave the area.

Once all the commands are executed, the final position of the rovers are printed as output.


### Workflow
1. The count of the inputs in each line is verified before executing the commands. If the input is incorrect, the program execution is stopped and the following error is thrown:
```bash
Input parameters are wrong.
```

2. The rovers are checked whether they are landed on the correct surface. If the rover is out of the boundaries of the surface, the following error is displayed:
```bash
<Rover name> could not land to the area.
```

3. The given commands are executed for the related rover. If the rover is on the edge of the given boundaries and the next move command causes it to leave the area, the rover does not move and stays in the current grid.

4. After all the commands are executed, the final position of the rover is printed as below:
```bash
<Position X> <Position Y> <Rotation> 
```

## Execution
1. Using the command line, go to the project directory and execute the following commands:
```bash
composer install
```
```bash
php Main.php
```
2. Enter a valid input as described above.
3. The output will be displayed on the command line.

---
Thanks!\
Gorkem Genc
