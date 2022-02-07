

<x-layout>
    @foreach ($posts as $element)
        <article>
            <h1>
                <a href="posts/{{ $element -> id }}">
                    {!! $element->title !!}
                </a>
            </h1>
            <p>
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </p>
            <div>
                {{ $element->excerpt }}
            </div>

        </article>
    @endforeach
</x-layout>

/** I can't just call the elements anything, apparently they must be called whatever the class is called for tinker/the database to get it**/
