

<x>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a herf= "posts/{{ $post -> id }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach
</x>

/** I can't just call the elements anything, apparently they must be called whatever the class is called for tinker/the database to get it**/
