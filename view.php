<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Enter the link of Radio Javan music, podcast or video page in the box below and download its file.">
    <title>RadioJavan Downloader</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto"></header>
        <main class="px-3">
            <h1>RadioJavan Downloder</h1>
            <?php if(isset($error)):?>
                <p class="lead"><?= $error ?></p>
            <?php else: ?>
            <p class="lead">Enter the link of Radio Javan music, podcast or video page in the box below and download its file.</p>
            <?php endif; ?>
            <div class="modal-body p-5 pt-0">
                <form class="" action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="url" name="url" class="form-control rounded-3" id="floatingPassword"
                            placeholder="Link">
                        <label for="floatingPassword" style="color: #343a40 !important">RadioJavan URL</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="Search">Search</button>
                </form>
            </div>
        </main>
        <footer class="mt-auto text-white-50">
            <p>Developed by <a href="https://github.com/amirfallahii" class="text-white">Amir Fallah</a>, Source <a href="https://github.com/amirfallahii/RadioJavanDownloader" class="text-white">@github</a>.</p>
        </footer>
    </div>
</body>
</html>