#pragma once
#include <string>
#include <vector>
class Disk
{
private:
	int m_size = 0; 
	std::vector<std::string> m_diskAsterisks;
	std::string m_diskTop = "   ****"; //disk 3
	std::string m_diskMid = "  ******"; //disk 2
	std::string m_diskLow = "**********"; //disk 1

public:
	Disk();
	//~Disk();
	Disk(int _size);
	void drawDisk();
	int getSize();
	void setSize(int m_size);
};

