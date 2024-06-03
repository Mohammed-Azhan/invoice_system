<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


@if($message = Session::get('success'))
        <div class="bg-green-300 w-70 p-5">
        <span class="text-white-900 p-3">{{$message}}</span>
        </div>
    
    @endif  
<div class="relative mt-10 overflow-x-auto shadow-md sm:rounded-lg">
   
   <div class="items p-5">
      <h1 class="font-semibold text-green-600 text-5xl">All users</h1>
     
      <button class="btn bg-blue-300  text-white font-semibold w-16 mt-6">Back</button>
   </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                   #
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($keys as $key)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$key->id}}
                </th>
                <td class="px-6 py-4">
                    {{$key->username}}
                </td>
                <td class="px-6 py-4">
                    {{$key->desc}}
                </td>
                <td class="px-6 py-4">
                     <img src="images/{{$key->image}}" alt="" width="50">   <!--images are used on public path -->
                </td>
                <td class="px-6 py-4">
                    <a href="edits/{{$key->uuid}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="delete/{{$key->uuid}}" class="font-medium text-red-600 dark:text-red-500 ml-3 hover:underline">delete</a>
                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>


 
</body>
</html>