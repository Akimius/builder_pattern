<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>
<div class="container">
    <div class="container">
        <h1>Create PC of your dream</h1>
    </div>

    <hr>

    <form class="form-horizontal" role="form" action="/show.php" method="post">

        <div class="form-group">
            <label for="cpu" class="col-sm-2 control-label">Select CPU:</label>
            <div class="col-sm-2">
                <select class="form-control inputstl" id="cpuid" name="cpu">
                    <option selected>Intel</option>
                    <option>AMD</option>
                    <option>Athlon</option>
                    <option>Celeron</option>
                </select>
            </div>

            <label for="mb" class="col-sm-2 control-label">Select Mother-board:</label>
            <div class="col-sm-2">
                <select class="form-control inputstl" id="mbid" name="mboard">
                    <option selected>Asus</option>
                    <option>MSI</option>
                    <option>ASRock</option>
                </select>
            </div>

            <label for="ram" class="col-sm-2 control-label">Select RAM:</label>
            <div class="col-sm-2">
                <select class="form-control inputstl" id="ramid" name="ram">
                    <option selected>Samsung</option>
                    <option>Transcend</option>
                    <option>Kingston</option>
                    <option>Patriot</option>
                </select>
            </div>
        </div>

        <div class="form-group">

            <label for="hdd" class="col-sm-2 control-label">Select HDD:</label>
            <div class="col-sm-2">
                <select class="form-control inputstl" id="hddid" name="hdd">
                    <option selected>Toshiba</option>
                    <option>Hitachi</option>
                    <option>Lenovo</option>
                    <option>Apacer</option>
                    <option>Verbatim</option>
                </select>
            </div>

            <label for="vc" class="col-sm-2 control-label">Select Video card:</label>
            <div class="col-sm-2">
                <select class="form-control inputstl" id="vcid" name="vcard">
                    <option selected>Dell</option>
                    <option>HP</option>
                    <option>MSI</option>
                </select>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-lg btn-block btn-primary">Build computer</button>
            </div>
        </div>

    </form>

</div>
</body>
</html>

