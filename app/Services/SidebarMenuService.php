<?php

namespace App\Services;

class SidebarMenuService
{
    public function getMenuItems($template = 'material')
    {
        /**
         * Each item is an object, as you may prefer to have the menu items from a database
         * So each retrieved row will be an object.
         *
        (object) [
        'title'     => 'DASHBOARD',    # => The title, being a separator, link group, or final link
        'separator' => true,           # => If a separator, boolean true
        'class'     => '',             # => css class, helpful to put icon, for example: mdi mdi-chart-bubble
        'url'       => '',             # => Only in case of final link
        'target'    => '',             # => If present, will add target attribute, example: _blank for open new tab
        'subgroup'  => true,           # => If making subgroups, this is required, for menu collapsing
        'children'  => []              # => Array of objects again, with children
        ]
         *
         *
         */


        $items = collect([
            (object) [
                'title'     => 'DEMO CONTENT',
                'separator' => true,
            ],
            $this->getGroupPages('dashboard', 'Dashboard','mdi mdi-gauge', $template),
            $this->getGroupPages('apps', 'Applications','mdi mdi-bullseye', $template),
            $this->getGroupPages('inbox', 'Inbox','mdi mdi-email', $template),
            $this->getGroupPages('ui-elements', 'Ui Elements','mdi mdi-chart-bubble', $template),
            $this->getGroupPages('forms', 'Forms','mdi mdi-file', $template),
            $this->getGroupPages('tables', 'Tables','mdi mdi-table', $template),
            $this->getGroupPages('widgets', 'Widgets','mdi mdi-widgets', $template),
            $this->getSamplePages(),
            $this->getGroupPages('charts', 'Charts','mdi mdi-file-chart', $template),
            $this->getGroupPages('icons', 'Icons','mdi mdi-brush', $template),
            $this->getGroupPages('maps', 'Maps','mdi mdi-map-marker', $template),
            $this->getMultiLevelItems()
        ]);

        return $items;
    }

    public function getGroupPages($groupDir, $title, $class, $template)
    {
        abort_unless(
            collect(['material','material-rtl','dark','horizontal','minisidebar'])->contains($template),
            400,
            'Template not found!'
        );

        $files = \File::allFiles(resource_path("views/demo-content/groups/{$groupDir}"));

        $links = collect($files)->map(function ($file) use ($groupDir, $template) {

            $page = str_before($file->getBasename(), '.blade.php');

            return (object) [
                'title'     => title_case(str_replace('-',' ',$page)),
                'url'       => route("{$template}.group.page", ['group' => $groupDir, 'page' => $page]),
            ];
        })->sortBy('title')->all();

        return (object) [
            'title'     => $title,
            'class'     => $class,
            'children'  => $links,
        ];
    }

    public function getSamplePages()
    {
        return (object) [
            'title'     => 'Sample Pages',
            'class'     => 'mdi mdi-book-open-variant',
            'url'       => '',
            'target'    => '_self',
            'children'  => [
                (object) [
                    'title'     => 'Blank Page',
                    'url'       => '/material/demos/sample-pages/blank',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Authentication',
                    'url'       => '',
                    'badge'     => '<span class="label label-rounded label-success">6</span>',
                    'target'    => '_self',
                    'subgroup'  => true,
                    'children'  => [
                        (object) [
                            'title'     => 'Login 1',
                            'url'       => '/material/demos/sample-pages/login-1',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Login 2',
                            'url'       => '/material/demos/sample-pages/login-2',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Register',
                            'url'       => '/material/demos/sample-pages/register',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Register 2',
                            'url'       => '/material/demos/sample-pages/register-2',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Lockscreen',
                            'url'       => '/material/demos/sample-pages/lockscreen',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Recover Password',
                            'url'       => '/material/demos/sample-pages/recover-password',
                            'children'  => []
                        ],
                    ]
                ],
                (object) [
                    'title'     => 'Profile',
                    'url'       => '/material/demos/sample-pages/profile',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Animation',
                    'url'       => '/material/demos/sample-pages/animation',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Sticky Left sidebar',
                    'url'       => '/material/demos/sample-pages/fix-innersidebar',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Sticky Right sidebar',
                    'url'       => '/material/demos/sample-pages/fix-inner-right-sidebar',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Invoice',
                    'url'       => '/material/demos/sample-pages/Invoice',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Treeview',
                    'url'       => '/material/demos/sample-pages/treeview',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Helper Classes',
                    'url'       => '/material/demos/sample-pages/helper-classes',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Search Result',
                    'url'       => '/material/demos/sample-pages/search-result',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Scrollbar',
                    'url'       => '/material/demos/sample-pages/scrollbar',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Pricing',
                    'url'       => '/material/demos/sample-pages/pricing',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Lighbox popup',
                    'url'       => '/material/demos/sample-pages/lightbox-popup',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Gallery',
                    'url'       => '/material/demos/sample-pages/gallery',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Faqs',
                    'url'       => '/material/demos/sample-pages/faqs',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Error pages',
                    'children'  => [
                        (object) [
                            'title'     => '400',
                            'url'       => '/material/demos/sample-pages/error-400',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => '403',
                            'url'       => '/material/demos/sample-pages/error-403',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => '404',
                            'url'       => '/material/demos/sample-pages/error-404',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => '500',
                            'url'       => '/material/demos/sample-pages/error-500',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => '503',
                            'url'       => '/material/demos/sample-pages/error-503',
                            'children'  => []
                        ],
                    ]
                ],
            ]
        ];
    }

    public function getMultiLevelItems()
    {
        return (object) [
            'title'     => 'Multi Level',
            'class'     => 'mdi mdi-chart-bubble',
            'url'       => 'http://www.google.com',
            'target'    => '_self',
            'children'  => [
                (object) [
                    'title'     => 'Item 1.1 (new tab)',
                    'url'       => 'http://www.google.com',
                    'target'    => '_blank',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Item 1.2',
                    'url'       => 'http://www.google.com',
                    'target'    => '_self',
                    'children'  => []
                ],
                (object) [
                    'title'     => 'Menu 1.3',
                    'url'       => 'http://www.google.com',
                    'target'    => '_self',
                    'subgroup'  => true,
                    'children'  => [
                        (object) [
                            'title'     => 'Item 1.3.1',
                            'url'       => 'http://www.google.com',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Item 1.3.2',
                            'url'       => 'http://www.google.com',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Item 1.3.3',
                            'url'       => 'http://www.google.com',
                            'children'  => []
                        ],
                        (object) [
                            'title'     => 'Item 1.3.4',
                            'url'       => 'http://www.google.com',
                            'children'  => []
                        ]
                    ]
                ],
                (object) [
                    'title'     => 'Item 1.4',
                    'url'       => 'http://www.google.com',
                    'target'    => '_self',
                    'children'  => []
                ]
            ]
        ];
    }

}