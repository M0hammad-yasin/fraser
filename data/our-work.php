<?php

/**
 * Our Work / Portfolio data store.
 * 
 * To add a new project or photo pair, simply add an entry to the $portfolioItems array below.
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

$portfolioItems = [
    [
        'id'             => 'janitorial-1',
        'category'       => 'janitorial',
        'category_name'  => 'Janitorial & Custodial',
        'title'          => 'Corporate Office Suite Deep Clean',
        'location'       => 'Burnaby, BC',
        'scope'          => 'Complete post-tenancy sanitize, workstations detail & breakroom overhaul',
        'before_img'     => './assets/img/our-work/janitorial/office-clean-before.jpg',
        'after_img'      => './assets/img/our-work/janitorial/office-clean-after.jpg',
        'description'    => 'Full-facility janitorial overhaul for a multi-tenant corporate office, restoring sanitized workspaces, pristine break areas, and high-standard hygiene.',
        'highlights'     => ['Workstation & Surface Sanitization', 'Breakroom & Kitchen Deep Scrub', 'Waste & High-Touch Disinfection']
    ],
    [
        'id'             => 'floor-care-1',
        'category'       => 'floor-care',
        'category_name'  => 'Floor & Carpet Care',
        'title'          => 'Commercial Lobby Floor Strip & Wax',
        'location'       => 'Vancouver, BC',
        'scope'          => 'Commercial VCT & hardwood restorative buff, strip and multi-coat high gloss finish',
        'before_img'     => './assets/img/our-work/floor-care/lobby-strip-wax-before.jpg',
        'after_img'      => './assets/img/our-work/floor-care/lobby-strip-wax-after.jpg',
        'description'    => 'Heavy-traffic commercial lobby restored from worn, scuffed linoleum into a mirror-like high-gloss finish with industrial grade protective sealant.',
        'highlights'     => ['Complete Old Wax Stripping', 'Machine Scrub & Neutralization', '4-Coat High-Gloss Protective Wax']
    ],
    [
        'id'             => 'window-exterior-1',
        'category'       => 'window-exterior',
        'category_name'  => 'Window & Exterior Cleaning',
        'title'          => 'Commercial Plaza Pressure Wash & Glass',
        'location'       => 'Surrey, BC',
        'scope'          => 'High-pressure wash of perimeter walkways, moss remediation & multi-storey exterior windows',
        'before_img'     => './assets/img/our-work/window-exterior/exterior-wash-before.jpg',
        'after_img'      => './assets/img/our-work/window-exterior/exterior-wash-after.jpg',
        'description'    => 'Eliminated years of algae build-up, stained concrete walkways, and weathered glass facades to revitalize the exterior curb appeal of this commercial centre.',
        'highlights'     => ['Rotary Surface Pressure Cleaning', 'Algae & Moss Eradication', 'Streak-Free Exterior Window Polish']
    ],
    [
        'id'             => 'property-maintenance-1',
        'category'       => 'property-maintenance',
        'category_name'  => 'Property Maintenance',
        'title'          => 'Strata Facility Maintenance & Common Area Detailing',
        'location'       => 'Richmond, BC',
        'scope'          => 'Preventive fixture upkeep, seasonal property cleanup & mechanical room inspection',
        'before_img'     => './assets/img/our-work/property-maintenance/facility-repair-before.jpg',
        'after_img'      => './assets/img/our-work/property-maintenance/facility-repair-after.jpg',
        'description'    => 'Comprehensive routine maintenance program covering building entryways, parkade drain check, lighting audits, and grounds upkeep for a residential strata.',
        'highlights'     => ['Common Area Checklists', 'Lighting & Fixture Inspections', 'Preventive Trade Coordination']
    ],
    [
        'id'             => 'snow-ice-1',
        'category'       => 'snow-ice',
        'category_name'  => 'Snow & Ice Management',
        'title'          => 'Commercial Parkade & Walkway De-Icing',
        'location'       => 'Coquitlam, BC',
        'scope'          => 'Early morning snow clearing, anti-icing brine pre-treatment & high-traffic walkway salting',
        'before_img'     => './assets/img/our-work/snow-ice/snow-clearing-before.jpg',
        'after_img'      => './assets/img/our-work/snow-ice/snow-clearing-after.jpg',
        'description'    => 'Overnight response to heavy snowfall, ensuring safe tenant access, clear handicap routes, and risk-free parking areas before 7:00 AM opening.',
        'highlights'     => ['Zero-Tolerance Snow Plowing', 'Eco-Friendly Salting & De-Icer', '24/7 Weather Tracking Response']
    ],
    [
        'id'             => 'specialty-1',
        'category'       => 'specialty',
        'category_name'  => 'Specialty Cleaning',
        'title'          => 'Healthcare & Clinic High-Level Detailing',
        'location'       => 'Langley, BC',
        'scope'          => 'Hospital-grade sanitization, touch-point disinfection & medical suite cleanout',
        'before_img'     => './assets/img/our-work/specialty/deep-sanitization-before.jpg',
        'after_img'      => './assets/img/our-work/specialty/deep-sanitization-after.jpg',
        'description'    => 'Specialized medical clinic sanitization with strict infection control protocols, cross-contamination prevention, and certified medical-grade solutions.',
        'highlights'     => ['WHMIS-Certified Handling', 'HEPA Air Filtration & Dusting', 'Hospital-Grade Disinfection']
    ],
];
