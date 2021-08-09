     @props(['trigger'])
                    {{-- Trigger --}}
                    <div x-data ="{show: false}" @click.away="show = false">
<div @click = "show = ! show">
    {{ $trigger}}
</div>
                {{-- links --}}

                        <div x-show = "show" class="py-2 absolute bg-gray-700 w-52 mt-2 rounded-lg z-50 display-none ">
                          {{$slot}}
                        </div>
                    </div>
