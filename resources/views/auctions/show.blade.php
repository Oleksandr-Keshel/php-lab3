<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>
<body class="body">
    <h2 class="main-heading">Auction - {{$auction->code}}</h2>
    <table class="table-auto mb-5">
        <thead class="bg-gray-300 border-2 border-gray-200">
            <tr>
                <th class="p-3 font-bold tracking-wide text-left">Lot Name</th>
                <th class="p-3 font-bold tracking-wide text-left">Start Date</th>
                <th class="p-3 font-bold tracking-wide text-left">Finish Date</th>
                <th class="p-3 font-bold tracking-wide text-left">Start Price</th>
                <th class="p-3 font-bold tracking-wide text-left">Final Price</th>
            </tr>
        </thead>
        <tbody class="bg-gray-100">
            <tr class="border-2 border-gray-200">
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->lotName}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->startDate}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->finishDate}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->startPrice}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->finalPrice}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
