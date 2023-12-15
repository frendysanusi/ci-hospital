<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wVisitth=device-wVisitth, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body class="font-['Poppins'] bg-[#F5F5F5] h-screen">
    <?php include('a_navbar.php') ?>
    <div>
        <h1 class="text-3xl p-12 font-bold text-center text-[#005792]">Manage Patients</h1>
        <div class="m-auto mb-12 p-8 ">
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
                        <td>
                            <input type="number" placeholder="##" class="border-2 border-[#005792] px-4 flex m-auto text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </td>
                        <td>
                            <input type="text" placeholder="Patient Name" class="border-2 border-[#005792] px-4 flex m-auto text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </td>
                        <td>
                            <input type="date" placeholder="" class="border-2 border-[#005792] px-4 flex m-auto text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </td>
                        <td>
                            <input type="text" placeholder="Patient Address" class="border-2 border-[#005792] px-4 flex m-auto text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </td>
                        <td>
                            <button>
                                <div class="w-28 p-2 bg-[#005792] rounded-md text-white">Save</div>
                            </button>
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>02</td>
                        <td>Bapak Fadhil</td>
                        <td>12/12/2004</td>
                        <td>Jl. Lalala</td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>03</td>
                        <td>Vania Salsabila</td>
                        <td>12/12/2004</td>
                        <td>Jl. Bundang</td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>04</td>
                        <td>Frendy</td>
                        <td>12/12/2004</td>
                        <td>Jl. Bandung</td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr class="h-12">
                        <td>05</td>
                        <td>Nadira Arifandi</td>
                        <td>12/12/2004</td>
                        <td>Jl. Bandung</td>
                        <td>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
                
        </div>
    </div>


    <?php include('footer.php') ?>

</body>
</html>