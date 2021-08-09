   @props(['active' => false])
   @php

$classes = "block text-left px-3  text-sm leading-8 hover:bg-gray-800 focus:bg-gray-800 ";
if($active) $classes .= 'bg-gray-900';
   @endphp
   <a
         {{$attributes(["class"=> $classes])}}>

            {{$slot}}
        </a>

