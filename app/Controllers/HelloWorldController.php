<?php

declare(strict_types=1);

namespace Flextype\Plugin\HelloWorld\Controllers;


use Flextype\Component\Arrays\Arrays;
use Flextype\Component\Filesystem\Filesystem;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use function array_merge;
use function array_replace_recursive;
use function count;
use function Flextype\Component\I18n\__;
use function is_array;
use function trim;


class HelloWorldController
{
    /**
     * Index page
     *
     * @param Request  $request  PSR7 request
     * @param Response $response PSR7 response
     */
    public function index(/** @scrutinizer ignore-unused */ Request $request, Response $response) : Response
    {   
        
        return flextype('twig')->render(
            $response,
            'plugins/helloworld/templates/index.html',
            [
                'menu_item' => 'helloworld',
                'links' =>  [
                    'themes' => [
                        'link' => flextype('router')->pathFor('admin.helloworld.index'),
                        'title' => 'Hello, world!',
                        'active' => true
                    ],
                ],
            ]
        ); 
        
    }
}
