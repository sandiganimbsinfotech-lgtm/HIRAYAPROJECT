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
      <img src="{{ asset('images/Hiraya.png') }}" alt="Hiraya Pursuit Logo" class="h-12 w-12 object-contain">
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
  <div class="flex justify-center items-center mb-20">
    <img src="{{ asset('images/Hiraya.png') }}" alt="Illustration" class="h-12 w-12 object-contain">
  </div>

  <!-- Navigation Links -->
  <nav class="mt-1 flex justify-center">
    <ul class="flex flex-wrap gap-10 text-sm font-medium">
      <li><a href="#" class="hover:underline">Home</a></li>
      <li><a href="#" class="hover:underline">Jobs</a></li>
      <li><a href="#" class="hover:underline">About</a></li>
      <li><a href="#" class="hover:underline">Contact</a></li>
      <li><a href="#" class="hover:underline">Support</a></li>
    </ul>
  </nav>
</div>

<!-- Right Section -->
<div class="md:w-3/5 flex flex-col justify-center items-center p-6 ">
  
  <!-- Inner White Card -->
  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md text-center">
    <h2 class="text-2xl font-bold mb-4">Create Your Account</h2>
    <p class="text-gray-600 mb-6">Join our community and start your journey today.</p>
    
    <!-- Register As toggle -->
<!-- Register As toggle -->
<div class="flex flex-col sm:flex-row justify-center gap-6 mb-6">

  <!-- Applicant -->
  <button id="ApplicantBtn" type="button"
    onclick="setRole('Applicant')"
    class="flex-1 flex flex-col items-center justify-center gap-2 py-6 px-4 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-100 transition">
    <span class="material-icons text-3xl">person</span>
    Applicant
  </button>

  <!-- Employer -->
  <button id="EmployerBtn" type="button"
    onclick="setRole('Employer')"
    class="flex-1 flex flex-col items-center justify-center gap-2 py-6 px-4 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-100 transition">
    <span class="material-icons text-3xl">work</span>
    Employer
  </button>

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

    <form method="POST" action="{{ route('signup') }}" class="space-y-5 text-left">
    @csrf
    
    <!-- Hidden input inside your form -->
    <input type="hidden" id="roleInput" name="role" value="Applicant">


  <script>
function setRole(role) {
    document.getElementById('roleInput').value = role;

    const applicantBtn = document.getElementById('ApplicantBtn');
    const employerBtn = document.getElementById('EmployerBtn');

    if (role === 'Applicant') {
        applicantBtn.classList.add('bg-red-100', 'border-red-700', 'text-red-700');
        employerBtn.classList.remove('bg-red-100', 'border-red-700', 'text-red-700');
    } else {
        employerBtn.classList.add('bg-red-100', 'border-red-700', 'text-red-700');
        applicantBtn.classList.remove('bg-red-100', 'border-red-700', 'text-red-700');
    }
}
</script>


      <!-- Full Name -->
      <div class="relative">
        <label class="block text-gray-700 mb-1">Full Name</label>
        <span class="material-icons absolute left-3 top-9 text-gray-400">badge</span>
        <input type="text" name="full_name" placeholder="John Doe"
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-700">
      </div>

      <!-- Username -->
      <div class="relative">
        <label class="block text-gray-700 mb-1">Username</label>
        <span class="material-icons absolute left-3 top-9 text-gray-400">person</span>
        <input type="text" name="username" placeholder="johndoe123"
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-700">
      </div>

      <!-- Email -->
      <div class="relative">
        <label class="block text-gray-700 mb-1">Email Address</label>
        <span class="material-icons absolute left-3 top-9 text-gray-400">email</span>
        <input type="email" name="email" placeholder="john@example.com"
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-700">
      </div>

      <!-- Password -->
<div class="flex flex-col sm:flex-row gap-4">
  
  <!-- Password -->
  <div class="relative flex-1">
    <label class="block text-gray-700 mb-1">Password</label>
    <span class="material-icons absolute left-3 top-9 text-gray-400">lock</span>
    <input type="password" name="password" placeholder="**********"
      class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-700">
  </div>

  <!-- Confirm Password -->
  <div class="relative flex-1">
    <label class="block text-gray-700 mb-1">Confirm Password</label>
    <span class="material-icons absolute left-3 top-9 text-gray-400">verified_user</span>
    <input type="password" name="password_confirmation" placeholder="************"
      class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-700">
  </div>

</div>


      <!-- Terms Checkbox -->
      <div class="flex items-center">
        <input type="checkbox" id="terms" class="mr-2">
        <label for="terms" class="text-gray-700 text-sm">
          I agree to the Terms of Service and Privacy Policy.
        </label>
      </div>

      <!-- Sign Up button (dark red) -->
      <button type="submit"
        class="w-full bg-red-900 text-white py-2 rounded-lg hover:bg-red-500 transition">
        Sign Up
      </button>
    </form>
    
    <p class="text-sm text-gray-600 mt-6 text-center">
      Already have an account? <a href="{{ route('login') }}" class="text-red-900 hover:underline">Log In</a>
    </p>
  </div>

  <!-- Footer outside the card -->
  <footer class="text-xs text-gray-500 mt-6">
    © 2026 Hiraya Pursuits. All rights reserved. Empowering talent worldwide.
  </footer>
</div>
  </div>

  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</body>
</html>