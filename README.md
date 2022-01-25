# lumiio-training2
php videos. Second patch of videos

The disvcarded code along with comments nightmare of video 8 is this :


/* as a second set of value arguments, this method accepts
        an array of key-value pairs, in the variable "post, that in this case we'll use
        to ensure that the text in the
        posts displayed aren't always the same one*/
Route :: get('posts/{post}', function($slug){/* the braces is one of the things that didnt work in this version
 here mean somethign like"and whatever
 is in them behave slike a wild card, and is the variable slug; would it matter what we write inside
 the braces though?, how does it know it goes to slug now?*/
    $post = file_get_contents(__DIR__ . "/../resources/posts/{$slug}}.html");
        return view ('post',['post' => $post]);
        /*  complicated version of
           'post' => file_get_contents($filename);*/
});
*/
