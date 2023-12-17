<?php include ('header.php') ?>

<body class="font-['Poppins'] bg-[#F5F5F5] h-screen">
    <header class="bg-[#F5F5F5]">
    <?php include('a_navbar.php') ?>


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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Manage</th>
                </thead>
                <!-- <div class="bg-[#005792] h-2 w-full"><br/></div> -->
                <tbody>
                    <?php foreach ($patients as $patient): ?>
                        <tr class="h-12">
                            <td><?php echo isset($patient['id']) ? $patient['id'] : null; ?></td>
                            <td><?php echo isset($patient['nama']) ? $patient['nama'] : null; ?></td>
                            <td><?php echo isset($patient['tanggal_lahir']) ? $patient['tanggal_lahir'] : null; ?></td>
                            <td><?php echo isset($patient['alamat']) ? $patient['alamat'] : null; ?></td>
                            <td>
                                <button>
                                    <img class="w-14 p-2" alt="edit" src="/img/edit.png" />
                                </button>
                                <button>
                                    <img class="w-14 p-2" alt="delete" src="/img/delete.png" />
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                
        </div>
    </div>


    <?php include('footer.php') ?>
</body>
</html>