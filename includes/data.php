<?php
declare(strict_types=1);

function eventora_data(): array
{
    static $data = null;

    if ($data !== null) {
        return $data;
    }

    $data = [
        'brand' => [
            'name' => 'Eventora',
            'tagline' => 'Experience Booking Platform',
            'headline' => 'Curated events, seamless reservations, and a premium guest journey.',
            'subcopy' => 'Eventora brings discovery, ticketing, guest management, and organizer reporting into one elegant platform built for modern experiences.',
        ],
        'company' => [
            'name' => 'Seniorman Computers',
            'email' => 'cniorman6@gmail.com',
            'phone' => '08164616531',
            'license' => 'MIT License',
        ],
        'pages' => [
            'index' => ['label' => 'Overview', 'file' => 'index.php'],
            'discover' => ['label' => 'Discover', 'file' => 'discover.php'],
            'event' => ['label' => 'Featured Event', 'file' => 'event-detail.php'],
            'attendee' => ['label' => 'Attendee', 'file' => 'attendee.php'],
            'organizer' => ['label' => 'Organizer', 'file' => 'organizer.php'],
        ],
        'stats' => [
            ['label' => 'Events on sale', 'value' => '48', 'note' => 'Across nightlife, culture, premium dining, and business experiences'],
            ['label' => 'Reservation completion', 'value' => '97%', 'note' => 'Fast checkout with seat selection and clear guest details'],
            ['label' => 'Guest satisfaction', 'value' => '4.9/5', 'note' => 'Driven by smoother arrival flow and polished confirmation journeys'],
        ],
        'features' => [
            [
                'title' => 'Curated discovery',
                'copy' => 'Present premium events with strong imagery, clean filtering, and a browsing experience that feels elevated from the first click.',
            ],
            [
                'title' => 'Seat and ticket flow',
                'copy' => 'Handle reservations, capacity, ticket tiers, and confirmation details without making the checkout feel heavy.',
            ],
            [
                'title' => 'Guest dashboard',
                'copy' => 'Give attendees a single place to review bookings, entry details, payment status, and upcoming plans.',
            ],
            [
                'title' => 'Organizer command view',
                'copy' => 'Track sales, attendance, high-value events, and operational notes from one focused dashboard.',
            ],
        ],
        'featured_event' => [
            'name' => 'Moonlight Roof Sessions',
            'type' => 'Live Experience',
            'venue' => 'The Meridian Rooftop, Lagos',
            'date' => 'Saturday, 24 May 2026',
            'time' => '7:30 PM',
            'price' => 'From N18,000',
            'capacity' => '420 guests',
            'summary' => 'An elevated evening of live sets, chef-led tasting plates, skyline views, and private lounge reservations for guests who want a refined night out.',
            'highlights' => [
                'Priority entry lanes and digital ticket validation',
                'Tiered seating with lounge, terrace, and signature access',
                'Personalized booking notes for celebrations and VIP service',
            ],
        ],
        'events' => [
            [
                'name' => 'Moonlight Roof Sessions',
                'city' => 'Lagos',
                'category' => 'Music',
                'date' => '24 May',
                'price' => 'N18,000',
                'status' => 'Selling fast',
                'summary' => 'An intimate rooftop night with curated performances, tasting plates, and skyline service.',
            ],
            [
                'name' => 'The Founders Table',
                'city' => 'Abuja',
                'category' => 'Business',
                'date' => '29 May',
                'price' => 'N35,000',
                'status' => 'New release',
                'summary' => 'A private networking dinner designed for founders, operators, and investors.',
            ],
            [
                'name' => 'Cinema Under Silk',
                'city' => 'Lagos',
                'category' => 'Lifestyle',
                'date' => '31 May',
                'price' => 'N12,000',
                'status' => 'Limited seats',
                'summary' => 'An outdoor film night with signature cocktails, premium seating, and live pre-show music.',
            ],
            [
                'name' => 'The Modern Wedding Edit',
                'city' => 'Port Harcourt',
                'category' => 'Exhibition',
                'date' => '07 Jun',
                'price' => 'N8,000',
                'status' => 'Open',
                'summary' => 'A curated wedding exhibition for premium vendors, planners, and couples.',
            ],
        ],
        'filters' => [
            'Tonight in Lagos',
            'Business and networking',
            'Private dining',
            'Premium concerts',
        ],
        'attendee_metrics' => [
            ['label' => 'Upcoming reservations', 'value' => '4'],
            ['label' => 'Favorite experiences', 'value' => '12'],
            ['label' => 'Priority access passes', 'value' => '2'],
        ],
        'attendee_bookings' => [
            [
                'title' => 'Moonlight Roof Sessions',
                'date' => '24 May 2026',
                'ticket' => 'Signature Terrace',
                'status' => 'Confirmed',
                'note' => 'Check-in opens at 6:45 PM. Table notes saved successfully.',
            ],
            [
                'title' => 'The Founders Table',
                'date' => '29 May 2026',
                'ticket' => 'Executive Seat',
                'status' => 'Awaiting payment',
                'note' => 'Reservation held for 18 minutes pending payment completion.',
            ],
        ],
        'organizer_metrics' => [
            ['label' => 'Gross sales', 'value' => 'N12.4M', 'delta' => '+14%'],
            ['label' => 'Seats reserved', 'value' => '1,863', 'delta' => '+9%'],
            ['label' => 'Attendance rate', 'value' => '91%', 'delta' => '+6 pts'],
            ['label' => 'Refund requests', 'value' => '12', 'delta' => '-3'],
        ],
        'organizer_events' => [
            [
                'title' => 'Moonlight Roof Sessions',
                'booked' => '378 / 420',
                'revenue' => 'N6.9M',
                'status' => 'On track',
            ],
            [
                'title' => 'The Founders Table',
                'booked' => '124 / 160',
                'revenue' => 'N4.1M',
                'status' => 'Premium demand',
            ],
            [
                'title' => 'Cinema Under Silk',
                'booked' => '211 / 260',
                'revenue' => 'N1.4M',
                'status' => 'Campaign live',
            ],
        ],
        'timeline' => [
            ['time' => '08:00', 'task' => 'Review overnight reservations and payment exceptions'],
            ['time' => '11:30', 'task' => 'Approve event artwork refresh for weekend promotions'],
            ['time' => '14:15', 'task' => 'Confirm VIP seating map and guest service notes'],
            ['time' => '18:00', 'task' => 'Track live arrivals and gate validation performance'],
        ],
    ];

    return $data;
}
