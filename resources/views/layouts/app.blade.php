<!DOCTYPE html>
<html lang="en">

<head>
    <x-layouts::app.head />
</head>

<body>

    <!-- ==========================================
         START: Sidebar Component
         Highly polished, dark-green sticky navigation
         ========================================== -->
    <x-layouts::app.sidebar />
    <!-- ==========================================
         END: Sidebar Component
         ========================================== -->


    <!-- ==========================================
         START: Main Content Area
         ========================================== -->
    <div class="main-wrapper">

        <!-- START: Top Navbar Component -->
        <x-layouts::app.navbar />
        <!-- END: Top Navbar Component -->

        {{ $slot ??= '' }}

        <!-- START: Footer Component -->
        <x-layouts::app.footer />
        <!-- END: Footer Component -->

    </div>
    <!-- ==========================================
         END: Main Content Area
         ========================================== -->

    <x-layouts::app.script />
</body>

</html>
