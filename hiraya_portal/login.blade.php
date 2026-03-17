<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIRAYA PURSUITS - Login</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100">


  <div class="flex flex-col md:flex-row w-full min-h-screen">

    <!----hiiiiiii-->
    
    <!-- Left Section -->
<div class="w-full md:w-1/2 bg-red-900 text-white p-6 flex flex-col justify-center items-center text-center">
  <div>

   <!-- Back Button -->
    <div class="w-full flex justify-start mb-6">
        <a href="{{ url('/') }}" 
           class="inline-flex items-center text-white hover:underline">
            <span class="material-icons mr-1">arrow_back</span>
            Back
        </a>
    </div>
    
    <div class="flex items-center justify-center space-x-1 mb-20">
      <img src="{{ asset('images/Hiraya.png') }}" alt="Hiraya Pursuit Logo" class="h-15 w-15 object-contain">
      <h5 class="text-xl font-semibold">HIRAYA PURSUIT</h5>
    </div>


    <p class="font-bold text-2xl mb-10">Find your purpose, shape your future.</p>
    
    <p class="max-w-md mb-20 text-left mx-auto">
      Hiraya Pursuits is a modern job portal that helps job seekers discover opportunities and allows companies to connect with talented professionals.
    </p>

    <ul class=" mb-20 space-y-3">
      <li class="flex items-center">
        <span class="material-icons mr-2">search</span> Help applicants find jobs easily
      </li>
      <li class="flex items-center">
        <span class="material-icons mr-2">business</span> Allow employers to post job opportunities
      </li>
      <li class="flex items-center">
        <span class="material-icons mr-2">groups</span> Connect talents with companies
      </li>
    </ul>
  </div>

  <!-- Illustration -->
  <div class="flex justify-center items-center mb-10">
    <img src="{{ asset('images/Hiraya.png') }}" alt="Illustration" class="h-12 w-12 object-contain">
  </div>

  <!-- Navigation Links -->
  <nav class="mt-8 flex justify-center">
    <ul class="flex flex-wrap gap-6 text-sm font-medium">
      <li><a href="#" class="hover:underline">Home</a></li>
      <li><a href="#" class="hover:underline">Jobs</a></li>
      <li><a href="#" class="hover:underline">About</a></li>
      <li><a href="#" class="hover:underline">Contact</a></li>
      <li><a href="#" class="hover:underline">Support</a></li>
    </ul>
  </nav>
</div>

<!-- Right Section -->
<div class="w-full md:w-1/2 flex flex-col justify-center items-center bg-gray-100 p-6">
  <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
    <h2 class="text-2xl font-bold mb-4 text-center">Welcome Back</h2>
    <p class="text-gray-600 mb-6 text-center">Please enter your credentials to access your account.</p>

    
    
    <form method="POST" action="{{ route('login.process') }}" class="space-y-5">
@csrf
      <!-- Username/Email -->
      <div class="relative">
        <label class="block text-gray-700 mb-1">Username or Email</label>
        <span class="material-icons absolute left-3 top-9 text-gray-400">person</span>
        <input type="text" name="login" placeholder="e.g. jm@hiraya.com"
class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500">
      </div>

      <!-- Password -->
      <div class="relative">
        <label class="block text-gray-700 mb-1">Password</label>
        <span class="material-icons absolute left-3 top-9 text-gray-400">lock</span>
        <input type="password" name="password" placeholder="••••••••"
class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500">
        <a href="#" class="text-sm text-red-900 hover:underline mt-1 block">Forgot Password?</a>
      </div>

      @if ($errors->any())
<div class="mb-4 text-red-600 text-sm">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

      <!-- Remember checkbox -->
      <div class="flex items-center">
        <input type="checkbox" id="remember" class="mr-2">
        <label for="remember" class="text-gray-700">Remember this device</label>
      </div>

      <!-- Login button -->
      <button type="submit"
        class="w-full bg-red-900 text-white py-2 rounded-lg hover:bg-red-500 transition">
        Log In
      </button>
    </form>

    <p class="text-sm text-gray-600 mt-6 text-center">
      Don’t have an account? <a href="{{ route('signup') }}" class="text-red-600 hover:underline">Sign Up</a>
    </p>
  </div>

  <!-- Footer outside the card -->
  <footer class="text-xs text-gray-500 mt-6 text-center">
    © 2026 Hiraya Pursuits. All rights reserved. Empowering talent worldwide.
  </footer>
</div>

  </div>

  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</body>
</html>