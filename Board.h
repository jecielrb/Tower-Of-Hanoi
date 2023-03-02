#pragma once
#include "Tower.h"
class Board : public Tower
{
public:

	//initialize towers in board so all board methods can access towers
	Tower t1 = Tower(0, 1); // (starting point of disks)
	Tower t2 = Tower(0, 2);
	Tower t3 = Tower(0, 3);

	//initialize 3 disks in board, which is limit of disk in my game so I can pass it at starting tower at start of game
	Disk d1 = Disk(1);
	Disk d2 = Disk(2);
	Disk d3 = Disk(3);

	bool m_gameOn = true;
	bool m_inBoard = true;
	int m_moves = 0; 
	Board();
	~Board();
	void moveDisk(int from, int to);
	void drawBoard();
	bool winGame();
};
