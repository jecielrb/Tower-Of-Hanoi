#include "TowerOfHanoi.h"
#include <iostream>
#include <vector>
#include <string>
#include <Windows.h>
#include "Board.h"



int main() {
	bool towerOfHanoi = true;

	while (towerOfHanoi) { // nested while loops just to make program cleaner and have that "static" tower effect. So screen resets cleaner
		
		Board board = Board();

		
		do { //while loop for game
			board.drawBoard();
			std::string from;
			std::string to;
			bool userChoice = true;
			do { //while loop just to be able to read string and integers
				std::cout << "Number of Moves: " << board.m_moves << std::endl;
				std::cout << "Choose Source Tower([X] to Quit, [N] for New): ";
				std::cin >> from;
				if (from == "X" || from == "x") {
					std::cout << "Thanks for Playing" << std::endl;
					board.m_gameOn = false;
					towerOfHanoi = false;
					break;
				}
				else if (from == "N" || from == "n") {
					board.m_gameOn = false;
					break;

				}

				std::cout << "Choose Destination Tower([X] to Quit, [N] for New): ";
				std::cin >> to;

				if (to == "X" || to == "x") {
					std::cout << "Thanks for Playing" << std::endl;
					board.m_gameOn = false;
					towerOfHanoi = false;
					break;
				}
				else if (to == "N" || to == "n") {
					board.m_gameOn = false;
					break;
				}

				board.moveDisk(atoi(from.c_str()), atoi(to.c_str())); //converts movedisk arguments to integers SOURCE: I found the command "atoi" in stackoverflow but I lost the link
				bool won = board.winGame();
				
				if (won) {
					board.m_gameOn = false;
					towerOfHanoi = false;
					break;
				}

				system("cls"); //resets screen to make it look cleaner (clear screen)
				break;


			} while (userChoice = true);
			system("cls");

		} while (board.m_gameOn == true);
		system("cls");

		//clears up memory by calling board destructor, which inside also calls tower destructor
		//maybe redundant since program calls destructor whenever Board() goes out of scope but just in case
		board.~Board();
	}

	std::cout << "Thanks for Playing" << std::endl;
	std::cout << "(c) All Rights Deserved" <<std::endl << "Jeciel Benerayan 991602116" << std::endl;
	

	return 0;

}