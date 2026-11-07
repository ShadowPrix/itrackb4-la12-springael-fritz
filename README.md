# ITRACKB4 LA12 - Movies

Prepared by: Fritz C. Springael

## Q1:
The top of your error page named a file inside vendor. Say why that was not where your mistake was, and where the page showed you it actually was.

[Answer - The page named `vendor\laravel\framework\...\ForwardsCalls.php:67` because that is where PHP stopped. Laravel's own code is the part that noticed `Movie::withh()` does not exist, so it threw the error there. My mistake was in `app\Http\Controllers\MovieController.php` on line 18, where I typed `Movie::withh('genre')`. The Exception trace had already opened that frame and marked the line in red.]


## Q2:
You wrote one Log::info line with a context array. Name something it will tell you next month that the error page could not.

[Answer - My line `Log::info('Movie saved', ['id' => $movie->id, 'genre_id' => $movie->genre_id])` records which movie was saved, which genre it belonged to, and when. The error page only appears for a failed request and disappears once the browser is closed. It says nothing about the requests that worked, such as movie 1 and movie 2 being updated at 08:33 and 08:34.]

## Q3:
Your guard answers with 403 instead of redirecting back with a message. Say when each of the two is the better answer.

[Answer - My guard in `destroy()` stops the last movie in a genre from being deleted, like Grown Ups, the last Comedy. A 403 is better when the request should never have been made, for example someone sending the DELETE straight to the address with no Delete button involved. Redirecting back with a message is better when a person did something reasonable through the page, like clicking Delete on the last Comedy, and needs to be told why it didn't work so they can carry on.]