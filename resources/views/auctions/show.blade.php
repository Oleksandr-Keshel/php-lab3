<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h2>Auction - {{$auction->code}}</h2>
    <table border="1">
        <tr>
            <th>Lot Name</th>
            <th>Start Date</th>
            <th>Finish Date</th>
            <th>Start Price</th>
            <th>Final Price</th>
        </tr>
        <tr>
            <td>{{$auction->lotName}}</td>
            <td>{{$auction->startDate}}</td>
            <td>{{$auction->finishDate}}</td>
            <td>{{$auction->startPrice}}</td>
            <td>{{$auction->finalPrice}}</td>
        </tr>
    </table>
</body>
</html>