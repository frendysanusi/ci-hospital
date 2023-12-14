<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wVisitth=device-wVisitth, initial-scale=1.0">
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
                        <a class="hover:text-blue-700" href="#">Patients</a>
                        <div class ="bg-black" class="h-8 w-12"></div>                        
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Transactions</a>
                        <div class ="bg-black" class="h-8 w-12"></div>                        
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Profile</a>            
                    </li>
                    <li>
                        <button class="bg-[#4200FF] hover:bg-[#4004EC] text-white text-md font-semibold font-poppins py-1 px-8 rounded-lg ">Log Out</button>
                    </li>
                </ul>
                <div>
                </div>
            </div>
            
        </nav>
    </header>

    <div>
        <h1 class="text-3xl pt-12  font-bold text-center text-[#005792]">Manage Patients</h1>
        <div class="w-[90%] m-auto mb-12 p-8 pt-0">
            <div class="justify-end flex mb-12">
                <div class="m-4 flex border-2 align-middle border-[#005792] text-[#005792] px-8 py-2 rounded-lg align-items-center">
                    <img class="px-2 align-middle w-12" alt="addpatients" src="/img/add_patient.png" />
                    <div class="flex items-center">
                    <p class="font-bold align-middle">Add Patient</p>
                    </div>
                </div>
            </div>
            <table class="w-full text-center">
                <thead class="text-[#005792] font-bold text-xl border-b-4 border-[#005792]">
                    <th>Visit ID</th>
                    <th>Visit Fee</th>
                    <th>Prescription Fee</th>
                    <th>Total Fee</th>
                    <th>Manage</th>
                </thead>
                <!-- <div class="bg-[#005792] h-2 w-full"><br/></div> -->
                <tbody>
                    <tr class="h-12">
                        <td>01</td>
                        <td>Vania Salsabila</td>
                        <td>12/12/2004</td>
                        <td>Jl. Cimahi</td>
                        <td>
                            <button>
                                <img class="w-14 p-2" alt="edit" src="img/edit.png" />
                            </button>
                            <button>
                                <img class="w-14 p-2" alt="delete" src="img/delete.png" />
                            </button>
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>02</td>
                        <td>Bapak Fadhil</td>
                        <td>12/12/2004</td>
                        <td>Jl. Lalala</td>
                        <td>
                            <button>
                                <img class="w-14 p-2" alt="edit" src="img/edit.png" />
                            </button>
                            <button>
                                <img class="w-14 p-2" alt="delete" src="img/delete.png" />
                            </button>
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>03</td>
                        <td>Vania Salsabila</td>
                        <td>12/12/2004</td>
                        <td>Jl. Bundang</td>
                        <td>
                            <button>
                                <img class="w-14 p-2" alt="edit" src="img/edit.png" />
                            </button>
                            <button>
                                <img class="w-14 p-2" alt="delete" src="img/delete.png" />
                            </button>
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>04</td>
                        <td>Frendy</td>
                        <td>12/12/2004</td>
                        <td>Jl. Bandung</td>
                        <td>
                            <button>
                                <img class="w-14 p-2" alt="edit" src="img/edit.png" />
                            </button>
                            <button>
                                <img class="w-14 p-2" alt="delete" src="img/delete.png" />
                            </button>
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>05</td>
                        <td>Nadira Arifandi</td>
                        <td>12/12/2004</td>
                        <td>Jl. Bandung</td>
                        <td>
                            <button>
                                <img class="w-14 p-2" alt="edit" src="img/edit.png" />
                            </button>
                            <button>
                                <img class="w-14 p-2" alt="delete" src="img/delete.png" />
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
                
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
                            <p>tst.hospital.Visit</p>
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