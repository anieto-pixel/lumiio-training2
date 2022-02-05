    <x-layout>
        <article>
            <h1>
                {{ $post->title }}
            </h1>

            <div>
                {!! $post->body !!}
            </div>
        </article>
        <div>
            <a href="/">Go Back</a>
        </div>
    </x-layout>

