<?php

/*
 * TODO add file header and class description
 */

namespace Goatherd\\Phpcs;

use Composer\Package\PackageInterface;

use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'vendor/squizlabs/php_codesniffer/CodeSniffer/Standards/' . $package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'phpcs-standard' === $packageType;
    }
}