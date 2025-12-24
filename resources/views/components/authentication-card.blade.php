<div class="fixed inset-0 flex items-center justify-center bg-gray-100 bg-opacity-50 z-50">
    <div class="bg-white shadow-2xl rounded-3xl w-full max-w-md p-8 relative">
        
        <!-- Logo slot -->
        @isset($logo)
            <div class="flex justify-center mb-6">
                {{ $logo }}
            </div>
        @endisset

        <!-- Main content -->
        {{ $slot }}

        <!-- Footer slot -->
        @isset($footer)
            <div class="mt-6 text-center text-sm text-gray-600">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>
