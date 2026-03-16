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
    <style>
        body { font-family: 'Inter', sans-serif; }
        .sticky-sidebar { position: sticky; top: 2rem; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">

<div class="relative flex min-h-screen flex-col">
    
   <!-- Header Section -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-primary/10 px-6 md:px-20 py-4 bg-white dark:bg-background-dark sticky top-0 z-50">
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
        <button class="flex min-w-21 cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary/10 text-primary text-sm font-bold border border-primary/20 hover:bg-primary/20 transition-colors">
            Log In
        </button>
        <button class="flex min-w-21 cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-colors">
            Sign Up
        </button>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobileMenuBtn" class="md:hidden text-slate-900 dark:text-white focus:outline-none">
        <span class="material-symbols-outlined text-3xl">menu</span>
    </button>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobileMenu" class="md:hidden absolute top-full left-0 w-full bg-white dark:bg-background-dark border-b border-slate-200 dark:border-slate-700 p-6 flex flex-col gap-4 shadow-lg z-50">
        <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#jobs">Jobs</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#about">About</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('privacy') ? 'text-primary font-bold underline underline-offset-4' : '' }}" href="{{ route('privacy') }}">Terms & Policy</a>
            <a class="text-slate-700 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}#developers">Developers</a>
        <div class="flex flex-col gap-3 mt-4">
            <button class="w-full py-2 bg-primary/10 text-primary text-sm font-bold border border-primary/20 rounded-lg">Log In</button>
            <button class="w-full py-2 bg-primary text-white text-sm font-bold rounded-lg">Sign Up</button>
        </div>
    </div>
</header>
    
    <main class="flex-1 max-w-300 mx-auto w-full px-6 py-12 lg:px-20">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12 border-b border-primary/10 pb-10">
            <div class="max-w-2xl">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-primary text-sm font-semibold uppercase tracking-wider">Legal Center</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white leading-tight tracking-tight mb-4">
                    Privacy Policy & Terms of Service
                </h1>
                <p class="text-slate-500 dark:text-slate-400 text-lg">Effective Date: March 9, 2026</p>
            </div>
           
        </div>

        <div class="flex flex-col lg:flex-row gap-20">
            <aside class="lg:w-1/4">
                <div class="sticky-sidebar bg-white dark:bg-background-dark/50 border border-primary/10 rounded-xl p-6 shadow-sm">
                    <h3 class="text-sm font-bold text-primary uppercase tracking-widest mb-6">On this page</h3>
                    <nav class="flex flex-col gap-1">
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#introduction">
                            <span class="material-symbols-outlined text-[20px]"></span> Introduction
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#data-collection">
                            <span class="material-symbols-outlined text-[20px]"></span> Data Collection
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#information-use">
                            <span class="material-symbols-outlined text-[20px]"></span> Use of Information
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#user-rights">
                            <span class="material-symbols-outlined text-[20px]"></span> User Rights
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#liability">
                            <span class="material-symbols-outlined text-[20px]"></span> Liability
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#contact">
                            <span class="material-symbols-outlined text-[20px]"></span> Contact Us
                        </a>
                    </nav>
                </div>
            </aside>

            <!-- Content Area -->
            <article class="lg:w-3/4 space-y-16">
                <!-- Introduction -->
                <section class="scroll-mt-10" id="introduction">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">1. Introduction</h2>
                    <div class="prose dark:prose-invert max-w-none text-slate-700 dark:text-slate-300 leading-relaxed space-y-4">
                        <p>Welcome to <strong>Hiraya Pursuits</strong>. We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about our policy, or our practices with regards to your personal information, please contact us.</p>
                        <blockquote class="border-l-4 border-primary bg-primary/5 p-6 rounded-r-xl italic my-8">
                            <p class="text-lg font-medium text-slate-800 dark:text-slate-200">"Our mission at Hiraya Pursuits is to bridge the gap between ambition and achievement, ensuring every talent finds its true calling in an environment built on trust, transparency, and integrity."</p>
                        </blockquote>
                        <p>This privacy policy governs the privacy practices of Hiraya Pursuits and explains how we collect, safeguard, and disclose information that results from your use of our web pages located at hirayapursuits.com and our mobile application.</p>
                    </div>
                </section>

                <!-- Data Collection -->
                <section class="scroll-mt-10" id="data-collection">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">2. Data Collection</h2>
                    <div class="text-slate-700 dark:text-slate-300 space-y-4">
                        <p>We collect several different types of information for various purposes to provide and improve our service to you. This includes:</p>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <li class="flex gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-100 dark:border-slate-700">
                                <span><strong>Personal Data:</strong> Name, email address, phone number, and physical address.</span>
                            </li>
                            <li class="flex gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-100 dark:border-slate-700">  
                                <span><strong>Professional Data:</strong> Resume, work history, skills, and educational background.</span>
                            </li>
                            <li class="flex gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-100 dark:border-slate-700">
                                <span><strong>Usage Data:</strong> IP address, browser type, and browser version.</span>
                            </li>
                            <li class="flex gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-100 dark:border-slate-700">
                                <span><strong>Cookies:</strong> Tracking cookies and similar technologies to track activity.</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Use of Information -->
                <section class="scroll-mt-10" id="information-use">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">3. Use of Information</h2>
                    <div class="text-slate-700 dark:text-slate-300 space-y-4">
                        <p>Hiraya Pursuits uses the collected data for various purposes:</p>
                        <div class="space-y-3 pl-4 border-l-2 border-slate-200 dark:border-slate-700">
                            <div class="flex items-start gap-3"><span class="text-primary mt-1">•</span><p>To provide and maintain our Service, including to monitor the usage of our Service.</p></div>
                            <div class="flex items-start gap-3"><span class="text-primary mt-1">•</span><p>To notify you about changes to our Service and provide customer support.</p></div>
                            <div class="flex items-start gap-3"><span class="text-primary mt-1">•</span><p>To match job seekers with potential employers based on profile data and job requirements.</p></div>
                            <div class="flex items-start gap-3"><span class="text-primary mt-1">•</span><p>To gather analysis or valuable information so that we can improve our Service.</p></div>
                        </div>
                    </div>
                </section>

                <!-- User Rights -->
                <section class="scroll-mt-10" id="user-rights">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">4. User Rights</h2>
                    <div class="bg-primary/5 rounded-xl p-8 border border-primary/10">
                        <p class="mb-6 font-medium">As a user of Hiraya Pursuits, you have the following data protection rights:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-2"> Access</h4>
                                <p class="text-sm">You have the right to request copies of your personal data held by us.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-2"> Rectification</h4>
                                <p class="text-sm">You have the right to request that we correct any information you believe is inaccurate.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-2"> Erasure</h4>
                                <p class="text-sm">You have the right to request that we erase your personal data, under certain conditions.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-2"> Restriction</h4>
                                <p class="text-sm">You have the right to request that we restrict the processing of your personal data.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Liability -->
                <section class="scroll-mt-10" id="liability">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">5. Liability</h2>
                    <div class="prose dark:prose-invert max-w-none text-slate-700 dark:text-slate-300 leading-relaxed">
                        <p>In no event shall Hiraya Pursuits, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from:</p>
                        <ul class="list-disc pl-5 mt-4 space-y-2">
                            <li>Your access to or use of or inability to access or use the Service.</li>
                            <li>Any conduct or content of any third party on the Service.</li>
                            <li>Any content obtained from the Service.</li>
                            <li>Unauthorized access, use or alteration of your transmissions or content.</li>
                        </ul>
                    </div>
                </section>

                <!-- Contact -->
                <section class="scroll-mt-10 border-t border-primary/10 pt-16" id="contact">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">6. Contact Us</h2>
                    <p class="text-slate-700 dark:text-slate-300 mb-8">If you have any questions about this Privacy Policy, please contact our Legal Department:</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="p-6 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">Visit Us</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">123 Career Blvd, Suite 400<br>Manila, Philippines 1000</p>
                        </div>
                        <div class="p-6 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">Email Us</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">legal@hirayapursuits.com<br>support@hirayapursuits.com</p>
                        </div>
                        <div class="p-6 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2">Call Us</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">+63 912 345 6789</p>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-background-dark border-t border-primary/10 mt-16 px-6 py-12 lg:px-20 text-slate-500 dark:text-slate-400 text-sm">
        <div class="max-w-300 mx-auto flex flex-col md:flex-row justify-between gap-6 items-center">
            <p>&copy; 2026 Hiraya Pursuits. All rights reserved.</p>
            <nav class="flex gap-6">
                <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-primary transition-colors">Contact</a>
            </nav>
        </div>
    </footer>
</div>
<script>
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>