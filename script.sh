#!/bin/bash

tcpdump -ne -c 3000 > network

grep "UDP" network  > udp
grep "TCP" network  > tcp
grep "ARP" network  > arp

cut -d ' ' -f 1 arp > arptime
cut -d ' ' -f 2 arp > arpmacsrc
cut -d ' ' -f 4 arp > arpmacdst
cut -d ' ' -f 1 arp > arplength
cut -d ' ' -f 1,2,4 arp > arpall

cut -d ' ' -f 1 tcp > tcptime
cut -d ' ' -f 3 tcp > tcpmacsrc
cut -d ' ' -f 4 tcp > tcpmacdst
cut -d ' ' -f 5 tcp > tcpipsrc
cut -d ' ' -f 6 tcp > tcpipdst
cut -d ' ' -f 7 tcp > tcpframelen
cut -d ' ' -f 8 tcp > tcpsrcport
cut -d ' ' -f 9 tcp > tcpdstport
cut -d ' ' -f 1,3,4,5,6,7,8,9 tcp > tcpall

cut -d ' ' -f 1 udp > udptime
cut -d ' ' -f 2 udp > udpmacsrc
cut -d ' ' -f 4 udp > udpmacdst
cut -d ' ' -f 9 udp > udpframelen
cut -d ' ' -f 10 udp > udpsrcport
cut -d ' ' -f 12 udp > udpdstport
cut -d ' ' -f 1,2,4,9,10,12 udp > udpall

