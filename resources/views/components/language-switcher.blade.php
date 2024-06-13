<ul class="flex gap-2 justify-center items-center">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ strtoupper($localeCode) }}

            </a>
        </li>
    @endforeach
</ul>