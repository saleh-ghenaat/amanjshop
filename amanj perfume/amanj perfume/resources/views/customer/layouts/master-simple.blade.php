<!DOCTYPE html>
<html class="no-js" lang="Fa_IR" dir="rtl">
<head>
    @include('customer.layouts.head-tag')
    @yield('head-tag')
</head>
<body>


    <main id="main-body-one-col" class="main-body">

    @yield('content')

    </main>





    @include('customer.layouts.script')
    @yield('script')
    
</body>
</html>
