<?php
namespace Yassa\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class VagrantInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'dev/' . $package->getTargetDir();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'vagrant-env' === $packageType;
    }
}