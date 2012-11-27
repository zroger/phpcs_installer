phpcs installer
===============

[Composer-installer](http://getcomposer.org/doc/articles/custom-installers.md) for
[PHP_Codesniffer](https://github.com/squizlabs/PHP_CodeSniffer) standards.

features
--------

* installs PHP_CodeSniffer dependency (1.4+) through composer
* installs a `phpcs-standard` type composer repository within the `CodeSniffer/Standards/ directory
* registers your standard with the CodeSniffer provided under `vendor/bin/phpcs`
  (if you run `composer install` from within your repository)

As you see it is about getting phpcs ready and working without need for those really long full paths.

usage
-----

In your standards repository add
```json
{
  "type": "phpcs-standard",
  "require": {
    "goatherd/phpcs_installer": "*"
  }
}
```

Now either `git clone YOUR_REPO` and `composer install`.
Or require your standard with composer.

git install
-----------

You can alternately install your standard directly within a pear-installed phpcs using:
```
cd `pear config-get php_dir`/PHP/CodeSniffer/Standards
git clone YOUR_REPO_LINK [STANDARD_NAME]
```

The installer is not needed for direct git install.

limitations
-----------

* your standard must define `/ruleset.xml` and `/Sniff/` at exactly those positions
* does not link tests (phpcs does not ship tests with composer)
