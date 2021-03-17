<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">

        <title>Create New ToDo</title>
    </head>
    <body>
        <div class="text-center pt-10">
            <h1 class="text">What next you need ToDo?</h1>
            <form method="post" action="/todos/create" class="py-5">
                @csrf
                <input type="text" name="title" class="py-2 px-2 border rounded">
                <input type="submit" value="Create" class="p-2 border rounded">
            </form>
        </div>
    </body>
</html>
