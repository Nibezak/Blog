
  <!--  Category -->
                <div class="relative flex lg:inline-flex items-center bg-gray-800 rounded-xl">

                    <x-drop-down >
<x-slot name="trigger">
                 <button
                        class="py-2 pl-3 pr-9 text-sm font-semibold w-full  text-left
                        inline-flex">
                    {{ isset($currentCategory) ? ucwords($currentCategory->slug) : 'Categories' }}



                                    <svg class="bg-gray-600 ml-8  transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="10"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </button>
</x-slot>
  @foreach($categories as $category)
                         <x-dropdown-item active="{{isset($currentCategory) && $currentCategory->is($category)}}" href="/categories/{{$category->slug}}">
                            {{$category->slug}}
                         </x-dropdown-item>

@endforeach
                    </x-drop-down>
                </div>

                <!-- Other Filters -->
                <div class="relative flex lg:inline-flex items-center bg-gray-800 rounded-xl">
                    <select class="flex-1 appearance-none bg-gray-800 py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="category" disabled selected>Other Filters
                        </option>
                        <option value="foo">Foo
                        </option>
                        <option value="bar">Bar
                        </option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>



