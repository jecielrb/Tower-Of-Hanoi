#include "Tower.h"
#include "Disk.h"
#include <Windows.h>

Tower::Tower() {};

Tower::Tower(int _numDisk, int _towerNumber) {
	m_currentTower = _towerNumber;
	m_numDisk = _numDisk;
};


Tower::~Tower() {
	m_numDisk = NULL;
	m_DiskInTowerPTR.clear();
};

Disk* Tower::popDisk() {
	//when disk is popped, store that popped disk in a variable of type Disk 
	
	if (m_DiskInTowerPTR.size() > 0) { //make sure there is disks to pop before executing popping out disk 
		
		Disk* m_poppedDisk = m_DiskInTowerPTR[0];

		if (m_DiskInTowerPTR.size() == 1) { //if this is the last disk in tower, set m_size of that tower to 0 (so that it knows that the tower is empty)
			setSize(0);
		}
		//setSize(getSize() - 1); 
		m_DiskInTowerPTR.erase(m_DiskInTowerPTR.begin()); //remove top disk
		setSize(Disk().getSize()); //after disk is popped out, set the size to the tower's disk m_size(top disk indicator) to represent tower correctly
		return m_poppedDisk;
	}
	else {
		std::cout << "No disk in tower" << std::endl;
		return nullptr;
	}

	

};

void Tower::pushDisk(Disk* _disk) {
	m_DiskInTowerPTR.insert(m_DiskInTowerPTR.begin(), _disk); //inserts disk argument at the first index of the vector so that whenever I put disk in tower, it puts it on top
	setSize(_disk->getSize());//make the disk passed argument the top disk by storing it in m_size of that tower
	
};

void Tower::drawTower() {
	std::cout << "  Tower " << std::to_string(m_currentTower) << std::endl << std::endl;

	for (int i = 0; i < m_DiskInTowerPTR.size();i++) { //for loop to print disks depending on disk in tower size
		m_DiskInTowerPTR[i]->drawDisk();
	}

	std::cout << std::endl << std::endl;
};

int Tower::diskCount() { 
	return m_DiskInTowerPTR.size();
};

//getters and setters for vector disk* diskInTower
std::vector<Disk*> Tower::getDisksInTower() {
	return m_DiskInTowerPTR;
}

void Tower::setDiskAsterisks(std::vector<Disk*> _diskAsterisks) {
	m_DiskInTowerPTR = _diskAsterisks;
}