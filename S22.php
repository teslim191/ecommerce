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
    <title>Samsung page</title>
    <link rel="stylesheet" href="/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
</head>
<body>

<?php include'navbar.php' ?>  

    <div class="container box-shadow" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-5">
                <img class="pt-5" src="spec view/samsung-galaxy-s22-ultra-5g-2.jpg" alt="" height="230" width="200">
                <h5 class="pt-3">Samsung S22 Ultra</h5>
                <p class="pt-3"><b>Rating:</b>
              <span  class="star">  
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>   
            </span></p>
            <p><b>Price:</b> &#8358;800,000</p>
            <a href='shop.php' id="not" style="color: white; background-color: #003399;border: none;margin: 2px;text-decoration: none;padding:7px;border-radius: 15px;">Shop Now</a>
            </div>
          

            <div class="col-lg-7">
                <h2><b>SPECIFICATIONS</b></h2>
                BODY	Dimensions	163.3 x 77.9 x 8.9 mm (6.43 x 3.07 x 0.35 in)n <br>
Weight	228 g / 229 g (mmWave) (8.04 oz)n <br>
Build	Glass front (Gorilla Glass Victus+), glass back (Gorilla Glass Victus+), aluminum framen <br>
SIM	Single SIM (Nano-SIM) or Dual SIM (2 Nano-SIMs + eSIM, dual stand-by)n <br>
 	IP68 dust/water resistant (up to 1.5m for 30 mins)n <br>
Armour aluminum frame with tougher drop and scratch resistance (advertised)n <br>
Stylus, 2.8ms latency (Bluetooth integration, accelerometer, gyro)n <br>
DISPLAY	Type	Dynamic AMOLED 2X, 120Hz, HDR10+, 1750 nits (peak)n <br>
Size	6.8 inches, 114.7 cm2 (~90.2% screen-to-body ratio)n <br>
Resolution	1440 x 3088 pixels (~500 ppi density)n <br>
Protection	Corning Gorilla Glass Victus+n <br>
 	Always-on displayn <br>
PLATFORM	OS	Android 12, One UI 4.1n <br>
Chipset	Exynos 2200 (4 nm) - Europen <br>
Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm) - ROWn <br>
CPU	Octa-core (1x2.8 GHz Cortex-X2 & 3x2.50 GHz Cortex-A710 & 4x1.8 GHz Cortex-A510) - Europen <br>
Octa-core (1x3.00 GHz Cortex-X2 & 3x2.40 GHz Cortex-A710 & 4x1.70 GHz Cortex-A510) - ROWn <br>
GPU	Xclipse 920 - Europen <br>
Adreno 730 - ROWn <br>
MEMORY	Card slot	Non <br>
Internal	128GB 8GB RAM, 256GB 12GB RAM, 512GB 12GB RAM, 1TB 12GB RAMn <br>
 	UFS 3.1n <br>
MAIN CAMERA	Quad	108 MP, f/1.8, 23mm (wide), 1/1.33", 0.8µm, PDAF, Laser AF, OISn <br>
10 MP, f/4.9, 230mm (periscope telephoto), 1/3.52", 1.12µm, dual pixel PDAF, OIS, 10x optical zoomn <br>
10 MP, f/2.4, 70mm (telephoto), 1/3.52", 1.12µm, dual pixel PDAF, OIS, 3x optical zoomn <br>
12 MP, f/2.2, 13mm, 120˚ (ultrawide), 1/2.55", 1.4µm, dual pixel PDAF, Super Steady videon <br>
Features	LED flash, auto-HDR, panoraman <br>
Video	8K@24fps, 4K@30/60fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, stereo sound rec., gyro-EISn <br>
SELFIE CAMERA	Single	40 MP, f/2.2, 26mm (wide), 1/2.82", 0.7µm, PDAFn <br>
Features	Dual video call, Auto-HDRn <br>
Video	4K@30/60fps, 1080p@30fpsn <br>
SOUND	Loudspeaker	Yes, with stereo speakersn <br>
3.5mm jack	Non <br>
 	32-bit/384kHz audion <br>
Tuned by AKGn <br>
COMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac/6e, dual-band, Wi-Fi Direct, hotspotn <br>
Bluetooth	5.2, A2DP, LEn <br>
GPS	Yes, with A-GPS, GLONASS, BDS, GALILEOn <br>
NFC	Yesn <br>
Radio	Non <br>
USB	USB Type-C 3.2, USB On-The-Gon <br>
FEATURES	Sensors	Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometern <br>
 	Samsung DeX, Samsung Wireless DeX (desktop experience support)n <br>
Bixby natural language commands and dictationn <br>
Samsung Pay (Visa, MasterCard certified)n <br>
Ultra Wideband (UWB) supportn <br>
BATTERY	Type	Li-Ion 5000 mAh, non-removablen <br>
Charging	Fast charging 45Wn <br>
USB Power Delivery 3.0n <br>
Fast Qi/PMA wireless charging 15Wn <br>
Reverse wireless charging 4.5Wn <br>
MISC	Colors	Phantom Black, White, Burgundy, Green, Graphite, Red, Sky Bluen <br>
Models	SM-S908B, SM-S908B/DS, SM-S908U, SM-S908U1, SM-S908W, SM-S908N, SM-S9080, SM-908E, SM-S908E/DSn <br>
SAR	1.18 W/kg (head)     0.98 W/kg (body)    n <br>
SAR EU	1.05 W/kg (head)     1.58 W/kg (body)    n <br>
TESTS	Performance	AnTuTu: 968359 (v9)n <br>
GeekBench: 3657 (v5.1)n <br>
GFXBench: 37fps (ES 3.1 onscreen)n <br>
Display	Contrast ratio: Infinite (nominal)n <br>
Camera	Photo / Videon <br>
Loudspeaker	-27.3 LUFS (Good)n <br>
Battery life	n <br>
Endurance rating 108hn <br>
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

