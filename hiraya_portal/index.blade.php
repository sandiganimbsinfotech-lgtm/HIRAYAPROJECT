<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HirayaCareer</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="font-sans text-gray-800">

<!-- Header -->
<header class="sticky top-0 z-50 bg-white shadow-md">

<div class="flex items-center justify-between px-6 md:px-10 py-4">

  <!-- Logo -->
  <div class="flex items-center gap-3">
    <img src="{{ asset('images/Hiraya2.png') }}" class="w-20">
    <span class="text-lg font-semibold">Hiraya Pursuits</span>
  </div>

  <!-- Desktop Menu -->
  <nav class="hidden md:flex items-center gap-8 text-sm">
    <a href="{{ route('index') }}" class="hover:text-orange-500">Home</a>
    <a href="#" class="hover:text-orange-500">About</a>
    <a href="#" class="hover:text-orange-500">Privacy & Terms</a>
  </nav>

    <nav class="hidden md:flex items-center gap-8 text-sm">
    <a href="{{ route('login') }}" class="px-4 py-2 border rounded-md hover:bg-gray-100">
  Login
</a>
    <a href="{{ route('signup') }}" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Sign Up</a>
  </nav>

  <!-- Mobile Button -->
  <button id="menuBtn" class="md:hidden text-2xl">
    ☰
  </button>

</div>

<!-- Mobile Menu -->
<div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-4 text-sm bg-white">

  <a href="#" class="block">Home</a>
  <a href="#" class="block">About</a>
  <a href="#" class="block">Privacy & Terms</a>

  <hr>

  <a href="{{ route('login') }}" class="block border px-4 py-2 rounded-md text-center">
  Login
</a>


  <a href="{{ route('signup') }}" class="block bg-red-500 text-white px-4 py-2 rounded-md text-center">
    Sign Up
  </a>

</div>

</header>

<script>
const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');

menuBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});
</script>

<!-- Banner -->
<section class=" bg-gradient-to-r from-red-700/50 to-red-100/70 text-center py-16 md:py-20 px-6 max-w-full mx-auto">

<h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
<span class="text-black">Connecting talent with</span><br>
<span class="text-orange-500">opportunity.</span>
</h1>

<p class="mt-6 text-black-600 text-sm sm:text-base">
HirayaCareer is dedicated to bridging the gap between ambitious professionals and world-class organizations through innovation and empathy.
</p>

</section>

<!-- Our Story -->
<section class="py-16 md:py-20 px-6 md:px-10">

<div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">

<div>
<h2 class="text-2xl md:text-3xl font-bold mb-4">Our Story</h2>

<p class="text-gray-600 leading-relaxed text-sm md:text-base">
Founded with a vision to transform the job market, HirayaCareer began as a small initiative dedicated to connecting local talent with meaningful career opportunities.
We recognized a growing gap between the remarkable skills individuals possess and the opportunities available to showcase them.
Determined to bridge that gap, we set out to create a platform where talent meets the right opportunity.
</p>
</div>

<div>
<img src="{{ asset('images/jh.avif') }}" class="rounded-lg shadow-md w-full">
</div>

</div>

</section>

<!-- Core Values -->
<section class="py-16 md:py-20 px-6 md:px-10 bg-gray-50 text-center">

<h2 class="text-2xl md:text-3xl font-bold mb-10 md:mb-12">Core Values</h2>

<div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">

<div class="p-6 bg-gradient-to-r from-red-500/50 to-red-100/70 rounded-lg shadow">
<h3 class="text-lg md:text-xl font-semibold mb-3">Innovation</h3>
<p class="text-black-600 text-sm md:text-base">
We embrace creativity and forward-thinking solutions to continuously improve how employers and job seekers connect.
</p>
</div>

<div class="p-6 bg-gradient-to-r from-red-500/50 to-red-100/70 rounded-lg shadow">
<h3 class="text-lg md:text-xl font-semibold mb-3">Integrity</h3>
<p class="text-black-600 text-sm md:text-base">
We are committed to honesty, transparency, and fairness in everything we do.
</p>
</div>

<div class="p-6 bg-gradient-to-r from-red-500/50 to-red-100/70 rounded-lg shadow">
<h3 class="text-lg md:text-xl font-semibold mb-3">Community</h3>
<p class="text-black-600 text-sm md:text-base">
We are more than just a platform; it built to support local talent, empower businesses, and foster meaningful connections that strengthen the workforce and the communities we serve.
</p>
</div>

</div>

</section>

<!-- Meet the Team -->
<section class="py-16 md:py-20 px-6 md:px-10 text-center">

<h2 class="text-2xl md:text-3xl font-bold mb-8">
Meet the Team
</h2>

<div class="relative max-w-6xl mx-auto">

  <!-- NEXT BUTTON (Mobile Only) -->
  <button id="nextBtn"
    class="md:hidden absolute right-2 top-1/2 -translate-y-1/2
           bg-white shadow-md p-3 rounded-full z-10">
    ❯
  </button>

  <button id="prevBtn"
  class="md:hidden absolute left-2 top-1/2 -translate-y-1/2
         bg-white shadow-md p-3 rounded-full z-10">
  ❮
