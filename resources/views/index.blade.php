@extends('layouts.app')



@section('content')


<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center ">Motorcycle Blog </h1>
    <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">start Reading</a>
</div>

   <div class="container sm:grid grid-cols-2 gap-12 mx-auto py-10">
    
    <div class="mx-2 md:mx-0">
        
        <img class="sm:rounded-lg" src="https://images.unsplash.com/photo-1600705722908-bab1e61c0b4d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fG1vdG9yYmlrZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
     </div>
      <div class="flex flex-col items-left justify-center md-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">
            how to be an expert in 2023

        </h2>
        <p class="font-bold text-gray-600 text-xl pt-2 ">
            how to find a list of all programming Language here.
        </p>
        <p class="py-4 text-gray-500 text-sm leading-6 ">
            A motorcycle is a two-wheeled vehicle that is powered by an engine and is designed to be ridden by one or two people. Motorcycles come in a variety of styles and sizes, from small, lightweight models that are ideal for commuting or cruising, to large, powerful machines that are built for speed and performance.
        </p>
        <a href="/" class="bg-gray-700 text-gray-100 py-4 pc-5 rounded-lg font-bold uppercase text-lg place-self-start">Read more </a>
     </div>
 </div>

 <div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-2xl py-2">UX Design</div>
        <div class="font-bold text-1.5xl py-2">Programming </div>
        <div class="font-bold text-2xl py-2"> Graphic Design</div>
        <div class="font-bold text-2xl py-2">Front-End</div>

    </div>
 </div>

 <div class="container mx-auto text-center py-15">
     <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
     <p class="text-gray-400 leading-6 px-10">
        A motorcycle is a two-wheeled vehicle that is powered by an engine and is designed to be ridden by one or two people. Motorcycles come in a variety of styles and sizes, from small, lightweight models that are ideal for commuting or cruising, to large, powerful machines that are built for speed and performance. Riding a motorcycle requires skill, concentration, and a keen sense of awareness, as riders must navigate through traffic and react quickly to changing road conditions. Despite the risks involved, many people find that riding a motorcycle is a thrilling and liberating experience, and the sense of freedom and adventure that comes with it is hard to replicate with any other form of transportation.




     </p>
 </div>
 <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
  <div class="flex bg-yellow-700 text-gray-100 pt-10">
    <div class="block m-auto pt-4 pb-15 w-4/5">

                   <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a  href="/">Honda</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Ducati</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Suzuki</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Kawazaki</a></li>
                   </ul>



        <h3 class="text-l py-10 leading-6">
            In addition to being a mode of transportation, motorcycles have also become a popular hobby and sport for many enthusiasts. Motorcycle racing has a long history, and there are a variety of competitions and events held around the world that attract thousands of fans and riders. From the high-speed thrills of MotoGP to the off-road challenges of motocross, there is something for every type of rider. Many motorcycle riders also enjoy customizing and modifying their bikes, whether it's adding performance enhancements or personal touches to create a unique look. With its combination of practicality and excitement, it's no wonder that motorcycles have captured the imaginations of people around the globe.
        </h3>
        <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 front-bold uppercase text-l inline-block ">Read more</a>
    </div>
  </div>
   <div class="flex">
    <img class="object-cover" src="https://images.unsplash.com/photo-1590506995460-d0d9892b54da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fG1vdG9yYmlrZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
   </div>
 </div>



@endsection