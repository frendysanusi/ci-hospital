<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body class="font-['Poppins'] bg-[#F5F5F5] h-screen">
    <?php include('a_navbar.php') ?>

    <div class="flex text-center justify-center items-center mt-24">
        <div class=" mx-auto bg-[#005792] h-[300px] w-[640px] rounded-2xl shadow-2xl mb-24">
            <div class="">
                <h1 class="font-poppins font-bold text-2xl text-white mt-10">Recapitulations</h1>
                <h1 class="font-poppins font-normal text-sm text-white mt-5">Please select the month you want to recapitulate</h1>

            </div>

            <div class="justify-center mt-5">
                <select name="dropdown" id="transactionDropdown" type="select" placeholder="Select Month..." class="w-64 border-2 border-[#D1F4FA] px-4 text-xs placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-lg">
                    <option value="" data-name="">Select</option>
                    <option value="" data-name="">January</option>
                    <option value="" data-name="">February</option>
                    <option value="" data-name="">March</option>
                    <option value="" data-name="">April</option>
                    <option value="" data-name="">May</option>
                    <option value="" data-name="">June</option>
                    <option value="" data-name="">July</option>
                    <option value="" data-name="">August</option>
                    <option value="" data-name="">September</option>
                    <option value="" data-name="">October</option>
                    <option value="" data-name="">November</option>
                    <option value="" data-name="">December</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="w-64 text-center m-auto mt-2 h-8 bg-[#D1F4FA] hover:bg-[#b5daf2] text-black text-sm font-medium font-poppins rounded-lg py-1 px-8">Send Recapitulations</button>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>

