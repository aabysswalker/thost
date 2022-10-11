<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
            <div class="container" style="margin: 50px 0">
                <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                    <div class="font-bold text-xl mb-2">{{ $video[0]->title }}</div>
                    <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">{{ $video[0]->like }}</div>
                    <video width="320" height="240" controls>
                        <source src="{{ asset('/storage/' . $video[0]->path) }}" type="video/mp4">
                    </video>        
                </div>
            </div>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
        Leave comment
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="content" type="text" placeholder="Some content">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Leave
</button>
    </div>
  </form>
  <button class='like'><i class="fas fa-fire">Like</i></button>
                    <div class="mt-8 ">
                            <h2 class="text-white font-bold text-2xl tracking-wide" style="color: black">{{ $likes->count() }}</h2>
                        </div>
    @foreach($comments as $comment)
            <div class="container" style="color: black;margin: 50px 0">
                <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                        <div class="mt-8 ">
                            <h2 class="text-white font-bold text-2xl tracking-wide" style="color: black">{{ $user[0]->name }}</h2>
                        </div>
                    <div class="font-bold text-xl mb-2" style="color: black">{{ $comment->content }}</div> 
                </div>
            </div>
        @endforeach
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>

    $('.like').on('click', function(event) {

      $.ajax({
        method: 'POST',
        url: '/api/video/{{ $video[0]->id }}/like'
      })
    });

</script>
</body>
</html>