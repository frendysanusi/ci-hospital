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
                <Image alt="logo" src="/img/hospital_logo.png"  class="py-6 px-8 w-[90%]"/>
            </div>
            <div class="h-full flex-col font-poppins font-semibold md:static absolute  md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5 ">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw]">
                    <li>
                        <a class="hover:text-blue-700" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Visits</a>
                        <div class ="bg-black" class="h-8 w-12"></div>                        
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Profile</a>            
                    </li>
                    <li>
                        <button class="bg-[#005792] hover:bg-[#005792] text-white text-md font-semibold font-poppins py-1 px-8 rounded-lg ">Log Out</button>
                    </li>
                </ul>
                <div>
                </div>
            </div>
            
        </nav>
    </header>

    <div>
        <h1 class="text-3xl p-12 font-bold text-center text-[#005792]">Visit #4</h1>
        <div class="w-[90%] border-2 border-[#005792] rounded-lg m-auto mb-12 p-8 bg-[#D1F4FA]">
            <form action ="" class="">
                <div class="grid grid-cols-2">
                    <div class="my-2">
                        <label for="date" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Date</span>
                        <input type="date" placeholder="Enter your username" class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                    </div>
                    <div class="my-2">
                        <label for="time" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Time</span>
                        <input type="time" placeholder="Enter your username" class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                    </div>
                    <div class="my-2">
                        <label for="date" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Patient ID</span>
                        <select type="select" placeholder="Select ID..." class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="time" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Doctor ID</span>
                        <select type="select" placeholder="Select ID..." class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="date" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Patient Name</span>
                        <p class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">XXX
                        </p>
                    </div>
                    <div class="my-2">
                        <label for="time" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Doctor Name</span>
                        <p class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">XXX
                        </p>
                    </div>
                </div>
                <div class="my-4">
                    <label for="date" class="block bg-white w-auto"></label>
                    <span class=" flex font-semibold text-neutral-700 text-sm ">Complaint</span>
                    <p class="border-2 border-[#005792] px-4 flex w-[95%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">XXX
                    </p>
                </div>
                <div class="my-4">
                    <label for="time" class="block bg-white w-auto"></label>
                    <span class=" flex font-semibold text-neutral-700 text-sm ">Diagnosis</span>
                    <p class="border-2 border-[#005792] px-4 flex w-[95%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">XXX
                    </p>
                </div>
                <div class="my-4">
                    <label for="time" class="block bg-white w-auto"></label>
                    <span class=" flex font-semibold text-neutral-700 text-sm ">Prescription</span>
                    <select type="select" placeholder="Select ID..." class="border-2 border-[#005792] px-4 flex w-[95%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                    </select>
                </div>
                <div class="text-center mt-8">
                    <button class="flex m-auto items-center bg-[#005792] py-2 px-12 rounded-lg font-bold text-white text-center w-fit">Save</button>
                </div>
            </form>

            <!-- <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4">
                <img class="py-2 px-8" alt="icon" src="/img/new.png"/>
                <div class="ml-8 flex">
                    <h1 class="my-auto font-bold text-xl text-[#005792]">New Visit</h1>
                </div>
            </div>
            <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4"> -->
                
        </div>
    </div>


    <div class="FOOTER bg-[#005792] text-white rounded-t-lg border-12 p-8 pb-0">
        <div class="">
            <h1 class="text-3xl font-bold text-center">We Care About You</h1>
            <h2 class="text-xl text-center p-2">Manage All Your Hospital Needs!</h2>
            <div class="flex text-sm">
                <div class="block p-8">
                    <div class="h-8 w-2"><br/></div>
                    <h1 class="font-bold text-md">Contact Us</h1>
                    <p>ITB Ganesa, Labtek V</p>
                    <p>Jl. Ganesa No. 10, Kecamatan Coblong,<br/> Kota Bandung, 40132</p>
                </div>
                <div class="p-8 pt-12">
                    <ul class="gap-4">
                        <li class="flex py-1 gap-2">
                            <img alt="ig" src="/img/contacts/instagram.png"/>
                            <p>@tst.hospital</p>
                        </li>
                        <li class="flex py-1 gap-2">
                            <img alt="wa" src="/img/contacts/whatsapp.png"/>
                            <p>+62 111 1111 1111</p>
                        </li>
                        <li class="flex py-1 gap-2">
                            <img alt="email" src="/img/contacts/email.png"/>
                            <p>tst.hospital@gmail.com</p>
                        </li>
                        <li class="flex py-1 gap-2">
                            <img alt="website" src="/img/contacts/website.png"/>
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