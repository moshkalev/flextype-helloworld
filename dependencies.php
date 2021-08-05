<?php

declare(strict_types=1);

/**
 * @link https://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\HelloWorld;



use Slim\Flash\Messages;
use Slim\Http\Environment;
use Slim\Http\Uri;
use Flextype\Component\I18n\I18n;
use function Flextype\Component\I18n\__;

// Add Admin Navigation
flextype('registry')->set('plugins.admin.settings.navigation.extends.helloworld', ['title' => 'Hello, world!', 'icon' => ['name' => 'smile', 'set' => 'fontawesome|solid'], 'link' => flextype('router')->pathFor('admin.helloworld.index')]);

$_flextype_menu = (flextype('registry')->has('plugins.admin.settings.flextype_menu')) ? flextype('registry')->get('plugins.admin.settings.flextype_menu') : [];

if (flextype('registry')->has('flextype.settings.url') && flextype('registry')->get('flextype.settings.url') != '') {
    $site_url = flextype('registry')->get('flextype.settings.url');
} else {
    $site_url = Uri::createFromEnvironment(new Environment($_SERVER))->getBaseUrl();
}


 