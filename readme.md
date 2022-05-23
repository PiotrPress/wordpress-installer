# WordPress Installer

This composer plugin sets installation paths for WordPress `core`, `plugins`, `mu-plugins`, `themes` and `drop-ins` outside of vendor directory.

## Installation

```shell
$ composer require piotrpress/wordpress-installer
```

## Result

Plugin sets installation paths according to package type:

- `wordpress-core` - `/wp-core` 
- `wordpress-theme/{$slug}` - `/wp-content/themes/{$slug}` where `$slug` is a desired WordPress theme slug
- `wordpress-plugin/{$slug}` - `/wp-content/plugins/{$slug}` where `$slug` is a desired WordPress plugin slug
- `wordpress-muplugin/{$slug}` - `/wp-content/mu-plugin/{$slug}` where `$slug` is a desired WordPress mu-plugin slug
- `wordpress-dropin/{$slug}` - `/wp-content/{$slug}` where `$slug` is a desired WordPress drop-in slug

## Limitations

Installation paths are fixed. To customize paths, use other plugin instead, for example one of listed installers:

- [composer/installers](https://github.com/composer/installers)
- [oomphinc/composer-installers-extender](https://github.com/oomphinc/composer-installers-extender)
- [johnpbloch/wordpress-core-installer](https://github.com/johnpbloch/wordpress-core-installer)
- [fancyguy/webroot-installer](https://github.com/fancyguy/webroot-installer)

## Resources

Check out example implementation in the [piotrpress/wordpress](https://github.com/PiotrPress/wordpress) package.

## Requirements

- PHP >= `7.4` version.
- Composer ^`2.0` version.

## License

[MIT](license.txt)