<div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">
   <form id="formAddVente">
    <div class="grid grid-cols-12 gap-[15px] ">
        <div class="col-span-12 grid grid-cols-12 gap-[15px]">
            <div class="col-span-12">
                <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                    <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Informations Client
                        </h1>
                        <div class="flex flex-row items-center">
                            Client Anonyme
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="typeClient" id="typeClient" value="1" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/10 dark:peer-focus:ring-transparent rounded-full peer dark:bg-box-dark-up peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-[10px] p-[25px]">
                            <div class="content col-span-12 xl:col-span-2 pb-4">
                                <label for="telephone" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Téléphone</label>
                                    <input type="text" name="telephone" id="telephone" class="clientInfo rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="Telephone" autocomplete="username">
                                    <span class="error-message text-[0.8rem]">error</span>
                            </div>
                            <div class="content col-span-12 xl:col-span-2 pb-4">
                                <label for="nom" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Nom</label>
                                    <input type="text" name="nom" id="nom" class="clientInfo rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="Nom" autocomplete="username">
                                    <span class="error-message text-[0.8rem]">error</span>
                            </div>
                            <div class="content col-span-12 xl:col-span-2 pb-4">
                                <label for="prenom" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Prenom</label>
                                    <input type="text" name="prenom" id="prenom" class="clientInfo rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="prenom" autocomplete="username">
                                    <span class="error-message text-[0.8rem]">error</span>
                            </div>
                            <div class="content col-span-12 xl:col-span-3 pb-4">
                                <label for="email" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Email</label>
                                    <input type="text" name="email" id="email" class="clientInfo w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark  focus:ring-primary focus:border-primary" placeholder="example@gmail.com" autocomplete="username">
                                    <span class="error-message text-[0.8rem]">error</span>
                            </div>
                            <div class="content col-span-12 xl:col-span-3 pb-4">
                                <label for="adresse" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Adresse</label>
                                    <input type="text" name="adresse" id="adresse" class="clientInfo rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="Adresse" autocomplete="username">
                                    <span class="error-message text-[0.8rem]">error</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="basicApp" class="col-span-12">
            <div class="bg-white border rounded-md overflow-hidden border-regular dark:border-box-dark-up dark:bg-box-dark mb-[6px]">
                <h2 class="mb-0 flex flex-row items-center justify-between" id="basicOne">
                    <button class="group relative whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark flex w-full items-center border-b border-transparent bg-white px-5 py-[14px] text-body text-left font-normal text-[14px] transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-box-dark-up dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:border-regular dark:[&:not([data-te-collapse-collapsed])]:bg-box-dark-up dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:border-white/10" type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#basicCollapseOne" aria-expanded="false" aria-controls="basicCollapseOne">
                        <span class="me-[10px] text-[20px] h-5 w-5 shrink-0 rotate-[-180deg] text-current transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:text-[#212529] motion-reduce:transition-none dark:group-[[data-te-collapse-collapsed]]:text-white inline-flex items-center">
                           <i class="uil uil-angle-down"></i>
                        </span>
                        Ajouter article
                    </button>
                    <button id="addligneproduit" type="button" class="capitalize bg-primary hover:bg-primary-hbr border-solid border-1 border-primary text-white dark:text-title-dark text-[14px] font-semibold leading-[22px] inline-flex items-center justify-center rounded-[40px] px-[20px] h-[44px] [&>span]:inline-flex gap-[6px] transition duration-300 ease-in-out">
                        <i class="uil uil-plus-circle" style="font-size: 22px;"></i>
                        <span> Plus </span>
                    </button>
                </h2>
                <div id="basicCollapseOne" class="!visible" aria-labelledby="basicOne">
                    <div data-montant0="0" class="montantLigne p-[10px] bg-primary/10 border-solid border-b border-primary relative">
                        <h1 class="mb-0 inline-flex items-center py-[6px] overflow-hidden whitespace-nowrap text-ellipsis text-[15px] font-semibold text-dark dark:text-title-dark capitalize">
                            Article 1
                        </h1>
                        <div class="sm:grid sm:grid-cols-12 max-sm:flex max-sm:flex-col gap-[25px]">
                            <div class="content col-span-12 xl:col-span-2">
                                <label for="categorie-0" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Catégorie</label>
                                <select id="categorie-0" name="articles[0][categorie]" class="py-[11px] px-[20px] w-full capitalize text-body dark:text-white border-regular dark:border-box-dark-up border-1 rounded-6 dark:bg-box-dark-up outline-none mb-[20px]">
                                    <option value="" selected>Catégorie</option>
                                </select>
                                <span class="error-message text-[0.8rem]">error</span>
                            </div>
                            <div class="content col-span-12 xl:col-span-3">
                                <label for="article-0" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Article</label>
                                <select name="articles[0][article]" id="article-0" class="py-[11px] px-[20px] w-full capitalize text-body dark:text-white border-regular dark:border-box-dark-up border-1 rounded-6 dark:bg-box-dark-up outline-none mb-[20px]">
                                    <option value="" selected>Article</option>
                                </select>
                                <span class="error-message text-[0.8rem]">error</span>
                            </div>
                            <div class="content col-span-12 xl:col-span-2">
                                <label for="quantite-0" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Quantité</label>
                                <input type="text" name="articles[0][quantite]" id="quantite-0" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="quantité" autocomplete="off">
                            </div>
                            <div class="content col-span-12 xl:col-span-2">
                                <label for="unite-0" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Unité</label>
                                <select name="articles[0][unite]" id="unite-0" class="py-[11px] px-[20px] w-full capitalize text-body dark:text-white border-regular dark:border-box-dark-up border-1 rounded-6 dark:bg-box-dark-up outline-none mb-[20px]">
                                    <option value="" selected>Unité</option>
                                </select>
                            </div>
                            <div class="content col-span-12 xl:col-span-3">
                                <label for="prixUnitaire-0" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Prix Unitaire</label>
                                <input type="text" name="articles[0][prixUnitaire]" id="prixUnitaire-0" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="prix unitaire" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-6 grid grid-cols-12 gap-[10px]">
            <div class="col-span-12 xl:col-span-6">
                <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                    <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Dettes
                        </h1>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="detteIdCheck" id="detteIdCheck" value="1" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/10 dark:peer-focus:ring-transparent rounded-full peer dark:bg-box-dark-up peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                            </div>
                        </label>
                    </div>
                    <div class="grid grid-cols-12 gap-[10px] p-[10px]">
                        <div class="col-span-12 pb-4">
                            <div class="flex flex-col flex-1 md:flex-row">
                                <input type="text" name="dette" id="detteId" class=" rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="Dette" autocomplete="username">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                    <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Montant Total
                        </h1>
                    </div>
                    <div class="grid grid-cols-12 gap-[10px] p-[10px]">
                        <div class="col-span-12 pb-4">
                            <div class="flex flex-col flex-1 md:flex-row">
                                <input type="text" value="0" disabled id="montantTotal" class=" rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" placeholder="Nom" autocomplete="username">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 flex items-end xl:col-span-6">
            <button type="submit" class="bg-primary hover:bg-primary-hbr border-solid border-1
                 border-primary text-white dark:text-title-dark text-[14px] font-semibold
                 leading-[22px] inline-flex items-center justify-center rounded-[4px]
                 px-[20px]  h-[50px] shadow-btn transition duration-300 ease-in-out w-full">
                Enregistrer
            </button>
        </div>
    </div>
   </form>
</div>
