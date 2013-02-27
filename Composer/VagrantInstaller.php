<?php
namespace Zeus\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class VagrantInstaller extends LibraryInstaller {
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package) {
        return 'dev/'. $package->getTargetDir();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType) {
        return 'vagrant-env' === $packageType;
    }
}