Nextcloud VM Appliance
============

Server installation. Simplified. :cloud:
--------------------------------

#### Interactive Guidance
> **The Nextcloud VM** — _(aka **N**ext**c**loud **V**irtual **M**achine_ or _**NcVM**)_ — helps you create a personal or corporate [Nextcloud Server] _faster_ and _easier._ Fundamentally, NcVM is a carefully crafted _family_ of [\*nix] scripts which interactively guide you through a quality-controlled installation to obtain an [A+ security-rated] Nextcloud instance.

#### Curated Extras
> The Nextcloud [app store] extends core features by allowing you to enable a multitude of free one-click apps. However, _integration apps_ there like [Collabora Online] and [ONLYOFFICE] are solely _bridges_ to Nextcloud. You’re still required to install those services _separately_, which can be complex. NcVM provides optional _**full installation of select curated apps**_, including those and others. Monitor and manage your cloud using any web browser with NcVM’s hand-picked collection of power utilities featuring stunning, modern UIs.

#### All Systems Go
> NcVM can check for and install _stable_ updates to keep things current, smooth, and secure.


--------------------

## Dependencies:
(Ubuntu Server 22.04 LTS *minimal* 64-bit)
<br>
(Linux Kernel: 5.15)
- Apache 2.4
- PostgreSQL 14
- PHP-FPM 8.1
- Redis Memcache (latest stable version from PECL)
- PHP-igbinary (latest stable version from PECL
- PHP-smbclient (latest stable version from PECL)
- Nextcloud Server Latest

--------------------

## Install:

</p>
<div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre class="notranslate">
<code>sudo bash -c "$(wget -q -O - https://raw.githubusercontent.com/XSR1/Nextcloud-VM/master/nextcloud_install_production.sh)"</code>
</pre><div class="zeroclipboard-container">
    

