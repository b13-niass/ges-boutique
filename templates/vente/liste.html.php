<div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">


    <div class="grid grid-cols-12 gap-[25px]">
        <div class="col-span-12">
            <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                    <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                        Vente
                    </h1>
                    <div class="flex gap-[10px] flex-row items-center">
                        <div class="flex flex-col md:flex-row gap-[8px]">
                            <label for="name" class="inline-flex items-center mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Téléphone</label>
                            <div class="flex flex-col flex-1 md:flex-row">
                                <input type="text" id="name" class=" rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="Duran Clayton" required="" autocomplete="username">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-[8px]">
                            <label for="name" class="inline-flex items-center mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Date Début</label>
                            <div class="flex flex-col flex-1 md:flex-row">
                                <input type="date" id="singleDatepicker" class="border-regular border dark:border-box-dark-up rounded-6 h-[46px] flex items-center w-full text-[14px] px-[20px] outline-none text-body dark:text-subtitle-dark dark:bg-box-dark-up datepicker-input">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-[8px]">
                            <label for="name" class="inline-flex items-center mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Date Fin</label>
                            <div class="flex flex-col flex-1 md:flex-row">
                                <input type="date" id="singleDatepicker" class="border-regular border dark:border-box-dark-up rounded-6 h-[46px] flex items-center w-full text-[14px] px-[20px] outline-none text-body dark:text-subtitle-dark dark:bg-box-dark-up datepicker-input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-[25px]">

                    <div class="overflow-x-auto scrollbar">
                        <table class="min-w-full text-sm font-light text-start">
                            <thead class="font-medium">
                            <tr>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                    user</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                    email</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                    company</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                    position</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-end text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden rounded-e-[6px] capitalize">
                                    join date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="group">
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent  whitespace-nowrap">
                                    Kellie Marquot</td>
                                <td class="px-4 py-2.5 font-normal last:text-end lowercase text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent  whitespace-nowrap">
                                    john-keller@gmail.com</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent  whitespace-nowrap">
                                    ABC Corporation</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent  whitespace-nowrap">
                                    Senior Web Developer</td>
                                <td class="ps-4 pe-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[6px]  whitespace-nowrap">
                                    January 20, 2020</td>
                            </tr>
                            <tr class="group">
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    John Smith</td>
                                <td class="px-4 py-2.5 font-normal last:text-end lowercase text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    john.smith@example.com</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    XYZ Tech Solutions</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Software Engineer</td>
                                <td class="ps-4 pe-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[6px]">
                                    March 15, 2022</td>
                            </tr>
                            <tr class="group">
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Alice Johnson</td>
                                <td class="px-4 py-2.5 font-normal last:text-end lowercase text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    alice.johnson@example.com</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Marketing Innovators</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Marketing Manager</td>
                                <td class="ps-4 pe-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[6px]">
                                    July 5, 2021</td>
                            </tr>
                            <tr class="group">
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Robert Davis</td>
                                <td class="px-4 py-2.5 font-normal last:text-end lowercase text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    robert.davis@example.com</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Data Analytics Inc.</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Data Analyst</td>
                                <td class="ps-4 pe-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[6px]">
                                    November 10, 2019</td>
                            </tr>
                            <tr class="group">
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Emily Brown</td>
                                <td class="px-4 py-2.5 font-normal last:text-end lowercase text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    emily.brown@example.com</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Design Mastermind</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Junior Graphic Designer</td>
                                <td class="ps-4 pe-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[6px]">
                                    February 3, 2023</td>
                            </tr>
                            <tr class="group">
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Michael Lee</td>
                                <td class="px-4 py-2.5 font-normal last:text-end lowercase text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    michael.lee@example.com</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Projects R Us</td>
                                <td class="px-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    Project Manager</td>
                                <td class="ps-4 pe-4 py-2.5 font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[6px]">
                                    September 18, 2020</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="flex items-center md:justify-end pt-[40px]">
                            <nav aria-label="Page navigation example">
                                <ul class="flex items-center justify-center gap-2 list-style-none listItemActive">
                                    <li>
                                        <a class="relative flex justify-center items-center rounded bg-transparent h-[30px] w-[30px]  text-light transition-all duration-300 dark:text-white dark:hover:bg-box-dark-up dark:hover:text-white  border border-regular dark:border-box-dark-up  text-[13px] font-normal capitalize text-[rgb(64_64_64_/_var(--tw-text-opacity))] duration ease-in-out border-solid hover:bg-primary hover:text-white" href="#" aria-label="Previous">
                                            <i class="uil uil-angle-left text-[16px]"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="relative flex justify-center items-center border border-regular dark:border-box-dark-up rounded bg-white text-dark h-[30px] w-[30px] text-sm transition-all duration-300 hover:bg-primary hover:text-white dark:text-white dark:bg-box-dark-up dark:hover:text-white [&.active]:bg-primary [&.active]:text-white active" href="#">1</a>
                                    </li>
                                    <li aria-current="page">
                                        <a class="relative flex justify-center items-center border border-regular dark:border-box-dark-up rounded bg-white text-dark h-[30px] w-[30px] text-sm transition-all duration-300 hover:bg-primary hover:text-white dark:text-white dark:bg-box-dark-up dark:hover:text-white [&.active]:bg-primary [&.active]:text-white" href="#">2</a>
                                    </li>
                                    <li>
                                        <a class="relative flex justify-center items-center border border-regular dark:border-box-dark-up rounded  bg-white text-dark h-[30px] w-[30px] text-sm transition-all duration-300 hover:bg-primary hover:text-white dark:text-white dark:bg-box-dark-up dark:hover:text-white [&.active]:bg-primary [&.active]:text-white" href="#">3</a>
                                    </li>
                                    <li>
                                        <a class="relative flex justify-center items-center rounded bg-transparent h-[30px] w-[30px]  text-light transition-all duration-300 dark:text-white dark:hover:bg-box-dark-up dark:hover:text-white  border border-regular dark:border-box-dark-up text-[13px] font-normal capitalize text-[rgb(64_64_64_/_var(--tw-text-opacity))] duration ease-in-out border-solid hover:bg-primary hover:text-white cursor-pointer" href="#" aria-label="Next">
                                            <i class="uil uil-angle-right text-[16px]"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>