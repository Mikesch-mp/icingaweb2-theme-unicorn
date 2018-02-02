# Unicorn theme for Icinga Web 2

By using this theme you are agreeing to never suing the author for any damage which can result from using this theme :)

![Icinga Web 2 theme Unicorn](https://github.com/Mikesch-mp/icingaweb2-theme-unicorn/raw/master/screenshots/unicorn-theme-login.png "Unicorn theme login")

## How to install

Install these theme repository like any other Icinga Web 2 theme:

* copy all folders/files to your icingaweb2 folder (mostly /usr/share/icingaweb2)
    
```bash
git clone https://github.com/Mikesch-mp/icingaweb2-theme-unicorn /usr/share/icingaweb2/modules/unicorn
```
* Download background image from http://i.imgur.com/SCfMd.png

```bash
wget 'http://i.imgur.com/SCfMd.png' -O /usr/share/icingaweb2/modules/unicorn/public/img/unicorn.png
```

* Enable the module
```bash
icingacli module enable unicorn
```

* Choose theme in admin or user UI
![Icinga Web 2 theme Unicorn](https://github.com/Mikesch-mp/icingaweb2-theme-unicorn/raw/master/screenshots/unicorn-theme-set_theme_global.png "Unicorn theme global")
![Icinga Web 2 theme Unicorn](https://github.com/Mikesch-mp/icingaweb2-theme-unicorn/raw/master/screenshots/unicorn-theme-set_theme_user.png "Unicorn theme user")

## FAQ

if you enable or disable the theme you have to logout/login or do an hard refresh in your browser to enable the sparkling mouse effect.

## Contribution

Feel free to add your ideas and examples here as well. Just add or modify a theme.

## License

Unless otherwise noted the license of these theme is Public Domain.
