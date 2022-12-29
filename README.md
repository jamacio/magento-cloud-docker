# Docker - Magento


## Installation

You only need 3 things on your local machine: `git`, `docker` and `make`

### Install Docker

Follow the installation steps for your system.



	
<summary>Linux</summary>
	
1. Install docker

	* Install Docker on [Debian](https://docs.docker.com/engine/installation/linux/docker-ce/debian/)
	* Install Docker on [Ubuntu](https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/)
	* Install Docker on [CentOS](https://docs.docker.com/engine/installation/linux/docker-ce/centos/)

2. Install Docker Compose
	*  [Install Compose](https://docs.docker.com/compose/install/)

3. Configure permissions
	
	* [Manage Docker as a non-root user](https://docs.docker.com/install/linux/linux-postinstall/)


## Install Make
Installing the make command on linux

```
sudo apt-get update 
```

```
sudo apt-get install -y make
```

You can install make by downloading the build-essential package, as follows 
```
sudo apt install build-essential
```


## App Install
Clone this repo
```
git clone https://github.com/jamacio/magento-cloud-docker.git
```
---
Go to the directory magento-cloud-docker
```
cd magento-cloud-docker
```
---
After running the build command, notice that a folder has been created: magento2
```
make build
```
---
Maybe you need to inform username get it here: [Authentication (repo.magento.com)](https://marketplace.magento.com/customer/accessKeys/)

```
make magento-download
```
---
Install Application
```
make magento-install
```
---
Download sample data
```
make magento-sampledata
```
---
Magento clear
```
make magento-clear
```

## Usage
Start Application
```
make up
```
---
Stop Application
```
make stop
```
---
Watch Application
```
make watch
```



## Magento/Application

1. ``
make magento-composer update
``
2. ``
make magento-restore-db path-to-database-dump.sql
``
3. ``
make magento-clear
``
4. ``
make magento-bash
``



## Access the admin panel

Panel url: [http://localhost/admin](http://localhost/admin)

```
login:
```
admin
```
password:
```
admin123
```

