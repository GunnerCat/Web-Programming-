<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'category_id'=>1,
                'name'=>"CPlayStation PS5 Console – God of War Ragnarök Bundle",
                'detail'=>"From Santa Monica Studio comes the sequel to the critically acclaimed God of War (2018). Join Kratos and Atreus on a mythic journey for answers before Ragnarök arrives.",
                'price'=>8760252,
                'photo'=>"Images//1.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Xbox Series S - Holiday Console",
                'detail'=>"Experience next-gen speed and performance at a great price.",
                'price'=>1564330,
                'photo'=>"images//2.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Meta Quest 2 — Advanced All-In-One Virtual Reality Headset — 128 GB",
                'detail'=>"For ages 13 and up only. *Offer valid with the purchase of a new Meta Quest 2 device (128GB or 256GB) (“Qualifying Product”) between August 1, 2022 12:01 AM PST– December 31, 2022 11:59 PM PST and while supplies last.",
                'price'=>6257323,
                'photo'=>"images//3.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Nintendo Switch – OLED Model w/ White Joy-Con",
                'detail'=>"Introducing the newest member of the Nintendo Switch family Play at home on the TV or on-the-go with a vibrant 7-inch OLED screen with the Nintendo Switch – OLED Model system. ",
                'price'=>5475157,
                'photo'=>"images//4.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Pokémon Scarlet - Nintendo Switch",
                'detail'=>"The newest chapters in the Pokémon series are coming to the Nintendo Switch system later this year. Catch, battle, and train Pokémon in the Paldea Region, a vast land filled with lakes, towering peaks, wastelands, small towns, and sprawling cities.",
                'price'=>938598,
                'photo'=>"images//5.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Just Dance 2023 Edition - Code in box, Nintendo Switch",
                'detail'=>"Welcome to a new era of dance with Just Dance® 2023 Edition! Now with online multiplayer**, personalization, 3D immersive worlds, and new songs and modes year-round, you can experience a never-ending dance party all year long*!",
                'price'=>469299,
                'photo'=>"images//6.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"God of War Ragnarök Launch Edition - PlayStation 5",
                'detail'=>"Embark on an epic and heartfelt journey as Kratos and Atreus struggle with holding on and letting go. Against a backdrop of Norse Realms torn asunder by the fury of the Aesir, they’ve been trying their utmost to undo the end times.",
                'price'=>1095031,
                'photo'=>"images//7.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Splatoon 3 - Nintendo Switch",
                'detail'=>"Ink up the Splatlands in the next Splatoon game!
                Enter the Splatlands, a sun-scorched desert inhabited by battle-hardened Inklings and Octolings. Splatsville, the city of chaos, is the adrenaline-fueled heart of this dusty wasteland.",
                'price'=>904183,
                'photo'=>"images//8.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"Kirby and the Forgotten Land - Nintendo Switch",
                'detail'=>"Join Kirby in an unforgettable journey through a mysterious world in a 3D platforming adventure",
                'price'=>859599,
                'photo'=>"images//9.jpg",
            ],
            [
                'category_id'=>1,
                'name'=>"PlayStation 5 Console",
                'detail'=>"The PS5 console unleashes new gaming possibilities that you never anticipated.",
                'price'=>7821653,
                'photo'=>"images//10.jpg",
            ],

            [
                'category_id'=>2,
                'name'=>"The Original Slinky Walking Spring Toy, Metal, Fidget Toys, Party Favors, Gifts, Toys for 5 Year Old Girls and Boys, by Just Play",
                'detail'=>"There’s only one Original Slinky Brand! Celebrate 75 years of wiggly-jiggly fun with Slinky! Generations of children and adults have loved playing with Slinky.",
                'price'=>47033,
                'photo'=>"images//11.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Taco Cat Goat Cheese Pizza",
                'detail'=>"This is the social card game that is going to change your game night forever!",
                'price'=>156778,
                'photo'=>"images//12.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Pokémon Assorted Cards, 50 Pieces",
                'detail'=>"YOUR BEST VALUE ON POKEMON CARDS: Look no further for the best deals on assorted Pokemon cards. LOTS OF RANDOM CARDS FROM ALL SERIES: You will receive a variety of regular and energy cards.",
                'price'=>156778,
                'photo'=>"images//13.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"LEGO Icons Orchid 10311 Building Set for Adults (608 Pieces)",
                'detail'=>"Enjoy a mindful building project and create a beautiful plant display for your home with this LEGO Orchid (10311) model building project for adults.",
                'price'=>235167,
                'photo'=>"images//14.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Hasbro Gaming CONNECT 4 - Classic four in a row - Board Games and Toys for Kids, boys, girls - Ages 6+",
                'detail'=>"Challenge a friend to disc dropping fun with the classic game of Connect 4! Drop your red or yellow discs in the grid and be the first to get 4 in a row to win. ",
                'price'=>156778,
                'photo'=>"images//15.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Hasbro Gaming: Jenga Classic Game",
                'detail'=>"It's the classic block stacking, stack crashing game of Jenga. How will you stack up against the law of gravity?",
                'price'=>156778,
                'photo'=>"images//16.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Hygge Games ...I should have known that! Trivia Game Green",
                'detail'=>"Is Starboard On The Left Or Right Side Of A Boat? How Do You Say “Japan” In Japanese? Is A Penguin A Bird? How Long Did.",
                'price'=>235167,
                'photo'=>"images//17.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"LEGO Icons Succulents 10309 Building Set for Adults (771 Pieces)",
                'detail'=>"Succulents are a popular way to introduce plants into the home and enhance your decor.",
                'price'=>235167,
                'photo'=>"images//18.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"LCR® Left Center Right™ Dice Game - Blue Tin",
                'detail'=>"Our life is full of things from chocolate to cereal, football to flowers and they all have logos. But could you name them if you saw them? Logo is the game that puts your consumer knowledge to the test!",
                'price'=>125422,
                'photo'=>"images//19.jpg",
            ],

            [
                'category_id'=>3,
                'name'=>"everydrop by Whirlpool Ice and Water Refrigerator Filter 1, EDR1RXD1, Single-Pack , Purple",
                'detail'=>"Certified to reduce 99% of lead as well as other potentially harmful contaminants, everydrop filters offer convenient, filtered water for you and your family.",
                'price'=>783890,
                'photo'=>"Images//20.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"BN-LINK BND-60/U47 Indoor Mini 24-Hour Mechanical Outlet Timer, 3-Prong, 2-Pack",
                'detail'=>"Save energy and automate your home's lights, fans, and appliances with the BN-LINK slim and easy-to-use 24 Hour Plug-in Mechanical Timer.",
                'price'=>172455,
                'photo'=>"Images//21.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"O'Keeffe's Working Hands Hand Cream for Extremely Dry, Cracked Hands, 3.4 Ounce Jar, (Pack 1)",
                'detail'=>"O’Keeffe’s Working Hands Hand Cream is a concentrated, unscented hand cream that heals, relieves and repairs extremely dry, cracked hands.",
                'price'=>141100,
                'photo'=>"Images//22.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Universal Socket Tools Gifts for Men Dad - Christmas Stocking Stuffers for Men Socket Set with Power Drill Adapter Super Grip Socket Cool Gadgets for Men Birthday Gifts for Men Women Husband (7-19mm)",
                'detail'=>"A men who works hard for home improvement deserves practical mens gifts.",
                'price'=>360589,
                'photo'=>"Images//23.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"GUPUP 100 FT LED Strip Lights,Rope Lights,Bluetooth APP Control,Color Changing Light Strip,Lights sync with Music,para cuarto,LED Lights for Bedroom...",
                'detail'=>"The app lets you experience different modes and colors, and the remote control makes it easier to use. The LED light strip makes your home become cozy and romantic.",
                'price'=>313556,
                'photo'=>"Images//24.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Kasa Smart Plug HS103P4, Smart Home Wi-Fi Outlet Works with Alexa, Echo, Google Home & IFTTT, No Hub Required, Remote Control, 15 Amp, UL Certified, 4-Pack, White",
                'detail'=>"The HS103 Kasa smart plug is the easiest way you can start controlling lamps, fans, humidifiers and other home electronic appliances.",
                'price'=>470334,
                'photo'=>"Images//25.jpg",
            ],

            [
                'category_id'=>4,
                'name'=>"Highlander (30th Anniversary Edition) [Blu-ray]",
                'detail'=>"Celebrate the 30th Anniversary of the original cult classic that inspired movie & TV franchises!",
                'price'=>203811,
                'photo'=>"images//26.jpg",
            ],
            [
                'category_id'=>4,
                'name'=>"Pearl (2022) [Blu-ray]",
                'detail'=>"Filmmaker Ti West returns with another chapter from the twisted world of X, in this astonishing follow-up to the year’s most acclaimed horror film.",
                'price'=>219489,
                'photo'=>"images//27.jpg",
            ],
            [
                'category_id'=>4,
                'name'=>"Lyle, Lyle, Crocodile [DVD]",
                'detail'=>"When the Primm family moves to New York City, their young son Josh struggles to adapt to his new school and new friends.",
                'price'=>282200,
                'photo'=>"images//28.jpg",
            ],
            [
                'category_id'=>4,
                'name'=>"Ticket to Paradise [DVD]",
                'detail'=>"Academy Award® winners George Clooney and Julia Roberts team up as exes who find themselves on a shared mission: to stop their lovestruck daughter from making the same mistake they once made.",
                'price'=>282200,
                'photo'=>"images//29.jpg",
            ],
            [
                'category_id'=>4,
                'name'=>"Clerks III",
                'detail'=>"Following a massive heart attack, Randal enlists his friends and fellow clerks Dante, Elias, Jay, and Silent Bob to make a movie immortalizing his life at the convenience store that started it all.",
                'price'=>250844,
                'photo'=>"images//30.jpg",
            ],

            [
                'category_id'=>5,
                'name'=>"SAMSUNG 980 PRO SSD 2TB PCIe NVMe Gen 4 Gaming M.2 Internal Solid State Hard Drive Memory Card, Maximum Speed, Thermal Control, MZ-V8P2T0B",
                'detail'=>"Unleash the power of the world’s No.1 memory flash drive brand since 2003. Samsung 980 PRO PCIe 4.0 NVMe SSD for next-level computing delivers twice the data transfer rate of PCIe 3.0, while maintaining compatibility with PCIe 3.0.",
                'price'=>3135560,
                'photo'=>"images//31.jpg",
            ],
            [
                'category_id'=>5,
                'name'=>"Logitech MK270 Wireless Keyboard And Mouse Combo For Windows, 2.4 GHz Wireless, Compact Mouse, 8 Multimedia And Shortcut Keys, For PC, Laptop - Black",
                'detail'=>"The stylish Logitech MK270 Wireless Keyboard and Mouse Combo is perfect for the home office or workplace.",
                'price'=>391945,
                'photo'=>"images//32.jpg",
            ],
            [
                'category_id'=>5,
                'name'=>"Seagate Portable 2TB External Hard Drive HDD — USB 3.0 for PC, Mac, PlayStation, & Xbox -1-Year Rescue Service (STGX2000400)",
                'detail'=>"Easily store and access 2TB of content on the go with the Seagate Portable Drive, a great laptop hard drive.",
                'price'=>972023,
                'photo'=>"images//33.jpg",
            ],
            [
                'category_id'=>5,
                'name'=>"Acer Aspire 5 A515-56-32DK Slim Laptop - 15.6 Full HD IPS Display - 11th Gen Intel i3-1115G4 Dual Core Processor - 4GB DDR4 - 128GB NVMe SSD - WiFi 6 - Amazon Alexa - Windows 11 Home in S mode.",
                'detail'=>"It's all about the innovation. Acer products are designed for your needs and accessibility with powerful features fit for your lifestyle.",
                'price'=>4233006,
                'photo'=>"images//34.jpg",
            ],
        ];
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
