  @props(['category'])
  <a href="/categories/{{$category->slug}}"
                                class="px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-white text-xs uppercase font-semibold"
                                style="font-size: 10px">{{$category->slug}}</a>
                            <a href="#"
                                class="px-3 py-1  bg-green-900 text-green-500 rounded-full text-white text-xs uppercase font-semibold"
                                style="font-size: 10px">Updates</a>
