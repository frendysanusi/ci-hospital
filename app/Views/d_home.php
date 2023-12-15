<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body class="font-['Poppins'] bg-[#F5F5F5] h-screen">
    <header class="bg-[#F5F5F5]">
        <nav class="flex justify-between items-center mr-44 bg-gradient-to-b from-[#D1F4FA] to-[#EDF9FC] w-full">
            <div class="flex-none">
                <Image alt="logo" src="/img/hospital_logo.png" class="py-6 px-8 w-[90%]" />
            </div>
            <div class="flex-col font-poppins font-semibold md:static absolute left-0 top-[-100%] md:w-auto w-full flex items-center px-5 ">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw]">
                    <li>
                        <a class="hover:text-blue-700" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Visits</a>
                        <div class="bg-black" class="h-8 w-12"></div>
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Profile</a>
                    </li>
                    <li>
                        <button
                            class="bg-[#005792] hover:bg-[#4004EC] text-white text-md font-semibold font-poppins py-1 px-8 rounded-lg ">Log
                            Out</button>
                    </li>
                </ul>
                <div>
                </div>
            </div>

        </nav>
    </header>

    <h1 class="text-3xl p-12 font-bold text-center text-[#005792]">Supplement Recommendations</h1>

    <div class="w-[40%]  mx-auto bg-[#EDF9FC] text-center p-12 border-2 border-[#005792] rounded-lg justify-center">
        <p class="text-center font-bold text-2xl text-[#005792]">Vitamin C</p>
        <div class="p-4">
            <img class="m-auto" alt="med" src="/img/medicine.png"/>
        </div>
        <span>Based on the TST apothecary database, many patients are experiencing a </span><span class="text-[#005792]">Vitamin C</span><span> deficiency.</span>
    </div>
    <div class="flex flex-row mx-auto mt-24">
        <div class=" h-2">
            <img alt="dekor" src="/img/landing_2.png">
        </div>
        <div class="w-1/2 text-right">
            <h1 class="font-poppins text-black text-xl w-full ml-12 mt-28 mb-3">Health is a priceless
                treasure, and we are committed to being your loyal partner on your journey to well-being. At TST
                Hospital, we present a selection of the best health products, as well as information that can help you
                make wise decisions for yourself and your family.</h1>
        </div>
    </div>

    <div class="FOOTER bg-[#005792] text-white rounded-t-lg w-full border-12 mt-48 p-8 pb-0">
        <div class="">
            <h1 class="text-3xl font-bold text-center">We Care About You</h1>
            <h2 class="text-xl text-center p-2">Find Any Medicine You Need!</h2>
            <div class="flex text-sm">
                <div class="block p-8">
                    <div class="h-8 w-2"><br /></div>
                    <h1 class="font-bold text-md">Contact Us</h1>
                    <p>ITB Ganesa, Labtek V</p>
                    <p>Jl. Ganesa No. 10, Kecamatan Coblong,<br /> Kota Bandung, 40132</p>
                </div>
                <div class="p-8 pt-12">
                    <ul class="gap-4">
                        <li class="flex py-1 gap-2">
                            <img alt="ig" src="/img/contacts/instagram.png" />
                            <p>@tst.hospital</p>
                        </li>
                        <li class="flex py-1 gap-2">
                            <img alt="wa" src="/img/contacts/whatsapp.png" />
                            <p>+62 111 1111 1111</p>
                        </li>
                        <li class="flex py-1 gap-2">
                            <img alt="email" src="/img/contacts/email.png" />
                            <p>tst.hospital@gmail.com</p>
                        </li>
                        <li class="flex py-1 gap-2">
                            <img alt="website" src="/img/contacts/website.png" />
                            <p>tst.hospital.id</p>
                        </li>
                    </ul>
                </div>
                <div class="w-full h-48 pt-40 align-bottom">
                    <p class="text-right align-text-bottom">© 2023 TST Hospital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>