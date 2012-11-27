phpcs installer
===============

Composer-installer for PHP_Codesniffer standards.

about
-----

* installs PHP_CodeSniffer dependency (1.4+) through composer.
* installs a `phpcs-standard` type composer repository within the `CodeSniffer/Standards/ directory.
* registers your standard with the CodeSniffer provided under `vendor/bin/phpcs`
  (if you run `composer install` from within your repository)

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

* Vendor-dir has to be `vendor/`
* your standard must define `/ruleset.xml` and `/Sniff/` at exactly those positions