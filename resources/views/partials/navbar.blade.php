<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="/"
                           class="@if(Request::path() == '/')bg-gray-900 @endif text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        <a href="/products"
                           class="@if(Request::path() == 'products')bg-gray-900 @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Products</a>
                        <a href="/customers"
                           class="@if(Request::path() == 'customers')bg-gray-900 @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Customers</a>
                        <a href="/settings"
                           class="@if(Request::path() == 'settings')bg-gray-900 @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Settings</a>
                        <a href="/test"
                           class="@if(Request::path() == 'test')bg-gray-900 @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Test</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
