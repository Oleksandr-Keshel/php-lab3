<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Auctions</title>
</head>
<body class="body">
    <h1 class="main-heading">All Auctions</h1>
    <table class="table-auto   mb-5">
        <thead class="bg-gray-300 border-2 border-gray-200">
            <tr>
                <th class="p-3 font-bold tracking-wide text-left">Code </th>
                <th class="p-3 font-bold tracking-wide text-left">Lot Name</th>
                <th class="p-3 font-bold tracking-wide text-left">Start Date</th>
                <th class="p-3 font-bold tracking-wide text-left">Finish Date</th>
                <th class="p-3 font-bold tracking-wide text-left">Start Price</th>
                <th class="p-3 font-bold tracking-wide text-left">Final Price</th>
                <th class="p-3 font-bold tracking-wide text-left">Show btn</th>
                <th class="p-3 font-bold tracking-wide text-left">Edit btn</th>
                <th class="p-3 font-bold tracking-wide text-left">Delete btn</th>
    
            </tr>
        </thead>
        <tbody class="bg-gray-100">
            @foreach($auctions as $auction)
            <tr class="border-2 border-gray-200">
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->code}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->lotName}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->startDate}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->finishDate}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->startPrice}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{$auction->finalPrice}}</td>
                <td class="p-3 text-sm border-2 border-gray-200">
                    <a href="/auctions/{{$auction->code}}" class="btn ">Show</a>
                </td>

                <td class="p-3 text-sm border-2 border-gray-200">
                @can('edit-auction', $auction)
                    <a href="/auctions/{{$auction->code}}/edit" class="btn ">Edit</a>
                @endcan
                </td>

                <td class="p-3 text-sm border-2 border-gray-200 ">
                @can('delete-auction', $auction)
                    <form action="/auctions/{{ $auction->code}}" method="POST" >
                        @csrf 
                        @method('DELETE') 
                        <div>
                            <input type="submit" class="btn" value="Delete" />
                        </div>
                    </form>
                @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/auctions/create" class="btn ">
        Create
    </a>

    <p>{{session('success')}}</p>
</body>
</html>
