@extends('modele')

@section('contents')


    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Nous Contacter</h2>
            <form action="{{route('nouscontacter')}}" method="post" >

                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                        <input type="text" name="Nom" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Votre Nom" required>
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                        <input type="text" name="Prenom" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Votre Prenom" required>
                    </div>



                        <div class="relative">

                            <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Email</label>
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">

                            </div>
                            <input type="email" name="Email" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nom@gmail.com">
                        </div>




                    <div class="sm:col-span-3">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Message</label>
                        <textarea id="id" name="Message" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Votre Message"></textarea>
                        <input type="checkbox" id="id" name="value" value="ok">
                        <label for="vehicle1"> Je consens à ce que ce site stocke les informations que j’ai envoyées afin de pouvoir répondre à ma demande.</label><br>


                    </div>
                    <button type="submit" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" style="background-color: #8F7AB5">
                        Envoyer
                    </button>
                </div>





            </form>


        </div>
    </section>


@endsection

