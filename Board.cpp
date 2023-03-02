#include "Board.h"
#include <Windows.h>
//initialize towers in board so all board methods can access towers


Board::Board() { 
	//if disk are empty, push all disk in that tower
	//this just make sure no disks are duplicated in starting tower
	if (t1.diskCount() == 0) {
		t1.pushDisk(&d1);
		t1.pushDisk(&d2);
		t1.pushDisk(&d3);
	}
};

Board::~Board() {
	t1.~Tower();
	t2.~Tower();
	t3.~Tower();
};

void Board::moveDisk(int from, int to) { 
	
	//Source Tower 1 - Dest Tower 2
	if (from == 1 && to == 2) {
		//disk pointer that points to pop disk method, in which the pop disk method removes the first disk in tower 1
		Disk* diskPopped = t1.popDisk();
		// if diskpopped top disk is smaller (greater than because 3 is smallest disk) than disk in destination tower 
		// or if destination tower is empty, put disk in the other tower
		// else, put the disk back
		if (diskPopped == nullptr) {
			std::cout << "Tower source is empty. No disk to take" << std::endl;
			system("PAUSE");
		}
		else if (diskPopped->getSize() > t2.getSize() || t2.getSize() == 0) {
			t2.pushDisk(diskPopped);
			m_moves++;
		}
		
		else {
			std::cout << "Disk is bigger than disk on tower" << std::endl;
			t1.pushDisk(diskPopped);
			system("PAUSE");
		}
	}
	//Source Tower 1 - Dest Tower 3
	else if (from == 1 && to == 3) {
		Disk* diskPopped = t1.popDisk();
		if (diskPopped == nullptr) {
			std::cout << "Tower source is empty. No disk to take" << std::endl;
			system("PAUSE");
		}
		else if (diskPopped->getSize() > t3.getSize() || t3.getSize() == 0) {
			t3.pushDisk(diskPopped);
			m_moves++;
		}
		else {
			std::cout << "Disk is bigger than disk on tower" << std::endl;
			t1.pushDisk(diskPopped);
			system("PAUSE");
		}
	}
	//Source Tower 2 - Dest Tower 3
	else if (from == 2 && to == 3) {
		Disk* diskPopped = t2.popDisk();
		if (diskPopped == nullptr) {
			std::cout << "Tower source is empty. No disk to take" << std::endl;
			system("PAUSE");
		}
		if (diskPopped->getSize() > t3.getSize() || t3.getSize() == 0) {
			t3.pushDisk(diskPopped);
			m_moves++;
		}
		else {
			std::cout << "Disk is bigger than disk on tower" << std::endl;
			t2.pushDisk(diskPopped);
			system("PAUSE");
		}
	}
	//Source Tower 2 - Dest Tower 1
	else if (from == 2 && to == 1) {
		Disk* diskPopped = t2.popDisk();
		if (diskPopped == nullptr) {
			std::cout << "Tower source is empty. No disk to take" << std::endl;
			system("PAUSE");
		}
		else if (diskPopped->getSize() > t1.getSize() || t1.getSize() == 0) {
			t1.pushDisk(diskPopped);
			m_moves++;
		}
		else {
			std::cout << "Disk is bigger than disk on tower" << std::endl;
			t2.pushDisk(diskPopped);
			system("PAUSE");
		}
	}
	//Source Tower 3 - Dest Tower 1
	else if (from == 3 && to == 1) {
		Disk* diskPopped = t3.popDisk();
		if (diskPopped == nullptr) {
			std::cout << "Tower source is empty. No disk to take" << std::endl;
			system("PAUSE");
		}
		else if (diskPopped->getSize() > t1.getSize() || t1.getSize() == 0) {
			t1.pushDisk(diskPopped);
			m_moves++;
		}
		else {
			std::cout << "Disk is bigger than disk on tower" << std::endl;
			t3.pushDisk(diskPopped);
			system("PAUSE");
		}
	}
	//Source Tower 3 - Dest Tower 2
	else if (from == 3 && to == 2) {
		Disk* diskPopped = t3.popDisk();
		if (diskPopped == nullptr) {
			std::cout << "Tower source is empty. No disk to take" << std::endl;
			system("PAUSE");
		}
		else if (diskPopped->getSize() > t2.getSize() || t2.getSize() == 0) {
			t2.pushDisk(diskPopped);
			m_moves++;
		}
		else {
			std::cout << "Disk is bigger than disk on tower" << std::endl;
			t3.pushDisk(diskPopped);
			system("PAUSE");
		}
	}
	

	 // increment move whenever this method is finish
	//popdisk works


};
void Board::drawBoard() {

	t1.drawTower();
	t2.drawTower();
	t3.drawTower();
};

bool Board::winGame() {
	std::string m_userInput;
	if (t2.diskCount() == 3) {
		system("cls");
		drawBoard();
		std::cout << "Congratulations! You Won" << std::endl;
		std::cout << "Moves Made: " << m_moves << std::endl;
		std::cout << "Play Again? " << std::endl << "[Y] or [N]: ";
		std::cin >> m_userInput;
		if (m_userInput == "Y" || m_userInput == "y") {
			m_gameOn = false;
			system("PAUSE");
			return false;
		}
		else if(m_userInput == "N" || m_userInput == "n") {
			std::cout << "Thanks for playing!" << std::endl;
			return true;
		}
		else {
			std::cout << "Wrong Input." << std::endl;
			winGame();
		}
		
	}
	else if (t3.diskCount() == 3) {
		system("cls");
		drawBoard();
		std::cout << "Congratulations! You Won" << std::endl;
		std::cout << "Moves Made: " << m_moves << std::endl;
		std::cout << "Play Again? [Y] or [N]" << std::endl;
		std::cin >> m_userInput;
		if (m_userInput == "Y" || m_userInput == "y") {
			m_gameOn = false;
			system("PAUSE");
			return false;
		}
		else if (m_userInput == "N" || m_userInput == "n") {
			std::cout << "Thanks for playing!" << std::endl;
			return true;
		}
		else {
			std::cout << "Wrong Input." << std::endl;
			winGame();
		}
	}
	return false;
};