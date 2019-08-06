@extends('layouts.default')

@section('title')
    @lang('title.games')
@endsection

@section('content-header')
    @include('pages.lans.partials.header', ['lan', $lan])
@endsection

@section('content')
    @if(Auth::user())
        <p class="mt-2">@lang('phrase.lan-attendee-game-picks-user-help')</p>
        <script>
            window.addEventListener('load', function() {
                const app = new Vue({
                    el: '#app',
                    methods: {
                        post(game) {
                            console.log(game);
                            pick = {
                                game_provider: game.provider,
                                game_id: game.id,
                            }
                            axios.post('lans/' + {{ $lan->id }} + '/attendee-game-picks', pick)
                                .then((response) => {
                                    location.reload();
                                }, (error) => {
                                    error.response.data.errors.forEach(function(error) {
                                        $("#alerts").append('<div class="alert alert-danger" role="alert">' +
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                            '<span aria-hidden="true">&times;</span>' +
                                            '</button><span>'+error+'</span></div>')
                                    });
                                })
                        }
                    }
                });
            });
        </script>
        <div id="app" class="mb-3">
            <games-search @selected="post"></games-search>
        </div>
        <div id="alerts"></div>
    @else
        <p class="mt-2">@lang('phrase.lan-attendee-game-picks-guest-help')</p>
    @endif
    @include('pages.lans.attendee-game-picks.partials.list', ['lanPicks' => $lanPicks])
@endsection