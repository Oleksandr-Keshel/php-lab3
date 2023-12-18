<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Edit the auction</h1>
    <form action="/auctions/{{$auction->code}}" method="POST">
    @csrf
    @method('PUT')
        <label for="lotName">Lot Name</label>
        <input id="lotName" name="lotName" type="text" value="{{$auction->lotName}}">
        <br />

        <label for="startDate">Start Date</label>
        <input id="startDate" name="startDate" type="text" value="{{$auction->startDate}}">
        <br />

        <label for="finishDate">Finish Date</label>
        <input id="finishDate" name="finishDate" type="text" value="{{$auction->finishDate}}">
        <br />

        <label for="startPrice">Start Price</label>
        <input id="startPrice" name="startPrice" type="text" value="{{$auction->startPrice}}">
        <br />

        <label for="finalPrice">Final Price</label>
        <input id="finalPrice" name="finalPrice" type="text" value="{{$auction->finalPrice}}">
        <br />

        <input type="submit" value="Update">

    </form>
</body>
</html>