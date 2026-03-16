<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiraya Pursuits - Find Your Dream Career</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b81430",
                        "background-light": "#f8f6f6",
                        "background-dark": "#211114",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">

<!-- Header Section -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-primary/10 px-6 md:px-20 py-4 bg-white dark:bg-background-dark fixed top-0 z-50 w-full">
    <!-- Logo & Brand Name -->
    <a class="flex items-center" href="{{ route('home') }}">
        <img alt="HIRAYA PURSUITS" class="h-10 w-10 md:h-12 md:w-12 rounded-full object-cover" src="{{ asset('images/logo.png') }}">
        <span class="text-lg md:text-xl font-bold ml-2 text-slate-900 dark:text-white">Hiraya Pursuits</span>
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex gap-8">
         <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#jobs">Jobs</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#about">About</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('privacy') ? 'text-primary font-bold underline underline-offset-4' : '' }}" href="{{ route('privacy') }}">Terms & Policy</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#developers">Developers</a>
            
    </div>

    <!-- Desktop Buttons -->
    <div class="hidden md:flex gap-3">
    @auth
        <!-- User is logged in -->
        <a href="{{ route('applicant.dashboard') }}" class="text-primary font-bold text-sm hover:underline">
            Dashboard
        </a>
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="bg-transparent border border-primary text-primary px-4 py-2 rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-bold">
                Logout
            </button>
        </form>
    @else
        <!-- User is NOT logged in -->
        <a href="{{ route('login') }}" class="flex min-w-21 items-center justify-center rounded-lg h-10 px-4 bg-primary/10 text-primary text-sm font-bold border border-primary/20 hover:bg-primary/20 transition-colors">
            Log In
        </a>
        <a href="{{ route('register') }}" class="flex min-w-21 items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-colors">
            Sign Up
        </a>
    @endauth
</div>

    <!-- Mobile Menu Button -->
    <button id="mobileMenuBtn" class="md:hidden text-slate-900 dark:text-white focus:outline-none">
        <span class="material-symbols-outlined text-3xl">menu</span>
    </button>

    <!-- Mobile Menu (Hidden by default) -->
   <div id="mobileMenu" class="md:hidden absolute top-full left-0 w-full bg-white dark:bg-background-dark border-b border-slate-200 dark:border-slate-700 p-6 flex flex-col gap-4 shadow-lg z-50">
    <!-- ... your nav links ... -->
        <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#jobs">Jobs</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#about">About</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('privacy') ? 'text-primary font-bold underline underline-offset-4' : '' }}" href="{{ route('privacy') }}">Terms & Policy</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#developers">Developers</a>
        <div class="flex flex-col gap-3 mt-4">
        @auth
            <a href="{{ route('applicant.dashboard') }}" class="w-full py-2 bg-primary/10 text-primary text-sm font-bold border border-primary/20 rounded-lg text-center">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full py-2 bg-slate-100 dark:bg-slate-700 text-slate-900 dark:text-white text-sm font-bold rounded-lg">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="w-full py-2 bg-primary/10 text-primary text-sm font-bold border border-primary/20 rounded-lg text-center">Log In</a>
            <a href="{{ route('register') }}" class="w-full py-2 bg-primary text-white text-sm font-bold rounded-lg text-center">Sign Up</a>
        @endauth
    </div>
</div>
</header>

<main class="flex-1 pt-20">

