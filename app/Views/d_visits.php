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
    <?php include('d_navbar.php') ?>


    <div>
        <h1 class="text-3xl p-12 font-bold text-center text-[#005792]">Manage Visits</h1>
        <div class="w-[90%] border-2 border-[#005792] rounded-lg m-auto mb-12 p-4 bg-[#D1F4FA]">
            <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4">
                <img class="py-2 px-8" alt="icon" src="/img/new.png"/>
                <div class="ml-8 flex">
                    <h1 class="my-auto font-bold text-xl text-[#005792]">New Visit</h1>
                </div>
            </div>
            <?php foreach ($visits as $visit): ?>
                <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4">
                    <img class="py-2 px-8" alt="icon" src="/img/visits.png"/>
                    <div class="ml-8">
                        <h1 class="font-bold text-xl text-[#005792]">Visit #<?php echo isset(visit['id']) ? visit['id'] : null; ?></h1>
                        <p><?php echo isset(visit['tanggal']) ? visit['tanggal'] : null; ?></p>
                        <p>Patient <?php echo isset(visit['id_pasien']) ? visit['id_pasien'] : null; ?></p>
                        <p><?php echo isset(pasien['nama']) ? pasien['nama'] : null; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4">
                <img class="py-2 px-8" alt="icon" src="/img/visits.png"/>
                <div class="ml-8">
                    <h1 class="font-bold text-xl text-[#005792]">Visit #4</h1>
                    <p>23/12/2023</p>
                    <p>09:32</p>
                    <p>Patient XX</p>
                    <p>Vania Salsabila</p>
                </div>
            </div>
            <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4">
                <img class="py-2 px-8" alt="icon" src="/img/visits.png"/>
                <div class="ml-8">
                    <h1 class="font-bold text-xl text-[#005792]">Visit #3</h1>
                    <p>23/12/2023</p>
                    <p>09:28</p>
                    <p>Patient XX</p>
                    <p>Lalala</p>
                </div>
            </div>
            <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4">
                <img class="py-2 px-8" alt="icon" src="/img/visits.png"/>
                <div class="ml-8">
                    <h1 class="font-bold text-xl text-[#005792]">Visit #2</h1>
                    <p>23/12/2023</p>
                    <p>09:10</p>
                    <p>Patient XX</p>
                    <p>Nadira</p>
                </div>
            </div>
            <div class="flex my-4 w-[98%] border-2 border-[#005792] rounded-lg m-auto bg-[#EDF9FC] p-4">
                <img class="py-2 px-8" alt="icon" src="/img/visits.png"/>
                <div class="ml-8">
                    <h1 class="font-bold text-xl text-[#005792]">Visit #1</h1>
                    <p>23/12/2023</p>
                    <p>09:00</p>
                    <p>Patient XX</p>
                    <p>Frendy</p>
                </div>
            </div> -->
        </div>
    </div>


    <?php include('footer.php') ?>

</body>
</html>