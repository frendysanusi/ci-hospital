<?php include ('header.php') ?>

<body>
    <div class="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none bg-neutral-800/70">
        <div class="bg-white h-80 w-[330px] rounded-2xl shadow-2xl">
            <div class="flex justify-end">
                <button onclick="history.back()">
                    <img src="/img/close.png" alt="/img/close.png" class="mr-4 h-6 w-6 mt-3">
                </button>
            </div>
            <h1 class="text-[#005792] text-lg font-bold font-poppins text-center">Patient <?php echo isset($patient) ? "#" + $patient['nama'] : "NEW"; ?></h1>

            <form action="" method="post">
                <div class="flex">
                    <div>
                        <label for="nama" class=""></label>
                            <input type="text" name="nama" placeholder="Nama Pasien" class="mt-6 ml-8 border-2 border-gray-400 flex w-64 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins"
                            value=<?php echo isset($patient) ? $patient['nama'] : null; ?>>
                        <label for="tanggal_lahir" class=""></label>
                            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="-mt-1 ml-8 border-2 border-gray-400 flex w-64 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins"
                            value=<?php echo isset($patient) ? $patient['tanggal_lahir'] : null; ?>>
                        <label for="alamat" class=""></label>
                            <input type="text" name="alamat" placeholder="Alamat" class="-mt-1 ml-8 border-2 border-gray-400 flex w-64 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins"
                            value=<?php echo isset($patient) ? $patient['alamat'] : null; ?>>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="text-center m-auto mt-2 h-8 w-58 bg-[#005792] hover:bg-[#224b66] text-white text-sm font-medium font-poppins rounded-lg py-1 px-8">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