<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 md:px-20 py-16">
    <div class="flex flex-col lg:flex-row gap-12 items-center">
        <div class="flex flex-col gap-8 flex-1">
            <div class="flex flex-col gap-4">
                <h1 class="text-slate-900 dark:text-slate-100 text-4xl md:text-6xl font-black leading-tight tracking-tight">
                    Find Your Dream Career with <span class="text-primary">Hiraya Pursuits</span>
                </h1>
                <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl font-normal leading-relaxed max-w-xl">
                    Discover endless opportunities and take the next step in your professional journey with our comprehensive job platform.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 mt-4">
                <button class="flex min-w-40 items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-colors">
                    Find Jobs
                </button>
                <button class="flex min-w-40 items-center justify-center rounded-lg h-12 px-6 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-base font-bold hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                    Post a Job
                </button>
            </div>
        </div>
        
        <!-- Hero Image Carousel -->
        <div class="flex-1 w-full max-w-md lg:max-w-lg">
            <div class="relative w-full rounded-3xl overflow-hidden shadow-2xl">
                <!-- Carousel Container -->
                <div id="heroCarousel" class="flex transition-transform duration-1000 ease-in-out">
                    
                    <!-- Image 1 -->
                    <div class="min-w-full relative aspect-[4/3]">
                        <img class="w-full h-full object-cover" alt="Team of professionals working together in a modern office" src="{{ asset('images/Modern-Office.jpg') }}">
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <p class="text-sm font-semibold">Modern Office Environment</p>
                        </div>
                    </div>
                    
                    <!-- Image 2 -->
                    <div class="min-w-full relative aspect-[4/3]">
                        <img class="w-full h-full object-cover" alt="Remote work setup with laptop and coffee" src="{{ asset('images/remote-work.jpg') }}">
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <p class="text-sm font-semibold">Work From Anywhere</p>
                        </div>
                    </div>
                    
                    <!-- Image 3 -->
                    <div class="min-w-full relative aspect-[4/3]">
                        <img class="w-full h-full object-cover" alt="Professional meeting and collaboration" src="{{ asset('images/meeting.jpg') }}">
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <p class="text-sm font-semibold">Team Collaboration</p>
                        </div>
                    </div>
                    
                    <!-- Image 4 -->
                    <div class="min-w-full relative aspect-[4/3]">
                        <img class="w-full h-full object-cover" alt="Career growth and success" src="{{ asset('images/success.jpg') }}">
                        <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <p class="text-sm font-semibold">Career Growth</p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Carousel Navigation Dots -->
                <div id="heroCarouselDots" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
                    <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors" data-index="0"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors" data-index="1"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors" data-index="2"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors" data-index="3"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- In-Demand Jobs -->
