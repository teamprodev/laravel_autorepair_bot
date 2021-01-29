<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>
<body>

{{-- Menu blade --}}
@include('front.partials.mobile_menu')

<!-- Fixed contact logos -->
@include('front.partials.fixed_contact_logos')

<!-- Header -->
@include('front.partials.header_with_image')


<div class="offer-container bg-white">

    @yield('content')

    <!-- footer -->
    <div class="bg-gray-900">
        <div class="mx-16 flex justify-center py-6 flex-wrap">
            <div class="ml-6 text-center mt-6">

                <a href="{{ route('website.index') }}"><img class="image-auto mb-4" src="data:image/png;base64,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" alt=""></a>

                <div class="flex items-center justify-center">
                    <p class="font-thin text-white flex"> <img class="w-6 h-6 mr-4" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJrSURBVHgBzZi7axRRGMXPrAgSDcQlnRG3ECzEN4iN2FgIRgQxjfj8C0Sw0CrB4AtFLMRCixQiWNgqWpiAYNBO0CqFk02IjWgUsfH15Uw2gRDu/e5j70z2B4eBufOde3Z297t3JkMkItLFw17qKHWA6qXqVI36Sn2iJqinWZa9RFUwWA81SM2KPzl1gepGmXCCg1RT4smpwyiDhbuWikGkhIbXJT3XkAJJe+eWcxHtQINt1H8plz1ahswRMOehAZ2ipdyjnlOfizJqA3WEOulR/45taB9CYbjTHp/+LrVG8eimrnj4HEIoLBp1mF4K8Lrs8BpDCCzY7DB8iEBY88jh2RNidkoxKv40DQTCmjr1S/E9Y6qrWfy2ws4z/qgnEQhrvvHwWrlku+mkLeBu2BlFPNqmoW46aQu4GnZmEc93ZczYDWwB/6IcViljxp5sCzgDO7sQz05l7IfppC3gR9g5hnj6lbGm6aQt4BvY6WNLOIFAWHMW+rI3jgCztaLvmL+E9MLiWmpK8ZtCKCy6ITq5T0hprUq5w+sWQmHReuqnw7gYH6Y2Gep9n13+SMTKtDjJbfHnLfWYGqHeU/8869R13bUfLLr7NNWFcihayw4ug03bBTWtemH9vInyuKqFm88AB9LaBn2g+pCWSWoLA/5GuzDkcUlPcC91hXwh6RhBamjaK2GvO2zMSGxb8Qh5XtrnHMqEE7ySeJ6gbDjJRon7qou1uIEq4EQDEs4AqoQT3gkIN4yq4aTrqHGPcBNYKaS1z9NeaE6LYadTdch+JeB+dAIMMmQIN4ROgoHuLwn3AJ2GtJ5jxiT0TZWDObRmV/4d2ZMAAAAAAElFTkSuQmCC" alt="">Работаем по Санкт петербургу <br>и Ленинградской области</p>
                </div>


                <p class="font-thin text-white mt-3 flex items-center"> <img class="w-6 h-6 mr-4" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJZSURBVHgBzZlNaBNBHMXfBltzrJpUEdFeRPCg0pNoQKtnr70IHlrowYqKh3oS9FpUKvh1Ea/x5te5ItajiHiU1mCxQhvwKgX7fP9OI2sTu9nJbLI/+GUnyc7kMbPs7EwieEBymw7H5YgclkdlUZZlQdblslyRs/KtnIuiiMgSBdst78ifTM+ifCiHEBo1Wpb35W+G4ZE8gBCooUuePZbEDzkBX1S5KO8xe24jLao0IF+ye7yW/WkCvmH3sQ7Z3k64GfaOmaRwE/THLvrLcnKj7MuF/4Ub6rDhyVhb1+mP3THKjbYKsYw35B74sxwrL8CfATnVeLMekO7uPob8cE2ZBq3Q6MEp5AvLdXG9oKSRjueQP67YiyWtyH3IHzZZVCzgGeSXEQt4GvnlkAUsIb+csICDyC9FC7gL+aVkAUOtE6JY+b2soXMKFnAFYTjcKGhxtAS3oOpkyjPqNs0tMBzn463TPYB8pT+frQc/IRxP4yHVkzW4nqzBjy8W8CPC0YfWIU/BL+QHG4YKsyHEcJ+0iv3MZllpjLYIOd9m3W9Wp6AhWNXxMbLhGZuH+yzaG+7q35Ia2cFwuwabWWXzcB9JqLPGzVsk+uAus+OfkCrvTTj/QVN/6sOSrDNbrsphWd3inCW5v+Wg64sx9p5xbAV7u3CfRhJ0m0Yv2H2qaBe6zaNX7B7PZR/SokrTzB67pIrwRZXH5XeGx+4YowgB3RT1hGFu5tbGLRl+LbQR1IZ9kemx+f6m3JnmNyN4QnvScPPqMXkQbvFl65s1uL8hfsl3cl7Oah6egwd/AHg8vFVNz8QLAAAAAElFTkSuQmCC" alt="">24 часа в сутки</p>

            </div>
            <div class="ml-6 text-center mt-6">
                <div class="mt-10 uppercase font-extrabold text-white mb-6">Адрес / Контакты</div>
                <ul class="">
                    <li class="text-white font-thin mt-2"><strong class="font-extrabold">Название:&nbsp;</strong>Автопомощь</li>
                    <li class="text-white font-thin mt-2"><strong class="font-extrabold">Адрес:&nbsp;</strong>Россия, г.Санкт-Петербург</li>
                    <li class="text-white font-thin mt-2"><strong class="font-extrabold">Телефон:&nbsp;</strong>
                        <a class="hover:text-orange-500" href="tel:+78126290378">+7(812)629-03-78,</a>
                        <a class="hover:text-orange-500 ml-2" href="tel:+79119220378">+7(911) 922-03-78</a></li>
                    <li class="text-white font-thin mt-2"><strong class="font-extrabold">E-mail:&nbsp;</strong>Автопомощь</li>
                </ul>
            </div>
            <div class="ml-6 text-center mt-6">
                <div class="mt-10 uppercase font-extrabold text-white mb-6">Полезные ссылки</div>
                <ul class="">
                    <li class="text-white mb-2 hover:text-orange-500"><a href="#">Главная</a></li>
                    <li class="text-white mb-2 hover:text-orange-500"><a href="#">Цены</a></li>
                    <li class="text-white mb-2 hover:text-orange-500"><a href="#">Отзывы</a></li>
                    <li class="text-white mb-2 hover:text-orange-500"><a href="#">Контакты</a></li>
                </ul>
                <div class="flex ml-4">
                    <a href="#" class="w-10 ml-2 mt-2">
                        <img src="data:image/png;base64,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" alt="">
                    </a>
                    <a href="#" class="w-10 ml-2 mt-2">
                        <img src="data:image/png;base64,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" alt="">
                    </a>
                    <a href="#" class="w-10 ml-2 mt-2">
                        <img src="data:image/png;base64,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" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/reviews.js') }}"></script>

</body>
</html>
