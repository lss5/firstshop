<div class="w-100 py-4" style="background-color: #263238 !important;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 py-md-0 py-3">
                <span class="text-muted">
                    <h5>{{ config('app.name', 'Laravel') }}</h5>
                    <h6>{{ config('app.description','') }}</h6>
                </span>
            </div>
            <div class="col-xs-12 col-md-6 py-md-0 py-3">
                <h5 class="text-muted">For sell send message</h5>
                @if (config('contact.tg_channel_link'))
                    <a href="{{ config('contact.tg_channel_link') }}" class="btn btn-primary btn-sm" target="_blank">Telegram</a>
                @endif
            </div>
        </div>
    </div>
</div>