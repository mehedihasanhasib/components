<?php
// Navigation menu data structure
$navigationSections = [
    [
        'title' => 'Global Payments',
        'items' => [
            [
                'name' => 'Payments',
                'description' => 'Online payments',
                'icon' => 'fas fa-credit-card',
                'color' => 'blue',
            ],
            [
                'name' => 'Terminal',
                'description' => 'In-person payments',
                'icon' => 'fas fa-terminal',
                'color' => 'purple'
            ],
            [
                'name' => 'Radar',
                'description' => 'Fraud prevention',
                'icon' => 'fas fa-search',
                'color' => 'pink'
            ],
            [
                'name' => 'Authorization',
                'description' => 'Acceptance optimizations',
                'icon' => 'fas fa-shield-alt',
                'color' => 'cyan'
            ]
        ]
    ],
    [
        'title' => 'Money Management',
        'items' => [
            [
                'name' => 'Connect',
                'description' => 'Payments for platforms',
                'icon' => 'fas fa-link',
                'color' => 'teal'
            ],
            [
                'name' => 'Global Payouts',
                'description' => 'Send money to third parties',
                'icon' => 'fas fa-globe',
                'color' => 'blue'
            ],
            [
                'name' => 'Capital for platforms',
                'description' => 'Customer financing',
                'icon' => 'fas fa-chart-line',
                'color' => 'green'
            ],
            [
                'name' => 'Issuing',
                'description' => 'Physical and virtual cards',
                'icon' => 'fas fa-credit-card',
                'color' => 'indigo'
            ]
        ]
    ],
    [
        'title' => 'Revenue and Finance Automation',
        'items' => [
            [
                'name' => 'Billing',
                'description' => 'Subscriptions and usage-based',
                'icon' => 'fas fa-file-invoice-dollar',
                'color' => 'green'
            ],
            [
                'name' => 'Revenue Recognition',
                'description' => 'Accounting automation',
                'icon' => 'fas fa-chart-bar',
                'color' => 'purple'
            ],
            [
                'name' => 'Tax',
                'description' => 'Sales tax & VAT automation',
                'icon' => 'fas fa-calculator',
                'color' => 'orange'
            ],
            [
                'name' => 'Invoicing',
                'description' => 'Online invoices',
                'icon' => 'fas fa-file-invoice',
                'color' => 'emerald'
            ],
            [
                'name' => 'Sigma',
                'description' => 'Custom reports',
                'icon' => 'fas fa-chart-pie',
                'color' => 'rose'
            ],
            [
                'name' => 'Data Pipeline',
                'description' => 'Data sync',
                'icon' => 'fas fa-database',
                'color' => 'violet'
            ]
        ]
    ]
];

// Color mapping for Tailwind classes
$colorClasses = [
    'blue' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-600', 'border' => 'border-blue-200', 'hover' => 'hover:border-blue-300'],
    'purple' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-600', 'border' => 'border-purple-200', 'hover' => 'hover:border-purple-300'],
    'pink' => ['bg' => 'bg-pink-100', 'text' => 'text-pink-600', 'border' => 'border-pink-200', 'hover' => 'hover:border-pink-300'],
    'cyan' => ['bg' => 'bg-cyan-100', 'text' => 'text-cyan-600', 'border' => 'border-cyan-200', 'hover' => 'hover:border-cyan-300'],
    'teal' => ['bg' => 'bg-teal-100', 'text' => 'text-teal-600', 'border' => 'border-teal-200', 'hover' => 'hover:border-teal-300'],
    'green' => ['bg' => 'bg-green-100', 'text' => 'text-green-600', 'border' => 'border-green-200', 'hover' => 'hover:border-green-300'],
    'indigo' => ['bg' => 'bg-indigo-100', 'text' => 'text-indigo-600', 'border' => 'border-indigo-200', 'hover' => 'hover:border-indigo-300'],
    'orange' => ['bg' => 'bg-orange-100', 'text' => 'text-orange-600', 'border' => 'border-orange-200', 'hover' => 'hover:border-orange-300'],
    'emerald' => ['bg' => 'bg-emerald-100', 'text' => 'text-emerald-600', 'border' => 'border-emerald-200', 'hover' => 'hover:border-emerald-300'],
    'rose' => ['bg' => 'bg-rose-100', 'text' => 'text-rose-600', 'border' => 'border-rose-200', 'hover' => 'hover:border-rose-300'],
    'violet' => ['bg' => 'bg-violet-100', 'text' => 'text-violet-600', 'border' => 'border-violet-200', 'hover' => 'hover:border-violet-300']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Navigation Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .nav-item {
            transition: all 0.2s ease-in-out;
        }

        .nav-item:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .subitem-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }
    </style>
</head>

<body class="bg-gray-50 p-6">
    <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-lg p-8">

        <?php foreach ($navigationSections as $sectionIndex => $section): ?>
        <!-- Section -->
        <div class="<?= $sectionIndex > 0 ? 'mt-12' : '' ?>">
            <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-6">
                <?= $section['title'] ?>
            </h2>

            <!-- Grid Layout for Items -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <?php foreach ($section['items'] as $item): ?>
                <?php $colors = $colorClasses[$item['color']]; ?>

                <!-- Navigation Item -->
                <div
                    class="nav-item p-4 rounded-lg border border-gray-200 <?= $colors['hover'] ?> cursor-pointer group">

                    <!-- Main Item -->
                    <div class="flex items-start mb-3">
                        <div
                            class="w-10 h-10 <?= $colors['bg'] ?> rounded-lg flex items-center justify-center mr-3 flex-shrink-0 group-hover:scale-105 transition-transform">
                            <i class="<?= $item['icon'] ?> <?= $colors['text'] ?> text-sm"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-gray-900 text-sm leading-tight mb-1">
                                <?= $item['name'] ?>
                            </h3>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                <?= $item['description'] ?>
                            </p>
                        </div>
                    </div>

                   

                </div>

                <?php endforeach; ?>

            </div>
        </div>
        <?php endforeach; ?>

        <!-- Additional Info Section -->
        <div class="mt-12 p-6 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg border">
            <h3 class="text-sm font-semibold text-gray-700 mb-2">Developer Resources</h3>
            <p class="text-xs text-gray-500 mb-4">Access documentation, API references, and integration guides.</p>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-white rounded-full text-xs text-gray-600 border">API Docs</span>
                <span class="px-3 py-1 bg-white rounded-full text-xs text-gray-600 border">SDKs</span>
                <span class="px-3 py-1 bg-white rounded-full text-xs text-gray-600 border">Webhooks</span>
                <span class="px-3 py-1 bg-white rounded-full text-xs text-gray-600 border">Testing</span>
            </div>
        </div>

    </div>

    <script>
        // Add click handlers for navigation items
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function () {
                const title = this.querySelector('h3').textContent;
                console.log('Clicked on:', title);
                // Add your navigation logic here
            });
        });

        // Add sub-item click handlers
        document.querySelectorAll('.group\\/sub').forEach(subitem => {
            subitem.addEventListener('click', function (e) {
                e.stopPropagation();
                const title = this.querySelector('span').textContent;
                console.log('Clicked on sub-item:', title);
                // Add your sub-navigation logic here
            });
        });
    </script>

</body>

</html>