# Symfony tutorial

**Useful links:**
- [Download Symfony](https://symfony.com/download)
- [Symfony documentation](https://symfony.com/doc/current/setup/symfony_server.html)

## Installation + First Project
### Symfony installation:

Download Symfony CLI:
```shell
curl -sS https://get.symfony.com/cli/installer | bash
```


Add a line at the end of your shell configuration file:
```shell
nano ~/.zshrc
```

```bash
export PATH="$HOME/.symfony/bin:$PATH"
```

Reload your .zshrc:
```shell
source ~/.zshrc
```

Use "Symfony check:req" in order to know if there are missing modules:
<br>
Are you missing SimpleXML ? 
```shell 
sudo apt install php-xml
```

### First project

Create a new project:
```shell
symfony new projet_name
```

Once your project is created, you can run it in a local web browser by using any webserver you like but, Symfony already has one:
```shell
symfony serve
```

In case you hadn't installed a local Certificate Authority:
```shell
symfony server:ca:install
```

If the certificate encounter some problem when opening the browser, it means that you are using a WSL. You'll need to import the certificate from your WSL to your Windows system:
```shell
explorer.exe `wslpath -w $HOME/.symfony5/certs`
```
Then click on the "default" file and follow the steps. There isn't a password, let the field empty. Oh... yeah, you must restart Windows.