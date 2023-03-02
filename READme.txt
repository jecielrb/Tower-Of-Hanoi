Jeciel Benerayan Midterm Project for Game Engineering 
Student ID: 991602116

Description: 

-Tower of Hanoi Midterm Project using C++. 
-Program is commented as much as possible to describe methods and variables in the source code to 	 help understand the code and it purpose of each methods.
-All Tower Of Hanoi requirements and features are met based on testing without errors.
-Video demo would be provided just in case

Some Feature clarification:

	-Other than function requirements described in instruction here are others:
	-Disk can be moved freely as long as tower is empty and disk in tower is bigger than disk being moved
	-New game function works, it just wont display anything

Source Code Explanation: (generally speaking)

-I strictly tried to stick with the minimum requirements and a few additional to make the game work
-Disk method represent 1 disk only
-I stored asterisks in vector string in order to "draw" them
-Tower method represent 1 tower only that can hold disks object(I use the vector to store them)
-In board method is where I put disk in starting tower, draw them
-Movedisk method in board is a bunch of else ifs to validate, I'm not sure if thats ideal but it works
-Main method is where I have my game loop. 
-You will see 3 loops. Outer one just so Board initialized in main doesnt call destructor whenever it repeats the while loop. Middle one just so it looks cleaner when clearing screen after winning a game. 	Inner one is for the user inputs, I had trouble making userinput take string and int without error and this is the way I could think of

Program Flaws:

-Program does not display tower horizontally similarly to sample output
-Memory management could be better, my Visual Studio does not show 'Memory' in 'Debug' menu
-Source code can be a bit clustered which make it hard to read, I tried to add whitespaces as much as I can
-My way of creating the Tower of Hanoi can be non-ideal and might show bad coding practices as I am still improving with programming especially C++