<section id="jobs" class="bg-white dark:bg-background-dark/50 py-20 px-6 md:px-20 border-y border-slate-100 dark:border-slate-800">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white">In-Demand Jobs</h2>
                <p class="text-slate-500 mt-2">The fastest growing roles in the market right now</p>
            </div>
            <a class="text-primary font-semibold flex items-center gap-1 hover:gap-2 transition-all" href="#jobs">View All <span class="material-symbols-outlined">chevron_right</span></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            <!-- Job Card 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm  flex flex-col gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">code</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Web Developer</h3>
                    <p class="text-slate-500 text-sm">Tech Corp • Remote</p>
                    <p class="text-primary font-bold text-sm mt-2">₱80k - ₱120k</p>
                </div>
                <button class="mt-auto w-full py-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white transition-colors text-slate-900 dark:text-white font-semibold rounded-lg text-sm">Apply Now</button>
            </div>
            <!-- Job Card 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm flex flex-col gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">design_services</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">UI/UX Designer</h3>
                    <p class="text-slate-500 text-sm">Creative Studio • NY</p>
                    <p class="text-primary font-bold text-sm mt-2">₱75k - ₱110k</p>
                </div>
                <button class="mt-auto w-full py-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white transition-colors text-slate-900 dark:text-white font-semibold rounded-lg text-sm">Apply Now</button>
            </div>
            <!-- Job Card 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm  flex flex-col gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">database</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Data Analyst</h3>
                    <p class="text-slate-500 text-sm">Data Insights • Global</p>
                    <p class="text-primary font-bold text-sm mt-2">₱90k - ₱130k</p>
                </div>
                <button class="mt-auto w-full py-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white transition-colors text-slate-900 dark:text-white font-semibold rounded-lg text-sm">Apply Now</button>
            </div>
            <!-- Job Card 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm  flex flex-col gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">campaign</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Digital Marketer</h3>
                    <p class="text-slate-500 text-sm">Growth Agency • LDN</p>
                    <p class="text-primary font-bold text-sm mt-2">₱60k - ₱95k</p>
                </div>
                <button class="mt-auto w-full py-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white transition-colors text-slate-900 dark:text-white font-semibold rounded-lg text-sm">Apply Now</button>
            </div>
            <!-- Job Card 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm  flex flex-col gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">terminal</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Software Engineer</h3>
                    <p class="text-slate-500 text-sm">System Pro • SF</p>
                    <p class="text-primary font-bold text-sm mt-2">₱100k - ₱150k</p>
                </div>
                <button class="mt-auto w-full py-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white transition-colors text-slate-900 dark:text-white font-semibold rounded-lg text-sm">Apply Now</button>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="max-w-7xl mx-auto px-6 md:px-20 py-24">
    <div class="flex flex-col lg:flex-row gap-16 items-center">
        <div class="flex-1 order-2 lg:order-1">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Connecting Talent with Purpose</h2>
            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mb-6">
                At Hiraya Pursuits, we believe that the right career choice can transform a life. Our platform serves as a modern bridge connecting ambitious job seekers with forward-thinking employers.
            </p>
            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                Whether you're a fresh graduate looking for your first break or a seasoned professional seeking a new challenge, we provide the tools and resources you need to succeed in today's competitive job market.
            </p>
        </div>
        <div class="flex-1 order-1 lg:order-2">
            <div class="bg-primary/5 rounded-3xl p-8 relative overflow-hidden">
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary/10 rounded-full"></div>
                <div class="relative z-10 grid grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg">
                        <h4 class="text-3xl font-black text-primary">15k+</h4>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Active Jobs</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg mt-8">
                        <h4 class="text-3xl font-black text-primary">500+</h4>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Trusted Companies</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg">
                        <h4 class="text-3xl font-black text-primary">20k+</h4>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Daily Applications</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg mt-8">
                        <h4 class="text-3xl font-black text-primary">98%</h4>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Success Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-primary py-24 px-6 md:px-20 text-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose Hiraya Pursuits?</h2>
            <p class="text-white/70 max-w-2xl mx-auto text-lg">We provide a seamless experience for both employers and job seekers.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="flex flex-col items-center text-center gap-4">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-3xl">search_insights</span>
                </div>
                <h3 class="text-lg font-bold">Easy Search</h3>
                <p class="text-white/60 text-sm">Advanced filters to find your perfect match in seconds.</p>
            </div>
            <div class="flex flex-col items-center text-center gap-4">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-3xl">verified_user</span>
                </div>
                <h3 class="text-lg font-bold">Trusted Employers</h3>
                <p class="text-white/60 text-sm">Vetted companies only to ensure a safe job hunting experience.</p>
            </div>
            <div class="flex flex-col items-center text-center gap-4">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-3xl">flash_on</span>
                </div>
                <h3 class="text-lg font-bold">Fast Applications</h3>
                <p class="text-white/60 text-sm">One-click apply for verified profiles and quick responses.</p>
            </div>
            <div class="flex flex-col items-center text-center gap-4">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-3xl">trending_up</span>
                </div>
                <h3 class="text-lg font-bold">Opportunities</h3>
                <p class="text-white/60 text-sm">Access to exclusive roles and career growth workshops.</p>
            </div>
            <div class="flex flex-col items-center text-center gap-4">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center border border-white/20">
                    <span class="material-symbols-outlined text-3xl">shield_person</span>
                </div>
                <h3 class="text-lg font-bold">Secure Platform</h3>
                <p class="text-white/60 text-sm">Your data privacy and security are our top priorities.</p>
            </div>
        </div>
    </div>
</section>

