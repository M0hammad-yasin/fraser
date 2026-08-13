<?php

/**
 * Blog post data store.
 *
 * $blogs is an associative array keyed by slug. blogs.php loops over this
 * to render the listing page; blog.php looks up a single entry by the
 * ?slug= query param to render the full post.
 *
 * Image convention: ./assets/img/blog/blog-{slug}.jpeg
 * (drop the matching image file in assets/img/blog/ for each post)
 */

$blogs = [

    'hidden-cost-of-deferred-maintenance' => [
        'title'             => 'The Hidden Cost of Deferred Maintenance',
        'excerpt'           => "Small repairs left unaddressed don't stay small. Here's why deferred maintenance costs property managers and strata councils more — and how to stay ahead of it.",
        'meta_description'  => "Small repairs left unaddressed don't stay small. Here's why deferred maintenance costs property managers and strata councils more — and how to stay ahead of it.",
        'author'            => 'Fraser Facility Services',
        'category'          => 'Facility Care',
        'tags'              => ['Facility Care', 'Maintenance', 'Property Management'],
        'date'              => '2026-08-15',
        'image'             => './assets/img/blog/blog-hidden-cost-of-deferred-maintenance.jpeg',
        'content'           => <<<HTML
      <p>A dripping faucet. A hairline crack in the parkade slab. A door closer that's a little slow to catch. None of it looks urgent. All of it can wait until next quarter's budget — or so the thinking goes.</p>
      <p>It's the most expensive assumption in property management.</p>

      <h2 class="mb-4 mt-5">Why "Wait and See" Costs More</h2>
      <p>Deferred maintenance doesn't sit still. Small issues compound:</p>
      <ul>
        <li>A minor roof leak becomes insulation damage, then drywall repair, then mold remediation.</li>
        <li>A worn door seal becomes a heating bill spike, then a full unit replacement.</li>
        <li>A cracked parking membrane becomes rebar corrosion and a structural repair order.</li>
      </ul>
      <p>By the time a deferred item becomes visible enough to demand action, it's usually 3–5x more expensive to fix than it would have been at the first sign of wear — and it often comes with an emergency-service premium attached, because by then it can't wait for a scheduled visit.</p>

      <h2 class="mb-4 mt-5">The Budget Trap</h2>
      <p>Deferring maintenance often looks like fiscal discipline in the short term. It isn't. It's shifting cost from an operating line to a capital emergency — and capital emergencies are harder to plan for, harder to vote through at a strata AGM, and harder to explain to tenants or owners after the fact.</p>
      <p>A preventive maintenance program does the opposite: it turns unpredictable, large repair bills into predictable, smaller ones. That's not just cheaper — it's easier to budget for.</p>

      <h2 class="mb-4 mt-5">What Preventive Maintenance Actually Looks Like</h2>
      <p>It doesn't need to be complicated. A solid program covers:</p>
      <ul>
        <li><strong>Scheduled inspections</strong> — catching wear before it becomes failure</li>
        <li><strong>Seasonal preparation</strong> — gutters, drainage, and exterior systems before weather turns</li>
        <li><strong>Mechanical upkeep</strong> — HVAC, plumbing, and electrical systems serviced on a cycle, not just when something breaks</li>
        <li><strong>A single point of contact</strong> — so nothing falls through the cracks between vendors</li>
      </ul>

      <h2 class="mb-4 mt-5">The Real Question</h2>
      <p>The question isn't whether maintenance costs money. It always does. The real question is whether you want to control when and how much — or let deferred issues decide that for you.</p>
      <p><strong>Fraser Facility Services runs preventive building maintenance programs across the Lower Mainland</strong>, so small issues get caught while they're still small. If your property's maintenance plan is more reactive than proactive right now, let's talk about what a structured program would look like for your building.</p>
      HTML,
    ],

    'commercial-vs-residential-cleaning' => [
        'title'             => 'Commercial vs. Residential Cleaning — Why One Approach Doesn\'t Fit All',
        'excerpt'           => 'Office towers, medical clinics, and residential strata buildings all need very different cleaning approaches. Here\'s what actually changes, and why it matters.',
        'meta_description'  => 'Office towers, medical clinics, and residential strata buildings all need very different cleaning approaches. Here\'s what actually changes, and why it matters.',
        'author'            => 'Fraser Facility Services',
        'category'          => 'Janitorial',
        'tags'              => ['Janitorial', 'Commercial', 'Residential'],
        'date'              => '2026-08-08',
        'image'             => './assets/img/blog/blog-commercial-vs-residential-cleaning.jpeg',
        'content'           => <<<HTML
      <p>"Cleaning is cleaning" is one of the more expensive myths in facility management. A janitorial program built for a warehouse won't work in a medical clinic. A residential strata building has different expectations, schedules, and compliance needs than a retail storefront. Treating them the same is how properties end up under-serviced in the areas that matter most — and over-serviced in the ones that don't.</p>

      <h2 class="mb-4 mt-5">Office Buildings</h2>
      <p>The priority is consistency and discretion — cleaning happens around business hours, not during them. Day porter service, floor care, and washroom sanitation need to run on a schedule tenants barely notice, with supply management handled proactively so common areas never run short.</p>

      <h2 class="mb-4 mt-5">Retail & Restaurants</h2>
      <p>High foot traffic and food-safety expectations change everything. Floors, entryways, and washrooms need frequent touch-ups throughout the day, not just an end-of-day clean. Disinfection protocols matter more here than almost anywhere else.</p>

      <h2 class="mb-4 mt-5">Medical & Dental Offices</h2>
      <p>This is the most specialized tier. Sanitization standards, waste handling, and cross-contamination protocols aren't optional extras — they're the baseline. A cleaning team without healthcare-facility experience is a liability, not a convenience.</p>

      <h2 class="mb-4 mt-5">Property Management & Strata Buildings</h2>
      <p>Shared spaces — lobbies, elevators, hallways, amenity rooms — get used by dozens of households a day, with expectations set by an entire ownership group rather than a single tenant. Communication and reliability matter as much as the cleaning itself, since a missed visit is visible to everyone, immediately.</p>

      <h2 class="mb-4 mt-5">Warehouses & Industrial Sites</h2>
      <p>Scale and safety take priority over polish. Think high-dusting, power washing, and heavy-duty floor care suited to industrial equipment and traffic — not a light residential touch-up.</p>

      <h2 class="mb-4 mt-5">Homeowners & Residential Properties</h2>
      <p>Smaller footprint, but higher expectations for care and attention to detail — this is someone's home, not a leased floor plate.</p>

      <h2 class="mb-4 mt-5">The Common Thread</h2>
      <p>Every one of these needs a team that adjusts its approach to the property, not a template applied everywhere. That's the difference between a cleaning vendor and a facility services partner.</p>
      <p><strong>Fraser Facility Services builds janitorial programs around the property, not the other way around</strong> — covering office, retail, medical, industrial, strata, and residential clients across the Fraser region. Tell us what you're working with, and we'll tell you what the right program actually looks like.</p>
      HTML,
    ],

    'winter-proofing-your-property' => [
        'title'             => 'Winter-Proofing Your Property — A Lower Mainland Snow & Ice Checklist',
        'excerpt'           => 'A practical snow and ice management checklist for Lower Mainland property managers and homeowners — what to prep before the first freeze.',
        'meta_description'  => 'A practical snow and ice management checklist for Lower Mainland property managers and homeowners — what to prep before the first freeze.',
        'author'            => 'Fraser Facility Services',
        'category'          => 'Exterior Services',
        'tags'              => ['Exterior Services', 'Seasonal', 'Snow & Ice'],
        'date'              => '2026-08-01',
        'image'             => './assets/img/blog/blog-winter-proofing-your-property.jpeg',
        'content'           => <<<HTML
      <p>The Lower Mainland doesn't get harsh winters, and that's exactly the problem. Properties here are rarely built or maintained for snow and ice the way colder regions are, so a single unexpected freeze can catch a building completely unprepared — and an unprepared entryway or parking lot isn't just an inconvenience, it's a liability.</p>
      <p>Here's what a property should have sorted before the first cold snap.</p>

      <h2 class="mb-4 mt-5">1. Walkway & Entrance Prep</h2>
      <p>Slip-and-fall incidents cluster around entrances, stairs, and ramps — the highest-traffic, highest-liability points on any property. Confirm salt/ice-melt stock is on hand and that there's a clear response plan for who applies it and when.</p>

      <h2 class="mb-4 mt-5">2. Parking Lot & Drive Aisle Plan</h2>
      <p>Know your plowing trigger point (how much accumulation before a crew is dispatched) and your response window before it snows, not during. Waiting until a lot is impassable to make that call costs time you don't have.</p>

      <h2 class="mb-4 mt-5">3. Drainage Checks</h2>
      <p>Blocked storm drains and gutters turn a normal rain-into-freeze cycle into ice sheets exactly where people walk and drive. Clear debris before the season starts, not after the first complaint.</p>

      <h2 class="mb-4 mt-5">4. Roof & Gutter Inspection</h2>
      <p>Ice damming happens when gutters are already compromised going into winter. A pre-season inspection catches loose fastenings, clogs, and drainage issues while they're still a maintenance item, not an emergency call.</p>

      <h2 class="mb-4 mt-5">5. Signage & Communication</h2>
      <p>Temporary "caution — icy conditions" signage and a clear tenant/resident communication plan reduce both incidents and liability exposure. Decide now who posts it and where it's stored.</p>

      <h2 class="mb-4 mt-5">6. A Standing Service Agreement</h2>
      <p>The properties that handle winter well aren't the ones scrambling to find a contractor after the first snowfall — they're the ones with a snow and ice management plan already in place before the season starts.</p>
      <p><strong>Fraser Facility Services manages snow plowing, ice control, and seasonal exterior upkeep for properties across the Lower Mainland.</strong> If your building doesn't have a winter response plan locked in yet, now's the time — not in the middle of the first storm.</p>
      HTML,
    ],

    'how-to-choose-a-facility-services-partner' => [
        'title'             => 'How to Choose a Facility Services Partner (Instead of Juggling Five Vendors)',
        'excerpt'           => 'Separate contracts for cleaning, maintenance, landscaping, and snow removal cost more than money. Here\'s what to look for in a single facility services partner.',
        'meta_description'  => 'Separate contracts for cleaning, maintenance, landscaping, and snow removal cost more than money. Here\'s what to look for in a single facility services partner.',
        'author'            => 'Fraser Facility Services',
        'category'          => 'Facility Partnership',
        'tags'              => ['Facility Partnership', 'Property Management'],
        'date'              => '2026-07-25',
        'image'             => './assets/img/blog/blog-how-to-choose-a-facility-services-partner.jpeg',
        'content'           => <<<HTML
      <p>Most properties don't start out with one vendor for everything. They end up there gradually — a cleaning company for janitorial, a separate contractor for repairs, a landscaper for the grounds, someone else for snow removal, and a fifth number to call when the HVAC acts up.</p>
      <p>Each hire made sense on its own. Together, they create a management problem nobody signed up for.</p>

      <h2 class="mb-4 mt-5">What Multi-Vendor Management Actually Costs You</h2>
      <ul>
        <li><strong>Time.</strong> Every issue means figuring out which vendor to call, then following up separately with each one.</li>
        <li><strong>Accountability gaps.</strong> When something falls between janitorial and maintenance, every vendor can point to another as responsible — and nothing gets fixed while that plays out.</li>
        <li><strong>Inconsistent standards.</strong> Five vendors means five different quality bars, five different communication styles, and five different invoices to reconcile.</li>
        <li><strong>Higher effective cost.</strong> Coordination time is real cost, even when it's not itemized on an invoice.</li>
      </ul>

      <h2 class="mb-4 mt-5">What to Look For in a Single Partner</h2>
      <p><strong>Range that actually covers your building.</strong> Janitorial, building maintenance, exterior services, and mechanical support under one roof means one call handles almost everything that comes up.</p>
      <p><strong>A single point of contact.</strong> Not a call center — someone who knows your property and is accountable for the work, end to end.</p>
      <p><strong>Responsiveness you can measure.</strong> How fast does a request actually get answered, not just acknowledged?</p>
      <p><strong>Experience across your property type.</strong> A partner who's worked office towers, strata buildings, medical offices, and industrial sites understands that each one needs a different approach — not a copy-paste service plan.</p>
      <p><strong>Preventive thinking, not just reactive service.</strong> The right partner catches issues early instead of waiting for a work order.</p>

      <h2 class="mb-4 mt-5">The Real Test</h2>
      <p>Ask any prospective partner one question: if something falls outside your usual scope, what happens next? A single vendor with a narrow scope says "that's not us." A true facility services partner says "we'll handle it, or connect you directly with someone who will" — because they're accountable for the whole property, not just their slice of it.</p>
      <p><strong>Fraser Facility Services was built around that idea</strong> — one partner, every service, one number to call for janitorial, maintenance, exterior, and mechanical needs across the Fraser region.</p>
      HTML,
    ],

    'whats-included-in-a-facility-maintenance-program' => [
        'title'             => "What's Actually Included in a Facility Maintenance Program?",
        'excerpt'           => "A plain-English breakdown of what plumbing, electrical, and HVAC preventive maintenance actually covers — for building owners who aren't technical.",
        'meta_description'  => "A plain-English breakdown of what plumbing, electrical, and HVAC preventive maintenance actually covers — for building owners who aren't technical.",
        'author'            => 'Fraser Facility Services',
        'category'          => 'Mechanical & Facility Support',
        'tags'              => ['Mechanical', 'HVAC', 'Maintenance'],
        'date'              => '2026-07-18',
        'image'             => './assets/img/blog/blog-whats-included-in-a-facility-maintenance-program.jpeg',
        'content'           => <<<HTML
      <p>"Facility maintenance program" sounds like something only an engineer would understand. It isn't. Strip away the jargon and it's a simple idea: the mechanical systems that keep a building running get checked and serviced on a schedule, instead of being left alone until something breaks.</p>
      <p>Here's what that actually covers, in plain terms.</p>

      <h2 class="mb-4 mt-5">Plumbing</h2>
      <ul>
        <li>Checking for slow leaks before they become water damage</li>
        <li>Testing shut-off valves so they actually work in an emergency</li>
        <li>Clearing slow drains before they become blocked ones</li>
        <li>Inspecting fixtures and connections for wear</li>
      </ul>
      <p>The goal is catching a \$200 fix before it becomes a \$20,000 water-damage claim.</p>

      <h2 class="mb-4 mt-5">Electrical</h2>
      <ul>
        <li>Inspecting panels, breakers, and connections for wear or overheating risk</li>
        <li>Testing emergency lighting and exit signage — often a code requirement, not just good practice</li>
        <li>Checking outlets and fixtures in common areas for damage</li>
        <li>Confirming systems are labeled and documented correctly for the next person who has to work on them</li>
      </ul>

      <h2 class="mb-4 mt-5">HVAC</h2>
      <ul>
        <li>Filter changes on a schedule, not "whenever someone notices airflow is off"</li>
        <li>Checking system performance before peak heating or cooling season, not during it</li>
        <li>Inspecting for leaks, unusual noise, or inefficient operation</li>
        <li>Extending equipment lifespan through regular servicing instead of run-to-failure use</li>
      </ul>

      <h2 class="mb-4 mt-5">Preventive Maintenance Programs (the part that ties it together)</h2>
      <p>Individually, these are just tasks. Put on a recurring schedule with inspection records and a single team accountable for the results, they become a program — one that turns "something might break" into "we already know the condition of every major system in this building."</p>

      <h2 class="mb-4 mt-5">Facility Inspections</h2>
      <p>Periodic walkthroughs that catch what a scheduled task list might miss — general wear, safety concerns, and small issues before they show up as tenant complaints or work orders.</p>

      <h2 class="mb-4 mt-5">Why This Matters More Than It Sounds Like It Should</h2>
      <p>Buildings don't fail all at once. They fail one deferred inspection at a time. A maintenance program isn't an extra cost — it's the mechanism that keeps small, cheap fixes from turning into large, disruptive ones.</p>
      <p><strong>Fraser Facility Services runs mechanical and facility support programs — plumbing, electrical, HVAC, and inspections — for commercial and residential properties across the Lower Mainland.</strong> If your building's maintenance is more "wait and see" than "scheduled and tracked," that's worth a conversation.</p>
      HTML,
    ],

];
