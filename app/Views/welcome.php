<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring and fall | Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'cornflower-blue': '#6988F3',
                }
            }
        }
    }
    </script>

</head>

<body>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white overflow-hidden ">
        <div class="max-w-7xl mx-auto mb-10">
            <div
                class="relative -z-1  bg-[url('assets/images/bg-image-banner.png')] bg-contain bg-no-repeat object-cover   pb-8 bg-white sm:pb-16 md:pb-20  lg:max-w-full lg:w-full lg:pb-28 xl:pb-32">


                <div>
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                            aria-label="Global">
                            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                <div class="flex items-center justify-between w-full md:w-auto">
                                    <a href="#">
                                        <span class="sr-only">Spring and fall</span>
                                        <img class="h-10 w-auto sm:h-20"
                                            src="<?= base_url('assets/images/logo/logo1.png') ?>">
                                    </a>
                                    <div class="-mr-2 flex items-center md:hidden">
                                        <button type="button"
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                            aria-expanded="false">
                                            <span class="sr-only">Open main menu</span>
                                            <!-- Heroicon name: outline/menu -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </nav>
                    </div>

                    <!--
          Mobile menu, show/hide based on menu open state.

          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
                    <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                                </div>
                                <div class="-mr-2">
                                    <button type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close main menu</span>
                                        <!-- Heroicon name: outline/x -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3 space-y-1">
                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <a href="#"
                                class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                                Log in </a>
                        </div>
                    </div>
                </div>

                <main class="mt-10 ml-10 max-w-2xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left p-10 bg-cornflower-blue">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Go ease </span>
                            <span class="block text-indigo-600 xl:inline">Go abroad </span>
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                            Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get started </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Live demo </a>
                            </div>
                        </div>""
                    </div>
                </main>
            </div>
        </div>
        <div
            class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/lg:absolute lg:inset-y-0 lg:-top-10 lg:right-1 lg:w-1/2 top">
            <img class="h-56 w-3/12 object-scale-down  sm:h-72 md:h-96 lg:w-10/12 lg:h-full"
                src="<?= base_url('/assets/images/landing_banner.png') ?>" alt="">
        </div>
    </div>

    <div class="md:container md:mx-auto lg:px-12 mt-10 md:mt-20">
        <div class="relative my-10 bg-transparent h-20"></div>
        <div class="static max-w-full mx-auto bg-gray-100 lg:px-10">
            <div class="flex -mt-20 z-9">
                <div class="flex-none w-6/12 h-auto -mt-20 min-h-screen">
                    <img class="h-56  absolute   object-scale-down -mt-20  sm:h-72 md:h-96 lg:w-4/12 lg:h-full  "
                        src="/assets/images/study-welcome.png" alt="study image" />
                </div>
                <div class="grow  mt-5">
                    <h3 class="text-3xl text-blue-800">The service <br> <span
                            class="text-3xl text-blue-300">Provider..</span></h3>
                </div>
                <div class="grow m-5">
                    <img class="" src="/assets/images/graduate-caps.png" alt="graduate caps" />
                </div>
            </div>

        </div>

    </div>

</body>

</html>