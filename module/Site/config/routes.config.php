<?php

/**
 * The MIT License
 *
 * Copyright (c) 2015, Coding Matters
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

return [
    'console'   => [], //routing configuration for CLI modules
    'router'    => [
        'routes' => [
            'home' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/',
                    'defaults'  => [
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'index'
                    ]
                ]
            ],
            'terms-and-condition' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/terms-and-condition',
                    'defaults' => [
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'terms-and-condition'
                    ]
                ]
            ],
            'privacy-policy' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/privacy-policy',
                    'defaults' => [
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'privacy-policy'
                    ]
                ]
            ],
            'disclaimer' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/disclaimer',
                    'defaults' => [
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'disclaimer'
                    ]
                ]
            ],
            'copyright' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/copyright',
                    'defaults' => [
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'copyright'
                    ]
                ]
            ],
            'sitemap' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/sitemap',
                    'defaults' => [
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'sitemap'
                    ]
                ]
            ]
        ]
    ]
];