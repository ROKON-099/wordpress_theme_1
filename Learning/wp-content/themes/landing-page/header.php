<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script> </head>

<body <?php body_class('antialiased bg-cyan-50'); ?>>
<?php wp_body_open(); ?>

<header class="bg-cyan-50 border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <div class="flex-shrink-0 flex items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-0.5">
                    <span class="text-2xl font-[900] tracking-tight text-[#FF5C35]">Web</span>
                    <span class="text-2xl font-[900] tracking-tight text-slate-900">Learn</span>
                    <span class="h-2 w-2 bg-[#FF5C35] rounded-full mt-3 ml-1"></span>
                </a>
            </div>

            <nav class="hidden lg:flex items-center space-x-8">
                <a href="#" class="flex items-center text-slate-900 font-bold text-[15px] group">
                    <span class="h-1.5 w-1.5 bg-[#FF5C35] rounded-full mr-2"></span>
                    Home
                </a>
                <a href="#" class="text-slate-600 hover:text-[#FF5C35] font-semibold text-[15px] transition duration-200">Our Course</a>
                
                <div class="relative group cursor-pointer">
                    <button class="flex items-center text-slate-600 hover:text-[#FF5C35] font-semibold text-[15px] transition duration-200">
                        Pages
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute hidden group-hover:block top-full left-0 w-48 bg-white shadow-xl border border-gray-100 py-2 rounded-md transition-all">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">About Us</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Contact</a>
                    </div>
                </div>

                <a href="#" class="text-slate-600 hover:text-[#FF5C35] font-semibold text-[15px] transition duration-200">Mentors</a>
                <a href="#" class="text-slate-600 hover:text-[#FF5C35] font-semibold text-[15px] transition duration-200">Blog</a>
            </nav>

            <div class="hidden lg:flex items-center space-x-6">
                <button class="text-slate-900 hover:text-[#FF5C35] transition duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                
                <a href="#" class="bg-[#10847E] hover:bg-[#0d6e69] text-white px-8 py-3 rounded-lg font-bold text-[15px] transition transform active:scale-95 duration-200 shadow-sm">
                    Join Us
                </a>
            </div>

            <div class="lg:hidden flex items-center">
                <button id="mobile-menu-toggle" class="p-2 rounded-md text-slate-700 hover:bg-gray-100">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 transition-all duration-300">
        <div class="px-4 pt-4 pb-6 space-y-3">
            <a href="#" class="block px-3 py-2 text-base font-bold text-[#FF5C35]">Home</a>
            <a href="#" class="block px-3 py-2 text-base font-semibold text-slate-700">Our Course</a>
            <a href="#" class="block px-3 py-2 text-base font-semibold text-slate-700">Pages</a>
            <a href="#" class="block px-3 py-2 text-base font-semibold text-slate-700">Mentors</a>
            <a href="#" class="block px-3 py-2 text-base font-semibold text-slate-700 border-b pb-3">Blog</a>
            <div class="pt-2">
                <a href="#" class="block text-center bg-[#10847E] text-white py-3 rounded-lg font-bold">Join Us</a>
            </div>
        </div>
    </div>
</header>

<script>
  
    document.getElementById('mobile-menu-toggle').onclick = function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }
</script>