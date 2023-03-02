#pragma once
#include <vector>
#include "Disk.h"
#include <string>
#include <iostream>
class Tower : public Disk
{
private:
	int m_currentTower = 0;
	int m_numDisk = 0;
	std::vector<Disk*> m_DiskInTowerPTR;
public:
	Tower();
	Tower(int _numDisk, int _towerNumber);
	~Tower();
	Disk* popDisk();
	void pushDisk(Disk* _disk);
	void drawTower();
	int diskCount();
	std::vector<Disk*> getDisksInTower();
	void setDiskAsterisks(std::vector<Disk*> m_diskAsterisks);
	
};
