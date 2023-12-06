<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
    <div class="gap-y-10 fixed h-[100vh] w-[150px] p-2 bg-gray-900 ">
        <div class="rounded-2xl animation duration-150 ease-in hover:bg-green-500  hover:rounded-sm p-4 leading-7 ">
        <a href="Farmer_home.php" class="text-white font-semibold">Agriculutre</a>
        </div>
        <div class="rounded-2xl animation duration-150 ease-in hover:bg-green-500  hover:rounded-md p-4 leading-7 ">
        <a href="mens.php" class="text-white font-semibold">Construction</a>
        </div>
        <div class="rounded-2xl animation duration-150 ease-in hover:bg-green-500  hover:rounded-md p-4 leading-7 ">
        <a href="Womens.php" class="text-white font-semibold">Women's</a>
        </div>
        <!-- <div class="rounded-2xl animation duration-150 ease-in hover:bg-green-500  hover:rounded-md p-4 leading-7 ">
        <a href="" class="text-white font-semibold">Consutrution</a>
        </div> -->
        <div class="rounded-2xl animation duration-150 ease-in hover:bg-green-500  hover:rounded-md p-4 leading-7 ">
        <a href="" class="text-white font-semibold"><button id="signout">Sign Out</button></a>
        </div>
    </div>
</body>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js"
    import { getAuth,signOut } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyAjBud8l1x-QWHceiOd0jjQPg8IRp7HKPk",
        authDomain: "crp-labour.firebaseapp.com",
        projectId: "crp-labour",
        storageBucket: "crp-labour.appspot.com",
        messagingSenderId: "324630635344",
        appId: "1:324630635344:web:b67a40fdd6091806810255",
        measurementId: "G-5GQ8TJF8XH"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const auth=getAuth(app)
    document.getElementById("signout").addEventListener("click",(e)=>{
        e.preventDefault()
        console.log("hello")
        signOut(auth).then((res)=>{console.log("success")
            window.location.assign("http://localhost/labour/")
        }).catch((e)=>window.location.assign("http://localhost/labour/"))
    })
</script>
</html>