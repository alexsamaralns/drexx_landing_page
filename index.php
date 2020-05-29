<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php require_once 'includes/head.php'; ?>

</head>
<body>
    
    <?php require_once 'includes/header.php'; ?>

    <section class="img-carosel">

        <!-- 	INPUT FOR BUTTON SELECT SLIDE -->
        <!-- <input type="radio" name="next" id="slide1"> -->
        <!-- <input type="radio" name="next" id="slide2"> -->
        <!-- <input type="radio" name="next" id="slide3"> -->
        <!-- <input type="radio" name="next" id="slide4"> -->

        <!-- 	INPUT FOR BUTTON STOP&PLAY -->
        <input type="radio" name="sto" id="play" checked>
        <input type="radio" name="sto" id="stop">

        <!-- CONTAINER -->
        <div class="cont">

            <!-- BUTTON PLAY&STOP -->
            <!-- <label for="play" class="butPlay" onclick=""></label> -->
            <!-- <label for="stop" class="butStop" onclick=""></label> -->

            <!-- IMAGE -->
            <div class="image">
                <img src="http://s017.radikal.ru/i432/1310/37/f331c96eef02.jpg" class="oneP" alt="Flash">
                <img src="http://s004.radikal.ru/i208/1310/09/7a8e37a9e719.jpg" class="twoP" alt="Superman">
                <img src="http://s020.radikal.ru/i713/1310/5f/a15fcdeb8fe8.jpg" class="threeP" alt="Team">
                <img src="http://s019.radikal.ru/i639/1310/02/1e3d78802280.jpg" class="fourP" alt="Joker">
            </div>

            <!-- ANIMATION LINE -->
            <!-- <div class="line"></div> --> 

            <!-- BOTTOM LINE -->
            <!-- <div class="but"> -->
                <!-- <label for="slide1" class="select1" onclick=""></label> -->
                <!-- <label for="slide2" class="select2" onclick=""></label> -->
                <!-- <label for="slide3" class="select3" onclick=""></label> -->
                <!-- <label for="slide4" class="select4" onclick=""></label> -->
                <!-- <div class="tooltip"></div> -->
            <!-- </div> -->

        </div>     
                       
    </section>

    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/script.php'; ?>
</body>
</html>