<div class="col-sm-2 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <p>Dit is het <em>praat portaal</em> over onze VIIe lustrumreis. De Luco behoudt zich het recht voor ongepaste uitingen te verwijderen.</p>
    </div>
    <div class="sidebar-module">
        <h4>{{ trans('info.archives') }}</h4>
        <ol class="list-unstyled">
            @foreach ($archives as $stats)
                <li>
                    <a href="/posts?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                        {{ $stats['month']. ' '.$stats['year'] }}
                    </a>
                </li>
            @endforeach
            <li><a href="{{ route('posts')   }}">{{ trans('info.all') }}</a></li>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Links</h4>
        <ol class="list-unstyled">
            <li><a href="/destination">Programma</a></li>
            <li><a href="/joiners">Deelnemers</a></li>
            <li><a href="/luco">Die Luco</a></li>
        </ol>
    </div>
</div>