<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body>
    <nav class="p-2 py-4 flex h-24 items-center ">
        <img src="{{asset("storage/images/MO-logo.png")}}" alt="" class="h-full">
        <h3 class="mx-auto">Modakirat</h3>
    </nav>
    <div class="container mx-auto flex">
        {{-- left --}}
        <div class="w-3/4">
            @yield('content')
        </div>
        {{-- right --}}
        <div class="w-1/4 bg-gray-400 text-white p-4">
            <ul>
                <a class="button"  href=""><li>1st year</li></a>
                <div class="units px-4  overflow-hidden" style="max-height: 0px;">
                    <ul>
                        <li>ethics in business</li>
                        <li>ethics in business</li>
                        <li>ethics in business</li>
                    </ul>
                </div>
                <a class="button" href=""><li>2nd year</li></a>
                <div class="units px-4  overflow-hidden" style="max-height: 0px;">
                    <ul>
                        <li>ethics in business</li>
                        <li>ethics in business</li>
                        <li>ethics in business</li>
                    </ul>
                </div>
                <a class="button" href=""><li>3rd year</li></a>
                <div class="units px-4   overflow-hidden" style="max-height: 0px;">
                    <ul>
                        <li>ethics in business</li>
                        <li>ethics in business</li>
                        <li>ethics in business</li>
                    </ul>
                </div>
            </ul>

        </div>
    </div>
    <script>
        let buttons = document.getElementsByClassName("button")
        for (i=0;i<buttons.length;i++){
            buttons[i].addEventListener('click',function (e){
                e.preventDefault()
                let content = this.nextElementSibling;
                // console.log(content);
                if (content.style.maxHeight =="0px"){
                    content.style.maxHeight ="72px";
                } else {
                    content.style.maxHeight ="0px"
                }
            })
        }
    </script>
</body>
</html>
