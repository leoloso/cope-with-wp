# COPE with WordPress

<!--
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
-->

WordPress plugin to implement the COPE ("Create Once, Publish Everywhere") strategy, leveraging Gutenberg blocks

## Install

Install the plugin via Composer

``` bash
$ composer require leoloso/cope-with-wp
```

And then activate the plugin "COPE with WordPress"

## Usage

Obtain the Gutenberg medium-agnostic metadata for all blocks in a post with ID `$post_id` like this:

```php
$post = get_post($post_id);
$block_data = get_block_data($post->post_content);
$block_metadata = get_block_metadata($block_data);
```

The data can also be retrieved through the following REST endpoint: 

```bash
/wp-json/wp/v2/post-block-metadata/{POST_ID}
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email leo@getpop.org instead of using the issue tracker.

## Credits

- [Leonardo Losoviz][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<!--
[ico-version]: https://img.shields.io/packagist/v/leoloso/cope-with-wp.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/leoloso/cope-with-wp/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/leoloso/cope-with-wp.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/leoloso/cope-with-wp.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/leoloso/cope-with-wp.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/leoloso/cope-with-wp
[link-travis]: https://travis-ci.org/leoloso/cope-with-wp
[link-scrutinizer]: https://scrutinizer-ci.com/g/leoloso/cope-with-wp/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/leoloso/cope-with-wp
[link-downloads]: https://packagist.org/packages/leoloso/cope-with-wp
[link-contributors]: ../../contributors
-->
[link-author]: https://github.com/leoloso
