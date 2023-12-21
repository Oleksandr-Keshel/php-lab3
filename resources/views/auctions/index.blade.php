<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctions</title>
</head>
<body>
    <h1>All Auctions</h1>
    <table border="1">
        <tr>
            <th>Code </th>
            <th>Lot Name</th>
            <th>Start Date</th>
            <th>Finish Date</th>
            <th>Start Price</th>
            <th>Final Price</th>
            <th>Show btn</th>
            <th>Edit btn</th>
            <th>Delete btn</th>

        </tr>
        @foreach($auctions as $auction)
        <tr>
            <td>{{$auction->code}}</td>
            <td>{{$auction->lotName}}</td>
            <td>{{$auction->startDate}}</td>
            <td>{{$auction->finishDate}}</td>
            <td>{{$auction->startPrice}}</td>
            <td>{{$auction->finalPrice}}</td>
            <td>
                <a href="/auctions/{{$auction->code}}"><button>Show</button></a>
            </td>

            <td>
            @can('edit-auction', $auction)
                <a href="/auctions/{{$auction->code}}/edit"><button>Edit</button></a>
            @endcan
            </td>

            <td>
            @can('delete-auction', $auction)
                <form action="/auctions/{{ $auction->code}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
                </form>
            @endcan
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/auctions/create">
        <button>Create</button>
    </a>

    <p>{{session('success')}}</p>
</body>
</html>
