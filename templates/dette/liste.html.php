<div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">


    <div class="grid grid-cols-12 gap-[25px]">
        <div class="col-span-12">
            <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                    <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                        Dettes
                    </h1>
                    <div class="flex gap-[10px] flex-row items-center">
                        <div class="flex flex-col md:flex-row gap-[8px]">
                            <label for="telephone_client" class="inline-flex items-center mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Téléphone</label>
                            <div class="flex flex-col flex-1 md:flex-row">
                                <input type="text" name="telephone_client" id="telephone_client" class="filter-bar rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="Rechercher par téléphone" autocomplete="username">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-[8px]">
                            <label for="dateDebut_search" class="inline-flex items-center mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Date</label>
                            <div class="flex flex-col flex-1 md:flex-row">
                                <input type="date" name="date_dette" id="dateDebut_search" class="filter-bar border-regular border dark:border-box-dark-up rounded-6 h-[46px] flex items-center w-full text-[14px] px-[20px] outline-none text-body dark:text-subtitle-dark dark:bg-box-dark-up datepicker-input">
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
                                   Nom Client</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                    Telephone Client</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                    Date</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-start text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden capitalize">
                                    Montant Dette(Fcfa)</th>
                                <th scope="col" class="bg-[#f8f9fb] dark:bg-box-dark-up px-4 py-3.5 text-end text-body dark:text-title-dark text-[15px] font-medium border-none before:hidden rounded-e-[6px] capitalize">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody id="listeDette">
                            </tbody>
                        </table>
                        <div id="paginationBar" class="flex items-center md:justify-end pt-[40px]">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>