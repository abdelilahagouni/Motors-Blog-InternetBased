@extends('layouts.app')



@section('content')

@if(session()->has('message'))


<div class="bg-red-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-800 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Deleted</span>
      <span class="font-semibold mr-2 text-left flex-auto">
        {{session()->get('message')}}

      </span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
  @endif
<div class="container  m-auto text-center pt-15 pb-5 ">
    <h1 class="text-6xl font-bold">All Posts</h1>
 </div>
@If(Auth::check())
<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    <a href="/blog/create" class="bg-green-700 text-gray-100 py-4 pc-5 rounded-lg font-bold uppercase text-lg place-self-start">Add an Atricle </a>
    @endif
</div>



@foreach ($posts as $post)
    
    <div class="container  sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
        <div class="flex">
            <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
                {{$post->title}}
            </h2>
            <span>
                by: <span class="text-gray-500 italic"> {{$post->user->name}}</span>
                on: <span class="text-gray-500 italic"> {{date('d-m-Y',strtotime($post->updated_at))}}</span>

                <p class="text-l text-gray-700 py-8 leading-6  ">
                    {{$post->description}}

                </p>
                <a href="/blog/{{$post->slug}}" class="bg-gray-700 text-gray-100 py-4 pc-5 rounded-lg font-bold uppercase text-lg place-self-start">Read more </a>
    
            </span>
        </div>
      </div>
@endforeach

  
 
  <div class="container  sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300 ">
    <div class="flex">
        <img  src="https://picsum.photos/id/239/960/620" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
            how to create a post
        </h2>
        <span>
            by: <span class="text-gray-500 italic"> abdelilah</span>
            <p class="text-l text-gray-700 py-8 leading-6  ">
                Tailwind CSS is a utility-first CSS framework that allows developers to easily and quickly create responsive, custom-designed websites. It is a popular choice among web developers due to its flexibility and ease of use. However, installing Tailwind CSS can be a little tricky, especially when using it with Laravel.

If you're a Laravel developer, you may have encountered installation issues with Tailwind CSS when working with Laravel 10, 9, or 8. In this blog, we'll take a look at how to install Tailwind CSS with Laravel and some of the common issues you may encounter.

Installing Tailwind CSS with Laravel 10

The latest version of Laravel, version 10, has made it easier to install Tailwind CSS by including it as a default package. If you're using Laravel 10, you can simply run the following command to install Tailwind CSS:

Copy code
npm install
This command will install Tailwind CSS and all of its dependencies. Once the installation is complete, you can start using Tailwind CSS in your Laravel 10 project.

Installing Tailwind CSS with Laravel 9 and 8

If you're using Laravel 9 or 8, you'll need to install Tailwind CSS manually. Here's how:

Step 1: Install Node.js

First, you need to install Node.js on your computer. Node.js is a JavaScript runtime that allows you to run JavaScript on the server-side. You can download Node.js from the official website: https://nodejs.org/en/download/

Step 2: Install Tailwind CSS

Next, you need to install Tailwind CSS using npm. Open your terminal and run the following command:

Copy code
npm install tailwindcss
Step 3: Create Tailwind CSS Configuration File

Once you have installed Tailwind CSS, you need to create a configuration file. Run the following command in your terminal:

csharp
Copy code
npx tailwindcss init
This command will create a default configuration file named tailwind.config.js.

Step 4: Compile CSS

Finally, you need to compile your CSS. To do this, run the following command:

arduino
Copy code
npx tailwindcss -o public/css/app.css
This command will compile your CSS and create a new file named app.css in the public/css/ directory of your Laravel project.

Creating a New Laravel Project with Version 8

If you're creating a new Laravel project with version 8, you can use the following command to create a new project:

bash
Copy code
composer create-project laravel/laravel example-app
This command will create a new Laravel project named example-app in your current directory.

Conclusion

Installing Tailwind CSS with Laravel can be a little tricky, especially when using older versions of Laravel. However, by following the steps outlined in this blog, you should be able to install Tailwind CSS with ease. If you encounter any issues, be sure to check the Tailwind CSS documentation or seek help from the Laravel community. Happy coding!
            </p>
            <a href="/" class="bg-gray-700 text-gray-100 py-4 pc-5 rounded-lg font-bold uppercase text-lg place-self-start">Read more </a>

        </span>
    </div>
  </div>

@endsection
  
    
    
    
