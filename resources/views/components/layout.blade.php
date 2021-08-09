<!doctype html>
<html>
<title>Code Initiative</title>
<link rel="stylesheet" type="text/css" href="/css/app.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<body class="bg-gray-900 text-white" style="font-family: Open Sans, sans-serif">

    <section class="px-6 py-8">
  <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/codelogo.svg" alt="Laracasts Logo" width="300" height="20">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="border-2 border-green-500 transition delay-30 duration-100 rounded-full py-2 px-5 text-green-400 cursor-pointer hover:bg-green-500 hover:text-white ml-3">Authors Page</a>

                <a href="#" class="bg-green-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe
                </a>
            </div>
        </nav>
        {{ $slot }}

        <footer class="bg-gray-900 border border-transparent border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/codeface.svg" alt="" class="mx-auto  my-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" id="newsletter" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block ">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-green-500 hover:bg-green-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8 #newsletter"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
</section>
</body>
</html>
