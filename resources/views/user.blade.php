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
<body style="background-color: black;">

<div class="container" style="max-width: 500px; margin: auto;">
<section style="font-family: Montserrat" class=" bg-[#071e34] flex font-medium items-center justify-center h-screen" >

    <section class="w-64 mx-auto bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg">
        <div class="flex items-center justify-between">
            <span class="text-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
              </svg>
            </span>
        </div>
        <div class="mt-6 w-fit mx-auto">
            <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-28 " alt="profile picture" srcset="">
        </div>

        @if(isset($userName))
            <div class="mt-8 ">
                <h2 class="text-white font-bold text-2xl tracking-wide">{{ $userName }}</h2>
            </div>
        @else
            <div class="mt-8 ">
                <h2 class="text-white font-bold text-2xl tracking-wide">{{ Auth::user()->name }}</h2>
            </div>
        @endif


        <div class="heading text-center font-bold text-2xl m-5 text-gray-100" style="color: white">User videos</div>
        @foreach($videos as $video)
            <div class="container" style="color: white; margin: 50px 0">
                <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                    <div class="font-bold text-xl mb-2">{{ $video->title }}</div>
                    <video width="320" height="240" controls>
                        <source src="{{ asset('/storage/' . $video->path) }}" type="video/mp4">
                    </video>        
                </div>
            </div>
        @endforeach

        <div class="h-1 w-full bg-black mt-8 rounded-full">
            <div class="h-1 rounded-full w-2/5 bg-yellow-500 "></div>
        </div>

    </section>


</section>
</div>
</body>
</html>