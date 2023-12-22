<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>
<body class="body">
    <h1 class="main-heading">Create a new Auction</h1>
    <form action="/auctions" method="POST" class="w-full max-w-sm">
    @csrf
    <div class="flex items-center mb-2">
            <div class="w-1/3">
                <label for="lotName" class="block text-gray-500 font-bold text-right mb-1 pr-4">
                    Lot Name
                </label>
            </div>
            <div class="w-2/3">
                <input id="lotName" name="lotName" type="text" class="bg-gray-200 border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 focus:bg-white focus:border-purple-500 leading-tight">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/3">
                <label for="startDate" class="block text-gray-500 font-bold  text-right mb-1 pr-4">
                    Start Date
                </label>
            </div>
            <div class="w-2/3">
                <input id="startDate" name="startDate" type="text" class="bg-gray-200 border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 focus:bg-white focus:border-purple-500 leading-tight">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/3">
                <label for="finishDate" class="block text-gray-500 font-bold  text-right mb-1 pr-4">
                    Finish Date
                    </label>
            </div>
            <div class="w-2/3">
                <input id="finishDate" name="finishDate" type="text" class="bg-gray-200 border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 focus:bg-white focus:border-purple-500 leading-tight">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/3">
                <label for="startPrice" class="block text-gray-500 font-bold  text-right mb-1 pr-4">
                    Start Price
                </label>
            </div>
            <div class="w-2/3">
                <input id="startPrice" name="startPrice" type="text" class="bg-gray-200 border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 focus:bg-white focus:border-purple-500 leading-tight">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <div class="w-1/3">
                <label for="finalPrice" class="block text-gray-500 font-bold text-right mb-1 pr-4">
                    Final Price
                </label>
            </div>
            <div class="w-2/3">
                <input id="finalPrice" name="finalPrice" type="text" class="bg-gray-200 border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 focus:bg-white focus:border-purple-500 leading-tight">
            </div>
        </div>

        <input type="submit" value="Create" class="btn">
    </form>
    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </div>
    @endif
</body>
</html>
