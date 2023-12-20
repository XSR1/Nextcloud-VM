#!/bin/bash

# T&M Hansson IT AB © - 2023, https://www.hanssonit.se/

WANIP6=$(curl -s -k -m 5 -6 https://checkipv6.dedyn.io)
WANIP4=$(curl -s -k -m 5 -4 https://checkipv4.dedyn.io)
ADDRESS=$(hostname -I | cut -d ' ' -f 1)

clear
figlet -f small Nextcloud
echo
echo
echo "Hostname: $(hostname -s)"
echo "WAN IPv4: $WANIP4"
echo "WAN IPv6: $WANIP6"
echo "LAN IPv4: $ADDRESS"
echo
exit 0
