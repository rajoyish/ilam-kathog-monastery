<section class="container mx-auto flex gap-16 flex-col items-center justify-center md:my-24 md:flex-row mb-16">
    <!--Left Col-->
    <div class="flex w-full flex-col items-start justify-center space-y-4 px-6 pt-12 pb-8 lg:w-1/2">
        <p class="text-amber-600">About Chief Lama & President</p>
        <h1 class="text-4xl font-bold leading-normal text-red-900">Vajra Master Ganesh Gurung (Sangye Yonten)</h1>
        <p class="mb-4 leading-normal">
            <p>Lama Ganesh Gurung, also known as Sangay Yhonten, hails from Sandakpur-4 in Mabu Ilam. He has
                dedicated approximately sixteen years of his life to the service and teaching at the Kathog Namnang
                Hoesal Chhyoling Monastery.</p>
            <p>His journey into Buddhist philosophy began in 1985, spanning six years of study at Boudha Arghau
                Sadan, situated in Ramghaat, Pokhara, Nepal.</p>
        </p>
        <a href="{{ route('about-chief-lama') }}"
            class="rounded border font-bold border-red-900 bg-transparent py-2 px-4 text-red-900 
            shadow hover:border-transparent hover:bg-red-900 hover:text-white hover:shadow-lg">
            Read More
        </a>
    </div>
    <!--Right Col-->
    <div class="w-96">
        <img class="rounded-full" src="{{ asset('images/vajra-master-ganesh-gurung-sangye-yonten.jpg') }}"
            alt="Vajra Master Ganesh Gurung (Sangye Yonten)" />
    </div>
</section>