<!-- Meet the Developer -->
<section id="developers" class="max-w-7xl mx-auto px-6 md:px-20 py-24">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">
            Meet the Development Team
        </h2>
        <p class="text-slate-500 mt-2">The minds behind Hiraya Pursuits</p>
    </div>

    <div class="relative overflow-hidden">
        <!-- Carousel Container -->
        <div id="teamCarousel" class="flex transition-transform duration-700 ease-in-out">
            
            <!-- Ion team leader -->
            <div class="min-w-full flex justify-center">
                <div class="bg-background-light dark:bg-slate-800 rounded-3xl p-10 flex flex-col md:flex-row items-center gap-10 border border-slate-200 dark:border-slate-700 max-w-4xl">
                    <div class="w-32 h-32 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-4 border-primary shadow-xl shrink-0">
                        <img src="{{ asset('images/ION.jpg') }}" class="w-full h-full object-cover" alt="Irion Mike Sandigan">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Irion Mike Sandigan</h3>
                        <p class="text-primary font-semibold mb-3">Lead Full Stack Developer</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            Lead engineer behind Hiraya Pursuits. Focused on building scalable
                            web platforms using Laravel and modern UI technologies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Johaira Bansara -->
            <div class="min-w-full flex justify-center">
                <div class="bg-background-light dark:bg-slate-800 rounded-3xl p-10 flex flex-col md:flex-row items-center gap-10 border border-slate-200 dark:border-slate-700 max-w-4xl">
                    <div class="w-32 h-32 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-4 border-primary shadow-xl shrink-0">
                        <img src="{{ asset('images/BANSARA.jpg') }}" class="w-full h-full object-cover" alt="Johaira Bansara">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Johaira Bansara</h3>
                        <p class="text-primary font-semibold mb-3">UI / UX Designer and Frontend Developer</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            Responsible for the modern user interface and seamless
                            experience of the Hiraya platform.
                        </p>
                    </div>
                </div>
            </div>

            <!-- MECA -->
            <div class="min-w-full flex justify-center">
                <div class="bg-background-light dark:bg-slate-800 rounded-3xl p-10 flex flex-col md:flex-row items-center gap-10 border border-slate-200 dark:border-slate-700 max-w-4xl">
                    <div class="w-32 h-32 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-4 border-primary shadow-xl shrink-0">
                        <img src="{{ asset('images/FLOR.jpg') }}" class="w-full h-full object-cover" alt="Mecaella Flor">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Mecaella Flor</h3>
                        <p class="text-primary font-semibold mb-3">UI / UX Designer and Frontend Developer</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            Mecaella develops interactive and dynamic interfaces that make job searching
                            simple and engaging. She ensures the Hiraya platform works smoothly across
                            desktop, tablet, and mobile devices.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ashley -->
            <div class="min-w-full flex justify-center">
                <div class="bg-background-light dark:bg-slate-800 rounded-3xl p-10 flex flex-col md:flex-row items-center gap-10 border border-slate-200 dark:border-slate-700 max-w-4xl">
                    <div class="w-32 h-32 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-4 border-primary shadow-xl shrink-0">
                        <img src="{{ asset('images/ASHLEY.jpg') }}" class="w-full h-full object-cover" alt="Ashley Nicole Gonzales">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Ashley Nicole Gonzales</h3>
                        <p class="text-primary font-semibold mb-3">Frontend Developer</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            Ashley focuses on implementing clean layouts and improving the visual
                            experience of the Hiraya platform. She collaborates closely with designers
                            to turn UI concepts into functional web pages.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ACEBEDO -->
            <div class="min-w-full flex justify-center">
                <div class="bg-background-light dark:bg-slate-800 rounded-3xl p-10 flex flex-col md:flex-row items-center gap-10 border border-slate-200 dark:border-slate-700 max-w-4xl">
                    <div class="w-32 h-32 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-4 border-primary shadow-xl shrink-0">
                        <img src="{{ asset('images/ACEBEDO.jpg') }}" class="w-full h-full object-cover" alt="John Mark Acebedo">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">John Mark Acebedo</h3>
                        <p class="text-primary font-semibold mb-3">Backend Developer</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            John Mark helps to handle database architecture 
                            ensuring fast and secure system performance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- JASFER -->
            <div class="min-w-full flex justify-center">
                <div class="bg-background-light dark:bg-slate-800 rounded-3xl p-10 flex flex-col md:flex-row items-center gap-10 border border-slate-200 dark:border-slate-700 max-w-4xl">
                    <div class="w-32 h-32 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-4 border-primary shadow-xl shrink-0">
                        <img src="{{ asset('images/JASPER.jpg') }}" class="w-full h-full object-cover" alt="John Jasfer Eulin">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">John Jasfer Eulin</h3>
                        <p class="text-primary font-semibold mb-3">Development Assistant</p>
                        <p class="text-slate-600 dark:text-slate-400">
                            Jasfer supports the development team by assisting with front-end tasks,
                            testing features, organizing project resources, and helping coordinate
                            team needs during development. He also helps the team with errands and
                            logistics to ensure smooth project progress.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Carousel Arrows (Bottom of Developer Section) -->
        <div class="flex justify-center items-center gap-4 mt-8">
            <button id="teamPrevBtn" class="w-10 h-10 md:w-12 md:h-12 bg-white/10 dark:bg-slate-800/10 backdrop-blur-md border border-white/20 dark:border-slate-700/30 rounded-full flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-primary hover:text-white hover:border-primary transition-all shadow-lg">
                <span class="material-symbols-outlined text-lg md:text-xl">chevron_left</span>
            </button>
            <button id="teamNextBtn" class="w-10 h-10 md:w-12 md:h-12 bg-white/10 dark:bg-slate-800/10 backdrop-blur-md border border-white/20 dark:border-slate-700/30 rounded-full flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-primary hover:text-white hover:border-primary transition-all shadow-lg">
                <span class="material-symbols-outlined text-lg md:text-xl">chevron_right</span>
            </button>
        </div>

    </div>
