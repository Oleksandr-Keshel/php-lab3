<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Create a new Auction</h1>
    <form action="/auctions" method="POST">
    @csrf
        <label for="lotName">Lot Name</label>
        <input id="lotName" name="lotName" type="text">
        <br />

        <label for="startDate">Start Date</label>
        <input id="startDate" name="startDate" type="text">
        <br />

        <label for="finishDate">Finish Date</label>
        <input id="finishDate" name="finishDate" type="text">
        <br />

        <label for="startPrice">Start Price</label>
        <input id="startPrice" name="startPrice" type="text">
        <br />

        <label for="finalPrice">Final Price</label>
        <input id="finalPrice" name="finalPrice" type="text">
        <br />

        <input type="submit" value="Create">
    </form>
</body>
</html>