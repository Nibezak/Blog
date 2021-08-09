@props(['post'])
   <article
                class="transition-colors duration-200 hover:bg-gray-800 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">

                        <header class="mt-8 flex-1 lg:mt-0">
                            <div class="space-x-2 inline-flex">
                                @if(\Request::is('/'))
                          <x-category-link :category="$post->category" />

@else


                            <div class="space-x-2 inline-flex mx-2">
                                     <span   class="px-3 py-1  bg-gray-700 text-gray-300 rounded-full text-white text-xs uppercase font-semibold"
                                   style="font-size: 10px">

                                {{$post->category->slug}}</span>
                            </div>
@endif


                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                   {{$post->title}}
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                     <time>{{ $post->updated_at}}</time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-md font-sans mt-2 tracking-wide">
                            <p>
                            {{$post->excerpt}}
                            </p>


                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex  items-center transition delay-100 duration-200 hover:text-sm">
                                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3 ">
                                   <a href="/authors/{{$post->author->username}}"><h5 class="font-bold">{{ $post->author->username}}</h5></a>
                                    <h6>Mascot at Cherry's</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="/posts/{{$post->slug}}"
                                   class="transition-colors duration-200 text-xs font-semibold bg-gray-700 hover:bg-gray-900 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>
