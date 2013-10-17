# ZF2 Example dependency management

This is an example application showing how to use [composer](http://getcomposer.org/) to manage custom dependencies in a [ZF2](Zend Framework) application. The example is based of a [simple Album API](https://github.com/stevenalexander/zf2-restful-api) which has dependencies on ZF2 (v2.2.4) and a [single custom module]() stored in github.com. I used [git flow](https://github.com/nvie/gitflow) to manage branching and tagging of releases but this is optional, you only need to tag the release versions in a way that [composer will understand](http://getcomposer.org/doc/02-libraries.md#tags).

## Requirements

* PHP 5.3+
* Web server [setup with virtual host to serve project folder](http://framework.zend.com/manual/2.2/en/user-guide/skeleton-application.html#virtual-host)
* [Composer](http://getcomposer.org/) (manage dependencies)

## Setup

1. Clone the repository:

    ```
    git clone git@github.com:stevenalexander/zf2-example-api-with-dependency.git
    ```

2. Get composer:

    ```
    curl -sS https://getcomposer.org/installer | php
    ```

3. Install the dependencies:

    ```
    php composer.phar install
    ```

## Adding a custom dependency

1. Edit composer.json:

  Add the custom package and version you require

    ```
    "require": {
        ...
        "stevenalexander/zf-example-module1" : "1.0.0"
    }
    ```

  Add the custom version control system (github in this case) repository hosting the package, this is needed if your package is not public and listed on [packagist](https://packagist.org/), which is where composer looks for dependencies by default.

    ```
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:stevenalexander/zf-example-module1.git"
        }
    ],
    ```

  Details of how to add private repositories and other types are covered in the [composer documentation](http://getcomposer.org/doc/05-repositories.md#using-private-repositories).

2. Update the dependencies:

    ```
    php composer.phar update
    ```

## Updating the custom dependency

1. In the source for your custom dependency commit your source and tag with the release version (e.g. 1.0.1)

2. Update your applications composer.json, pointing at the new version of the dependency:

    ```
    "require": {
        ...
        "stevenalexander/zf-example-module1" : "1.0.1"
    }
    ```

3. Update the dependencies:

    ```
    php composer.phar update
    ```

4. Test, then commit the changes to your application