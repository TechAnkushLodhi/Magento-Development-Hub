# Command List
##  Php bin/magento --help

    ```phtml

        Description:
        List commands

        Usage:
        list [options] [--] [<namespace>]

        Arguments:
        namespace             The namespace name

        Options:
            --raw             To output raw command list
            --format=FORMAT   The output format (txt, xml, json, or md) [default: "txt"]
            --short           To skip describing commands' arguments
        -h, --help            Display help for the given command. When no command is given display help for the list command
        -q, --quiet           Do not output any message
        -V, --version         Display this application version
            --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
        -n, --no-interaction  Do not ask any interactive question
        -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

        Help:
        The list command lists all commands:

            bin/magento list

        You can also display the commands for a specific namespace:

            bin/magento list test

        You can also output the information in other formats by using the --format option:

            bin/magento list --format=xml

        It's also possible to get raw list of commands (useful for embedding command runner):

            bin/magento list --raw

    ``

##  bin/magento list --raw
   ```phtml
            completion                                            Dump the shell completion script
            help                                                  Display help for a command
            list                                                  List commands
            admin:adobe-ims:disable                               Disable Adobe IMS Module
            admin:adobe-ims:enable                                Enable Adobe IMS Module.
            admin:adobe-ims:info                                  Information of Adobe IMS Module configuration
            admin:adobe-ims:status                                Status of Adobe IMS Module
            admin:user:create                                     Creates an administrator
            admin:user:unlock                                     Unlock Admin Account
            app:config:dump                                       Create dump of application
            app:config:import                                     Import data from shared configuration files to appropriate data storage
            app:config:status                                     Checks if config propagation requires update
            braintree:migrate                                     Migrate stored cards from a Magento 1 database
            cache:clean                                           Cleans cache type(s)
            cache:disable                                         Disables cache type(s)
            cache:enable                                          Enables cache type(s)
            cache:flush                                           Flushes cache storage used by cache type(s)
            cache:status                                          Checks cache status
            catalog:images:resize                                 Creates resized product images
            catalog:product:attributes:cleanup                    Removes unused product attributes.
            cms:wysiwyg:restrict                                  Set whether to enforce user HTML content validation or show a warning instead
            config:sensitive:set                                  Set sensitive configuration values
            config:set                                            Change system configuration
            config:show                                           Shows configuration value for given path. If path is not specified, all saved values will be shown
            cron:install                                          Generates and installs crontab for current user
            cron:remove                                           Removes tasks from crontab
            cron:run                                              Runs jobs by schedule
            customer:hash:upgrade                                 Upgrade customer's hash according to the latest algorithm
            deploy:mode:set                                       Set application mode.
            deploy:mode:show                                      Displays current application mode.
            dev:di:info                                           Provides information on Dependency Injection configuration for the Command.
            dev:email:newsletter-compatibility-check              Scans newsletter templates for potential variable usage compatibility issues
            dev:email:override-compatibility-check                Scans email template overrides for potential variable usage compatibility issues
            dev:profiler:disable                                  Disable the profiler.
            dev:profiler:enable                                   Enable the profiler.
            dev:query-log:disable                                 Disable DB query logging
            dev:query-log:enable                                  Enable DB query logging
            dev:source-theme:deploy                               Collects and publishes source files for theme.
            dev:template-hints:disable                            Disable frontend template hints. A cache flush might be required.
            dev:template-hints:enable                             Enable frontend template hints. A cache flush might be required.
            dev:template-hints:status                             Show frontend template hints status.
            dev:tests:run                                         Runs tests
            dev:urn-catalog:generate                              Generates the catalog of URNs to *.xsd mappings for the IDE to highlight xml.
            dev:xml:convert                                       Converts XML file using XSL style sheets
            downloadable:domains:add                              Add domains to the downloadable domains whitelist
            downloadable:domains:remove                           Remove domains from the downloadable domains whitelist
            downloadable:domains:show                             Display downloadable domains whitelist
            encryption:payment-data:update                        Re-encrypts encrypted credit card data with latest encryption cipher.
            i18n:collect-phrases                                  Discovers phrases in the codebase
            i18n:pack                                             Saves language package
            i18n:uninstall                                        Uninstalls language packages
            indexer:info                                          Shows allowed Indexers
            indexer:reindex                                       Reindexes Data
            indexer:reset                                         Resets indexer status to invalid
            indexer:set-dimensions-mode                           Set Indexer Dimensions Mode
            indexer:set-mode                                      Sets index mode type
            indexer:show-dimensions-mode                          Shows Indexer Dimension Mode
            indexer:show-mode                                     Shows Index Mode
            indexer:status                                        Shows status of Indexer
            info:adminuri                                         Displays the Magento Admin URI
            info:backups:list                                     Prints list of available backup files
            info:currency:list                                    Displays the list of available currencies
            info:dependencies:show-framework                      Shows number of dependencies on Magento framework
            info:dependencies:show-modules                        Shows number of dependencies between modules
            info:dependencies:show-modules-circular               Shows number of circular dependencies between modules
            info:language:list                                    Displays the list of available language locales
            info:timezone:list                                    Displays the list of available timezones
            inventory:reservation:create-compensations            Create reservations by provided compensation arguments
            inventory:reservation:list-inconsistencies            Show all orders and products with salable quantity inconsistencies
            inventory-geonames:import                             Download and import geo names for source selection algorithm
            maintenance:allow-ips                                 Sets maintenance mode exempt IPs
            maintenance:disable                                   Disables maintenance mode
            maintenance:enable                                    Enables maintenance mode
            maintenance:status                                    Displays maintenance mode status
            media-content:sync                                    Synchronize content with assets
            media-gallery:sync                                    Synchronize media storage and media assets in the database
            module:config:status                                  Checks the modules configuration in the 'app/etc/config.php' file and reports if they are up to date or not
            module:disable                                        Disables specified modules
            module:enable                                         Enables specified modules
            module:status                                         Displays status of modules
            module:uninstall                                      Uninstalls modules installed by composer
            newrelic:create:deploy-marker                         Check the deploy queue for entries and create an appropriate deploy marker.
            queue:consumers:list                                  List of MessageQueue consumers
            queue:consumers:restart                               Restart MessageQueue consumers
            queue:consumers:start                                 Start MessageQueue consumer
            remote-storage:sync                                   Synchronize media files with remote storage.
            sampledata:deploy                                     Deploy sample data modules for composer-based Magento installations
            sampledata:remove                                     Remove all sample data packages from composer.json
            sampledata:reset                                      Reset all sample data modules for re-installation
            security:recaptcha:disable-for-user-forgot-password   Disable reCAPTCHA for admin user forgot password form
            security:recaptcha:disable-for-user-login             Disable reCAPTCHA for admin user login form
            setup:backup                                          Takes backup of Magento Application code base, media and database
            setup:config:set                                      Creates or modifies the deployment configuration
            setup:db-data:upgrade                                 Installs and upgrades data in the DB
            setup:db-declaration:generate-patch                   Generate patch and put it in specific folder.
            setup:db-declaration:generate-whitelist               Generate whitelist of tables and columns that are allowed to be edited by declaration installer
            setup:db-schema:upgrade                               Installs and upgrades the DB schema
            setup:db:status                                       Checks if DB schema or data requires upgrade
            setup:di:compile                                      Generates DI configuration and all missing classes that can be auto-generated
            setup:install                                         Installs the Magento application
            setup:performance:generate-fixtures                   Generates fixtures
            setup:rollback                                        Rolls back Magento Application codebase, media and database
            setup:static-content:deploy                           Deploys static view files
            setup:store-config:set                                Installs the store configuration. Deprecated since 2.2.0. Use config:set instead
            setup:uninstall                                       Uninstalls the Magento application
            setup:upgrade                                         Upgrades the Magento application, DB data, and schema
            store:list                                            Displays the list of stores
            store:website:list                                    Displays the list of websites
            theme:uninstall                                       Uninstalls theme
            varnish:vcl:generate                                  Generates Varnish VCL and echos it to the command line

    ``



 Magento CLI 2.4.6
=================