</section>

<!-- Terms & Policy -->
<section id="terms" class="max-w-4xl mx-auto px-6 md:px-20 py-12 text-center">
    <h3 class="text-xl font-bold mb-4">Terms & Privacy</h3>
    <p class="text-slate-500 text-sm leading-relaxed mb-4">
        By using Hiraya Pursuits, you agree to our <a class="text-primary underline" href="{{ route('terms') }}">Terms of Service</a> and <a class="text-primary underline" href="{{ route('privacy') }}">Privacy Policy</a>. We are committed to protecting your personal information and providing a transparent experience. Our platform follows global data protection standards.
    </p>
</section>

<!-- CTA Section -->
<section class="px-6 md:px-20 py-20">
    <div class="max-w-5xl mx-auto bg-slate-900 dark:bg-primary rounded-3xl p-10 md:p-16 text-center relative overflow-hidden shadow-2xl">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-20 -mt-20"></div>
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/5 rounded-full -ml-10 -mb-10"></div>
        <div class="relative z-10">
            <h2 class="text-white text-3xl md:text-5xl font-black mb-6">Start your career journey today with Hiraya Pursuits.</h2>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <button class="bg-white text-slate-900 font-bold px-10 py-4 rounded-xl hover:bg-slate-100 transition-colors">Sign Up Now</button>
                <button class="bg-white/10 border border-white/20 text-white font-bold px-10 py-4 rounded-xl hover:bg-white/20 transition-colors">Browse Jobs</button>
            </div>
        </div>
    </div>
</section>

</main>

<!-- Footer Section -->
<footer class="bg-white dark:bg-background-dark border-t border-slate-100 dark:border-slate-800 pt-16 pb-8 px-6 md:px-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
        <div class="flex flex-col gap-6">
            <div class="flex items-center">
                <img alt="HIRAYA PURSUITS" class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/logo.png') }}">
                         <span class="text-lg font-bold ml-2 text-slate-900 dark:text-white">Hiraya Pursuits</span>
            </div>
            <p class="text-slate-600 dark:text-slate-400 text-sm">
                Connecting the world's best talent with the most innovative companies. Your dream career starts here.
            </p>
        </div>
        <div>
            <h4 class="text-slate-900 dark:text-white font-bold mb-6">Quick Links</h4>
            <ul class="flex flex-col gap-4 text-slate-500 text-sm">
                <li><a class="hover:text-primary transition-colors" href="#jobs">Find Jobs</a></li>
                <li><a class="hover:text-primary transition-colors" href="#">Post a Job</a></li>
                 <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('privacy') ? 'text-primary font-bold underline underline-offset-4' : '' }}" href="{{ route('privacy') }}">Terms & Policy</a>
            </ul>
        </div>
        <div>
            <h4 class="text-slate-900 dark:text-white font-bold mb-6">Contact Us</h4>
            <ul class="flex flex-col gap-4 text-slate-500 text-sm">
                <li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-lg">mail</span> support@hiraya.com</li>
                <li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-lg">call</span> +1 (555) 000-1234</li>
                <li class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-lg">location_on</span> 123 Tech Avenue, SF, CA</li>
            </ul>
        </div>
        <div>
            <h4 class="text-slate-900 dark:text-white font-bold mb-6">Social Media</h4>
            <div class="flex gap-4">
                <a class="w-10 h-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 hover:bg-primary hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">public</span>
                </a>
                <a class="w-10 h-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 hover:bg-primary hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">share</span>
                </a>
                <a class="w-10 h-10 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 hover:bg-primary hover:text-white transition-colors" href="#">
                    <span class="material-symbols-outlined">alternate_email</span>
                </a>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto pt-8 border-t border-slate-100 dark:border-slate-800 text-center text-slate-400 text-xs">
        Copyright © 2026 HIRAYA PURSUITS. All rights reserved.
    </div>
</footer>

</div>
</div>
<script>
// Team Carousel JS (Updated with Buttons)
let teamIndex = 0;
const teamCarousel = document.getElementById("teamCarousel");
const teamPrevBtn = document.getElementById("teamPrevBtn");
const teamNextBtn = document.getElementById("teamNextBtn");
const totalTeamSlides = teamCarousel ? teamCarousel.children.length : 0;

// Function to update carousel
function updateTeamCarousel() {
    if (teamCarousel) {
        teamCarousel.style.transform = `translateX(-${teamIndex * 100}%)`;
    }
}

