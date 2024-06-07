<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="/base.css" />
    <link rel="stylesheet" href="/styles.css" />
    <link rel="stylesheet" href="/ash_navigationbar/navstyles.css" />
    <link rel="stylesheet" href="/ash_navigationbar/navcomponent.css" />
    <link rel="stylesheet" href="/ash_navigationbar/navsupport.css" />
    <link rel="stylesheet" href="/ash_navigationbar/navmediacontrol.css" />
    <link rel="stylesheet" href="/color.css" />
    <link rel="stylesheet" href="/index.css" />
    <link rel="stylesheet" href="/indexmedia.css" />
    <link rel="stylesheet" href="/bg_animation.css" />
    <script src="/index.js"></script>
</head>

<body>

    <header>
        <div class="logo"><img src="/ash_image/logo.png" alt="Asushii" /></div>
        <div class="navbar">
            <div class="navlist">
                <button class="navbutton">
                    <img src="/ash_image/navicon.png" alt="" />
                </button>
                <div class="navcontent">
                    <a href="/index.html">Home</a>
                    <div class="navcomponentlist">
                        <a class="navcomponentbutton" href="/ash_component/ash_component.html">Component</a>
                        <div class="navcomponentcontent">
                            <a href="/ash_peripherals/ash_peripherals.html">Peripherals</a>
                            <a href="/ash_storage_ram_processor/ash_storage_ram_processor.html">Storage, Ram &
                                Processor</a>
                            <a href="/ash_display_audio/ash_display_audio.html">Display & Audio</a>
                            <a href="/ash_laptop_mobile/ash_laptop_mobile.html">Laptop & Mobile Devices</a>
                        </div>
                        <a href="/ash_about_us/ash_about_us.html">About Us</a>
                        <a href="/ash_e-catalog/ash_e-catalog.html">E-catalog</a>
                        <a href="/ash_partner/ash_partner.html">Certified Partner</a>
                        <a href="/ash_event/ash_event.html">Event</a>
                        <a href="/ash_membership/ash_membership.html">Membership</a>
                        <div class="navsupportlist">
                            <a class="navsupportbutton" href="/ash_support/ash_support.html">Support</a>
                            <div class="navsupportcontent">
                                <a href="/ash_support/ash_faq.html">FAQ</a>
                            </div>
                            <a href="/ash_contact_us/ash_contact_us.html">Contact Us</a>
                            <a href="/ash_login/ash_login.html">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="useraccount">
        <div class="user">
            <img src="/ash_image/guest.jpg" alt="UserImage" />
            <h2 id="username"></h2>
            <button id="signinorout"></button>
        </div>
    </div>

    <div class="pagebody">
        <div class="categories">
            <div class="title">
                <h1>Top Categories yea</h1>
            </div>
            <div class="products">
                <map name="product" id="product">
                    <area shape="default" href="/ash_component/ash_component.html" alt="" />
                </map>
                <img name="slide" src="/ash_image/home1.jpg" usemap="#product" alt="Home Image" />
            </div>
            <div class="showcase">
                <div class="videocase">
                    <h1>New Arrival</h1>
                    <video controls autoplay loop>
                        <source src="/ash_image/home.mp4" type="video/mp4" />
                        <p>Browser not support, please upgrade your browser to HTML5.</p>
                    </video>
                </div>
            </div>

            <h1 id="tableTitle">&#128198; Events Timetable</h1>
            <table class="events">
                <colgroup>
                    <col class="dateColumns" />
                    <col class="timeColumns" />
                    <col class="eventsColumns" />
                </colgroup>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Events</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th id="date"></th>
                        <td id="time"></td>
                        <td id="event"></td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="3">MORE EVENTS COMING SOON!</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="pagebody">
        <div class="categories">
            <div class="title">
                <h1>Recommend For You</h1>
            </div>
            <div class="items">
                <div class="item">
                    <img src="/ash_image/item1.jpg" alt="Item 1" usemap="#item1" />
                    <h4>
                        <a href="/ash_peripherals/ash_peripherals.html">Logitech G913 Lightspeed Wireless Gaming
                            Keyboard</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item2.jpg" alt="Item 2" usemap="#item2" />
                    <h4>
                        <a href="/ash_display_audio/ash_display_audio.html">Vinnfier TOROS 1 (Blue) Pro Gaming
                            Headset</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item3.jpg" alt="Item 3" usemap="#item3" />
                    <h4>
                        <a href="/ash_peripherals/ash_peripherals.html">ASUS ROG CHAKRAM X Wireless RGB Gaming Mouse</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item4.jpg" alt="Item 4" usemap="#item4" />
                    <h4>
                        <a href="/ash_peripherals/ash_peripherals.html">ASUS GAMING KEYBOARD ROG STRIX FLARE II - ROG NX
                            BLUE</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item5.jpg" alt="Item 5" usemap="#item5" />
                    <h4>
                        <a href="/ash_display_audio/ash_display_audio.html">Sony EX15LP(Black) In-Ear Earphones</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item6.jpg" alt="Item 6" usemap="#item6" />
                    <h4>
                        <a href="/ash_storage_ram_processor/ash_storage_ram_processor.html">Samsung 980 500GB M.2 2280
                            PCIE Gen3 x4 NVME SSD -
                            MZ-V8V500BW</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item7.jpg" alt="Item 7" usemap="#item7" />
                    <h4>
                        <a href="/ash_storage_ram_processor/ash_storage_ram_processor.html">Sandisk CZ600 32GB Cruzer
                            Glide Usb3.0 Flash Drive
                            (SDCZ600-032G-G35)</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item8.jpg" alt="Item 8" usemap="#item8" />
                    <h4>
                        <a href="/ash_display_audio/ash_display_audio.html">Acer KA220HQ 21.5" TN FHD Monitor
                            (HDMI,VGA)</a>
                    </h4>
                </div>
                <div class="item">
                    <img src="/ash_image/item9.jpg" alt="Item 9" usemap="#item9" />
                    <h4>
                        <a href="/ash_display_audio/ash_display_audio.html">VINNFIER HyperBar 100 BTR (Blue) Wireless
                            Bluetooth Sound bar
                            with FM Radio USB Slot SD Card Slot and LED Display</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <footer>
        ASUSHII COMPUTER ACCESSORIES SHOP &copy; 2022 All Rights Reserved
    </footer>

    <map name="item1">
        <area shape="default" href="ash_peripherals/ash_peripherals.html" alt="Peripherals" />
    </map>
    <map name="item2">
        <area shape="default" href="ash_display_audio/ash_display_audio.html" alt="Display & Audio" />
    </map>
    <map name="item3">
        <area shape="default" href="ash_peripherals/ash_peripherals.html" alt="Peripherals" />
    </map>
    <map name="item4">
        <area shape="default" href="ash_peripherals/ash_peripherals.html" alt="Peripherals" />
    </map>
    <map name="item5">
        <area shape="default" href="ash_display_audio/ash_display_audio.html" alt="Display & Audio" />
    </map>
    <map name="item6">
        <area shape="default" href="/ash_storage_ram_processor/ash_storage_ram_processor.html"
            alt="Storage, Ram, Processor" />
    </map>
    <map name="item7">
        <area shape="default" href="/ash_storage_ram_processor/ash_storage_ram_processor.html"
            alt="Storage, Ram, Processor" />
    </map>
    <map name="item8">
        <area shape="default" href="/ash_display_audio/ash_display_audio.html" alt="Display & Audio" />
    </map>
    <map name="item9">
        <area shape="default" href="/ash_display_audio/ash_display_audio.html" alt="Display & Audio" />
    </map>
</body>

</html>