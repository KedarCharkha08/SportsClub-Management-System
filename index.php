<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="public/style.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
  <title>Sports Club Management System</title>
</head>

<body class="text-gray-800 antialiased">
  <!-- NavBar-->
  <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="index.php">Sports Club Management</a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
          <i class="text-white fas fa-bars"></i>
        </button>
      </div>
      <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">

        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
          <li class="flex items-center">
            <a href="CurrentBookings.php">
              <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                <i class="fas fa-arrow-alt-circle-down"></i> BOOKINGS
              </button>
            </a>
          </li>
          <li class="flex items-center">
            <a href="PlayerProfile.php">
              <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                <i class="fas fa-arrow-alt-circle-down"></i> PROFILE
              </button>
            </a>
          </li>
          <li class="flex items-center">
            <a href="login.php">
              <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                <i class="fas fa-arrow-alt-circle-down"></i> GET STARTED
              </button>
            </a>
          </li>
          <li class="flex items-center">
            <a href="logout.php">
              <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                <i class="fas fa-arrow-alt-circle-down"></i> LOGOUT
              </button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Main area-->
  <main>
    <!--Hero-->
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 100vh;">
      <div class="absolute top-0 w-full h-full bg-cover bg-cover" style='background-image: url("public/sports.jpg");'>
        <span id="blackOverlay" class="w-full h-full absolute opacity-50"></span>
      </div>
      <!-- <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center mt-8">
            <div class="pr-12">
              <h1 class="text-white font-bold text-5xl mt-10">
                Play like a Champion
              </h1>
              <p class="mt-4 text-lg text-gray-100">
                Welcome to Sports Club Management. We are multi-sports, multi-clubs organizing center
                where you can register and train,play with friends or find worhty opponents.
              </p>
            </div>
          </div>
        </div>
      </div> -->
      <!-- <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden " style="height: 70px;">
        <svg class="absolute bottom-0 overflow-hidden " xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->
    </div>
    <section class="pb-20  bg-white">


      <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 100vh;">
        <div class="absolute top-0 w-full h-full bg-cover bg-cover" style='background-image: url("images/123456.jpg");'>
          <span id="blackOverlay" class="w-full h-full absolute opacity-50"></span>
        </div>
        <!-- <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center mt-8">
            <div class="pr-12">
              <h1 class="text-white font-bold text-5xl mt-10">
                Play like a Champion
              </h1>
              <p class="mt-4 text-lg text-gray-100">
                Welcome to Sports Club Management. We are multi-sports, multi-clubs organizing center
                where you can register and train,play with friends or find worhty opponents.
              </p>
            </div>
          </div>
        </div>
      </div> -->
        <!-- <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden " style="height: 70px;">
        <svg class="absolute bottom-0 overflow-hidden " xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div> -->

        <div class="container mx-auto px-4 ">

          <div class="flex flex-wrap ">


            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg- w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto bg-yellow-300 rounded-lg">
                  <div class="text-black p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-yellow-500">
                    <i class="fas fa-award"></i>
                  </div>
                  <a href="public/sports.php">
                    <h6 class="text-xl font-semibold">Casual Play </h6>
                    <p class="mt-2 mb-4 text-black">
                      Play with your friends or play against specific opponents.
                    </p>
                  </a>
                </div>
              </div>
            </div>

            <div class="w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-blue-500 w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto bg-blue-400  rounded-lg">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-700">
                    <i class="fas fa-retweet"></i>
                  </div>
                  <a href="public/sport2.php">
                    <h6 class="text-xl font-semibold">Train</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Train under the best coaches available at your club.
                    </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center ">
              <div class="relative flex flex-col min-w-0 break-words bg-green-300 w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto bg-green-400 rounded-lg">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg bg-green-600 rounded-full ">
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <a href="event_player.php">
                    <h6 class="text-xl font-semibold">Events</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Enter into sporting events and compete against the best.
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--About Section-->
    <section id="about" class="relative py-20 bg-white text-black -mt-50">
      <div class="container mx-auto px-4 ">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
            <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://i.pinimg.com/originals/24/93/66/249366cee9daeb87df57e5fc39bc022c.jpg" />
          </div>
          <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
            <div class="md:pr-12">
              <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                <i class="fas fa-rocket text-xl"></i>
              </div>
              <large>About our Services</large>
              <h3 class="text-2xl font-semibold ">Pre-Book Option</h3>
              <p class="mt-4 text-lg leading-relaxed text-gray-600">
                You can pre-book courts for your use one week prior. Leads to hassle-free book and lesser wastsage of time due to unavailibility of courts.
              </p>
              <ul class="list-none mt-6">
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="font-semibold inline-block py-3 mr-3"><i class="fas fa-people-arrows"></i></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">
                        Book for yourself and your friends.
                      </h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="font-semibold inline-block py-3 mr-3"><i class="fas fa-clock"></i></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">24/7 online booking servives</h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="font-semibold inline-block py-3 mr-3"><i class="fas fa-money-bill-alt"></i></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">Online Purchase of tokens accessible at all our clubs</h4>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <section class="relative block bg-white">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">

        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <a href="register.php">
                <h2 class="text-4xl font-semibold text-black mt-32">REGISTER WITH US</h2>
              </a>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                <i class="fas fa-plus-circle text-xl"></i>
              </div>
              <h6 class="text-xl mt-5 font-semibold text-black">
                Greater Reach
              </h6>
              <p class="mt-2 mb-4 text-gray-500">
                Increase your reach as a club or coach.
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                <i class="fas fa-table-tennis text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-black">
                Play with friends or best opponents.
              </h5>
              <p class="mt-2 mb-4 text-gray-500">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                <i class="fas fa-medal text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-black">Launch time</h5>
              <p class="mt-2 mb-4 text-gray-500">
                Participate in events and win amongst the best.
              </p>
            </div>
          </div>
        </div>
      </section>
</body>
</script>

</html>