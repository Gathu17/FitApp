<template>
  <div>
    <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
      <h1 class="text-xl font-bold text-gray-800">FitnessApp</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Home</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Features</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Pricing</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold mb-4">Achieve Your Fitness Goals</h2>
      <p class="text-lg mb-8">Get fit, stay healthy, and reach your goals with our fitness app.</p>
      <a href="#" class="bg-white text-blue-500 py-2 px-6 rounded-full font-semibold text-lg hover:bg-blue-400 transition duration-300">Start Now</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-10 text-center">Key Features</h2>
      <div class="flex flex-wrap justify-center gap-8">
        <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center rounded-lg shadow-md bg-white">
          <h3 class="text-xl font-semibold mb-4">Workout Tracking</h3>
          <p>Track your workouts and monitor your progress effortlessly.</p>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center rounded-lg shadow-md bg-white">
          <h3 class="text-xl font-semibold mb-4">Personalized Plans</h3>
          <p>Get personalized workout and meal plans tailored for you.</p>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center rounded-lg shadow-md bg-white">
          <h3 class="text-xl font-semibold mb-4">Community Support</h3>
          <p>Connect with a supportive community for motivation and tips.</p>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 p-4 text-center rounded-lg shadow-md bg-white">
          <h3 class="text-xl font-semibold mb-4">Progress Analytics</h3>
          <p>Analyze your progress with detailed statistics and analytics.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-gray-800 text-white py-16 text-center">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-4">Start Your Fitness Journey Today</h2>
      <p class="mb-8">Join thousands of users achieving their fitness goals with FitnessApp.</p>
      <a href="#" class="bg-blue-500 text-white py-3 px-8 rounded-full font-semibold text-lg hover:bg-blue-600 transition duration-300">Get Started</a>
    </div>
  </section>
  </div>
</template>
<script setup>
</script>