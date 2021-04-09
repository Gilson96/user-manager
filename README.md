## Setup on your machine

### Prerequisites 
This project requires [Vagrant](https://www.vagrantup.com/) to be downloaded on your machine

### Steps

1. Create a local directory on your machine 
2. Run the following code in your command line to navigate into that directory:   

```shell 
$ cd ~/your-directory-name-here
```
3. Copy the SSH key from this GitHub repository `git@github.com:Gilson96/user-manager.git`

4. Run the following code in your command line to clone the repo to your machine:  

```shell 
git clone git@github.com:Gilson96/user-manager.git <app-name>
```
5. Navigate to your new app directory (the app name you just picked):

```shell 
$ cd app-name
```
6. Install the dependencies in the node_modules folder:

```shell 
npm i
```
7. Install the dependencies in the composer file:

```shell 
composer i
```
8. Copy the relevant Homestead files into the
project directory:

```shell 
vendor/bin/homestead make
```

9. Change the second line of Homestead.yaml so it just uses 512mb: 

```shell 
memory: 512
```

10. Create a .env file:

```shell 
cp .env.example .env
```

11. Edit the .env file you just created to use the default Homestead database setup:

```shell 
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret
```

12. Generate an application key:

```shell 
php artisan key:generate
```

13. Get Vagrant up and running:

```shell 
vagrant up
```
14. Once Vagrant has finished loading, go to:

    1.  On Mac: http://homestead.test
    2.  On Windows: http://localhost:8000

15. SSH into the Vagrant machine:

```shell 
vagrant ssh
```

16. Navigate to the code directory:

```shell 
cd code
```
17. Run migrations:

```shell 
artisan migrate
```
