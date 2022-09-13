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
            <h1><?= $response['title'] ?></h1>
            <p class="lead">Click on the download button to download the song.</p>
            <div class="modal-body p-5 pt-0">                    
                <div class="form-floating mb-3">
                    <div class="input-group">
                        <span class="input-group-text">Link</span>
                        <input type="text" class="form-control copyLink" id="copyLink" value="<?= $response['link'] ?>">
                        <button class="btn btn-primary copyLink" type="button" data-clipboard-action="copy" title="کپی" data-clipboard-target="#copyLink">Copy</button>                        
                    </div>
                </div>
                <a class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" href="<?= $response['link'] ?>">Download</a>
                <a href="<?= "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" class="text-muted">Download new song</a>
            </div>
        </main>
        <footer class="mt-auto text-white-50">
            <p>Developed by <a href="https://github.com/amirfallahii" class="text-white">Amir Fallah</a>, Source <a href="https://github.com/amirfallahii/RadioJavanDownloader" class="text-white">@github</a>.</p>
        </footer>
    </div>
</body>
<script src="assets/js/clipboard.min.js"></script>
<script>var clipboard = new ClipboardJS('.copyLink');</script>
</html>