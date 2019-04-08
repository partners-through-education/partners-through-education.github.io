# Partners Through Education Website

This repo contains the wordpress static output files as well as the MySQL database from which the website is run.

## Set Up MySQL on MAMP

Once you have MAMP set up, you need to create a symbolic link between the `wordpress` directory in this repo and the folder where MAMP stores the MySQL databases.

1. In the terminal, run the following:
```bash
ln -s ~/path/to/website/wordpress /Applications/MAMP/db/mysql57
```
This creates the symbolic link.
2. Now create a second symbolic link to the place where your WordPress installation is housed.
```bash
ln -s ~/path/to/website/ptedu-wordpress ~/path/to/wordpress/installation
```
