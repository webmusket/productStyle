<template>
    <div>
        <heading class="mb-6">Customization Settings</heading>
        <tabs>
            <tab name="Jacket Customization">
                <div class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">FABRIC</h3>
                    </div>
                </div>

                <div v-for="style in this.styles">
                    <collapse :selected="false">
                        <div slot="collapse-header">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" class="table w-full"> 
                                    <tbody>
                                        <tr dusk="5-row">
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm8 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2V9a1 1 0 0 1 2 0v2z"/></svg>
                                                    </button> 
                                            </td>
                                            <td class="space">
                                                
                                            </td>
                                            <td>
                                                <p class="text-center"><img :src="path + style.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;"></p>
                                                
                                            </td>

                                            <td class="space">
                                                
                                            </td>
                                            <td class="dataname">
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{style.name}}</span></div>
                                            </td>
                                            <td class="space">
                                                
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    
                                                    <button @click="open(style.id,'style')" title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" :title="style.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                   
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div slot="collapse-body">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full"> 
                                    <tbody>

                                        <tr v-for="option in style.styleoptions" dusk="32-row">
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm11 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1z"/></svg>
                                                    </button> 
                                            </td>
                                            <td >
                                                <p class="text-center">
                                                    <img :src="path+ option.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;">
                                                </p>
                                            </td>
                                            <td>
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{option.name}}</span></div>
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    <button @click="open(option.id,'option')"  title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button  :title="option.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </collapse>
                </div>

                <div class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">STYLE</h3>
                    </div>
                </div>

                <div v-for="style in this.styles">
                    <collapse :selected="false">
                        <div slot="collapse-header">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" class="table w-full"> 
                                    <tbody>
                                        <tr dusk="5-row">
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm8 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2V9a1 1 0 0 1 2 0v2z"/></svg>
                                                    </button> 
                                            </td>
                                            <td class="space">
                                                
                                            </td>
                                            <td>
                                                <p class="text-center"><img :src="path + style.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;"></p>
                                                
                                            </td>

                                            <td class="space">
                                                
                                            </td>
                                            <td class="dataname">
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{style.name}}</span></div>
                                            </td>
                                            <td class="space">
                                                
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    
                                                    <button @click="open(style.id,'style')" title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" :title="style.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                   
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div slot="collapse-body">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full"> 
                                    <tbody>

                                        <tr v-for="option in style.styleoptions" dusk="32-row">
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm11 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1z"/></svg>
                                                    </button> 
                                            </td>
                                            <td >
                                                <p class="text-center">
                                                    <img :src="path+ option.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;">
                                                </p>
                                            </td>
                                            <td>
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{option.name}}</span></div>
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    <button @click="open(option.id,'option')"  title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button  :title="option.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </collapse>
                </div>

                <div class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">ACCENTS</h3>
                    </div>
                </div>

                <div v-for="style in this.styles">
                    <collapse :selected="false">
                        <div slot="collapse-header">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" class="table w-full"> 
                                    <tbody>
                                        <tr dusk="5-row">
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm8 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2V9a1 1 0 0 1 2 0v2z"/></svg>
                                                    </button> 
                                            </td>
                                            <td class="space">
                                                
                                            </td>
                                            <td>
                                                <p class="text-center"><img :src="path + style.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;"></p>
                                                
                                            </td>

                                            <td class="space">
                                                
                                            </td>
                                            <td class="dataname">
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{style.name}}</span></div>
                                            </td>
                                            <td class="space">
                                                
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    
                                                    <button @click="open(style.id,'style')" title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" :title="style.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                   
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div slot="collapse-body">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full"> 
                                    <tbody>

                                        <tr v-for="option in style.styleoptions" dusk="32-row">
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm11 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1z"/></svg>
                                                    </button> 
                                            </td>
                                            <td >
                                                <p class="text-center">
                                                    <img :src="path+ option.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;">
                                                </p>
                                            </td>
                                            <td>
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{option.name}}</span></div>
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    <button @click="open(option.id,'option')"  title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button  :title="option.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </collapse>
                </div>

            </tab>

            <tab name="Pant Customization">

            </tab>
            <tab name="Vest Customization">

            </tab>
            <tab name="Shirt Customization">

            </tab>
        </tabs>
        <hr>
<modal @childToParent="onClickChild" :identifier="identifier" :stylebyid="stylebyid" :isOpen="isOpen"></modal>


        


        

    </div>
</template>

<script>

import Collapse from 'vue-collapse'
 import Modal from './Modal.vue'

export default {
    components: {
        Collapse,
         Modal
    },
    data() {
        return {
            isOpen: false,
            styles: "",
            stylebyid: "",
            identifier: '',
            path: "http://127.0.0.1:8000/image/",
            
        }
    },
    mounted() {
        this.getStyles();
    },

    methods: {
        editStyle(){
            // this.$modal.show('style');
            alert()
        },

        open(id,identifier){
            this.identifier = identifier
            Nova.request().get("/nova-vendor/product-style/getstylebyid/"+id+'/'+identifier)
                  .then(response => {
                       this.stylebyid = response.data.style
                  })
                  .catch(() => this.error = true)
            this.isOpen = true
            event.stopImmediatePropagation();
        },
        onClickChild(){
            this.isOpen = false
        },
        getStyles(){
            Nova.request().get("/nova-vendor/product-style/getstyles")
                .then(response => {
                     this.styles = response.data.styles
                     this.isOpen = false

                })
                .catch(() => this.error = true)
        }

    }
}
</script>

<style>
/* Scoped Styles */
.collapse .collapse-header {
    padding: 0px 0px 0px 0px !important;
    
}
.dataname{
    width: 650px;
}



</style>
