<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg width="1399" height="190" viewBox="0 0 1399 190" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <path d="M682.334 115.448C682.334 107.98 684.948 101.819 690.175 96.9649C695.403 92.1106 701.378 89.6834 708.099 89.6834C714.82 89.6834 720.764 92.1106 725.929 96.9649C731.095 101.757 733.677 107.887 733.677 115.355C733.677 120.521 732.339 125.126 729.663 129.171C726.987 133.154 723.72 136.11 719.861 138.04C716.065 139.907 712.113 140.84 708.006 140.84C703.898 140.84 699.915 139.844 696.056 137.853C692.198 135.799 688.931 132.812 686.255 128.891C683.641 124.908 682.334 120.427 682.334 115.448ZM701.844 122.17C703.836 123.663 705.858 124.41 707.912 124.41C709.966 124.41 712.02 123.632 714.073 122.076C716.127 120.521 717.154 118.218 717.154 115.168C717.154 112.119 716.189 109.847 714.26 108.354C712.331 106.86 710.246 106.113 708.006 106.113C705.765 106.113 703.68 106.891 701.751 108.447C699.822 110.003 698.857 112.306 698.857 115.355C698.857 118.342 699.853 120.614 701.844 122.17ZM767.061 90.8036C773.284 90.8036 778.45 93.1997 782.557 97.9917C786.727 102.722 788.812 108.509 788.812 115.355V131.785C788.812 133.216 788.749 134.306 788.625 135.052C788.563 135.737 788.314 136.515 787.878 137.386C787.007 139.066 784.58 139.907 780.597 139.907C776.178 139.907 773.626 138.755 772.942 136.453C772.568 135.395 772.382 133.808 772.382 131.692V115.262C772.382 112.71 771.635 110.719 770.141 109.287C768.71 107.856 766.75 107.14 764.26 107.14C761.833 107.14 759.841 107.887 758.286 109.381C756.792 110.874 756.045 112.835 756.045 115.262V131.785C756.045 133.216 755.983 134.306 755.858 135.052C755.796 135.737 755.516 136.515 755.018 137.386C754.209 139.066 751.813 139.907 747.83 139.907C743.909 139.907 741.513 139.066 740.642 137.386C740.207 136.453 739.926 135.644 739.802 134.959C739.74 134.212 739.709 133.123 739.709 131.692V98.6452C739.709 97.276 739.74 96.2492 739.802 95.5646C739.926 94.8178 740.238 94.0087 740.736 93.1374C741.607 91.5816 744.003 90.8036 747.924 90.8036C751.72 90.8036 754.054 91.5193 754.925 92.9507C755.547 94.0087 755.858 95.2845 755.858 96.7781C756.107 96.3425 756.668 95.7202 757.539 94.9111C758.41 94.1021 759.25 93.4486 760.059 92.9507C762.175 91.5193 764.509 90.8036 767.061 90.8036ZM870.436 85.3892C872.054 88.6877 872.863 92.3595 872.863 96.4047C872.863 100.45 872.054 104.122 870.436 107.42C868.818 110.656 866.733 113.239 864.181 115.168C859.016 119.151 853.664 121.143 848.125 121.143H836.456V131.692C836.456 133.123 836.394 134.212 836.269 134.959C836.207 135.644 835.927 136.453 835.429 137.386C834.558 139.066 832.131 139.907 828.148 139.907C823.791 139.907 821.24 138.755 820.493 136.453C820.119 135.395 819.933 133.777 819.933 131.598V79.7881C819.933 78.3567 819.964 77.2988 820.026 76.6142C820.151 75.8674 820.462 75.0272 820.96 74.0937C821.831 72.4133 824.258 71.5732 828.241 71.5732H848.218C853.695 71.5732 859.016 73.5647 864.181 77.5477C866.733 79.477 868.818 82.0908 870.436 85.3892ZM848.218 104.62C850.085 104.62 851.921 103.935 853.726 102.566C855.531 101.197 856.433 99.1431 856.433 96.4047C856.433 93.6664 855.531 91.6127 853.726 90.2435C851.921 88.8121 850.054 88.0964 848.125 88.0964H836.456V104.62H848.218ZM921.204 74.0937C921.702 73.1602 922.542 72.5067 923.725 72.1333C924.907 71.7599 926.401 71.5732 928.205 71.5732C930.01 71.5732 931.442 71.7288 932.5 72.0399C933.558 72.3511 934.367 72.7245 934.927 73.1602C935.487 73.5958 935.923 74.2181 936.234 75.0272C936.545 76.0852 936.7 77.7033 936.7 79.8815V131.692C936.7 133.123 936.638 134.212 936.514 134.959C936.452 135.644 936.171 136.453 935.674 137.386C934.802 139.066 932.375 139.907 928.392 139.907C924.036 139.907 921.484 138.755 920.737 136.453C920.364 135.395 920.177 133.777 920.177 131.598V112.648H895.439V131.692C895.439 133.123 895.377 134.212 895.252 134.959C895.19 135.644 894.91 136.453 894.412 137.386C893.541 139.066 891.114 139.907 887.131 139.907C882.774 139.907 880.223 138.755 879.476 136.453C879.102 135.395 878.916 133.777 878.916 131.598V79.7881C878.916 78.3567 878.947 77.2988 879.009 76.6142C879.134 75.8674 879.445 75.0272 879.943 74.0937C880.814 72.4133 883.241 71.5732 887.224 71.5732C891.58 71.5732 894.163 72.7245 894.972 75.0272C895.283 76.0852 895.439 77.7033 895.439 79.8815V98.9252H920.177V79.7881C920.177 78.3567 920.208 77.2988 920.271 76.6142C920.395 75.8674 920.706 75.0272 921.204 74.0937ZM994.692 85.3892C996.31 88.6877 997.119 92.3595 997.119 96.4047C997.119 100.45 996.31 104.122 994.692 107.42C993.074 110.656 990.989 113.239 988.438 115.168C983.272 119.151 977.92 121.143 972.381 121.143H960.712V131.692C960.712 133.123 960.65 134.212 960.526 134.959C960.463 135.644 960.183 136.453 959.685 137.386C958.814 139.066 956.387 139.907 952.404 139.907C948.048 139.907 945.496 138.755 944.749 136.453C944.376 135.395 944.189 133.777 944.189 131.598V79.7881C944.189 78.3567 944.22 77.2988 944.282 76.6142C944.407 75.8674 944.718 75.0272 945.216 74.0937C946.087 72.4133 948.514 71.5732 952.497 71.5732H972.475C977.951 71.5732 983.272 73.5647 988.438 77.5477C990.989 79.477 993.074 82.0908 994.692 85.3892ZM972.475 104.62C974.342 104.62 976.178 103.935 977.982 102.566C979.787 101.197 980.69 99.1431 980.69 96.4047C980.69 93.6664 979.787 91.6127 977.982 90.2435C976.178 88.8121 974.311 88.0964 972.381 88.0964H960.712V104.62H972.475ZM1004.2 130.385C1002.58 128.393 1001.77 126.62 1001.77 125.064C1001.77 123.446 1003.11 121.33 1005.79 118.716C1007.34 117.222 1008.99 116.475 1010.73 116.475C1012.48 116.475 1014.9 118.031 1018.01 121.143C1018.89 122.201 1020.13 123.228 1021.75 124.224C1023.37 125.157 1024.86 125.624 1026.23 125.624C1032.02 125.624 1034.91 123.259 1034.91 118.529C1034.91 117.098 1034.1 115.915 1032.48 114.982C1030.93 113.986 1028.97 113.27 1026.6 112.835C1024.24 112.399 1021.69 111.714 1018.95 110.781C1016.21 109.785 1013.66 108.634 1011.29 107.327C1008.93 106.02 1006.94 103.966 1005.32 101.166C1003.76 98.3029 1002.99 94.88 1002.99 90.897C1002.99 85.4204 1005.01 80.6594 1009.05 76.6142C1013.16 72.5067 1018.73 70.453 1025.76 70.453C1029.5 70.453 1032.89 70.9508 1035.94 71.9466C1039.05 72.8801 1041.2 73.8447 1042.38 74.8405L1044.71 76.6142C1046.64 78.419 1047.61 79.9437 1047.61 81.1884C1047.61 82.4331 1046.86 84.1446 1045.37 86.3228C1043.25 89.4345 1041.07 90.9903 1038.83 90.9903C1037.53 90.9903 1035.91 90.368 1033.98 89.1233C1033.79 88.9988 1033.42 88.6877 1032.86 88.1898C1032.36 87.6919 1031.89 87.2874 1031.46 86.9762C1030.15 86.1672 1028.47 85.7626 1026.42 85.7626C1024.43 85.7626 1022.74 86.2605 1021.38 87.2563C1020.07 88.1898 1019.42 89.5278 1019.42 91.2704C1019.42 92.9507 1020.19 94.3199 1021.75 95.3779C1023.37 96.4359 1025.36 97.1516 1027.72 97.525C1030.09 97.8984 1032.67 98.4896 1035.47 99.2986C1038.27 100.045 1040.85 100.979 1043.22 102.099C1045.58 103.219 1047.55 105.18 1049.1 107.98C1050.72 110.719 1051.53 114.11 1051.53 118.156C1051.53 122.201 1050.72 125.779 1049.1 128.891C1047.48 131.941 1045.37 134.306 1042.75 135.986C1037.71 139.284 1032.33 140.934 1026.6 140.934C1023.68 140.934 1020.91 140.591 1018.29 139.907C1015.68 139.16 1013.57 138.257 1011.95 137.199C1008.65 135.208 1006.35 133.279 1005.04 131.412L1004.2 130.385ZM1089.52 96.0313C1089.9 92.5462 1092.35 90.8036 1096.9 90.8036C1099.32 90.8036 1101.13 90.9903 1102.31 91.3637C1103.49 91.7372 1104.3 92.3906 1104.74 93.3241C1105.24 94.2577 1105.52 95.0978 1105.58 95.8446C1105.7 96.5292 1105.77 97.5872 1105.77 99.0186V131.692C1105.77 133.123 1105.7 134.212 1105.58 134.959C1105.52 135.644 1105.27 136.453 1104.83 137.386C1103.96 139.004 1101.81 139.813 1098.39 139.813C1095.03 139.813 1092.76 139.409 1091.58 138.6C1090.46 137.728 1089.8 136.484 1089.62 134.866C1087.31 138.164 1083.46 139.813 1078.04 139.813C1072.69 139.813 1067.71 137.355 1063.1 132.439C1058.5 127.522 1056.2 121.828 1056.2 115.355C1056.2 108.821 1058.5 103.126 1063.1 98.2718C1067.77 93.3553 1072.88 90.897 1078.41 90.897C1080.53 90.897 1082.46 91.2704 1084.2 92.0172C1085.94 92.764 1087.16 93.4797 1087.84 94.1643C1088.53 94.7866 1089.09 95.409 1089.52 96.0313ZM1072.53 115.448C1072.53 117.502 1073.34 119.369 1074.96 121.05C1076.58 122.668 1078.54 123.477 1080.84 123.477C1083.14 123.477 1085.04 122.637 1086.54 120.956C1088.09 119.276 1088.87 117.44 1088.87 115.448C1088.87 113.395 1088.12 111.497 1086.63 109.754C1085.2 108.011 1083.24 107.14 1080.75 107.14C1078.32 107.14 1076.33 108.011 1074.77 109.754C1073.28 111.497 1072.53 113.395 1072.53 115.448ZM1140.56 90.8036C1146.78 90.8036 1151.95 93.1997 1156.06 97.9917C1160.22 102.722 1162.31 108.509 1162.31 115.355V131.785C1162.31 133.216 1162.25 134.306 1162.12 135.052C1162.06 135.737 1161.81 136.515 1161.38 137.386C1160.5 139.066 1158.08 139.907 1154.09 139.907C1149.68 139.907 1147.12 138.755 1146.44 136.453C1146.07 135.395 1145.88 133.808 1145.88 131.692V115.262C1145.88 112.71 1145.13 110.719 1143.64 109.287C1142.21 107.856 1140.25 107.14 1137.76 107.14C1135.33 107.14 1133.34 107.887 1131.78 109.381C1130.29 110.874 1129.54 112.835 1129.54 115.262V131.785C1129.54 133.216 1129.48 134.306 1129.36 135.052C1129.29 135.737 1129.01 136.515 1128.52 137.386C1127.71 139.066 1125.31 139.907 1121.33 139.907C1117.41 139.907 1115.01 139.066 1114.14 137.386C1113.7 136.453 1113.42 135.644 1113.3 134.959C1113.24 134.212 1113.21 133.123 1113.21 131.692V98.6452C1113.21 97.276 1113.24 96.2492 1113.3 95.5646C1113.42 94.8178 1113.74 94.0087 1114.23 93.1374C1115.1 91.5816 1117.5 90.8036 1121.42 90.8036C1125.22 90.8036 1127.55 91.5193 1128.42 92.9507C1129.05 94.0087 1129.36 95.2845 1129.36 96.7781C1129.61 96.3425 1130.17 95.7202 1131.04 94.9111C1131.91 94.1021 1132.75 93.4486 1133.56 92.9507C1135.67 91.5193 1138.01 90.8036 1140.56 90.8036ZM1202.77 70.3596C1203.27 69.4261 1204.11 68.7726 1205.29 68.3992C1206.48 68.0258 1208.03 67.8391 1209.96 67.8391C1211.95 67.8391 1213.54 68.0258 1214.72 68.3992C1215.9 68.7726 1216.71 69.4261 1217.15 70.3596C1217.65 71.2931 1217.93 72.1333 1217.99 72.8801C1218.11 73.5647 1218.18 74.6227 1218.18 76.0541V131.785C1218.18 133.216 1218.11 134.306 1217.99 135.052C1217.93 135.737 1217.65 136.515 1217.15 137.386C1216.22 139.066 1213.57 139.907 1209.21 139.907C1204.92 139.907 1202.52 138.382 1202.03 135.332C1199.41 138.32 1195.77 139.813 1191.1 139.813C1185.5 139.813 1180.4 137.386 1175.79 132.532C1171.19 127.615 1168.89 121.921 1168.89 115.448C1168.89 108.914 1171.19 103.188 1175.79 98.2718C1180.46 93.3553 1185.56 90.897 1191.1 90.897C1195.71 90.897 1199.29 92.4529 1201.84 95.5646V75.9607C1201.84 74.5293 1201.87 73.4713 1201.93 72.7868C1202.06 72.0399 1202.34 71.2309 1202.77 70.3596ZM1187.65 121.05C1189.27 122.73 1191.23 123.57 1193.53 123.57C1195.83 123.57 1197.73 122.73 1199.23 121.05C1200.78 119.369 1201.56 117.533 1201.56 115.542C1201.56 113.488 1200.81 111.59 1199.32 109.847C1197.89 108.105 1195.93 107.234 1193.44 107.234C1190.95 107.234 1188.96 108.105 1187.46 109.847C1185.97 111.528 1185.22 113.395 1185.22 115.448C1185.22 117.502 1186.03 119.369 1187.65 121.05ZM1252.59 90.897C1258.13 90.897 1263.2 93.3553 1267.81 98.2718C1272.47 103.188 1274.81 108.914 1274.81 115.448C1274.81 121.921 1272.51 127.615 1267.9 132.532C1263.29 137.386 1258.35 139.813 1253.06 139.813C1247.77 139.813 1244 138.32 1241.76 135.332C1241.26 138.382 1238.59 139.907 1233.73 139.907C1229.81 139.907 1227.42 139.066 1226.55 137.386C1226.11 136.453 1225.83 135.644 1225.7 134.959C1225.64 134.212 1225.61 133.123 1225.61 131.692V75.9607C1225.61 74.5293 1225.64 73.4713 1225.7 72.7868C1225.83 72.0399 1226.11 71.2309 1226.55 70.3596C1227.42 68.6793 1229.84 67.8391 1233.83 67.8391C1237.75 67.8391 1240.11 68.6793 1240.92 70.3596C1241.42 71.2931 1241.7 72.1333 1241.76 72.8801C1241.89 73.5647 1241.95 74.6227 1241.95 76.0541V95.4712C1244.44 92.4217 1247.98 90.897 1252.59 90.897ZM1244.38 121.05C1245.93 122.73 1247.86 123.57 1250.16 123.57C1252.47 123.57 1254.43 122.73 1256.04 121.05C1257.66 119.369 1258.47 117.502 1258.47 115.448C1258.47 113.395 1257.72 111.528 1256.23 109.847C1254.74 108.105 1252.75 107.234 1250.26 107.234C1247.77 107.234 1245.78 108.105 1244.28 109.847C1242.85 111.59 1242.13 113.488 1242.13 115.542C1242.13 117.533 1242.88 119.369 1244.38 121.05ZM1279.46 115.448C1279.46 107.98 1282.07 101.819 1287.3 96.9649C1292.53 92.1106 1298.5 89.6834 1305.22 89.6834C1311.94 89.6834 1317.89 92.1106 1323.05 96.9649C1328.22 101.757 1330.8 107.887 1330.8 115.355C1330.8 120.521 1329.46 125.126 1326.79 129.171C1324.11 133.154 1320.84 136.11 1316.98 138.04C1313.19 139.907 1309.24 140.84 1305.13 140.84C1301.02 140.84 1297.04 139.844 1293.18 137.853C1289.32 135.799 1286.05 132.812 1283.38 128.891C1280.76 124.908 1279.46 120.427 1279.46 115.448ZM1298.97 122.17C1300.96 123.663 1302.98 124.41 1305.04 124.41C1307.09 124.41 1309.14 123.632 1311.2 122.076C1313.25 120.521 1314.28 118.218 1314.28 115.168C1314.28 112.119 1313.31 109.847 1311.38 108.354C1309.45 106.86 1307.37 106.113 1305.13 106.113C1302.89 106.113 1300.8 106.891 1298.87 108.447C1296.94 110.003 1295.98 112.306 1295.98 115.355C1295.98 118.342 1296.98 120.614 1298.97 122.17ZM1369.08 115.355L1379.44 125.811C1381.68 128.051 1382.8 129.98 1382.8 131.598C1382.8 133.154 1381.68 135.052 1379.44 137.293C1377.2 139.471 1375.31 140.56 1373.75 140.56C1372.19 140.56 1370.3 139.44 1368.05 137.199L1357.79 126.837L1347.42 137.199C1345.18 139.44 1343.29 140.56 1341.73 140.56C1340.24 140.56 1338.34 139.471 1336.04 137.293C1333.79 135.052 1332.67 133.154 1332.67 131.598C1332.67 129.98 1333.79 128.051 1336.04 125.811L1346.4 115.355L1336.04 104.9C1333.79 102.659 1332.67 100.761 1332.67 99.2053C1332.67 97.5872 1333.79 95.6579 1336.04 93.4175C1338.34 91.177 1340.24 90.0568 1341.73 90.0568C1343.29 90.0568 1345.18 91.177 1347.42 93.4175L1357.79 103.873L1368.05 93.4175C1370.3 91.177 1372.19 90.0568 1373.75 90.0568C1375.31 90.0568 1377.2 91.177 1379.44 93.4175C1381.68 95.6579 1382.8 97.5872 1382.8 99.2053C1382.8 100.761 1381.68 102.659 1379.44 104.9L1369.08 115.355Z" fill="#8C7F9D"/>
                        <path d="M248.032 43.676H231.566V143.906H278.96V129.158H248.032V43.676V43.676ZM337.091 86.202C334.99 82.861 332.008 80.237 328.142 78.327C324.277 76.418 320.386 75.463 316.473 75.463C311.411 75.463 306.783 76.394 302.583 78.255C298.382 80.116 294.779 82.672 291.772 85.916C288.765 89.162 286.425 92.909 284.756 97.155C283.084 101.404 282.25 105.868 282.25 110.544C282.25 115.318 283.084 119.804 284.756 124.003C286.425 128.205 288.765 131.928 291.772 135.172C294.779 138.418 298.381 140.971 302.583 142.832C306.782 144.693 311.411 145.624 316.473 145.624C320.386 145.624 324.277 144.669 328.142 142.761C332.008 140.853 334.991 138.228 337.091 134.886V143.907H352.698V77.182H337.091V86.202ZM335.66 118.705C334.705 121.283 333.369 123.526 331.651 125.435C329.932 127.345 327.856 128.872 325.422 130.017C322.987 131.163 320.289 131.735 317.331 131.735C314.371 131.735 311.698 131.163 309.312 130.017C306.925 128.871 304.874 127.345 303.156 125.435C301.437 123.526 300.124 121.283 299.218 118.705C298.309 116.128 297.858 113.407 297.858 110.544C297.858 107.68 298.309 104.959 299.218 102.382C300.123 99.805 301.437 97.563 303.156 95.653C304.874 93.745 306.926 92.216 309.312 91.071C311.698 89.925 314.371 89.353 317.331 89.353C320.289 89.353 322.987 89.925 325.422 91.071C327.856 92.217 329.932 93.745 331.651 95.653C333.369 97.563 334.705 99.805 335.66 102.382C336.613 104.959 337.092 107.68 337.092 110.544C337.091 113.407 336.613 116.128 335.66 118.705ZM463.954 86.202C461.853 82.861 458.871 80.237 455.005 78.327C451.14 76.418 447.249 75.463 443.336 75.463C438.274 75.463 433.646 76.394 429.446 78.255C425.245 80.116 421.642 82.672 418.635 85.916C415.628 89.162 413.288 92.909 411.619 97.155C409.947 101.404 409.113 105.868 409.113 110.544C409.113 115.318 409.947 119.804 411.619 124.003C413.288 128.205 415.628 131.928 418.635 135.172C421.642 138.418 425.244 140.971 429.446 142.832C433.645 144.693 438.274 145.624 443.336 145.624C447.249 145.624 451.14 144.669 455.005 142.761C458.871 140.853 461.854 138.228 463.954 134.886V143.907H479.561V77.182H463.954V86.202V86.202ZM462.522 118.705C461.567 121.283 460.231 123.526 458.513 125.435C456.794 127.345 454.718 128.872 452.284 130.017C449.849 131.163 447.151 131.735 444.193 131.735C441.233 131.735 438.56 131.163 436.174 130.017C433.787 128.871 431.736 127.345 430.018 125.435C428.299 123.526 426.986 121.283 426.08 118.705C425.171 116.128 424.72 113.407 424.72 110.544C424.72 107.68 425.171 104.959 426.08 102.382C426.985 99.805 428.299 97.563 430.018 95.653C431.736 93.745 433.788 92.216 436.174 91.071C438.56 89.925 441.233 89.353 444.193 89.353C447.151 89.353 449.849 89.925 452.284 91.071C454.718 92.217 456.794 93.745 458.513 95.653C460.231 97.563 461.567 99.805 462.522 102.382C463.475 104.959 463.954 107.68 463.954 110.544C463.954 113.407 463.475 116.128 462.522 118.705ZM650.772 43.676H635.166V143.906H650.772V43.676ZM365.013 143.906H380.62V92.538H407.396V77.182H365.013V143.906V143.906ZM542.133 77.182L522.517 128.278L502.901 77.182H487.093L512.71 143.906H532.324L557.941 77.182H542.133ZM591.98 75.466C572.868 75.466 557.741 91.172 557.741 110.545C557.741 131.961 572.382 145.624 593.98 145.624C606.068 145.624 613.786 141.002 623.214 130.936L612.67 122.778C612.664 122.786 604.712 133.227 592.838 133.227C579.036 133.227 573.226 122.1 573.226 116.343H625.003C627.723 94.3 613.231 75.466 591.98 75.466V75.466ZM573.267 104.746C573.387 103.462 575.184 87.862 591.856 87.862C608.527 87.862 610.553 103.46 610.669 104.746H573.267V104.746ZM184.068 42.892C184.044 42.804 183.995 42.727 183.964 42.642C183.906 42.485 183.856 42.326 183.773 42.182C183.717 42.085 183.636 42.006 183.57 41.917C183.483 41.8 183.409 41.675 183.305 41.572C183.22 41.486 183.111 41.424 183.015 41.349C182.906 41.264 182.809 41.167 182.688 41.097L182.686 41.096L182.684 41.094L147.036 20.57C146.585 20.3106 146.074 20.174 145.554 20.174C145.034 20.174 144.523 20.3106 144.072 20.57L108.425 41.092L108.423 41.094L108.421 41.095C108.3 41.165 108.202 41.262 108.094 41.347C107.998 41.422 107.889 41.485 107.804 41.57C107.701 41.673 107.626 41.798 107.539 41.915C107.473 42.004 107.392 42.084 107.336 42.18C107.253 42.324 107.203 42.484 107.145 42.64C107.114 42.725 107.065 42.802 107.041 42.89C106.974 43.139 106.938 43.4 106.938 43.666V82.645L77.232 99.748V23.493C77.2317 23.231 77.1971 22.9701 77.129 22.717C77.105 22.629 77.056 22.552 77.025 22.467C76.967 22.31 76.917 22.151 76.834 22.007C76.778 21.91 76.697 21.831 76.631 21.742C76.544 21.625 76.47 21.5 76.366 21.397C76.281 21.311 76.172 21.249 76.076 21.174C75.967 21.089 75.87 20.992 75.749 20.922L75.747 20.921L75.745 20.919L40.098 0.396021C39.6472 0.136559 39.1362 0 38.616 0C38.0959 0 37.5848 0.136559 37.134 0.396021L1.487 20.919L1.485 20.921L1.483 20.922C1.362 20.992 1.264 21.089 1.156 21.174C1.06 21.249 0.951 21.312 0.866 21.397C0.763 21.5 0.688 21.625 0.601 21.742C0.535 21.831 0.454 21.911 0.398 22.007C0.315 22.151 0.265 22.311 0.207 22.467C0.176 22.552 0.127 22.629 0.103 22.717C0.036 22.966 0 23.227 0 23.493V145.583C0 146.646 0.568 147.627 1.489 148.158L72.782 189.203C72.938 189.292 73.106 189.346 73.272 189.405C73.35 189.433 73.422 189.479 73.502 189.5C74.0014 189.632 74.5266 189.632 75.026 189.5C75.095 189.482 75.158 189.441 75.226 189.417C75.402 189.356 75.58 189.298 75.745 189.203L147.038 148.158C147.491 147.898 147.867 147.522 148.128 147.07C148.389 146.618 148.527 146.105 148.527 145.583V106.604L182.685 86.938C183.138 86.6775 183.514 86.3023 183.775 85.8503C184.036 85.3982 184.174 84.8852 184.174 84.363V43.666C184.172 43.4046 184.136 43.1445 184.068 42.892V42.892ZM74.255 142.167L44.607 125.388L75.743 107.462L75.744 107.461L109.908 87.792L139.582 104.876L117.81 117.304L74.255 142.167ZM142.584 65.908V99.749L130.109 92.567L112.878 82.647V48.806L125.353 55.988L142.584 65.908ZM145.554 26.573L175.247 43.668L145.554 60.763L115.861 43.668L145.554 26.573ZM54.06 113.089L41.585 120.271V45.733L58.816 35.813L71.291 28.631V103.168L54.06 113.089V113.089ZM38.614 6.39802L68.307 23.493L38.614 40.588L8.921 23.493L38.614 6.39802ZM5.938 28.632L18.413 35.814L35.644 45.734V125.41L35.645 125.415L35.644 125.421C35.644 125.535 35.676 125.642 35.689 125.754C35.706 125.9 35.71 126.048 35.748 126.188L35.75 126.195C35.782 126.312 35.844 126.417 35.89 126.529C35.941 126.653 35.978 126.784 36.046 126.9C36.0469 126.903 36.0483 126.906 36.05 126.909C36.111 127.014 36.199 127.1 36.272 127.197C36.353 127.302 36.421 127.417 36.516 127.511L36.524 127.521C36.608 127.604 36.714 127.663 36.808 127.736C36.914 127.819 37.01 127.914 37.128 127.983L37.141 127.988L37.152 127.996L71.291 147.317V181.492L5.939 143.867V28.632H5.938ZM142.584 143.867L77.232 181.492V147.31L125.631 119.682L142.584 110.005V143.867ZM178.23 82.647L148.524 99.749V65.908L165.755 55.988L178.23 48.806V82.647Z" fill="#EF3B2D"/>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>