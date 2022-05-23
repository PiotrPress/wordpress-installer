<?php declare( strict_types = 1 );

namespace PiotrPress\Composer\WordPress\Installer;

use Composer\Plugin\PluginInterface;
use Composer\Composer;
use Composer\IO\IOInterface;

class Plugin implements PluginInterface {
    public function activate( Composer $composer, IOInterface $io ) {
        $composer->getInstallationManager()->addInstaller( new Installer( $io, $composer ) );
    }

    public function deactivate( Composer $composer, IOInterface $io ) {}
    public function uninstall( Composer $composer, IOInterface $io ) {}
}