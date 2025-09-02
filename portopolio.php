<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Blue Themed Portfolio with Subtle Blur - Gztinforma</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Oswald', sans-serif;
      background-color: #0a1e3f;
      color: white;
      scroll-behavior: smooth;
    }
    /* Animate mobile menu sliding down */
    #mobile-menu {
      transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
      overflow: hidden;
      max-height: 0;
      opacity: 0;
      transform: translateY(-10px);
      background-color: #0a1e3f;
    }
    #mobile-menu.open {
      max-height: 500px; /* enough height for menu */
      opacity: 1;
      transform: translateY(0);
    }
    /* Animate hamburger icon to X */
    .menu-btn.open .bar1 {
      transform: rotate(45deg) translate(5px, 5px);
    }
    .menu-btn.open .bar2 {
      opacity: 0;
    }
    .menu-btn.open .bar3 {
      transform: rotate(-45deg) translate(5px, -5px);
    }
    /* Active nav link highlight with underline animation */
    nav a.active {
      position: relative;
      color: #3b82f6; /* blue-500 */
      font-weight: 700;
    }
    nav a.active::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -4px;
      width: 100%;
      height: 3px;
      background-color: #3b82f6;
      border-radius: 2px;
      animation: underlineGrow 0.3s ease forwards;
    }
    @keyframes underlineGrow {
      from {
        width: 0;
      }
      to {
        width: 100%;
      }
    }
    /* Mobile menu active link style */
    #mobile-menu a.active {
      background-color: #bfdbfe; /* blue-200 */
      color: #3b82f6; /* blue-500 */
      font-weight: 700;
    }
    a:hover {
      color: #3b82f6;
    }
    /* Scrollbar styling for dark theme */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #0a1e3f;
    }
    ::-webkit-scrollbar-thumb {
      background-color: #3b82f6;
      border-radius: 10px;
    }
    /* Blur background for About section container */
    #about {
      position: relative;
      z-index: 0;
      border-radius: 0.5rem;
      overflow: visible;
      padding: 2rem;
      background: rgba(10, 30, 63, 0.3);
      box-shadow: 0 0 15px rgba(59, 130, 246, 0.3);
    }
    /* The blurred background behind the text with subtle glow */
    #about::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(10, 30, 63, 0.25);
      box-shadow: 0 0 20px 5px rgba(59, 130, 246, 0.15);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: -1;
      border-radius: 0.5rem;
      pointer-events: none;
    }
    /* Text container with relative z-index */
    #about .text-content {
      position: relative;
      z-index: 10;
    }
  </style>
 </head>
 <body>
  <header class="bg-[#0a1e3f] bg-opacity-90 fixed w-full z-40 shadow-md">
   <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <a href="#" class="flex items-center space-x-3 text-3xl font-extrabold text-[#3b82f6] tracking-widest" aria-label="Logo">
     <span class="select-none">Gztinforma</span>
    </a>
    <nav id="desktop-nav" class="hidden md:flex space-x-10 font-semibold text-gray-300">
     <a href="#about" class="hover:text-[#3b82f6] transition" data-target="about">About</a>
     <a href="#skills" class="hover:text-[#3b82f6] transition" data-target="skills">Skills</a>
     <a href="#projects" class="hover:text-[#3b82f6] transition" data-target="projects">Projects</a>
     <a href="#education" class="hover:text-[#3b82f6] transition" data-target="education">Education</a>
     <a href="#contact" class="hover:text-[#3b82f6] transition" data-target="contact">Contact</a>
    </nav>
    <button id="menu-btn" aria-label="Toggle menu" class="md:hidden focus:outline-none menu-btn">
     <span class="block w-6 h-0.5 bg-gray-300 mb-1 bar1 transition-transform duration-300"></span>
     <span class="block w-6 h-0.5 bg-gray-300 mb-1 bar2 transition-opacity duration-300"></span>
     <span class="block w-6 h-0.5 bg-gray-300 bar3 transition-transform duration-300"></span>
    </button>
   </div>
   <nav id="mobile-menu" aria-label="Mobile navigation menu" class="md:hidden">
    <a href="#about" class="block px-6 py-3 border-b border-blue-900 font-semibold text-gray-300 hover:bg-blue-900 transition" data-target="about" tabindex="0">About</a>
    <a href="#skills" class="block px-6 py-3 border-b border-blue-900 font-semibold text-gray-300 hover:bg-blue-900 transition" data-target="skills" tabindex="0">Skills</a>
    <a href="#projects" class="block px-6 py-3 border-b border-blue-900 font-semibold text-gray-300 hover:bg-blue-900 transition" data-target="projects" tabindex="0">Projects</a>
    <a href="#education" class="block px-6 py-3 border-b border-blue-900 font-semibold text-gray-300 hover:bg-blue-900 transition" data-target="education" tabindex="0">Education</a>
    <a href="#contact" class="block px-6 py-3 font-semibold text-gray-300 hover:bg-blue-900 transition" data-target="contact" tabindex="0">Contact</a>
   </nav>
  </header>
  <main class="pt-28 max-w-7xl mx-auto px-6">
   <!-- About Section -->
   <section id="about" class="flex flex-col-reverse md:flex-row items-center md:items-start gap-12 md:gap-24 py-20 rounded-lg relative">
    <div class="md:w-1/2 text-center md:text-left text-content">
     <h1 class="text-5xl font-extrabold text-[#3b82f6] mb-4 tracking-wide">Hi, I'm <span class="text-white">Gztinforma</span></h1>
     <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-lg">
      Backend Developer &amp; Informatics Engineering Student passionate about building scalable and efficient web applications.
     </p>
     <a href="#contact" class="inline-block bg-[#3b82f6] hover:bg-blue-700 transition text-white font-bold px-10 py-3 rounded-md tracking-wide">
      Contact Me
     </a>
    </div>
    <div class="md:w-1/2 flex justify-center md:justify-end z-10">
     <img src="images/124.jpg" alt="Professional portrait of a backend developer in casual clothes working on a laptop, smiling confidently" class="rounded-full shadow-lg w-64 h-64 object-cover" loading="lazy" width="400" height="400" />
    </div>
   </section>
   <!-- Skills Section -->
   <section id="skills" class="py-20">
    <h2 class="text-4xl font-extrabold text-white mb-12 text-center tracking-wide">Skills</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-12 max-w-5xl mx-auto">
     <div class="flex flex-col items-center space-y-4">
      <img src="https://storage.googleapis.com/a1aa/image/7807f29c-0486-42d4-98db-676dccb8b7d5.jpg" alt="PHP logo, blue elephant icon on white background" class="w-20 h-20 rounded-lg shadow-lg" loading="lazy" width="80" height="80" />
      <p class="font-bold text-[#3b82f6] text-lg">PHP</p>
     </div>
     <div class="flex flex-col items-center space-y-4">
      <img src="https://storage.googleapis.com/a1aa/image/5a049a54-d56e-4325-985d-0d8749aafaa9.jpg" alt="Laravel logo, red stylized letter L on white background" class="w-20 h-20 rounded-lg shadow-lg" loading="lazy" width="80" height="80" />
      <p class="font-bold text-[#3b82f6] text-lg">Laravel</p>
     </div>
     <div class="flex flex-col items-center space-y-4">
      <img src="https://storage.googleapis.com/a1aa/image/8f4e07b9-3ada-433a-722c-59ce156036b1.jpg" alt="Python logo, two intertwined snakes in blue and yellow" class="w-20 h-20 rounded-lg shadow-lg" loading="lazy" width="80" height="80" />
      <p class="font-bold text-[#3b82f6] text-lg">Python</p>
     </div>
     <div class="flex flex-col items-center space-y-4">
      <img src="https://storage.googleapis.com/a1aa/image/16a38ed4-8dad-41a0-d2c2-73343c572819.jpg" alt="MySQL logo, dolphin icon in blue with text" class="w-20 h-20 rounded-lg shadow-lg" loading="lazy" width="80" height="80" />
      <p class="font-bold text-[#3b82f6] text-lg">MySQL</p>
     </div>
    </div>
   </section>
   <!-- Projects Section -->
   <section id="projects" class="py-20 bg-[#12254c] rounded-lg shadow-lg max-w-7xl mx-auto px-6">
    <h2 class="text-4xl font-extrabold text-white mb-12 text-center tracking-wide">Projects</h2>
    <div class="grid gap-12 md:grid-cols-3">
     <article class="bg-[#183a8a] rounded-lg shadow-lg hover:shadow-[#3b82f6] transition p-6 flex flex-col">
      <img src="images/Screenshot 2024-02-21 145413.png" alt="Dashboard Baru showing hotel booking system interface with calendar and room availability" class="rounded-md mb-6 object-cover w-full h-48" loading="lazy" width="400" height="250" />
      <h3 class="text-xl font-bold text-[#3b82f6] mb-3">Hotel Booking Website Creation.</h3>
      <p class="text-gray-300 flex-grow">
       A hotel booking system developed using PHP and MySQL. It allows users to search and book available rooms. The platform includes user authentication, inventory management, and role-based access control. Designed with a clean interface and responsive layout, this project simplifies hotel management and improves the customer booking experience.
      </p>
     </article>
     <article class="bg-[#183a8a] rounded-lg shadow-lg hover:shadow-[#3b82f6] transition p-6 flex flex-col">
      <img src="images/09.png" alt="Modern hotel booking website dashboard with user-friendly design and booking confirmation" class="rounded-md mb-6 object-cover w-full h-48" loading="lazy" width="400" height="250" />
      <h3 class="text-xl font-bold text-[#3b82f6] mb-3">Hotel Booking Website Creation.</h3>
      <p class="text-gray-300 flex-grow">
       This hotel booking website was also created using PHP and MySQL. It features a more modern and user-friendly design. Users can view hotel information, make bookings, and receive booking confirmations. The system focuses on responsive design and ease of use, making it efficient for both users and administrators.
      </p>
     </article>
     <article class="bg-[#183a8a] rounded-lg shadow-lg hover:shadow-[#3b82f6] transition p-6 flex flex-col">
      <img src="images/1.png" alt="Web-based badminton court booking application interface showing booking slots and QRIS payment method" class="rounded-md mb-6 object-cover w-full h-48" loading="lazy" width="400" height="250" />
      <h3 class="text-xl font-bold text-[#3b82f6] mb-3">Web-Based Application for Badminton Court Booking with Qris Payment Method.</h3>
      <p class="text-gray-300 flex-grow">
       An e-commerce platform built with Laravel and MySQL, featuring QRIS integration for payment and WhatsApp API for real-time order notifications. The system supports product management, customer orders, and secure transactions. Designed for modern online stores that need automation, efficient workflows, and seamless customer communication.
      </p>
     </article>
    </div>
   </section>
   <!-- Education Section -->
   <section id="education" class="py-20 max-w-4xl mx-auto px-6">
    <h2 class="text-4xl font-extrabold text-white mb-12 text-center tracking-wide">Education</h2>
    <div class="space-y-8">
     <div class="bg-[#183a8a] rounded-lg shadow-lg p-6 flex flex-col md:flex-row md:items-center md:justify-between">
      <div>
       <h3 class="text-2xl font-bold text-[#3b82f6]">Students of Informatics Engineering</h3>
       <p class="text-gray-300 mt-1">Politeknik Negeri Batam</p>
    </div>
   </section>
   <!-- Contact Section -->
   <section id="contact" class="py-20 bg-[#3b82f6] rounded-lg max-w-4xl mx-auto px-6 text-white">
    <h2 class="text-4xl font-extrabold mb-10 text-center tracking-wide">Get In Touch</h2>
    <form action="mailto:your.email@example.com" method="POST" enctype="text/plain" class="max-w-xl mx-auto space-y-8">
     <div>
      <label for="name" class="block mb-3 font-bold text-lg">Name</label>
      <input type="text" id="name" name="name" placeholder="Your full name" required class="w-full rounded-md px-5 py-3 text-black focus:outline-none focus:ring-2 focus:ring-white" />
     </div>
     <div>
      <label for="email" class="block mb-3 font-bold text-lg">Email</label>
      <input type="email" id="email" name="email" placeholder="you@example.com" required class="w-full rounded-md px-5 py-3 text-black focus:outline-none focus:ring-2 focus:ring-white" />
     </div>
     <div>
      <label for="message" class="block mb-3 font-bold text-lg">Message</label>
      <textarea id="message" name="message" placeholder="Write your message here..." rows="5" required class="w-full rounded-md px-5 py-3 text-black focus:outline-none focus:ring-2 focus:ring-white"></textarea>
     </div>
     <button type="submit" class="w-full bg-black bg-opacity-80 hover:bg-black font-extrabold py-4 rounded-md transition">Send Message</button>
    </form>
    <div class="mt-14 max-w-xl mx-auto flex justify-center space-x-10 text-white text-3xl">
     <a href="https://github.com/username" target="_blank" rel="noopener" aria-label="GitHub Profile" class="hover:text-blue-300 transition">
      <i class="fab fa-github"></i>
     </a>
     <a href="https://linkedin.com/in/username" target="_blank" rel="noopener" aria-label="LinkedIn Profile" class="hover:text-blue-300 transition">
      <i class="fab fa-linkedin"></i>
     </a>
     <a href="mailto:your.email@example.com" aria-label="Send Email" class="hover:text-blue-300 transition">
      <i class="fas fa-envelope"></i>
     </a>
    </div>
   </section>
  </main>
  <footer class="mt-24 py-8 text-center text-blue-300 text-sm">
   © 2025 Gztinforma. All rights reserved.
  </footer>
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const desktopNav = document.getElementById('desktop-nav');
    const mobileNavLinks = mobileMenu.querySelectorAll('a');
    const desktopNavLinks = desktopNav.querySelectorAll('a');

    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('open');
      if (mobileMenu.classList.contains('open')) {
        mobileMenu.classList.remove('open');
      } else {
        mobileMenu.classList.add('open');
      }
    });

    function clearActiveLinks() {
      desktopNavLinks.forEach(link => link.classList.remove('active'));
      mobileNavLinks.forEach(link => link.classList.remove('active'));
    }

    [...desktopNavLinks, ...mobileNavLinks].forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);
        if (!targetSection) return;

        const headerOffset = document.querySelector('header').offsetHeight;
        const elementPosition = targetSection.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset + 1;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });

        clearActiveLinks();
        link.classList.add('active');

        if (mobileMenu.classList.contains('open')) {
          mobileMenu.classList.remove('open');
          menuBtn.classList.remove('open');
        }
      });
    });

    const sections = ['about', 'skills', 'projects', 'education', 'contact'].map(id => document.getElementById(id));
    window.addEventListener('scroll', () => {
      const scrollPos = window.pageYOffset + document.querySelector('header').offsetHeight + 5;
      let currentSectionId = sections[0].id;

      for (const section of sections) {
        if (section.offsetTop <= scrollPos) {
          currentSectionId = section.id;
        }
      }

      clearActiveLinks();
      desktopNavLinks.forEach(link => {
        if (link.getAttribute('href').substring(1) === currentSectionId) {
          link.classList.add('active');
        }
      });
      mobileNavLinks.forEach(link => {
        if (link.getAttribute('href').substring(1) === currentSectionId) {
          link.classList.add('active');
        }
      });
    });

    window.dispatchEvent(new Event('scroll'));
  </script>
 </body>
</html>