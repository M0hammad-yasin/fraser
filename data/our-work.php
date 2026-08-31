<?php

/**
 * Our Work / Portfolio data store.
 * 
 * To add new projects or photos, update or add entries to $portfolioProjects.
 * Categories without active project items will automatically display a clean "Coming Soon" section.
 * 
 * Available Categories:
 * - 'janitorial'           => 'Janitorial & Custodial'
 * - 'floor-care'            => 'Floor & Carpet Care'
 * - 'window-exterior'       => 'Window & Exterior Cleaning'
 * - 'property-maintenance'  => 'Property Maintenance'
 * - 'snow-ice'              => 'Snow & Ice Management'
 * - 'specialty'             => 'Specialty Cleaning'
 */

$portfolioCategories = [
    '*'                    => 'All Work',
    'janitorial'           => 'Janitorial & Custodial',
    'floor-care'           => 'Floor & Carpet Care',
    'window-exterior'      => 'Window & Exterior Cleaning',
    'property-maintenance' => 'Property Maintenance',
    'snow-ice'             => 'Snow & Ice Management',
    'specialty'            => 'Specialty Cleaning',
];

// Active Projects (Janitorial & Custodial contains completed real photo gallery)
$portfolioProjects = [
    [
        'id'             => 'janitorial-project',
        'category'       => 'janitorial',
        'category_name'  => 'Janitorial & Custodial',
        'title'          => 'Commercial Facility & Corporate Office Janitorial Care',
        'location'       => 'Lower Mainland, BC',
        'scope'          => 'Comprehensive Office Sanitization, Restroom Hygiene & Floor Maintenance',
        'description'    => 'A complete commercial janitorial program delivering spotless workspaces, sanitized meeting areas, fully disinfected restrooms, and pristine common corridors for multi-tenant facilities.',
        'highlights'     => [
            'Full workstation & surface sanitization',
            'High-touch point disinfection (handles, switches, desks)',
            'Complete restroom deep clean & supply replenishment',
            'Corridor, hallway, and common area upkeep'
        ],
        'gallery'        => [
            [
                'src'     => './assets/img/our-work/janitorial/offce-clean1.jpeg',
                'title'   => 'Office Workstation Detailing',
                'caption' => 'Clean, organized and sanitized desk surfaces and monitors'
            ],
            [
                'src'     => './assets/img/our-work/janitorial/offce-clean12.jpeg',
                'title'   => 'Conference & Meeting Room Maintenance',
                'caption' => 'Dust-free tables, clean flooring and spotless presentation'
            ],
            [
                'src'     => './assets/img/our-work/janitorial/bathroomclean1.jpeg',
                'title'   => 'Commercial Restroom Disinfection',
                'caption' => 'Deep sanitized sinks, shining chrome fixtures and streak-free mirrors'
            ],
            [
                'src'     => './assets/img/our-work/janitorial/offce-clean3.jpeg',
                'title'   => 'Private Office Sanitization',
                'caption' => 'Thorough surface wiping, waste emptying and detail cleaning'
            ],
            [
                'src'     => './assets/img/our-work/janitorial/offce-clean5.jpeg',
                'title'   => 'Corridor & Common Area Upkeep',
                'caption' => 'Tidy pathways, clear baseboards and pristine floors'
            ],
            [
                'src'     => './assets/img/our-work/janitorial/offce-clean6.jpeg',
                'title'   => 'Open Workspace Turnover',
                'caption' => 'Sanitized partitions, refreshed cubicles and hygienic environment'
            ],
        ]
    ]
];

// Coming Soon metadata for service categories currently being photographed
$comingSoonCategories = [
    'floor-care' => [
        'category_name' => 'Floor & Carpet Care',
        'icon'          => 'fa-broom',
        'title'         => 'Floor & Carpet Care Gallery Coming Soon',
        'description'   => 'We are currently documenting our recent commercial VCT stripping & waxing, carpet hot-water extraction, and hard surface polishing projects.',
        'points'        => [
            'Machine stripping & multi-coat protective waxing',
            'Commercial hot-water carpet extraction',
            'Tile, grout, and concrete deep scrubbing'
        ]
    ],
    'window-exterior' => [
        'category_name' => 'Window & Exterior Cleaning',
        'icon'          => 'fa-shower',
        'title'         => 'Window & Exterior Cleaning Gallery Coming Soon',
        'description'   => 'High-pressure washing, moss remediation, parkade cleaning, and multi-storey window cleaning photos are being prepared for showcase.',
        'points'        => [
            'Rotary surface pressure washing for concrete & walkways',
            'Interior & exterior streak-free window cleaning',
            'Algae, moss, and weather staining removal'
        ]
    ],
    'property-maintenance' => [
        'category_name' => 'Property Maintenance',
        'icon'          => 'fa-tools',
        'title'         => 'Property Maintenance Gallery Coming Soon',
        'description'   => 'We are compiling visual case studies for scheduled preventive maintenance, strata common-area inspections, and trade coordination.',
        'points'        => [
            'Routine supervisory checklists & walkthroughs',
            'Light fixture audits & minor building repairs',
            'Single point of contact for trade services'
        ]
    ],
    'snow-ice' => [
        'category_name' => 'Snow & Ice Management',
        'icon'          => 'fa-snowflake',
        'title'         => 'Snow & Ice Management Gallery Coming Soon',
        'description'   => 'Winter response photos including commercial lot plowing, anti-icing brine pre-treatment, and walkway salting are in progress.',
        'points'        => [
            'Zero-tolerance morning snow clearing',
            'Eco-friendly salting & de-icer applications',
            '24/7 winter storm monitoring across the Lower Mainland'
        ]
    ],
    'specialty' => [
        'category_name' => 'Specialty Cleaning',
        'icon'          => 'fa-shield-virus',
        'title'         => 'Specialty Cleaning Gallery Coming Soon',
        'description'   => 'Healthcare clinic terminal cleaning, post-renovation turnover detailing, and certified sanitization photo records are coming soon.',
        'points'        => [
            'Medical & dental clinic infection control cleaning',
            'Post-construction rough & final cleanups',
            'WHMIS-trained personnel & certified solutions'
        ]
    ],
];
