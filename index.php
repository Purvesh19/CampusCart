<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      <?php include "assets/index-19559485.css" ?>
      .body {
        font-family: "Poppins", sans-serif;
      }
      .carousel {
        overflow: hidden;
        width: 100%;
        height: 300px;
        position: relative;
      }

      .carousel-inner {
        display: flex;
        transition: transform 0.3s ease-in-out;
      }

      .carousel-item {
        flex: 0 0 100%;
      }

      .carousel-controls {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
      }
    </style>
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/assets/index-19559485.css"> -->
  </head>
  <body class="bg-purple-100">
    <header class="justify-center items-center">
      <div class="flex navbar pt-2 h-16 bg-purple-950 p-2">
        <div class="logo flex items-center justify-center mx-6">
          <img src="https://cdn.discordapp.com/attachments/1118765599892455464/1122528958496383096/logo-1-f3c60bcb.png" height="50" width="50" alt="logo" />
          <h1 class="items-center font-semibold text-white text-lg">
            <a href="/campuscart/home.php">Campus Cart</a>
          </h1>
        </div>
        <div class="search-box justify-center items-center my-1 mx-64">
          <form>
            <label
              for="default-search"
              class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
              >Search</label
            >
            <div class="relative">
              <div
                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
              >
                <svg
                  aria-hidden="true"
                  class="w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  ></path>
                </svg>
              </div>
              <input
                type="search"
                id="default-search"
                class="block w-96 pb-2 p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Mockups, Logos..."
                required
              />
              <button
                type="submit"
                class="text-white -mx-4 mb-1 pb-2 absolute -right-16 -bottom-0.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Search
              </button>
            </div>
          </form>
        </div>
        <div class="flex justify-center items-center text-white gap-4 mx-8">
          <button
            class="bg-white text-purple-950 text-lg font-semibold pl-4 pr-4 py-1.5 rounded-md"
          >
            <a href="/campuscart/signup.php">Sign Up</a>
          </button>
          <button
            class="bg-white text-purple-950 text-lg font-semibold pl-4 pr-4 py-1.5 rounded-md"
          >
            <a href="/campuscart/login.php">Login</a>
          </button>
        </div>
      </div>

      <div class="nav-2 text-black bg-purple-100 py-2 pt-4 text-xl">
        <nav class="flex justify-center items-center gap-6 mx-12">
          <a
            class="text-blue-700 hover:bg-gray-300 p-2 px-4 rounded-md focus:outline-none"
            href="/campuscart/home.php"
            >Home</a
          >
          <a
            class="hover:bg-gray-300 p-2 px-4 rounded-md focus:outline-none"
            href="/campuscart/product_listing.php"
            >Electronics</a
          >
          <a
            class="hover:bg-gray-300 p-2 px-4 rounded-md focus:outline-none"
            href="#"
            >Stationary</a
          >
          <a
            class="hover:bg-gray-300 p-2 px-4 rounded-md focus:outline-none"
            href="#"
            >Entertainment</a
          >
          <a
            class="hover:bg-gray-300 p-2 px-4 rounded-md focus:outline-none"
            href="#"
            >Renting</a
          >
        </nav>
      </div>
    </header>
    ]
    <section class="section-1 -my-5 px-1 bg-purple-100">
      <div class="carousel">
        <div class="carousel-inner object-cover">
            <a href="link1.html" class="carousel-item">
                <img src="https://picsum.photos/1400/300" alt="Image 1">
              </a>
              <a href="link2.html" class="carousel-item">
                <img src="https://picsum.photos/1400/300" alt="Image 2">
              </a>
              <a href="link3.html" class="carousel-item">
                <img src="https://picsum.photos/1400/300" alt="Image 3">
              </a>
        </div>
        <div class="carousel-controls">
          <button
            class="carousel-control text-white bg-black px-3 py-7 font-bold bg-opacity-50 text-3xl rounded-md hover:bg-opacity-90 transition-opacity"
            onclick="previousCarouselItem()"
          >
            &lt;
          </button>
          <button
            class="carousel-control text-white bg-black px-3 py-7 font-bold bg-opacity-50 text-3xl rounded-md hover:bg-opacity-90 e transition-opacity"
            onclick="nextCarouselItem()"
          >
            &gt;
          </button>
        </div>
      </div>
    </section>
    <section class="offers">
      <div class="flex justify-center items-center gap-6 mt-6 mx-6">
        <div class="top-offers w-52">
          <h1 class="text-4xl text-center font-bold">Top Offers</h1>

          <button
            class="bg-purple-900 text-white font-bold text-lg ml-2 mt-5 p-2 pl-6 pr-6 rounded-md hover:bg-purple-600 transition-colors"
          >
            <a href="#">View All</a>
          </button>
        </div>
        <div class="offer-1 bg-white p-4 rounded-md shadow-md">
          <img src="https://picsum.photos/400/300" alt="offer-1" />
          <h1 class="text-center text-xl font-bold">Offer 1</h1>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
            voluptatum.
          </p>
        </div>
        <div class="offer-2 bg-white p-4 rounded-md shadow-md">
          <img src="https://picsum.photos/400/300" alt="offer-2" />
          <h1 class="text-center text-xl font-bold">Offer 2</h1>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
            voluptatum.
          </p>
        </div>
        <div class="offer-3 bg-white p-4 rounded-md shadow-md">
          <img src="https://picsum.photos/400/300" alt="offer-3" />
          <h1 class="text-center text-xl font-bold">Offer 3</h1>
          <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
            voluptatum.
          </p>
        </div>
      </div>
    </section>
    <script>
      const carouselInner = document.querySelector(".carousel-inner");
      const carouselItems = document.querySelectorAll(".carousel-item");
      let currentIndex = 0;

      function showCarouselItem(index) {
        carouselInner.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
      }

      function nextCarouselItem() {
        currentIndex = (currentIndex + 1) % carouselItems.length;
        showCarouselItem(currentIndex);
      }

      function previousCarouselItem() {
        currentIndex =
          (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        showCarouselItem(currentIndex);
      }
    </script>
    <footer>
        <div class="footer mt-10 bg-purple-950 text-white">
            <div class="flex justify-evenly items-center gap-6 mx-12">
            <div class="footer-1">
                <h1 class="text-xl font-bold">About Us</h1>
                <ul>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                </ul>
            </div>
            <div class="footer-2">
                <h1 class="text-xl font-bold">Contact Us</h1>
                <ul>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                </ul>
            </div>
            <div class="footer-3">
                <h1 class="text-xl font-bold">Social Media</h1>
                <ul>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                    <a href="#"><li class="hover:translate-x-2">>Lorem, ipsum.</li></a>
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-4 bg-purple-800 text-white text-center p-2">
            <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
            voluptatum.
            </p>
        </div>
    </footer>
  </body>
</html>