@extends("template")

@section("title")
<hr>
Edit wisata
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&display=swap"
        rel="stylesheet"
        />
        <script
        src="https://kit.fontawesome.com/70c682a6d6.js"
        crossorigin="anonymous"
        ></script>
    </head>
    <body>
<form action="{{ url('edit') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $wisata->id }}">
    <div class="row mb-3">
        <div class="col">
            <label for="Name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name Place" id="Name" value="{{ $destinations->name }}">
        </div>
        <div class="col">
            <label for="Day Open" class="form-label">Day Open</label>
            <input type="text" name="day_open" class="form-control" placeholder="Day Open" id="Day Open" value="{{ $destinations->day_open }}">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="Location" class="form-label">Location Place</label>
            <input type="text"  name="location" class="form-control" placeholder="Location" id="Location" value="{{ $destinations->location }}">
        </div>
        <div class="col">
            <label for="Time Open" class="form-label">Time Open</label>
            <input type="text" name="time_open" class="form-control" placeholder="Time Open" id="Time Open" value="{{ $destinations->time_open }}">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="Details" class="form-label">Details</label>
            <textarea name="details" class="form-control" id="Details" rows="2"  placeholder="More Details">{{ $destinations->details }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <div class="form-check">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="price" id="paid" value="Paid" {{ ($destinations->price == "Paid") ? "checked" : ""}}>
                    <label class="form-check-label" for="paid">Paid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="price" id="free" value="Free" {{ ($destinations->price == "Free") ? "checked" : ""}}>
                    <label class="form-check-label" for="free">Free</label>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a class="btn btn-danger" href="{{ url ('wisata')}}">Cancel</a>
</form>
</body>
</html>
@endsection
