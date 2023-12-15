<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body class="font-['Poppins'] bg-[#F5F5F5] h-screen">
    <?php include('a_navbar.php') ?>

    <div>
        <h1 class="text-3xl p-12 font-bold text-center text-[#005792]">Manage Transactions</h1>
        <div class="w-[90%] m-auto mb-12 p-8 ">
            <table class="w-full text-center gap-y-12">
                <thead class="text-[#005792] font-bold text-xl border-b-4 border-[#005792]">
                    <th class="py-4">ID</th>
                    <th class="py-4">Name</th>
                    <th class="py-4">Date of Birth</th>
                    <th class="py-4">Address</th>
                    <th class="py-4">Visit Paid</th>
                    <th class="py-4">Fully Paid</th>
                </thead>
                <!-- <div class="bg-[#005792] h-2 w-full"><br/></div> -->
                <tbody>
                    <tr class="">
                        <td class="py-4">01</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 240000</td>
                        <td class="py-4">
                            <input type="checkbox" id="visit" name="visit" value="visit" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                        <td class="py-4">
                            <input type="checkbox" id="full" name="full" value="full" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                    </tr>
                    <tr class="">
                        <td class="py-4">01</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 240000</td>
                        <td class="py-4">
                            <input type="checkbox" id="visit" name="visit" value="visit" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                        <td class="py-4">
                            <input type="checkbox" id="full" name="full" value="full" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                    </tr>
                    <tr class="">
                        <td class="py-4">01</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 240000</td>
                        <td class="py-4">
                            <input type="checkbox" id="visit" name="visit" value="visit" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                        <td class="py-4">
                            <input type="checkbox" id="full" name="full" value="full" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                    </tr>
                    <tr class="">
                        <td class="py-4">01</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 240000</td>
                        <td class="py-4">
                            <input type="checkbox" id="visit" name="visit" value="visit" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                        <td class="py-4">
                            <input type="checkbox" id="full" name="full" value="full" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                    </tr>
                    <tr class="">
                        <td class="py-4">01</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 240000</td>
                        <td class="py-4">
                            <input type="checkbox" id="visit" name="visit" value="visit" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                        <td class="py-4">
                            <input type="checkbox" id="full" name="full" value="full" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                    </tr>
                    <tr class="">
                        <td class="py-4">01</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 120000</td>
                        <td class="py-4">Rp 240000</td>
                        <td class="py-4">
                            <input type="checkbox" id="visit" name="visit" value="visit" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                        <td class="py-4">
                            <input type="checkbox" id="full" name="full" value="full" class="appearance-npne w-4 h-4 bg-[#005792] rounded-md " />
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="text-center mt-8">
            <button class="flex m-auto items-center bg-[#005792] py-2 px-12 rounded-lg font-bold text-white text-center w-fit">SAVE</button>
        </div>
        </div>
    </div>


    <?php include('footer.php') ?>
</body>
</html>

