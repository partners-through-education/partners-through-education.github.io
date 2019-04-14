# Partners Through Education Website

This repo contains the wordpress static output files as well as the MySQL database from which the website is run.

Some folder information:

* `ptedu-wordpress`: This folder contains the wordpress installation.
* `wordpress`: This folder contains the MySQL databases that store all of the site information.

## Set Up MySQL on MAMP

Once you have MAMP set up, you need to create a symbolic link between the `wordpress` directory in this repo and the folder where MAMP stores the MySQL databases.

1. In the terminal, run the following:

```bash
ln -s ~/path/to/website/wordpress /Applications/MAMP/db/mysql57
```

  This creates the symbolic link.

2. Now clone [the WordPress installation repo](https://github.com/partners-through-education/ptedu-wordpress) locally and create a symbolic link from that folder to wherever your MAMP server is set up to access files from:

```bash
ln -s ~/path/to/ptedu-wordpress ~/path/to/server/home
```
