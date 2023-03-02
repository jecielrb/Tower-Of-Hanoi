#include "Disk.h"
#include <Windows.h>
#include <iostream>
Disk::Disk() {};

Disk::Disk(int _size) {
	//clears vector string to make sure disk getting passed here is no more than 1
	m_diskAsterisks.clear();

	//if size is 1-3, pass that in disk. Size kind of represents as the top disk if it makes sense 

	if (_size == 1) {
		m_diskAsterisks.push_back(m_diskLow);
		m_size = _size;
	}
	else if (_size == 2) {
		m_diskAsterisks.push_back(m_diskMid);
		m_size = _size;

	}
	else if (_size == 3) {
		m_diskAsterisks.push_back(m_diskTop);
		m_size = _size;
	}
	else { //can be redundant but just in case
		m_diskAsterisks.clear();
	}
}
void Disk::drawDisk() {
	std::cout << m_diskAsterisks[0] << std::endl; // since disk represents only 1 disk, drawing the disk only prints 1 disk
}

//getters and setter for m_size
int Disk::getSize() {
	return m_size;
}

void Disk::setSize(int _size) {
	m_size = _size;
}