* [`completion`](#completion)
* [`help`](#help)
* [`list`](#list)

**admin:**

* [`admin:adobe-ims:disable`](#adminadobe-imsdisable)
* [`admin:adobe-ims:enable`](#adminadobe-imsenable)
* [`admin:adobe-ims:info`](#adminadobe-imsinfo)
* [`admin:adobe-ims:status`](#adminadobe-imsstatus)
* [`admin:user:create`](#adminusercreate)
* [`admin:user:unlock`](#adminuserunlock)

**app:**

* [`app:config:dump`](#appconfigdump)
* [`app:config:import`](#appconfigimport)
* [`app:config:status`](#appconfigstatus)

**braintree:**

* [`braintree:migrate`](#braintreemigrate)

**cache:**

* [`cache:clean`](#cacheclean)
* [`cache:disable`](#cachedisable)
* [`cache:enable`](#cacheenable)
* [`cache:flush`](#cacheflush)
* [`cache:status`](#cachestatus)

**catalog:**

* [`catalog:images:resize`](#catalogimagesresize)
* [`catalog:product:attributes:cleanup`](#catalogproductattributescleanup)

**cms:**

* [`cms:wysiwyg:restrict`](#cmswysiwygrestrict)

**config:**

* [`config:sensitive:set`](#configsensitiveset)
* [`config:set`](#configset)
* [`config:show`](#configshow)

**cron:**

* [`cron:install`](#croninstall)
* [`cron:remove`](#cronremove)
* [`cron:run`](#cronrun)

**customer:**

* [`customer:hash:upgrade`](#customerhashupgrade)

**deploy:**

* [`deploy:mode:set`](#deploymodeset)
* [`deploy:mode:show`](#deploymodeshow)

**dev:**

* [`dev:di:info`](#devdiinfo)
* [`dev:email:newsletter-compatibility-check`](#devemailnewsletter-compatibility-check)
* [`dev:email:override-compatibility-check`](#devemailoverride-compatibility-check)
* [`dev:profiler:disable`](#devprofilerdisable)
* [`dev:profiler:enable`](#devprofilerenable)
* [`dev:query-log:disable`](#devquery-logdisable)
* [`dev:query-log:enable`](#devquery-logenable)
* [`dev:source-theme:deploy`](#devsource-themedeploy)
* [`dev:template-hints:disable`](#devtemplate-hintsdisable)
* [`dev:template-hints:enable`](#devtemplate-hintsenable)
* [`dev:template-hints:status`](#devtemplate-hintsstatus)
* [`dev:tests:run`](#devtestsrun)
* [`dev:urn-catalog:generate`](#devurn-cataloggenerate)
* [`dev:xml:convert`](#devxmlconvert)

**downloadable:**

* [`downloadable:domains:add`](#downloadabledomainsadd)
* [`downloadable:domains:remove`](#downloadabledomainsremove)
* [`downloadable:domains:show`](#downloadabledomainsshow)

**encryption:**

* [`encryption:payment-data:update`](#encryptionpayment-dataupdate)

**i18n:**

* [`i18n:collect-phrases`](#i18ncollect-phrases)
* [`i18n:pack`](#i18npack)
* [`i18n:uninstall`](#i18nuninstall)

**indexer:**

* [`indexer:info`](#indexerinfo)
* [`indexer:reindex`](#indexerreindex)
* [`indexer:reset`](#indexerreset)
* [`indexer:set-dimensions-mode`](#indexerset-dimensions-mode)
* [`indexer:set-mode`](#indexerset-mode)
* [`indexer:show-dimensions-mode`](#indexershow-dimensions-mode)
* [`indexer:show-mode`](#indexershow-mode)
* [`indexer:status`](#indexerstatus)

**info:**

* [`info:adminuri`](#infoadminuri)
* [`info:backups:list`](#infobackupslist)
* [`info:currency:list`](#infocurrencylist)
* [`info:dependencies:show-framework`](#infodependenciesshow-framework)
* [`info:dependencies:show-modules`](#infodependenciesshow-modules)
* [`info:dependencies:show-modules-circular`](#infodependenciesshow-modules-circular)
* [`info:language:list`](#infolanguagelist)
* [`info:timezone:list`](#infotimezonelist)

**inventory:**

* [`inventory:reservation:create-compensations`](#inventoryreservationcreate-compensations)
* [`inventory:reservation:list-inconsistencies`](#inventoryreservationlist-inconsistencies)

**inventory-geonames:**

* [`inventory-geonames:import`](#inventory-geonamesimport)

**maintenance:**

* [`maintenance:allow-ips`](#maintenanceallow-ips)
* [`maintenance:disable`](#maintenancedisable)
* [`maintenance:enable`](#maintenanceenable)
* [`maintenance:status`](#maintenancestatus)

**media-content:**

* [`media-content:sync`](#media-contentsync)

**media-gallery:**

* [`media-gallery:sync`](#media-gallerysync)

**module:**

* [`module:config:status`](#moduleconfigstatus)
* [`module:disable`](#moduledisable)
* [`module:enable`](#moduleenable)
* [`module:status`](#modulestatus)
* [`module:uninstall`](#moduleuninstall)

**newrelic:**

* [`newrelic:create:deploy-marker`](#newreliccreatedeploy-marker)

**queue:**

* [`queue:consumers:list`](#queueconsumerslist)
* [`queue:consumers:restart`](#queueconsumersrestart)
* [`queue:consumers:start`](#queueconsumersstart)

**remote-storage:**

* [`remote-storage:sync`](#remote-storagesync)

**sampledata:**

* [`sampledata:deploy`](#sampledatadeploy)
* [`sampledata:remove`](#sampledataremove)
* [`sampledata:reset`](#sampledatareset)

**security:**

* [`security:recaptcha:disable-for-user-forgot-password`](#securityrecaptchadisable-for-user-forgot-password)
* [`security:recaptcha:disable-for-user-login`](#securityrecaptchadisable-for-user-login)

**setup:**

* [`setup:backup`](#setupbackup)
* [`setup:config:set`](#setupconfigset)
* [`setup:db-data:upgrade`](#setupdb-dataupgrade)
* [`setup:db-declaration:generate-patch`](#setupdb-declarationgenerate-patch)
* [`setup:db-declaration:generate-whitelist`](#setupdb-declarationgenerate-whitelist)
* [`setup:db-schema:upgrade`](#setupdb-schemaupgrade)
* [`setup:db:status`](#setupdbstatus)
* [`setup:di:compile`](#setupdicompile)
* [`setup:install`](#setupinstall)
* [`setup:performance:generate-fixtures`](#setupperformancegenerate-fixtures)
* [`setup:rollback`](#setuprollback)
* [`setup:static-content:deploy`](#setupstatic-contentdeploy)
* [`setup:store-config:set`](#setupstore-configset)
* [`setup:uninstall`](#setupuninstall)
* [`setup:upgrade`](#setupupgrade)

**store:**

* [`store:list`](#storelist)
* [`store:website:list`](#storewebsitelist)

**theme:**

* [`theme:uninstall`](#themeuninstall)

**varnish:**

* [`varnish:vcl:generate`](#varnishvclgenerate)

`completion`
------------

Dump the shell completion script

### Usage

* `completion [--debug] [--] [<shell>]`

The completion command dumps the shell completion script required
to use shell autocompletion (currently only bash completion is supported).

Static installation
-------------------

Dump the script to a global completion file and restart your shell:

    bin/magento completion bash | sudo tee /etc/bash_completion.d/magento

Or dump the script to a local file and source it:

    bin/magento completion bash > completion.sh

    # source the file whenever you use the project
    source completion.sh

    # or add this line at the end of your "~/.bashrc" file:
    source /path/to/completion.sh

Dynamic installation
--------------------

Add this to the end of your shell configuration file (e.g. "~/.bashrc"):

    eval "$(C:\xampp\htdocs\mage246\bin\magento completion bash)"

### Arguments

#### `shell`

The shell type (e.g. "bash"), the value of the "$SHELL" env var will be used if this is not given

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--debug`

Tail the completion debug log

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`help`
------

Display help for a command

### Usage

* `help [--format FORMAT] [--raw] [--] [<command_name>]`

The help command displays help for a given command:

  bin/magento help list

You can also output the help in other formats by using the --format option:

  bin/magento help --format=xml list

To display the list of available commands, please use the list command.

### Arguments

#### `command_name`

The command name

* Is required: no
* Is array: no
* Default: `'help'`

### Options

#### `--format`

The output format (txt, xml, json, or md)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'txt'`

#### `--raw`

To output raw command help

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`list`
------

List commands

### Usage

* `list [--raw] [--format FORMAT] [--short] [--] [<namespace>]`

The list command lists all commands:

  bin/magento list

You can also display the commands for a specific namespace:

  bin/magento list test

You can also output the information in other formats by using the --format option:

  bin/magento list --format=xml

It's also possible to get raw list of commands (useful for embedding command runner):

  bin/magento list --raw

### Arguments

#### `namespace`

The namespace name

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--raw`

To output raw command list

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--format`

The output format (txt, xml, json, or md)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'txt'`

#### `--short`

To skip describing commands' arguments

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`admin:adobe-ims:disable`
-------------------------

Disable Adobe IMS Module

### Usage

* `admin:adobe-ims:disable`

Disable Adobe IMS Module

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`admin:adobe-ims:enable`
------------------------

Enable Adobe IMS Module.

### Usage

* `admin:adobe-ims:enable [-o|--organization-id [ORGANIZATION-ID]] [-c|--client-id [CLIENT-ID]] [-s|--client-secret [CLIENT-SECRET]] [-t|--2fa [2FA]]`

Enable Adobe IMS Module.

### Options

#### `--organization-id|-o`

Set Organization ID for Adobe IMS configuration. Required when enabling the module

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--client-id|-c`

Set the client ID for Adobe IMS configuration. Required when enabling the module

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--client-secret|-s`

Set the client Secret for Adobe IMS configuration. Required when enabling the module

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--2fa|-t`

Check if 2FA is enabled for Organization in Adobe Admin Console. Required when enabling the module

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`admin:adobe-ims:info`
----------------------

Information of Adobe IMS Module configuration

### Usage

* `admin:adobe-ims:info`

Information of Adobe IMS Module configuration

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`admin:adobe-ims:status`
------------------------

Status of Adobe IMS Module

### Usage

* `admin:adobe-ims:status`

Status of Adobe IMS Module

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`admin:user:create`
-------------------

Creates an administrator

### Usage

* `admin:user:create [--admin-user ADMIN-USER] [--admin-password ADMIN-PASSWORD] [--admin-email ADMIN-EMAIL] [--admin-firstname ADMIN-FIRSTNAME] [--admin-lastname ADMIN-LASTNAME] [--magento-init-params MAGENTO-INIT-PARAMS]`

Creates an administrator

### Options

#### `--admin-user`

(Required) Admin user

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-password`

(Required) Admin password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-email`

(Required) Admin email

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-firstname`

(Required) Admin first name

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-lastname`

(Required) Admin last name

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`admin:user:unlock`
-------------------

Unlock Admin Account

### Usage

* `admin:user:unlock <username>`

This command unlocks an admin account by its username.
To unlock:
      bin/magento admin:user:unlock username

### Arguments

#### `username`

The admin username to unlock

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`app:config:dump`
-----------------

Create dump of application

### Usage

* `app:config:dump [<config-types>...]`

Create dump of application

### Arguments

#### `config-types`

Space-separated list of config types or omit to dump all [scopes, system, themes, i18n]

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`app:config:import`
-------------------

Import data from shared configuration files to appropriate data storage

### Usage

* `app:config:import`

Import data from shared configuration files to appropriate data storage

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`app:config:status`
-------------------

Checks if config propagation requires update

### Usage

* `app:config:status`

Checks if config propagation requires update

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`braintree:migrate`
-------------------

Migrate stored cards from a Magento 1 database

### Usage

* `braintree:migrate [--host HOST] [--dbname DBNAME] [--username USERNAME] [--password PASSWORD]`

Migrate stored cards from a Magento 1 database

### Options

#### `--host`

Hostname/IP. Port is optional

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--dbname`

Database name

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--username`

Database username. Must have read access

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--password`

Password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cache:clean`
-------------

Cleans cache type(s)

### Usage

* `cache:clean [--bootstrap BOOTSTRAP] [--] [<types>...]`

Cleans cache type(s)

### Arguments

#### `types`

Space-separated list of cache types or omit to apply to all cache types.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--bootstrap`

add or override parameters of the bootstrap

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cache:disable`
---------------

Disables cache type(s)

### Usage

* `cache:disable [--bootstrap BOOTSTRAP] [--] [<types>...]`

Disables cache type(s)

### Arguments

#### `types`

Space-separated list of cache types or omit to apply to all cache types.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--bootstrap`

add or override parameters of the bootstrap

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cache:enable`
--------------

Enables cache type(s)

### Usage

* `cache:enable [--bootstrap BOOTSTRAP] [--] [<types>...]`

Enables cache type(s)

### Arguments

#### `types`

Space-separated list of cache types or omit to apply to all cache types.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--bootstrap`

add or override parameters of the bootstrap

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cache:flush`
-------------

Flushes cache storage used by cache type(s)

### Usage

* `cache:flush [--bootstrap BOOTSTRAP] [--] [<types>...]`

Flushes cache storage used by cache type(s)

### Arguments

#### `types`

Space-separated list of cache types or omit to apply to all cache types.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--bootstrap`

add or override parameters of the bootstrap

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cache:status`
--------------

Checks cache status

### Usage

* `cache:status [--bootstrap BOOTSTRAP]`

Checks cache status

### Options

#### `--bootstrap`

add or override parameters of the bootstrap

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`catalog:images:resize`
-----------------------

Creates resized product images

### Usage

* `catalog:images:resize [-a|--async] [--skip_hidden_images]`

Creates resized product images

### Options

#### `--async|-a`

Resize image in asynchronous mode

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--skip_hidden_images`

Do not process images marked as hidden from product page

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`catalog:product:attributes:cleanup`
------------------------------------

Removes unused product attributes.

### Usage

* `catalog:product:attributes:cleanup`

Removes unused product attributes.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cms:wysiwyg:restrict`
----------------------

Set whether to enforce user HTML content validation or show a warning instead

### Usage

* `cms:wysiwyg:restrict <restrict>`

Set whether to enforce user HTML content validation or show a warning instead

### Arguments

#### `restrict`

y\n

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`config:sensitive:set`
----------------------

Set sensitive configuration values

### Usage

* `config:sensitive:set [-i|--interactive] [--scope [SCOPE]] [--scope-code [SCOPE-CODE]] [--] [<path> [<value>]]`

Set sensitive configuration values

### Arguments

#### `path`

Configuration path for example group/section/field_name

* Is required: no
* Is array: no
* Default: `NULL`

#### `value`

Configuration value

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--interactive|-i`

Enable interactive mode to set all sensitive variables

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--scope`

Scope for configuration, if not set use 'default'

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'default'`

#### `--scope-code`

Scope code for configuration, empty string by default

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`config:set`
------------

Change system configuration

### Usage

* `config:set [--scope SCOPE] [--scope-code SCOPE-CODE] [-e|--lock-env] [-c|--lock-config] [-l|--lock] [--] <path> <value>`

Change system configuration

### Arguments

#### `path`

Configuration path in format section/group/field_name

* Is required: yes
* Is array: no
* Default: `NULL`

#### `value`

Configuration value

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--scope`

Configuration scope (default, website, or store)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'default'`

#### `--scope-code`

Scope code (required only if scope is not 'default')

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-env|-e`

Lock value which prevents modification in the Admin (will be saved in app/etc/env.php)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--lock-config|-c`

Lock and share value with other installations, prevents modification in the Admin (will be saved in app/etc/config.php)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--lock|-l`

Deprecated, use the --lock-env option instead.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`config:show`
-------------

Shows configuration value for given path. If path is not specified, all saved values will be shown

### Usage

* `config:show [--scope [SCOPE]] [--scope-code [SCOPE-CODE]] [--] [<path>]`

Shows configuration value for given path. If path is not specified, all saved values will be shown

### Arguments

#### `path`

Configuration path, for example section_id/group_id/field_id

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--scope`

Scope for configuration, if not specified, then 'default' scope will be used

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'default'`

#### `--scope-code`

Scope code (required only if scope is not `default`)

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cron:install`
--------------

Generates and installs crontab for current user

### Usage

* `cron:install [-f|--force] [-d|--non-optional]`

Generates and installs crontab for current user

### Options

#### `--force|-f`

Force install tasks

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--non-optional|-d`

Install only the non-optional (default) tasks

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cron:remove`
-------------

Removes tasks from crontab

### Usage

* `cron:remove`

Removes tasks from crontab

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`cron:run`
----------

Runs jobs by schedule

### Usage

* `cron:run [--group GROUP] [--bootstrap BOOTSTRAP]`

Runs jobs by schedule

### Options

#### `--group`

Run jobs only from specified group

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--bootstrap`

Add or override parameters of the bootstrap

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`customer:hash:upgrade`
-----------------------

Upgrade customer's hash according to the latest algorithm

### Usage

* `customer:hash:upgrade`

Upgrade customer's hash according to the latest algorithm

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`deploy:mode:set`
-----------------

Set application mode.

### Usage

* `deploy:mode:set [-s|--skip-compilation] [--] <mode>`

Set application mode.

### Arguments

#### `mode`

The application mode to set. Available options are "developer" or "production"

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--skip-compilation|-s`

Skips the clearing and regeneration of static content (generated code, preprocessed CSS, and assets in pub/static/)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`deploy:mode:show`
------------------

Displays current application mode.

### Usage

* `deploy:mode:show`

Displays current application mode.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:di:info`
-------------

Provides information on Dependency Injection configuration for the Command.

### Usage

* `dev:di:info <class>`

Provides information on Dependency Injection configuration for the Command.

### Arguments

#### `class`

Class name

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:email:newsletter-compatibility-check`
------------------------------------------

Scans newsletter templates for potential variable usage compatibility issues

### Usage

* `dev:email:newsletter-compatibility-check`

Scans newsletter templates for potential variable usage compatibility issues

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:email:override-compatibility-check`
----------------------------------------

Scans email template overrides for potential variable usage compatibility issues

### Usage

* `dev:email:override-compatibility-check`

Scans email template overrides for potential variable usage compatibility issues

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:profiler:disable`
----------------------

Disable the profiler.

### Usage

* `dev:profiler:disable`

Disable the profiler.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:profiler:enable`
---------------------

Enable the profiler.

### Usage

* `dev:profiler:enable [<type>]`

Enable the profiler.

### Arguments

#### `type`

Profiler type

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:query-log:disable`
-----------------------

Disable DB query logging

### Usage

* `dev:query-log:disable`

Disable DB query logging

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:query-log:enable`
----------------------

Enable DB query logging

### Usage

* `dev:query-log:enable [--include-all-queries [INCLUDE-ALL-QUERIES]] [--query-time-threshold [QUERY-TIME-THRESHOLD]] [--include-call-stack [INCLUDE-CALL-STACK]]`

Enable DB query logging

### Options

#### `--include-all-queries`

Log all queries. [true|false]

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'true'`

#### `--query-time-threshold`

Query time thresholds.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'0.001'`

#### `--include-call-stack`

Include call stack. [true|false]

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'true'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:source-theme:deploy`
-------------------------

Collects and publishes source files for theme.

### Usage

* `dev:source-theme:deploy [--type TYPE] [--locale LOCALE] [--area AREA] [--theme THEME] [--] [<file>...]`

Collects and publishes source files for theme.

### Arguments

#### `file`

Files to pre-process (file should be specified without extension)

* Is required: no
* Is array: yes
* Default: `array (  0 => 'css/styles-m',  1 => 'css/styles-l',)`

### Options

#### `--type`

Type of source files: [less]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'less'`

#### `--locale`

Locale: [en_US]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'en_US'`

#### `--area`

Area: [frontend|adminhtml]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'frontend'`

#### `--theme`

Theme: [Vendor/theme]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'Magento/luma'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:template-hints:disable`
----------------------------

Disable frontend template hints. A cache flush might be required.

### Usage

* `dev:template-hints:disable`

Disable frontend template hints. A cache flush might be required.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:template-hints:enable`
---------------------------

Enable frontend template hints. A cache flush might be required.

### Usage

* `dev:template-hints:enable`

Enable frontend template hints. A cache flush might be required.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:template-hints:status`
---------------------------

Show frontend template hints status.

### Usage

* `dev:template-hints:status`

Show frontend template hints status.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:tests:run`
---------------

Runs tests

### Usage

* `dev:tests:run [-c|--arguments ARGUMENTS] [--] [<type>]`

Runs tests

### Arguments

#### `type`

Type of test to run. Available types: all, unit, integration, integration-all, static, static-all, integrity, legacy, default

* Is required: no
* Is array: no
* Default: `'default'`

### Options

#### `--arguments|-c`

Additional arguments for PHPUnit. Example: "-c'--filter=MyTest'" (no spaces)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:urn-catalog:generate`
--------------------------

Generates the catalog of URNs to *.xsd mappings for the IDE to highlight xml.

### Usage

* `dev:urn-catalog:generate [--ide IDE] [--] <path>`

Generates the catalog of URNs to *.xsd mappings for the IDE to highlight xml.

### Arguments

#### `path`

Path to file to output the catalog. For PhpStorm use .idea/misc.xml

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--ide`

Format in which catalog will be generated. Supported: [phpstorm, vscode]

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'phpstorm'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`dev:xml:convert`
-----------------

Converts XML file using XSL style sheets

### Usage

* `dev:xml:convert [-o|--overwrite] [--] <xml-file> <processor>`

Converts XML file using XSL style sheets

### Arguments

#### `xml-file`

Path to XML file that going to be transformed

* Is required: yes
* Is array: no
* Default: `NULL`

#### `processor`

Path to XSL style sheet that going to be applied to XML file

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--overwrite|-o`

Overwrite XML file

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`downloadable:domains:add`
--------------------------

Add domains to the downloadable domains whitelist

### Usage

* `downloadable:domains:add [<domains>...]`

Add domains to the downloadable domains whitelist

### Arguments

#### `domains`

Domains name

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`downloadable:domains:remove`
-----------------------------

Remove domains from the downloadable domains whitelist

### Usage

* `downloadable:domains:remove [<domains>...]`

Remove domains from the downloadable domains whitelist

### Arguments

#### `domains`

Domain names

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`downloadable:domains:show`
---------------------------

Display downloadable domains whitelist

### Usage

* `downloadable:domains:show`

Display downloadable domains whitelist

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`encryption:payment-data:update`
--------------------------------

Re-encrypts encrypted credit card data with latest encryption cipher.

### Usage

* `encryption:payment-data:update`

Re-encrypts encrypted credit card data with latest encryption cipher.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`i18n:collect-phrases`
----------------------

Discovers phrases in the codebase

### Usage

* `i18n:collect-phrases [-o|--output OUTPUT] [-m|--magento] [--] [<directory>]`

Discovers phrases in the codebase

### Arguments

#### `directory`

Directory path to parse. Not needed if --magento flag is set

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--output|-o`

Path (including filename) to an output file. With no file specified, defaults to stdout.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--magento|-m`

Use the --magento parameter to parse the current Magento codebase. Omit the parameter if a directory is specified.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`i18n:pack`
-----------

Saves language package

### Usage

* `i18n:pack [-m|--mode MODE] [-d|--allow-duplicates] [--] <source> <locale>`

Saves language package

### Arguments

#### `source`

Path to source dictionary file with translations

* Is required: yes
* Is array: no
* Default: `NULL`

#### `locale`

Target locale for dictionary, for example "de_DE"

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--mode|-m`

Save mode for dictionary
- "replace" - replace language pack by new one
- "merge" - merge language packages, by default "replace"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'replace'`

#### `--allow-duplicates|-d`

Use the --allow-duplicates parameter to allow saving duplicates of translate. Otherwise omit the parameter.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`i18n:uninstall`
----------------

Uninstalls language packages

### Usage

* `i18n:uninstall [-b|--backup-code] [--] <package>...`

Uninstalls language packages

### Arguments

#### `package`

Language package name

* Is required: yes
* Is array: yes
* Default: `array ()`

### Options

#### `--backup-code|-b`

Take code and configuration files backup (excluding temporary files)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:info`
--------------

Shows allowed Indexers

### Usage

* `indexer:info`

Shows allowed Indexers

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:reindex`
-----------------

Reindexes Data

### Usage

* `indexer:reindex [<index>...]`

Reindexes Data

### Arguments

#### `index`

Space-separated list of index types or omit to apply to all indexes.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:reset`
---------------

Resets indexer status to invalid

### Usage

* `indexer:reset [<index>...]`

Resets indexer status to invalid

### Arguments

#### `index`

Space-separated list of index types or omit to apply to all indexes.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:set-dimensions-mode`
-----------------------------

Set Indexer Dimensions Mode

### Usage

* `indexer:set-dimensions-mode [<indexer> [<mode>]]`

Set Indexer Dimensions Mode

### Arguments

#### `indexer`

Indexer name [catalog_product_price]

* Is required: no
* Is array: no
* Default: `NULL`

#### `mode`

Indexer dimension modes
catalog_product_price          none,website,customer_group,website_and_customer_group


* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:set-mode`
------------------

Sets index mode type

### Usage

* `indexer:set-mode [<mode> [<index>...]]`

Sets index mode type

### Arguments

#### `mode`

Indexer mode type [realtime|schedule]

* Is required: no
* Is array: no
* Default: `NULL`

#### `index`

Space-separated list of index types or omit to apply to all indexes.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:show-dimensions-mode`
------------------------------

Shows Indexer Dimension Mode

### Usage

* `indexer:show-dimensions-mode [<indexer>...]`

Shows Indexer Dimension Mode

### Arguments

#### `indexer`

Space-separated list of index types or omit to apply to all indexes (catalog_product_price)

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:show-mode`
-------------------

Shows Index Mode

### Usage

* `indexer:show-mode [<index>...]`

Shows Index Mode

### Arguments

#### `index`

Space-separated list of index types or omit to apply to all indexes.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`indexer:status`
----------------

Shows status of Indexer

### Usage

* `indexer:status [<index>...]`

Shows status of Indexer

### Arguments

#### `index`

Space-separated list of index types or omit to apply to all indexes.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:adminuri`
---------------

Displays the Magento Admin URI

### Usage

* `info:adminuri`

Displays the Magento Admin URI

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:backups:list`
-------------------

Prints list of available backup files

### Usage

* `info:backups:list`

Prints list of available backup files

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:currency:list`
--------------------

Displays the list of available currencies

### Usage

* `info:currency:list`

Displays the list of available currencies

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:dependencies:show-framework`
----------------------------------

Shows number of dependencies on Magento framework

### Usage

* `info:dependencies:show-framework [-o|--output OUTPUT]`

Shows number of dependencies on Magento framework

### Options

#### `--output|-o`

Report filename

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'framework-dependencies.csv'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:dependencies:show-modules`
--------------------------------

Shows number of dependencies between modules

### Usage

* `info:dependencies:show-modules [-o|--output OUTPUT]`

Shows number of dependencies between modules

### Options

#### `--output|-o`

Report filename

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'modules-dependencies.csv'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:dependencies:show-modules-circular`
-----------------------------------------

Shows number of circular dependencies between modules

### Usage

* `info:dependencies:show-modules-circular [-o|--output OUTPUT]`

Shows number of circular dependencies between modules

### Options

#### `--output|-o`

Report filename

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'modules-circular-dependencies.csv'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:language:list`
--------------------

Displays the list of available language locales

### Usage

* `info:language:list`

Displays the list of available language locales

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`info:timezone:list`
--------------------

Displays the list of available timezones

### Usage

* `info:timezone:list`

Displays the list of available timezones

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`inventory:reservation:create-compensations`
--------------------------------------------

Create reservations by provided compensation arguments

### Usage

* `inventory:reservation:create-compensations [-r|--raw] [--] [<compensations>...]`

Create reservations by provided compensation arguments

### Arguments

#### `compensations`

List of compensation arguments in format "<ORDER_INCREMENT_ID>:<SKU>:<QUANTITY>:<STOCK-ID>"

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--raw|-r`

Raw output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`inventory:reservation:list-inconsistencies`
--------------------------------------------

Show all orders and products with salable quantity inconsistencies

### Usage

* `inventory:reservation:list-inconsistencies [-c|--complete-orders] [-i|--incomplete-orders] [-b|--bunch-size [BUNCH-SIZE]] [-r|--raw]`

Show all orders and products with salable quantity inconsistencies

### Options

#### `--complete-orders|-c`

Show only inconsistencies for complete orders

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--incomplete-orders|-i`

Show only inconsistencies for incomplete orders

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--bunch-size|-b`

Defines how many orders will be loaded at once

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `50`

#### `--raw|-r`

Raw output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`inventory-geonames:import`
---------------------------

Download and import geo names for source selection algorithm

### Usage

* `inventory-geonames:import <countries>...`

Download and import geo names for source selection algorithm

### Arguments

#### `countries`

List of country codes to import

* Is required: yes
* Is array: yes
* Default: `array ()`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`maintenance:allow-ips`
-----------------------

Sets maintenance mode exempt IPs

### Usage

* `maintenance:allow-ips [--none] [--add] [--magento-init-params MAGENTO-INIT-PARAMS] [--] [<ip>...]`

Sets maintenance mode exempt IPs

### Arguments

#### `ip`

Allowed IP addresses

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--none`

Clear allowed IP addresses

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--add`

Add the IP address to existing list

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`maintenance:disable`
---------------------

Disables maintenance mode

### Usage

* `maintenance:disable [--ip IP] [--magento-init-params MAGENTO-INIT-PARAMS]`

Disables maintenance mode

### Options

#### `--ip`

Allowed IP addresses (use 'none' to clear allowed IP list)

* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Is negatable: no
* Default: `array ()`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`maintenance:enable`
--------------------

Enables maintenance mode

### Usage

* `maintenance:enable [--ip IP] [--magento-init-params MAGENTO-INIT-PARAMS]`

Enables maintenance mode

### Options

#### `--ip`

Allowed IP addresses (use 'none' to clear allowed IP list)

* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Is negatable: no
* Default: `array ()`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`maintenance:status`
--------------------

Displays maintenance mode status

### Usage

* `maintenance:status [--magento-init-params MAGENTO-INIT-PARAMS]`

Displays maintenance mode status

### Options

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`media-content:sync`
--------------------

Synchronize content with assets

### Usage

* `media-content:sync`

Synchronize content with assets

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`media-gallery:sync`
--------------------

Synchronize media storage and media assets in the database

### Usage

* `media-gallery:sync`

Synchronize media storage and media assets in the database

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`module:config:status`
----------------------

Checks the modules configuration in the 'app/etc/config.php' file and reports if they are up to date or not

### Usage

* `module:config:status`

Checks the modules configuration in the 'app/etc/config.php' file and reports if they are up to date or not

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`module:disable`
----------------

Disables specified modules

### Usage

* `module:disable [-f|--force] [--all] [-c|--clear-static-content] [--magento-init-params MAGENTO-INIT-PARAMS] [--] [<module>...]`

Disables specified modules

### Arguments

#### `module`

Name of the module

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--force|-f`

Bypass dependencies check

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--all`

Disable all modules

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--clear-static-content|-c`

Clear generated static view files. Necessary, if the module(s) have static view files

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`module:enable`
---------------

Enables specified modules

### Usage

* `module:enable [-f|--force] [--all] [-c|--clear-static-content] [--magento-init-params MAGENTO-INIT-PARAMS] [--] [<module>...]`

Enables specified modules

### Arguments

#### `module`

Name of the module

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--force|-f`

Bypass dependencies check

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--all`

Enable all modules

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--clear-static-content|-c`

Clear generated static view files. Necessary, if the module(s) have static view files

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`module:status`
---------------

Displays status of modules

### Usage

* `module:status [--enabled] [--disabled] [--magento-init-params MAGENTO-INIT-PARAMS] [--] [<module-names>...]`

Displays status of modules

### Arguments

#### `module-names`

Optional module name

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--enabled`

Print only enabled modules

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--disabled`

Print only disabled modules

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`module:uninstall`
------------------

Uninstalls modules installed by composer

### Usage

* `module:uninstall [-r|--remove-data] [--backup-code] [--backup-media] [--backup-db] [--non-composer] [-c|--clear-static-content] [--magento-init-params MAGENTO-INIT-PARAMS] [--] <module>...`

Uninstalls modules installed by composer

### Arguments

#### `module`

Name of the module

* Is required: yes
* Is array: yes
* Default: `array ()`

### Options

#### `--remove-data|-r`

Remove data installed by module(s)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--backup-code`

Take code and configuration files backup (excluding temporary files)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--backup-media`

Take media backup

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--backup-db`

Take complete database backup

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--non-composer`

All modules, that will be past here will be non composer based

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--clear-static-content|-c`

Clear generated static view files. Necessary, if the module(s) have static view files

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`newrelic:create:deploy-marker`
-------------------------------

Check the deploy queue for entries and create an appropriate deploy marker.

### Usage

* `newrelic:create:deploy-marker <message> <change_log> [<user> [<revision>]]`

Check the deploy queue for entries and create an appropriate deploy marker.

### Arguments

#### `message`

Deploy Message?

* Is required: yes
* Is array: no
* Default: `NULL`

#### `change_log`

Change Log?

* Is required: yes
* Is array: no
* Default: `NULL`

#### `user`

Deployment User

* Is required: no
* Is array: no
* Default: `NULL`

#### `revision`

Revision

* Is required: no
* Is array: no
* Default: `NULL`

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`queue:consumers:list`
----------------------

List of MessageQueue consumers

### Usage

* `queue:consumers:list`

This command shows list of MessageQueue consumers.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`queue:consumers:restart`
-------------------------

Restart MessageQueue consumers

### Usage

* `queue:consumers:restart`

Command put poison pill for MessageQueue consumers and force to restart them after next status check.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`queue:consumers:start`
-----------------------

Start MessageQueue consumer

### Usage

* `queue:consumers:start [--max-messages MAX-MESSAGES] [--batch-size BATCH-SIZE] [--area-code AREA-CODE] [--single-thread] [--multi-process [MULTI-PROCESS]] [--pid-file-path PID-FILE-PATH] [--] <consumer>`

This command starts MessageQueue consumer by its name.

To start consumer which will process all queued messages and terminate execution:

    bin/magento queue:consumers:start someConsumer

To specify the number of messages which should be processed by consumer before its termination:

    bin/magento queue:consumers:start someConsumer --max-messages=50

To specify the number of messages per batch for the batch consumer:

    bin/magento queue:consumers:start someConsumer --batch-size=500

To specify the preferred area:

    bin/magento queue:consumers:start someConsumer --area-code='adminhtml'

To do not run multiple copies of one consumer simultaneously:

    bin/magento queue:consumers:start someConsumer --single-thread

To save PID enter path (This option is deprecated, use --single-thread instead):

    bin/magento queue:consumers:start someConsumer --pid-file-path='/var/someConsumer.pid'

To define the number of processes per consumer:

    bin/magento queue:consumers:start someConsumer --multi-process=4

### Arguments

#### `consumer`

The name of the consumer to be started.

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--max-messages`

The number of messages to be processed by the consumer before process termination. If not specified - terminate after processing all queued messages.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--batch-size`

The number of messages per batch. Applicable for the batch consumer only.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--area-code`

The preferred area (global, adminhtml, etc...) default is global.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--single-thread`

This option prevents running multiple copies of one consumer simultaneously.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--multi-process`

The number of processes per consumer.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--pid-file-path`

The file path for saving PID (This option is deprecated, use --single-thread instead)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`remote-storage:sync`
---------------------

Synchronize media files with remote storage.

### Usage

* `remote-storage:sync`

Synchronize media files with remote storage.

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`sampledata:deploy`
-------------------

Deploy sample data modules for composer-based Magento installations

### Usage

* `sampledata:deploy [--no-update]`

Deploy sample data modules for composer-based Magento installations

### Options

#### `--no-update`

Update composer.json without executing composer update

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`sampledata:remove`
-------------------

Remove all sample data packages from composer.json

### Usage

* `sampledata:remove [--no-update]`

Remove all sample data packages from composer.json

### Options

#### `--no-update`

Update composer.json without executing composer update

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`sampledata:reset`
------------------

Reset all sample data modules for re-installation

### Usage

* `sampledata:reset`

Reset all sample data modules for re-installation

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`security:recaptcha:disable-for-user-forgot-password`
-----------------------------------------------------

Disable reCAPTCHA for admin user forgot password form

### Usage

* `security:recaptcha:disable-for-user-forgot-password`

Disable reCAPTCHA for admin user forgot password form

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`security:recaptcha:disable-for-user-login`
-------------------------------------------

Disable reCAPTCHA for admin user login form

### Usage

* `security:recaptcha:disable-for-user-login`

Disable reCAPTCHA for admin user login form

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:backup`
--------------

Takes backup of Magento Application code base, media and database

### Usage

* `setup:backup [--code] [--media] [--db] [--magento-init-params MAGENTO-INIT-PARAMS]`

Takes backup of Magento Application code base, media and database

### Options

#### `--code`

Take code and configuration files backup (excluding temporary files)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--media`

Take media backup

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--db`

Take complete database backup

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:config:set`
------------------

Creates or modifies the deployment configuration

### Usage

* `setup:config:set [--backend-frontname BACKEND-FRONTNAME] [--enable-debug-logging ENABLE-DEBUG-LOGGING] [--enable-syslog-logging ENABLE-SYSLOG-LOGGING] [--id_salt ID_SALT] [--remote-storage-driver REMOTE-STORAGE-DRIVER] [--remote-storage-prefix REMOTE-STORAGE-PREFIX] [--remote-storage-endpoint REMOTE-STORAGE-ENDPOINT] [--remote-storage-bucket REMOTE-STORAGE-BUCKET] [--remote-storage-region REMOTE-STORAGE-REGION] [--remote-storage-key REMOTE-STORAGE-KEY] [--remote-storage-secret REMOTE-STORAGE-SECRET] [--remote-storage-path-style REMOTE-STORAGE-PATH-STYLE] [--amqp-host AMQP-HOST] [--amqp-port AMQP-PORT] [--amqp-user AMQP-USER] [--amqp-password AMQP-PASSWORD] [--amqp-virtualhost AMQP-VIRTUALHOST] [--amqp-ssl AMQP-SSL] [--amqp-ssl-options AMQP-SSL-OPTIONS] [--consumers-wait-for-messages CONSUMERS-WAIT-FOR-MESSAGES] [--queue-default-connection QUEUE-DEFAULT-CONNECTION] [--key KEY] [--db-host DB-HOST] [--db-name DB-NAME] [--db-user DB-USER] [--db-engine DB-ENGINE] [--db-password DB-PASSWORD] [--db-prefix DB-PREFIX] [--db-model DB-MODEL] [--db-init-statements DB-INIT-STATEMENTS] [-s|--skip-db-validation] [--http-cache-hosts HTTP-CACHE-HOSTS] [--db-ssl-key DB-SSL-KEY] [--db-ssl-cert DB-SSL-CERT] [--db-ssl-ca DB-SSL-CA] [--db-ssl-verify] [--session-save SESSION-SAVE] [--session-save-redis-host SESSION-SAVE-REDIS-HOST] [--session-save-redis-port SESSION-SAVE-REDIS-PORT] [--session-save-redis-password SESSION-SAVE-REDIS-PASSWORD] [--session-save-redis-timeout SESSION-SAVE-REDIS-TIMEOUT] [--session-save-redis-persistent-id SESSION-SAVE-REDIS-PERSISTENT-ID] [--session-save-redis-db SESSION-SAVE-REDIS-DB] [--session-save-redis-compression-threshold SESSION-SAVE-REDIS-COMPRESSION-THRESHOLD] [--session-save-redis-compression-lib SESSION-SAVE-REDIS-COMPRESSION-LIB] [--session-save-redis-log-level SESSION-SAVE-REDIS-LOG-LEVEL] [--session-save-redis-max-concurrency SESSION-SAVE-REDIS-MAX-CONCURRENCY] [--session-save-redis-break-after-frontend SESSION-SAVE-REDIS-BREAK-AFTER-FRONTEND] [--session-save-redis-break-after-adminhtml SESSION-SAVE-REDIS-BREAK-AFTER-ADMINHTML] [--session-save-redis-first-lifetime SESSION-SAVE-REDIS-FIRST-LIFETIME] [--session-save-redis-bot-first-lifetime SESSION-SAVE-REDIS-BOT-FIRST-LIFETIME] [--session-save-redis-bot-lifetime SESSION-SAVE-REDIS-BOT-LIFETIME] [--session-save-redis-disable-locking SESSION-SAVE-REDIS-DISABLE-LOCKING] [--session-save-redis-min-lifetime SESSION-SAVE-REDIS-MIN-LIFETIME] [--session-save-redis-max-lifetime SESSION-SAVE-REDIS-MAX-LIFETIME] [--session-save-redis-sentinel-master SESSION-SAVE-REDIS-SENTINEL-MASTER] [--session-save-redis-sentinel-servers SESSION-SAVE-REDIS-SENTINEL-SERVERS] [--session-save-redis-sentinel-verify-master SESSION-SAVE-REDIS-SENTINEL-VERIFY-MASTER] [--session-save-redis-sentinel-connect-retries SESSION-SAVE-REDIS-SENTINEL-CONNECT-RETRIES] [--cache-backend CACHE-BACKEND] [--cache-backend-redis-server CACHE-BACKEND-REDIS-SERVER] [--cache-backend-redis-db CACHE-BACKEND-REDIS-DB] [--cache-backend-redis-port CACHE-BACKEND-REDIS-PORT] [--cache-backend-redis-password CACHE-BACKEND-REDIS-PASSWORD] [--cache-backend-redis-compress-data CACHE-BACKEND-REDIS-COMPRESS-DATA] [--cache-backend-redis-compression-lib CACHE-BACKEND-REDIS-COMPRESSION-LIB] [--cache-id-prefix CACHE-ID-PREFIX] [--allow-parallel-generation] [--page-cache PAGE-CACHE] [--page-cache-redis-server PAGE-CACHE-REDIS-SERVER] [--page-cache-redis-db PAGE-CACHE-REDIS-DB] [--page-cache-redis-port PAGE-CACHE-REDIS-PORT] [--page-cache-redis-password PAGE-CACHE-REDIS-PASSWORD] [--page-cache-redis-compress-data PAGE-CACHE-REDIS-COMPRESS-DATA] [--page-cache-redis-compression-lib PAGE-CACHE-REDIS-COMPRESSION-LIB] [--page-cache-id-prefix PAGE-CACHE-ID-PREFIX] [--lock-provider LOCK-PROVIDER] [--lock-db-prefix LOCK-DB-PREFIX] [--lock-zookeeper-host LOCK-ZOOKEEPER-HOST] [--lock-zookeeper-path LOCK-ZOOKEEPER-PATH] [--lock-file-path LOCK-FILE-PATH] [--document-root-is-pub DOCUMENT-ROOT-IS-PUB] [--magento-init-params MAGENTO-INIT-PARAMS]`

Creates or modifies the deployment configuration

### Options

#### `--backend-frontname`

Backend frontname (will be autogenerated if missing)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--enable-debug-logging`

Enable debug logging

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--enable-syslog-logging`

Enable syslog logging

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--id_salt`

GraphQl Salt

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-driver`

Remote storage driver

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-prefix`

Remote storage prefix

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--remote-storage-endpoint`

Remote storage endpoint

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-bucket`

Remote storage bucket

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-region`

Remote storage region

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-key`

Remote storage access key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--remote-storage-secret`

Remote storage secret key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--remote-storage-path-style`

Remote storage path style

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'0'`

#### `--amqp-host`

Amqp server host

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-port`

Amqp server port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'5672'`

#### `--amqp-user`

Amqp server username

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-password`

Amqp server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-virtualhost`

Amqp virtualhost

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'/'`

#### `--amqp-ssl`

Amqp SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-ssl-options`

Amqp SSL Options (JSON)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--consumers-wait-for-messages`

Should consumers wait for a message from the queue? 1 - Yes, 0 - No

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--queue-default-connection`

Message queues default connection. Can be 'db', 'amqp' or a custom queue system.The queue system must be installed and configured, otherwise messages won't be processed correctly.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--key`

Encryption key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-host`

Database server host

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-name`

Database name

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-user`

Database server username

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-engine`

Database server engine

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-password`

Database server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-prefix`

Database table prefix

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-model`

Database type

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-init-statements`

Database  initial set of commands

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--skip-db-validation|-s`

If specified, then db connection validation will be skipped

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--http-cache-hosts`

http Cache hosts

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-ssl-key`

Full path of client key file in order to establish db connection through SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--db-ssl-cert`

Full path of client certificate file in order to establish db connection through SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--db-ssl-ca`

Full path of server certificate file in order to establish db connection through SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--db-ssl-verify`

Verify server certification

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--session-save`

Session save handler

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-host`

Fully qualified host name, IP address, or absolute path if using UNIX sockets

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-port`

Redis server listen port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-password`

Redis server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-timeout`

Connection timeout, in seconds

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-persistent-id`

Unique string to enable persistent connections

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-db`

Redis database number

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-compression-threshold`

Redis compression threshold

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-compression-lib`

Redis compression library. Values: gzip (default), lzf, lz4, snappy

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-log-level`

Redis log level. Values: 0 (least verbose) to 7 (most verbose)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-max-concurrency`

Maximum number of processes that can wait for a lock on one session

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-break-after-frontend`

Number of seconds to wait before trying to break a lock for frontend session

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-break-after-adminhtml`

Number of seconds to wait before trying to break a lock for Admin session

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-first-lifetime`

Lifetime, in seconds, of session for non-bots on the first write (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-bot-first-lifetime`

Lifetime, in seconds, of session for bots on the first write (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-bot-lifetime`

Lifetime of session for bots on subsequent writes (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-disable-locking`

Redis disable locking. Values: false (default), true

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-min-lifetime`

Redis min session lifetime, in seconds

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-max-lifetime`

Redis max session lifetime, in seconds

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-master`

Redis Sentinel master

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-servers`

Redis Sentinel servers, comma separated

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-verify-master`

Redis Sentinel verify master. Values: false (default), true

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-connect-retries`

Redis Sentinel connect retries.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend`

Default cache handler

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-server`

Redis server

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-db`

Database number for the cache

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-port`

Redis server listen port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-password`

Redis server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-compress-data`

Set to 0 to disable compression (default is 1, enabled)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-compression-lib`

Compression lib to use [snappy,lzf,l4z,zstd,gzip] (leave blank to determine automatically)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-id-prefix`

ID prefix for cache keys

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--allow-parallel-generation`

Allow generate cache in non-blocking way

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--page-cache`

Default cache handler

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-server`

Redis server

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-db`

Database number for the cache

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-port`

Redis server listen port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-password`

Redis server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-compress-data`

Set to 1 to compress the full page cache (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-compression-lib`

Compression library to use [snappy,lzf,l4z,zstd,gzip] (leave blank to determine automatically)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-id-prefix`

ID prefix for cache keys

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-provider`

Lock provider name

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-db-prefix`

Installation specific lock prefix to avoid lock conflicts

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-zookeeper-host`

Host and port to connect to Zookeeper cluster. For example: 127.0.0.1:2181

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-zookeeper-path`

The path where Zookeeper will save locks. The default path is: /magento/locks

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-file-path`

The path where file locks will be saved.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--document-root-is-pub`

Flag to show is Pub is on root, can be true or false only

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:db-data:upgrade`
-----------------------

Installs and upgrades data in the DB

### Usage

* `setup:db-data:upgrade [--magento-init-params MAGENTO-INIT-PARAMS]`

Installs and upgrades data in the DB

### Options

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:db-declaration:generate-patch`
-------------------------------------

Generate patch and put it in specific folder.

### Usage

* `setup:db-declaration:generate-patch [--revertable [REVERTABLE]] [--type [TYPE]] [--] <module> <patch>`

Generate patch and put it in specific folder.

### Arguments

#### `module`

Module name

* Is required: yes
* Is array: no
* Default: `NULL`

#### `patch`

Patch name

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--revertable`

Check whether patch is revertable or not.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--type`

Find out what type of patch should be generated. Available values: `data`, `schema`.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'data'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:db-declaration:generate-whitelist`
-----------------------------------------

Generate whitelist of tables and columns that are allowed to be edited by declaration installer

### Usage

* `setup:db-declaration:generate-whitelist [--module-name [MODULE-NAME]]`

Generate whitelist of tables and columns that are allowed to be edited by declaration installer

### Options

#### `--module-name`

Name of the module where whitelist will be generated

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'all'`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:db-schema:upgrade`
-------------------------

Installs and upgrades the DB schema

### Usage

* `setup:db-schema:upgrade [--convert-old-scripts [CONVERT-OLD-SCRIPTS]] [--magento-init-params MAGENTO-INIT-PARAMS]`

Installs and upgrades the DB schema

### Options

#### `--convert-old-scripts`

Allows to convert old scripts (InstallSchema, UpgradeSchema) to db_schema.xml format

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:db:status`
-----------------

Checks if DB schema or data requires upgrade

### Usage

* `setup:db:status [--magento-init-params MAGENTO-INIT-PARAMS]`

Checks if DB schema or data requires upgrade

### Options

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:di:compile`
------------------

Generates DI configuration and all missing classes that can be auto-generated

### Usage

* `setup:di:compile`

Generates DI configuration and all missing classes that can be auto-generated

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:install`
---------------

Installs the Magento application

### Usage

* `setup:install [--backend-frontname BACKEND-FRONTNAME] [--enable-debug-logging ENABLE-DEBUG-LOGGING] [--enable-syslog-logging ENABLE-SYSLOG-LOGGING] [--id_salt ID_SALT] [--remote-storage-driver REMOTE-STORAGE-DRIVER] [--remote-storage-prefix REMOTE-STORAGE-PREFIX] [--remote-storage-endpoint REMOTE-STORAGE-ENDPOINT] [--remote-storage-bucket REMOTE-STORAGE-BUCKET] [--remote-storage-region REMOTE-STORAGE-REGION] [--remote-storage-key REMOTE-STORAGE-KEY] [--remote-storage-secret REMOTE-STORAGE-SECRET] [--remote-storage-path-style REMOTE-STORAGE-PATH-STYLE] [--amqp-host AMQP-HOST] [--amqp-port AMQP-PORT] [--amqp-user AMQP-USER] [--amqp-password AMQP-PASSWORD] [--amqp-virtualhost AMQP-VIRTUALHOST] [--amqp-ssl AMQP-SSL] [--amqp-ssl-options AMQP-SSL-OPTIONS] [--consumers-wait-for-messages CONSUMERS-WAIT-FOR-MESSAGES] [--queue-default-connection QUEUE-DEFAULT-CONNECTION] [--key KEY] [--db-host DB-HOST] [--db-name DB-NAME] [--db-user DB-USER] [--db-engine DB-ENGINE] [--db-password DB-PASSWORD] [--db-prefix DB-PREFIX] [--db-model DB-MODEL] [--db-init-statements DB-INIT-STATEMENTS] [-s|--skip-db-validation] [--http-cache-hosts HTTP-CACHE-HOSTS] [--db-ssl-key DB-SSL-KEY] [--db-ssl-cert DB-SSL-CERT] [--db-ssl-ca DB-SSL-CA] [--db-ssl-verify] [--session-save SESSION-SAVE] [--session-save-redis-host SESSION-SAVE-REDIS-HOST] [--session-save-redis-port SESSION-SAVE-REDIS-PORT] [--session-save-redis-password SESSION-SAVE-REDIS-PASSWORD] [--session-save-redis-timeout SESSION-SAVE-REDIS-TIMEOUT] [--session-save-redis-persistent-id SESSION-SAVE-REDIS-PERSISTENT-ID] [--session-save-redis-db SESSION-SAVE-REDIS-DB] [--session-save-redis-compression-threshold SESSION-SAVE-REDIS-COMPRESSION-THRESHOLD] [--session-save-redis-compression-lib SESSION-SAVE-REDIS-COMPRESSION-LIB] [--session-save-redis-log-level SESSION-SAVE-REDIS-LOG-LEVEL] [--session-save-redis-max-concurrency SESSION-SAVE-REDIS-MAX-CONCURRENCY] [--session-save-redis-break-after-frontend SESSION-SAVE-REDIS-BREAK-AFTER-FRONTEND] [--session-save-redis-break-after-adminhtml SESSION-SAVE-REDIS-BREAK-AFTER-ADMINHTML] [--session-save-redis-first-lifetime SESSION-SAVE-REDIS-FIRST-LIFETIME] [--session-save-redis-bot-first-lifetime SESSION-SAVE-REDIS-BOT-FIRST-LIFETIME] [--session-save-redis-bot-lifetime SESSION-SAVE-REDIS-BOT-LIFETIME] [--session-save-redis-disable-locking SESSION-SAVE-REDIS-DISABLE-LOCKING] [--session-save-redis-min-lifetime SESSION-SAVE-REDIS-MIN-LIFETIME] [--session-save-redis-max-lifetime SESSION-SAVE-REDIS-MAX-LIFETIME] [--session-save-redis-sentinel-master SESSION-SAVE-REDIS-SENTINEL-MASTER] [--session-save-redis-sentinel-servers SESSION-SAVE-REDIS-SENTINEL-SERVERS] [--session-save-redis-sentinel-verify-master SESSION-SAVE-REDIS-SENTINEL-VERIFY-MASTER] [--session-save-redis-sentinel-connect-retries SESSION-SAVE-REDIS-SENTINEL-CONNECT-RETRIES] [--cache-backend CACHE-BACKEND] [--cache-backend-redis-server CACHE-BACKEND-REDIS-SERVER] [--cache-backend-redis-db CACHE-BACKEND-REDIS-DB] [--cache-backend-redis-port CACHE-BACKEND-REDIS-PORT] [--cache-backend-redis-password CACHE-BACKEND-REDIS-PASSWORD] [--cache-backend-redis-compress-data CACHE-BACKEND-REDIS-COMPRESS-DATA] [--cache-backend-redis-compression-lib CACHE-BACKEND-REDIS-COMPRESSION-LIB] [--cache-id-prefix CACHE-ID-PREFIX] [--allow-parallel-generation] [--page-cache PAGE-CACHE] [--page-cache-redis-server PAGE-CACHE-REDIS-SERVER] [--page-cache-redis-db PAGE-CACHE-REDIS-DB] [--page-cache-redis-port PAGE-CACHE-REDIS-PORT] [--page-cache-redis-password PAGE-CACHE-REDIS-PASSWORD] [--page-cache-redis-compress-data PAGE-CACHE-REDIS-COMPRESS-DATA] [--page-cache-redis-compression-lib PAGE-CACHE-REDIS-COMPRESSION-LIB] [--page-cache-id-prefix PAGE-CACHE-ID-PREFIX] [--lock-provider LOCK-PROVIDER] [--lock-db-prefix LOCK-DB-PREFIX] [--lock-zookeeper-host LOCK-ZOOKEEPER-HOST] [--lock-zookeeper-path LOCK-ZOOKEEPER-PATH] [--lock-file-path LOCK-FILE-PATH] [--document-root-is-pub DOCUMENT-ROOT-IS-PUB] [--base-url BASE-URL] [--language LANGUAGE] [--timezone TIMEZONE] [--currency CURRENCY] [--use-rewrites USE-REWRITES] [--use-secure USE-SECURE] [--base-url-secure BASE-URL-SECURE] [--use-secure-admin USE-SECURE-ADMIN] [--admin-use-security-key ADMIN-USE-SECURITY-KEY] [--admin-user [ADMIN-USER]] [--admin-password [ADMIN-PASSWORD]] [--admin-email [ADMIN-EMAIL]] [--admin-firstname [ADMIN-FIRSTNAME]] [--admin-lastname [ADMIN-LASTNAME]] [--search-engine SEARCH-ENGINE] [--elasticsearch-host ELASTICSEARCH-HOST] [--elasticsearch-port ELASTICSEARCH-PORT] [--elasticsearch-enable-auth ELASTICSEARCH-ENABLE-AUTH] [--elasticsearch-username ELASTICSEARCH-USERNAME] [--elasticsearch-password ELASTICSEARCH-PASSWORD] [--elasticsearch-index-prefix ELASTICSEARCH-INDEX-PREFIX] [--elasticsearch-timeout ELASTICSEARCH-TIMEOUT] [--opensearch-host OPENSEARCH-HOST] [--opensearch-port OPENSEARCH-PORT] [--opensearch-enable-auth OPENSEARCH-ENABLE-AUTH] [--opensearch-username OPENSEARCH-USERNAME] [--opensearch-password OPENSEARCH-PASSWORD] [--opensearch-index-prefix OPENSEARCH-INDEX-PREFIX] [--opensearch-timeout OPENSEARCH-TIMEOUT] [--cleanup-database] [--sales-order-increment-prefix SALES-ORDER-INCREMENT-PREFIX] [--use-sample-data] [--enable-modules [ENABLE-MODULES]] [--disable-modules [DISABLE-MODULES]] [--convert-old-scripts [CONVERT-OLD-SCRIPTS]] [-i|--interactive] [--safe-mode [SAFE-MODE]] [--data-restore [DATA-RESTORE]] [--dry-run [DRY-RUN]] [--magento-init-params MAGENTO-INIT-PARAMS]`

Installs the Magento application

### Options

#### `--backend-frontname`

Backend frontname (will be autogenerated if missing)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--enable-debug-logging`

Enable debug logging

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--enable-syslog-logging`

Enable syslog logging

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--id_salt`

GraphQl Salt

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-driver`

Remote storage driver

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-prefix`

Remote storage prefix

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--remote-storage-endpoint`

Remote storage endpoint

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-bucket`

Remote storage bucket

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-region`

Remote storage region

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--remote-storage-key`

Remote storage access key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--remote-storage-secret`

Remote storage secret key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--remote-storage-path-style`

Remote storage path style

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'0'`

#### `--amqp-host`

Amqp server host

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-port`

Amqp server port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'5672'`

#### `--amqp-user`

Amqp server username

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-password`

Amqp server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-virtualhost`

Amqp virtualhost

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'/'`

#### `--amqp-ssl`

Amqp SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--amqp-ssl-options`

Amqp SSL Options (JSON)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--consumers-wait-for-messages`

Should consumers wait for a message from the queue? 1 - Yes, 0 - No

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--queue-default-connection`

Message queues default connection. Can be 'db', 'amqp' or a custom queue system.The queue system must be installed and configured, otherwise messages won't be processed correctly.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--key`

Encryption key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-host`

Database server host

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-name`

Database name

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-user`

Database server username

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-engine`

Database server engine

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-password`

Database server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-prefix`

Database table prefix

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-model`

Database type

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-init-statements`

Database  initial set of commands

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--skip-db-validation|-s`

If specified, then db connection validation will be skipped

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--http-cache-hosts`

http Cache hosts

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-ssl-key`

Full path of client key file in order to establish db connection through SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--db-ssl-cert`

Full path of client certificate file in order to establish db connection through SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--db-ssl-ca`

Full path of server certificate file in order to establish db connection through SSL

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `''`

#### `--db-ssl-verify`

Verify server certification

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--session-save`

Session save handler

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-host`

Fully qualified host name, IP address, or absolute path if using UNIX sockets

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-port`

Redis server listen port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-password`

Redis server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-timeout`

Connection timeout, in seconds

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-persistent-id`

Unique string to enable persistent connections

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-db`

Redis database number

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-compression-threshold`

Redis compression threshold

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-compression-lib`

Redis compression library. Values: gzip (default), lzf, lz4, snappy

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-log-level`

Redis log level. Values: 0 (least verbose) to 7 (most verbose)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-max-concurrency`

Maximum number of processes that can wait for a lock on one session

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-break-after-frontend`

Number of seconds to wait before trying to break a lock for frontend session

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-break-after-adminhtml`

Number of seconds to wait before trying to break a lock for Admin session

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-first-lifetime`

Lifetime, in seconds, of session for non-bots on the first write (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-bot-first-lifetime`

Lifetime, in seconds, of session for bots on the first write (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-bot-lifetime`

Lifetime of session for bots on subsequent writes (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-disable-locking`

Redis disable locking. Values: false (default), true

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-min-lifetime`

Redis min session lifetime, in seconds

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-max-lifetime`

Redis max session lifetime, in seconds

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-master`

Redis Sentinel master

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-servers`

Redis Sentinel servers, comma separated

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-verify-master`

Redis Sentinel verify master. Values: false (default), true

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--session-save-redis-sentinel-connect-retries`

Redis Sentinel connect retries.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend`

Default cache handler

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-server`

Redis server

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-db`

Database number for the cache

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-port`

Redis server listen port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-password`

Redis server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-compress-data`

Set to 0 to disable compression (default is 1, enabled)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-backend-redis-compression-lib`

Compression lib to use [snappy,lzf,l4z,zstd,gzip] (leave blank to determine automatically)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cache-id-prefix`

ID prefix for cache keys

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--allow-parallel-generation`

Allow generate cache in non-blocking way

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--page-cache`

Default cache handler

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-server`

Redis server

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-db`

Database number for the cache

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-port`

Redis server listen port

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-password`

Redis server password

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-compress-data`

Set to 1 to compress the full page cache (use 0 to disable)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-redis-compression-lib`

Compression library to use [snappy,lzf,l4z,zstd,gzip] (leave blank to determine automatically)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--page-cache-id-prefix`

ID prefix for cache keys

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-provider`

Lock provider name

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-db-prefix`

Installation specific lock prefix to avoid lock conflicts

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-zookeeper-host`

Host and port to connect to Zookeeper cluster. For example: 127.0.0.1:2181

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-zookeeper-path`

The path where Zookeeper will save locks. The default path is: /magento/locks

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--lock-file-path`

The path where file locks will be saved.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--document-root-is-pub`

Flag to show is Pub is on root, can be true or false only

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--base-url`

URL the store is supposed to be available at. Deprecated, use config:set with path web/unsecure/base_url

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--language`

Default language code. Deprecated, use config:set with path general/locale/code

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--timezone`

Default time zone code. Deprecated, use config:set with path general/locale/timezone

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--currency`

Default currency code. Deprecated, use config:set with path currency/options/base, currency/options/default and currency/options/allow

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--use-rewrites`

Use rewrites. Deprecated, use config:set with path web/seo/use_rewrites

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--use-secure`

Use secure URLs. Enable this option only if SSL is available. Deprecated, use config:set with path web/secure/use_in_frontend

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--base-url-secure`

Base URL for SSL connection. Deprecated, use config:set with path web/secure/base_url

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--use-secure-admin`

Run admin interface with SSL. Deprecated, use config:set with path web/secure/use_in_adminhtml

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-use-security-key`

Whether to use a "security key" feature in Magento Admin URLs and forms. Deprecated, use config:set with path admin/security/use_form_key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-user`

Admin user

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-password`

Admin password

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-email`

Admin email

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-firstname`

Admin first name

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-lastname`

Admin last name

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--search-engine`

Search engine. Values: elasticsearch5, elasticsearch7, elasticsearch8, opensearch

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--elasticsearch-host`

Elasticsearch server host.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--elasticsearch-port`

Elasticsearch server port.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--elasticsearch-enable-auth`

Set to 1 to enable authentication. (default is 0, disabled)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--elasticsearch-username`

Elasticsearch username. Only applicable if HTTP auth is enabled

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--elasticsearch-password`

Elasticsearch password. Only applicable if HTTP auth is enabled

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--elasticsearch-index-prefix`

Elasticsearch index prefix.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--elasticsearch-timeout`

Elasticsearch server timeout.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--opensearch-host`

OpenSearch server host.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--opensearch-port`

OpenSearch server port.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--opensearch-enable-auth`

Set to 1 to enable authentication. (default is 0, disabled)

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--opensearch-username`

OpenSearch username. Only applicable if HTTP auth is enabled

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--opensearch-password`

OpenSearch password. Only applicable if HTTP auth is enabled

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--opensearch-index-prefix`

OpenSearch index prefix.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--opensearch-timeout`

OpenSearch server timeout.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--cleanup-database`

Cleanup the database before installation

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--sales-order-increment-prefix`

Sales order number prefix

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--use-sample-data`

Use sample data

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--enable-modules`

List of comma-separated module names. That must be included during installation. Available magic param "all".

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--disable-modules`

List of comma-separated module names. That must be avoided during installation. Available magic param "all".

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--convert-old-scripts`

Allows to convert old scripts (InstallSchema, UpgradeSchema) to db_schema.xml format

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--interactive|-i`

Interactive Magento installation

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--safe-mode`

Safe installation of Magento with dumps on destructive operations, like column removal

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--data-restore`

Restore removed data from dumps

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--dry-run`

Magento Installation will be run in dry-run mode

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:performance:generate-fixtures`
-------------------------------------

Generates fixtures

### Usage

* `setup:performance:generate-fixtures [-s|--skip-reindex] [--] <profile>`

Generates fixtures

### Arguments

#### `profile`

Path to profile configuration file

* Is required: yes
* Is array: no
* Default: `NULL`

### Options

#### `--skip-reindex|-s`

Skip reindex

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:rollback`
----------------

Rolls back Magento Application codebase, media and database

### Usage

* `setup:rollback [-c|--code-file CODE-FILE] [-m|--media-file MEDIA-FILE] [-d|--db-file DB-FILE] [--magento-init-params MAGENTO-INIT-PARAMS]`

Rolls back Magento Application codebase, media and database

### Options

#### `--code-file|-c`

Basename of the code backup file in var/backups

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--media-file|-m`

Basename of the media backup file in var/backups

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--db-file|-d`

Basename of the db backup file in var/backups

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:static-content:deploy`
-----------------------------

Deploys static view files

### Usage

* `setup:static-content:deploy [-f|--force] [-s|--strategy [STRATEGY]] [-a|--area [AREA]] [--exclude-area [EXCLUDE-AREA]] [-t|--theme [THEME]] [--exclude-theme [EXCLUDE-THEME]] [-l|--language [LANGUAGE]] [--exclude-language [EXCLUDE-LANGUAGE]] [-j|--jobs [JOBS]] [--max-execution-time [MAX-EXECUTION-TIME]] [--symlink-locale] [--content-version CONTENT-VERSION] [--refresh-content-version-only] [--no-javascript] [--no-js-bundle] [--no-css] [--no-less] [--no-images] [--no-fonts] [--no-html] [--no-misc] [--no-html-minify] [--no-parent] [--] [<languages>...]`

Deploys static view files

### Arguments

#### `languages`

Space-separated list of ISO-639 language codes for which to output static view files.

* Is required: no
* Is array: yes
* Default: `array ()`

### Options

#### `--force|-f`

Deploy files in any mode.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--strategy|-s`

Deploy files using specified strategy.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `'quick'`

#### `--area|-a`

Generate files only for the specified areas.

* Accept value: yes
* Is value required: no
* Is multiple: yes
* Is negatable: no
* Default: `array (  0 => 'all',)`

#### `--exclude-area`

Do not generate files for the specified areas.

* Accept value: yes
* Is value required: no
* Is multiple: yes
* Is negatable: no
* Default: `array (  0 => 'none',)`

#### `--theme|-t`

Generate static view files for only the specified themes.

* Accept value: yes
* Is value required: no
* Is multiple: yes
* Is negatable: no
* Default: `array (  0 => 'all',)`

#### `--exclude-theme`

Do not generate files for the specified themes.

* Accept value: yes
* Is value required: no
* Is multiple: yes
* Is negatable: no
* Default: `array (  0 => 'none',)`

#### `--language|-l`

Generate files only for the specified languages.

* Accept value: yes
* Is value required: no
* Is multiple: yes
* Is negatable: no
* Default: `array (  0 => 'all',)`

#### `--exclude-language`

Do not generate files for the specified languages.

* Accept value: yes
* Is value required: no
* Is multiple: yes
* Is negatable: no
* Default: `array (  0 => 'none',)`

#### `--jobs|-j`

Enable parallel processing using the specified number of jobs.

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `0`

#### `--max-execution-time`

The maximum expected execution time of deployment static process (in seconds).

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `900`

#### `--symlink-locale`

Create symlinks for the files of those locales, which are passed for deployment, but have no customizations.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--content-version`

Custom version of static content can be used if running deployment on multiple nodes to ensure that static content version is identical and caching works properly.

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--refresh-content-version-only`

Refreshing the version of static content only can be used to refresh static content in browser cache and CDN cache.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-javascript`

Do not deploy JavaScript files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-js-bundle`

Do not deploy JavaScript bundle files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-css`

Do not deploy CSS files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-less`

Do not deploy LESS files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-images`

Do not deploy images.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-fonts`

Do not deploy font files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-html`

Do not deploy HTML files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-misc`

Do not deploy files of other types (.md, .jbf, .csv, etc.).

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-html-minify`

Do not minify HTML files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--no-parent`

Do not compile parent themes. Supported only in quick and standard strategies.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:store-config:set`
------------------------

Installs the store configuration. Deprecated since 2.2.0. Use config:set instead

### Usage

* `setup:store-config:set [--base-url BASE-URL] [--language LANGUAGE] [--timezone TIMEZONE] [--currency CURRENCY] [--use-rewrites USE-REWRITES] [--use-secure USE-SECURE] [--base-url-secure BASE-URL-SECURE] [--use-secure-admin USE-SECURE-ADMIN] [--admin-use-security-key ADMIN-USE-SECURITY-KEY] [--magento-init-params MAGENTO-INIT-PARAMS]`

Installs the store configuration. Deprecated since 2.2.0. Use config:set instead

### Options

#### `--base-url`

URL the store is supposed to be available at. Deprecated, use config:set with path web/unsecure/base_url

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--language`

Default language code. Deprecated, use config:set with path general/locale/code

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--timezone`

Default time zone code. Deprecated, use config:set with path general/locale/timezone

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--currency`

Default currency code. Deprecated, use config:set with path currency/options/base, currency/options/default and currency/options/allow

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--use-rewrites`

Use rewrites. Deprecated, use config:set with path web/seo/use_rewrites

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--use-secure`

Use secure URLs. Enable this option only if SSL is available. Deprecated, use config:set with path web/secure/use_in_frontend

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--base-url-secure`

Base URL for SSL connection. Deprecated, use config:set with path web/secure/base_url

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--use-secure-admin`

Run admin interface with SSL. Deprecated, use config:set with path web/secure/use_in_adminhtml

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--admin-use-security-key`

Whether to use a "security key" feature in Magento Admin URLs and forms. Deprecated, use config:set with path admin/security/use_form_key

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:uninstall`
-----------------

Uninstalls the Magento application

### Usage

* `setup:uninstall [--magento-init-params MAGENTO-INIT-PARAMS]`

Uninstalls the Magento application

### Options

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`setup:upgrade`
---------------

Upgrades the Magento application, DB data, and schema

### Usage

* `setup:upgrade [--keep-generated] [--convert-old-scripts [CONVERT-OLD-SCRIPTS]] [--safe-mode [SAFE-MODE]] [--data-restore [DATA-RESTORE]] [--dry-run [DRY-RUN]] [--magento-init-params MAGENTO-INIT-PARAMS]`

Upgrades the Magento application, DB data, and schema

### Options

#### `--keep-generated`

Prevents generated files from being deleted.
We discourage using this option except when deploying to production.
Consult your system integrator or administrator for more information.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--convert-old-scripts`

Allows to convert old scripts (InstallSchema, UpgradeSchema) to db_schema.xml format

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--safe-mode`

Safe installation of Magento with dumps on destructive operations, like column removal

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--data-restore`

Restore removed data from dumps

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--dry-run`

Magento Installation will be run in dry-run mode

* Accept value: yes
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--magento-init-params`

Add to any command to customize Magento initialization parameters
For example: "MAGE_MODE=developer&MAGE_DIRS[base][path]=/var/www/example.com&MAGE_DIRS[cache][path]=/var/tmp/cache"

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`store:list`
------------

Displays the list of stores

### Usage

* `store:list`

Displays the list of stores

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`store:website:list`
--------------------

Displays the list of websites

### Usage

* `store:website:list`

Displays the list of websites

### Options

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`theme:uninstall`
-----------------

Uninstalls theme

### Usage

* `theme:uninstall [--backup-code] [-c|--clear-static-content] [--] <theme>...`

Uninstalls theme

### Arguments

#### `theme`

Path of the theme. Theme path should be specified as full path which is area/vendor/name. For example, frontend/Magento/blank

* Is required: yes
* Is array: yes
* Default: `array ()`

### Options

#### `--backup-code`

Take code backup (excluding temporary files)

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--clear-static-content|-c`

Clear generated static view files.

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

`varnish:vcl:generate`
----------------------

Generates Varnish VCL and echos it to the command line

### Usage

* `varnish:vcl:generate [--access-list ACCESS-LIST] [--backend-host BACKEND-HOST] [--backend-port BACKEND-PORT] [--export-version EXPORT-VERSION] [--grace-period GRACE-PERIOD] [--output-file OUTPUT-FILE]`

Generates Varnish VCL and echos it to the command line

### Options

#### `--access-list`

IPs access list that can purge Varnish

* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Is negatable: no
* Default: `array (  0 => 'localhost',)`

#### `--backend-host`

Host of the web backend

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'localhost'`

#### `--backend-port`

Port of the web backend

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `8080`

#### `--export-version`

The version of Varnish file

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `'4'`

#### `--grace-period`

Grace period in seconds

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `300`

#### `--output-file`

Path to the file to write vcl

* Accept value: yes
* Is value required: yes
* Is multiple: no
* Is negatable: no
* Default: `NULL`

#### `--help|-h`

Display help for the given command. When no command is given display help for the list command

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--quiet|-q`

Do not output any message

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--verbose|-v|-vv|-vvv`

Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--version|-V`

Display this application version

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`

#### `--ansi|--no-ansi`

Force (or disable --no-ansi) ANSI output

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: yes
* Default: `NULL`

#### `--no-interaction|-n`

Do not ask any interactive question

* Accept value: no
* Is value required: no
* Is multiple: no
* Is negatable: no
* Default: `false`   