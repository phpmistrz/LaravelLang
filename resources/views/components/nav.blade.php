<nav class="fixed left-0 top-0 right-0 flex justify-between px-24 py-4 w-full bg-black text-white">
    <div>
        <a href="{{route('home')}}" class="text-3xl font-bold">LOGO</a>
    </div>

    <ul class="flex justify-end items-center gap-6 text-xl">
        <li><a href="{{route('about')}}">{{__('shared.nav.item-one')}}</a></li>
        <li><a href="{{route('gallery')}}">{{__('shared.nav.item-two')}}</a></li>
        <li><a href="{{route('contact')}}">{{__('shared.nav.item-three')}}</a></li>


    </ul>

    <x-language-switcher/>
</nav>