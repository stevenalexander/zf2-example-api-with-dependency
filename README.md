# ZF2 Example dependency management

This is an example application showing how to use [composer](http://getcomposer.org/) to manage custom dependencies in a [ZF2](Zend Framework) application. The example is a simple API which has dependencies on ZF2 (v2.2.4) and a [single custom module]() stored in github.com. I used [git flow](https://github.com/nvie/gitflow) to manage branching and tagging of releases but this is optional, you only need to tag the release versions in a way that [composer will understand](http://getcomposer.org/doc/02-libraries.md#tags).

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

## Updating the custom dependency

1. In the source for your custom dependency commit your source and tag with the release version (e.g. 1.0.1)

2. Update your applications composer.json, pointing at the new version of the dependency

3. Update the dependencies:

    ```
    php composer.phar update
    ```

4. Test, then commit the changes to your application