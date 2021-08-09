
<header class="max-w-xl mx-auto mt-12 text-center">
            <h1 class="text-4xl">
                @if (request()->is('/'))

                Latest <span class="text-green-500 font-bold font-mono">Code Initiative</span> News

                <h2 class="inline-flex mt-2">By
                  <strong class="ml-2 mr-0 text-green-500">
                    <span class="text-white">C</span>
                    <span class="text-white">h</span>
                    <span>e </span>
                    <span>r</span>
                    <span>r</span>
                    <spa class="text-white">y</span>

                </strong>
                 <img src="/images/codeface.svg"alt="Head of Cherry the bot" class="-mt-3" style="height:30px; width: 70px">
             </h2>
                @else

<span class="text-green-500 font-bold font-mono " style="font-size:24px;">
    {{ request()->path() }}
</span>
@endif
</h1><br/>



        {{--     <p class="text-sm mt-14 font-semibold font-sans">
                Blogs, update. We're here with   Popular web content.
                I'm going to try and keep you guys up to speed with what's going on!
            </p> --}}

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                <!--  Category & other filters -->
@include('components.filters-bar')

                <!-- Search -->
               <x-search-bar />
            </div>
        </header>
