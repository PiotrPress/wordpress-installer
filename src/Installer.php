<?php declare( strict_types = 1 );

namespace PiotrPress\Composer\WordPress\Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Installer extends LibraryInstaller {
    const PATHS = [
        'wordpress-core' => 'wp-core',
        'wordpress-theme' => 'wp-content/themes/{$slug}',
        'wordpress-plugin' => 'wp-content/plugins/{$slug}',
        'wordpress-muplugin' => 'wp-content/mu-plugins/{$slug}',
        'wordpress-dropin' => 'wp-content/{$slug}'
    ];

    public function supports( $packageType ) {
        return \in_array( $packageType, \array_keys( self::PATHS ) );
    }

    public function getInstallPath( PackageInterface $package ) {
        list( 1 => $slug ) = \explode('/', $package->getPrettyName() );
        return \str_replace( '{$slug}', $slug, self::PATHS[ $package->getType() ] );
    }
}