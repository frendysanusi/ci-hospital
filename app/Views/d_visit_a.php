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
        <h1 class="text-3xl p-12 font-bold text-center text-[#005792]">Visit #4</h1>
        <div class="w-[90%] border-2 border-[#005792] rounded-lg m-auto mb-12 p-8 bg-[#D1F4FA]">
            <form action="" class="">
                <div class="grid grid-cols-2">
                    <div class="my-2">
                        <label for="date" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Date</span>
                        <input type="date" placeholder="Enter your username"
                            class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                    </div>
                    <div class="my-2">
                        <label for="time" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Time</span>
                        <input type="time" placeholder="Enter your username"
                            class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                    </div>
                    <div class="my-2">
                        <label for="date" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Patient ID</span>
                        <select type="select" placeholder="Select ID..."
                            class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="time" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Doctor ID</span>
                        <select type="select" placeholder="Select ID..."
                            class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md">
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="date" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Patient Name</span>
                        <p
                            class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">
                            XXX
                        </p>
                    </div>
                    <div class="my-2">
                        <label for="time" class="block bg-white w-auto"></label>
                        <span class=" flex font-semibold text-neutral-700 text-sm ">Doctor Name</span>
                        <p
                            class="border-2 border-[#005792] px-4 flex w-[90%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">
                            XXX
                        </p>
                    </div>
                </div>
                <div class="my-4">
                    <label for="date" class="block bg-white w-auto"></label>
                    <span class=" flex font-semibold text-neutral-700 text-sm ">Complaint</span>
                    <input type="text" placeholder="Explain the complaints"
                        class="border-2 border-[#005792] px-4 flex w-[95%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">
                    </p>
                </div>
                <div class="my-4">
                    <label for="time" class="block bg-white w-auto"></label>
                    <span class=" flex font-semibold text-neutral-700 text-sm ">Diagnosis</span>
                    <input type="text" placeholder="Explain the diagnosis"
                        class="border-2 border-[#005792] px-4 flex w-[95%] text-xs text-start my-2 bg-neutral-100 py-2 rounded-md">
                    </p>
                </div>
                <div class="my-4">
                    <label for="time" class="block bg-white w-auto"></label>
                    <span class=" flex font-semibold text-neutral-700 text-sm ">Prescription</span>

                    <button onClick={} id="dropdownHelperButton" data-dropdown-toggle="dropdownHelper"
                        class=" bg-neutral-100 w-[95%] border-2 border-[#005792] hover:bg-[#003772] focus:ring-4  focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                        type="button">Prescription <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="dropdownHelper"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownHelperButton">
                            <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox-1" aria-describedby="helper-checkbox-text-1"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-[#005792] ">
                                    </div>
                                    <div class="ms-2 text-sm">
                                        <label for="helper-checkbox-1"
                                            class="font-medium text-gray-900 dark:text-gray-300">
                                            <div>Enable notifications</div>
                                            <p id="helper-checkbox-text-1"
                                                class="text-xs font-normal text-gray-500 dark:text-gray-300">Some
                                                helpful instruction goes over here.</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox-2" aria-describedby="helper-checkbox-text-2"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    </div>
                                    <div class="ms-2 text-sm">
                                        <label for="helper-checkbox-2"
                                            class="font-medium text-gray-900 dark:text-gray-300">
                                            <div>Enable 2FA auth</div>
                                            <p id="helper-checkbox-text-2"
                                                class="text-xs font-normal text-gray-500 dark:text-gray-300">Some
                                                helpful instruction goes over here.</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox-3" aria-describedby="helper-checkbox-text-3"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    </div>
                                    <div class="ms-2 text-sm">
                                        <label for="helper-checkbox-3"
                                            class="font-medium text-gray-900 dark:text-gray-300">
                                            <div>Subscribe newsletter</div>
                                            <p id="helper-checkbox-text-3"
                                                class="text-xs font-normal text-gray-500 dark:text-gray-300">Some
                                                helpful instruction goes over here.</p>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="text-center mt-8">
                    <button
                        class="flex m-auto items-center bg-[#005792] hover:bg-[#003772] py-2 px-12 rounded-lg font-bold text-white text-center w-fit">Save</button>
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


    <?php include('footer.php') ?>
</body>

</html>