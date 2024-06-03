<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Products</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
 <style>
        #tog_bg {
            transition: left 0.3s ease-in-out; /* Add transition property */
        }
        body{
            overflow-x: hidden;
        }
    </style>
<body >
   
    <div class="navbar bg-black w-full sm:h-full md:h-20 shadow-3xl">
        <nav class="flex sm:flex-column md:flex-row  items-center h-full justify-between p-6 w-full">
            <div class="logo">
                <h1 class="text-2xl md:text-3xl text-orange-300 font-bold uppercase">Sa<span class="text-orange-500">st</span>a</h1>
            </div>
            <ul id="tog_bg" class=" flex md:flex fixed bottom-0 left-[-100%] md:left-[0%] md:gap-[50px] top-20 z-40 flex-col gap-10 bg-black md:bg-none md:top-0 h-full w-full md:p-0 md:bg-transparent md:flex-row md:relative md:justify-center md:m-2 p-14 text-center">
                <li class=""><a href="#" class="text-white font-semibold text-lg">Home</a></li>
                <li class=""><a href="#" class="text-white font-semibold text-lg">About</a></li>
                <li class=""><a href="#" class="text-white font-semibold text-lg">Services</a></li>
                <li class=""><a href="#" class="text-white font-semibold text-lg">Contact</a></li>
                <li class=""><a href="#" class="text-white font-semibold text-lg">About</a></li>
        
            </ul>
            <div class="items flex items-center gap-3">

            <button class="bg-orange-400 md:w-29 w-20 md:h-8 h-6 font-semibold">Login</button>
            <svg id="toggle"  class="w-8 text-white md:hidden cursor-pointer"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
</svg>


            </div>

        </nav>
    </div>

    @if($msg = Session::get('success'))
    <div class="bg-green-400 w-full h-10">
        <span class="m-2 text-white font-semibold">{{$msg}}</span>
    </div>
    @endif

    <div class="relative overflow-hidden bg-white">
  <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
    <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
      <div class="sm:max-w-lg">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Summer styles are finally here</h1>
        <p class="mt-4 text-xl text-gray-500">This year, our new summer collection will shelter you from the harsh elements of a world that doesn't care if you live or die.</p>
      </div>
      <div>
        <div class="mt-10">
          <!-- Decorative image grid -->
          <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
            <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
              <div class="flex items-center space-x-6 lg:space-x-8">
                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>
                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>
                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Shop Collection</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="">
<h1 class="font-semibold text-2xl p-6 mt-6">Total products : 1000</h1>

    <div class="flex flex-column items-center justify-center">
        <div>
        
        </div>
        <div class="cards relative m-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach ($items as $item)
            <div class="card bg-white rounded-lg shadow-2xl h-auto w-[300px] p-2">
                <img src="prod_images/{{$item->prod_image}}" alt="">
                <h1 class="font-semibold m-2 text-3xl">{{$item->prod_name}}</h1>
                <h1 class="font-semibold m-2">Brand : {{$item->prod_brand}}</h1>
                <p class="font-semibold m-2 text-gray-600">{{$item->prod_desc}}</p>
                <div class="stars flex w-28">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-orange-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
</svg>

<svg xmlns="http://www.w3.org/2000/svg" fill="none" class="text-orange-400" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
</svg>


<svg xmlns="http://www.w3.org/2000/svg" fill="none" class="text-orange-400"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
</svg>


<svg xmlns="http://www.w3.org/2000/svg" fill="none" class="text-orange-400" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
</svg>


<svg xmlns="http://www.w3.org/2000/svg" fill="none" class="text-orange-400" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
</svg>


                </div>
            </div>
            @endforeach
    
        </div>
    </div>
    </div> 

    <script>
        let toggler = document.querySelector('#toggle');
        let menu = document.querySelector('#tog_bg');
        toggler.addEventListener('click', () => {
        // Toggle the visibility of the menu by toggling the 'hidden' class
        menu.classList.toggle('left-[0%]');
        
    });
    </script>

</body>
</html>