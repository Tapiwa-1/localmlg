<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif
        }
    </style>
</head>
<body>
    <div class="py-12">
                
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" grid grid-cols-2 gap-20">
             
            </div>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" border="1">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            District
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Chieftainship
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Mutupo
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Incumbent
                        </th>
                        <th scope="col" class="py-3 px-6">
                            EC number
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Gender
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date Of Birth
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date Of Appointment
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($chiefs as $chief)
                    <tr class="bg-white border-b" style="border: 2px solid black">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                            {{$chief->name}}
                        </th>
                        <td class="py-4 px-6">
                            {{$chief->district}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->chieftainship}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->mutupo}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->incumbent}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->ecnumber}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->gender}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->dateofbirth}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->dateofappointment}}
                        </td>
                        <td class="py-4 px-6">
                            {{$chief->status}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        </div>
        </div>
    </div>
</body>
</html>