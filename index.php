<?php
  if(isset($_POST['button'])){
    $imgUrl = $_POST['imgurl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $downloadImg = curl_exec($ch);
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment;filename="thumbnail.jpg"');
    echo $downloadImg;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download YouTube Video Thumbnail</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>

  <?php
  require('./navbar.php')
  ?>

    
<section class="bannerAd">
<script type="text/javascript">
	atOptions = {
		'key' : '19a741e154e8457bff522b07562cd868',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplaycontent.com/19a741e154e8457bff522b07562cd868/invoke.js"></scr' + 'ipt>');
</script>
</section>

    <div class="form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <header>Download Thumbnail</header>
            <div class="url-input">
                <span class="title">Paste Video URL:</span>
                <div class="field">
                    <input type="text" placeholder="https://www.youtube.com/watch?v=lqwdD2ivIbM" required>
                    <input class="hidden-input" type="hidden" name="imgurl">
                    <span class="bottom-line"></span>
                </div>
            </div>
            <div class="preview-area">
                <img class="thumbnail" src="" alt="">
                <i class="icon fas fa-cloud-download-alt"></i>
                <span>Paste Video URL to see preview</span>
            </div>
            <button class="download-btn" type="submit" name="button">Download Thumbnail</button>
        </form>
    </div>
    <section>
        <div class="">
            <div id="container-a9cbbe6b52a925032cfb7d550d9f0b03"></div>
        </div>
    </section>
    <section id="process">
        <div class="process">
            <div class="heading">
                <h1>How to Download YouTube Thumbnail within a second</h1>
                <p>Youtube Thumbnail is a tool for instantly downloading any YouTube video thumbnail.</p>
            </div>
            <div class="card">
                <div><i class="fa fa-plus fa-3x">
                    </i> <strong>
                        <p>Paste YouTube Video URL</p>
                    </strong>
                    <p>Just paste the YouTube video URL in the above input field.</p>
                </div>
                <div> <i class="fas fa-arrow-circle-right fa-3x"></i><strong>
                        <p>Auto-Generate</p>
                    </strong>
                    <p>The YouTube video thumbnail will be generated automatically as soon as you paste the URL.</p>
                </div>
                <div> <i class="fas fa-cloud-download-alt fa-3x"></i><strong>
                        <p>Hit the Download Thumbnail button</p>
                    </strong>
                    <p>Hit the Download button to store the YouTube thumbnail image on your device in .JPG format.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="article">
            <h3>
                About Thumbnail Downloader
            </h3>
            The video thumbnail that’s connected to the video on such platforms as YouTube is the face of the video and
            may play a important position in a user's selection to click on on it Very regularly you would possibly want
            the thumbnail of a video one at a time for quite a few uses: to make a college of various video thumbnails
            to your weblog put up, layout a cowl photo to your channel the usage of numerous video thumbnails, use it in
            a social media put up in case it’s now no longer generated automatically, and so on.

            In any case, it’s terrific to have a device that permits fast grabbing and downloading the thumbnail for
            your device. Our YouTube Thumbnail Downloader does precisely that. It permits you to generate the thumbnail
            of any YouTube video and down load it in only a few seconds . Let’s fast undergo the stairs you want to
            finish to get the thumbnail for your device.
        </div>
        <div class="article">
            <h3>
                Final Keyword
            </h3>
            Youtube video thumbnail down load This internet site could be very beneficial With nearly all stated and
            done, a very good thumbnail has a far-accomplishing effect at the films and additionally video marketing and
            marketing strategies. A precise on line marketing campaign relies upon on some aspects. A custom designed
            video thumbnail might be the maximum vital amongst them. So even as making plans due to the software program
            and doing the homework, consider generating a placing thumbnail to enhance the effectiveness of the video.

            With thumbnails incorporated, you may correctly sell the motion pictures. Get a great deal higher income and
            additionally create the complete exercise of your video marketing campaign seamless. There are many reassets
            concerning how you may deliver thumbnails to YouTube motion pictures on gadgets which are Android. Check out
            the ones property to replace the arsenal.

            With those couple of suggestions, you may purchase a triumphing video thumbnail to capitalize at the
            visibility of your logo and video. And so start developing the clips with extremely good custom thumbnails
            and additionally distribute your phrase throughout the market.

            Your thumbnail is a essential a part of entire optimization. You can get rating excessive in seek results,
            however if you do now no longer get clicks the benefits of the difficult paintings are sacrificed. Be
            certain you obtain them right. Create stunning thumbnails that get interest and get extra visitors to the
            video



        </div>
        <div class="article">
            By visiting here youtubethumbnaildownloader.com you may easily download thumbnails of youtube video
            in Full HD(1080), HD (720), SD, and additionally in small size. it is presently supported formats: YouTube
            (HD, HQ, 1080p, 4K) motion pictures
        </div>
    </section>
    <footer>
       <?php
       require('./footer.php')
       ?>
    </footer>
    <script>
        const urlField = document.querySelector(".field input"),
            previewArea = document.querySelector(".preview-area"),
            imgTag = previewArea.querySelector(".thumbnail"),
            hiddenInput = document.querySelector(".hidden-input"),
            button = document.querySelector(".download-btn");

        urlField.onkeyup = () => {
            let imgUrl = urlField.value;
            previewArea.classList.add("active");
            button.style.pointerEvents = "auto";
            if (imgUrl.indexOf("https://www.youtube.com/watch?v=") != -1) {
                let vidId = imgUrl.split('v=')[1].substring(0, 11);
                let ytImgUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
                imgTag.src = ytImgUrl;
            } else if (imgUrl.indexOf("https://youtu.be/") != -1) {
                let vidId = imgUrl.split('be/')[1].substring(0, 11);
                let ytImgUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
                imgTag.src = ytImgUrl;
            } else if (imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)) {
                imgTag.src = imgUrl;
            } else {
                imgTag.src = "";
                button.style.pointerEvents = "none";
                previewArea.classList.remove("active");
            }
            hiddenInput.value = imgTag.src;
        }
    </script>

    <script async="async" data-cfasync="false"
        src="//pl16807183.trustedcpmrevenue.com/a9cbbe6b52a925032cfb7d550d9f0b03/invoke.js"></script>
</body>

</html>