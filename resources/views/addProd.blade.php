<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Add a new product</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="addProd" method="POST" enctype="multipart/form-data">
        @csrf
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Enter product name<label>
        <div class="mt-2">
          <input id="name" name="prodName" type="text" autocomplete="off" required class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="brand" class="block text-sm font-medium leading-6 text-gray-900">Product brand</label>
          
        </div>
        <div class="mt-2">
          <input id="brand" name="prodBrand" type="text" autocomplete="off" required class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="desc" class="block text-sm font-medium leading-6 text-gray-900">Enter product description</label>
          
        </div>
        <div class="mt-2">
          <textarea id="desc" name="prodDesc" type="textarea" autocomplete="off" required class="block p-2 w-full h-[100px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="desc" class="block text-sm font-medium leading-6 text-gray-900">Enter product ratings</label>
          
        </div>
        <div class="mt-2">
          <input id="ratings" name="prodRatings" type="number" autocomplete="off" required class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></input>
        </div>
      </div>
      
      <div>
        <div class="flex items-center justify-between">
          <label for="desc" class="block text-sm font-medium leading-6 text-gray-900">Select an image of product</label>
          
        </div>
        <div class="mt-2">
          <input id="img" name="prodImage" type="file" autocomplete="off" required class="block p-5 w-full h-[44px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
      
        <div class="mt-2">
            <input type="checkbox"><span class="font-semibold"> Are you sure want to add a product</span>
        </div>
      </div>

      
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add product</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      take me back to
      <a href="products" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">home page</a>
    </p>
  </div>
</div>




</body>
</html>