</button>

  <!-- Team Container -->
  <div id="teamCarousel"
       class="flex md:grid md:grid-cols-4 lg:grid-cols-6 gap-8
              overflow-hidden md:overflow-visible
              scroll-smooth
              snap-x snap-mandatory
              max-w-6xl mx-auto">

    <!-- Member 1 -->
    <div class="min-w-[100%] snap-center flex-shrink-0 md:min-w-0 text-center">
      <img src="{{ asset('images/FLOR.jpg') }}"
           class="w-28 h-28 object-cover rounded-full mx-auto mb-3">
      <h3 class="font-semibold">Flor, Mecaealla</h3>
      <p class="text-sm text-gray-500">Prontend</p>
    </div>

    <!-- Member 2 -->
    <div class="min-w-[80%] snap-center flex-shrink-0 md:min-w-0 text-center">
      <img src="{{ asset('images/BANSARA.jpg') }}"
           class="w-28 h-28 object-cover rounded-full mx-auto mb-3">
      <h3 class="font-semibold">Bansara, Johaira</h3>
      <p class="text-sm text-gray-500">Prontend</p>
    </div>

    <!-- Member 3 -->
    <div class="min-w-[100%] snap-center flex-shrink-0 md:min-w-0 text-center">
      <img src="{{ asset('images/ION.jpg') }}"
           class="w-28 h-28 object-cover rounded-full mx-auto mb-3">
      <h3 class="font-semibold">Sandigan, Irion Mike</h3>
      <p class="text-sm text-gray-500">Backend</p>
    </div>

    <div class="min-w-[80%] snap-center flex-shrink-0 md:min-w-0 text-center">
      <img src="{{ asset('images/ACEBEDO.jpg') }}"
           class="w-28 h-28 object-cover rounded-full mx-auto mb-3">
      <h3 class="font-semibold">Acebedo, John Mark </h3>
      <p class="text-sm text-gray-500">Prontend</p>
    </div>

    <div class="min-w-[100%] snap-center flex-shrink-0 md:min-w-0 text-center">
      <img src="{{ asset('images/ASHLEY.jpg') }}"
           class="w-28 h-28 object-cover rounded-full mx-auto mb-3">
      <h3 class="font-semibold">Gonzales, Ashley</h3>
      <p class="text-sm text-gray-500">Prontend Assistant</p>
    </div>

    <div class="min-w-[100%] snap-center flex-shrink-0 md:min-w-0 text-center">
      <img src="{{ asset('images/JASPER.jpg') }}"
           class="w-28 h-28 object-cover rounded-full mx-auto mb-3">
      <h3 class="font-semibold">Eulin, Jasper</h3>
      <p class="text-sm text-gray-500">Prontend Assistant</p>
    </div>

  </div>

</div>

</section>

<!-- CTA -->
<section class="text-center py-16 md:py-20 bg-gray-100 px-6">

<h2 class="text-2xl md:text-3xl font-bold mb-4">
Ready to find your next career move?
</h2>

<p class="text-gray-600 mb-6 text-sm md:text-base">
Join thousands of professionals who have found their dream roles through HirayaCareer.
</p>

<div class="flex flex-col sm:flex-row justify-center gap-4">

<button class="px-6 py-3 bg-red-900 text-white rounded-md hover:bg-red-600">
Browse Jobs
</button>

<button class="px-6 py-3 border border-gray-400 rounded-md hover:bg-gray-200">
Contact Us
</button>

</div>

</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 pt-16">

<div class="max-w-6xl mx-auto px-6 md:px-10 grid gap-10 sm:grid-cols-2 md:grid-cols-4">

<div>
<img src="{{ asset('images/Hiraya.png') }}" class="w-40 mb-4">
<p class="text-sm text-gray-400">
The premium platform for talent seeking meaningful opportunities and organizations looking for world-class hires.
</p>
</div>

<div>
<h3 class="text-white font-semibold mb-4">Quick Links</h3>
<ul class="space-y-2 text-sm">
<li><a href="{{ route('index') }}" class="hover:text-white">Home</a></li>
<li><a href="#" class="hover:text-white">Jobs</a></li>
<li><a href="#" class="hover:text-white">About Us</a></li>
</ul>
</div>

<div>
<h3 class="text-white font-semibold mb-4">Legal</h3>
<ul class="space-y-2 text-sm">
<li><a href="#" class="hover:text-white">Privacy Policy</a></li>
<li><a href="#" class="hover:text-white">Terms of Service</a></li>
</ul>
</div>

<div>
<h3 class="text-white font-semibold mb-4">Connect</h3>
<div class="flex gap-4 text-xl">
<a href="#"><i class="fas fa-envelope"></i></a>
<a href="#"><i class="fas fa-globe"></i></a>
<a href="#"><i class="fas fa-share-alt"></i></a>
</div>
</div>

</div>

<div class="text-center text-sm text-gray-500 mt-10 py-6 border-t border-gray-700">
© 2026 HirayaCareer Inc. All rights reserved.
</div>

</footer>

<script>
const carousel = document.getElementById('teamCarousel');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');

nextBtn.addEventListener('click', () => {
  carousel.scrollBy({ left: carousel.offsetWidth, behavior: 'smooth' });
});

prevBtn.addEventListener('click', () => {
  carousel.scrollBy({ left: -carousel.offsetWidth, behavior: 'smooth' });
});
</script>

</body>
</html>