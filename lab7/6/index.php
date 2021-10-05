<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab 7</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        img {
            width: 100%;
            margin: 10px;
            border-radius: 15px;
        }

        div#masonry {
            column-count: 4;
            column-gap: 10px;
        }
    </style>

<body>
    <h1 class="container text-center my-5">Gallery</h1>
    <?php
    $photo = array(
        "https://files.worldwildlife.org/wwfcmsprod/images/HERO_Red_Panda_279141/hero_small/4ocbtgyvq7_XL_279141.jpg",
        "https://upload.wikimedia.org/wikipedia/commons/5/50/RedPandaFullBody.JPG",
        "https://static.dw.com/image/58133800_101.jpg",
        "https://s01.sgp1.cdn.digitaloceanspaces.com/article/163945-vfzruacvmc-1631451214.jpg",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1SpoSI7Np_8-i6xdtLGSPQK1BphxiHVnw5fnHm7N8Er3EmVX3ip9H4R5AZ0dNgZue8To&usqp=CAU",
        "https://static.dw.com/image/58133780_6.jpg",
        "https://www.sixsenses.com/media/6598/qing-cheng-mountain-china-010_panda-ark-a.jpg?anchor=center&mode=crop&rnd=132266539900000000",
        "https://www.selwo.es/sites/selwo.es/files/uploads/styles/adaptive/public/swa_panda_rojo_5.jpg?itok=5T-DRj4m",
        "https://www.globaltimes.cn/Portals/0/attachment/2021/2021-06-29/8dd3c2df-42de-4f84-9f52-7a50435de3a1.jpeg",
        "https://www.waza.org/wp-content/uploads/2019/02/redpanda-gsmp.jpg",
        "https://rangerrick.org/wp-content/uploads/2016/08/RR-Red-Panda-Aug-2016-Katherine-Feng.jpg",
        "https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2020/07/931/524/Red-Panda-COLUMBUS-ZOO-and-AQUARIUM.jpg?ve=1&tl=1",
        "https://pbs.twimg.com/profile_images/867625720964624384/Equg9aCu.jpg",
        "https://i.pinimg.com/originals/d7/bd/31/d7bd31071705bae471e960a11f00c767.jpg",
        "https://pbs.twimg.com/profile_images/867625720964624384/Equg9aCu.jpg",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3YOMAHhXoNwu_CKWPSiSLkXJEu-zQsz7LZmRoXANDa2BQ8i6nSQNAXUGOBHLcdBpfd98&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO1WDyzpzdh-rg_y8dh_0Ri71Yr-KYqCurKfUtdshg6a2BQklr64RswoYXTcTqFsLwSH4&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX4r0MLjkamYRTbjKcJ7gpOxDJHoZo6220hCl_wJ-jjAZLS2qN99zlhx9DryoF_wkWiPg&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGZ4TVnKNKazFFHMw2SAjyZsfxrQrN4cqm3uKedSe8MOuP-vgCYrJSs-wy-LYWBvfkm4E&usqp=CAU",
        "https://static.dw.com/image/58133780_6.jpg",
        "https://kubrick.htvapps.com/htv-prod-media.s3.amazonaws.com/images/lucas-1602805813.jpg?crop=1.00xw:1.00xh;0,0&resize=640:*"
    );
    ?>
    <div class="container" id="masonry">
        <?php
        for ($i = 0; $i < 21; $i++) {
            echo "<a href=\"$photo[$i]\">
        <img src=\"$photo[$i]\"</a><br>";
        }
        ?>
    </div>
</body>

</html>