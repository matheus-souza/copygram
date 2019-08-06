![Copygram](images/logo_readme.png)

Copygram as the name suggests is a copy of Instagram developed with Laravel, Bootstrap, VueJS and PostgreSQL. It aims to put into practice acquired knowledge.

## Access to [demo app](http://copygram.herokuapp.com/)
### Credentials

E-mail: default@mail.com

Password: qwe123qwe

**Obs.**: *All data is reset in thirty minutes.*

## Running the project
### Requirements
- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/)
- [Docker compose](https://docs.docker.com/compose/)

### Downloading the project
```bash
git clone --recursive https://github.com/matheus-souza/copygram.git
```

If there is a problem with git modules, in the project folder run:
```bash
git submodule update --init --recursive
```

### Running the project
Go to project folder ```cd copygram```

Copy the ```.env.laradock.dev``` file to the submodule folder
```bash
cp .env.laradock.dev laradock/.env
```

Run the ```run``` file
```bash
./run
```
