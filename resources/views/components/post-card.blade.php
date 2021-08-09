
@props(['post'])
                <article
                    {{$attributes->merge([ "class"=>"transition-colors duration-300 hover:bg-gray-800 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"])}}>
                    <div class="py-6 px-5">
                        <div>
                            <img src="/images/illustration-4.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                          <x-category-link :category="$post->category" />


                                    <a href="#"
                                       class="px-3 py-1  bg-green-900 text-green-500 rounded-full text-white text-xs uppercase font-semibold"
                                       style="font-size: 10px">laravel</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        {{$post->title}}
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    {{$post->excerpt}}
                                </p>


                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                       <a href="/authors/{{$post->author->username}}"> <h5 class="font-bold">{{$post->author->username}}</h5></a>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="/posts/{{$post->slug}}"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-700 hover:bg-gray-900 rounded-full   py-2 px-8"
                                    >
                                        Read <span class="block md:hidden hidden sm:hidden"> More </span>
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
