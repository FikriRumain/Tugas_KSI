<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       



    <!-- Sidebar -->
    <div class="flex h-screen">
       
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Welcome to my situs</h1>
                <button class="bg-blue-800 text-white py-2 px-4 rounded hover:bg-blue-700">User</button>
            </div>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-5 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-3">Total Sales</h3>
                    <p class="text-3xl font-bold text-blue-800">$ 5,200</p>
                    <p class="text-gray-600">This month's sales</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-5 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-3">New Users</h3>
                    <p class="text-3xl font-bold text-green-600">350</p>
                    <p class="text-gray-600">Users registered this week</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-5 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-3">Orders</h3>
                    <p class="text-3xl font-bold text-orange-600">120</p>
                    <p class="text-gray-600">Total orders placed</p>
                </div>
            </div>

           
        </div>
    </div>

    
    </div>
</x-app-layout>
