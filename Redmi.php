<?php
 include'connection/dbase.php';
 session_start();
 $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redmi page</title>
    <link rel="stylesheet" href="/Style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>

<?php include'navbar.php'?>

    <div class="container box-shadow" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-5">
                <img class="pt-5" src="spec view/xiaomi-redmi-note11-pro-1.jpg" alt="" height="230" width="200">
                <h5 class="pt-3">Redmi 11 Series</h5>
                <p class="pt-3"><b>Rating:</b>
              <span  class="star">  
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>   
            </span></p>
            <p><b>Price:</b> &#8358;165,000</p>
            <a href='shop.php' id="not" style="color: white; background-color: #003399;border: none;margin: 2px;text-decoration: none;padding:7px;border-radius: 15px;">Shop Now</a>
            </div>
          

            <div class="col-lg-7">
                <h2><b>SPECIFICATIONS</b></h2>
GSM / HSPA / LTE <br>
BODY	Dimensions	159.9 x 73.9 x 8.1 mm (6.30 x 2.91 x 0.32 in)
Weight	179 g (6.31 oz) <br>
SIM	Dual SIM (Nano-SIM, dual stand-by)
 	IP53, dust and splash protection <br>
DISPLAY	Type	AMOLED, 90Hz, 700 nits, 1000 nits (peak) <br>
Size	6.43 inches, 99.8 cm2 (~84.5% screen-to-body ratio) <br>
Resolution	1080 x 2400 pixels, 20:9 ratio (~409 ppi density) <br>
Protection	Corning Gorilla Glass 3 <br>
PLATFORM	OS	Android 11, MIUI 13 <br>
Chipset	Qualcomm SM6225 Snapdragon 680 4G (6 nm) <br>
CPU	Octa-core (4x2.4 GHz Kryo 265 Gold & 4x1.9 GHz Kryo 265 Silver) <br>
GPU	Adreno 610 <br>
MEMORY	Card slot	microSDXC (dedicated slot) <br>
Internal	64GB 4GB RAM, 64GB 6GB RAM, 128GB 4GB RAM, 128GB 6GB RAM
 <br>
MAIN CAMERA	Quad	50 MP, f/1.8, 26mm (wide), PDAF <br>
8 MP, f/2.2, 118˚ (ultrawide) <br>
2 MP, f/2.4, (macro) <br>
2 MP, f/2.4, (depth) <br>
Features	LED flash, HDR, panorama <br>
Video	1080p@30fps <br>
SELFIE CAMERA	Single	13 MP, f/2.4, (wide) <br>
Video	1080p@30fps <br>
SOUND	Loudspeaker	Yes, with stereo speakers <br>
3.5mm jack	Yes <br>
 	24-bit/192kHz audio <br>
COMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot <br>
Bluetooth	5.0, A2DP, LE <br>
GPS	Yes, with A-GPS, GLONASS, BDS, GALILEO <br>
NFC	Yes (market/region dependent) <br>
Infrared port	Yes <br>
Radio	Unspecified <br>
USB	USB Type-C 2.0, USB On-The-Go <br>
FEATURES	Sensors	Fingerprint (side-mounted), accelerometer, gyro, proximity, compass <br>
BATTERY	Type	Li-Po 5000 mAh, non-removable <br>
Charging	Fast charging 33W, 100% in 60 min (advertised) <br>
Power Delivery 3.0 <br>
Quick Charge 3+ <br>
MISC	Colors	Graphite Gray, Pearl White, Star Blue <br>
Models	2201117TG <br>
            </div>
        </div>

    </div>
   


    <?php include'news.php'?> 
    <?php include'footer.php'?> 



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
 
    <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>