// Auto slide function
function autoSlideTeam() {
    teamIndex++;
    if(teamIndex >= totalTeamSlides){
        teamIndex = 0;
    }
    updateTeamCarousel();
}

// Start auto slide
let teamSlideInterval = setInterval(autoSlideTeam, 4000);

// Manual navigation - Previous
if (teamPrevBtn) {
    teamPrevBtn.addEventListener('click', () => {
        clearInterval(teamSlideInterval);
        teamIndex--;
        if(teamIndex < 0){
            teamIndex = totalTeamSlides - 1;
        }
        updateTeamCarousel();
        teamSlideInterval = setInterval(autoSlideTeam, 4000);
    });
}

// Manual navigation - Next
if (teamNextBtn) {
    teamNextBtn.addEventListener('click', () => {
        clearInterval(teamSlideInterval);
        teamIndex++;
        if(teamIndex >= totalTeamSlides){
            teamIndex = 0;
        }
        updateTeamCarousel();
        teamSlideInterval = setInterval(autoSlideTeam, 4000);
    });
}

// Pause on hover
if (teamCarousel) {
    const teamCarouselContainer = teamCarousel.parentElement;
    teamCarouselContainer.addEventListener('mouseenter', () => {
        clearInterval(teamSlideInterval);
    });

    teamCarouselContainer.addEventListener('mouseleave', () => {
        teamSlideInterval = setInterval(autoSlideTeam, 4000);
    });
}

// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

// Hero Carousel JS 
let heroIndex = 0;
const heroCarousel = document.getElementById("heroCarousel");
const heroDots = document.querySelectorAll(".carousel-dot");
const heroPrevBtn = document.getElementById("heroPrevBtn");
const heroNextBtn = document.getElementById("heroNextBtn");
const totalHeroSlides = heroCarousel ? heroCarousel.children.length : 0;
const AUTO_SLIDE_INTERVAL = 4000; // 4 seconds - very slow like ads

// Function to update carousel
function updateHeroCarousel() {
    if (heroCarousel) {
        heroCarousel.style.transform = `translateX(-${heroIndex * 100}%)`;
    }
    
    // Update dots
    heroDots.forEach((dot, index) => {
        dot.classList.toggle('active', index === heroIndex);
    });
}

// Auto slide function
function autoSlideHero() {
    heroIndex++;
    if(heroIndex >= totalHeroSlides){
        heroIndex = 0;
    }
    updateHeroCarousel();
}

// Start auto slide
let heroSlideInterval = setInterval(autoSlideHero, AUTO_SLIDE_INTERVAL);

// Pause on hover
const heroCarouselContainer = document.querySelector('#heroCarousel')?.parentElement;
if (heroCarouselContainer) {
    heroCarouselContainer.addEventListener('mouseenter', () => {
        clearInterval(heroSlideInterval);
    });

    heroCarouselContainer.addEventListener('mouseleave', () => {
        heroSlideInterval = setInterval(autoSlideHero, AUTO_SLIDE_INTERVAL);
    });
}

// Manual navigation - Previous
if (heroPrevBtn) {
    heroPrevBtn.addEventListener('click', () => {
        clearInterval(heroSlideInterval);
        heroIndex--;
        if(heroIndex < 0){
            heroIndex = totalHeroSlides - 1;
        }
        updateHeroCarousel();
        heroSlideInterval = setInterval(autoSlideHero, AUTO_SLIDE_INTERVAL);
    });
}

// Manual navigation - Next
if (heroNextBtn) {
    heroNextBtn.addEventListener('click', () => {
        clearInterval(heroSlideInterval);
        heroIndex++;
        if(heroIndex >= totalHeroSlides){
            heroIndex = 0;
        }
        updateHeroCarousel();
        heroSlideInterval = setInterval(autoSlideHero, AUTO_SLIDE_INTERVAL);
    });
}

// Dot navigation
heroDots.forEach(dot => {
    dot.addEventListener('click', (e) => {
        clearInterval(heroSlideInterval);
        heroIndex = parseInt(e.target.dataset.index);
        updateHeroCarousel();
        heroSlideInterval = setInterval(autoSlideHero, AUTO_SLIDE_INTERVAL);
    });
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if(e.key === 'ArrowLeft') {
        if (heroPrevBtn) heroPrevBtn.click();
    } else if(e.key === 'ArrowRight') {
        if (heroNextBtn) heroNextBtn.click();
    }
});
</script>

</body>
</html>