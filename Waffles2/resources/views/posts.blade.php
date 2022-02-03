<x-layout> /* what does this do? */
        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">/* what does this line do? and how? */
            /* The if part is making sure that the database does have some posts, and what to do if it does or if it doesn't
            I'm just not sure of the second lines*/

            @if ($posts->count())
                <x-posts-grind :posts="$posts"/>

            @else
                <p class="text-center"> No post yet. Please check back later.</p>
            @endif
        </main>

</x-layout>
