# MP-Dashboard

A brief description of what this project does and who it's for


## How to - SETUP

* Download and Install Laragon : https://laragon.org/download/index.html
* Go To C:\laragon\bin\apache\httpd-2.4.54-win64-VS16\conf\
* Open httpd.conf and search for <Directory "C:/laragon/www">
* Alter it into these text below

```txt
  <Directory "C:/laragon/www">
    #
    # Possible values for the Options directive are "None", "All",
    # or any combination of:
    #   Indexes Includes FollowSymLinks SymLinksifOwnerMatch ExecCGI MultiViews
    #
    # Note that "MultiViews" must be named *explicitly* --- "Options All"
    # doesn't give it to you.
    #
    # The Options directive is both complicated and important.  Please see
    # http://httpd.apache.org/docs/2.4/mod/core.html#options
    # for more information.
    #
    Options Indexes FollowSymLinks Includes ExecCGI

    #
    # AllowOverride controls what directives may be placed in .htaccess files.
    # It can be "All", "None", or any combination of the keywords:
    #   AllowOverride FileInfo AuthConfig Limit
    #
    AllowOverride All

    #
    # Controls who can get stuff from this server.
    #
    Require all granted
    </Directory>

    <Directory "C:/laragon/www/mp-dashboard">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
```
## How to - CLONE
* Please clone the git-hub repo into C:\laragon\www directory, otherwise the program can't run properly.